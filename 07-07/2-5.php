<!-- 2.5 Write a PHP code For User Define Function For calculator, take input from user by creating simple html form. -->

<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Calculator</h2>

<form method="post">
    First Number:
    <input type="text" name="n1"><br><br>

    Second Number:
    <input type="text" name="n2"><br><br>

    Operation:
    <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br><br>

    <input type="submit" value="Calculate">
</form>

<?php
function calc($a, $b, $op)
{
    if($op == "+")
        return $a + $b;
    elseif($op == "-")
        return $a - $b;
    elseif($op == "*")
        return $a * $b;
    elseif($op == "/")
        return $a / $b;
}

if(isset($_POST['op']))
{
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $op = $_POST['op'];

    echo "<h3>Result = " . calc($n1, $n2, $op) . "</h3>";
}
?>

</body>
</html>


