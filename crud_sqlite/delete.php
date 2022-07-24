<?php 
include 'config.php';
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql= "DELETE FROM students WHERE id='$id'";
	$result = $con->query($sql);
	if($result){
		header('Location:index.php');
	}
}
?>