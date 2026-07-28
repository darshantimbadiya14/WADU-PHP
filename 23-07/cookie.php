<!-- Create and Retrieve Cookie using Super Global Variable (`$_COOKIE`) -->


<?php

setcookie("username", "Darshan");

if(isset($_COOKIE["username"]))
{
    echo "Cookie Value: " . $_COOKIE["username"];
}
else
{
    echo "Cookie is not set!";
}

?>
