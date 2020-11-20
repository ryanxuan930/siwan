<?php
include('../../../dbclass.php');
session_start();
$account = $_SESSION['account'];
$section = $_POST['section'];
echo '關主';
echo $account;
echo '的關卡設定為：';
switch($section){
	case 1:
		echo '舒壓植物園';
		break;
	case 2:
		echo '打開新世界';
		break;
	case 3:
		echo '趨勢聯想';
		break;
	case 4:
		echo '溝通媒介';
		break;
	case 5:
		echo '摩斯密碼';
		break;
	case 6:
		echo '聽力輔助';
		break;
	case 7:
		echo '獎品兌換';
		break;
}
$db = new database('seiawan');
$db->table('admin');
$db->update('section="'.$section.'"', 'account="'.$account.'"');
?>