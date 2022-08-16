<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Form Methods</title>
    </head>

    <body>
        <form method="get" action="./handler.php">
            <div class="">
                <input type="text" name="first" placeholder="First Number">
            </div>

            <div class="">
                <input type="text" name="second" placeholder="Second Number">
            </div>

            <div class="">
                <select name="operator" id="">
                    <option value="">Choose Operation</option>
                    <option value="add">Addition</option>
                    <option value="sub">Subtraction</option>
                    <option value="mul">Multiplication</option>
                    <option value="div">Division</option>
                    <option value="mod">Modulus</option>
                </select>
            </div>

            <div class="">
                <button type="submit">calculate</button>
            </div>
            
            <?php //if(isset($_GET['result'])): ?>
                <h2>Result: <?= $_GET['result']; ?></h2>
            <?php //endif; ?>
        </form>
    </body>
</html>