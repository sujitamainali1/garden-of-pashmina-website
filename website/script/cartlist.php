<?php

global $connection;
function getAllCarts($connection) {
    // Get the user ID from the session
    $user_id = $_SESSION["user_id"];

    // Perform the SELECT query
    $sql = "SELECT cart.id, products.name, products.price, cart.quantity
            FROM cart
            JOIN products ON cart.product_id = products.id
            WHERE cart.user_id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $carts = [];
    

    while ($row = $result->fetch_assoc()) {
        $carts[] = $row;
    }
    return $carts;
}

?>
