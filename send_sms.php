<?php session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sms</title>
</head>
<body>

<?php

$unm = $_SESSION['uname'];

require 'db.php';
require '../../phpMyAdmin/vendor/autoload.php';
use Twilio\Rest\Client;

$fetch = "select * from medical where uname = 'xyz' ";
$result = $conn->query($fetch);
$row = $result->fetch_assoc();

$name = $row['name'];
$mob = $row['mob'];
$bldGr = $row['bldgr'];
$adrs = $row['adrs'];
$age = $row['age'];
$mjd = $row['mjd'];

$sid = '**Some SID**';
$token = '**Some Token***';
$client = new Client($sid, $token);

// echo $name."<br>".$mob."<br>".$bldGr."<br>".$adrs."<br>".$age."<br>".$mjd;

$client->messages->create(

    $mob,
    array(
        'from' => '+12092226569',
        'body' => "Hello from Entropy!Name: '$name'; blood Group: '$bldGr'; Address: '$adrs'; Your age: '$age'; Major Disease: '$mjd';"
    )
);

// header('Location: http://localhost/static/profile.php')
?>
</body>
</html>
