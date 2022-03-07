<?php

use Src\Parser;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once 'Src/VkBot.php';

class Api
{
    public function run() {
        if (empty($_GET)) {
            $results = [
                'answer' => false,
                'data'   => 'Пустой запрос',
            ];
        
            $this->response($results);
            exit();
        }

        $allowedField = [
            'getData',
            'group',
            'date',
            'skip',
        ];

        $param = [];
        foreach ($_GET as $field => $value) {
            if (empty($allowedField[$field])) {
                continue;
            }

            $param[$field] = $value;
        }

        if (empty($param)) {
            $results = [
                'answer' => false,
                'data'   => 'Нет актуальных параметров для запуска',
            ];
            $this->response($results);
            exit();
        }

        $Paser = new Parser();
    }

    protected function response($data, $status = 200) {
        header("HTTP/1.1 " . $status . " " . $this->requestStatus($status));
        echo  json_encode($data);
    }

    private function requestStatus(int $code) {
        $status = array(
            200 => 'OK',
            404 => 'Not Found',
            405 => 'Method Not Allowed',
            500 => 'Internal Server Error',
        );
        return ($status[$code])?$status[$code]:$status[500];
    }
}

$Api = new Api;
$Api->run();

