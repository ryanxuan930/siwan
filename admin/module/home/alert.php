<?php
include('../../../dbclass.php');
$db = new database('seiawan');
$db->table('data');
$result = $db->select_all();
while($row = $result->fetch_row()){
	echo $row[4];
}
sleep(5);
$db->update('admin=0','1=1');
?>