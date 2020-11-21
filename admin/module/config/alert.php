<?php
$content = $_POST['content'];
include('../../../dbclass.php');
$content = $_POST['content'];
$db = new database('seiawan');
$db->table('data');
$db->update('alert="'.$content.'"','1=1');
echo '已發布通知';
$db->update('refresh="alert"','1=1');
$db->update('admin="alert"','1=1');
?>