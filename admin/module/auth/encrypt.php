<?php
include('../../../database.php');
$account = $_POST['account'];
$password = $_POST['password'];
$name = $_POST['name'];
$permission = $_POST['permission'];
$password = password_hash($password, PASSWORD_DEFAULT);
$conn->select_db('seiawan');
$stmt = $conn->prepare("INSERT INTO admin (account, password, name, permission, section) VALUES (?,?,?,?,1)");
$stmt->bind_param("ssss", $account, $password, $name, $permission);
$stmt->execute();
echo '<script>
	alert("已新增'.$account.' '.$name.'");
	location.href="account.php";
</script>';
?>