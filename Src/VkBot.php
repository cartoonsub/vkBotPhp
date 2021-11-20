<?php

declare(strict_types=1);

require_once 'Src/Parser.php';

use Src\Parser;

class VkBot 
{
    private $errors = [];
    private $listGroupsFile = 'configs/groupsList.json';
    private $config = 'configs/config.json';
    
    public function run(): array
    {
        $groups = $this->getGroupsList();
        if (empty($groups)) {
            $this->errors[] = 'Не найден или пустой файл со списком групп';
            return $this->errors;
        }

        $config = json_decode(file_get_contents($this->config), true); 
        $token = $config['token'] ?? '';

        $this->getDataFromGroups($groups, $token);

        return [];
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
            $content = Parser::getPage(['url' => $url]);

            var_export($content);
        }

        return $results;
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

}