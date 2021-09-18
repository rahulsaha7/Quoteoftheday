<?php

        require_once 'db.php';
        $sql = "SELECT count(quotes) as cd from all_quotes where 1";
        $db = new database();
        $db->query($sql);
        if($db->sql_query->rowCount() > 0){

                $result = $db->sql_query->fetchALL(PDO::FETCH_ASSOC);

        }
        $db->close_connection();

?>

<div class="row">
    

    <section class="col-12 mt-3 d-flex justify-content-center flex-column align-items-center">

                    <div class="total-quotes-add d-flex justify-content-center align-items-center">
                            <h4>
                               <?php echo $result[0]['cd'];?> 
                            </h4>
                    </div>
                       
                    <div class="mt-2">

                            <h4>Total quptes Added</h4>

                    </div>

    </section>

</div>