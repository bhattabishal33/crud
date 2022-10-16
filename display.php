<?php
    include 'conn.php';
    $cmd ='SELECT * FROM `tablename`;';
    $result = mysqli_query($conn, $cmd);
    echo "<table>
    <tr>
        <th>col1</th>
        <th>col2</th>
        <th>col3</th>
        <th>col4</th>
    </tr>
    ";
    while($row = mysqli_fetch_array($result))
    {

        echo '<tr>
            <td>'.$row['col1'].'</td>
            <td>'.$row['col2'].'</td>
            <td>'.$row['col3'].'</td>
            <td>'.$row['col4'].'</td>
            <td>
                <a href="delete.php?id='.$row['col1'].'"><input type="button" value="delete"></a>
            </td>
            
                <form action="update.php" method="post">
                    <input type="hidden" name="id" value="'.$row['col1'].'">
                    <td><input type="submit" value="update"></td>
                </form>
            
            </tr>';
    }
    echo "</table>";
?>