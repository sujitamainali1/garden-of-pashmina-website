<?php

class UserControllers
{
    public function register($firstname, $lastname, $email, $password)
    {
        global $connection;

        // Convert email to lowercase for case-insensitive comparison
        $email = strtolower($email);

        // Check if the email already exists
        $checkQuery = "SELECT * FROM users WHERE LOWER(email) = '$email'";
        $checkResult = $connection->query($checkQuery);

        if ($checkResult && $checkResult->num_rows > 0) {
            return "Error: User with this email already exists!";
        }

        // Hashing the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Inserting data into the database
        $sqlQuery = "INSERT INTO users (firstname, lastname, email, password)
                     VALUES ('$firstname', '$lastname', '$email', '$hashed_password')";

        // Executing the query
        if ($connection->query($sqlQuery) === TRUE) {
            return "<br> User registered successfully!";
        } else {
            return "Error registering user!" . $connection->error;
        }
    }

    public function login($email, $password)
    {
        global $connection;

        // Query to check user credentials
        $sqlQuery = "SELECT * FROM users WHERE email ='$email' limit 1";
        $result = mysqli_query($connection, $sqlQuery);
    

        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
         
            if (password_verify($password, $user["PASSWORD"])) {
                // Password is correct, proceed with login
                $_SESSION["user_id"] = $user["USER_ID"];

                header("Location: ../template/user.php");
                exit();
            } else {
                echo "<script type='text/javascript'>alert('Incorrect password!');";
                echo "window.location.href='../template/login.php';</script>";
                exit(); 
            }
        } else {
            // User not found or other issues
            echo "<script type='text/javascript'>alert('User not found or other issues!');</script>";
        }
    }       

    public function getUserID($email)
    {
        global $connection;

        // Query to get user_id based on email
        $sqlQuery = "SELECT user_id FROM users WHERE email ='$email' limit 1";
        $result = mysqli_query($connection, $sqlQuery);

        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            return $user['user_id'];
        } else {
            // User not found
            return null;
        }
    }
}
?>
