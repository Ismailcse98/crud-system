<?php
include "Database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<title>Mysqli CRUD System using OOP</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form action="insert_core.php" method="POST">
					  <div class="form-group">
					    <label for="name">Name</label>
					    <input type="text" name="name"  class="form-control" placeholder="Name" id="name">
					  </div>
					  <div class="form-group">
					    <label for="email">Email</label>
					    <input type="email" name="email" class="form-control" placeholder="Email" id="email">
					  </div>
					  <div class="form-group">
					    <label for="skill">Skill</label>
					    <input type="text" name="skill" class="form-control" placeholder="Skill" id="skill">
					  </div>
					  <div class="form-group">
					    <input type="submit" name="submit" value="Submit" class=" btn btn-block btn-primary">
					  </div>
					</form>
			</div>
		</div>
	</div>
	<div class="container">
		<table class="table table-bordered">
			<tr>
				<th>Sl</th>
				<th>Name</th>
				<th>E-mail</th>
				<th>Skill</th>
				<th>Action</th>
			</tr>
<?php 
$db = new Database();
$sql = "SELECT * FROM crud_mysqli";
$result = $db->Select($sql);
if($result){
	$sl = 0;
	while ($row = $result->fetch_assoc()) {
?>
			<tr>
				<td><?php echo ++$sl;?></td>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['skill']?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id']?>">Edit</a> ||
					<a href="delete.php?id=<?php echo $row['id']?>">Delete</a>
				</td>
			</tr>
<?php  } } ?>
		</table>
	</div>
</body>
</html>