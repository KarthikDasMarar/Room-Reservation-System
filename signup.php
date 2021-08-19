<?php 
include('header.php');
?>
<html>
<head>
    <title> Guest Signup | Paradise</title>
  </head>
<link rel="stylesheet" type = "text/css" href ="css/index.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body id=wholebody>


      <div class="col-md-offset-4">
        <div class="panel-heading"> <h1>Create Account</h1> </div>
        <div class="panel-body">
          
        <form role="form" action="guest_registered_success.php" method="POST">
         
          <div class="row">
          <div class="form-group col-xs-12">
           
            <div class="col-md-4">
              <input class="form-control" id="fullname" type="text" name="fullname" placeholder="Your Full Name" required="" autofocus="">
            
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
           
            <div class="col-md-4">
              <input class="form-control" id="username" type="text" name="username" placeholder="Your Username" required="">
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
          
            <div class="col-md-4">
              <input class="form-control" id="email" type="email" name="email" placeholder="Email" required="">
             
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
           
            <div class="col-md-4">
              <input class="form-control" id="contact" type="text" name="contact" placeholder="Contact" required="">
             
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
         
            <div class="col-md-4">
              <input class="form-control" id="address" type="text" name="address" placeholder="Address" required="">
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
           
            <div class="col-md-4">
              <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
      
              
            </div>           
          </div>
        </div>

        <div class="row">
       
              <button class="btn btn-primary" type="submit">Submit</button>
          </div>

        </div>
        <label style="margin-left: 5px;">or</label> <br>
       <label style="margin-left: 5px;"><a href="guestlogin.php">Have an account? Login.</a></label>

        </form>

        </div>
        
      </div>
      
    </div>
    </div>
    </body>
</html>