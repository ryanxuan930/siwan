<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/frame.css">
<link rel="stylesheet" href="css/main.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<title>Seiawan</title>
</head>
<body>
	<div class="bg-img">
		<div style="height: 50px;"></div>
		<div class="container_box">
			<div class="container"></div>
		</div>
		<video id="preview"></video>
    <script>
      let scanner = new Instascan.Scanner({ video: document.getElementById(\'preview\') });
      scanner.addListener(\'scan\', function (content) {
        console.log(content);
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error(\'No cameras found.\');
        }
      }).catch(function (e) {
        console.error(e);
      });
    </script>
		<div style="height: 50px;"></div>
		<div class="footer">
  			<p>© 2020 A Company in Siwan College</p>
  			<p>Powered by Rikujo from Ryan P.H. Chang</p>
		</div>
	</div>
<script>

</script>
</body>
</html>