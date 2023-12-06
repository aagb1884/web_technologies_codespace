<?php

//task1

function replaceVowelsWithX($str) {
	$vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
	$modifiedString =  str_replace($vowels, "X", $str);
	echo $modifiedString;
	};
	
	replaceVowelsWithX("Hallelujah")
	
?>
	
<!DOCTYPE html>
<html>
<head>
	<br>
	<title>Calculator</title>
</head>
<body>
	<form method="POST" action="" >
		<label for="number-1">Number 1:</label>
		<input type="text" name="number-1" id="number-1" required>
		<br><br>
		<label for="number-2">Number 2:</label>
		<input type="text" name="number-2" id="number-2" required>
		<br><br>
		<input type="submit" class="button" name="add" value="+" onclick="add(number-1, number-2)" >
		<input type="submit" class="button" name="subtract" value="-">
		<input type="submit" class="button" name="multiply" value="x">
		<input type="submit" class="button" name="divide" value="/">
		<br>
	</form>
	
	<?php
	  if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number-1"];
        $number2 = $_POST["number-2"];

        if (isset($_POST["add"])) {
            $result = $number1 + $number2;
            $operation = "+";
        } elseif (isset($_POST["subtract"])) {
            $result = $number1 - $number2;
            $operation = "-";
        } elseif (isset($_POST["multiply"])) {
            $result = $number1 * $number2;
            $operation = "x";
        } elseif (isset($_POST["divide"])) {
            $result = $number1 / $number2;
            $operation = "/";
        }
		echo "<p>Result: $number1 $operation $number2 = $result</p>";
	  }
	?>
</body>
</html>

<?php

//task 3
function multiply($int) {
	echo "Multiplication table of " . $int . "<br>";
	for ($i = 1; $i <= 10; $i++) {
		echo $int . " x " . $i . " = " . $int * $i . "<br>";
	}
}

multiply(5);


//task4

// Get the age from the user
function ageCategory($age){

if ($age < 13){
	echo "You are a child";
}
elseif ($age < 18){
echo "You are a teenager";}

elseif ($age < 65) {
echo "You are an adult";}

else {
	echo "You are a senior citizen";
}
}
ageCategory(38)
	  
	?>