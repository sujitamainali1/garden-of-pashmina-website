<?php

    $serverName = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'garden';

    $connection = mysqli_connect($serverName,$username,$password,$database);

    if(!$connection){
        echo "<br> Connection failed!";
        die (mysqli_connect_error());
    }
    else{
        echo "Connection Successful";
    }
?>
