<?php 
include 'config.php';
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "UPDATE old_crud_system SET name='$name',phone='$phone',email='$email',password='$password'  WHERE id='$id'";

	$query = mysqli_query($connect,$sql);
	if($query){
		header('Location:index.php');
	}
}
?>