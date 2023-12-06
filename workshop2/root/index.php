<?php

//task 1
 $width = 10;
 $height = 5;
 $area = $width * $height;

 echo "The rectangle has a width of " .  $width . " metres, a height of " . $height . " metres and an area of " . $area . " square metres.";
 
 //task 2

$number1 = 10;
$number2 = 5;


// mathematical operations
$addition = $number1 + $number2; 
$subtraction = $number1 - $number2; 
$multiplication = $number1 * $number2; 
$division = $number1 / $number2; 
$concatenation = $number1 . "" .  $number2;

echo nl2br("\n Addition of " . $number1 . " and " . $number2 . " is: " . $addition);
echo nl2br("\n Subtraction of " . $number1 . " and " . $number2 . " is: " . $subtraction);
echo nl2br("\n Multiplication of " . $number1 . " and " . $number2 . " is: " . $multiplication);
echo nl2br("\n Division of " . $number1 . " and " . $number2 . " is: " . $division);
echo nl2br("\n Concatenation of " . $number1 . " and " . $number2 . " is: " . $concatenation);

// task 3

echo nl2br("</br><h3>Welcome to the Age Calculator!</h3>");

$yourage = 38;
$ageindays = $yourage * 365;
$ageinhours = $ageindays * 24;
$ageinminutes = $ageinhours * 60;

echo nl2br (" \n Your age: " . $yourage);

echo nl2br (" \n You have been alive for: \r\n");
echo $ageindays . " days, "; 
echo $ageinhours . " hours, ";
echo $ageinminutes . " minutes.";

//task 4 numeric array

echo "</br><h3>Days of the week</h3>";

$daysofweek = array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');

foreach( $daysofweek as $value ) { echo "</br>
 * $value 
" ; }

//Associative arrays

echo "</br><h2>Average Temperature in Edinburgh</h2>";

$highs = array("Jan-Feb" => 7, "July-Aug" => 19);
$lows = array("Jan-Feb" => 1, "July-Aug" => 11);

//table
echo "<table border='1'>

<tr>

<th>Month</th>

<th>High</th>

<th>Low</th>

</tr>";
  echo "<tr>";

  echo "<td>" . "Jan-Feb"   . "</td>";

  echo "<td>" . $highs['Jan-Feb'] . "</td>";

  echo "<td>" . $lows['Jan-Feb']  . "</td>";

  echo "</tr>";
    echo "<tr>";

  echo "<td>" . "July-Aug"   . "</td>";

  echo "<td>" . $highs['July-Aug'] . "</td>";

  echo "<td>" . $lows['July-Aug']  . "</td>";

  echo "</tr>";
  echo "</table>";

//multidimensional arrays

echo "<br> <h3>Results</h3>";

$results = array(
	"Aarron" => array(
	"Physics" => 74,
	"English" => 69,
	"Maths" => 70,
	),
	"Jamie" => array(
	"Physics" => 64,
	"English" => 79,
	"Maths" => 69,
	),
	"Harry" => array(
	"Physics" => 55,
	"English" => 52,
	"Maths" => 57,
	)
	);


//table
echo "<table border='2'>

<tr>

<th>Name</th>

<th>Physics</th>

<th>English</th>

<th>Maths</th>

</tr>";

 echo "<tr>";

  echo "<td>" . "Aarron"   . "</td>";

  echo "<td>" . $results['Aarron']['Physics'] . "%" . "</td>";

  echo "<td>" . $results['Aarron']['English'] . "%" .  "</td>";
  
  echo "<td>" . $results['Aarron']['Maths']  . "%" .  "</td>";

  echo "</tr>";
  
   echo "<td>" . "Jamie"   . "</td>";


  echo "<td>" . $results['Jamie']['Physics'] . "%" . "</td>";

  echo "<td>" . $results['Jamie']['English'] . "%" .  "</td>";
  
  echo "<td>" . $results['Jamie']['Maths']  . "%" .  "</td>";

  echo "</tr>";
  
   echo "<td>" . "Harry"   . "</td>";
   
  echo "<td>" . $results['Harry']['Physics'] . "%" . "</td>";

  echo "<td>" . $results['Harry']['English'] . "%" .  "</td>";
  
  echo "<td>" . $results['Harry']['Maths']  . "%" .  "</td>";

  echo "</tr>";

echo "</table>";

echo "Aarron got " . $results['Aarron']['Physics'] . "%" . " in his Physics test.";
echo "Jamie got " . $results['Jamie']['English'] . "%" . " in his English test.";
echo "Harry got " . $results['Harry']['Maths'] . "%" . " in his Maths test.";

?>





