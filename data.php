<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $temperature = $_GET['temp'];
    $humidity = $_GET['humidity'];

    echo 'Temperature: ' . $temperature . ' °C<br>';
    echo 'Humidity: ' . $humidity . ' %';
} else {
    echo 'No data received.';
}
?>