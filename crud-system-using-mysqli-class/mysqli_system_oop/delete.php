<?php
include "Database.php";
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE FROM crud_mysqli WHERE id='$id'";
	$db = new Database();
	$result = $db->Update($sql);
	if($result){
		header("Location:index.php");
	}
}

?>