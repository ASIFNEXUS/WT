<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration Action</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php 
    if ($_SERVER['REQUEST_METHOD'] === "POST") {

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $name = test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $phone = test_input($_POST['phone']);
        $Gender = isset($_POST['gender']) ;
        $pass= test_input($_POST['pass']);
        $cpass = test_input($_POST['cpass']);
        $username = test_input($_POST['uname']);

        if (empty($name)||empty($email)||empty($phone)||!isset($Gender)||empty($pass)||empty($cpass)||empty($username)) {

            echo "Fill the form properly.";
            ?>
            <p style="color: red;">Registration Failed
            </p><br>
            <a href="../view/Registration.php">Go Back</a>

        <?php
        }
        else{
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Please correct your email";

            }
            else if($pass!=NULL)
            {
                if($pass != $cpass)
                {
                    echo "Passwords doesn't match";
                }
                else{
                    ?>
                    <p style="color: #16912a;">Registration Successful</p><br>
                    <a href="../view/Login.php">Go Back</a>
                    <?php
                }
            }
        }


        $user=array('Name'=>$name,'Email'=>$email,'Phone'=>$phone,'gender'=>$Gender,'Username'=>$username,'Password'=>$pass,'Confirm_Password'=>$cpass);

        if (filesize("../model/user.json")<=0)
        {   
            $handle= fopen("../model/user.json","w");
            $user=array($user);
            $user=json_encode($user);
            $fw=fwrite($handle, $user);
        }
        else
        {   
            $handle = fopen("../model/user.json","r");
            $fr = fread($handle, filesize("../model/user.json"));
            $arr1=json_decode($fr);
            fclose($handle);
            $handle= fopen("../model/user.json","w");
            $arr1[]= $user;
            $user=json_encode($arr1);
            fwrite($handle, $user);
        }
        
        fclose($handle);

        }

    else{
        echo "Can not process get request method";
    }

    ?>
</body>
</html>
