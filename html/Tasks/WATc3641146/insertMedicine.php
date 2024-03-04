<?php 

//Make connection to database 
include 'connection.php'; 
//(a)Gather from $_POST[]all the data submitted and store in variables //(b)Construct INSERT query using variables holding data gathered //Temporarily echo $query for debugging purposes 
//run $query 

$MediName = $_POST['txtName'];
$mediDose = $_POST['txtDose'];
$mediFrequency = $_POST['txtFrequency'];


$query = "INSERT INTO medicines (mediName, mediDose, mediFrequency) 
VALUES ('$MediName', '$mediDose', '$mediFrequency')";

header('Location: ' . $_SERVER['HTTP_REFERER']);
mysqli_query($connection, $query); //relocate page,.m  

echo $query; 
exit();



?>