<?php
include("db.php");

if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    mysqli_query($conn,"INSERT INTO users(username,password,phone_number,email)
    VALUES('$username','$password','$phone','$email')");
}
?>

<html>

<head>
    <title>CRUD</title>
</head>

<body>

    <h2>User Form</h2>

    <form method="post">
        Username :
        <input type="text" name="username"><br><br>

        Password :
        <input type="password" name="password"><br><br>

        Phone :
        <input type="text" name="phone"><br><br>

        Email :
        <input type="email" name="email"><br><br>

        <input type="submit" name="save" value="Save">
    </form>

    <hr>

    <h2>User List</h2>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        <?php
        $data = mysqli_query($conn, "SELECT * FROM users");

        while ($row = mysqli_fetch_array($data)) {
        ?>

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['phone_number']; ?></td>
                <td><?php echo $row['email']; ?></td>

                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                    |
                    <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                </td>

            </tr>

        <?php
        }
        ?>

    </table>

</body>

</html>