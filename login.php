<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2 style="margin-top: 50px" align="center"><b><a  style="color: #000000;" href="index.php">A L L U R E ' S</a></b></h2>
  <div class="header">
      <h2><b>Login</b></h2>
  </div>
	 
  <form method="post" action="login.php">
      <?php include('errors.php'); ?>

  	<div class="input-group">
        <label><b>Username</b></label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
        <label><b>Password</b></label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>