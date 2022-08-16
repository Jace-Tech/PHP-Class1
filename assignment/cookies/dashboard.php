<?php  

    if(!isset($_COOKIE["LOGGED_USER"])) {
        header("Location: ./index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>


    <style>
        * {
            margin: 0;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 2rem;
            font-family: Arial, Helvetica, sans-serif;
        }

        h1 {
            font-size: 2rem;
            color: #555;
        }

        a {
            text-decoration: none;
            font-size: 1rem;
            color: red;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Dashboard</h1>
        <a href="logout.php">logout</a>
    </div>
    <h2>Welcome <?= $_COOKIE["LOGGED_USER"]; ?></h2>
</body>
</html>