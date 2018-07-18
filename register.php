<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Email Confirmation Tutorial</title>
</head>

<body>
<form action="register.php" method="POST">
	<input type="text" name="username" placeholder="Enter A Username..."><br />
    <input type="email" name="email" placeholder="Enter An Email Address..."><br />
    <input type="password" name="password" placeholder="Enter A Password..."><br />
	<input type="submit" name="submit" value="Register">
</form>
<?php

if(isset($_POST['submit']))
{
	require "koneksi.php";
	
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	
// 	$enc_password = md5($password);
	
	if($username && $email && $password) {
		$confirmcode = rand();
		$query = mysqli_query($con, "INSERT INTO `coba` VALUES('','$username','$password','$email','0','$confirmcode')");
		
		$message =
		"
		Confirm Your Email
		Click the link below to verify your account
		'http://latihan.890m.com/email/emailconfirm.php?username=$username&code=$confirmcode'
		";
		
		mail($email,"Verivication Register", $message,"From: primajasa");
		
		echo "Registration Complete! Please confirm your email address";
	}
}
?>

<a href='login.php'>Login</a>
</body>
</html>