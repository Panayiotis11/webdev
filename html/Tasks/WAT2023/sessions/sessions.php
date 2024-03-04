<?php

include 'init.php';

session_start();

if(isset($_SESSION['userID'])){
    echo 'Welcome ' .$_SESSION['userID'].'<br ?/>';
    echo '<a href="logout.php">logout</a><br />';
    echo '<a href="protected.php">see protected page</a><br />';
}else{
    include 'loginform.php';
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
    }    
}

?>