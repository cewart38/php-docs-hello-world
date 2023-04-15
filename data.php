<?php
		if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            // Retrieve data from GET request
            $temperature = $_GET['temp'];
            $humidity = $_GET['humidity'];
            
            // Echo data to webpage
            echo "Temperature: " . $temperature . "<br>";
            echo "Humidity: " . $humidity;
            ?>