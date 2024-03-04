<!DOCTYPE html> 
<html lang="en"> 
 <head> 
 <title>Web Applications and Technologies</title> 
 <link type="text/css" rel="stylesheet" href="main.css" />  </head> 
 <body> 
 <header> 
 <h1>Panayiotis Pyrgotis c3641146</h1>  

 </header> 
  
 <section id="container"> 
 <h1>Fundamentals of PHP</h1> 

 <header> 
     <h1> Selection </h1>
 </header>
 <br>



 <?php 
//Task 1
    $day= date("l"); //l is for the day
    echo 'it\'s '.$day; 
    echo '<br />';
    
//Task 2
    $day = "Tuesday";

    echo "it's " . $day;

    echo '<br />';
    
//Task 3    
   
    if ($day != date("l")){
        echo "it's not midweek";
    }
    else{
        echo "it's midweek";
    }
    echo '<br />';
   
//Task 4

$hour = 18;
//    $hour = date("H");
    if ($hour < 12){
        echo "Good Morning";
    }
    elseif($hour>12 and $hour<18){
        echo "Good Afternoon";
    }
    else {
        echo "Good Night";
    }

    echo '<br />';
    echo '<br />';
    

//Task 5

$password="password";
//$password="username";
    if (strLen($password) > 4 and strlen($password>10)){
        echo "Password length is valid";
        echo '<br />';
        
    
        if ($password == "password"){
            echo "password valid";
        }else{
            echo "password invalid";
        }        
    }else{
        echo "Password length is invalid";
    }
    echo '<br />';

    echo '<br />';
    

//Task 6
    
    $ticket_price= 25;
    $age = 15;
    $membership = True;
    $discount = 18.75;
    
    echo "Initial price: ". $ticket_price;
    echo '<br />';
    echo "Age: ".$age;
    echo '<br />';
    echo "Member: ". ($membership? "Yes" : "No");
    echo '<br />';
    
    
        if ($membership){
            if ($age < 12){
            echo "Final Ticket Price: ". ($ticket_price / 2) - 1.87;
        }
        else if ($age < 18){
            echo "Final Ticket Price: ". $discount - 1.87;
        }
        else if ($age >= 65){
            echo "Final Ticket Price: ". $discount - 1.87;
        }
    }else {
           if ($age < 12){
                echo "Final Ticket Price: ". ($ticket_price / 2);
            }
        else if ($age < 18){
                echo "Final Ticket Price: ". $discount;
            }
        else if ($age >= 65){
                echo "Final Ticket Price: ". $discount;
            }
        }
         echo '<br />';
echo "<h1>Arrays</h1>";
echo "<h3>Simple Arrays</h3>";

$products = array ("t-shirt","cap","mug");
print_r($products);

echo '<br />';
echo '<br />';


$products[1] = "shirt";
print_r($products);

echo '<br />';

$products[] = "skirt";
print_r($products);

echo '<br />';
echo '<br />';

echo "Items in my products array";
echo '<br />';
echo "The item at index[2] is :".$products[2];
echo '<br />';
echo "The item at index[3] is :".$products[3];

echo '<br />';

echo "<h3>Associative Arrays </h3>";

$customer = array('CustName' => 'Sarah','CustAge'=>23, 'CustGender'=>'F');
print_r ($customer);
echo '<br />';
$customer['CustAge'] = 18;
$customer['CustEmail'] = "sarah@gamil.com";
print_r ($customer);
echo '<br />';
echo '<br />';
echo "The item at index [CustName] is: ".$customer["CustName"];
echo '<br />';
echo "The item at index [CustEmail] is: ".$customer["CustEmail"];

echo '<br />';
echo '<br />';

echo "<h3>Multi-Dimensional Arrayss</h3>";

echo '<br />';
echo '<br />';

$stock = array(
    array(
        'description' => 't-shirt',
        'price' => 9.99,
        'stock' => 100,
        'colours' => array('blue', 'red'),
    ),
    array(
        'description' => 'cap',
        'price' => 4.99,
        'stock' => 50,
        'colours' => array('black', 'grey'),
    ),
    array(
        'description' => 'mug',
        'price' => 6.99,
        'stock' => 50,
        'colours' => array('pink', 'yellow'),
    ),
);
print_r($stock);
echo '<br />';
echo '<br />';
echo "This is my order: ";
echo '<br />';
echo $stock[1]['colour'], " ", $stock[0]['description'];
echo '<br />';
echo "Price: ", "£", $stock[0]['price'];
echo '<br />';
echo $stock[1]['colour'], " ", $stock[1]['description'];
echo '<br />';
echo "Price: ".$stock[1]['price'];

echo '<br />';
echo '<br />';

echo "<h1>Loops</h1>";

echo '<br />';

echo "<h3> While loops </h3>";

$counter = 1;
while ($counter < 6){
    echo "count: ".$counter.'<br />';
    $counter++;
}

echo '<br />';




?> 

<table border="1">
    <tr> 
        <th>Quantity</th>
        <th>Price</th>
    </tr>
    <?php
$counter = 1;
$shirtprice=9.99;
while($counter <= 10){
    $totalcost=$counter * $shirtprice;
    echo '<tr>';
    echo '<td>' . $counter, '</td>';
    echo '<td>'," £".number_format($totalcost,2), '<br />';
    echo '</tr>';
    $counter++;  
}
?>
</table>


<?php

echo '<br />';

echo "<h3> For Loops </h3>";

echo '<br />';
echo '<br />';

$names = array("Jack","Bob","Chris","Peter","Jackson");

for ($i = 0; $i < 5; $i++) {
    echo $names[$i] . '<br />';
}

echo '<br />';
echo '<br />';

echo "<h3> For each Loops </h3>";

$student_names = array("Peter ID" => "c123456", "Kat ID" => "c654321", "Laura ID" => "c987654", "Ali ID" => "c654987", "Popacatepal ID" => "c765984");
foreach($student_names as $name => $id){
    echo "Name:". $name. ":". $id;
    echo '<br />';
}
echo '<br />';
echo '<br />';


$city=array('Peter'=>'LEEDS','Kat'=>'bradford','Laura'=>'wakeFIeld');
foreach($city as $name => $cityname){
    $city[$name] = ucfirst(strtolower($cityname));
}
print_r($city);
?>


 </section> 
 <footer>  
     <br>
     <p><a href="/~c3641146/html/wat2023/watIndex.html">Home</a></p>
 </body> 
</html>