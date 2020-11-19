<?php
include("../../../database.php");
include("../../../dbclass.php");
$name = $_POST['name'];
$db = new database('seiawan');
$db->table('participant');
$db->update('name="'.$name.'"','stu_id="'.$_SESSION['id'].'"');
?>