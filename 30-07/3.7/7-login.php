<!-- 3.7 Write a PHP script to create a session when the user log in using
the form, Provide an option to logout. Once the user logs out then

he/she should not be able to open the home page using the URL. -->

<html>
<head>
    <title>Login</title>
</head>
<body>

<form 
method="post">
    Username:
    <input type="text" name="name">
    <input type="submit" name="btn" value="Login">
</form>
</body>
</html>


<?php
session_start();

if(isset($_POST['btn']))
{
    $_SESSION["name"] = $_POST["name"];
    header("Location: 7-home.php");
    exit();
}
?>
