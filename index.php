<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve data from GET request
    var_dump($_POST);
    $temperature = $_POST['temp'];
    $humidity = $_POST['humidity'];

    // Echo data to webpage
    echo "Temperature: " . $temperature . "<br>";
    echo "Humidity: " . $humidity;
} else {
    echo ("AHHHHH");
}
?>