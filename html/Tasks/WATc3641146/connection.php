<?php  
$hostname = 'stu-db.aet.leedsbeckett.ac.uk';
$username = 'c3641146';
$password = 'MyDB09150741';
$databaseName = 'c3641146-dev'; // Set the correct database name
$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit("Unable to connect to database!");

?>