<?php
    echo "<h1> Using Escape Characters</h1>";
    echo "Panayiotis Pyrgotis<br />";
    print "c3641146 <br />";
    echo "My first PHP <br />";
    ?>


<?php
$name = 'David';
$age = 12;
$num1 = 9;
$num2 = 12;
echo "<h1> Variables </h1>" . " Hi, my name is " . $name . " and I am " . $age . " years old<br /> ";

echo "Mi nombre es $name y tengo $age anos de edad";

echo "<h1> Functions </h1>";

//gettype() returns..
echo gettype($name);
echo "<br />";
//strlen() returns..
echo strlen($name);
echo "<br />";
//strtoUpper() returns..
echo strtoupper($name);


echo "<h1> Arithmetic </h1>";

echo "num1 = $num1 <br />";

echo "num2 = $num2 <br />";

$multiplication = $num1 * $num2;

echo "$num1" ."x". "$num2 =".$multiplication. "<br />";

$result= ($num1 / $num2) * 100.;

echo " $num1 as a percentage of $num2 = $result ". "%";

echo "<br />";

$result2 = ($num2 / $num1);

$remainder = $num2 % $num1;
echo "$num2  divided by  $num1  =".number_format($result2,2). " remainder ". $remainder;


echo "<br />";

echo "<h1>height in feet and inches</h1>";


$height_in_meters = 1.8;
$height_In_Inches = ($height_in_meters * 100)/2.54;
$feet = (int)($height_In_Inches / 12); 
$inches = $height_In_Inches % 12; 

echo "height in inches =".number_format($height_In_Inches,2). "<br />";

echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Height in Meters: " . $height_in_meters . "<br>";
echo "Height in Feet and inches: " . $feet . "ft " . $inches . "ins";


?>


<p><a href="/~c3641146/html/wat2023/watIndex.html">Home</a></p>