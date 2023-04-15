<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$temperature = $_POST['temperature'];
			$humidity = $_POST['humidity'];


			echo '<p>temperature: ' . $temperature . '</p>';
			echo '<p>humidity: ' . $humidity . '</p>';
		} else {
			echo '<p>No POST request received.</p>';
		}
	?>