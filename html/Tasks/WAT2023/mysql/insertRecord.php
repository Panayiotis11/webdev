<?php 

//Make connection to database 
include 'connection.php'; 
//(a)Gather from $_POST[]all the data submitted and store in variables //(b)Construct INSERT query using variables holding data gathered //Temporarily echo $query for debugging purposes 
//run $query 

$Firstname = $_POST['txtName'];
$Surname = $_POST['Surname'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Gender = $_POST['Gender'];
$Age = $_POST['Age'];


$query = "INSERT INTO Customer (FirstName, LastName, Email, Password, Gender, Age) VALUES ('$Firstname', '$Surname', '$Email', '$Password', '$Gender', '$Age')";

mysqli_query($connection, $query);
header('Location: ' . $_SERVER['HTTP_REFERER']);
echo $query; 
exit();




?>




