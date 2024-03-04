<?php 

//Make connection to database 
include 'connection_3.php'; 
//(a)Gather from $_POST[]all the data submitted and store in variables //(b)Construct INSERT query using variables holding data gathered //Temporarily echo $query for debugging purposes 
//run $query 

$Firstname = $_POST['txtName'];
$Surname = $_POST['Surname'];
$Email = $_POST['Email'];
$Gender = $_POST['Gender'];
$Age = $_POST['Age'];


$query = "INSERT INTO Customer_3 (FirstName, LastName, Email, Gender, Age) 
VALUES ('$Firstname', '$Surname', '$Email', '$Gender', '$Age')";

header('Location: ' . $_SERVER['HTTP_REFERER']);
mysqli_query($connection, $query); //relocate page,.m  

echo $query; 
exit();



?>