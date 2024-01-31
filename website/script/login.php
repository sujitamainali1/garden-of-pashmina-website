<?php
// Connect to the database
include_once '../config/database.php';
include_once '../controllers/UserControllers.php';

// Start the session
session_start();
global $connection;

// Get data from the login form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

  
    //Accessing User controllers
 
    $UserControllers= new UserControllers();
    $UserControllers -> login($email, $password);
?>
