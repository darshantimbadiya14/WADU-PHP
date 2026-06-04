<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <center>
        <h1>Login Page</h1>
        <form method='post' action='studentlogin.php'>
            Enter Username: <input type='text' id='username' name='username' required><br><br>
            Enter Password: <input type='password' id='password' name='password' required><br><br>
            <input type='submit' value='Login'>
        </form>
    </center>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === "Darshan" && $password === "1234") {
            header("Location: home.php");
        } else {
            echo "<center><h2 style='color: red;'>Login failed!</h2></center>";
        }
    }
?>