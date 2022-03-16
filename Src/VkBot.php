<?php

// declare(strict_types=1);
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('max_execution_time', '300');

require_once 'vendor/autoload.php';

require_once 'Src/Parser.php';

use Src\Parser;

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

    public function run(array $param)
    {
        $results = [];
        $getHistory = $param['skip'] ?? false;
        $returnType = $param['type'] ?? 'json';
        $needDate = $param['date'] ?? '';
        $needGroup = $param['group'] ?? '';

        $this->getHistory();
        if ($getHistory === true) {
            return ($returnType === 'json' ? json_encode($this->history) : $this->history);
        }

        $groups = $this->getGroupsList($needGroup);
        if (empty($groups)) {
            $this->errors[] = 'Не найден или пустой файл со списком групп';
            return ($returnType === 'json' ? json_encode($this->errors) : $this->errors);
        }

        $config = json_decode(file_get_contents($this->serverPath . $this->config), true); 
        $token = $config['token'] ?? '';
        if (empty($token)) {
            $this->errors[] = 'Не найден токен';
            return ($returnType === 'json' ? json_encode($this->errors) : $this->errors);
        }
        
        $srcData = $this->getDataFromGroups($groups, $token);
        if (empty($srcData)) {
            return ($returnType === 'json' ? json_encode($this->history) : $this->history);
        }
        
        $results = $this->addNewDataToJson($srcData);
        return ($returnType === 'json' ? json_encode($results) : $results);
    }

    private function getDataFromGroups(array $groups, string $token): array
    {
        $results = [];
        foreach ($groups as $groupName) {
            sleep(mt_rand(1, 3));

            $url = "https://api.vk.com/method/wall.get?domain=$groupName&count=40&access_token=$token&v=5.81";
            $data = $this->getPage($url);
            if (empty($data['content'])) {
                $this->errors[] = 'Не удалось подключиться для группы: ' . $groupName;
                $this->errors['info'][$groupName] = $data['info'] ?? '';
                continue;
            }

            $content = json_decode($data['content'], true);
            if (empty($content['response']['items'])) {
                $this->errors[] = 'Нет данных для группы: ' . $groupName;
                $this->errors['info'][$groupName] = $data['info'] ?? '';
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

                $attachments = $this->attachmentsProcessing($items['attachments'] ?? [], $uniqId, $groupName);
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

    private function attachmentsProcessing(array $attachments, string $uniqId, string $groupName): array
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
                if ($typeVideo === 'YouTube') {
                    $video = $this->getVideoYoutube($attachment['video']);
                    if (!empty($video)) {
                        $results['video'][] = 'https://vk.com/syktyvenglish?z=' . $video;
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
        
        // $filePointer = fopen($tmpFile, 'wb');
        
        // $curl = $this->curlSimpleInit();
        // curl_setopt_array(
        //     $curl,
        //     [
        //         CURLOPT_URL            => $url,
        //         CURLOPT_HEADER         => false,
        //         CURLOPT_FOLLOWLOCATION => true,
        //     ]
        // );

        // curl_setopt($curl, CURLOPT_FILE, $filePointer);

        // $curlResult = curl_exec($curl);
        // if ($curlResult === false) {
        //     $this->errors[] = 'Не скачен файл: ' . $uniqId . ' => ' . $url;
        // }

        // curl_close($this->curlSimpleInit());
        // fclose($filePointer);
        $data = $this->getPage($url);
        if (empty($data['content'])) {
            $this->errors[] = 'Не скачен файл: ' . $uniqId . ' => ' . $url;
            return $readyFile;
        }
        
        file_put_contents($tmpFile, $data['content']);
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

    private function getVideoYoutube(array $dataVideo): string
    {
        $videoFrame = '';
        //https://vk.com/syktyvenglish?z=video-150625730_456239017
        $videoFrame = 'video' . $dataVideo['owner_id'] . '_' . $dataVideo['id'];
        return $videoFrame;
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

    private function addNewDataToJson(array $srcData): array
    {
       $this->getHistory();
        foreach ($srcData as $groupName => $items) {
            foreach ($items as $uniqId => $item) {
                $this->history[$groupName][$uniqId] = $item;
            }
        }
        
        file_put_contents($this->serverPath . $this->jsonFile, json_encode($this->history));
        
        $allData = $this->sortData($this->history);
        return $allData;
    }

    private function getHistory(): void
    {
        if (!is_file($this->serverPath . $this->jsonFile)) {
            return;
        }

        $data = json_decode(file_get_contents($this->serverPath . $this->jsonFile), true);
        if (!empty($data)) {
            $this->history = $data;
        }
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