<?php
session_start();
$id = $_SESSION['id'];
include('../../../dbclass.php');
$db = new database('seiawan');
$db->table('data');
$result = $db->select_all();
while($row = $result->fetch_row()){
	echo $row[1];
}
?>