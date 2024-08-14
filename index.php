<?php
// URL of the voicefromapi.php file
$testUrl = 'https://tr-x.ir/v1/get/'; // Replace with the actual URL of your PHP file

// Parameters for the request
$params = [
    'api_key' => 'api code ', // Replace with a valid API key from your database
    'q' => 'Hello world', // Text to convert to speech
    'lang' => 1, // Language number (1 or 2 as defined)
    'rate' => '1.0' // Speech rate
];

// Build the query string from the parameters
$queryString = http_build_query($params);

// Complete URL with query string
$requestUrl = $testUrl . '?' . $queryString;

// Make a request to the voicefromapi.php file
$response = file_get_contents($requestUrl);

// Check if the request was successful
if ($response === FALSE) {
    echo 'Failed to get a response from the API.';
} else {
    // Save the response (audio file) to a local file for testing
    $outputFile = 'test_audio.mp3'; // Name of the file to save the response
    file_put_contents($outputFile, $response);
    
    echo 'The audio file has been saved as ' . $outputFile;
}
?>
