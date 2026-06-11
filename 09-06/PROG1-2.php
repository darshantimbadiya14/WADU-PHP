<!-- 1.2 Write a PHP program to find out maximum and minimum number. -->

<?php

    $num1 = 50;
    $num2 = 70;

    if ($num1 > $num2) {
        echo "<h1>Maximum Number: " . $num1 . "</h1>";
        echo "<h1>Minimum Number: " . $num2 . "</h1>";
    } elseif ($num2 > $num1) {
        echo "<h1>Maximum Number: " . $num2 . "</h1>";
        echo "<h1>Minimum Number: " . $num1 . "</h1>";
    } else {
        echo "<h1>Both numbers are equal.</h1>";
    }
?>



