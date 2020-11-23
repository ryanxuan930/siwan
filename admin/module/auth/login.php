<?php
include('../../../dbclass.php');
include('../../../database.php');
$account = $_POST['id'];
$hash = $_POST['password'];
$hash = password_hash($hash, PASSWORD_DEFAULT);
$conn->select_db('seiawan');
$stmt = $conn->prepare("SELECT * FROM admin WHERE account=?");
$stmt->bind_param("s", $account);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows){
	while($row = $result->fetch_row()){
		$password = $row[1];
	}
	if(password_verify($password, $hash)){
		session_start();
		$_SESSION['account'] = $account;
		header('Location: ../../main.php');
		exit();
	}else{
		//echo '<script>alert("帳號或密碼錯誤");location.href="../../index.php";</script>';
	}
}else{
	//echo '<script>alert("帳號或密碼錯誤");location.href="../../index.php";</script>';
}

?>