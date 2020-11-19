<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/frame.css">
<link rel="stylesheet" href="css/main.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Seiawan</title>
</head>
<body>
	<div class="bg-img">
		<div style="height: 50px;"></div>
		<div class="container_box">
			<div id="container" class="container"></div>
		</div>
		<div style="height: 50px;"></div>
		<div class="footer">
  			<p>© 2020 A Company in Siwan College</p>
  			<p>Powered by Rikujo from Ryan P.H. Chang</p>
		</div>
	</div>
<script>
function fetch(){
	$.post("module/home/index.php",{query: 1},function(){
		$("#container").html();
	});
}
fetch();
</script>
</body>
</html>