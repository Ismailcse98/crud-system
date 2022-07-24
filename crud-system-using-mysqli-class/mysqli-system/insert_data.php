<?php 
include "config.php";
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "INSERT INTO mysqli(name,email,password) VALUES('$name','$email','$password')";
	$res = $con->query($sql);
	if($res){
		header("Location:index.php");
	}
	$con->close();
}
?>