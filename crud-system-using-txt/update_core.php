<?php
if(isset($_POST['update'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$roll = $_POST['roll'];
	$date = date('Y-m-d h:i:s');
	$id = $_POST['edit_id'];

	$open = fopen('server.txt', 'r');
	$res = fread($open, filesize('server.txt'));
	$data = explode('@', $res);
	$data[$id] = $name."*".$email."*".$roll."*".$date;
	$update_data = implode('@', $data);
	$r = fopen('server.txt', 'w');
	fwrite($r, $update_data);
	fclose($r);
	header("Location:index.php");
}