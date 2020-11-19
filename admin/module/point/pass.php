<?php
include('../../../dbclass.php');
$stu_id = $_POST['id'];
$host = $_POST['host'];
$db = new database('seiawan');
$db->table('admin');
$result = $db->select_where(0,'account="'.$host.'"');
while($row = $result->fetch_row()){
	$section = $row[4];
}
switch($section){
	case 1:
		$sec = 'sec1';
		break;
	case 2:
		$sec = 'sec2';
		break;
	case 3:
		$sec = 'sec3';
		break;
	case 4:
		$sec = 'sec4';
		break;
	case 5:
		$sec = 'sec5';
		break;
	case 6:
		$sec = 'sec6';
		break;
}
$db->table('participant');
$db->update($sec.'=1','stu_id="'.$stu_id.'"');
if($db->error()){
	echo $db->error();
}else{
	echo 'ok';
}
?>