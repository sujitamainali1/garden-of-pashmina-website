<?php
  global $connection;
function adminLogin($connection, $username, $password) {
    
    $sql = "SELECT * FROM admins WHERE username = ? AND password = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    return $result->num_rows > 0;
}
?>
