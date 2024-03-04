<?php
include 'connection.php';

$id = $_GET['prodID'];

$query = "SELECT * FROM products WHERE ProductID='$id'";

$result = mysqli_query($connection,$query);

$row = mysqli_fetch_assoc($result);
// print_r($row);
// exit();


?>



<form method="post" action="updateProduct.php"> 
        <fieldset class = "fieldset-width">
            <legend>Enter Product details</legend>
            <input type="hidden" name="hideProductID" value="<?php echo $row['ProductID']?>" />
            <label for="Product Name">Product Name:</label>
            <input type="text" name="txtName" value="<?php echo $row['ProductName']?>" /><br />
            <br>
            <label for="Price">Price:</label>
            <input type="Price" name="txtPrice" value="<?php echo $row['ProductPrice']?>"/><br />
            <br>
            <label for="Image Filename">Image Filename:</label>
            <input type="Image Filename" name="txtImage" value="<?php echo $row['ProductImageName']?>"/><br />
            <br>
         
        <br>
        <input type="submit" value="Submit" name="subProduct" />
        <input type="reset" value="Clear" />
        </fieldset>
    </form>
