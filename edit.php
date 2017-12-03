<?php
include('Config.php');
 
// Attempt insert query execution
try{
    // create prepared statement
    $sql = "UPDATE final_pets SET Stock = :stockdog WHERE Animal = 'dog';";
    $stmt = $database->prepare($sql);
    
    // bind parameters to statement
    $stmt->bindParam(':stockdog', $_REQUEST['stockdog']);
    
    // execute the prepared statement
    $stmt->execute();
    echo "Records edited successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

try{
    // create prepared statement
    $sql = "UPDATE final_pets SET Stock = :stockcat WHERE Animal = 'cat';";
    $stmt = $database->prepare($sql);
    
    // bind parameters to statement
    $stmt->bindParam(':stockcat', $_REQUEST['stockcat']);
    
    // execute the prepared statement
    $stmt->execute();
    echo "Records edited successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

try{
    // create prepared statement
    $sql = "UPDATE final_pets SET Stock = :stockfish WHERE Animal = 'fish';";
    $stmt = $database->prepare($sql);
    
    // bind parameters to statement
    $stmt->bindParam(':stockfish', $_REQUEST['stockfish']);
    
    // execute the prepared statement
    $stmt->execute();
    echo "Records edited successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

try{
    // create prepared statement
    $sql = "UPDATE final_pets SET Stock = :stockbird WHERE Animal = 'bird';";
    $stmt = $database->prepare($sql);
    
    // bind parameters to statement
    $stmt->bindParam(':stockbird', $_REQUEST['stockbird']);
    
    // execute the prepared statement
    $stmt->execute();
    echo "Records edited successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}


// Close connection
unset($database);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit</title>
    <link rel="stylesheet" type="text/css" href="final.css">
</head>
    <embed src="rainforest.mp3" autostart = "true" loop="true" hidden="true">
<body>
    <br>
<a href="editform1.php">Edit</a>
    <footer>
    Copyright &copy; 2017 Perfect Pet 
        
         
  </footer>
    </body>
</html>