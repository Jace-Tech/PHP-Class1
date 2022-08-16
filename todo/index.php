<?php include('../config/db.php');  ?>

<?php  
    if(isset($_GET["edit"])) {
        $id = $_GET["edit"];
        $query = "SELECT * FROM `todo` WHERE `id` = '$id'";
        $result = mysqli_query($conn, $query);

        $row = mysqli_fetch_assoc($result);
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Todo</title>
    </head>
    
    <body>
        <?php include("./alert.php"); ?>
        <?php if(isset($_GET['edit'])): ?>
            <form action="./handler.php" method="post">
                <input type="text" name="todo" value="<?= $row['todo'] ?>">
                <input type="hidden" name="id" value="<?= $_GET['edit'] ?>" />
                <button name="update">Update</button>
            </form>
        <?php else: ?>
            <form action="./handler.php" method="post">
                <input type="text" name="todo">
                <button name="add">Add</button>
            </form>
        <?php endif; ?>

        <div class="">
            <?php  

                $query = "SELECT * FROM `todo`";
                $result = mysqli_query($conn, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                            <p> <?= $row['todo']; ?> 
                            
                            <a href="?edit=<?= $row["id"]  ?>">edit</a> 
                            <a href="./handler.php?delete=<?= $row["id"]  ?>">delete</a> 
                        </p>
                        <?php
                    }
                }
                else {
                    ?>
                        <h1>No todo found</h1> 
                    <?php
                }

            ?>
        </div>
    </body>
</html>