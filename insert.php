<?php
header('Location:form.php');
include 'conn.php';
$col1 = $_POST['col1'];
$col2 = $_POST['col2'];
$col3 = $_POST['col3'];
$col4 = $_POST['col4'];
$comd = "INSERT INTO `tablename` (`col1`, `col2`, `col3`, `col4`) VALUES ('$col1', '$col2', '$col3', '$col4');";
if(mysqli_query($conn,$comd))
{
    echo "<script>alert('insert data');</script>";
}
else{
    echo "failed";
}
?>