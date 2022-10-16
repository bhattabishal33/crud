<?php
    $database ='project';
    $server = '127.0.0.1';
    $username ='root';
    $password='';
    $conn = mysqli_connect($server,$username,$password,$database);
    if($conn)
    {
        echo "connected";
    }

?>