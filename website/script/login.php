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

    // if ($co == 1) {
    //     $login = true;
    // } else {  
    
    //     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //     Credentials did not match. <strong>Please try again</strong>
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true"></span>
    //     </button>
    // </div>';
    // }

    // if ($login) {
    //     // Redirect to the welcome page after successful login
    //     header("location: ../template/user.html");
    //     exit();
    // }
}
?>
