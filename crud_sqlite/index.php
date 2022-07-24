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
	<title>CRUD system using slite</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form action="insert.php" method="POST">
					  <div class="form-group">
					    <label for="name">Name</label>
					    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
					  </div>
					  <div class="form-group">
					    <label for="email">E-mail</label>
					    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
					  </div>
					  <div class="form-group">
					    <label for="password">Password</label>
					    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
					  </div>
					  <div class="form-group">
					    <input type="submit" name="submit" value="Submit" class="form-control btn-primary">
					  </div>
				</form>
			</div>
		</div>
	</div>
	<div class="container">
		<table class="table table-bordered">
			<tr>
				<th>SL</th>
				<th>Name</th>
				<th>E-mail</th>
				<th>Password</th>
				<th>Action</th>
			</tr>
			<?php
			$sql = "SELECT * FROM students";
			$data = $con->query($sql);
			$sl=0;
			while ($row = $data->fetchArray(SQLITE3_ASSOC)) {
			?>
			<tr>
				<td><?php echo ++$sl;?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['password'];?></td>
				<td>
					<a href="load_data.php?id=<?php echo $row['id']?>" class="btn btn-primary">Edit</a>
					<a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger" onclick="return confirm('Are your sure??')">Delete</a>
				</td>
			</tr>
		<?php } ?>
		</table>
	</div>
</body>
</html>