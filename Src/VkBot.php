<?php

declare(strict_types=1);

require_once 'Src/Parser.php';

use Src\Parser;

class VkBot extends Parser
{
    private $errors = [];
    private $listGroupsFile = 'configs/groupsList.json';
    private $config = 'configs/config.json';
    private $tempFolder = 'temp/';
    private $fileFolder = 'files/';
    private $jsonFile = 'srcData/allData.json';
    
    public function run($onlyJson = false): array
    {
        $results = [];
        if ($onlyJson === true) {
            return $this->addNewDataToJson([]);
        }

        $groups = $this->getGroupsList();
        if (empty($groups)) {
            $this->errors[] = 'Не найден или пустой файл со списком групп';
            return $this->errors;
        }

        $config = json_decode(file_get_contents($this->config), true); 
        $token = $config['token'] ?? '';

        $srcData = $this->getDataFromGroups($groups, $token);
        if (empty($srcData)) {
            return $results;
        }

        $results = $this->addNewDataToJson($srcData);
        return $results;
    }

    private function getDataFromGroups(array $groups, string $token): array
    {
        $results = [];
        if (empty($token)) {
            $this->errors[] = 'Не найден токен';
            return $results;
        }
        
        foreach ($groups as $groupName) {
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
                $uniqId = $groupName . $items['id'];
                $ownerId = $items['owner_id'];
                $text = $items['text'] ?? '';
                $date = '';
                $dateRaw = $items['date'] ?? '';
                if (empty($dateRaw) || !is_numeric($dateRaw)) {
                    $date = date('Y-m-d');
                } else {
                    $date = date('Y-m-d', $dateRaw);
                }
                
                $attachments = $this->attachmentsProcessing($items['attachments'] ?? []);
                $results[$groupName][$uniqId] = [
                    'uniqId'      => $uniqId,
                    'text'        => $text,
                    'date'        => $date,
                    'attachments' => $attachments,
                    'owner_id'    => $ownerId,
                    'wallLink'    => 'https://vk.com/animatron?w=wall' . $ownerId . '_' . $items['id'],
                    // 'url'         => $url,
                ]; 
            }
        }

        return $results;
    }

    private function attachmentsProcessing($attachments): array
    {
        $results = [];
        if (empty($attachments)) {
            return $results;
        }

        foreach ($attachments as $attachment) {
            sleep(mt_rand(1, 3));
            if ($attachment['type'] === 'photo') {
                $photo = $this->getPhoto($attachment['photo']['sizes']);
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
    
    private function getPhoto(array $photoLinks): string
    {
        $image = '';
        $size = 0;
        foreach ($photoLinks as $items) {
            $tempSize = (int)$items['height'] + (int)$items['width'];
            if ($tempSize > $size) {
                $size = $tempSize;
                $url = $items['url'];
            }
        }

        if (empty($url)) {
            return $image;
        }

        $image = $this->downloadFile($url);
        // echo '<div style="background: gray"><pre>';
        //     echo '<a href="' . $url . '">' . $image . '</a><br>';
        //     // print_r($url);
        // echo '</pre></div>';
        
        return $image;
    }

    public function downloadFile(string $url): string
    {
        $readyFile = '';
        $fileNameRaw = pathinfo($url, PATHINFO_BASENAME);
        $nameData = explode('?', $fileNameRaw);

        $fileName = $nameData[0] ?? $fileNameRaw;
        $tmpFile = $this->tempFolder . $fileName;
        file_put_contents($this->tempFolder . $fileName, '');
        if (!is_file($tmpFile)) {
            return $readyFile;
        }
        
        $filePointer = fopen($tmpFile, 'wb');
        
        $curl = $this->curlSimpleInit();
        curl_setopt_array(
            $curl,
            [
                CURLOPT_URL            => $url,
                CURLOPT_HEADER         => false,
                CURLOPT_FOLLOWLOCATION => true,
            ]
        );

        // // Переданы данные для POST (массив, строка)
        // if (is_array($usePost)) {
        //     $postData = http_build_query($usePost);  // Не работало автоматом для многомерных массивов
        // } else {
        //     $postData = $usePost;
        // }
        $postData = false;
        if ($postData) {
            curl_setopt_array(
                $this->curlSimpleInit(),
                [
                    CURLOPT_POST       => true,
                    CURLOPT_POSTFIELDS => $postData,
                ]
            );
        } else {
            curl_setopt($curl, CURLOPT_POST, false);
        }

        // $cookie = '';
        // // Переданы cookie (массивом)
        // if (is_array($useCookie)) {
        //     foreach ($useCookie as $key => $value) {
        //         $cookie .= "{$key}={$value};";
        //     }
        // } elseif ($useCookie !== '' && !is_bool($useCookie)) {  // Переданы cookie (строкой)
        //     $cookie = $useCookie;
        // }

        // // Передаём куки строкой
        // if ($cookie !== '') {
        //     curl_setopt($this->curlSimpleInit(), CURLOPT_COOKIE, $cookie);
        //     $this->Logger->info('CURLOPT_COOKIE: ' . $cookie, 'COOKIE');
        // }

        // // Автоматически вешаем куку через временный файл
        // if ($useCookie === true) {
        //     curl_setopt($this->curlSimpleInit(), CURLOPT_COOKIEFILE, '');
        // }

        // if ($this->debugMode) {
        //     if (is_null($this->cookieFileName)) {
        //         $this->cookieFileName = $this->FileHandler->getTempFileName('cookie');
        //     }

        //     curl_setopt($this->curlSimpleInit(), CURLOPT_COOKIEJAR, $this->cookieFileName);
        // }

        curl_setopt($curl, CURLOPT_FILE, $filePointer);

        $curlResult = curl_exec($curl);
        if ($curlResult === false) {
            // $this->Logger->error(
            //     'cURL error: ' . curl_error($this->curlSimpleInit()) . '. URL address: ' . $url,
            //     'CURL'
            // );
        }

        curl_close($this->curlSimpleInit());
        fclose($filePointer);

        // if (empty(filesize($tmpFile))) {
        //     $this->errors[] = 'Не удалось скачать файл: ' . $url;
        //     print_r(filesize($tmpFile));
        //     print_r(($tmpFile));
        //     return $readyFile;
        // }

        copy($tmpFile, $this->fileFolder . $fileName);
        unlink($tmpFile);

        //todo
        //решить вопрос почему для временного файла filesize возвращает ноль
        // это из-за fopen
        if (empty(filesize($this->fileFolder . $fileName))) {
            $this->errors[] = 'Не удалось скачать файл: ' . $url;
            unlink($this->fileFolder . $fileName);
            return $readyFile;
        }

        $readyFile = $this->fileFolder . $fileName;
        return $readyFile;
    }

    private function getVideoYoutube(array $dataVideo): string
    {
        $videoFrame = '';
        //https://vk.com/syktyvenglish?z=video-150625730_456239017
        $videoFrame = 'video' . $dataVideo['owner_id'] . '_' . $dataVideo['id'];
        return $videoFrame;
    }

    public function getGroupsList(): array
    {
        $results = [];
        if (empty($_GET['groupName'])) {
            $list = json_decode(file_get_contents($this->listGroupsFile), true);
            if (empty($list)) {
                $this->errors[] = 'Не найден или пустой файл со списком групп';
                return $results;
            }

            return $list['groups'] ?? [];
        }

        $results[] = trim($_GET['groupName']);//need defence? todo
        return $results;
    }

    private function addNewDataToJson(array $srcData): array
    {
        $allData = $this->getDataFromJson();
        foreach ($srcData as $groupName => $items) {
            foreach ($items as $uniqId => $item) {
                $allData[$groupName][$uniqId] = $item;
            }
        }
        
        file_put_contents($this->jsonFile, json_encode($allData));
        
        $allData = $this->sortData($allData);
        return $allData;
    }

    private function getDataFromJson(): array
    {
        $results = [];
        if (!is_file($this->jsonFile)) {
            return $results;
        }

        $data = json_decode(file_get_contents($this->jsonFile), true);
        if (!empty($data)) {
            $results = $data;
        }

        return $results;
    }

    private function sortData(array $allData): array
    {
        $results = [];
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