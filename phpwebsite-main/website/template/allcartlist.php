<?php
session_start();
// Include your database connection script
include_once '../config/database.php';
include '../script/cartlist.php';
$cartItems = getAllCarts($connection);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Cart</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
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
                <button onclick="location.href='index.php'">Home</button>
                <button onclick="location.href='about.html'">About</button>
                <button onclick="location.href='../template/products.php'">Products</button>
                <button onclick="location.href='../template/adminlogin.php'">Admin</button>
            </ul>
        </div>
        <div id="user-actions">
            <!-- Replace text with icons using Unicode characters -->
            <button onclick="location.href='template/login.php'">&#128100;</button> <!-- User icon -->
            <button onclick="location.href='template/signup.php'">&#128101;</button> <!-- User plus icon -->
            <button onclick="showCart()">&#128722;</button> <!-- Shopping cart icon -->
            <button onclick="showWishlist()">&#10084;</button> <!-- Heart icon for wishlist -->
            <input type="text" id="search" placeholder="Search">
            <button onclick="search()">&#128269;</button> <!-- Search icon -->
        </div>
    </header>
    


    <h1 style="margin-top:100px">User Cart</h1>

    <?php
 

    if (empty($cartItems)) {
        echo "<p>No items in the cart.</p>";
    } else {
    ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
            <?php foreach ($cartItems as $item): ?>
                <tr>
                    <td><?php echo $item["id"]; ?></td>
                    <td><?php echo $item["name"]; ?></td>
                    <td>$<?php echo $item["price"]; ?></td>
                    <td><?php echo $item["quantity"]; ?></td>
                    
                </tr>
            <?php endforeach; ?>
        </table>
    <?php
    }
    ?>

</body>
</html>

