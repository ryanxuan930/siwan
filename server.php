<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
$id = 0;
if(isset($_GET['id'])){
	$id = $_GET['id'];
}
echo "data: {$id}\n\n";
flush();
?>