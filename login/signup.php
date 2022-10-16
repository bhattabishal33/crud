<?php
    session_start();
    include "conn.php";
    include "function.php";
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(!empty($username) && !empty($password) && !is_numeric($username))
        {
            $userid = random(20);
            $query = "INSERT INTO `logintable`(`user_id`, `user_name`, `password`) VALUES ('$userid','$username','$password');";
            mysqli_query($conn,$query);
            header('location:login.php');
            die;
        }
        else
        {
            echo "enter valid data";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
</head>
<body>
    <div>
        sign up
    </div>
    <form action="#" method="post">
        <input type="text" name="username" id="username">
        <input type="password" name="password" id="password">
        <input type="submit" value="signup">
        <a href="login.php">login</a>
    </form>
</body>
</html>