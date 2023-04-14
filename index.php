<?php

// Replace this with your custom web service endpoint
$webServiceEndpoint = 'https://csmcewar-6131comp.azurewebsites.net/';

// Send a GET request to the custom web service
$response = file_get_contents($webServiceEndpoint);

// Parse the response and extract the temperature and humidity values
$data = json_decode($response, true);
$temperature = $data['temperature'];
$humidity = $data['humidity'];

// Display the temperature and humidity values on a webpage
echo 'Temperature: ' . $temperature . '&deg;C<br>';
echo 'Humidity: ' . $humidity . '%<br>';

?>