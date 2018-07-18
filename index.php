<html>
<?php if(isset($_GET['error'])){echo $_GET['error'];echo "<br>";} ?>
<form action="login.php" method="POST">
	Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><p>
    <input type="submit" value="Login"> 
</form>
<p>
<a href='register.php'>Register</a>

</html>