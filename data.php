<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo 'HELLO';
    print_r($_GET);
    $temperature = $_GET['temp'];
    $humidity = $_GET['humidity'];

    echo 'Temperature: ' . $temperature . ' °C<br>';
    echo 'Humidity: ' . $humidity . ' %';
} else {
    echo 'No data received.';
}
?>