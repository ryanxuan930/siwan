<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
include('dbclass.php');
$db = new database('seiawan');
$db->table('data');
$result = $db->select_all();
while($row = $result->fetch_row()){
	$id = $row[3];
}
echo "data: {$id}\n\n";
flush();
if($id=="alert" or $id="announce"){
	sleep(10);
}
$db->update('admin="0"','1=1');
?>