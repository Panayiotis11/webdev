<?php

    // var_dump($_POST);
    // exit();

//Make connection to database 
include 'connect.php'; 
//(a)Gather from $_POST[]all the data submitted and store in variables //(b)Construct INSERT query using variables holding data gathered //Temporarily echo $query for debugging purposes 
//run $query 

$Item = $_POST['txtItem'];
$stock = $_POST['txtStock'];
$price = $_POST['txtPrice'];


$query = "INSERT INTO stock (stockItem, stockQuantity ,stockPrice) VALUES ('$Item ', '$stock ', '$price')";

// echo $query; 
// exit();
echo $query;
mysqli_query($connection, $query);

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>