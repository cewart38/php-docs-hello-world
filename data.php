<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $temperature = $_POST['temp'];
    $humidity = $_POST['humidity'];

    echo 'Temperature: ' . $temperature . ' °C<br>';
    echo 'Humidity: ' . $humidity . ' %';
} else {
    echo 'No data received.';
}
?>