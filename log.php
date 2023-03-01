<?php

require_once "mysql.php";

$date = date('Y-m-d H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];
$useragent = $_SERVER['HTTP_USER_AGENT'];
$headers = getallheaders();
$country = $headers["cf-ipcountry"];
$server = explode("-", $headers["cf-ray"])[1];

if ($useragent !== "nginx-ssl early hints") {
    $query = $mysqli->prepare("INSERT INTO views (date, ip, useragent, country, server) VALUES (?, ?, ?, ?, ?)");
    $query->bind_param("sssss", $date, $ip, $useragent, $country, $server);
    $query->execute();
}

?>