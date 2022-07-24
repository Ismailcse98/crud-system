<?php
include('config.php');
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "INSERT INTO old_crud_system(name,phone,email,password) VALUES ('$name','$phone','$email','$password')";

	$query = mysqli_query($connect,$sql);
	if($query){
		header('Location:index.php');
	}
}

?>