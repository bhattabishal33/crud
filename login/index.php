<?php
    session_start();
    include "conn.php";
    include "function.php";
    $user_data = check_login($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>my website</title>
</head>
<body>
    <h1>This is a page</h1>
    <a href="logout.php">Logout</a>
    <br>
    <h1>Hello username</h1>
</body>
</html>