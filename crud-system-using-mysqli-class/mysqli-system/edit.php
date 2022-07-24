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
				<?php
				if(isset($_GET['id'])){
					$id = $_GET['id'];
					$sql = "SELECT * FROM mysqli WHERE id = '$id'";
					$res = $con->query($sql);
					$count = $res->num_rows;
					if($count>0){
						foreach ($res as $value) {
				?>
				<form action="edit_core.php" method="POST">
				  <div class="form-group">
				    <label for="name">Name</label>
				    <input type="hidden" name="id" value="<?php echo $id;?>">
				    <input type="text" name="name" value="<?php echo $value['name'];?>" class="form-control" id="name">
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" name="email" value="<?php echo $value['email'];?>" class="form-control" id="email" >
				  </div>
				  <div class="form-group">
				    <label for="password">Password</label>
				    <input type="text" name="password" value="<?php echo $value['password'];?>" class="form-control" id="password">
				  </div>
				  <div class="form-group">
				    <input type="submit" name="update" class="btn btn-block btn-primary">
				  </div>
				</form>
				<?php 
						}
					}
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>