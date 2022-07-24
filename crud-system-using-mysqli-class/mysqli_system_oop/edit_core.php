<?php 
include "Database.php";
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$skill = $_POST['skill'];
	$sql = "UPDATE crud_mysqli SET name = '$name', email='$email',skill='$skill' WHERE id = '$id'";
	$db = new Database();
	$result = $db->Update($sql);
	if($result){
		header("Location:index.php");
	}
}

?>