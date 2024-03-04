<?php

include 'connect.php';

$query="SELECT * FROM stock";

//store the result of the query in a variable called $result

$result=mysqli_query($connection, $query);

//Use a while loop to iterate through your $result array and display

//the first name, last name and email for each record

while ($row=mysqli_fetch_assoc($result)){

echo $row['stockID'] . ' ' . $row['stockItem'] . $row['stockQuantity']. ' ' . $row['stockPrice'].'<br />';

}

?>