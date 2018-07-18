<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Email Confirmation Tutorial</title>
</head>

<body>
<?php

require "koneksi.php";

$username = $_GET['username'];
$code = $_GET[''];

$query = mysqli_query($con, "SELECT * FROM `coba` WHERE `username`='$username'");
while($row = mysqli_fetch_assoc($query))
{
	$db_code = $row['confirm-code'];
}
if($code == $db_code)
{
	mysqli_query($con, "UPDATE `coba` SET `confirmed`='1'");
	mysqli_query($con, "UPDATE `coba` SET `confirmcode`='0'");
	
	echo "Thank You. Your email has been confimed and you may now login";
}
else
{
	echo "Username and code dont match";	
}

?>
</body>
</html>