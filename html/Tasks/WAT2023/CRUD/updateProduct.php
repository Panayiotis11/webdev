<?php

include 'connection.php';


if(isset($_POST['subProduct'])){
$id = $_POST['hideProductID'];
$name = $_POST['txtName'];
$price = $_POST['txtPrice'];
$image = $_POST['txtImage'];

$query = "
    Update products
    SET
        ProductName = '$name',
        ProductPrice = '$price',
        ProductImageName = '$image'
    WHERE
        ProductID = '$id'";

mysqli_query($connection,$query);

header("Location:./displayProducts.php");
}
?>