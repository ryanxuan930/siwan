<?php
session_start();
unset($_SESSION["account"]);
?>
<script>
	alert("已登出");
	location.href="../../index.php"
</script>