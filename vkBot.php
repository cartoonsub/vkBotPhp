<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once 'Src/VkBot.php';

$Parser = new VkBot;
$results = $Parser->run();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background: rgba(0, 0, 0, 0.8);
        }

        .main {
            display: block;
            margin: auto;
            width: 80%;
            background: white;
            margin-top: 90px;
        }

        .block {
            padding: 10px 30px;
            margin-bottom: 15px;
            border-bottom: 1px solid linear-gradient(white, black, white);
        }
    </style>
</head>
<body>
    <div class="main">
        <?php foreach ($results as $key => $item): ?>
        <div class="block">
            <p><?php echo$item['text'];?></p>
        </div>
        <?php endforeach;?>
    </div>
    <?php

    // echo '<pre>';
    // var_export($results);
    // echo '</pre>';

    ?>
</body>
</html>