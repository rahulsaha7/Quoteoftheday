<?php
    require_once 'db.php';
?>


        

            <section class="show-project-list border-right-0 border-left-0 border-bottom-0 border border-primary w-100 overflow-scroll" >

            <table class="table table-bordered table-dark">

<thead>

<tr role=row class="table-header-row">

   
    <th>
       No
    </th>
    <th>
        quotes
    </th>
    <th>
       image link
    </th>
    <th>
        Manage
    </th>

</tr>

</thead>

<tbody class="ml-2 project-list-data">

<?php




    $sql = "SELECT * from  all_quotes where 1";


$db = new database();

$db->query($sql);



if($db->sql_query->rowCount() > 0){
    $result = $db->sql_query->fetchAll(PDO::FETCH_ASSOC);

   

    for ($i=0; $i < $db->sql_query->rowCount() ; $i++) { 

?>

<tr class="<?php echo'row-'.$i;?>">

        <td>
        
            <?php echo $result[$i]['id'];?>
        </td>
        <td>
        <?php echo $result[$i]['quotes'];?>
        </td>
        <td>
        <?php 
        if(!$result[$i]['imagelink']){
            echo "N/A";
        }else{
        echo $result[$i]['imagelink'];
        }
        ?>
        </td>
        <td class="d-flex flex-row">
            <button class="View  btn btn-outline-primary" id="<?php echo 'row-'.$i.'button';?>"><i class="far fa-trash-alt"></i>View</button>
            <button class="edit btn btn-outline-primary" id="<?php echo 'row-'.$i;?>" ><i class="far fa-edit"></i>Edit</button>
            <button class="delete delete-project btn btn-outline-primary" id="<?php echo 'row-'.$i.'button';?>"><i class="far fa-trash-alt"></i>Delete</button> 
            <button class="Cancel btn btn-outline-primary" style="display:none;" id="<?php echo 'row-'.$i.'button';?>"><i class="fas fa-slash"></i>Cancel</button>
        </td>

        

    </tr>

<?php
    }
}else{
    echo "No data available";
}
$db->close_connection();
?>

</tbody>

</table>



            
            </section>