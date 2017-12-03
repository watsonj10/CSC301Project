
<?php
include('Config.php');
 
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
    $mysearchbar = $_POST["searchbar"];
    
    
    // create prepared statement
    $sql ="SELECT * FROM final_pets WHERE Animal like '%$mysearchbar%' ";
    $statement = $database->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC); 
    echo '<br/>';
    echo '<br/>';
    echo '<pre>'; 
    print_r($result);
    echo '</pre>'; 
    }
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
    $mysearchbar = $_POST["searchbar"];
    
    if ($mysearchbar == 'animals' || $mysearchbar == 'Animals')
    {
    // create prepared statement
    $sql ="SELECT * FROM final_pets";
    $statement = $database->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC); 
    echo '<br/>';
    echo '<br/>';
    echo '<pre>'; 
    print_r($result);
    echo '</pre>'; 
    }
    }
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
    $mysearchbar = $_POST["searchbar"];
    
    if ($mysearchbar == 'dog breed' || $mysearchbar == 'dogbreed')
    {
    // create prepared statement
    $sql ="SELECT * FROM final_dogbreed";
    $statement = $database->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC); 
    echo '<br/>';
    echo '<br/>';
    echo '<pre>'; 
    print_r($result);
    echo '</pre>'; 
    }
    }
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
    $mysearchbar = $_POST["searchbar"];
    
    if ($mysearchbar == 'cat breed' || $mysearchbar == 'catbreed')
    {
    // create prepared statement
    $sql ="SELECT * FROM final_catbreed";
    $statement = $database->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC); 
    echo '<br/>';
    echo '<br/>';
    echo '<pre>'; 
    print_r($result);
    echo '</pre>'; 
    }
    }
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
    $mysearchbar = $_POST["searchbar"];
    
    if ($mysearchbar == 'fish breed' || $mysearchbar == 'fishbreed')
    {
    // create prepared statement
    $sql ="SELECT * FROM final_fishbreed";
    $statement = $database->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC); 
    echo '<br/>';
    echo '<br/>';
    echo '<pre>'; 
    print_r($result);
    echo '</pre>'; 
    }
    }
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
    $mysearchbar = $_POST["searchbar"];
    
    if ($mysearchbar == 'bird breed' || $mysearchbar == 'birdbreed')
    {
    // create prepared statement
    $sql ="SELECT * FROM final_birdbreed";
    $statement = $database->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC); 
    echo '<br/>';
    echo '<br/>';
    echo '<pre>'; 
    print_r($result);
    echo '</pre>'; 
    }
    }
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
    $mysearchbar = $_POST["searchbar"];
    
    if ($mysearchbar == 'breeds')
    {
    // create prepared statement
    $sql ="SELECT * FROM final_dogbreed UNION SELECT * FROM final_catbreed UNION SELECT * FROM final_fishbreed UNION SELECT * FROM final_birdbreed ";
    $statement = $database->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC); 
    echo '<br/>';
    echo '<br/>';
    echo '<pre>'; 
    print_r($result);
    echo '</pre>'; 
    }
    }
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
    $mysearchbar = $_POST["searchbar"];
    
    if ($mysearchbar == 'all')
    {
    // create prepared statement
    $sql ="SELECT * FROM final_dogbreed JOIN final_catbreed JOIN final_fishbreed JOIN final_birdbreed ";
    $statement = $database->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC); 
    echo '<br/>';
    echo '<br/>';
    echo '<pre>'; 
    print_r($result);
    echo '</pre>'; 
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Search</title>
    <link rel="stylesheet" type="text/css" href="final.css">
</head>
<body>
    <embed src="rainforest.mp3" autostart = "true" loop="true" hidden="true">
    <br>
<a href="HomepageUsers.php">Home</a>
    <footer>
    Copyright &copy; 2017 Perfect Pet 
        
         
  </footer>
    </body>
</html>