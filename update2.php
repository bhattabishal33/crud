<?php
  include 'conn.php';
  $id = $_POST['id'];
  $col2 = $_POST['col2'];
  $col3 = $_POST['col3'];
  $col4 = $_POST['col4'];
  echo $id.$col2.$col3.$col4;
  $cmd = 'UPDATE `tablename` SET `col2`="'.$col2.'",`col3`="'.$col3.'",`col4`= '.$col4.' WHERE `col1` = '.$id.';';
  if(mysqli_query($conn,$cmd))
  {
    echo "<script>window.location.href= 'display.php';</script>";
  } 
?>