<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the POST body and decode it as JSON
    $data = json_decode(file_get_contents('php://input'), true);

    // Print the data received
    foreach ($data as $value) {
        echo $value . "<br>";
    }
} else {
    echo "No POST request received";
}

?>






