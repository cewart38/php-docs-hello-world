<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Retrieve data from GET request
    var_dump($_GET);
    $temperature = $_GET['temp'];
    $humidity = $_GET['humidity'];

    // Echo data to webpage
    echo "Temperature: " . $temperature . "<br>";
    echo "Humidity: " . $humidity;
} else {
    echo ("AHHHHH");
}
?>