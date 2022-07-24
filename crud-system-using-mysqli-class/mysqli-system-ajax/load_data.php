<?php
	include 'config.php';
	$eid = $_POST['id'];
	$sql = "SELECT * FROM mysqli_ajax WHERE id='$eid'";
	$result = $con->query($sql);

		while($row = $result->fetch_assoc()) {
?>	
				
				 <div class="form-group">
				    <label for="name">Name</label>
				    <input type="hidden" id="uid" value="<?php echo $row['id'];?>">
				    <input type="text" value="<?php echo $row['name'];?>" class="form-control" id="uname" placeholder="Name">
				  </div>
				  <div class="form-group">
				    <label for="phone">Phone</label>
				    <input type="text" value="<?php echo $row['phone'];?>" class="form-control" id="uphone" placeholder="Phone">
				  </div>
				  <div class="form-group">
				    <label for="email">Email address</label>
				    <input type="email" value="<?php echo $row['email'];?>" class="form-control" id="uemail" placeholder="Email">
				  </div>
				  <div class="form-group">
				    <label for="password">Password</label>
				    <input type="text" value="<?php echo $row['password'];?>" class="form-control" id="upassword" placeholder="Password">
				  </div>
				  <div class="form-group">
				    <input type="submit" data-dismiss="modal" name="update" id="update" value="Update" class="form-control" >
				 </div>
<?php	
	}
?>