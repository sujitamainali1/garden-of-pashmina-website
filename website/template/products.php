<?php
// Include the product functions
include '../controllers/products_functions.php';
include_once '../config/database.php';

// Start the session
session_start();

if (!isset($_SESSION["admin_authenticated"])) {
    header("Location: adminlogin.php");
    exit();
}

if (isset($_GET["logout"])) {
    unset($_SESSION['admin_authenticated']);
    header("Location: adminlogin.php");
    exit();
}

// Handle POST requests
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["add_product"])) {
        addProduct($connection, $_POST["name"], $_POST["price"]);
    } elseif (isset($_POST["edit_product"])) {
        editProduct($connection, $_POST["id"], $_POST["name"], $_POST["price"]);
    } elseif (isset($_POST["delete_product"])) {
        deleteProduct($connection, $_POST["id"]);
    }
   
    

    // Redirect to avoid form resubmission on page refresh
    header("Location: products.php");
    exit();
}

// Fetch all products
$products = getAllProducts($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management System</title>
    <style>
        /* Resetting some default styles */
        body, h1, h2, p, table {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        h1, h2 {
            color: #333;
            text-align: center;
            margin: 20px 0;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        #sujita input{
        width: 80%; /* Adjust the width as needed */
        padding: 8px;
        margin-bottom: 50px;
        box-sizing: border-box;
        }
        
        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        table {
            width: 80%; /* Adjust the width as needed */
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        form.inline-form {
            display: inline-block;
            margin-right: 8px;
        }

        /* Centering the login logo */
        .login-logo {
            text-align: center;
            margin-top: 50px; /* Adjust as needed */
        }

        /* Styling for the "Back to Home" link */
        .back-to-home {
            margin-top: 20px;
            text-align: center;
        }

        /* Set a fixed width for the Actions column */
        th.actions, td.actions {
            width: 100px; /* Adjust the width as needed */
        }
    </style>
</head>
<body>

<h1>Product Management System</h1>

<!-- Add Product Form -->
<form method="post">
    <h2>Add Product</h2>
    <label for="name">Product Name:</label>
    <input type="text" id="name" name="name" required>
    <label for="price">Product Price:</label>
    <input type="number" id="price" name="price" step="0.01" required>
    <button type="submit" name="add_product">Add Product</button>
  

    <div class="back-to-home">
          <a href="../index.php">Back to Home</a>
        </div>
</form>
<div style="text-align: right; margin-bottom: 10px;">
    <a href="?logout=true">Logout</a>
</div>
<!-- Display Products -->
<div id="sujita">
<h2>All Products</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?php echo $product["id"]; ?></td>
            <td><?php echo $product["name"]; ?></td>
            <td><?php echo $product["price"]; ?></td>
            <td>
               <!-- Edit and Delete Product Forms -->
<form method="post" style="display:inline;">
    <input type="hidden" name="id" value="<?php echo $product["id"]; ?>">
    <input type="text" name="name" value="<?php echo $product["name"]; ?>" required>
    <input type="number" name="price" value="<?php echo $product["price"]; ?>" step="0.01" required>
    <button type="submit" name="edit_product">Edit</button>
    
    <!-- Delete Product Form -->
    <input type="hidden" name="id" value="<?php echo $product["id"]; ?>">
    <button type="submit" name="delete_product">Delete</button>
</form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
    </div>
</body>
</html>
