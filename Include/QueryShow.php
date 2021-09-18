<?php

    require_once 'db.php';
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $sql = "SELECT * FROM `all_quotes` ORDER by rand() limit 1";
            $db = new database();
            $db->query($sql);
            if($db->sql_query->rowCount() > 0){
                $result = $db->sql_query->fetchAll(PDO::FETCH_ASSOC);
                echo json_encode($result);
            }

            $db->close_connection();
        }

?>