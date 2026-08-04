<?php
session_start();

if(!isset($_SESSION["name"]))
{
    header("Location: 7-login.php");
    exit();
}

echo "<h2>Welcome ".$_SESSION["name"]."</h2>";
?>

<a href="7-logout.php">Logout</a>

?>


