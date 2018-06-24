<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['name']) || empty($_SESSION['name'])){
  header("location: login.php");
  exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <title>LOGIN</title>
    </head>
    <style>
        .page-header {
            margin:10px;
            padding-top: 30px;
        }
        
    
        h1 {
            font-family:"Proxima Nova", sans-serif;
            font-size: 1.5em;
            text-align:center;
            letter-spacing: 0.025em;
        }
        
        p {
            font-family:"Proxima Nova", sans-serif;
            font-size: 1em;
            text-align: center;
        }
        
         a:hover {
            color:#F19EE9!important;
        }
        
    </style>
    
    
    <body>
<!--WHOLE SITE DIV --> <div>
        
        
        <div class="page-header">
        <h1>Hi, <b><?php echo $_SESSION['name']; ?></b>. Welcome to our site.</h1>
    </div>
    <p><a href="logout.php" class="btn btn-danger justify-content-center">Sign Out of Your Account</a></p>
    <p><a href="home.php" class="btn btn-success justify-content-center">Go To Home Page</a></p>
        
        
                <!--WHOLE SITE DIVE--></div>
        <script src="js/jquery.slim.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
    </body>
</html>