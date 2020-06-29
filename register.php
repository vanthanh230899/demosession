<?php 
session_start();

include('functions.php') 
?>

<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="public/css/styles.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php" id="form_register">
	<?php echo display_error(); ?>	
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" id="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
		<label>Full Name</label>
		<input type="text" name="fullname" value="<?php echo $fullname; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
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
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
<script>
	$('#form_register').validate({
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