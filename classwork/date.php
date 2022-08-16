<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Date</title>
    </head>

    <body>
        <form action="" method="post">
            <input type="date" name="date" id="">
            <button type="submit">Date</button>
        </form>
        
        <?php
            if (isset($_POST['date'])) {
                $date = $_POST['date'];

                $timestamp = strtotime($date);

                // date format Day DD, Month YYYY
                $day =  date('l d, M Y', $timestamp);
                ?>
                    <h1>
                        <?= $day ?>
                    </h1>
                <?php
            }
        ?>
    </body>
</html>