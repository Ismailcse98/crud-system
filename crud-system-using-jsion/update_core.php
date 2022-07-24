<?php
include 'users.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
	$id = $_POST['id'];
	$user = updateUsers($_POST,$id);
	if(isset($_FILES['img'])){
		$file_name = $_FILES['img']['name'];
		$file_tmp_name = $_FILES['img']['tmp_name'];
		$dorPosition = strpos($file_name, '.');
		$extension = substr($file_name, $dorPosition+1);
		move_uploaded_file($file_tmp_name, 'images/'.$id.".".$extension);
		$user['extension']=$extension;
		updateUsers($user,$id);
	}
	header('Location:index.php');
}
?>