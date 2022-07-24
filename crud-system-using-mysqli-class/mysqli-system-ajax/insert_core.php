<?php 
include('config.php');

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO mysqli_ajax(name,phone,email,password) VALUES ('$name','$phone','$email','$password')";
$result = $con->query($sql);

if($result){
	$id['id']=$con->insert_id;
	$date['date'] = date("Y-m-d").' '.date("h:i:s");
	$data = array_merge($id,$date,$_POST);
	echo json_encode($data);
}

?>