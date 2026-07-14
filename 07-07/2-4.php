<!-- 2.4 Write A that demonstrate the use of following string functions:
1)strlen // any string
2)strpos() //find some specific word,letter
3)str_word_count()
4)strrev()
5)strtolower()
6)strtoupper() -->

<?php

    $str = "Darshan Timbadiya";

    echo "Length = " . strlen($str);
    echo "<br>";

    echo "Position of Timbadiya = " . strpos($str, "Timbadiya" );
    echo "<br>";

    echo "Word Count = " . str_word_count($str);
    echo "<br>";

    echo "String Revers = " . strrev($str);
    echo "<br>";

    echo "Lowercase = " . strtolower($str);
    echo "<br>";

    echo "Uppercase = " . strtoupper($str);
  
?>