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