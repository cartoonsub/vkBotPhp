<?php 
define('DB_HOST','localhost');
define('DB_USER','udo11ru_laraNews');
define('DB_PASSWORD','zasada1342Z');
define('DB_NAME','udo11ru_laraNews');

class DbWriter
{
    function __construct()
    {
        $this->dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        mysqli_set_charset($this->dbc, "utf8");
    }

    private function getDbNews(): array
    {
        $results = [];
        $query = 'SELECT * FROM `vk_news`';
        $data = mysqli_query($this->dbc, $query);
        while ($row = mysqli_fetch_array($data)) {
            $results[$row['id_vk']] = [
                'group_vk'    => $row['group_vk'],
                'id_vk'       => $row['id_vk'],
                'text'        => $row['text'],
                'date'        => $row['date'],
                'attachments' => $row['attachments'],
                'owner_id'    => $row['owner_id'],
                'src_link'    => $row['src_link'],
            ];
        }
        
        return $results;
    }

    public function writeNews(array $news): void
    {
        $dbNews = $this->getDbNews();

        $flag = false;
        $update = "";
        $queryInsert = 'INSERT INTO vk_news '
               . '(group_vk, id_vk, text, date, attachments, owner_id, src_link) '
               . 'VALUES';

        foreach ($news as $group => $items) {
            foreach ($items as $item) {
                $groupName = $item['groupName'];
                $uniqId = $item['uniqId'];
                $text = mysqli_real_escape_string($this->dbc, $item['text']);
                $date = $item['date'];
                $attachments = json_encode($item['attachments']);
                $ownerId = $item['owner_id'];
                $wallLink = $item['wallLink'];
                
                if (empty($dbNews[$uniqId])) {
                    $queryInsert .= " ('$groupName', '$uniqId', '$text', '$date', '$attachments', '$ownerId', '$wallLink'),";
                    $flag = true;
                    continue;
                }
                
                $set = "SET `text` = '$text', `date` = '$date', `attachments` = '$attachments', "
                     . "`src_link` = '$wallLink', `owner_id` = '$ownerId', `group_vk` = '$groupName'";
                $update .= "UPDATE vk_news $set WHERE  `id_vk` = '$uniqId';";
            }
        }
        
        if ($flag === true) {
            $query = substr($queryInsert,0,-1);
            if (!mysqli_query($this->dbc, $query)) {
                echo '<p class="error">Ошибка работы БД №1</p>';
                echo $query;
                printf("Сообщение ошибки: %s\n", mysqli_error($this->dbc));
            }
        }
    }
}