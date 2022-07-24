<?php
include "Database.php";
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$skill = $_POST['skill'];
	$sql = "INSERT INTO crud_mysqli(name,email,skill) VALUES ('$name','$email','$skill')";
	$db = new Database();
	$result = $db->Insert($sql);
	if($result){
		header("Location: index.php");
	}
}
?>