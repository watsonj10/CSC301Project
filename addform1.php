<?php

include('Config.php');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add</title>
    <link rel="stylesheet" type="text/css" href="final.css">
</head>
<body>
    <embed src="rainforest.mp3" autostart = "true" loop="true" hidden="true">
    <a href="HomepageAdmin.php">Home</a>
    <div id = "center">
<form id = "addform" action="insert.php" method="post">
    
    <p>-If the category has no change than leave it blank-</p>
    <h2>Add:</h2>
    <p>
        <label for="animal">Animal:</label>
        <input type="text" name="animal" id="animal">
    </p>
    <p>
        <label for="stock">Stock:</label>
        <input type="text" name="stock" id="stock">
    </p>
    <h2>Add Dog:</h2>
    <p>
        <label for="breed">Breed:</label>
        <input type="text" name="dogbreed" id="breed">
    </p>
    <p>
        <label for="price">Price:</label>
        <input type="text" name="dogprice" id="price">
    </p>
    <h2>Add Cat:</h2>
    <p>
        <label for="breed">Breed:</label>
        <input type="text" name="catbreed" id="breed">
    </p>
    <p>
        <label for="price">Price:</label>
        <input type="text" name="catprice" id="price">
    </p>
    <h2>Add Fish:</h2>
    <p>
        <label for="breed">Breed:</label>
        <input type="text" name="fishbreed" id="breed">
    </p>
    <p>
        <label for="price">Price:</label>
        <input type="text" name="fishprice" id="price">
    </p>
    <h2>Add Bird:</h2>
    <p>
        <label for="breed">Breed:</label>
        <input type="text" name="birdbreed" id="breed">
    </p>
    <p>
        <label for="price">Price:</label>
        <input type="text" name="birdprice" id="price">
    </p>
    <input type="submit" value="Submit">
</form>
    
    </div>
    
</body>
</html>