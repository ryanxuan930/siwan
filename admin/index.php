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
		<div class="login_box">
			<div style="height: 100px;"></div>
  			<form action="module/auth/login.php" method="post" class="login">
    			<h1>SEIAWAN SYSTEM</h1>
				<label for="id" style="color: lightgray">請輸入學號</label>
    			<input type="text" placeholder="Enter Your Student ID" name="id" required>
				<label for="password" style="color: lightgray">請輸入學號</label>
    			<input type="password" placeholder="Enter Your Password" name="password" required>
				<button type="submit" class="login_btn">登入</button>
  			</form>
		</div>
	</div>
</body>
</html>