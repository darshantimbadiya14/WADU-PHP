<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
</head>
<body>

<h1>Sign Up Form</h1>

<form method="post" enctype="multipart/form-data">

    Username:<input type="text" name="Username"><br><br>
    Password:<input type="password" name="Password"><br><br>
    Confirm Password:<input type="password" name="ConfirmPassword"><br><br>
    Email:<input type="email" name="Email"><br><br>
    Phone No.:<input type="text" name="Phonenum"><br><br>
    Profile:<input type="file" name="Photo"><br><br>
    <input type="submit" name="Submit" value="Sign Up">

</form>

</body>
</html>

<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $confirm = $_POST['ConfirmPassword'];
    $email = $_POST['Email'];
    $phone = $_POST['Phonenum'];

    if($password != $confirm)
    {
        echo "Password does not match.";
    }
    else
    {
        $photo = $_FILES['Photo']['name'];
        $temp = $_FILES['Photo']['tmp_name'];

        move_uploaded_file($temp, "uploads/".$photo);

        $sql = "INSERT INTO user(username,password,email,phone,photo) VALUES('$username','$password','$email','$phone','$photo')";

        if(mysqli_query($conn, $sql))
        {
            echo "Registration Successful";
        }
        else
        {
            echo "Error";
        }
    }
}
?>