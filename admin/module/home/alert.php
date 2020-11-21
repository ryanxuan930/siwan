<?php
include('../../../dbclass.php');
$db = new database('seiawan');
$db->table('data');
$result = $db->select_all();
while($row = $result->fetch_row()){
	$content = $row[4];
}
echo $content;
flush();
sleep(10);
$db->update('admin=0','1=1');
?>