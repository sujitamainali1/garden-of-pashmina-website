<?php

function adminLogin($conn, $username, $password) {
    
    $sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    return $result->num_rows > 0;
}
?>
