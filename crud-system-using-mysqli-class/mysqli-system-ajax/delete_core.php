<?php 
include('config.php');

$id = $_POST['id'];

$sql = "DELETE FROM mysqli_ajax WHERE id='$id'";
$result = $con->query($sql);

if($result){
	echo 1;
}

?>