<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<title>query system using mysqli</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form action="insert_data.php" method="POST">
				  <div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
				  </div>
				  <div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
				  </div>
				  <div class="form-group">
				    <input type="submit" name="submit" class="btn btn-block btn-primary">
				  </div>
				</form>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<table class="table table-bordered">
					<tr>
						<td>SL</td>
						<td>Name</td>
						<td>E-mail</td>
						<td>Password</td>
						<td>Action</td>
					</tr>
					<?php 
					$sql = "SELECT * FROM mysqli";
					$res = $con->query($sql);
					$data = $res->fetch_all(MYSQLI_ASSOC);
					$sl = 0;
					foreach ($data as $value) {
					?>
					<tr>
						<td><?php echo ++$sl;?></td>
						<td><?php echo $value['name'];?></td>
						<td><?php echo $value['email'];?></td>
						<td><?php echo $value['password'];?></td>
						<td> <a href="edit.php?id=<?php echo $value['id']?>" class="btn btn-info">Edit</a> <a onclick="return confirm('Are you sure??')" href="delete_core.php?id=<?php echo $value['id']?>" class="btn btn-danger">Delete</a></td>
					</tr>
				<?php } $con->close(); ?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>