<?php
include('../../../dbclass.php');
$content = $_POST['content'];
$db = new database('seiawan');
$db->table('data');
$db->update('admin_ann="'.$content.'"','1=1');
echo '成功發布公告';
$db->update('admin="announce"','1=1');
?>