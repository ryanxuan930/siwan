<?php
$section = $_POST['section'];
echo '關卡設定為：';
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
}
?>