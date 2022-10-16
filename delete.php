<?php
    header('location:display.php');
    include "conn.php";
    $id=$_GET['id'];
    $cmd = 'DELETE FROM `tablename` WHERE `col1` = '.$id.';';
    if(mysqli_query($conn,$cmd))
    {
        echo "data deleted";
    }

?>