<?php
    session_start();
    include "conn.php";
    include "function.php";
    if($_SERVER['REQUEST_METHOD']='POST')
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(!empty($username) && !empty($password) && !is_numeric($username))
        {
            $query = "SELECT * FROM `logintable` WHERE `user_name` ='$username' limit 1;";
            $result = mysqli_query($conn,$query);
            if($result && mysqli_num_rows($result)> 0)
            {
                $userdata = mysqli_fetch_assoc($result);
                if($password === $userdata['password'])
                {
                    $_SESSION['user_id'] = $userdata['user_id'];
                    header('Location: index.php' );
                    die;
                }
            }
            header('location:login.php');
            die;
        }
        else
        {
            echo "enter valid username and password";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <div id="login">
        login
    </div>
    <form action="#" method="post">
        <input type="text" name="username" id="username">
        <input type="password" name="password" id="password">
        <input type="submit" value="login">
        <a href="signup.php">signup</a>
    </form>
</body>
</html>