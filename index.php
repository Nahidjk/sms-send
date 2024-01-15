<?php

// Twilio credentials
$accountSid = 'AC9af1605430348b672b6c160e3b8cea3b';
$authToken  = '27a7b1fcd4dcc5b078e35c25fee70a6a';

// Recipient phone number
$toNumber = '+8801926658705';

// Twilio phone number (must be purchased on Twilio)
$fromNumber = '+88001617658429';

// Message to be sent
$message = 'Hello, this is a test message!';

// Twilio API URL
$url = 'https://api.twilio.com/2010-04-01/Accounts/' . $accountSid . '/Messages.json';

// Twilio API request parameters
$data = array(
    'To'   => $toNumber,
    'From' => $fromNumber,
    'Body' => $message,
);

// Set up HTTP headers for authentication
$options = array(
    'http' => array(
        'header'  => "Authorization: Basic " . base64_encode($accountSid . ":" . $authToken),
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);

// Make the HTTP request
$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);

// Output the response
echo $response;
?>
