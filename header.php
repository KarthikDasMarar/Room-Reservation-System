
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Paradise</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>
<ul class="nav navbar-nav navbar-right">
  <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
  <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
  <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
</ul>

<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
  <ul class="nav navbar-nav navbar-right">
    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
    <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Rooms </a></li>
    <li><a href="mybooking.php"><span class="glyphicon glyphicon-shopping-cart"></span> My bookings 
    (<?php
      if(isset($_SESSION["cart"]))
      {
        $count = count($_SESSION["cart"]); 
        echo "$count"; 
      }
      else
        echo "0";
      ?>)
    </a></li>
    <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
  </ul>
<?php        
}
else
{
  ?>
  <ul class="nav navbar-nav navbar-right">
    <li><a href="signup.php" </span> Sign Up </a>
  
  </li>
  <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li> <a href="guestlogin.php"> User Login</a></li>
      <li> <a href="managerlogin.php"> Manager Login</a></li>
    </ul>
  </li>
</ul>

<?php
}
?>
        </div>

      </div>
    </nav>

    </header>
