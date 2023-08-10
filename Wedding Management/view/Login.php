<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Welcome to Wedding Management</h1>
	<h1 style="align: left; color: blue;">Login</h1>
	<form action="../controller/LoginAction.php" method="POST" novalidate enctype="application/x-www-form-urlencoded">
		<div align="left">
			<label for="username">Username:</label>
			<input type="text" name="username" id="username" autofocus required>
			<br><br>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" required>
			<br><br>
			<input type="submit" name="login" value="Login">
		</div>
		<br>
		<P>Not a member yet?</P>
		<a href="Registration.php">
			Registration
		</a>
		&nbsp&nbsp
		<a href="ForgetPassword.php">
			Forgot Password
		</a>
	</form>
</body>
	<?php include('templates/Footer.php');?>
</html>