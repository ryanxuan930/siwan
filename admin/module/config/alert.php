<?php
$content = $_POST['content'];
include('../../../dbclass.php');
$content = $_POST['content'];
$db = new database('seiawan');
$db->table('data');
echo '已發布通知';
$db->update('refresh="alert", admin="alert"','1=1');
?>