<?php
session_start();
require 'connection.php';
include('header.php');
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
?>

<html>

  <head>
    <title> booking | Paradise </title>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
  </head>
  <body>

<?php
if(!empty($_SESSION["booking"]))
{
  ?>
  <div class="container">
      <div class="jumbotron">
        <h1>Your Bookings</h1>
      </div>
      
    </div>
    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;" >
<table class="table table-striped">
  <thead class="thead-dark">
<tr>
<th width="40%">Room</th>
<th width="10%">Number of Rooms</th>
<th width="20%">Price </th>
<th width="15%">Total</th>
</tr>
</thead>


<?php  

$total = 0;
foreach($_SESSION["booking"] as $keys => $values)
{
?>
<tr>
<td><?php echo $values["food_name"]; ?></td>
<td><?php echo $values["food_quantity"] ?></td>
<td>&#8377; <?php echo $values["food_price"]; ?></td>
<td>&#8377; <?php echo number_format($values["food_quantity"] * $values["food_price"], 2); ?></td>
</tr>
<?php 
$total = $total + ($values["food_quantity"] * $values["food_price"]);
}
?>
<tr>
<td colspan="3" align="right">Total</td>
<td align="right">&#8377; <?php echo number_format($total, 2); ?></td>
<td></td>
</tr>
</table>
<?php
  echo '<a href="booking.php?action=empty"><button class="btn btn-danger col-lg-3"><span class="glyphicon glyphicon-trash"></span> Cancel</button></a>
  <a href="payment.php"><button class="btn btn-success pull-right col-lg-3"><span class="glyphicon glyphicon-share-alt"></span>Proceed Payment</button></a>';
?>
</div>
<br><br><br><br><br><br><br>
<?php
}
if(empty($_SESSION["booking"]))
{
  ?>
  <div class="container">
      <div class="jumbotron">
        <h1>Room added for booking</h1>
        <p><a href="booking.php">payment</a></p>  
      </div>
      
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
}
?>


<?php


if(isset($_POST["add"]))
{
if(isset($_SESSION["booking"]))
{
$item_array_id = array_column($_SESSION["booking"], "food_id");
if(!in_array($_GET["id"], $item_array_id))
{
$count = count($_SESSION["booking"]);

$item_array = array(
'food_id' => $_GET["id"],
'food_name' => $_POST["hidden_name"],
'food_price' => $_POST["hidden_price"],
'R_ID' => $_POST["hidden_RID"],
'food_quantity' => $_POST["quantity"]
);
$_SESSION["booking"][$count] = $item_array;
echo '<script>window.location="booking.php"</script>';
}
else
{
echo '<script>alert("already booked")</script>';
echo '<script>window.location="booking.php"</script>';
}
}
else
{
$item_array = array(
'food_id' => $_GET["id"],
'food_name' => $_POST["hidden_name"],
'food_price' => $_POST["hidden_price"],
'R_ID' => $_POST["hidden_RID"],
'food_quantity' => $_POST["quantity"]
);
$_SESSION["booking"][0] = $item_array;
}
}


if(isset($_GET["action"]))
{
if($_GET["action"] == "empty")
{
foreach($_SESSION["booking"] as $keys => $values)
{

unset($_SESSION["booking"]);
echo '<script>alert("CANCEL BOOKING..?")</script>';
echo '<script>window.location="cancel.php"</script>';

}
}
}


?>
<?php

?>

    </body>
</html>