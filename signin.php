<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-in Page </title>
  <link rel="stylesheet" type="text/css" href="signin.css">
  
</head>
<body>
  <div class="header">
  	<h2>Sign-in</h2>
  </div>
	
  <form method="post" action="signin.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text"  name="username"  value="  <?php echo $username; ?>">
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
  	  <button type="submit" class="btn" name="reg_user">Sign-in</button>
  	</div>
  	<p>
  		Already having account? <a href="loginpage.php">Login Here</a>
  	</p>
  </form>
</body>
</html>