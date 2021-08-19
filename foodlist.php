
<?php
session_start();
include('header.php');

if(!isset($_SESSION['login_user2'])){
header("location: guestlogin.php"); 
}
?>
<html>
  <head>
    <title> Booking| Paradise </title>
  </head>
 
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
  <body>
<div class="jumbotron">
  <div class="container text-center">
    <h1>Paradise</h1>
    <p>feel heaven</p>      
  </div>
</div>
<div class="container" style="width:95%;">
  
<?php
require 'connection.php';
$conn = Connect();

$sql = "SELECT * FROM FOOD WHERE options = 'ENABLE' ORDER BY F_ID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row'>";

?>
<div class="col-md-4">
<form method="post" action="booking.php?action=add&id=<?php echo $row["F_ID"]; ?>">
<div class="mypanel" align="center";>
<img src="<?php echo $row["images_path"]; ?>" class="img-responsive">
<h4 class="text-dark"><?php echo $row["name"]; ?></h4>
<h5 class="text-info"><?php echo $row["description"]; ?></h5>
<h5 class="text-danger">&#8377; <?php echo $row["price"]; ?>/-</h5>
<h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
<input type="hidden" name="hidden_RID" value="<?php echo $row["R_ID"]; ?>">
<input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Book">
</div>
</form>
          
</div>
<?php
$count++;
if($count==3)
{
  echo "</div>";
  $count=1;
}
}
?>
</div>
<?php
}
else
{
  ?>
  <div class="container">
    <div class="jumbotron">
      <center>
         <label style="margin-left: 5px;color: red;"> <h1>No Rooms are available.</h1> </label>
      </center>
       
    </div>
  </div>
  <?php
}
?>
  
</body>
</html>