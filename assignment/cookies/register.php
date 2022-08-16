
<?php 
    if(isset($_COOKIE['LOGGED_USER'])) {
        header("Location: ./dashboard.php");
    }
    
    if(isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $time = strtotime("20 minutes");

        $userDetails = [
            "username" => $username,
            "password" => $password
        ];


        setcookie("userDetails", json_encode($userDetails), $time, "/");
        setcookie("another_cookie", "hjdfdhhfdc", time() + (7 * 60), "/");
        // setcookie("username", $username, $time, "/");
        // setcookie("password", $password, $time, "/");

        header("Location: ./index.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
    </head>

    <body>
        <form action="" method="post">
            <input type="text" name="username" id="" placeholder="Username">
            <input type="password" name="password" id="" placeholder="Password">

            <button name="register">Register</button>
        </form>
    </body>
</html>