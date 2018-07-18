<?php

session_start();

error_reporting(0);

if($_SESSION['username'])
{
	echo "You are logged in as: ".$_SESSION['username'];

	echo "<p><a href='logout.php'>Click here to logout</a>";
}
else 
	header ("location: index.php");
?>