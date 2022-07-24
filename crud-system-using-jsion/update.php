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
// echo "<pre>";
// print_r($users);
?>
<div class="container">
	<form action="update_core.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id?>">
	  <div class="form-group">
	    <label for="name">Name</label>
	    <input type="text" name="name" value="<?php echo $users['name'];?>" class="form-control" id="name">
	  </div>
	  <div class="form-group">
	    <label for="username">User Name</label>
	    <input type="text" name="username" value="<?php echo $users['username'];?>" class="form-control" id="username">
	  </div>
	  <div class="form-group">
	    <label for="email">E-mail </label>
	    <input type="email" name="email" value="<?php echo $users['email'];?>" class="form-control" id="email">
	  </div>
	  <div class="form-group">
	    <label for="phone">Phone </label>
	    <input type="text" name="phone" value="<?php echo $users['phone'];?>" class="form-control" id="phone">
	  </div>
	  <div class="form-group">
	    <label for="website">Website </label>
	    <input type="text" name="website" value="<?php echo $users['website'];?>" class="form-control" id="website">
	  </div>
	  <div class="form-group">
	    <label for="img">Website </label>
	    <input type="file" name="img"  class="form-control" id="img">
	  </div>
	  <div class="form-group">
	    <input type="submit" name="update" value="Update" class="form-control bg-primary">
	  </div>
	</form>
</div>

<?php
include 'inc/footer.php';
?>