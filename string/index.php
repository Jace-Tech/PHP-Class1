<?php 

$string = 'This is a string';

echo $string;

// echo "<br />";

// Escape Characters
$another_string ="This is the previous \n\r text $string";
$html = "<p> This\tis\ta\tline</p>";
$new_string = "\$num is a number";
$back_slash = "\\ This is a backslash";
$double = "This is my \"best\" day";

echo "<br />";
echo $double;



// String Methods

// strlen()
$my_string = "i am a string";

echo "<br />";
echo strlen($my_string);

// str_word_count()

$sentence = "this is a sentence";
echo str_word_count($sentence);


// str_replace
$dummy_text = "This woman doesn't do man";
$num = 0;
$formatted_text = str_replace("man", "goat", $dummy_text, $num);

echo "<br />";
echo $formatted_text;
echo "<br />";
echo "The string was changed $num times";

// strrev() 
$reverse_string = "sihT";
$another_stuff = "Something";

echo "<br />";
echo strrev($reverse_string);

echo "<br />";
echo strrev($another_stuff);
