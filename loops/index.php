<?php

// LOOPS

// -> WHILE LOOP

$counter = 1;
$limit = 20;

while ($counter <= $limit) {

    if($counter%2 == 1){
        echo "<br> $counter <br>";
    }
    
    $counter++;
}

// Do-while loop 

$intial = 1;

do {
    // echo "<br> But i'll still run :( <br>";
    $intial++;
}
while($intial < 10);

// FOR loop

for($i = 0, $j = 1; $i < 10; $i++){
    if($i % 2 == 1){
        // echo "<br> $i <br>";
    }
}

// foreach loop

$numbers = [1, 2, 3, 4, 5, 7];

$students_ages = [
    'john' => 30,
    'mary' => 16,
    'jane' => 25
];

// foreach($numbers as $number){
//     echo "<br> <b>$number</b> <br>";
// }

foreach($students_ages as $names => $age){
    // echo "<br> <b>$names: $age old</b> <br>";
}

// For loops with arrays
$numbers = [1, 2, 3, 4, 5, 7];

for($i = 0; $i < count($numbers); $i++){
    // echo "<br> <b>" . $numbers[$i] ."</b> <br>";
}

// 
$arr = [
    [
        "name" => "Jace"
    ],
    [
        "name" => "John"
    ],
];


