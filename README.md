# Voice Synthesis API Client

This repository contains a simple PHP script to interact with a voice synthesis API. The script sends a request to the API with text and language parameters, retrieves the generated audio file, and saves it locally.

## Features

- Convert text to speech using the provided API.
- Save the resulting audio file to a local directory.

## Prerequisites

Before running the script, make sure you have:

1. **PHP installed**: Ensure you have PHP installed on your server or local machine.
2. **Internet Access**: The script sends requests to an external API, so make sure your environment has internet access.
3. **Valid API Key**: You will need a valid API key to use the voice synthesis API.

## Get Api Key

1.  Signup in " Tr-x.ir "
   
## Installation

1. **Clone the repository**:
    ```bash
    git clone https://github.com/your-username/voice-synthesis-client.git
    cd voice-synthesis-client
    ```

2. **Edit the Script**:
    - Open the `voicefromapi.php` file and replace the placeholder API key with your actual API key.
    - Adjust the text (`q` parameter), language (`lang` parameter), and speech rate (`rate` parameter) as needed.

3. **Run the Script**:
    - You can run the script using the PHP CLI or host it on a web server.

    ### Running via PHP CLI:
    ```bash
    php voicefromapi.php
    ```

    ### Running via Web Server:
    - Upload the `voicefromapi.php` file to your web server.
    - Access it through your browser using the appropriate URL, e.g., `http://yourdomain.com/voicefromapi.php`.

## Script Parameters

- **API Key** (`api_key`): Your unique API key for accessing the voice synthesis service.
- **Text to Speech** (`q`): The text string you want to convert to speech.
- **Language** (`lang`): The language option (1 or 2, based on API documentation).
- **Speech Rate** (`rate`): The rate at which the speech is generated (e.g., '1.0' for normal speed).

## Example

Here’s an example of how the script works:

```php
$testUrl = 'https://tr-x.ir/v1/get/'; // API endpoint
$params = [
    'api_key' => 'your_api_key', // Replace with your actual API key
    'q' => 'Hello world', // Text to convert to speech
    'lang' => 1, // Language number
    'rate' => '1.0' // Speech rate
];

$queryString = http_build_query($params);
$requestUrl = $testUrl . '?' . $queryString;
$response = file_get_contents($requestUrl);

if ($response === FALSE) {
    echo 'Failed to get a response from the API.';
} else {
    $outputFile = 'test_audio.mp3';
    file_put_contents($outputFile, $response);
    echo 'The audio file has been saved as ' . $outputFile;
}
```

## Troubleshooting

   - No response from API: Ensure that the URL and API key are correct. Also, check your internet connection.
   - File Not Saved: Verify that your PHP environment has the necessary permissions to write files.

## License

- This project is licensed under the MIT License. See the LICENSE file for details.
