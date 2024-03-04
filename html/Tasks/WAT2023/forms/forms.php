<?php 
    // Error reporting for debugging
    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Processing Input from HTML Forms</title>
</head>
<body>
    <h1>Processing Input from HTML Forms</h1>
    <h2>Login Form using POST</h2>

    <form method="post" action="forms.php"> 
        <fieldset>
            <legend>Login</legend>
            <label for="email">Email:</label>
            <input type="text" name="txtEmail" /><br />
            <label for="passwd">Password:</label>
            <input type="password" name="txtPass" /><br />
            <input type="submit" value="Submit" name="loginSubmit" />
            <input type="reset" value="Clear" />

        </fieldset>

        <p><a href="/~c3641146/html/wat2023/watIndex.html">Home</a></p>
    </form>

    <?php
    // Process the form data
    if (isset($_POST['loginSubmit'])) {
        $email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : '';
        $password = isset($_POST['txtPass']) ? $_POST['txtPass'] : '';
        echo "Email: $email. Password: $password";
    } else {
        // Handle the case when the form is not submitted
    }
    ?>

<br>
<br>
<a href= "Advanced_Forms.php"> Advanced Forms </a>

</body>
</html>

