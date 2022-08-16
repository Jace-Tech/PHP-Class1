<?php

$host = "localhost";
$user = "root";
$password = "";
$db_name = "testing";


// Procedural Way
$conn = mysqli_connect($host, $user, $password, $db_name);

// if($conn) {
//     echo "Connection established";
// }
// else {
//     die("Connection failed");
// }

// PDO method 

// $dsn = "mysql:host=$host;db_name=$db_name";
// $conn = new PDO($dsn, $user, $password);


// $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);