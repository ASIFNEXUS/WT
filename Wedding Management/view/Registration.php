<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>Registration</h1>
    <form action="../controller/RegistrationAction.php" method="POST" novalidate>
        <label>Name</label><br>
        <input type="text" name="name" id="name" required autofocus><br><br>
        <label>Phone</label><br>
        <input type="phone" name="phone" id="phone"><br><br>
        <label>E-mail</label><br>
        <input type="email" name="email" id="email"><br><br>
        <label>Gender</label><br>
        <input type="radio" id="male" name="Gender" value="Male">
      <label for="male">Male</label><br>
      <input type="radio" id="Female" name="Gender" value="Female">
      <label for="Female">Female</label><br><br>
        <label>Religion</label><br>
        <select name="religion" id="religion">
            <option value="Muslim">Muslim</option>
            <option value="Hindu">Hindu</option>
            <option value="chirstian">chirstian</option>
            <option value="Buddist">Buddist</option>
         </select><br><br>
         <label>Username</label><br>
         <input type="text" name="uname" id="uname"><br><br>
         <label>Password</label><br>
         <input type="password" name="pass" id="pass"><br><br>
         <label>Confirm Password</label><br>
         <input type="password" name="cpass" id="cpass"><br><br>

        <input type="submit" name="Submit">
    </form>
    <br><br>Already have an account?
    <a href="../view/Login.php">Login</a>
</body>
</html>