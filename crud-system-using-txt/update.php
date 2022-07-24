<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<title>Update</title>
</head>
<body>
	<div class="container">
		<?php
		$open = fopen('server.txt', 'r');
		$res = fread($open, filesize('server.txt'));
		$data = explode('@', $res);
		$id = $_GET['edit_id'];
		$fdata = explode('*', $data[$id]);
		?>
		<form action="update_core.php" method="POST">
			<input type="hidden" name="edit_id" value="<?php echo $id;?>">
		  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" name="name" id="name" value="<?php echo $fdata[0];?>">
		  </div>
		  <div class="form-group">
		    <label for="email">E-mail</label>
		    <input type="text" class="form-control" name="email" id="email" value="<?php echo $fdata[1];?>">
		  </div>
		  <div class="form-group">
		    <label for="roll">Roll</label>
		    <input type="text" class="form-control" name="roll" id="roll" value="<?php echo $fdata[2];?>">
		  </div>
		  <button type="submit" name="update" class="btn btn-lg btn-primary">Update</button>
		</form>
	</div>
</body>
</html>