<?php

session_start();
// connect to database
$db = mysqli_connect("localhost" , "root" , "" , "authentication");

if(isset($_POST['go'])) {
	
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	
	$password = md5($password); //hash password before storing
		
	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($db , $sql);
	if (mysqli_num_rows($result)){
		$_SESSION['message'] = "You are now logged in";
		$_SESSION['username'] = $username;
		header("location: home.php"); //redirect to home page
	}else{
		$_SESSION['message'] = "Username/Password combination incorrect";
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
        <li><a href="signup.php"><span  class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li class="active" ><a href="signin.php"><span  class="glyphicon glyphicon-log-in"></span> Log in</a></li>
      </ul>
    </div>

  </div>
</nav>





 <body>


<div class="container" id="login-form">
    
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-8">
      <section >
	  
	   <br></br>
	   <br></br>
	  
	    <?php
	if(isset($_SESSION['message'])){
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
?>

        <form method="post" action="signin.php" role="login">
            <h2 ><span class="glyphicon glyphicon-home"></span>  <strong>  Best Price</strong></h2>
          <input type="email" name="email" placeholder="Email" required class="form-control input-lg"  />
        
          <input type="password" name = "password"class="form-control input-lg" id="password" placeholder="Password" required="" />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block" id="btn-signin">Sign in</button>
          <div>
            <a href="signup.php">Create account</a> 
          </div>
          
        </form>
        
        <div class="form-links">
          <a href="home.php">www.Bestprice.com</a>
        </div>
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>  
  
  
</div>


 

 <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 <!-- javascript -->

  </body>
</html>