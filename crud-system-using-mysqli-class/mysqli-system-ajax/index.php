<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<title>Query system ajax</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h2 id="success" style="color: green;"></h2>
				<form action="" method="POST" onsubmit="return false;">
					<div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" class="form-control" id="name" placeholder="Name">
				  </div>
				  <div class="form-group">
				    <label for="phone">Phone</label>
				    <input type="text" class="form-control" id="phone" placeholder="Phone">
				  </div>
				  <div class="form-group">
				    <label for="email">Email address</label>
				    <input type="email" class="form-control" id="email" placeholder="Email">
				  </div>
				  <div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" class="form-control" id="password" placeholder="Password">
				  </div>
				  <div class="form-group">
				    <input type="submit" name="submit" id="submit" value="Submit" class="form-control" >
				  </div>
				</form>
			</div>
		</div>
	</div>
	<div class="container">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Phone</th>
					<th>E-mail</th>
					<th>Password</th>
					<th>Date</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody id="table-content">
			</tbody>
		</table>

	</div>


	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Update Form</h4>
	      </div>
		      <div class="modal-body" id="modal-form">
		        	
			  </div>
	      </div>
	    </div>
	  </div>
	</div>

	<script src="js/jquery-3.5.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function(){
			$('#submit').on('click',function(){
				var name = $('#name').val();
				var phone = $('#phone').val();
				var email = $('#email').val();
				var password = $('#password').val();
				//Data inserted
				$.ajax({
					url:'insert_core.php',
					type:'POST',
					data:{
						name : name,
						phone : phone,
						email : email,
						password : password
					},
					dataType : "json",
					success:function(res){
						$('#name').val('');
						$('#phone').val('');
						$('#email').val('');
						$('#password').val('');
						var txt = `<tr><td>${res.id}</td><td>${res.name}</td><td>${res.phone}</td><td>${res.email}</td><td>${res.password}</td><td>${res.date}</td><td><button data-toggle='modal' data-target='#myModal' id='editBtn' data-eid='${res.id}'>Edit</button><button id='deleteBtn' data-id='${res.id}'>Delete</button></td></tr>`;
						$('#table-content').prepend(txt);
					}
				});
			});

			//Data view
				$.ajax({
					url: "view_data.php",
					type: "POST",
					success: function(data){
						$('#table-content').html(data);
					}
				});


		});
		//Delete Data
		$(document).on('click','#deleteBtn',function(){
			if(confirm('Are you sure')){
				var deleteId = $(this).data('id');
				var element = this;
				$.ajax({
					url : "delete_core.php",
					type : "POST",
					data : {id : deleteId},
					success : function(res){
						if(res==1){
							$(element).closest('tr').fadeOut();
							// $(element).parent().parent().remove();
						}
					}
				})
			}
		})
		//Load Data
		$(document).on('click','#editBtn',function(){
				var editId = $(this).data('eid');

				$.ajax({
					url : "load_data.php",
					type : "POST",
					data : {id : editId},
					success : function(lode_data){
						$('#modal-form').html(lode_data);
					}
				});
		})
		//Edit Data
		$(document).on('click','#update',function(){
				var uid = $('#uid').val();
				var uname = $('#uname').val();
				var uphone = $('#uphone').val();
				var uemail = $('#uemail').val();
				var upassword = $('#upassword').val();
				$.ajax({
					url:'update_core.php',
					type:'POST',
					data:{
						Upid : uid,
						Upname : uname,
						Upphone : uphone,
						Upemail : uemail,
						Uppassword : upassword
					},
					success:function(res){
						$('#table-content').html(res);
						 // $("#update").attr("data-dismiss", "modal");
					}
				});
			});
	</script>
</body>
</html>