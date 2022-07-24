<?php
	include 'config.php';
	$sql = "SELECT * FROM mysqli_ajax ORDER BY id DESC";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>	
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['phone'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['password'];?></td>
			<td><?php echo $row['date'];?></td>
			<td> <button data-toggle='modal' data-target='#myModal' id="editBtn" data-eid="<?php echo $row['id'];?>">Edit</button> <button id="deleteBtn" data-id="<?php echo $row['id'];?>">Delete</button> </td>
		</tr>
<?php	
	}
	}
	else {
		echo "0 results";
	}
?>