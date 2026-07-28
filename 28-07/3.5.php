<!-- 3.5 PHP Program to Create a Session -->

<!DOCTYPE html>
<html>
<head>
    <title>Session Create</title>
</head>
<body>

<form method="post">
    Enter Name:
    <input type="text" name="name">
    <input type="submit" name="btn" value="Submit">
</form>

<?php

session_start();

if(isset($_POST['btn']))
{
    $_SESSION["name"] = $_POST["name"];
    header("Location: welcome.php");
}
?>

</body>
</html>
