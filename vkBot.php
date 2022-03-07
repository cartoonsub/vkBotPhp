<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once 'Src/VkBot.php';

$Parser = new VkBot;
$skip = (bool)($_GET['skip'] ?? false);
$groupName = $_GET['groupName'] ?? '';
$results = $Parser->run($skip, $groupName);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/script.js"></script>
</head>

<body>
    <div class="main">
        <div class="menu">
            <ul>
            <?php foreach ($results as $group => $items) : ?>
                <li><a href="#" class="groupLink" data-groupname="<?=$group;?>"><?=$group;?></a></li>
            <?php endforeach; ?>
            </ul>
        </div>

        <?php foreach ($results as $group => $items) : ?>
            <div class="group" id="<?=$group . 'byId'; ?>">
                <h2>Новости по группе <?= $group ?></h2>
                <?php foreach ($items as $item) : ?>
                    <div class="block">
                        <div class="date"><?= $item['date']; ?></div>
                        <p><?= $item['text']; ?></p>
                        <p><a href="<?= $item['wallLink']; ?>" target="new">Ссылка на стену</a></p>
                        <div class="gallery">
                            <?php
                            if (!empty($item['attachments']['photo'])) :
                                foreach ($item['attachments']['photo'] as $image) : ?>
                                    <div class="picture">
                                        <img src="<?php /* $image; */ ?>" alt="">
                                    </div>
                            <?php endforeach;
                            endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>

        
<?php

// echo '<pre>';
// var_export($results);
// echo '</pre>';

?>