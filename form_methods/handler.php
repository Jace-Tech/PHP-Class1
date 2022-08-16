<?php 

function add ($a, $b) {
    return $a + $b;
}

function subtract ($a, $b) {
    return $a - $b;
}

function multiply ($a, $b) {
    return $a * $b;
}

function divide ($a, $b) {
    return $a / $b;
}

function modulus ($a, $b) {
    return $a % $b;
}


if(isset($_GET['operator'])) {

    $first = intval($_GET['first']);
    $second = intval($_GET['second']);
    $operator = $_GET['operator'];

    $result = 0;

    switch($operator) {
        
        case "add": 
            $result = add($first, $second);
            break;

        case "sub": 
            $result = subtract($first, $second);
            break;

        case "div": 
            $result = divide($first, $second);
            break;

        case "mod": 
            $result = modulus($first, $second);
            break;

        case "mul": 
            $result = multiply($first, $second);
            break;

        default:
            break;
    }

    // redirection
    header("Location: ./form.php?result=$result");

}
?>