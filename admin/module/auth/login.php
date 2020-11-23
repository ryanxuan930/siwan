<?php
include('../../../dbclass.php');
include('../../../database.php');
$account = $_POST['id'];
$password = $_POST['password'];
$conn->select_db('seiawan');
$stmt = $conn->prepare("SELECT * FROM admin WHERE account=?");
$stmt->bind_param("s", $account);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows){
	while($row = $result->fetch_row()){
		$hash = $row[1];
	}
	if(password_verify($password, $hash)){
		session_start();
		$_SESSION['account'] = $account;
		header('Location: ../../main.php');
		exit();
	}else{
		echo '<script>alert("密碼錯誤");location.href="../../index.php";</script>';
	}
}else{
	echo '<script>alert("帳號錯誤");location.href="../../index.php";</script>';
}

?>