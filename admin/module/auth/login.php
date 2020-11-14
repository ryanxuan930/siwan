<?php
include('../../../dbclass.php');
include('../../../database.php');
$account = $_POST['id'];
$password = $_POST['password'];
$conn->select_db('seiawan');
$stmt = $conn->prepare("SELECT * FROM admin WHERE account=? AND password=?");
$stmt->bind_param("ss", $account, $password);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows){
	echo 'ok';
}else{
	echo 'no';
}
?>