<?php


   


   require_once 'Include/db.php';
   $Err = "";

   session_start();
   if(isset($_SESSION['admin-user']))
   header("Location: http://localhost/Task-Organizein/admin.php");
else

   if($_SERVER['REQUEST_METHOD']=='POST'){
         extract($_POST);
   

   
   $db = new database();

   $sql = "SELECT  * from admin where user_id = '$username'";

   $db->query($sql);

   if($db->sql_query->rowCount() > 0 ){
      // if(!empty($_POST['remember'])){
         
      // }

      $result = $db->sql_query->fetchAll(PDO::FETCH_ASSOC);
      if($result[0]['pass'] == sha1($passw)){
      
      

      $user = $result[0]['user_id'];

      $det = array("user_id"=>"'$user'");

      $_SESSION['admin-user']=$det;


      if(isset($_SESSION['admin-user']))
         header("Location: http://localhost/Task-Organizein/admin.php");
      else
         $Err = "Something Went wrong";
      }
      else
         $Err = "Wrong Password";

   }
   else{
      $Err = "User Id is not valid";
   }

   $db->close_connection();

   }








   

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/Styles/style.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
      <script
         src="//code.jquery.com/jquery-3.5.1.min.js"
         integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
         crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <!--<script src="jquery-3.5.1.js"></script>-->
      <title>Admin Login</title>
      <style>
        
        .error{
           color:red;
        }
      </style>
   </head>
   <body>
      <div class="container-fluid" style="height:100vh;">
         <div class="row">
            <div class="col-12 header d-flex justify-content-center align-items-center">
               <h3 class="">Quotes Of the Day</h2>
            </div>
            <div class="col-12">
               <div class="admin-title d-flex justify-content-center align-items-center mt-4 mb-5">
                  <h2 class="text-center">
                     admin login
                  </h2>
               </div>
            </div>
            <div class="col-12">
               <div class="login-details d-flex justify-content-center align-items-center">
                  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                     <div class="form-group d-flex">
                        <label for="loginemail"><i class="fas fa-envelope-square"></i></label>
                        <input type="email" class="form-control" placeholder = "Enter Email" id="loginemail" name="username" required="" >
                     </div>
                     <div class="form-group d-flex mt-1">
                        <label for="exampleInputPassword1"><i class="fas fa-lock"></i></label>
                        <input type="password" class="form-control" placeholder = "Password" id="loginpassword" name="passw" required="">
                     </div>
                     


                     <div class="form-group form-check ms-5">
                        <p class="error text-justify"><span class="error"> <?php echo $Err;?></span></p>
                       
                     </div>
                     <div class="submit-button d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Login</button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-12">
               <div class="footer">
               </div>
            </div>
         </div>
      </div>
   </body>
</html>

