<?php
 
//connect to database
include_once '../config/database.php';
include_once '../controllers/UserControllers.php';
//start session
session_start();
//get data from template/register.php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
 
//Accessing User controllers
 
$UserControllers= new UserControllers();
$register= $UserControllers -> register($firstname, $lastname, $email, $password);
// echo $register;   //YESLE display garne message  $_SESSION["status"] ma fwd gareko
 
$_SESSION["status"]=$register;
 
//redirect to the template page
header('Location: ../template/signup.php');
 
//Accessing User Controller
$UserControllers= new $UserControllers();
$register= $UserControllers -> register($firstname, $lastname, $email, $password);
?>
