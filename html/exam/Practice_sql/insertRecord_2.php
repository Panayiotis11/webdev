<?php 

//Make connection to database 
include 'connection_2.php'; 
//(a)Gather from $_POST[]all the data submitted and store in variables //(b)Construct INSERT query using variables holding data gathered //Temporarily echo $query for debugging purposes 
//run $query 

$Firstname = $_POST['txtName'];
$Surname = $_POST['Surname'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Gender = $_POST['Gender'];
$Age = $_POST['Age'];


$query = "INSERT INTO Customer_2 (FirstName, LastName, Email, Password, Gender, Age) VALUES ('$Firstname', '$Surname', '$Email', '$Password', '$Gender', '$Age')";

header('Location: ' . $_SERVER['HTTP_REFERER']);
mysqli_query($connection, $query); //relocate page,.m  

echo $query; 
exit();



?>

