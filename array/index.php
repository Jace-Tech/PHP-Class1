<?php 

// ARRAYS

// Indexed Array [numeric Array]

$colors = array ("BLACK", 'GRAY', "WHITE", "BLUE");
$colors = ["BLACK", "GRAY", "WHITE", "BLUE"];

// OUTPUTTING Array

// print_r($colors);
// echo '<br />';
// var_dump($colors);


$item3 = $colors[2];

echo "<br> Item 3 ->  $item3 <br>";

$colors[2] = "BLACK";

$item3 = $colors[2];

echo "<br> Item 3 ->  $item3 <br>";

$item4 = $colors[3];


// echo "<br> Item 3 ->  $item3 <br>";
// echo "<br> Item 4 ->  $item4 <br>";

// Alternative way to create an indexed array
// ['cat', 'dog', 'rabbit']
$animal[0] = "Cat";
$animal[1] = "Dog";
$animal[2] = "Rabbit";

// print_r($animal);


// ASSOCIATIVE ARRAYS
$person = [
    "name" => "John",
    "age" => 12,
    "hobby" => ['singing', 'reading']
];

print_r($person);

$person_age = $person['age'];
$person_name = $person['name'];

$hobby2 = $person['hobby'][1];

echo "<br> Age: $person_age <br>";
echo "<br> Name: $person_name <br>";
echo "<br> Hobby 2: $hobby2 <br>";


$subjects = ["PHP", "JS", "NODE"];

// Classwork
$school = [
    "name" => "Aptech",
    "subjects" => $subjects,
    "type" => "IT school",
    "location" => "No.51 Zik's Avenue"
];

$school['name'] = "Aptech Education";
$school['type'] = "ICT school";


print_r($school);


// MULTI-DIMENTIONAL ARRAY [array of arrays]

// Multi-dimensional indexed array
$multi_array = array(
    array(1, 2, 3, 4, 5),
    array( 6, 7, 8, 9, 10)
);

/**
 * [
 *     'ada', -> 0
 *     'obi', -> 1
 *     'john'
 * 
 * // ]
 * 
 *  */ 

$multi_array = [
    [1, 2, 3, 4, 5],
    [6, 7, 8, 9, 10]
];

echo "<br> The number in the fourth position of the array = " . $multi_array[0][3];


echo "<br/> ".$multi_array[1][1];

// Multi-dimensional Associative array

$students = [
    [
        "name" => "John Doe",
        "age" => 20,
        "class" => "PHP"
    ],
    [
        "name" => "Jane Smith",
        "age" => 23,
        "class" => "Node JS"
    ],
];

$second_name = $students[1]['name'];

echo "<br> $second_name";

// ARRAY METHODS

// indexed array
// sort -> ASC 
// rsort -> DESC

// Associative arrays
// ksort -> ASC && asort -> ASC
// krsort -> DESC && arsort -> DESC

$number_arr = [50, 2, 5, 1, 76, 100, 4];
// ASC
sort($number_arr);
print_r($number_arr);

// DESC
rsort($number_arr);
print_r($number_arr);


// ASSOCIATIVE
$ages = [
    'john' => 20,
    'zena' => 90,
    'ada' => 89,
    'bisi' => 3,
];


// Sorts the array based on the keys
ksort($ages);
print_r($ages);

// Sorts the array based on the values
asort($ages);
print_r($ages);


// prev() method -> next(), current()

// $names = ['chikwado', 'kenny', 'patrick'];

// echo "<br> <br> The current name is ". current($names);
// echo "<br> <br> The next name is ". next($names);
// echo "<br> <br> The prev name is ". prev($names);
// echo "<br> <br> The next name is ". next($names);

// Add item to array
$foods = ['yam', 'beans', 'soup'];

// Adds to the end of the array
// array_push($foods, "rice");
// print_r($foods);

// Adds to the beginning of the array
// array_unshift($foods, "plantain");

// Remove item from an array

// Removes the last item from the array
// array_pop($foods);
// print_r($foods);

// Removes the first item from the array
// array_shift($foods);
// print_r($foods);


// unset

// unset($foods[1]);
// $new_arr = array_values($foods);

// echo "<br> <br> <br>";
// print_r($new_arr);

$items = ['juice', 'fruits'];

// The first parameter (arg) -> array
// The second parameter (arg) -> index
// The third parameter (arg) -> how many items to delete
// What to replace it with.

$deleted_items = array_splice($foods, 0, 2, $items);
echo "<br> <br> <br>";
print_r($foods);

echo "<br> <br> <br> DELETED";
print_r($deleted_items);