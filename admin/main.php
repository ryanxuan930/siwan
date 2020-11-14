<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/home.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<title>Seiawan</title>
</head>
<body>
	<div class="topnav" id="navbar">
  		<a onClick="homepage()">首頁</a>
  		<a onClick="gamepage()">遊戲後台</a>
  		<a href="#contact">Contact</a>
  		<a href="#about">About</a>
  		<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="topNav()">&#9776;</a>
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
currentPageNav(0);
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
}
function gamepage(){
	currentPageNav(1);
}
</script>
</body>
</html>