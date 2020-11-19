<?php
include("../../../dbclass.php");
session_start();
$name = $_POST['name'];
$db = new database('seiawan');
$db->table('participant');
$db->update('name="'.$name.'"','stu_id="'.$_SESSION['id'].'"');
header('Location: ../../main.php');
exit();
?>