<?php 
	session_start()
?>
<!DOCTYPE html>
<html>
<?php include('templates/header.php')  ?>
	<?php
	
	$username = $_SESSION['username'];
	$handle = fopen("../model/user.json", "r");
	$fr = fread($handle, filesize("../model/user.json"));
	$decode = json_decode($fr);
	for ($i=0; $i < count($decode) ; $i++)
	{ 		
		if ($username == $decode[$i]->Username)
		{
		
			$Name= $decode[$i]->Name;
			$Phone= $decode[$i]->Phone;
			$Email= $decode[$i]->Email;
			$gender= $decode[$i]->gender;
			if ($gender===false) {
				$gender = "Male";
			}
			else
			{
				$gender = "Female";
			}
			$Religion= $decode[$i]->Phone;

			$Username= $decode[$i]->Username;
		}
	}
	$fc = fclose($handle);
?><br><br>
<fieldset>
	<br><b>Profile Information</b>	
				
	<?php
		echo "<br><br>";			
		echo "Name: " . $Name;
		echo "<br><br>";				 				
		echo "Phone: " . $Phone;
		echo "<br><br>";
		echo "Email: " . $Email;
		echo "<br><br>";
		echo "Gender: " . $gender;
		echo "<br><br>";
		echo "Religion: " . $Religion;
		echo "<br><br>";
		echo "Username: " . $Username;
		echo "<br><br>";
	?>
</fieldset>
	<a href="../view/Dashboard.php">Go Back</a>
</body>
	<?php include('templates/Footer.php')  ?>
</html>