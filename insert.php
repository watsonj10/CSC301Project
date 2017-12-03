<?php
include('Config.php');
 
// Attempt insert query execution
try{
    // create prepared statement
    $sql = "INSERT INTO final_pets (Animal, Stock) VALUES (:animal, :stock)";
    $stmt = $database->prepare($sql);
    
    // bind parameters to statement
    $stmt->bindParam(':animal', $_REQUEST['animal']);
    $stmt->bindParam(':stock', $_REQUEST['stock']);
    
    // execute the prepared statement
    $stmt->execute();
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

try{
    // create prepared statement
    $sql = "INSERT INTO final_dogbreed (Breed, Price) VALUES (:breed, :price)";
    $stmt = $database->prepare($sql);
    
    // bind parameters to statement
    $stmt->bindParam(':breed', $_REQUEST['dogbreed']);
    $stmt->bindParam(':price', $_REQUEST['dogprice']);
    
    // execute the prepared statement
    $stmt->execute();
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

try{
    // create prepared statement
    $sql = "INSERT INTO final_catbreed (Breed, Price) VALUES (:breed, :price)";
    $stmt = $database->prepare($sql);
    
    // bind parameters to statement
    $stmt->bindParam(':breed', $_REQUEST['catbreed']);
    $stmt->bindParam(':price', $_REQUEST['catprice']);
    
    // execute the prepared statement
    $stmt->execute();
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

try{
    // create prepared statement
    $sql = "INSERT INTO final_fishbreed (Breed, Price) VALUES (:breed, :price)";
    $stmt = $database->prepare($sql);
    
    // bind parameters to statement
    $stmt->bindParam(':breed', $_REQUEST['fishbreed']);
    $stmt->bindParam(':price', $_REQUEST['fishprice']);
    
    // execute the prepared statement
    $stmt->execute();
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

try{
    // create prepared statement
    $sql = "INSERT INTO final_birdbreed (Breed, Price) VALUES (:breed, :price)";
    $stmt = $database->prepare($sql);
    
    // bind parameters to statement
    $stmt->bindParam(':breed', $_REQUEST['birdbreed']);
    $stmt->bindParam(':price', $_REQUEST['birdprice']);
    
    // execute the prepared statement
    $stmt->execute();
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

    $sql = "DELETE FROM final_pets WHERE Animal = ''";
    $stmt = $database->prepare($sql);
    $stmt->execute();

    $sql = "DELETE FROM final_dogbreed WHERE Breed = ''";
    $stmt = $database->prepare($sql);
    $stmt->execute();
    
    $sql = "DELETE FROM final_catbreed WHERE Breed = ''";
    $stmt = $database->prepare($sql);
    $stmt->execute();

    $sql = "DELETE FROM final_fishbreed WHERE Breed = ''";
    $stmt = $database->prepare($sql);
    $stmt->execute();
    
    $sql = "DELETE FROM final_birdbreed WHERE Breed = ''";
    $stmt = $database->prepare($sql);
    $stmt->execute();

// Close connection
unset($database);
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
    <br>
<a href="addform1.php">Add Form</a>
    <footer>
    Copyright &copy; 2017 Perfect Pet 
        
         
  </footer>
    </body>
</html>