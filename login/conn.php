<?php
    $server = "localhost";
    $username = "root";
    $password ="";
    $database = "project";
    $conn = mysqli_connect($server,$username,$password,$database);
    if(!$conn)
    {
        echo "<script>console.log('connection fail');</script>";
    }
    else
    {
        echo "<script>console.log('connection pass');</script>";
    }
?>