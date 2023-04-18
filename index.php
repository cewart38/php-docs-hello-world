<?php
// Get the POST data
$data = file_get_contents("php://input");
print_r(data);

// Decode the data into an associative array
$values = json_decode($data, true);

// Print out the values
echo "Temperature: " . $values['temperature'] . "<br>";
echo "Humidity: " . $values['humidity'] . "<br>";
?>