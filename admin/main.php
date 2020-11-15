<?php
session_start();
if(!isset($_SESSION['account'])){
	echo '<script>alert("尚未登入"); location.href="index.php"</script>';
	exit();
}
include('../dbclass.php');
include('../database.php');
$db = new database('seiawan');
$db->table('admin');
$account = $_SESSION['account'];
$result = $db->select_where(0, 'account = "'.$account.'"');
while($row = $result->fetch_row()){
	$name = $row[2];
	$permission = $row[3];
}
if($permission == 2){
	$permi_display = "超級管理員";
}else if($permission == 1){
	$permi_display = "系統管理員";
}else{
	$permi_display = "一般管理員";
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/home.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Seiawan</title>
</head>
<body>
	<div class="topnav" id="navbar">
  		<a id="name_block" disabled><?php echo $name.' '.$permi_display; ?></a>
  		<a onClick="homepage()">首頁</a>
		<a onClick="pointpage()">積點管理</a>
  		<a onClick="gamepage()">遊戲後台</a>
  		<a onClick="configpage()">系統設定</a>
  		<a onClick="logout()">登出</a>
  		<a style="font-size:15px;" class="icon" onclick="topNav()">&#9776;</a>
	</div>
	<div id="container"></div>
	<div class="footer">
  		<p>© 2020 A Company in Siwan College</p>
  		<p>Powered by "Rikujo" from ryanxuan930</p>
	</div>
<script>
var currentPage =0;
function currentPageNav(page){
	var nav = document.getElementById("navbar");
	var navChild = nav.getElementsByTagName("a")[currentPage];
	navChild.classList.remove("active");
	var navChild = nav.getElementsByTagName("a")[page];
	navChild.classList.add("active");
	currentPage = page;
	
}
function topNav(){
	var x = document.getElementById("navbar");
  	if(x.className === "topnav"){
    	x.className += " responsive";
  	}else{
    	x.className = "topnav";
  	}
}
function homepage(){
	currentPageNav(1);
	topNav();
	$.post("module/home/index.php",function (data){
		$("#container").html(data);
	});
}
function pointpage(){
	currentPageNav(2);
	topNav();
	$.post("module/point/index.php",function (data){
		$("#container").html(data);
	});
}
function gamepage(){
	currentPageNav(3);
	topNav();
	$.post("module/game/index.php",function (data){
		$("#container").html(data);
	});
}
function configpage(){
	currentPageNav(4);
	topNav();
	$.post("module/config/index.php",function (data){
		$("#container").html(data);
	});
}
function logout(){
	location.href = "module/auth/logout.php";
}
homepage();
</script>
</body>
</html>