<?php
    include 'conn.php';
    $id = $_POST['id'];
    echo '
    <form action="update2.php" method="post">
        <label for="col2">Enter data in first collum</label>
        <input type="text" name="col2" id="col2">
        <label for="col3">Enter data in first collum</label>
        <input type="text" name="col3" id="col3">
        <label for="col4">Enter data in first collum</label>
        <input type="number" name="col4" id="col4">
        <input type="hidden" name="id" value="'.$id.'">
        <input type="submit" value="submit">
    </form>';
?>
    