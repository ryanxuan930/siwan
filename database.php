<?php
$dbserver="127.0.0.1";
$dbusername="seiawan";
$dbpassword="Siwan075252000";
$conn = new mysqli($dbserver, $dbusername, $dbpassword);
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->query("set names utf8");
date_default_timezone_set('Asia/Taipei');
?>