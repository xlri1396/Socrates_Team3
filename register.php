<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>User reigstration system</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div>
		<h2><img src="XLRI_-_Xavier_School_of_Management_Logo.png" width="80" height="100"/><center>SOCRATES</center></h2>
		
	</div>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">
	<!-- display validation error-->
	<?php include('errors.php');?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username;?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" "<?php echo $email;?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2">
		</div>
		<p>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		</p>
	</form>
</body>
</html>
