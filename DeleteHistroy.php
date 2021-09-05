<?php

$trackerID = $_GET["trackerID"];
$servername = "localhost";
$username = "id15190506_admin";
$password = "mv&z##kZhHNq8&I8";
$dbname = "id15190506_history";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed : " . $conn->connect_error);
}

$sql = "DELETE FROM TrackingHistory WHERE deviceID = $trackerID";

if(mysqli_query($conn,$sql)){
    echo "Tracking history deleted successfully";
}else{
    echo "Error deleting tracking history " . $conn->error;
}

$conn->close();