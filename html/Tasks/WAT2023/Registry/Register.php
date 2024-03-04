


<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form is not empty
    if (!empty($_POST['txtName']) && !empty($_POST['Email']) && !empty($_POST['txtPass']) && !empty($_POST['Age'])) {
        // Gather data from $_POST
        $Username = $_POST['txtName'];
        $Email = $_POST['Email'];
        $Password = $_POST['txtPass'];
        $Age = $_POST['Age'];

        $hashedPassword = password_hash($Password, PASSWORD_DEFAULT); //Password encrypted

         //INSERT query
        // $query = "INSERT INTO user (Username, Email, Password, Age) VALUES ('$Username', '$Email', '$hashedPassword', '$Age')"; //inputs to database
        
        
        // Prepare the SQL statement to prevent SQL injection
       


        // Bind parameters to the prepared statement
        // "ssss" specifies that each parameter is a string (s)
        // The order corresponds to the order in the VALUES clause of the SQL query
        
        
        
        //Reports errors

        // error_reporting(E_ALL); 
        //     ini_set('display_errors', 1);        

        // Validate email

        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            $validation = "Invalid email format";
        } 

        if (empty($_POST['Age'])) {
            $errorDropdown = "Please select an age group";
        }


        //This will run a check to see if the checkbox is checked if it is submit to database
        if (empty($_POST['confirmCheckbox'])) {
            $errorCheckbox = "Please check the confirmation checkbox";
        }
        if (!ctype_alpha($Username)) {
            $errorUsername = "Username should contain only alphabetic characters";
        }
        else{
            // INSERT query
            $query = "INSERT INTO user (Username, Email, Password, Age) VALUES (?, ?, ?, ?)";
            
            // Prepare the SQL statement to prevent SQL injection
            $stmt = mysqli_prepare($connection, $query);

            // Bind parameters to the prepared statement
            // "ssss" specifies that each parameter is a string (s)
            // The order corresponds to the order in the VALUES clause of the SQL query
            mysqli_stmt_bind_param($stmt, "ssss", $Username, $Email, $hashedPassword, $Age);

            // Execute query
            mysqli_stmt_execute($stmt);

            // Close the prepared statement
            mysqli_stmt_close($stmt);
        }
        
        
        
        
    } else {
        // Check which fields are empty and set error messages
        if (empty($_POST['txtName'])) {
            $errorUsername =  "Username is required ";
        }
        if (empty($_POST['Email'])) {
            $errorEmail = "Email is required ";
        }
        if (empty($_POST['txtPass'])) {
            $errorPassword = "Password is required ";
        }
        if (empty($_POST['Age'])) {
            $errorAge = "Age is required";
        }
    }

}

?>



<html>

<body> 

<h1> Panayiotis Pyrgotis c3641146</h1>

<h2> Register  <br> <br>  Database name User </h2>

<form method="post" action=""> 
        <fieldset>
            <legend>New User Details</legend>
            <label for="Username">Username:</label>
            <input type="text" name="txtName" value="<?php echo isset($_POST['txtName']) ? htmlspecialchars($_POST['txtName']) : ''; ?>" />
            <span class="error"><?php echo $errorUsername; ?></span><br />

            <br>
            <label for="Email">Email:</label>
            <input type="Email" name="Email" value="<?php echo isset($_POST['Email']) ? htmlspecialchars($_POST['Email']) : ''; ?>" />
            <span class="error"><?php echo $errorEmail; ?></span>
            <span class="error"><?php echo $validation; ?></span><br />
            <br>
            <label for="Password">Password:</label>
            <input type="Password" name="txtPass" value="<?php echo isset($_POST['txtPass']) ? htmlspecialchars($_POST['txtPass']) : ''; ?>" />
            <span class="error"><?php echo $errorPassword; ?></span><br />
        <br>
        <label for="Age"> Age:</label>        
        <select name="Age" id="Age">
            <option value="">Select an age group</option>
            <option value="Under 18">Under 18</option>
            <option value="18 to 30">18 to 30</option>
            <option value="31 to 60">31 to 60</option>
            <option value="Over 60">Over 60</option>
        </select>
        <span class="error"><?php echo $errorAge . ' ' . $errorDropdown; ?></span><br />
         <br>
         <br>
            
         <label for="confirmCheckbox">Click to confirm:</label>
        <input type="checkbox" name="confirmCheckbox" id="confirmCheckbox" /><br /><br>
        <span class="error"><?php echo $errorCheckbox; ?></span><br /><br>
        <br>
        <input type="submit" value="Submit" name="loginSubmit"/>
        <input type="reset" value="Clear" onclick="clearTextFields()";/>
    </fieldset>

    <p><a href="/~c3641146/html/wat2023/watIndex.html">Home</a></p>
    
    </form>
</body>
</html>

<script>
        function clearTextFields() {
            document.querySelector('[name="txtName"]').value = '';
            document.querySelector('[name="Email"]').value = '';
            document.querySelector('[name="txtPass"]').value = '';
        }
    </script>


<style> 

.error{
    margin-left: 50px;
    
}

</style>