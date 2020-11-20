<?php
session_start();
unset($_SESSION["id"]);
?>
<script>
	alert("已登出");
	location.href="../../index.php"
</script>