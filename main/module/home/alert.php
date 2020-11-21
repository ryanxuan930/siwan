<?php
include('../../../dbclass.php');
$db = new database('seiawan');
$db->table('data');
$result = $db->select_all();
while($row = $result->fetch_row()){
	echo $row[4];
}
sleep(8);
$db->update('refresh=0','1=1');
?>