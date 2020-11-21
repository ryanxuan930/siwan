<?php
$content = $_POST['content'];
include('../../../dbclass.php');
$content = $_POST['content'];
$db = new database('seiawan');
$db->table('data');
$db->update('`refresh`="alert",`alert`="'.$content.'\n於'.date("m/d H:i:s").'發布"','1=1');
echo '已發布通知';
?>