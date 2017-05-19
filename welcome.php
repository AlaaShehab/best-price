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
	
	
	 if(strlen(trim($password)) < 7)
   {
		$_SESSION['message'] = "Password must be 8characters";
		
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
?>