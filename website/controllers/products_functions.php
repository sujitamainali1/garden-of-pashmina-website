<?php
// Include the database connection

global $connection;
// Function to get all products
function getAllProducts($connection) {
    $sql = "SELECT id, name, price FROM products";
    $result = $connection->query($sql);

    $products = [];
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }

    return $products;
}

// Function to add a new product
function addProduct($connection, $name, $price) {
    $sql = "INSERT INTO products (name, price) VALUES (?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sd", $name, $price);
    $stmt->execute();
    $stmt->close();
    header("Location: ../template/products.php");
}

// Function to edit a product
function editProduct($connection, $id, $name, $price) {
    $sql = "UPDATE products SET name = ?, price = ? WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sdi", $name, $price, $id);
    $stmt->execute();
    $stmt->close();
    header("Location: ../template/products.php");
}

// Function to delete a product
function deleteProduct($connection, $id) {
    $sql = "DELETE FROM products WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    header("Location: ../template/products.php");
}
?>
