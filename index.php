<!DOCTYPE html>
<html>
<head>
    <title>Display Data</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $raw_data = file_get_contents('php://input');
        $decoded_data = json_decode($raw_data);

        if (json_last_error() === JSON_ERROR_NONE) {
            // JSON is valid
            $data = get_object_vars($decoded_data);

            echo "<table border='1'>";
            echo "<tr><th>Value 1</th><th>Value 2</th><th>Value 3</th></tr>";
            echo "<tr>";
            foreach ($data as $value) {
                echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
            echo "</table>";
        } else {
            // JSON is invalid
            echo "Invalid JSON data";
        }
    } else {
        echo "No POST request received";
    }
    ?>
</body>
</html>








