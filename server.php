<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
include('dbclass.php');
$db = new database('seiawan');
$db->table('data');
$result = $db->select_all();
while($row = $result->fetch_row()){
	$id = $row[0];
}
echo "data: {$id}\n\n";
if($id=="front"){
	sleep(5);
}
flush();
$db->update('refresh="0"','1=1');
?>