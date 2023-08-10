<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Forgot Password</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<h1 style="color: blue;">Forgot Password</h1>

	<form action="../controller/ForgetPasswordAction.php" method="POST" enctype="application/x-www-form-urlencoded">

		<label for="uname">Username</label>
		<input type="text" name="username" id="username">			
		<br><br>
		<label for="password">Password</label>
		<input type="password" name="password" id="password">
		<br><br>		
		<input type="submit" name="Update" value="Change">

		<br><br>
		<a href="../view/Login.php">Go Back</a>
		
	</form>
	<?php include('templates/Footer.php')  ?>
</body>
</html>