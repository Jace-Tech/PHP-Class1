
<?php  

    $default_username = "user";
    $default_password = "1234";

    if(isset($_POST['username']) && isset($_POST['password'])){
        $users_username = $_POST['username'];
        $users_password = $_POST['password'];

        // Cross check with the default username and password
        if(($users_username == $default_username) &&  ($users_password == $default_password)){
            echo "<p>Login Successful</p>";
        }
        else {
            echo "<p>Incorrect Credientials</p>";
        }
    }


    if(isset($_POST['reg'])) {
        echo $_REQUEST['hobby'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form POST</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>

    <br>
    <hr>
    <br>

    <form action="" method="post">
        <input type="text" name="hobby" placeholder="Enter hobby">
        <button type="submit" name="reg">Post</button>
    </form>
</body>
</html>