<?php
include('../../../dbclass.php');
$content = $_POST['content'];
$db = new database('seiawan');
$db->table('data');
$db->update('announce="'.$content.'"','1=1');
echo '成功發布公告';
$db->update('refresh="front"','1=1');
?>