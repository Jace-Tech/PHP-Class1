<?php 

// Snake_Case -> snake_case
// personName -> camelCasing
$person_name ='Jac'; //string
$person_name = "John"; // string

$age = 20; // integer

// Constants
define("NAME", "John Doe");
define('PI', 3.142); // float

// echo "Age = " . $age . "<br />";
// echo "PI = " . PI;


// DATA TYPES
// --- INTEGERS

// decimal (base 10)
$number = -123;
echo "DECIMAL NUMBER = " . $number . "<br />";

// hexadecimal (base 16)
$hex_number = 0xA;
echo "Hex Number = " . $hex_number . "<br />";

// octal (base 8)
$octal_number = 032434;
echo "OCTAL NUMBER = " . $octal_number;

// -- FLOATS
$price = 11.99;
echo "Price = " . $price . "<br />";

$float_number = 1.0e5;
echo "Float Number = " . $float_number . "<br />";


// -- STRINGS

$string = "A String Value";
echo "String Value = " . $string . "<br />";

$another_string = 'A';
echo "<p style='color:red;'>Another String Value = " . $another_string . "</p><br />";


// -- BOOLEANS
$is_true = true;
echo "The value of True = " . $is_true . "<br />";

$is_false = false;
echo "The value of False = " . $is_false;


// NULL
$is_null = null;
echo "<br />";
var_dump($is_null);

// RESOURCE
$handler = fopen("text.js", "a+");
fwrite($handler, "alert('test')");
fclose($handler);
var_dump($handler);

// $connection = mysqli_connect("localhost", 'root', '', 'test');
// echo "<br />";
// var_dump($connection);

// -- ARRAY 
$my_array = array('basketBall', 'volleyBall', 'tennis');
$my_other_array = ['basketBall', 'volleyBall', 'tennis'];

var_dump($my_array);
print_r($my_array);
echo "<br />";
var_dump($my_other_array);

// Associative Array
$person = array(
    'name' => 'John Smith',
    'age' => 20
);

print_r($person);

$person_alt = [
    'name' => 'John Smith',
    'age' => 20
];

print_r($person_alt);

// OBJECTS
class NewItem {
    var $item = "Something";

    function sayItem () {
        echo $this->item;
    }
}

$new_item = new NewItem();
echo "<br />";
var_dump($new_item);
