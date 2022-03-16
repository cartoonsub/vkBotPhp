<?php

use Src\Parser;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once 'Src/VkBot.php';

final class Api
{
    public function run() {
        if (empty($_GET)) {
            $results = [
                'answer' => false,
                'error'  => 'Пустой запрос',
                'data'   => [],
            ];
        
            $this->response($results);
            exit();
        }

        $param = $this->getParam();
        if (empty($param)) {
            $results = [
                'answer' => false,
                'error'  => 'Нет актуальных параметров для запуска',
                'data'   => [],
            ];
            $this->response($results);
            exit();
        }

        $param['type'] = 'json';
        $Bot = new VkBot;
        $results = $Bot->run($param);
        print_r($results);
    }

    private function getParam(): array
    {
        $results = [];
        $allowedField = [
            'group' => 'cartoonsub',
            'date'  => '2022-01-01',
            'skip'  => true,
            'type'  => 'json'
        ];

        foreach ($_GET as $field => $value) {
            if (empty($allowedField[$field])) {
                continue;
            }

            if ($field === 'skip') {
                $results[$field] = (bool)$value;
                continue;
            }
            
            $results[$field] = $value;
        }

        return $results;
    }

    protected function response(array $data): void
    {
        echo json_encode($data);
    }
}

$Api = new Api;
$Api->run();

