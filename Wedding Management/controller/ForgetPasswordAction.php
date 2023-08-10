<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change Password</title>
</head>
<body>
	<h1 style="color: blueviolet;">Change Password Action</h1>	
	
	<?php

		function test($user)	
		{
			$user = trim($user);
			$user = stripslashes($user);
			$user = htmlspecialchars($user);
			return $user;
		}		
	?>		
	<?php 
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{	
			$Username = test($_POST['username']);
			$Password = test($_POST['password']);
			if (empty($_POST['password'])||empty($Username))
			{
				echo "Fill up the password and username properly";							
			}
			else
			{						
				$handle = fopen("../model/user.json", "r");
		        $fr = fread($handle, filesize("../model/user.json"));  
		        $arr1 = json_decode($fr);		        
		        fclose($handle);

		        $handle = fopen("../model/user.json", "w");

		        for ($i=0; $i < count($arr1); $i++) { 
		        	if ($Username == $arr1[$i]->Username) 
		        	{
		        		$arr1[$i]->Password = $Password;
		        		$arr1[$i]->Confirm_Password = $Password;
		        	}		        	
		        }
		        $user = json_encode($arr1);
            	$fw = fwrite($handle, $user);
            	$fc = fclose($handle);

            	if ($fw) 
				{
					echo "Password changed succesfully";
				}
			}				
		}
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}	        
	?>
	<br><br>
	<a href="../view/Login.php">Go Back</a>
</body>
</html>