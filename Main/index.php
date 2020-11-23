<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<title>Seiawan</title>
</head>
<body>
	<div class="bg-img">
		<div style="height: 100px;"></div>
  		<form action="module/login/login.php" name="login_form" method="post" class="login">
    		<h1> Wellcome to SIWAN！</h1>
			<div>
				<label for="id" style="color: lightgray">Enter your student ID to start the journey to the future.</label>
			</div>
			<div>
				<label for="id" style="color: lightgray">輸入你的學號，來開始未來之旅</label>
			</div>
    		<input type="text" placeholder="Enter Your Student ID" name="id" maxlength="10">
			<button type="submit" class="btn" onsubmit="return form()">GO</button>
			<div>
				<label style="color: #BDBDBD">If you don't have a student ID, don't worry. After you click the "GO" button, the system will automatically generate a unique serial number for you. BTW, DON'T FORGET IT, because it's your passcode in SIWAN~<br>如果你沒有學號也沒關係，按下GO以後，系統會自動幫你產出一組序號。喔還有！別忘了要記下這組序號，因為它是你接下來在西灣的通行碼唷～</label>
			</div>
  		</form>
	</div>
<script>
var code = Date.now().toString().substring(3,10);
console.log(code);
function form() {
  	var x = document.forms["login_form"]["id"].value;
	var code = Date.now();
  	if(x == "" || x == null){
    	document.forms["login_form"]["id"].value = code;
    	return true;
  	}
}	
</script>
</body>
</html>