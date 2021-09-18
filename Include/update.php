<?php
    require_once 'db.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        
        
        $db = new database();
        $sql = "UPDATE all_quotes set quotes = ?, imagelink = ? where id = ?";
        $value = array($_POST['value'][1],$_POST['value'][2],$_POST['value'][0]);
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