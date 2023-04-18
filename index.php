<?php
// Check if POST request was received
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Read the POST request payload
  $payload = file_get_contents('php://input');

  // Decode the JSON payload
  $data = json_decode($payload, true);

  // Display all the values
  foreach ($data as $key => $value) {
    echo "$key: $value <br>";
  }
} else {
  // Display an error message if no POST request was received
  echo "Error: No POST request received";
}
?>