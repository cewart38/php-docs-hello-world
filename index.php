<?php
if ($_REQUEST["temp"] || $_REQUEST["humidity"]) {
    echo "Temperature: " . $_REQUEST['temp'] . "<br />";
    echo "Humidity " . $_REQUEST['humidity'] . "";
    exit();
}
?>