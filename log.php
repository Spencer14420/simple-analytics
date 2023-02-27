<?php

require_once "mysql.php";

$date = date('Y-m-d H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];
$useragent = $_SERVER['HTTP_USER_AGENT'];

$query = $mysqli->prepare("INSERT INTO views (date, ip, useragent) VALUES (?, ?, ?)");
$query->bind_param("sss", $date, $ip, $useragent);
$query->execute();

?>