<?php
session_start();

session_destroy();

header("Location: 7-login.php");
exit();
?>