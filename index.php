<?php
// Retrieve sensor data from data.php
$data_url = 'https://yourdomain.com/data.php';
$data = file_get_contents($data_url);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sensor Data</title>
</head>
<body>
    <h1>Sensor Data</h1>
    <?php echo $data; ?>
</body>
</html>