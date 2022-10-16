<?php
    error_reporting(0);
    function check_login($conn)
    {
        if(isset($_SESSION['user_id']))
        {
            $id = $_SESSION['user_id'];
            $query = "SELECT * FROM `logintable` WHERE `user_id` = '$id' limit 1;";
            $result = mysqli_query($conn,$query);
            if($result && mysqli_num_rows($result)>0)
            {
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
        header("Location: login.php");
    }
    function random($length)
    {
        $text = '';
        if($length < 5)
        {
            $length = 5;
        }
        $len = rand(4,$length);
        for($i=0;$i<$len;$i++)
        {
            $text.= rand(0,9);
        }
        return $text;
    }
?>