<!-- 3.8 Write a PHP script to create a PHP script, which will store a cookie on the
client’s device to identify whether the user is a new one or a repeated one.  -->




<?php

if(isset($_COOKIE["user"]))
{
    echo "Welcome Back! Repeated User";
}
else
{
    setcookie("user", "Darshan", time()+3600);
    echo "Welcome! New User";
}

?>




