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
	<div class="topnav" id="topnav">
  		<a href="#home" class="active">Home</a>
  		<a href="#news">News</a>
  		<a href="#contact">Contact</a>
  		<a href="#about">About</a>
  		<a href="javascript:void(0);" class="icon" onclick="topNav()">
    		<i class="fa fa-bars"></i>
  		</a>
	</div>
<script>
function topNav(){
	var x = document.getElementById("topnav");
  	if(x.className === "topnav"){
    	x.className += " responsive";
  	}else{
    	x.className = "topnav";
  	}
}
</script>
</body>
</html>