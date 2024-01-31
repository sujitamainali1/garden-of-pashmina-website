<?php
session_start();

// Include your database connection script
include_once '../config/database.php';

if (!isset($_SESSION["user_id"])) {
    header("Location: ../template/login.php");
    exit();
}
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_to_cart"])) {
    $product_id = $_POST["product_id"];

    $_SESSION['cart'][] = $product_id;
    $user_id = $_SESSION['user_id'];
    $quantity = 1;
    $sql = "INSERT INTO cart (user_id, product_id, quantity) VALUES ($user_id, '$product_id' ,$quantity)";
    
    if (mysqli_query($connection, $sql)) {
        echo "<script type='text/javascript'>alert('Product added successfully!');";
        header("Location: ../template/allcartlist.php");
        exit();
    } else {
        // Handle the case where the query was not successful
        echo "Error: " . mysqli_error($connection);
    }
}
?>
