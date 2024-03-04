

<!DOCTYPE html>
<html>
<head>
    <title>Your Page Title</title>
</head>
<body>


    <form method="post" action="Advanced_Forms.php">
        <fieldset>
            <legend>Comments</legend>
            <label for="" class="email">Email:</label>
            <input type="text" name="emailTxt" value="" class="email" /><br />
            <label for="description" id="description_text">Description:</label>
            <textarea rows="3" cols="50" name="txtArea" class="description"></textarea><br />
            <label for="" class="confirm">Click to Confirm:</label>
            <input type="checkbox" name="checkbox" value="agree" class="confirm"><br />
            <input type="submit" value="Submit" name="chkConfirm" class="button" />
            <input type="reset" value="Clear" class="button" />
        </fieldset>
<br>
<br>
    </form>

    <?php
    if (isset($_POST['chkConfirm'])) {
        if (!empty($_POST['emailTxt'])) {
            $email = isset($_POST['emailTxt']) ? filter_var($_POST['emailTxt'], FILTER_VALIDATE_EMAIL) : '';
            if ($email == true) {
                $description = isset($_POST['txtArea']) ? $_POST['txtArea'] : '';
                $checkbox = isset($_POST['checkbox']) && $_POST['checkbox'] === 'agree' ? 'Agreed' : 'Not Agreed';
                echo "Email: $email <br >";
                echo "Comments: $description <br >";
                echo "Confirm: $checkbox";
            } else {
                echo 'Email invalid';
            }
        } else {
            echo '<br >';
            echo 'Email must not be empty';
            echo '<br >';
            echo '<br >';
        }
    } else {
        $confirm = 'Not Agreed<br />';
    }
    ?>
<br>
    <form method="post" action="Advanced_Forms.php">
        <fieldset>
            <legend>Without Tax Calculator</legend>
            <label for="" class="tax">After Tax Price:</label>
            <input type="text" name="TaxTxt" class="Tax_text" value="<?php
                if (isset($_POST['TaxTxt'])) {
                    echo $_POST['TaxTxt'];
                }
            ?>" />
            <label for="Tax Rate" id="Tax Rate">Tax Rate:</label>
            <input type="text" name="RateTxt" class="Tax_text" value="<?php
                if (isset($_POST['RateTxt'])) {
                    echo $_POST['RateTxt'];
                }
            ?>" />
            <input type="submit" value="Submit" name="Confirm" class="button" />
            <input type="button" value="Clear" class="button" onclick="clearTextFields()" />
        </fieldset>
    </form>

    <?php
    // Initialize variables to hold form values
    $after_tax_price = '';
    $tax_rate = '';

    // Check if the form is submitted
    if (isset($_POST['Confirm'])) {
        // Check if TaxTxt and RateTxt are not empty
        if (!empty($_POST['TaxTxt']) && !empty($_POST['RateTxt'])) {
            $after_tax_price = $_POST['TaxTxt'];
            $tax_rate = $_POST['RateTxt'];

            // Validate that the entered values are numeric
            if (is_numeric($tax_rate)) {
                // Check if the tax rate is a whole number (an integer)
                if (filter_var($tax_rate, FILTER_VALIDATE_INT)) {
                    // Check if the price entered is numeric and has two decimal places
                    if (is_numeric($after_tax_price) && preg_match('/^\d+(\.\d{2})?$/', $after_tax_price)) {
                        // Calculate the price before tax
                        $Price_before_tax = $after_tax_price / (1 + ($tax_rate / 100));
                        echo 'Price before tax is £' . $Price_before_tax;
                    } else {
                        echo 'Please enter a valid number for after-tax price with up to two decimal places (e.g., 9.99)';
                    }
                } else {
                    echo 'Please enter a whole number for the tax rate.';
                }
            } else {
                echo 'Please enter a valid numeric value for the tax rate.';
            }
        } else {
            echo 'Please enter valid values for after-tax price and tax rate.';
        }
    } else {
        echo 'All fields required';
    }
    ?>

    <script>
        function clearTextFields() {
            document.querySelector('[name="TaxTxt"]').value = '';
            document.querySelector('[name="RateTxt"]').value = '';
        }
    </script>



<h1>Passing Data Appended to an URL</h1>

    <h2>Pick a category</h2>

    <a href="Advanced_Forms.php?cat=Films">Films</a>
    <a href="Advanced_Forms.php?cat=Books">Books</a>
    <a href="Advanced_Forms.php?cat=Music">Music</a>


    <?php
    // Check if the 'cat' parameter is set in the URL
    if (isset($_GET['cat'])) {
        // Retrieve the category value from the URL
        $category = $_GET['cat'];
        // Display the selected category
        echo '<p>You selected the category: ' . $category . '</p>';
    }
    ?>
        
</body>
</html>





<style>
    .description{
       
        vertical-align: -38px;
    }

    .email{
        margin-bottom: 10px;
    }

    .confirm{
        margin-top: 10px;
    }

    .button{
        margin-top: 10px;
    }
</style>