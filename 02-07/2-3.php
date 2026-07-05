<!-- array_change_key_case() -->

<?php 

    $a = array("Name"=>"Darshan","City"=>"Rajkot"); 
    print_r(array_change_key_case($a, CASE_LOWER)); 
    echo "<br><br>";

?>

<!-- array_chunk() -->

<?php 

    $months = array("Jan","Feb","Mar","Apr","May","Jun"); 
    print_r(array_chunk($months,2)); 
    echo "<br><br>";
?>


<!-- array_count_values() -->

<?php 
    $a = array("A","B","A","C","B","A"); 
    print_r(array_count_values($a));
    echo "<br><br>"; 
?>

<!-- array_pop() -->

<?php 
    $a = array("Red","Green","Blue"); 
    array_pop($a); 
    print_r($a);
    echo "<br><br>"; 
?>

<!-- array_push() -->

<?php 
    $a = array("Red","Green"); 
    array_push($a,"Blue"); 
    print_r($a); 
    echo "<br><br>";
?>

<!-- array_unshift() -->

<?php 
    $a = array("Green","Blue"); 
    array_unshift($a,"Red"); 
    print_r($a); 
    echo "<br><br>";
?>

<!-- array_shift() -->

<?php 
    $a = array("Red","Green","Blue"); 
    array_shift($a); 
    print_r($a); 
    echo "<br><br>";
?>

