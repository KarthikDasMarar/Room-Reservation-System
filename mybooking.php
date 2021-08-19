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
    <div class="container">
      <div class="jumbotron">
        <h1>Room Booked So far.</h1>
        <p><a href="foodlist.php">book a Room</a></p>  
      </div>
      
    </div>

<?php
// Storing Session
$user_check=$_SESSION['login_user1'];
$sql = "SELECT * FROM orders where username= 'asdf'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0)
{

  ?>

  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>  </th>
        <th> Room No. </th>
        <th> Room </th>
        <th> Price </th>
        <th> GuestName </th>
        <th> Check-in </th>
      </tr>
    </thead>

    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody>
    <tr>
      <td> <span class="glyphicon glyphicon-menu-right"></span> </td>
      <td><?php echo $row["F_ID"]; ?></td>
      <td><?php echo $row["foodname"]; ?></td>
      <td><?php echo $row["price"]; ?></td>
      <td><?php echo $row["username"]; ?></td>
      <td><?php echo $row["order_date"]; ?></td>
    </tr>
  </tbody>
  
  <?php } ?>
  </table>
    <br>


  <?php } else { ?>

  <h4><center>0 RESULTS</center> </h4>

  <?php } ?>

        </form>

        
        </div>
      
    </div>
</div>
<br>
<br>
<br>
<br>
    </body>
</html>