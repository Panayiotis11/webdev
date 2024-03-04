
<form method="post" action="insertRecord.php"> 
        <fieldset>
            <legend>Enter Customer Details</legend>
            <label for="Firstname">Firstname:</label>
            <input type="text" name="txtName" /><br />
            <br>
            <label for="Surname">Surname:</label>
            <input type="Surname" name="Surname" /><br />
            <br>
            <label for="Email">Email:</label>
            <input type="Email" name="Email" /><br />
            <br>
            <label for="Password">Password:</label>
            <input type="Password" name="Password" /><br />
        <br>
            <label for="Gender"> Gender:</label>        
            <select name="Gender" id="Gender">
            <option value="M">Male</option>
            <option value="F">Female</option>
         <select>
         <br>
         <br>
            <label for="Age">Age:</label>
            <input type="Age" name="Age" /><br />
        <br>
        <input type="submit" value="Submit" name="loginSubmit" />
        </fieldset>
    </form>
    <p><a href="/~c3641146/html/wat2023/watIndex.html">Home</a></p>


    <?php

include 'selectRecord.php';

?>