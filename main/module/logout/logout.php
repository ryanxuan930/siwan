<?php
session_start();
unset($_SESSION["id"]);
?>
<script>
	alert("掰掰～ Bye bye~");
	location.href="../../index.php"
</script>