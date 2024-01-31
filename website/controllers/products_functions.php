<?php
// Include the database connection
include_once '../config/database.php';

// Function to get all products
function getAllProducts($conn) {
    $sql = "SELECT id, name, price FROM products";
    $result = $conn->query($sql);

    $products = [];
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }

    return $products;
}

// Function to add a new product
function addProduct($conn, $name, $price) {
    $sql = "INSERT INTO products (name, price) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sd", $name, $price);
    $stmt->execute();
    $stmt->close();
    header("Location: ../template/products.php");
}

// Function to edit a product
function editProduct($conn, $id, $name, $price) {
    $sql = "UPDATE products SET name = ?, price = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sdi", $name, $price, $id);
    $stmt->execute();
    $stmt->close();
    header("Location: ../template/products.php");
}

// Function to delete a product
function deleteProduct($conn, $id) {
    $sql = "DELETE FROM products WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    header("Location: ../template/products.php");
}
?>
