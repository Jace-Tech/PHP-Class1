<?php  

// // Declear a function
// function taxCalculator () {
//     echo "This is a tax calculator";
// }

// // Invoke or call the function
// taxCalculator();


// function checkPrime () {
//     echo "This is a checkPrime function";
// }

// checkPrime();


// // Functions with parameters

// // parameter
// function sayName ($name, $age, $subject) {
//     echo "<h1> $name is $age years old, and loves $subject </h1>";
// }

// sayName("Jane", 13, "PHP"); // argument


// // getSum

// function getSum ($a, $b) {
//     echo "<p>The sum of $a and $b is <strong> " . $a + $b . "</strong> </p>";
// }

// function getSum2 ($a, $b) {
//     $result = $a + $b;
//     echo "<p>The sum of $a and $b is <strong> $result </strong> </p>";
// }

// // Adding default values to parameters 

// function generateId($length = 8) {
//     $id = "uid-";
//     $string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

//     for ($i = 0; $i < $length; $i++) { 
//         $id .= $string[rand(0, (strlen($string) - 1))];
//     }

//     echo "<h4>$id</h4>";
// }

// generateId();

// // Ruturning Values from Functions

// function summation($a, $b, $c = 6) {
//     $res = $a + $b + $c;
//     return $res;
// }


// $x = 100;
// $y = 20;

// $sum = summation($y, $x);

// // echo "<h2>sum = $sum</h2>"; // 126

// echo "<h4>" . summation($y, $x) . "</h4>";

// // Returning an array  

// function getDiv ($num, $divisor) {
//     $quotient = $num / $divisor;
//     $modulus = $num % $divisor;

//     $result = [
//         "quotient" => $quotient,
//         "modulus" => $modulus
//     ];    

//     return $result;
// }

// print_r(getDiv(5, 2));

// // $quotient = getDiv(5, 2)['quotient'];
// // $modulus = getDiv(5, 2)['modulus'];

// $result = getDiv(5, 2);
// extract($result);

// // $result['modulus']; don't try this after extract


// echo "<p>Modulus = $modulus</p>";
// echo "<p>Quotient = $quotient</p>";


// // Indexed Array


// function getDivIndexed ($num, $divisor) {
//     $quotient = $num / $divisor;
//     $modulus = $num % $divisor;

//     $result = [$quotient,$modulus];    

//     return $result;
// }

// $result = getDivIndexed(5, 2);


// // list()
// list($q, $m) = $result;


// echo "<p>Modulus = $m</p>";
// echo "<p>Quotient = $q</p>";


// $example = [
//     [
//         "number" => 2,
//         "sign" => 'plus'
//     ],
//     [
//         "div" => 8,
//         "extra_stuff" => 5
//     ]
// ];

// list($first, $second) = $example;


// // print_r($second);

// extract($second);


// echo $extra_stuff;


// // Scoping in Functions

// function getNumber () {
//     $num = 6;
//     echo "<h1>Number = $num</h1>";
// }

// getNumber();

// // echo "<h1>Number outside = $num</h1>"; // returns undefined

// $prime = 3;

// // function getPrime() {
// //     echo "<h1>Prime = $prime</h1>";
// // }

// // getPrime(); // undefined

// // global

// // $check = 4;

// // function callNum () {
// //     global $check;
// //     echo "<h1>Check = $check</h1>";
// // }

// // callNum();



// // Passing Arguments by reference

// function getRef(&$num) {
//     $num = 20;
// }

// $a = 2;

// echo "<h4> A = $a</h4>";

// $b = 90;

// getRef($b);


// echo "<h4> B = $b</h4>";


// RECURSIVE FUNCTIONS  

$mul = [
    "name1" => [
        "ada",
        "obi",
        "chike"
    ],

    "name2" => [
        "jane",
        "john",
        "smith",
        "name" => [
            "excel",
            "goodness",
            "godswil"
        ]
    ],

    "name3" => [
        "chikwado"
    ]
];

$species = array(
    "birds" => array(
        "Eagle",
        "Parrot",
        "Swan"
    ),
    "mammals" => array(
        "Human",
        "cat" => array(
            "Lion",
            "Tiger",
            "Jaguar"
        ),
        "Elephant",
        "Monkey"
    ),
    "reptiles" => array(
        "snake" => array(
            "Cobra" => array(
                "King Cobra",
                "Egyptian cobra"
            ),
            "Viper",
            "Anaconda"
        ),
        "Crocodile",
        "Dinosaur" => array(
            "T-rex",
            "Alamosaurus"
        )
    )
);

function getItems ($arr) {
    global $items;

    if(!is_array($arr)) {
        die();
    }

    foreach($arr as $value) {
        if(is_array($value)) {
            getItems($value);
        }
        else {
            $items[] = $value;
        }
    }

    return $items;
}

// $result = getItems($species);

// print_r($result);

function factorial ($num) {
    if($num < 2){
        return 1;
    }
    return $num * factorial($num - 1);
}

echo factorial(4);


