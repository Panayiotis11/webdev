
<!DOCTYPE html> <!-- Table code -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products</title>
    <style>
        /* Add any additional CSS styling as needed */
        .fieldset-width {
            width: 300px; /* Adjust the width as needed */
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Image</th>
            
        </tr>
    </thead>
    <tbody>

<?php
include 'connection.php';


$query = "SELECT * FROM products";

$results = mysqli_query($connection,$query);

        while ($row = mysqli_fetch_assoc($results)) {
            echo '<tr>';
            
            // Product Name
            echo '<td>' . $row['ProductName'] . '</td>';
            
            // Product Price
            echo '<td>' . $row['ProductPrice'] . '</td>';
            
            // Product Image
            echo '<td><img width="100" height="100" src="./images/' . $row['ProductImageName'] . '" /></td>';

            echo '<td>' . $row['ProductID'] . '</td>';
            
            // Amend link
            echo '<td><a href="amendProduct.php?prodID=' . $row['ProductID'] . '">Amend</a>';
           

            // Delete link
            echo ' <a href="deleteProduct.php?prodID=' . $row['ProductID'] . '">Delete</a></td>';
            
            echo '</tr>';
        }
        ?>

    </tbody>
</table>



?>





