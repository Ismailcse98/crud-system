<?php 
include('config.php');
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE FROM old_crud_system WHERE id='$id'";
	$query = mysqli_query($connect,$sql);
	if($query){
		header('Location:index.php');
	}
}

?>