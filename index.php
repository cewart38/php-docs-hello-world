<?php
$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "personalExpenses";

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);

if (! $conn) {
    die("Connection failed: " . mysql_connect_error());
}