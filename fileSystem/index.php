<?php

// FILE SYSTEM IN PHP

// Creating a file in php
// $file = fopen("script.jsx", "r");

// file_exists()
// if(file_exists("script.jsx")) {
//     echo "The file exists";
// } else {
//     echo "The file does not exist";
// }

// Writing to a file
$file = "file.txt";

// Using fopen() to open and write file 

// open file for writing
$handler = fopen($file, "w");

// write to file
fwrite($handler, "This is a test");

// close file
fclose($handler);

// file_put_contents()
if(file_exists($file)){
    file_put_contents($file, "This is another content");
}


// Reading from a file
$file = "file.txt";

if(file_exists($file)){
    // open file for reading   
    $handler = fopen($file, "r");

    // Read from file
    // $content = fread($handler, "7");

    $content = fread($handler, filesize($file));

    // echo $content;
    // echo $content;

    // close file
    fclose($handler);
}

// data.txt -> Jane Doe

$file = "data.txt";

if(!file_exists($file)){
    $handler = fopen($file, "w");
    $names = ["John", "Mary", "Doe"];
    $content = json_encode($names);
    fwrite($handler, $content);
    fclose($handler);
}

if(file_exists($file)) {
    // $handler = fopen($file, "r");

    // $contents = fread($handler, filesize($file));
    // $contents = readFile($file);
    $contents = file_get_contents($file);
    $result = json_decode($contents, true);

    // print_r($result);

    // fclose($handler);
}

$file = "random.txt";

if(file_exists($file)) {
    $contents = file($file);

    $data = "";
    foreach($contents as $line) {
        $data .= " $line";
    }

    echo "<h1>$data</h1>";

}

// Delete a file

// unlink()  path to file

$file = "random.txt";

if(file_exists($file)){
    if(unlink($file)) {
        echo "File deleted!";
    }
}


// -------------- FOLDERS ----------------

// $dir = "python";
$dir = "python/pip";

if(!file_exists($dir)) {
    mkdir($dir); 
}

$file = "script.js";

$destination = "tests/new_script.txt";

if(file_exists($file)) {
    $isCopied = copy($file, $destination);
    if($isCopied) {
        // echo "Copied!";
    }
    else {
        echo "Failed!";
    }
}

// Outputting Directory contents

$dir = "tests";

if(is_dir($dir)) {
    $files = scandir($dir);
    $result = array_diff($files, ['.', '..']);

    // print_r($result);
}


function getAllFiles ($path) {
    if(file_exists($path) && is_dir($path)) {
        $files = scandir($path);
        $realFiles = array_diff($files, ['.', '..']);

        if(count($realFiles) > 0) {
            foreach($realFiles as $file) {
                if(is_file("$path/$file")) {
                    // echo "<h1>$file</h1>";
                    echo "$file \n";
                }
                else {
                    getAllFiles("$path/$file");
                }
            }
        }
    }
}

// getAllFiles("play");


// glob()

if(is_dir($dir)) {
    $result = glob("$dir/*.txt");
    print_r($result);
}

