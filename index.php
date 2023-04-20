<?php
// database connection parameters
$servername = "localhost";
$username = "root";
$dbname = "readings";

// retrieve temperature and humidity readings from POST request
$temperature = $_POST['temperature'];
$humidity = $_POST['humidity'];

// create database connection
$conn = new mysqli($servername, $username, "", $dbname);

// check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare SQL statement to insert data into table
$sql = "INSERT INTO readings (temperature, humidity) VALUES ('$temperature', '$humidity')";

// execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

// close database connection
$conn->close();
?>






