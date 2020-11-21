<?php
date_default_timezone_set("Asia/Taipei");
$content = $_POST['content'];
include('../../../dbclass.php');
$content = $_POST['content'];
$db = new database('seiawan');
$db->table('data');
$db->update('`refresh`="alert",`alert`="'.$content.'"','1=1');
echo '已發布通知';
?>