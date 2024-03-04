<?php

include 'connection.php';

if(isset($_POST['subProduct'])){
    $name=$_POST['txtName'];
    $price=$_POST['txtPrice'];
    $image=$_POST['txtImage'];


    $query= "INSERT INTO products
    (ProductName, ProductPrice, ProductImageName)
    VALUES ('$name','$price','$image')";

    mysqli_query($connection,$query);

    header("Location: {$_SERVER['HTTP_REFERER']}");
}


?>