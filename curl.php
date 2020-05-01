<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Basic curl example
// 1. Initialize

$ch = curl_init();

// 2. Set options

// URL to setn the request to
curl_setopt($ch, CURLOPT_URL, 'http://www.google.com');

// Return instead of outputting directly
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Whether to include the header in the output, set to false here
curl_setopt($ch, CURLOPT_HEADER, 0);

// 3/ Execute the equest and fetch the response. Check for errors
$output = curl_exec($ch);

if ($output === false) {
    echo "cURL Error: " . curl_error($ch);


}

// 4. Close and free up the curl handle
curl_close($ch);

// 5. Display raw output
// print_r($output);

// POST data with cURL
// 1. Basic setup
// $url ='http://miscellaneous-115933.nitrousapp.com:3000/m2l9-output.php';
$post_data = array(
    'query' => 'some stuff',
    'method' => 'post',
    'ya' => 'hoo',
);

// 2. Initialize
$ch = curl_init();

// 3. Set option
// URL to submit to
curl_setopt($ch, CURLOPT_URL, $url);

// Return output instead of outputting it
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// We are doing a POST request
curl_setopt($ch, CURLOPT_POST, 1);

// Adding the post variables to the request
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

// 3. Execute the request and fetch the respons. Check for errors
$output = curl_exec($ch);

if ($output === false) {
    echo "cURL Error: " . curl_error($ch);


}

// 4. Close and free op the curl handle
curl_close($ch);

// 5. Display raw output
// print_r($output);

// CURL with HTTPS
// 1. Initialize


$ch = curl_init();

// 2. Set options

// URL to send the request to
curl_setopt($ch, CURLOPT_URL, 'https://www.google.com');

// Return instead of outputting directly
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Whether to include the header in the output, set to false here
curl_setopt($ch, CURLOPT_HEADER, 0);

// 3/ Execute the equest and fetch the response. Check for errors
$output = curl_exec($ch);

if ($output === false) {
    echo "cURL Error: " . curl_error($ch);


}

// 4. Close and free up the curl handle
curl_close($ch);

// 5. Display raw output
print_r($output);

// Don't use CURLOPT_SSL_VERIFYPEER => false. Allows for "man in the middle"
// attacks. Do this instead: https://www.php.net/manual/en/function.curl-setopt.php#110457


?>