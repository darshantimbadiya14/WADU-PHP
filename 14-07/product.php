<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
</head>
<body>

<h2>Product Details</h2>

<form method="post" enctype="multipart/form-data">

    Product ID :
    <input type="number" name="pid"><br><br>

    Product Name :
    <input type="text" name="pname"><br><br>

    Product Price :
    <input type="number" name="price"><br><br>

    Product Quantity :
    <input type="number" name="qty"><br><br>

    Product Type :
    <select name="ptype">
        <option>Electronics</option>
        <option>Clothing</option>
        <option>Food</option>
        <option>Books</option>
    </select><br><br>

    Product Image :
    <input type="file" name="photo"><br><br>

    <input type="submit" name="submit" value="Save">

</form>

</body>
</html>

<?php

include "db.php";

if(isset($_POST['submit']))
{
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $ptype = $_POST['ptype'];

    $photo = $_FILES['photo']['name'];
    $temp = $_FILES['photo']['tmp_name'];

    move_uploaded_file($temp,"uploads/".$photo);

    $sql = "INSERT INTO product
    (product_id,product_name,product_price,product_quantity,product_type,product_image)
    VALUES
    ('$pid','$pname','$price','$qty','$ptype','$photo')";

    if(mysqli_query($conn,$sql))
    {
        echo "Product Added Successfully";
    }
    else
    {
        echo "Error : ".mysqli_error($conn);
    }
}
?>