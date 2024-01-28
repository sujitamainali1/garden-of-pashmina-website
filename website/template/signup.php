<?php
    session_start();
    include '(../database.php)';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Signup - Garden of Pashmina</title>

    <style>
        /* STYLING THE SIGNUP PAGE */
        #signup #signup-page-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            width: 400px;
            max-width: 100%;
            padding: 20px;
            box-sizing: border-box;
            margin: auto;
            margin-top: 60px; /* Added margin-top to separate from the navbar */
            text-align: center; /* Center the content horizontally */
            max-height: 80vh; /* Set a maximum height for the container */
        }

        #signup #signup-page-container h2 {
            text-align: center;
            color: #333;
        }

        #signup #signup-page-container form {
            margin-top: 10px;
        }

        #signup #signup-page-container label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            border-radius: 10px;
        }

        #signup #signup-page-container input {
            width: 80%;
            padding: 10px;
            margin-bottom: 5px;
            box-sizing: border-box;
        }

        #signup #signup-page-container .login-button {
            background-color: #2196f3;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 30%;
        }

        #signup #signup-page-container .login-link {
            text-align: center;
            margin-top: 15px;
        }

        #signup #signup-page-container .login-link p {
            margin: 0; /* Remove default paragraph margin */
        }

        #signup #signup-page-container .login-link a {
            color: #2196f3;
            text-decoration: none;
            font-weight: bold;
        }

        #signup #signup-page-container .login-link a:hover {
            text-decoration: underline;
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
                <button onclick="location.href='../products.html'">Products</button>
                <button onclick="location.href='../admin.php'">Admin</button>
            </ul>
        </div>
        <div id="user-actions">
            <!-- Replace text with icons using Unicode characters -->
            <button onclick="location.href='login.php'">&#128100;</button> <!-- User icon -->
            <button onclick="location.href='signup.php'">&#128101;</button> <!-- User plus icon -->
            <button onclick="showCart()">&#128722;</button> <!-- Shopping cart icon -->
            <button onclick="showWishlist()">&#10084;</button> <!-- Heart icon for wishlist -->
            <input type="text" id="search" placeholder="Search">
            <button onclick="search()">&#128269;</button> <!-- Search icon -->
        </div>
    </header>

<main id="signup">
    <div id="signup-page-container">
        <h2>Sign Up</h2>
        <form  id="signupForm" action="../script/signup.php" method="POST">
        <?php
            if (isset($_SESSION['status'])){
                echo $_SESSION['status'];
                unset($_SESSION['status']);
                echo "<br>";

            }
        ?>

        <br> 
        <label for="firstname">Firstname</label>
        <input name="firstname" type="text" id="firstname" placeholder="Enter your firstname">
        <br> </br>

        <label for="lastname">Lastname</label>
        <input name="lastname" type="text" id="lastname" placeholder="Enter your lastname">
        <br> </br>

        <label for="email">Email</label>
        <input name="email" type="text" id="email" placeholder="Enter your email">
        <br> </br>

        <label for="password">Password</label>
        <input name="password" type="text" id="password" placeholder="Enter your password">
        <br> </br>
            <button type="submit" class="login-button" onclick="signup()">Sign Up</button>
        </form>

        <div class="login-link">
            <p>Already have an account? <a href="login.html">Login</a></p>
        </div>
    </div>
</main>

<div id="login-modal"></div>
<div id="signup-modal"></div>
<div id="cart-modal"></div>

<script src="script.js"></script>
</body>
</html>
