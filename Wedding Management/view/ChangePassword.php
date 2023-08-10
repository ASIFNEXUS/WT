<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<?php include('templates/header.php')  ?>

	<?php 

	$username = "";
	$password = "";

	//var_dump($_SESSION['username']);
	if (isset($_SESSION['username'])) 
	{
		$handle = fopen("../model/user.json", "r");
		$fr = fread($handle, filesize("../model/user.json"));

		$arr1 = json_decode($fr);		
		fclose($handle);

		for ($i=0; $i < count($arr1); $i++) 
		{ 
			if ($username == $arr1[$i]->Username) 
			{
				if($password == NULL )
				{
					//echo "Please fill password";
				}
				else
				{
					$password = $arr1[$i]->Password;
				}

			}
		}
	}
	else
	{	
		die("Invalid request, Login first.");
	}
	?>

	<h1 style="color: blue;">Update Password</h1>

	<form action="../controller/ChangePasswordAction.php" method="POST" enctype="application/x-www-form-urlencoded">

		<label for="uname">Username</label>
		<input type="text" name="username" id="uname" value="<?php echo $_SESSION['username'] ?>" size="25" maxlength="5" disabled required>			
		<br><br>
		<label for="password">Password</label><span style="color:red">*</span>
		<input type="password" name="password" id="password" value="value="<?php echo $password ?>>
		<br><br>		
		<input type="submit" name="Update" value="Update">

		<br><br>
		<a href="../view/Dashboard.php">Go Back</a>
		
	</form>
	<?php include('templates/Footer.php')  ?>
</html>