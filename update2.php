<?php
  include 'conn.php';
  echo $_POST['id'];
  //$cmd = 'UPDATE `tablename` SET `col2`="hello",`col3`="hi",`col4`= 12 WHERE `col1` = '.$_POST['id'].';';
  /*if(mysqli_query($conn,$cmd))
  {
    header('location:display.php');
  } */
?>