<?php
    require_once 'db.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $db = new database();
        $sql =  "DELETE FROM `all_quotes` WHERE `id` = ?";
        $value = array($_POST['value']);
        $db->query_value($sql,$value);
        if($db->sql_query->rowCount() > 0){
            echo "successfull";
        }
        else{
            echo "something went wrong";
        }
        $db->close_connection();
    }
?>