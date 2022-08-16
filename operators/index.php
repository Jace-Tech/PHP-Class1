<?php

// Arithematic Operators 
$num1 = 5;
$num2 = 4;

// -> addition operator [+]
$result = $num1 + $num2;
echo "$num1 + $num2 = $result";

// -> subtraction operator [-]
echo "<br />";
$result = $num1 - $num2;
echo "$num1 - $num2 = $result";

// -> multiplication operator [*]
echo "<br />";
$result = $num1 * $num2;
echo "$num1 * $num2 = $result";

// -> division operator [/]
echo "<br />";
$result = $num1 / $num2;
echo "$num1 / $num2 = $result";

// -> modulus operator [%]
echo "<br />";
$result = $num1 % $num2;
echo "$num1 % $num2 = $result";


// ASSIGNMENT OPERATORS

$number_sum = 2;

// Add and Assign [+=]
$number_sum += 5;

echo "<br />";
echo $number_sum;

// Subtract and Assign [-=]
$number_sub = 5;

$number_sub -= 2;

echo "<br />";
echo $number_sub;

// Multiply and Assign [*=]
$number_mul = 5;

$number_mul *= 2;

echo "<br />";
echo $number_mul;

// Divide and Assign [/=]
$number_div = 5;

$number_div /= 2;

echo "<br />";
echo $number_div;


// Mod and Assign [%=]

$number_mod = 5;

$number_mod %= 2;

echo "<br />";
echo $number_mod;


// COMPARISON OPERATORS

$n1 = 4;
$n2 = 3;
$n3 = '3';

// equal [==] operator
echo "<br />";
var_dump($n1 == $n2);

echo "<br />";
var_dump($n2 == $n3);

// identical [===] operator
echo "<br />";
var_dump($n1 === $n2);

echo "<br />";
var_dump($n2 === $n3);

// not equal [!=] [<>] operator
echo "<br />";
var_dump($n1 != $n2);

echo "<br />";
var_dump($n2 <> $n3);

// not identical [!==] operator
echo "<br />";
var_dump($n1 !== $n2);


// less than  [<] operator
echo "<br />";
var_dump($n1 < $n2);

// greater than  [>] operator
echo "<br />";
var_dump($n1 < $n2);


// less than or equals to [<=] operator
echo "<br />";
var_dump($n1 <= $n2);

// greater than or equals to [>=] operator
echo "<br />";
var_dump($n1 <= $n2);


// INCREMENT / DECREMENT OPERATORS

$a = 2;

// Post Increment
$b = $a++;

// Pre Increment
$c = ++$a;


echo "<br /> \$a = $a <br />";
echo " \$b = $b <br />";
echo "\$c = $c <br />";

// DECREMENT
$dec = 4;

// Pre decrement
$dec_a = --$dec;

// Post Decrement
$dec_b = $dec--;


echo "<br /> \$dec = $dec <br />";
echo " \$dec_a = $dec_a <br />";
echo "\$dec_b = $dec_b <br />";


// LOGICAL OPERATORS

$x = (3 < 2);
$n = (5 == '5');
$y = (5 === 5);

// AND && 
echo "<br> <br>";
var_dump($x AND $y);

echo "<br> <br>";
var_dump($y AND $n);

// OR ||
echo "<br> <br>";
var_dump($x OR $y);

// XOR
echo "<br> <br>";
var_dump($n XOR $y);

// NOT [!]
echo "<br> <br>";
var_dump(!$x);


// STRING OPERATORS

$my_string = "Te";
$another_half = "st";

$my_string .= $another_half; 

echo "<br> <br> $my_string <br />";

echo "this " . 'is ' . 'my ' . 'name';


// ARRAY OPERATORS

//array literal
$array_a = [ 
    'name' => "Mary",
    'age' => 20
];

$array_b = array(
    'name' => "Mary",
    'age' => 20
);

// $array_c = array_merge($array_a, $array_b);
echo "<br />";
var_dump($array_a == $array_b);

// !==
// ===
// <>
// !=



// SPACESHIP OPERATORS

$num_a = 3;
$num_b = 10;

echo "<br>";
var_dump($num_a <=> $num_b);




// const num = null ?? 5
// nullish coalescing [??]

// console.log(num) // 0

