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
	ini_set('session.gc_maxlifetime', 43200);
	session_start();
	$_SESSION['account'] = $account;
	header('Location: ../../main.php');
	exit();
}else{
	echo '<script>alert("帳號或密碼錯誤");</script>';
}
?>