<?php
include('session_m.php');
include('header.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Manager Login | Paradise </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/index.js"></script>

  <body>
<div class="container">
    <div class="jumbotron">
     <h1>Manager Page</h1>
    </div>
    </div>


<div class="col-lg-12 line"></div>
<div class="container">
    <div class="container">
    	<div class="col">
    		
    	</div>
    </div>

    
    	<div class="col-xs-3" style="text-align: center;">

    	<div class="list-group">
    		<a href="myrestaurant.php" class="list-group-item active">Paradise</a>
    		<a href="view_food_items.php" class="list-group-item ">View Guests</a>
    	</div>
    </div>
    <div class="col-lg-3">
    	<img style="border-radius:50%;"src="images/paradise.jpg">


  </body>
</html>