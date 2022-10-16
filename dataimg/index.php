<?php
 error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file"><br><br>
        <input type="submit" value="upload fie" name="submit">
    </form>
</body>
</html>
<?php 
    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $folder ="img/".$filename;
    echo $folder;
    //upload and download in folder source and destination
    move_uploaded_file($tempname,$folder);
    //print_r is to print array
    //print_r($_FILES["file"]);
    $server = "Localhost";
    $user = "root";
    $password = "";
    $database = "project";
    $conn = mysqli_connect($server,$user,$password,$database);
    if(!$conn)
    {
        echo '<script>alert("not connected")</script>';
    }
    else
    {
        echo '<script>alert("connected")</script>';
    }
    $cmd = "INSERT INTO `image_data`(`path`, `name`) VALUES ('$folder','$filename');";
    if(mysqli_query($conn,$cmd))
    {
        echo "<script>console.log('inserted data')</script>";
    }
    $cmd = "SELECT * FROM `image_data`;";
    $result = mysqli_query($conn,$cmd);
    echo "
    <table>
    <tr>
        <th>image</th>
        <th>image name</th>
    </tr>
    ";
    while($row = mysqli_fetch_assoc($result))
    {
        echo "
                <tr>
                    <td><img src='$row[path]'></td>
                    <td>$row[name]</td>
                </tr>
        ";
    }
    echo "</table>";
?>
