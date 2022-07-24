<?php 
include "config.php";
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "UPDATE mysqli SET name='$name',email='$email',password='$password' WHERE id ='$id'";
	$res = $con->query($sql);
	if($res){
		header("Location:index.php");
	}
	$con->close();
}
?>