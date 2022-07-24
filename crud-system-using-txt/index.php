<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<title>CRUD system using Txt file</title>
</head>
<body>
	<h2 class="text-center">Student Information</h2>
	<hr>
	<div class="container">
		<a href="add.php" class="btn btn-primary">Add stuent</a>
		<table class="table table-stripet table-bordered">
			<thead>
				<tr>
					<th>SL</th>
					<th>Name</th>
					<th>E-mail</th>
					<th>Roll</th>
					<th>Date</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$open = fopen('server.txt', 'r');
				$res = fread($open, filesize('server.txt'));
				$read = explode('@', $res);
				krsort($read);
				foreach ($read as $key => $value) {
					$data = explode('*', $value);
				?>
				<tr>
					<td><?php echo $key + 1;?></td>
					<td><?php echo $data[0];?></td>
					<td><?php echo $data[1];?></td>
					<td><?php echo $data[2];?></td>
					<td><?php echo $data[3];?></td>
					<td>
					<a href="update.php?edit_id=<?php echo $key?>"><button class="btn btn-success btn-sm">Update</button></a>
					<a href="delete_core.php?delete_id=<?php echo $key?>"><button class="btn btn-danger btn-sm">Delete</button></a>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>