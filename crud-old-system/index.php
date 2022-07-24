<?php 
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<title>CRUD Old  system</title>
</head>
<body>
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<form action="insert_core.php" method="POST">
				<div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" name="name" class="form-control" id="name" placeholder="name">
			  </div>
			  <div class="form-group">
			    <label for="phone">Phone</label>
			    <input type="text" name="phone" class="form-control" id="phone" placeholder="phone">
			  </div>
			  <div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
			  </div>
			   <div class="form-group btn-primary">
			    <input type="submit" name="submit" value="submit" id="submit" class="form-control">
			  </div>
			</form>
		</div>
	</div>
	<div class="container">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Phone</th>
					<th>E-mail</th>
					<th>Password</th>
					<th>Date</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql = "SELECT * FROM old_crud_system ORDER BY id DESC";
					$result = mysqli_query($connect,$sql);;
					if (mysqli_num_rows($result)> 0) {
						while($row = mysqli_fetch_assoc($result)) {
				?>	
					<tr>
						<td><?=$row['id'];?></td>
						<td><?=$row['name'];?></td>
						<td><?=$row['phone'];?></td>
						<td><?=$row['email'];?></td>
						<td><?=$row['password'];?></td>
						<td><?=$row['date'];?></td>
						<td><a href="edit_form.php?id=<?=$row['id'];?>">Edit</a> || <a href="delete_core.php?id=<?=$row['id'];?>" onClick=" return confirm('Are you sure??')">Delete</a></td>
					</tr>
				<?php	
					}
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>