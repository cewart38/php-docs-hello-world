<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $temperature = $_POST['temperature'];
    $humidity = $_POST['humidity'];

    // Display the data
    echo "<h2>Temperature and Humidity Reading:</h2>";
    echo "<p>Temperature: $temperature</p>";
    echo "<p>Humidity: $humidity</p>";
} else {
    echo "Not Receiving GET Request";
}
?>