<?php 

// Set Cookie
$name = "username";
$value = "admin";
$time =  strtotime("1 week");

echo "<h1>$time</h1>";

// setcookie($name, $value, $time, "/");

if(isset($_COOKIE['username'])) {
    echo "<h1>COOKIE SET</h1>";
}
else {
    echo "<h1>COOKIE NOT SET</h1>";
}

// Create Session
session_start();

$_SESSION['test'] = "Hello World";
$_SESSION['anotherTest'] = "Hello World 2";

session_destroy();
