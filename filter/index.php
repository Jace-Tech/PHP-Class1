<?php 

// FILTERS  

// STRINGS

$text = "<script>Hello World</script>";

$filtered_text = filter_var($text, FILTER_SANITIZE_STRING);
// $filtered_text = htmlspecialchars($text);
echo $filtered_text;

// INTEGER

$number = 0;

if(filter_var($number, FILTER_VALIDATE_INT)) {
    echo "<h3>It's a valid integer</h3>";
}
else {
    echo "<h3>It's not a valid integer</h3>";
}


if(filter_var($number, FILTER_VALIDATE_INT) === 0 || filter_var($number, FILTER_VALIDATE_INT)) {
    echo "<h3>It's a valid integer</h3>";
}
else {
    echo "<h3>It's not a valid integer</h3>";
}

// IP ADDRESSES 

$ip_address = "192.168.43.1";

if(filter_var($ip_address, FILTER_VALIDATE_IP)) {
    echo "<h3>It's a valid IP address</>";
}
else {
    echo "<h3>It's not a valid IP address</h3>";
}

// Validating a specific IP address [IPv4 / IPv6]

if(filter_var($ip_address, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
    echo "<h3>It's a valid IPV4 address<h3/>";
}
else {
    echo "<h3>It's not a valid IPV4 address</h3>";
}


// EMAILS 
$email = "test@test.com";
$filtered_email = filter_var($email, FILTER_SANITIZE_EMAIL);

if($email == $filtered_email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<h3>It's a valid email</h3>";
}
else {
    echo "<h3>It's not a valid email</h3>'";
}


// URLs 
$url = "https://www.google.com?q=test";
$filtered_url = filter_var($url, FILTER_SANITIZE_URL);

if($url == $filtered_url && filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)) {
    echo "<h3>It's a valid url</h3>";
}
else {
    echo "<h3>It's not a valid url</h3>'";
}


// INTEGER WITH RANGE

$number = 2;

$options = [
    "options" => [
        "max_range" => 10,
        "min_range" => 0
    ]
];

if(filter_var($number, FILTER_VALIDATE_INT, $options)) {
    echo "<h3>It's a valid Integer, and it's within the range";
}
else {
    echo "<h3>It's a valid Integer, or it's not within the range";
}