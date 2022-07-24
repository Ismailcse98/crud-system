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
<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "SELECT * FROM crud_mysqli WHERE id ='$id'";
	$db = new Database();
	$result= $db->Select($sql);
	if($result){
		while ($row = $result->fetch_assoc()) {
?>
				<form action="edit_core.php" method="POST">
					<input type="hidden" value="<?php echo $row['id']?>" name="id">
					  <div class="form-group">
					    <label for="name">Name</label>
					    <input type="text" name="name" value="<?php echo $row['name']?>" class="form-control" id="name">
					  </div>
					  <div class="form-group">
					    <label for="email">Email</label>
					    <input type="email" name="email" value="<?php echo $row['email']?>" class="form-control" id="email">
					  </div>
					  <div class="form-group">
					    <label for="skill">Skill</label>
					    <input type="text" name="skill" value="<?php echo $row['skill']?>" class="form-control" id="skill">
					  </div>
					  <div class="form-group">
					    <input type="submit" name="update" value="Update" class=" btn btn-block btn-primary">
					  </div>
					</form>
<?php } } } ?>
			</div>
		</div>
	</div>
</body>
</html>