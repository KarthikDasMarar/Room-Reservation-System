    <?php
include('login_m.php'); 
include('header.php');

if(isset($_SESSION['login_user1'])){
header("location: myrestaurant.php"); 
}
?>

<!DOCTYPE html>
<html>

  <head>
    <title> Manager Login | Paradise </title>
    <link rel="stylesheet" type = "text/css" href ="css/index.css">
  <link rel="stylesheet" type = "text/css" href ="css/managerlogin.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
  </head>


  <body id=wholebody>
<div class="row">
  <div class="col-lg-6">
      <div class="form-area">
        <form method="post" action="">
        <br style="clear: both">
          <h3 class="guesthead"> MANAGER LOGIN</h3>
<div class="loginbox">
            <div class="input-group">
              <div class="col-lg-12">
              <input class="form-control" id="username" type="text" name="username" placeholder="Username" required="" autofocus=""></div>
              <div class="col-lg-12">
               <div class="input-groups">
              <input class="form-control" id="password" type="password" name="password" placeholder="Password" required=""autofocus="">
            </div></div>
              

          <input type="submit" name="submit" type="button" id="submit" name="submit" class="btn btn-primary button"/>   
          </div></div></form></div></div>
        </form>
        <div class="col">
          <img src="images/paradise.jpg">
      </div>

    </body>
</html>