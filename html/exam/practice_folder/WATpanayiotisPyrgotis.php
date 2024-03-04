<!DOCTYPE html>

<html>

<head>

<title>WAT Practice Phase Exam2</title>

</head>

<body>

<?php

/*The form below will be used to insert a new record into a stock table

*First create the stock table on phpmyadmin using the structure below

*stockID | stockItem | stockQuantity | stockPrice

*----------------------------------------------------

* 1 | Cornflakes | 24 | 1.79

* 2 | Frosties | 56 | 2.49

*complete the form as necessary and produce a separate file to

* complete the insert and return to this page

*/

?>

<h1>Work with databases </h1>

<form method="POST" action="addStock.php">

<label>Item:</label>

<input type="text" name="txtItem" />

<label>Stock:</label>

<input type="text" name="txtStock" />

<label>Price:</label>

<input type="text" name="txtPrice" />

<input type="submit" value="Submit" name="subUser"/>

</form>

<?php

/*At this point on this page the current stock should be displayed

*produce a separate file to display all stock and include that

* file here

*/

include 'displayStock.php';

?>

</body>

</html>