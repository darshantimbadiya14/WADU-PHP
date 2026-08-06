<?php
include("db.php");

$id=$_GET['id'];

$data=mysqli_query($conn,"SELECT * FROM users WHERE id=$id");
$row=mysqli_fetch_array($data);

if(isset($_POST['update']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];

    mysqli_query($conn,"UPDATE users SET
username='$username',
password='$password',
phone_number='$phone',
email='$email'
WHERE id=$id");

    header("Location:display.php");
}
?>

<form method="post">

Username :
<input type="text" name="username" value="<?php echo $row['username']; ?>"><br><br>

Password :
<input type="text" name="password" value="<?php echo $row['password']; ?>"><br><br>

Phone :
<input type="text" name="phone" value="<?php echo $row['phone_number']; ?>"><br><br>

Email :
<input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>

<input type="submit" name="update" value="Update">

</form>