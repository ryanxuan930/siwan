<?php
session_start();
$id = $_SESSION['id'];
include('../../../dbclass.php');
$db = new database('seiawan');
$db->table('data');
$result = $db->select_all();
while($row = $result->fetch_row()){
	$data = $row[1];
}
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
echo '<table class="participant_tb border">';
echo '<tr>';
if($sec1){
	echo '<td><span class="material-icons">grass</span> 舒壓植物園<br>Relaxing botanic garden</td>';
}else{
	echo '<td style="opacity:0.5"><span class="material-icons">grass</span>舒壓植物園<br>Relaxing botanic garden</td>';
}
if($sec2){
	echo '<td><span class="material-icons">looks</span> 打開新世界<br>New horizons</td>';
}else{
	echo '<td style="opacity:0.5"><span class="material-icons">looks</span> 打開新世界<br>New horizons</td>';
}
echo '</tr>';
echo '<tr>';
if($sec3){
	echo '<td><span class="material-icons">timeline</span> 趨勢聯想<br>Trend association</td>';
}else{
	echo '<td style="opacity:0.5"><span class="material-icons">timeline</span> 趨勢聯想<br>Trend association</td>';
}
if($sec4){
	echo '<td><span class="material-icons">forum</span> 溝通媒介<br>Communication media</td>';
}else{
	echo '<td style="opacity:0.5"><span class="material-icons">forum</span> 溝通媒介<br>Communication media</td>';
}
echo '</tr>';
echo '<tr>';
if($sec5){
	echo '<td><span class="material-icons">vpn_key</span> 摩斯密碼<br>Decoder</td>';
}else{
	echo '<td style="opacity:0.5"><span class="material-icons">vpn_key</span> 摩斯密碼<br>Decoder</td>';
}
if($sec6){
	echo '<td><span class="material-icons">hearing</span> 聽力輔助<br>I know what you said</td>';
}else{
	echo '<td style="opacity:0.5"><span class="material-icons">hearing</span> 聽力輔助<br>I know what you said</td>';
}
echo '</tr>';
echo '</table>';
if($present){
	echo '<div class="border">你拿過獎品囉～ You have collected your reward.^^</div>';
}
if($data){
	echo '<div class="border">主辦單位公告：<hr>'.$data.'</div>';
}
echo '<script>';
echo '$("#qrcode").qrcode({width: 256,height: 256,text: "'.$id.'"});';
echo '</script>';
?>