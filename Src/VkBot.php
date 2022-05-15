<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('max_execution_time', '300');

require_once 'vendor/autoload.php';
require_once 'Src/Parser.php';

use Src\Parser;
use GuzzleHttp\Client;

class VkBot extends Parser
{
    private $errors = [];
    private $serverPath = '/home/u/udo11ru/cartoonsubcom/public_html/vkbot/';
    private $listGroupsFile = 'configs/groupsList.json';
    private $config = 'configs/config.json';
    private $tempFolder = 'temp/';
    private $fileFolder = 'files/';
    private $jsonFile = 'srcData/allData.json';
    private $history = [];

    public function run(array $param): string
    {
        $results = '';
        $skip = (bool)($param['skip'] ?? false);
        $date = $param['date'] ?? '';
        $needGroup = (string)$param['group'] ?? '';
        $deep = (int)($param['deep'] ?? 40);

        $historyData = $this->getHistory();
        if ($skip === true) {
            $results = $this->prepareJson($historyData);
            return $results;
        }

        if (empty($data)) {
            $this->errors[] = 'Нет данных из предыдущих запусков';
        }

        $srcData = $this->getResults($needGroup, $deep);
        if (empty($srcData)) {
            $this->errors[] = 'Не найдено новых новостей';
            $results = $this->prepareJson($historyData);
            return $results;
        }
        
        $rawResults = $this->addNewDataToJson($srcData, $historyData);
        $results = $this->prepareResults($rawResults);
        return $results;
    }

    private function prepareJson(string $dataJson): string
    {
        $results = [];
        $data = json_decode($dataJson, true);
        $results['data'] = $data;
        return json_encode($results);
    }

    private function prepareResults(array $data): string
    {
        $data['data'] = $data;
        $date['errors'] = $this->errors;

        return json_encode($data);
    }

    private function getResults(string $needGroup, int $deep): array
    {
        $results = [];

        $groups = $this->getGroupsList($needGroup);
        if (empty($groups)) {
            $this->errors[] = 'Не найден или пустой файл со списком групп';
            return $results;
        }

        $config = json_decode(file_get_contents($this->serverPath . $this->config), true); 
        $token = $config['token'] ?? '';
        if (empty($token)) {
            $this->errors[] = 'Не найден токен';
            return $results;
        }
        
        $results = $this->getDataFromGroups($groups, $token, $deep);
        return $results;
    }

    private function getDataFromGroups(array $groups, string $token, int $deep): array
    {
        $client = new Client();
        $results = [];
        foreach ($groups as $groupName) {
            sleep(mt_rand(1, 3));

            $content = '';
            $url = "https://api.vk.com/method/wall.get?domain=$groupName&count=$deep&access_token=$token&v=5.81";
            try {
                $response = $client->get($url);
                $content = (string)($response->getBody());
            } catch (Throwable $E) {
                $this->errors[] = 'Не удалось подключиться для группы: ' . $groupName . ' => ' . $E->getMessage();
                continue;
            }

            if (empty($content)) {
                $this->errors[] = 'Не удалось подключиться для группы: ' . $groupName;
                continue;
            }

            $content = json_decode($content, true);
            if (empty($content['response']['items'])) {
                $this->errors[] = 'Нет данных для группы: ' . $groupName;
                continue;
            }

            foreach ($content['response']['items'] as $items) {
                $id = $items['id'];
                $uniqId = $groupName . '_' . $id;

                if (!empty($this->history[$groupName][$uniqId])) {
                    continue;
                }

                $ownerId = $items['owner_id'];
                $text = $items['text'] ?? '';
                $date = '';
                $dateRaw = $items['date'] ?? '';
                if (empty($dateRaw) || !is_numeric($dateRaw)) {
                    $date = date('Y-m-d');
                } else {
                    $date = date('Y-m-d', $dateRaw);
                }

                $attachments = $this->attachmentsProcessing($items['attachments'] ?? [], $uniqId, $groupName, $text);
                $results[$groupName][$uniqId] = [
                    'groupName'   => $groupName,
                    'uniqId'      => $uniqId,
                    'text'        => $text,
                    'date'        => $date,
                    'attachments' => $attachments,
                    'owner_id'    => $ownerId,
                    'wallLink'    => 'https://vk.com/' .$groupName . '?w=wall' . $ownerId . '_' . $id,
                ];
            }
        }

        return $results;
    }

    private function attachmentsProcessing(array $attachments, string $uniqId, string $groupName, string $text): array
    {
        $results = [];
        if (empty($attachments)) {
            return $results;
        }

        foreach ($attachments as $attachment) {
            if ($attachment['type'] === 'photo') {
                $photo = $this->getPhoto($attachment['photo']['sizes'], $uniqId, $groupName);
                if (!empty($photo)) {
                    $results['photo'][] = $photo;
                }
            }

            if ($attachment['type'] === 'video') {
                $typeVideo = $attachment['video']['platform'] ?? '';
                $id = $attachment['video']['id'] ?? time();
                if ($typeVideo === 'YouTube') {
                    $youtubeData = $this->getVideoYoutube($attachment['video'], $text, $groupName);
                    if (!empty($youtubeData)) {
                        $results['video'][$id] = $youtubeData;
                    }
                }
            }
        }

        return $results;
    }
    
    private function getPhoto(array $photoLinks, string $uniqId, string $groupName): string
    {
        $image = '';
        $size = 0;
        $url = '';
        foreach ($photoLinks as $items) {
            $curSize = (int)$items['width'];
            if ($curSize > $size) {
                $size = $curSize;
                $url = $items['url'];
            }
        }

        if (empty($url)) {
            return $image;
        }

        $image = $this->downloadFile($url, $uniqId, $groupName);
        return $image;
    }

    public function downloadFile(string $url, string $uniqId, string $groupName): string
    {
        $readyFile = '';
        $fileNameRaw = pathinfo($url, PATHINFO_BASENAME);
        $nameData = explode('?', $fileNameRaw);

        $fileName = $nameData[0] ?? $fileNameRaw;
        $fileName = $uniqId . '_' . $fileName;
        $tmpFile = $this->getTempFile($fileName);
        if (empty($tmpFile)) {
            $this->errors[] = 'Не создан временный файл: ' . $uniqId . ' => ' . $url;
            return $readyFile;
        }
        
        $content = '';
        $client = new Client();
        try {
            $response = $client->get($url);
            $content = (string)($response->getBody());
        } catch (Throwable $E) {
            $this->errors[] = "Не удалось скачать фото для группы:  $groupName url: $url => " . $E->getMessage();
            return $readyFile;
        }

        if (empty($content)) {
            $this->errors[] = 'Не скачен файл: ' . $uniqId . ' => ' . $url;
            return $readyFile;
        }
        
        file_put_contents($tmpFile, $content);
        clearstatcache();
        if (empty(filesize($tmpFile))) {
            $this->errors[] = 'Не скачен файл, пустой: ' . $uniqId . ' => ' . $url . ' => ' . $tmpFile;
            unlink($tmpFile);
            return $readyFile;
        }

        if (!is_dir($this->serverPath . $this->fileFolder . $groupName . '/')) {
            mkdir($this->serverPath . $this->fileFolder . $groupName . '/');
        }
        
        copy($tmpFile, $this->serverPath . $this->fileFolder . $groupName . '/' . $fileName);
        unlink($tmpFile);

        if (empty(filesize($this->serverPath . $this->fileFolder . $groupName . '/' . $fileName))) {
            $this->errors[] = 'Не удалось скопировать файл в финальную папку: ' . $url;
            unlink($this->serverPath . $this->fileFolder . $groupName . '/' . $fileName);
            return $readyFile;
        }

        $readyFile = $this->fileFolder . $groupName . '/' . $fileName;
        return $readyFile;
    }

    private function getTempFile($fileName = ''): string
    {
        if (empty($fileName)) {
            sleep(1);
            $fileName = time();
        }

        $tempFile = $this->serverPath . $this->tempFolder . $fileName;
        file_put_contents($tempFile, '');
        if (!is_file($tempFile)) {
            $tempFile = '';
        }

        return $tempFile;
    }

    private function getVideoYoutube(array $dataVideo, string $title, string $groupName): array
    {
        $results = [];
        $pattern = '~https://youtu.be/(\w+)|https://[w]+\.youtube\.com/watch\?v=(\w+)|https://www.youtube.com/(\w+)~';

        if (preg_match($pattern, $title, $matches)) {
            $results['idVideo'] = $matches[1];
            $results['url'] = 'https://youtu.be/' . $matches[1]; 
        }

        $results['description'] = $dataVideo['description'] ?? '';
        $results['title'] = $dataVideo['title'] ?? '';
        //https://vk.com/syktyvenglish?z=video-150625730_456239017
        $results['vkLink'] = 'https://vk.com/' . $groupName . '?z=video' . $dataVideo['owner_id'] . '_' . $dataVideo['id'];

        $max = [
            'width' => 0,
            'field' => '',
        ];
        foreach ($dataVideo as $field => $value) {
            if (stripos($field, 'photo') === false) {
                continue;
            }

            if (!preg_match('/photo_(\d+)/', $field, $matches)) {
                continue;
            }

            if ($max['width'] > $matches[1]) {
                continue;
            }

            $max['width'] = $matches[1];
            $max['field'] = $field;
        }

        if (empty($max['field'])) {
            return $results;
        }

        $image = $this->downloadFile($dataVideo[$max['field']], $dataVideo['id'], $groupName);
        if (!empty($image)) {
            $results['image'] = $image;
        }

        return $results;
    }

    public function getGroupsList($groupName = ''): array
    {
        $results = [];
        if (empty($groupName)) {
            $list = json_decode(file_get_contents($this->serverPath . $this->listGroupsFile), true);
            if (empty($list)) {
                $this->errors[] = 'Не найден или пустой файл со списком групп';
                return $results;
            }

            return $list['groups'] ?? [];
        }

        $groupName = trim(stripslashes($groupName));
        $groupName = htmlentities($groupName);
        $results[] = $groupName;
        return $results;
    }

    private function addNewDataToJson(array $srcData, string $historyData): array
    {
        $history = json_decode($historyData, true);
        if (empty($history)) {
            $history = [];
        }

        foreach ($srcData as $groupName => $items) {
            foreach ($items as $uniqId => $item) {
                $history[$groupName][$uniqId] = $item;
            }
        }

        $allData = $this->sortData($history);
        file_put_contents($this->serverPath . $this->jsonFile, json_encode($allData));
        
        return $allData;
    }

    private function getHistory(): string
    {
        $results = '';
        if (!is_file($this->serverPath . $this->jsonFile)) {
            return $results;
        }

        $jsonData = file_get_contents($this->serverPath . $this->jsonFile);
        if (!empty($jsonData)) {
            $results = $jsonData;
            $data = json_decode($jsonData, true);
            foreach ($data as $groupName => $items) {
                foreach ($items as $item) {
                    $this->history[$groupName][$item['uniqId']] = $item['uniqId'];
                }
            }
        }

        return $results;
    }

    private function sortData(array $allData): array
    {
        function sortFunction($a, $b) {
            return strtotime($a['date']) - strtotime($b['date']);
        }

        foreach ($allData as $group => $items) {
            usort($items, "sortFunction");
            $allData[$group] = array_reverse($items);
        }

        return $allData;
    }
}