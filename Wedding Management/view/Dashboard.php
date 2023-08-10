<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dashboard</title>
	<link rel="stylesheet" href="">
	<style>
		.Dashboard{
			display: inline-block;
			position: relative;
			top: 00px;
			left: 60px;
		}
		.Dashboard a{
			text-decoration: none;
			color: #524136;
		}
	</style>
</head>
<body>
	<?php include('templates/header.php')  ?> <br><br>
	<fieldset>
<h1 align="center" style="color: #b32624">Dashboard</h1> 
<div class="Dashboard">
	<a href="../view/ViewProfile.php">View Profile</a> <br><br> 
	<a href="../view/give_feedback.php">Give Feedback</a> <br><br>
	<a href="../view/logout.php">Logout</a> <br><br> 
</div> 
</fieldset>
<?php include('templates/Footer.php') ?> 
</body>
</html>