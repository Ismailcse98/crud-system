<?php
$connect = mysqli_connect("localhost","root","","crud");
if(!$connect){
	echo "Database not connected".mysqli_errno($connect);
}

?>