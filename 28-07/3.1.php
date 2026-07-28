<!-- 3.1 Write a PHP script to create cookie in a form.  -->

<!DOCTYPE html>
<html>

<head>
    <title>Create Cookie</title>
</head>

<body>

    <form method="post">
        Enter Name:
        <input type="text" name="name">
        <input type="submit" name="btn" value="Save">
    </form>

</body>

</html>

    
    
    <?php
    if (isset($_POST['btn'])) {
        $name = $_POST['name'];

        setcookie("username", $name, time() + 3600);
    }
    ?>

