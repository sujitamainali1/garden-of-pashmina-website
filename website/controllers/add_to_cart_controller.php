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
        echo "Error: " . mysqli_error($connection);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["remove"])) {
    $cart_id = $_POST["cart_id"];
    $sql = "DELETE FROM cart WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $cart_id);

    if ($stmt->execute()) {
        header("Location: ../template/allcartlist.php");
        exit();
    } else {
        echo "Error removing item from the cart.";
    }

    $stmt->close();
} else {

    header("Location: user_cart.php");
    exit();
}
?>