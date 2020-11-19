<?php
include("../../../database.php");
include("../../../dbclass.php");
$account = $_POST['id'];
$db = new database('seiawan');
$db->table('participant');
$result = $db->select_where(0,'stu_id="'.$account.'"');
if($result->num_rows){
	echo '<script>alert("ok")</script>';
	exit();
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/main.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<title>Seiawan</title>
</head>
<body>
	<div class="bg-img">
		<div style="height: 100px;"></div>
  		<form action="module/login/login.php" method="post" class="login">
    		<h1> Wellcome to SIWAN！</h1>
			<div>
				<label for="id" style="color: lightgray">Wellcome to the FUTURE! Before we start, let us know what's your name~</label>
			</div>
			<div>
				<label for="id" style="color: lightgray">歡迎來到未來！輸入你的大名讓我們認識一下吧^^</label>
			</div>
    		<input type="text" placeholder="Enter Your Student ID" name="id" required>
			<button type="submit" class="btn">GO</button>
  		</form>
	</div>
</body>
</html>