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
echo 'a1\n';
switch($section){
	case 1:
		$sec = 'sec1';
		$data = '舒壓植物園';
		break;
	case 2:
		$sec = 'sec2';
		$data = '打開新世界';
		break;
	case 3:
		$sec = 'sec3';
		$data = '趨勢聯想';
		break;
	case 4:
		$sec = 'sec4';
		$data = '溝通媒介';
		break;
	case 5:
		$sec = 'sec5';
		$data = '摩斯密碼';
		break;
	case 6:
		$sec = 'sec6';
		$data = '聽力輔助';
		break;
	case 7:
		$sec = 'present';
		$data = '兌換獎品';
		$db->table('participant');
		$result = $db->select_where(0,'stu_id="'.$stu_id.'"');
		while($row = $result->fetch_row()){
			$sum = $row[2]+$row[3]+$row[4]+$row[5]+$row[6]+$row[7];
			$present = $row[9];
		}
		if($present){
			$remark = '已兌換過獎品';
		}else if($sum>0){
			$remark = '共通過'.$sum.'個關卡';
		}else{
			$remark = '尚未有點數可兌換';
		}
		
		break;
}
echo 'a2\n';
$db->table('participant');
$db->update($sec.'=1, current="'.$section.'"','stu_id="'.$stu_id.'"');
echo 'a4\n';
if($db->error()){
	echo '連線錯誤\n'.$db->error();
}else{
	if($section==7){
		echo $stu_id.$remark;
	}else{
		echo $stu_id.'通過'.$data.'關卡';
	}
	$db->table('data');
	$db->update('refresh="'.$stu_id.'"','1=1');
}
echo 'a4\n';
?>