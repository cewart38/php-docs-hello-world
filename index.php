<?php
// Get the POST data
$data = file_get_contents("php://input");
echo "POST data: " . $data . "<br>";


// Decode the data into an associative array
$values = json_decode($data, true);
var_dump($values);

// Print out the values
echo "Temperature: " . $values['temperature'] . "<br>";
echo "Humidity: " . $values['humidity'] . "<br>";
?>