<?php
include('../../../dbclass.php');
$db = new database('seiawan');
$db->table('participant');
$sec1 =0;
$sec2 =0;
$sec3 =0;
$sec4 =0;
$sec5 =0;
$sec6 =0;
$present =0;
$result = $db->select_all();
while($row = $result->fetch_row()){
	$sec1 += $row[2];
	$sec2 += $row[3];
	$sec3 += $row[4];
	$sec4 += $row[5];
	$sec5 += $row[6];
	$sec6 += $row[7];
	$present += $row[9];
}
echo '<table>';
echo '<tr><td>舒壓植物園</td><td>'.$sec1.'</td></tr>';
echo '<tr><td>打開新世界</td><td>'.$sec2.'</td></tr>';
echo '<tr><td>趨勢聯想</td><td>'.$sec3.'</td></tr>';
echo '<tr><td>溝通媒介</td><td>'.$sec4.'</td></tr>';
echo '<tr><td>摩斯密碼</td><td>'.$sec5.'</td></tr>';
echo '<tr><td>聽力輔助</td><td>'.$sec6.'</td></tr>';
echo '</table>';
?>