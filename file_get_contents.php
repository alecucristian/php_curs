<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Setup
$url = 'http://';
$data = array(
    'i' => 'think',
    'john' => 'morris',
    'is' => 'awesome',
);

// Set option
$options = array(
    'http' => array(
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data), //param = value
        // 'ignore_errors' => true,
    ),
);

// Create the stream context
$context = stream_context_create($options);

// Send the request
$result = file_get_contents($url, false, $context);

// Check for errors
if ($result === false) {
    // Handle any errors
}

print_r($result);


?>