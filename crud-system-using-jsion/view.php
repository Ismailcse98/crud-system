<?php 
include 'users.php';
include 'inc/header.php';
if(!isset($_GET['id'])){
	echo "<p class='bg-warning'>Id does not exits</p>";
	exit();
}
$id = $_GET['id'];
$users = getUsersById($id);
if(!isset($users)){
	echo "<p class='bg-warning'>User does not exits</p>";
	exit();
}
?>
<div class="container">
	<div class="panel panel-default">
	  <div class="panel-heading"><h1>Welcome <?php echo $users['name'];?></h1></div>
	  <div class="panel-body">
	  	<table class="table table-bordered">
	  		<tr>
	  			<td>Name</td>
	  			<td><?php echo $users['name'];?></td>
	  		</tr>
	  		<tr>
	  			<td>Username</td>
	  			<td><?php echo $users['username'];?></td>
	  		</tr>
	  		<tr>
	  			<td>E-mail</td>
	  			<td><?php echo $users['email'];?></td>
	  		</tr>
	  		<tr>
	  			<td>Phone</td>
	  			<td><?php echo $users['phone'];?></td>
	  		</tr>
	  		<tr>
	  			<td>Website</td>
	  			<td><?php echo $users['website'];?></td>
	  		</tr>
	  	</table>
	  </div>
	</div>
</div>

<?php
include 'inc/footer.php';
?>