<?php
    include_once '../config/database.php';
    include_once '../controllers/UserControllers.php';

    //start the session
    session_start();

// Access the controller's class
    $UserControllers= new UserControllers();
    $allusers= $UserControllers -> getusers();

    //make all users session
    $_SESSION['allusers'] = $allusers;


?>