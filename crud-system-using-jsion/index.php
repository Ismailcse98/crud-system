<?php 
include 'inc/header.php';
include 'users.php';
$users = getUsers();

?>

	<div class="container">
		<a href="create.php" class="btn btn-primary">Create new user</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>images</th>
					<th>Name</th>
					<th>User Name</th>
					<th>E-mail</th>
					<th>Phone</th>
					<th>Website</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				foreach ($users as $user) :
					?>
				<tr>
					<td>
						<?php if(isset($user['extension'])){
						?>
						<img src="<?php echo "images/".$user['id'].".".$user['extension']?>" alt="">
					<?php } ?>
					</td>
					<td><?php echo $user['name'];?></td>
					<td><?php echo $user['username'];?></td>
					<td><?php echo $user['email'];?></td>
					<td><?php echo $user['phone'];?></td>
					<td><?php echo $user['website'];?></td>
					<td>
						<a href="view.php?id=<?php echo $user['id'];?>" class="btn btn-success">View</a>
						<a href="update.php?id=<?php echo $user['id'];?>" class="btn btn-primary">Update</a>
						<a href="delete.php?id=<?php echo $user['id'];?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				<?php
				endforeach;
				?>
			</tbody>
		</table>
	</div>
<?php
include 'inc/footer.php';
?>