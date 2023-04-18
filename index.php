<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $raw_data = file_get_contents('php://input');
    $decoded_data = json_decode($raw_data);

    if (json_last_error() === JSON_ERROR_NONE) {
        // JSON is valid
        $data = get_object_vars($decoded_data);
        foreach ($data as $value) {
            echo $value . "<br>" . "PLS";
        }
    } else {
        // JSON is invalid
        echo "Invalid JSON data";
    }
} else {
    echo "No POST request received";
}

?>


