<!-- 3.2 Write a PHP script to read the cookie of a form  -->

<!DOCTYPE html>
<html>

<head>
    <title>Read Cookie</title>
</head>

<body>

    <?php

    if (isset($_COOKIE["username"])) {
        echo "Cookie Value: " . $_COOKIE["username"];
    } else {
        echo "Cookie Not Found!";
    }

    ?>

</body>

</html>