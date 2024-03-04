<?php

//include init.php
include 'init.php';

//Gather details submitted from the $_POST array and store in local vars
if (isset($_POST['subLogin'])){
    $user = $_POST['txtUser'];
    $pass= $_POST['txtPass'];
}
//build query to SELECT records from the users table WHERE
$query="SELECT * From users Where username = '$user' AND txtPass = '$pass'";
// echo $query;
// exit();
//the username AND password in the table are equal to those entered.

//run query and store result
$result = mysqli_query($connection,$query);
//check result and generate message with code below

if ($row = mysqli_fetch_assoc($result)) {
$_SESSION['userID'] = $user;
header ('location:sessions.php');

} else {
    $_SESSION['error']= 'User not recognised';
    header ('location: sessions.php');

}

?>