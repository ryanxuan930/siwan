<?php
session_start();
if(!isset($_SESSION['id'])){
	echo '<script>';
	echo 'alert("你好像還沒登入唷 Please Login first.");';
	echo 'location.href="index.php";';
	echo '</script>';
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/frame.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Seiawan</title>
</head>
<body>
	<div class="bg-img">
		<div style="height: 5vh;"></div>
		<div class="container_box">
			<div id="container" class="container"></div>
		</div>
		<div style="height: 5vh;"></div>
		<div class="footer">
  			<p>© 2020 A Company in Siwan College</p>
  			<p>Powered by Rikujo from Ryan P.H. Chang</p>
		</div>
	</div>
<script>
function fetch(){
	$.post("module/home/index.php",function(data){
		$("#container").html(data);
		$.post("module/home/announce.php",function(data){
			$("#announce").html(data);
		});
	});
}
function logout(){
	location.href="module/logout/logout.php";
}
var source = new EventSource("../server.php");
source.onmessage = function(event){
	if(event.data == "<?php echo $_SESSION['id'];?>"){
		fetch();
	}
	if(event.data == "front"){
		$.post("module/home/announce.php",function(data){
			$("#announce").html(data);
		});
	}
	if(event.data == "alert"){
		$.post("module/home/alert.php",function(data){
			var audio = new Audio('../alert.mp3');
			if(audio.play();){
				alert(data);
			}
		});
	}
};
fetch();
</script>
</body>
</html>