<?php
namespace Firebase;
use mysqli;

require __DIR__.'/vendor/autoload.php';
require  'firebaseLib.php';

$latitude = $_GET["lat"];
$logitude = $_GET["lon"];
$fall = $_GET["fall"];
$deviceID = $_GET["deviceID"];
$password = $_GET["password"];
$beaconID = $_GET["beaconID"];

const DEFAULT_URL = "https://tracker-640d3.firebaseio.com/";
const DEFAULT_TOKEN = 'TOn0jaYDJHC16rH1z88jKmig6kpjo2Pha6Allc71';
$DEFAULT_PATH = '/Tracker/deviceId/'.$deviceID;

$_deviceStatus = array(
    'latitude' => $latitude + 0.0,
    'logitude' => $logitude + 0.0,
    'fall' => $fall,
    'password' => $password + 0.0,
    'beaconID' => $beaconID
);

$firebase = new  firebaseLib(DEFAULT_URL,DEFAULT_TOKEN);
$firebase -> update($DEFAULT_PATH,$_deviceStatus);

print("T");
?>
