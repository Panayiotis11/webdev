<html> 

<body> 

<h1> Panayiotis Pyrgotis c3641146</h1>

<h1> Search </h1>

</body> 

</html>


<form method="get" action="">
    <label for="category">Select Category:</label>
    <select name="category" id="category">
        <option value="all">All Categories</option>
        <!-- Add options for each category available in your database -->
        <option value="Wraps">Wraps</option>
        <option value="Burgers">Burgers</option>
        <option value="Pizza">Pizza</option>
        <!-- Add more categories as needed -->
    </select>
    <input type="submit" value="Search">
</form>

<?php

include 'connection.php';

// Check if a specific category is selected
if(isset($_GET['category'])) {
    $selectedCategory = $_GET['category'];
    
    // Modify the query to filter by category
    if($selectedCategory === 'all') {
        $query_cattegory = "SELECT * FROM Food"; //query for cattegory task
    } else {
        $selectedCategory = mysqli_real_escape_string($connection, $selectedCategory);
        $query_cattegory  = "SELECT * FROM Food WHERE Category = '$selectedCategory'";
    }

    // Display selected category
    echo '<p>Selected Category: ' . htmlspecialchars($selectedCategory) . '</p>';

    $results = mysqli_query($connection, $query_cattegory );

    echo '<table>'; // Start the table
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>FoodName</th>';
    echo '<th>Category</th>';
    echo '<th>FoodPrice</th>';
    echo '<th>FoodImage</th>';
    echo '</tr>';

    while ($row = mysqli_fetch_assoc($results)) {
        echo '<tr>';
        echo '<td style="padding-right: 10px;">' . $row['ID'] . '</td>';
        echo '<td style="padding-right: 10px;">' . $row['FoodName'] . '</td>';
        echo '<td style="padding-right: 10px;">' . $row['Category'] . '</td>';
        echo '<td style="padding-right: 10px;">' . '£' . $row['FoodPrice'] . '</td>';
        echo '<td style="padding-right: 10px;"><img width="100" height="100" src="./images/' . $row['FoodImageName'] . '" /></td>';
        echo '</tr>';
    }

    echo '</table>'; // End the table
} else {
    echo '<p>No category selected.</p>';
}


echo "<h1> Display all food items </h1>";
echo '<br > ' ;

// Set the query to select all foods
$query = "SELECT * FROM Food";

$results = mysqli_query($connection, $query);

echo '<table>'; // Start the table
echo '<tr>';
echo '<th>ID</th>';
echo '<th>FoodName</th>';
echo '<th>Category</th>';
echo '<th>FoodPrice</th>';
echo '<th>FoodImage</th>';
echo '</tr>';

while ($row = mysqli_fetch_assoc($results)) {
    echo '<tr>';
    echo '<td style="padding-right: 10px;">' . $row['ID'] . '</td>';
    echo '<td style="padding-right: 10px;">' . $row['FoodName'] . '</td>';
    echo '<td style="padding-right: 10px;">' . $row['Category'] . '</td>';
    echo '<td style="padding-right: 10px;">' . '£' . $row['FoodPrice'] . '</td>';
    echo '<td style="padding-right: 10px;"><img width="100" height="100" src="./images/' . $row['FoodImageName'] . '" /></td>';
    echo '</tr>';
}




?>

<p><a href="/~c3641146/html/wat2023/watIndex.html">Home</a></p>

