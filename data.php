<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
    parse_str($query, $params);

    $temperature = $params['temp'];
    $humidity = $params['humidity'];

    echo 'Temperature: ' . $temperature . ' °C<br>';
    echo 'Humidity: ' . $humidity . ' %';
} else {
    echo 'No data received.';
}
?>