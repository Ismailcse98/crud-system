<?php 
include 'config.php';
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "INSERT INTO students(name,email,password)VALUES('$name','$email','$password')";
	$result = $con->query($sql);
	if($result){
		header('Location:index.php');
	}
}
?>