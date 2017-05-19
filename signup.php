<?php

session_start();
// connect to database
$db = mysqli_connect("localhost" , "root" , "" , "authentication");

if(isset($_POST['register_btn'])) {
	
	$first_name = mysql_real_escape_string($_POST['first_name']);
	$last_name = mysql_real_escape_string($_POST['last_name']);
	$username = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string ($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$password_confirmation = mysql_real_escape_string($_POST['password_confirmation']);
	
		
	$query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
	$result = mysqli_query($db , $query);
	
	
	
	if (mysqli_num_rows($result)){
		
		$_SESSION['message'] = "You already have an account";
	}else {
	 if(strlen(trim($password)) < 7)
   {
		$_SESSION['message'] = "Password must be at least 8characters";
		
   }
	else{
	if($password == $password_confirmation){
		//create user
		$password = md5($password); //hash password before storing
		$sql = "INSERT INTO users(firstname,lastname,username,email,password) VALUES ('$first_name','$last_name','$username','$email','$password')";
		mysqli_query($db,$sql);
		$_SESSION['message'] = "You are now logged in";
		$_SESSION['username'] = $username;
		header("location: home.php"); //redirect to home page
	}else{
		//failed
		$_SESSION['message'] = "The two passwords do not match";
	}
	}
	}
}
?>


<!DOCTYPE html>
<html lang="en">
  <img src="wallpaper1.jpg"/>
   <!-- my style sheet -->
   <link rel="stylesheet" type="text/css" href="style.css"/>
  <head>
    <!-- Bootstrap -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <!-- Bootstrap -->


    <title>Best Price</title>
    <link rel="shortcut icon" href="money.ico" />
   


    
  </head>

  <body>

   <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" id="logo" > Best Price</a>
    </div>
     
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="signup.php"><span  class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="signin.php"><span  class="glyphicon glyphicon-log-in"></span> Log in</a></li>
      </ul>
    </div>

  </div>
</nav>
     
<div class="container" id="signup-form">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
	
	<?php
	if(isset($_SESSION['message'])){
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
?>
	
      <form method = "post" action = "signup.php">
      <h2>Welcome to Best Price <small>Sign up</small></h2>
      <hr class="colorgraph">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
                        <input type="text" name="first_name" required id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="text" name="last_name" required id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
          </div>
        </div>
      </div>
      <div class="form-group">
        <input type="text" name="username" required id="user_name" class="form-control input-lg" placeholder="User Name" tabindex="3"> 
      </div>
      <div class="form-group">
        <input type="email" name="email" required id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="password" name="password" id="password" required class="form-control input-lg" placeholder="Password" tabindex="5">
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="password" name="password_confirmation" required id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-4 col-sm-3 col-md-3">
          <span class="button-checkbox">
            <button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
          </span>
        </div>
        <div class="col-xs-8 col-sm-9 col-md-9">
           By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> 
        </div>
      </div>
      
      <hr class="colorgraph">
      <div class="row">
        <div class="col-xs-12 col-md-6"><input type="submit" value="Register" name = "register_btn" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
        <div class="col-xs-12 col-md-6"><a href="signin.php" class="btn btn-success btn-block btn-lg">Sign In</a></div>
      </div>
    </form>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
      </div>
      <div class="modal-body">
                            <p> Just a joke Dude xD <br> There are no terms of use <br><strong>Just enjoy ^_^</strong>
                        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>

 <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 <!-- javascript -->

  </body>
</html>