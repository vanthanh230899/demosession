<?php 
session_start();

include('functions.php');
if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}?>
<!DOCTYPE html>
<html>
<head>
	<title>Create user</title>
	<link rel="stylesheet" type="text/css" href="public/css/styles.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
	<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - Create User</h2>
	</div>
	
	<form method="post" action="admin.php" id="form_edit">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" id="username">
		</div>
		<div class="input-group">
			<label>Full Name</label>
			<input type="text" name="fullname" id="fullname">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" id="email">
		</div>
		<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value="admin">Admin</option>
				<option selected="selected" value="user">User</option>
			</select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn">Create User</button>
		</div>

		<!-- <p><a href="http://localhost/newlogin/home.php">HOME</a></p> -->
		<div class="back" style="text-align: center">
    		<input type="button" value="Back" onClick="javascript:history.go(-1)" />
		</div>
	</form>
</body>
<script>
	$('#form_edit').validate({
		rules: {
			username:{
				required :true,
				rangelength : [6,20],
			},
			fullname:{
				required:true,
				rangelength : [6,20],
			},
			email:{
				required: true,
				email: true
			}
		}
	});
</script>
</html>