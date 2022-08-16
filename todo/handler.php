<?php  

session_start();
include("../config/db.php");

// Adding to DB
if(isset($_POST['add'])) {
    $todo = filter_var($_POST['todo'], FILTER_SANITIZE_STRING);

    $query = "INSERT INTO `todo` (`todo`) VALUES ('$todo')";
    $result = mysqli_query($conn, $query);

    if($result) {
        header("Location: ./index.php");
    }
}

// Delete From 
// DELETE FROM `tablename` WHERE `id` = '1'

if(isset($_GET['delete'])) {
    $id = $_GET['delete'];

    try {
        $query = "DELETE FROM `todo` WHERE `id` = '$id'";
        $result = mysqli_query($conn, $query);

        if($result) header("location: ./index.php");

    } catch(Exception $err) {
        $alert = [
            "message" => "Sorry, something went wrong. Please try again",
            "status" => "error"
        ];

        $_SESSION["alert"] = json_encode($alert);
        header("Location: ./index.php");
    }

}



if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $todo = filter_var($_POST['todo'], FILTER_SANITIZE_STRING);

    $query = "UPDATE `todo` SET `todo` = '$todo' WHERE `id` = '$id'";
    $result = mysqli_query($conn, $query);

    if($result) {
        header("Location: ./index.php");
    }
    else {
        echo "Sorry, something went wrong. Please try again";
    }
}
