<?php

    //numeric array

    $day = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    print_r($day);

    echo "<br><br>";

    //Associative array

    $month = array(
        "January" => 31,
        "February" => 28,
        "March" => 31,
        "April" => 30,
        "May" => 31,
        "June" => 30,
        "July" => 31,
        "August" => 31,
        "September" => 30,
        "October" => 31,
        "November" => 30,
        "December" => 31
    );
    print_r($month);

    echo "<br><br>";

    //Multidimantion array

    $laptop = array(
        "Asus" => array(
            "model" => "Tuf gaming",
            "price" => "60000"
        ),
        "Apple" => array(
            "model" => "M5 pro",
            "price" => "200000"
        )
    );
    print_r($laptop);
?>