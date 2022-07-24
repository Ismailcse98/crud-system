<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$roll = $_POST['roll'];
	$date = date('Y-m-d h:i:s');

	$data = "@".$name."*".$email."*".$roll."*".$date;
	$open = fopen('server.txt', 'a');
	fwrite($open, $data);
	fclose($open);
	header("Location:index.php");
}