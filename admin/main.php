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
switch($permission){
	case 1:
		$permi_display = "[企劃部]　　　";
		break;
	case 2:
		$permi_display = "[行銷部]　　　";
		break;
	case 3:
		$permi_display = "[使用者體驗部]";
		break;
	case 4:
		$permi_display = "[科技部]　　　";
		break;
	case 5:
		$permi_display = "[系統管理員]　";
		break;
	case 6:
		$permi_display = "[超級管理員]　";
		break;
}
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/home.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/reader/js/webcam.min.js"></script>
<script type="text/javascript" src="js/reader/js/qr/grid.js"></script>
<script type="text/javascript" src="js/reader/js/qr/version.js"></script>
<script type="text/javascript" src="js/reader/js/qr/detector.js"></script>
<script type="text/javascript" src="js/reader/js/qr/formatinf.js"></script>
<script type="text/javascript" src="js/reader/js/qr/errorlevel.js"></script>
<script type="text/javascript" src="js/reader/js/qr/bitmat.js"></script>
<script type="text/javascript" src="js/reader/js/qr/datablock.js"></script>
<script type="text/javascript" src="js/reader/js/qr/bmparser.js"></script>
<script type="text/javascript" src="js/reader/js/qr/datamask.js"></script>
<script type="text/javascript" src="js/reader/js/qr/rsdecoder.js"></script>
<script type="text/javascript" src="js/reader/js/qr/gf256poly.js"></script>
<script type="text/javascript" src="js/reader/js/qr/gf256.js"></script>
<script type="text/javascript" src="js/reader/js/qr/decoder.js"></script>
<script type="text/javascript" src="js/reader/js/qr/qrcode.js"></script>
<script type="text/javascript" src="js/reader/js/qr/findpat.js"></script>
<script type="text/javascript" src="js/reader/js/qr/alignpat.js"></script>
<script type="text/javascript" src="js/reader/js/qr/databr.js"></script>
<script src="js/reader/js/effects.js"></script>
<title>Seiawan</title>
</head>
<body>
	<div class="topnav" id="navbar">
  		<a id="name_block" disabled><?php echo $name.' '.$permi_display; ?></a>
  		<a onClick="homepage()">首頁</a>
		<a onClick="pointpage()">積點管理</a>
  		<a onClick="configpage()">系統設定</a>
  		<a onClick="logout()">登出</a>
  		<a style="font-size:15px;" class="icon" onclick="topNav()">&#9776;</a>
	</div>
	<div id="container"></div>
	<div id="display_box" style="width:320px; height:240px;"></div>
	<div class="button">
		<a id="button">Scan QR code</a>
	</div>
	<div>
		<div id="qrContent"><p>Result will be here.</p></div>
	</div>
	<div class="footer">
  		<p>© 2020 A Company in Siwan College</p>
  		<p>Powered by Rikujo from Ryan P.H. Chang</p>
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
function configpage(){
	currentPageNav(3);
	topNav();
	$.post("module/config/index.php",function (data){
		$("#container").html(data);
	});
}
function logout(){
	location.href = "module/auth/logout.php";
}

//ini
homepage();
topNav();
</script>

</body>
</html>