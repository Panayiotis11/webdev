<?php
include 'connection.php';

echo '<h2>Display All Medicine</h2>';

$query = "SELECT * FROM medicines";

$result=mysqli_query($connection, $query);

while ($row=mysqli_fetch_assoc($result)){

    echo $row['mediName'].' '.$row['mediDose'].' '.$row['mediFrequency'].'<br />';
    
    }

echo '<h2>Display All Medicine</h2>';

$query = "SELECT * FROM medicines Where mediDose < 10 and mediFrequency = 'Daily'";

$result=mysqli_query($connection, $query);

while ($row=mysqli_fetch_assoc($result)){

    echo $row['mediName'].' '.$row['mediDose'].' '.$row['mediFrequency'].'<br />';
    
    }

?>