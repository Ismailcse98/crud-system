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
	<title>CRUD Old  system </title>
</head>
<body>
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<?php 
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$sql = "SELECT * FROM old_crud_system WHERE id='$id'";
					$result = mysqli_query($connect,$sql);
					$row = mysqli_fetch_assoc($result);
			}
			?>
			<form action="update_core.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $id;?>">
				<div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" name="name" class="form-control" id="name" value="<?php echo $row['name']?>">
			  </div>
			  <div class="form-group">
			    <label for="phone">Phone</label>
			    <input type="text" name="phone" class="form-control" id="phone" value="<?php echo $row['phone']?>">
			  </div>
			  <div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" name="email" class="form-control" id="email" value="<?php echo $row['email']?>">
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="text" name="password" class="form-control" id="password" value="<?php echo $row['password']?>">
			  </div>
			   <div class="form-group">
			    <input type="submit" name="update" value="update" id="update" class="form-control">
			  </div>
			</form>
		</div>
	</div>
</body>
</html>