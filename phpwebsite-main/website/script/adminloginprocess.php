<!-- login_process.php -->
<?php
session_start();

// Include database connection and admin functions
include_once '../config/database.php';
include_once '../controllers/admin_controller.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    

    if (adminLogin($connection, $username, $password)) {
        $_SESSION["admin_authenticated"] = true;
        header("Location: ../template/products.php");
        exit();
    } else {
        header("Location: ../template/adminlogin.php");
    }
}
?>
