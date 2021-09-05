<?php

$defaultTracker = $_GET["default"];
$servername = "localhost";
$username = "id15190506_admin";
$password = "mv&z##kZhHNq8&I8";
$dbname = "id15190506_history";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Id, deviceID, logitude, latitude FROM TrackingHistory WHERE deviceID = $defaultTracker";

$result = $conn->prepare($sql);

$result -> execute();

$result -> bind_result($Id,$deviceID,$logitude,$latitude);

$history = array();

while($result -> fetch()){
    $temp = array();
    $temp['Id'] = $Id;
    $temp['deviceID'] = $deviceID;
    $temp['logitude'] = $logitude;
    $temp['latitude'] = $latitude;
    array_push($history, $temp);
}

echo json_encode($history);

$conn->close();
