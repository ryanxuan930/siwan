<?php
include('../../../dbclass.php');
include('../../../database.php');
$id = $_POST['id'];
$password = $_POST['password'];
$conn->select_db('seiwan');
$stmt = $conn->prepare("SELECT * FROM admin WHERE id='?' AND password='?'");
$stmt->bind_param("ss", $id, $password);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows){
	echo 'ok';
}else{
	echo 'no';
}
?>