<?php 

//Make connection to database 
include 'connection.php'; 
//(a)Gather from $_POST[]all the data submitted and store in variables //(b)Construct INSERT query using variables holding data gathered //Temporarily echo $query for debugging purposes 
//run $query 

$Username = $_POST['txtName'];
$Email = $_POST['Email'];
$Password = $_POST['txtPass'];
$Age = $_POST['Age'];


$query = "INSERT INTO user (Username, Email, Password, Age) VALUES ('$Username', '$Email', '$Password', '$Age')";

mysqli_query($connection, $query);
header('Location: ' . $_SERVER['HTTP_REFERER']);
// echo $query; 
// exit();




?>