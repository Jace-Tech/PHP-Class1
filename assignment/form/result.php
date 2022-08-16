<?php  
    // Defaults
    $firstname = "John";
    $lastname = "Doe";
    $email = "john@gmail.com";

    if(isset($_REQUEST["email"])) {
        $firstname = $_REQUEST["firstname"];
        $lastname = $_REQUEST["lastname"];
        $email = $_REQUEST["email"];
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1>Name: <?= "$firstname $lastname" ?></h1>
        <p>Email: <?= $email?> </p>
    </body>
</html>