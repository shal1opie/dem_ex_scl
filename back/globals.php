<?php

$servername = "localhost";
$username = "root";
$password_host = "";
$dbname = "";

date_default_timezone_set('Europe/Moscow');
$current_time =  date('H:m', time());

if($current_time > '11:00' && $current_time < '18:00') {
	$shift = 'day';
} else {
	$shift = 'night';
}

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password_host, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>