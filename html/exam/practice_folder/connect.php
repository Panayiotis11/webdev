<?php  
//Set up the database access credentials 
$hostname = 'stu-db.aet.leedsbeckett.ac.uk';  
$username = 'c3641146'; //your standard uni id 
$password = 'MyDB09150741'; // the password found on the W: drive $databaseName = 'youruserid'; //the name of the db you are using on phpMyAdmin $connection = mysqli_connect($hostname, $username, $password, $databaseName) or  exit("Unable to connect to database!"); 
$databaseName = 'c3641146-dev';
$connection = mysqli_connect($hostname, $username, $password, $databaseName) or  exit("Unable to connect to database!");
?>