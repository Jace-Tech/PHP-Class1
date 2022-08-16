<?php 

// $counter = 1;

// while ($counter <= 20) {

//     if($counter % 2 == 1){
//         echo "$counter <br>";
//     }

//     $counter++;
// }


// For

// (initialization; condition; increment/decrement)

// for ($counter = 20; $counter >= 0; $counter--) {
//     if($counter % 2 == 1){
//         echo "$counter <br>";
//     }
// }


$counter = 1;

// do{
//     if($counter % 2 == 1){
//         echo "$counter <br>";
//     }
//     $counter ++;
// }while ($counter <= 20);


$arr = ["james", "john", "mary", "Smith"];

$assoc_arr = [
    "john" => 20,
    "mary" => 30,
    "smith" => 50
];

// foreach($arr as $name) {
//     echo "$name <br>";
// }

// foreach($assoc_arr as $age => $value ){
//     echo "$age is $value years old<br>";
// }

$my_arr = [
    "iPhone" => 300000,
    "macbook" => 450000,
    "desktop" => 150000
];

// foreach($my_arr as $item => $price){
//     echo "$item = \$$price<br>";
// }

$scores = [
    [50, 60, 90], // 0
    [90, 40, 90], // 1
    [30, 50, 20], // 2
    [88, 98, 99] // 3
];

$scores_label = [
    "Maths" => [50, 60, 90], // 0
    "English" => [90, 40, 90], // 1
    "Chemistry" => [30, 50, 20], // 2
    "Physics" => [88, 98, 99] // 3
];

// for ($row = 0; $row < count($scores); $row++) { 
//     // prrowsnt_r($scores[$rows]);
//     echo "<br />";

//     for ($column = 0; $column < count($scores[$i]); $column++) { 
//         echo($scores[$i][$column]);
//         echo "<br />";

//     }
// }



?>
!

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>Obi</th>
            <th>Ada</th>
            <th>John</th>
        </thead>

        <tbody>
            <?php for($i = 0; $i < count($scores); $i++) { ?>
                <tr>
                    <?php for($j = 0; $j < count($scores[$i]); $j++){ ?>
                        <td><?= $scores[$i][$j];  ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>


    <!-- SECOND TABLE WITH LABELS -->
    <table border="1" cellpadding="5">
        <thead>
            <th>Subject</th>
            <th>Obi</th>
            <th>Ada</th>
            <th>John</th>
        </thead>

        <tbody>
            <?php foreach ($scores_label as $key => $value) :?>
                <tr>
                    <td><?= $key; ?></td>
                    <?php for($col = 0; $col < count($value); $col++): ?>
                        <td><?= $value[$col]; ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>