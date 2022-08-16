<?php
    if(isset($_COOKIE['LOGGED_USER'])) {
        header("Location: ./dashboard.php");
    }

    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $userDetails = json_decode($_COOKIE["userDetails"]);

        $stored_username = $userDetails->username;
        $stored_password = $userDetails->password;

        if(($username === $stored_username) && ($password === $stored_password)) {
            $time = strtotime("20 minutes");
            setcookie("LOGGED_USER", $username, $time, "/");

            header("Location: ./dashboard.php");
        } else {
            echo "Invalid username or password";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="username" id="" placeholder="Username">
            <input type="password" name="password" id="" placeholder="Password">

            <button name="login">Login</button>
        </form>  
    </body>
</html>