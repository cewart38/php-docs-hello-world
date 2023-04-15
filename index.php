<?php
// Retrieve data from GET request
$temperature = $_GET['temp'];
$humidity = $_GET['humidity'];

// Display data on webpage
echo "<h1>DHT11 Sensor Reading</h1>";
echo "<p>Temperature: " . $temperature . " °C</p>";
echo "<p>Humidity: " . $humidity . " %</p>";
?>