<!-- 3.4 PHP Program to Delete a Cookie -->


<?php

setcookie("username", "", time() - 3600);

echo "Cookie Deleted ";

?>