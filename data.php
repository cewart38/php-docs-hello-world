<?php

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the JSON data from the request body
  echo ("PLease work");
  $json_data = file_get_contents('php://input');
  echo $json_data;
  // Decode the JSON data into an associative array
  $data = json_decode($json_data, true);
  
  // Get the temperature and humidity values from the data array
  $temperature = $data['temperature'];
  $humidity = $data['humidity'];
  
  // Do something with the temperature and humidity values
  // For example, save them to a database or log file
  echo "Temperature: " . $temperature . "\n";
  echo "Humidity: " . $humidity . "\n";
}

?>