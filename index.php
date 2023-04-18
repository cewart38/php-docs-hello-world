<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Get the temperature and humidity data
    $temperature = $_GET['temperature'];
    $humidity = $_GET['humidity'];

    // Display the data
    echo "<h2>Temperature and Humidity Reading:</h2>";
    echo "<p>Temperature: $temperature</p>";
    echo "<p>Humidity: $humidity</p>";
} else {
    echo "Not Receiving POST Request";
}
?>