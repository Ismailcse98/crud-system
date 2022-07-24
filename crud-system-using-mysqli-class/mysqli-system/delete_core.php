<?php
include "config.php";
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE FROM mysqli WHERE id ='$id'";
	$res = $con->query($sql);
	if($res){
		header("Location:index.php");
	}
	$con->close();
}
?>