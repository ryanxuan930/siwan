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
echo '<h2 style="color: #424242">SIWAN PASS</h2>';
echo '<div id="qrcode"></div>';
echo '<hr>';
echo '<div class="participant">['.$id.']</div>';
echo '<div class="participant">'.strtoupper($name).'</div>';
echo '<table>';
echo '<tr>';
echo '<td><span class="material-icons">grass</span>舒壓植物園</td>';
echo '<td><span class="material-icons">looks</span>打開新世界</td>';
echo '</tr>';
echo '<tr>';
echo '<td><span class="material-icons">timeline</span>趨勢聯想</td>';
echo '<td><span class="material-icons">forum</span>溝通媒介</td>';
echo '</tr>';
echo '<tr>';
echo '<td><span class="material-icons">vpn_key</span>摩斯密碼</td>';
echo '<td><span class="material-icons">hearing</span>聽力輔助</td>';
echo '</tr>';
echo '</table>';
echo '
<script>
$("#qrcode").qrcode({width: 256,height: 256,text: "'.$id.'"});
</script>
';
?>