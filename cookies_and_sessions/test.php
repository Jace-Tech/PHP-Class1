<?php 

// Start Session
session_start();

if(isset($_SESSION['anotherTest'])) {
    echo "<h1>" . $_SESSION['anotherTest'] . "</h1>";
}else {
    echo "<h1>SESSION NOT SET</h1>";
}

if(isset($_SESSION['test'])) {
    echo "<h1>" . $_SESSION['test'] . "</h1>";
}else {
    echo "<h1>SESSION NOT SET</h1>";
}