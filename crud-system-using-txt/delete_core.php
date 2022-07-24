<?php 
$id = $_GET['delete_id'];
	$open = fopen('server.txt', 'r');
	$res = fread($open, filesize('server.txt'));
	$data = explode('@', $res);
	unset($data[$id]);
	$delete_data = implode('@', $data);
	$r = fopen('server.txt', 'w');
	fwrite($r, $delete_data);
	fclose($r);
	header("Location:index.php");