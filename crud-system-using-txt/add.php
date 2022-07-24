<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<title>CRUD system using Txt file</title>
</head>
<body>
	<h2 class="text-center">Add Student</h2>
	<hr>
	<div class="container">
		<a href="index.php" class="btn btn-primary">Show Data</a>
		<form action="insert_core.php" method="POST">
		  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
		  </div>
		  <div class="form-group">
		    <label for="email">E-mail</label>
		    <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
		  </div>
		  <div class="form-group">
		    <label for="roll">Roll</label>
		    <input type="text" class="form-control" name="roll" id="roll" placeholder="Enter roll">
		  </div>
		  <button type="submit" name="submit" class="btn btn-lg btn-primary">Submit</button>
		</form>
	</div>

	
</body>
</html>