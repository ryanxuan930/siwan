<?php
session_start();
$id = $_SESSION['id'];
include('../../../dbclass.php');
$db = new database('seiawan');
$db->table('participant');
$result = $db->select_where(0,'stu_id="'.$id.'"');
while($row = $result->fetch_row()){
	$name = $row[1];
	$sec1 = $row[2];
	$sec2 = $row[3];
	$sec3 = $row[4];
	$sec4 = $row[5];
	$sec5 = $row[6];
	$sec6 = $row[7];
	$current = $row[8];
	$present = $row[9];
	$sum = $sec1+$sec2+$sec3+$sec4+$sec5+$sec6;
}
echo '<script type="text/javascript" src="js/generator/jquery.qrcode.min.js"></script>';
echo '<div id="qrcode"></div>';
echo '
<script>
$("#qrcode").qrcode({width: 512,height: 512,text: "'.$id.'"});
</script>
';
?>