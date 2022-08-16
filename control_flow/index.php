<?php

// conditional expression or statement
// Logical (&&, ||, !)|| Relational (< , >, ==, ===, !==, <>)

if(3 > 2) {
    echo "3 is greater than 2 <br />";
}

// NOT

$is_true = 5 < 2;

if(!$is_true) {
    echo "5 is greater than 2 <br />";
}

// AND

$exp_a = "5" == 5;
$exp_b = 4 > 2;

if($exp_a AND $exp_b) {
    echo "Both expressions are true <br />";
}

// OR

$exp_c = "5" === 5;
$exp_d = 4 > 2;

if($exp_c OR $exp_d) {
    echo "Either exp_c or exp_d is true <br />";
}


// XOR

$exp_c = "5" === 5;
$exp_d = 4 > 2;

if($exp_c XOR $exp_d) {
    echo "Either exp_c or exp_d is true <br />";
}


// IF...ELSE STATEMENT

$name = "JAcE";

if(strtolower($name) == "jace"){
    echo "Welcome aboard Jace! <br />";
} 
else {
    echo "Intruder Alert!!! <br />";
}


// IF...ELSEIF...ELSE STATEMENT

// $hour = date('h');
$hour = 16;

// Greeting Algorithm

if($hour < 12 ){
    echo "Good Morning! <br />";
}
else if($hour >= 12 && $hour < 16) {
    echo "Good Afternoon! <br />";
}
else {
    echo "Good Evening | Night! <br />";
}


// gender Algorithm
$gender = "male";

if($gender == "male") {
    echo "Man <br />";
}
else {
    echo "Woman";
}

// clean
echo $result = $gender == "male" ? "Man" : "Woman";


// Age Algorithm
$age = 18;

if($age < 18) {
    echo "<br /> Kid";
}
else {
    echo "<br /> Adult";
}

$result = $age < 18 ? "Kid" : "Adult";

echo "<br /> $result";


// Complex Tenary
$age = 18;

$test = "";

// Truthy / Falsy Algorithm
if($test){
    echo "<br> <br> TRUTHY Value <br /> <br /> ";
}else {
    echo "<br /> <br />  FALSY Value <br /> <br /> ";
}

// $result = $age ? ($age > 12 && $age <= 18) ? "Teen" : "Something else" : "Enter age";

// echo "<br /> $result";

if($age){
    if($age > 12 && $age <= 18){
        echo "Teen";
    }
    else {
        echo "Something else";
    }
}
else {
    echo "Enter age";
}


// SWITCH CASE
$currency = "N";

switch ($currency) {
    case "$": 
        echo " <br />USD <br />";
        break;
    
    case "N": 
        echo "NGN <br />";
        break;

    default:
        echo "Currency not found!";
        break;
}