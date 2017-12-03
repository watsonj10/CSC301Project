<?php
include('Config.php');
    
    $name = $_POST["username"]; 
    $_SESSION["usersName"] = $name;
    $pass = $_POST["psw"]; 
    $_SESSION["password"] = $pass;
    if($_SESSION["usersName"] == 'admin' && $_SESSION["password"] == 'admin')
    {
        header('location: HomepageAdmin.php');
    }
        else
        {
             
        }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home</title>
<link rel="stylesheet" type="text/css" href="final.css">
</head>
<body>
    <embed src="rainforest.mp3" autostart = "true" loop="true" hidden="true">
<?php
    echo "Hi " . $_SESSION["usersName"] . ".";
?>
    <a href="LoginIn.php">Log out</a>
    <br>
    <b>Perfect Pet</b>
    <br>
    <br>
    <br>
    <br>
    <br>
<form action="Search.php" method="post">
    <input type="text" name="searchbar" placeholder="Search...">
    <input type="submit" value="Submit">
</form>
<br>
    <div id = "pictures">
        <img src="germanShepard.jpg" alt="Animals" style="width:300px;height:300px;"><img src="beagle.jpg" alt="Animals" style="width:300px;height:300px;">
    <br>
    <p id = "homepages">Get a cute dog like this one! The perfect pet for outdoor fun. You can search our website to see breeds and prices on our furry friends!</p>
    <img src="cat.jpg" alt="Animals" style="width:300px;height:300px;"><img src="bengal.jpg" alt="Animals" style="width:300px;height:300px;">
    <br>
        <p id = "homepages">Get a cat like him! They make the perfect cuddle buddies and are always playful. Look into the eyes of these furry creatures and you will fall in love.</p>
    <img src="koi.jpg" alt="Animals" style="width:300px;height:300px;"><img src="betta.jpg" alt="Animals" style="width:300px;height:300px;">
    <br>
        <p id = "homepages">Get a fish today! They are low maitenence and fun to watch. There is nothing better than looking into a body of water and seeing these memorizing animals swim.</p>
    <img src="bird.jpg" alt="Animals" style="width:300px;height:300px;"><img src="zebrafinch.jpg" alt="Animals" style="width:300px;height:300px;">
<br>
        <p id = "homepages">Get a bird like him! Birds are great pets and some can even speak! They are smart and generally have a long life span. Let these little guys fly around and explore your house!</p>
    </div>
<footer>
    Copyright &copy; 2017 Perfect Pet 
        
         
  </footer>
</body>
</html>