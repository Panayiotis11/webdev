<!DOCTYPE html>
<html lang="en">
<head>
    <title>WAT Phase Test</title>
</head>
<body>
    <h1>Generate Statements</h1>
    <?php
    /* Output your name and ID to the screen on separate lines */
    $name = "Panayiotis Pyrgotis <br>";
    $id = "c3641146";
    echo "$name $id";


    ?>
     <h1>Use Conditional Statements</h1>

    <?php

/* 
Declare a variable called age and assign it a value of 18
Use an IF statement to test the age variable to assess 
whether it is equal to 21.  Output 'Equal to 21' or 'Not equal to 21'
*/

$age = 18;

if ($age == 21){
    echo "it is equal to 21 <br> ";
}
else {
    echo "not equal to 21 <br> ";
}


$spend = 50;
$day = 'Mon';

if ($spend > 50 && $day === 'Mon') {
    echo 'Discount applied';
} elseif ($spend <= 50) {
    echo 'Spend not over £50. No Discount <br>';
} elseif ($day !== 'Mon') {
    echo 'Not Monday <br> No discount <br>';
} else {
    echo 'Less than £50 and not Monday. No discount <br>';
}
    ?>

<h1>Using Loops</h1>

<?php
/* Declare an associative array and put in key value pairs of student names and ID's
e.g. Amin/c123456, Lisa/c234567, Matthew/c345678
use a loop to iterate through the array and output the key=> value pairs to produce:
  Amin:  c123456
  Lisa: c234567
  Matthew: c345678
*/

$students = array(
    'Amin' => 'c123456',
    'Lisa' => 'c234567',
    'Matthew' => 'c345678');

foreach ($students as $name => $id) {
    echo $name . ': ' . $id . '<br>';
}
?>
<h1>Work with databases </h1>
    <form method="post" action="insertMedicine.php">
        <label>Medicine Name:</label>
        <input type="text" name="txtName">
        <label>Medicine Dose(ml):</label>
        <input type="text" name="txtDose">
        <label>Medicine Frequency:</label>
        <input type="text" name="txtFrequency">
        <input type="submit" value="Submit" name="mediSubmit">
    </form>


    <br>

    <?php


include 'displaySelectedMedicine.php';    
    ?>


<?php

/*
The form below should be used to input an annual salary. You should use that value to calculate monthly student loan repayments for English students that started before 2023.  The calculation uses the formula below:
  - Monthly Salary = Annual Salary / 12
  - Taxable amount = Monthly Salary - 2274
  - Monthly Tax = (Taxable  Amount /100) x 9


Gather the value entered into the form (make it greater than 27295)
Use that value to complete the calculation above.  Output as in the example below:


Monthly Salary = £30000
Monthly Repayment = £20.34


For extra marks modify your code so that if a salary of less than 27295
is entered then the output is simply - 'Salary below threshold, nothing to pay'.


For more extra marks add validation and provide error messages if the text box is empty or if it is not a number, or if that number is not greater than 1.  Finally make the value persist once form is submitted.
*/


?>

<h1>Work with HTML forms </h1>
    <form method="post" action="">
        <label>Annual Salary:</label>
        <input type="text" name="txtSalary">
        <input type="submit" value="Submit" name="subSalary"> 
    </form>
    
    <?php
        

// Check if the form is submitted
if (isset($_POST['subSalary'])) { //Thats the name of the submit button in form above
    // Validate input
    if (empty($_POST['txtSalary']) || !is_numeric($_POST['txtSalary']) || $_POST['txtSalary'] <= 0) {
        echo "Error: Enter a valid salary greater than 0.";
    } else {
        // Get the annual salary from the form
        $annualSalary = $_POST['txtSalary'];

        // Check if salary is below the threshold
        if ($annualSalary < 27295) {
            echo "Salary below threshold, nothing to pay";
        } else {
            // Perform calculations
            $monthlySalary = $annualSalary / 12;
            $taxableAmount = $monthlySalary - 2274;
            $monthlyTax = ($taxableAmount / 100) * 9;

            // Output the results
            echo "Monthly Salary = £" . number_format($monthlySalary, 2) . "<br>";
            echo "Monthly Repayment = £" . number_format($monthlyTax, 2);
        }
    }
}
?>



