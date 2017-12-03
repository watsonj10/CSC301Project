<?php

// Connecting to the MySQL database
$user = 'watsonj10';
$password = 'woac5lEZ';
session_start();
try {
$database = new PDO('mysql:host=csweb.hh.nku.edu;dbname=db_fall17_watsonj10', $user, $password);
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }   
?>