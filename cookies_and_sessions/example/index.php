<?php 
    // REDIRECT TO 
    if(isset($_COOKIE["USER"])) {
        header("Location: ./dashboard.php");
    }

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $time = strtotime("10 mins");
        setcookie("USER", $username, $time, "/");

        header("Location: ./dashboard.php");
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
            <input type="text" name="username" placeholder="Username">
            <button name="login">Login</button>
        </form>
    </body>
</html>