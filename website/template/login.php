<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Login - Garden of Pashmina</title>

    <style>
        /* STYLING THE LOGIN PAGE */
        #login #login-page-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 400px;
            max-width: 100%;
            padding: 20px;
            box-sizing: border-box;
            margin: auto;
            margin-top: 50px; /* Added margin-top to separate from the navbar */
            text-align: center; /* Center the content horizontally */
            max-height: 100vh; /* Set a maximum height for the container */
        }

        #login #login-page-container h2 {
            text-align: center;
            color: #333;
            margin-top: 50px;
        }

        #login #login-page-container form {
            margin-top: 10px;
        }

        #login #login-page-container label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        #login #login-page-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        #login #login-page-container .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            white-space: nowrap; /* Keep the text on the same line */
        }

        #login #login-page-container .remember-me label {
            margin-bottom: 0;
            margin-right: 20px;
        }

        #login #login-page-container .login-button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 30%;
        }

        #login #login-page-container .signup-link {
            text-align: center;
            margin-top: 15px;
        }

        #login #login-page-container .signup-link p {
            margin: 0; /* Remove default paragraph margin */
        }

        #login #login-page-container .signup-link a {
            color: #2196f3;
            text-decoration: none;
            font-weight: bold;
        }

        #login #login-page-container .signup-link a:hover {
            text-decoration: underline;
        }

        #login #login-page-container .logout-button {
            background-color: #f44336;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 30%;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <header>
        <div id="logo">
            <img src="../images/logo.JPG" alt="Garden of Pashmina Logo">
        </div>
        <div id="title">
            <h1>Garden of Pashmina</h1>
        </div>
        <div id="navbar">
            <ul>
                <button onclick="location.href='../index.php'">Home</button>
                <button onclick="location.href='../about.html'">About</button>
                <button onclick="location.href='../template/products.php'">Products</button>
                <button onclick="location.href='../template/adminlogin.php'">Admin</button>
            </ul>
        </div>
        <div id="user-actions">
            <!-- Replace text with icons using Unicode characters -->
            <?php if (isset($_SESSION['user_id'])) : ?>
                <!-- Show logout button if user is logged in -->
                <button class="logout-button" onclick="location.href='../logout.php'">&#128274; Logout</button>
            <?php else : ?>
                <!-- Show login and signup buttons if user is not logged in -->
                <button onclick="location.href='login.php'">&#128100;</button> <!-- User icon -->
                <button onclick="location.href='signup.php'">&#128101;</button> <!-- User plus icon -->
            <?php endif; ?>
            <button onclick="showCart()">&#128722;</button> <!-- Shopping cart icon -->
            <input type="text" id="search" placeholder="Search">
            <button onclick="search()">&#128269;</button> <!-- Search icon -->
        </div>
    </header>

    <?php
            if (isset($_SESSION['login_error'])) {
                echo '<div class="error-message">' . $_SESSION['login_error'] . '</div>';
                unset($_SESSION['login_error']);
            }
     ?>

<main id="login">
    <div id="login-page-container">
        <h2>Login</h2>
        <form id="loginForm" action="../script/login.php" method="POST">

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <div class="remember-me">
                <input type="checkbox" id="rememberMe" name="rememberMe">
                <label for="rememberMe">Remember me?</label>
            </div>

            <button type="submit" class="login-button">Login</button>
        </form>

        <div class="signup-link">
            <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </div>
    </div>
</main>

<div id="login-modal"></div>
<div id="signup-modal"></div>
<div id="cart-modal"></div>

<script src="script.js"></script>
</body>
</html>
