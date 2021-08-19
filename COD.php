<?php
session_start();
require 'connection.php';
include('header.php');
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
unset($_SESSION["booking"]);
?>

<html>

  <head>
    <title> Booking | Paradise </title>

  <link rel="stylesheet" type = "text/css" href ="css/index.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
</head>

  <body id=whole>
   <div class="container">

            <h1 class="text-centerings" style="color: green;"><span class="glyphicon glyphicon-ok-circle"></span>Booking Successful.</h1>
          </div>
        </div>
        <br>

<h2 class="text-centers"> Thank you for booking at Paradise</h2>
</body>

</html>