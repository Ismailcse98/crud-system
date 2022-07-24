<?php 
include 'config.php';
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "UPDATE students SET name='$name',email='$email',password='$password' WHERE id = '$id'";
	$result = $con->query($sql);
	if($result){
		header('Location:index.php');
	}
}

?>