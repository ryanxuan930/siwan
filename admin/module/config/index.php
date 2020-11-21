<?php
include('../../../dbclass.php');
$db = new database('seiawan');
$db->table('data');
$result = $db->select_all();
while($row = $result->fetch_row()){
	$c1 = $row[1];
	$c2 = $row[2];
	$c3 = $row[4];
}
echo '<script src="js/config.js"></script>';
echo '<div class="console box">';
echo '<h2>後台系統公告發布</h2><hr>';
echo '<textarea id="admin_announcement" style="height: 10ex; width:100%;margin: 10px 0; padding: 5px; border-radius: 4px;">'.$c1.'</textarea>';
echo '<button onClick="announceAdmin()" style="color:white;background-color: #E65100;width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;border: none;border-radius: 4px;cursor: pointer;">送出公告</button>';
echo '</div>';
echo '<div class="console box">';
echo '<h2>前台遊戲公告發布</h2><hr>';
echo '<textarea id="front_announcement" style="height: 10ex; width:100%;margin: 10px 0; padding: 5px; border-radius: 4px;">'.$c2.'</textarea>';
echo '<button onClick="announceSubmit()" style="color:white;background-color: #E65100;width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;border: none;border-radius: 4px;cursor: pointer;">送出公告</button>';
echo '</div>';
echo '<div class="console box">';
echo '<h2>全域通知發布</h2><hr>';
echo '<textarea id="alert" style="height: 5ex; width:100%;margin: 10px 0; padding: 5px; border-radius: 4px;">'.$c3.'</textarea>';
echo '<button onClick="alertSubmit()" style="color:white;background-color: #E65100;width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;border: none;border-radius: 4px;cursor: pointer;">送出通知</button>';
echo '</div>';
?>