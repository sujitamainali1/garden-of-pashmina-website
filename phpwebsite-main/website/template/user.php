<?php
// Include the product functions

// Start the session
session_start();

if (isset($_GET["logout"])) {
    unset($_SESSION["user_id"]);
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>WELCOME USER!!</h1>
    <div style="text-align: right; margin-bottom: 10px;">
    <a href="?logout=true">Logout</a>
</div>

</body>
</html>