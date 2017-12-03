<?php

include('Config.php');
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit</title>
    <link rel="stylesheet" type="text/css" href="final.css">
</head>
<body>
    <embed src="rainforest.mp3" autostart = "true" loop="true" hidden="true">
    <a href="HomepageAdmin.php">Home</a>
    <div id = "center">
<form action="edit.php" method="post">
    <p>-If the category has no change than leave it blank-</p>
    <h4>Edit Dog:</h4>
    <p>
        <label for="stock">Stock:</label>
        <input type="text" name="stockdog" id="stock">
    </p>
    
    <h4>Edit Cat:</h4>
    <p>
        <label for="stock">Stock:</label>
        <input type="text" name="stockcat" id="stock">
    </p>
    
    <h4>Edit Fish:</h4>
    <p>
        <label for="stock">Stock:</label>
        <input type="text" name="stockfish" id="stock">
    </p>
    
    <h4>Edit Bird:</h4>
    <p>
        <label for="stock">Stock:</label>
        <input type="text" name="stockbird" id="stock">
    </p>
    
    <input type="submit" value="Submit">
</form>
    </div>
    
</body>
</html>