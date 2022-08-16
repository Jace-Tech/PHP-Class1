<?php  

// JSON 

$students = [
    "IT" => [
        "John",
        "Mary",
        "Mark"
    ],

    "NON IT" => [
        "Luke",
        "Jane",
        "Peter"
    ]
];

// json_encode()
$json_string = json_encode($students);
echo $json_string;