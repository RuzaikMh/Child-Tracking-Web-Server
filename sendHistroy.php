<?php
$latitude = $_GET["lat"];
$logitude = $_GET["lon"];
$deviceID = $_GET["deviceID"];

$servername = "localhost";
$username = "id15190506_admin";
$password = "mv&z##kZhHNq8&I8";
$dbname = "id15190506_history";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO TrackingHistory (deviceID, logitude, latitude)
        VALUES ('" . $deviceID . "', '" . $logitude . "', '" . $latitude . "')";


$conn->query($sql);

$conn->close();
