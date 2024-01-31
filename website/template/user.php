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
    <title>User Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            height:90vh;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .logout-link {
            text-align: right;
            margin-bottom: 10px;
        }

        .logout-link a {
            color: #333;
            text-decoration: none;
            padding: 8px 16px;
            border: 1px solid #333;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .logout-link a:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome User!!</h1>
        <div class="logout-link">
            <a href="login.php">Logout</a>
        </div>
        <!-- Your main content goes here -->
    </div>

</body>
</html>
