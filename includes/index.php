<?php 

require("./inc/functions.php");

$a = 5;
$b = 10;

$result = addOperands($a, $b);
echo "Addition: $result<br>";

// Subtraction
$result = subtractOperands($a, $b);
echo "Subtraction: $result<br>";

// Multiplication
$result = multiplyOperands($a, $b);
echo "Multiplication: $result<br>";

// Division
$result = divideOperands($a, $b);
echo "Division: $result<br>";