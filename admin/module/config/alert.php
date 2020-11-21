<?php
$content = $_POST['content'];
include('../../../dbclass.php');
$content = $_POST['content'];
$db = new database('seiawan');
$db->table('data');
echo $content;
$db->update('refresh="alert", admin="alert"','1=1');
?>