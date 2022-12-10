<?php

require_once 'Src/VkBot.php';

$param = [
    'skip'  => (bool)($_GET['skip'] ?? true),
    'group' => $_GET['group'] ?? '',
    'deep'  => (int)($_GET['deep'] ?? 40),
];

$Parser = new VkBot;
$results = $Parser->run($param);
header('Content-Type: application/json; charset=utf-8');
echo $results;