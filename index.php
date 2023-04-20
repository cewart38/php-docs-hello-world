<?php
// database connection parameters
$servername = "localhost";
$password = "";
$username = "root";
$dbname = "6131COMP";

// retrieve temperature and humidity readings from POST request
$temperature = $_POST['temperature'];
$humidity = $_POST['humidity'];

// create database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . mysql_connect_error());
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






