<?php
include("../../../database.php");
include("../../../dbclass.php");
if(isset($_POST['id'])){
	$id = $_POST['id'];
}else{
	$id = date("mdHis");
}
/*
session_start();
$_SESSION['id']=$id;
$db = new database('seiawan');
$db->table('participant');
$result = $db->select_where(0,'stu_id="'.$id.'"');
while($row = $result->fetch_row()){
	$present = $row[9];
}
if($result->num_rows){
	if($present){
		echo '<script>
		alert("歡迎回來～咦！你好像已經換過禮物囉...不過沒關係，還是可以繼續你的旅程～\nWellcome back! It seems that you have already collected your reward... but don\'t worry, you still can proceed your journey. Let\'s Go! ");
		location.href="../../main.php";
		</script>';
	}else{
		echo '<script>
		alert("歡迎回來！Wellcome back!");
		location.href="../../main.php";
		</script>';
	}
	
}else{
	$db->insert('stu_id,name,sec1,sec2,sec3,sec4,sec5,sec6,current,present','"'.$id.'",0,0,0,0,0,0,0,0,0');
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
  		<form action="name.php" method="post" class="login">
    		<h1> Wellcome to SIWAN！</h1>
			<div>
				<label for="name" style="color: lightgray">Wellcome to the FUTURE! Before we start, let us know what's your name~</label>
			</div>
			<div>
				<label for="name" style="color: lightgray">歡迎來到未來！輸入你的大名讓我們認識一下吧^^</label>
			</div>
    		<input type="text" placeholder="Enter Your Name" name="name" required>
			<button type="submit" class="btn">GO</button>
  		</form>
	</div>
</body>
</html>