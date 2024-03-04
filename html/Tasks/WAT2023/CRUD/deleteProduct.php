<?php

include 'connection.php';

 $id = $_GET['prodID'];

 $query = "DELETE FROM products WHERE ProductID = '$id'";

 mysqli_query($connection, $query);

 if (mysqli_affected_rows($connection) > 0) {

    //If yes , return to calling page(stored in the server variables)
    
    header("Location: {$_SERVER['HTTP_REFERER']}");
    
    } else {
    
    // print error message
    
    echo "Error in query: $query. " . mysqli_error($connection);
    
    exit ;
    
    }




?>