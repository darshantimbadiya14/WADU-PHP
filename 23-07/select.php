<?php

include "db.php";

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0)
{
    while ($row = $result->fetch_assoc())
    {
        echo $row['id']."<br>";
        echo $row['username']."<br>";
        echo $row['password']."<br>";
        echo $row['email']."<br>";
        echo $row['phone']."<br><br>";
    }
}
else
{
    echo "No data found!";
}

?>


craet a php scritp craet and retrive cookie data using super global varible 