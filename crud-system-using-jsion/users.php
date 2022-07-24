<?php 
function getUsers(){
	$user = json_decode(file_get_contents('user.json'),true);
	return $user;
}
function getUsersById($id){
	$users = getUsers();
	foreach ($users as $user) {
		if($user['id']==$id){
			return $user;
		}
	}
	return null;
}
function createUsers($data){}
function updateUsers($data,$id){
	$updateUsers = [];
	$users = getUsers();
	foreach ($users as $key => $user) {
		if($user['id']==$id){
			$users[$key]= $updateUsers =array_merge($user,$data);
		}
	}
	file_put_contents('user.json', json_encode($users, JSON_PRETTY_PRINT));
	return $updateUsers;
}
function deleteUsers($id){}
?>