<?php  

  require_once 'Include/db.php';

  session_start();
 
  if(isset($_SESSION['admin-user'])){
      $result = $_SESSION['admin-user'];
  }
  else
    header("Location: http://localhost/Task-Organizein/admin-login.php");

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
         
         crossorigin="anonymous"></script>
      <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
      <!--<script src="jquery-3.5.1.js"></script>-->
    <title>Admin panel</title>

    <style>
    /* *{
      box-sizing:border-box;
      margin:0px !important;
      padding:0px !important;
    }       */

    




    

       

    </style>
   
</head>
<body>
        
  <div class="container-fluid">
    
  <div class="row">
            <div class="col-12 header d-flex justify-content-center align-items-center">
               <h3 class="">Quotes Of the Day</h2>
            </div>
            <div class="col-12 main">

                <section class="row">

                        <div class="col-12 sidebar d-flex justify-content-center align-items-center">

                              <nav>
                                  <ul>
                                  
                                        <li class="p-3">
                                            <a class="menu-links" href="admin.php">Dashboard</a>
                                        </li >
                                        <li class="mt-2 p-3"><a class="menu-links" href="admin.php?category=view">View All Quotes</a></li>
                                        <li class="mt-2 p-3"> <a class="menu-links" href="admin.php?category=add"> Add new Quotes</a> </li>

                                  </ul>
                              </nav>

                        </div>

                        <div class="col-9 middile-content">

                        <section class="col-12">
            <h4 class="text-center">Welcome Admin</h4>
           <p class="text-end" > <a href="admin.php?category=add" >Add new Quotes Now</a></p>
    </section>
                        
                        <?php 
        if(isset($_GET['category'])){
          $page2=$_GET['category'];
          $php = ".php";

          $page2 = $page2."".$php;
         
          include_once 'Include/'.$page2;
        }
        else{
          include_once 'Include/dashboard.php';
        }

        ?>

                        </div>

                </section>

            </div>
  </div>


  </div>

  

  
        

</body>

<script src="Assets/js/jquery-3.5.1.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="Assets/js/Main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</html>