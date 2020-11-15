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
  		<a onClick="homepage()">首頁</a>
		<a onClick="pointpage()">積點管理</a>
  		<a onClick="gamepage()">遊戲後台</a>
  		<a onClick="configpage()">系統設定</a>
  		<a style="font-size:15px;" class="icon" onclick="topNav()">&#9776;</a>
	</div>
	<div class="container"></div>
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
	currentPageNav(0);
	topNav();
	$.post("home/index.php",{query: 1},function (data){
		$("#container").html(data);
	});
}
function pointpage(){
	currentPageNav(1);
	topNav();
}
function gamepage(){
	currentPageNav(2);
	topNav();
}
function configpage(){
	currentPageNav(3);
	topNav();
}
currentPageNav(0);
</script>
</body>
</html>