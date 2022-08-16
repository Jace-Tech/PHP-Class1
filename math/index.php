<?php  

$a = -5;
$b = 10;

$product = $a * $b;
$alt_product = abs($a) * $b;

echo "<p>$a * $b = $product</p>";
echo "<p>$a abs() * $b = $alt_product</p>";


// Ceil

$c = 2.67;
$ceil = ceil($c);

echo "<h2>The ceil of $c = $ceil</h2>";

// Floor

$d = 3.67;
$floor = floor($d);

echo "<h2>The floor of $d = $floor</h2>";

// Sqrt

$e = 25;
$sqrt = sqrt($e);
echo "<h2>The sqrt of $e = $sqrt</h2>";


// round
$f = 2.47;
$round = round($f);
echo "<h2>The round of $f = $round</h2>";

// rand

$random = rand(); // 0 - 32767
$random = rand(1000, 10000);

echo "<h2>The random number = $random</h2>";



// decbin() -> Decimals to Binary

$decimal = 10;
$output = decbin($decimal);
$output2 = bindec($output);

echo "<h2>The binary value for $decimal = $output</h2>";
echo "<h2>The Decimal value for $output = $output2</h2>";

// dechex -> from decimal to hexadecimals
// hexdec -> from decimal to hexadecimals

$dec = 11;
$hex = dechex($dec);
$back_to_dec = hexdec($hex);

echo "<h2>The hex value for $dec = $hex</h2>";
echo "<h2>The hex value for $hex = $back_to_dec</h2>";

// decoct() Decimal to octal numbers
$dec = 10;
$octal = decoct($dec);
$back_to_dec = octdec($octal);

echo "<h2> The octal value for $dec = $octal </h2>";
echo "<h2> The octal value for $octal = $back_to_dec </h2>";


// base_convert() 

$hex_number = "f";
$bin = base_convert($hex_number, 16, 2);

echo "The binary value of the hex number $hex_number = $bin";