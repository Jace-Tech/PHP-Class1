<?php 

$todays_date = date("D,M Y");


// Date Formats

// DD-MM-YYYY
$date_format_1 = date("d-M-Y");
echo "<h1>$date_format_1</h1>";

// Day, Month DD, YYYY
$date_format_2 = date("l, F d, Y");
echo "<h1>$date_format_2</h1>";

// YYYY-MM-DD
$date_format_3 = date("Y-m-d");
echo "<h1>$date_format_3</h1>"; 

// M/DD/YY
$date_format_4 = date("n/d/y");
echo "<h1>$date_format_4</h1>";

// MM/DD/YY 
$date_format_5 = date("m/d/y");
echo "<h1>$date_format_5</h1>";

// Month Day, YYYY 
$date_format_6 = date("F d, Y");
echo "<h1>$date_format_6</h1>";

// M/DD/YYYY
$date_format_7 = date("n/d/Y");
echo "<h1>$date_format_7</h1>";



$timestamp = time() - strtotime("1 hour");
// echo "<h1>$timestamp</h1>";
$date = date("D M d, Y H:i:s", $timestamp);
echo "<h1>Today's date is: $date</h1>";

// Next 1 year
$timestamp = mktime(0,0,0,1,1,2020);
$timestamp = strtotime("2 days");

echo "<h1>$timestamp</h1>";
$date = date("D M d, Y H:i:s", $timestamp);
echo "<h1>$date</h1>";


// hour -> 12, second -> 58, minute -> 55, day -> 23, month -> 4, year -> 2001
// mktime(hr, min, sec, mon, day, year)

$timestamp = mktime(12, 58, 55, 4, 23, 2001);

$jaces_day = date("j", $timestamp) . "th" . date(" F", $timestamp);

echo "<h1>$jaces_day </h1>";