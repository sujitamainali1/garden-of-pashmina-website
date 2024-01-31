<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if not logged in
    header('Location: ../template/login.php');
    exit();
}

// Access user data from the session
$user_id = $_SESSION['user_id'];

// Include necessary files
include_once '../config/database.php';
include_once '../controllers/UserControllers.php';

// Access UserControllers to retrieve user information
$userControllers = new UserControllers();
$user = $userControllers->getUserById($user_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>User Dashboard - Your Website Name</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        #dashboard {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        .welcome-message {
            margin-bottom: 20px;
        }

        .user-info {
            margin-bottom: 20px;
        }

        .logout-btn {
            background-color: #f44336;
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>

    <header>
        <h1>garden of pashmina</h1>
    </header>

    <main id="dashboard">
        <h2>Welcome to Your Dashboard, <?php echo $user['firstname']; ?>!</h2>

        <div class="welcome-message">
            <p>This is your personalized dashboard. Explore and enjoy!</p>
        </div>

        <div class="user-info">
            <p>Email: <?php echo $user['email']; ?></p>
            <!-- Add more user information as needed -->
        </div>

        <!-- Additional dashboard content goes here... -->

        <div>
            <a href="../script/logout.php" class="logout-btn">Logout</a>
        </div>
    </main>

</body>
</html>
