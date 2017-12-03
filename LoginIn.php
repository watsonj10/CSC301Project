<?php
include('Config.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="final.css">
</head>
<body>
    <u>Login</u>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div id = "centerlogin1">
        <h1>Existing User</h1>
<form id = "loginform" action="Homepage.php" method="post">
    <input type="text" name="username" placeholder="Username...">
    <br>
    <br>
    <input type="password" name="psw" placeholder="Password...">
    <br>
    <br>
    <br>
    <input type="submit" value="Sign In">
</form>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div id = "centerlogin2">
    <h1>New User</h1>
<form id = "loginform" action="HomepageUsers.php" method="post">
    <input type="text" name="username" placeholder="Username...">
    <br>
    <br>
    <input type="password" name="psw" placeholder="Password...">
    <br>
    <br>
    <p>What is your favorite animal out of these 4?</p>
    <input type="radio" name="animal" value="dog" checked> Dog<br>
  <input type="radio" name="animal" value="cat"> Cat<br>
  <input type="radio" name="animal" value="fish"> Fish<br>
    <input type="radio" name="animal" value="bird"> Bird<br><br>
    <input type="submit" value="Create Account">
</form>
    </div>
    
</body>
</html>