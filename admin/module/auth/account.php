<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>帳號頁面</title>
</head>
<body>
	<form action="encrypt.php" method="post">
		<label for="account"></label>
		<input type="text" maxlength="10" name="account"/>
		<label for="password"></label>
		<input type="password" name="password"/>
		<label for="name"></label>
		<input type="text" name="name"/>
		<select name="permission">
			<option value="1">企劃部</option>
			<option value="2">行銷部</option>
			<option value="3">使用者體驗部</option>
			<option value="4">科技部</option>
			<option value="5">系統管理員</option>
			<option value="6">超級管理員</option>
		</select>
	</form>
</body>
</html>