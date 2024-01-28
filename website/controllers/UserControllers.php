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

    // public function login($email, $password)
    //     {
    //         global $connection;

    //             if ($_SERVER['REQUEST_METHOD']=="POST")
    //         {
    //         $email=$_POST['email'];
    //         $password=$_POST['password'];
    //             if (!empty($email) && !empty($password) && !is_numeric($email))
    //             {
    //             $sqlQuery = "SELECT * FROM users WHERE email ='$email' limit 1" ;
    //             $result = mysqli_query($connection, $sqlQuery);

    //             if($result){
    //                     if($result && mysqli_num_rows($result) > 0){
    //                         $user = mysqli_fetch_assoc($result);

    //                             if($user['password'] == $password){
    //                                 header("location: template/user.php");
    //                                 die;

    //                             }
    //                     }
    //             }
    //             echo "<script type ='text/javascript'> alert ('***Wrong username or password***')</script>";
    //             }
    //             else{
    //                 echo "<script type ='text/javascript'> alert ('***Wrong username or password***')</script>";
    //             }
    //         }
    //     }

    public function login($email, $password)
    {
        global $connection;

        // Query to check user credentials
        $sqlQuery = "SELECT * FROM users WHERE email ='$email' limit 1";
        $result = mysqli_query($connection, $sqlQuery);

        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
        
            if (password_verify($password, $user['password'])) {
                // Password is correct, proceed with login
                header("Location: user.php");
                exit();
            } else {
                // Incorrect password
                echo "<script type='text/javascript'>alert('Incorrect password!');</script>";
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
