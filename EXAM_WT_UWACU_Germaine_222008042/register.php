<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Signup</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="container">
  <div class="header">
  </div>

  <form method="post" action="register.php" class="registration-form">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Full Name">
  	</div>
  	<div class="input-group">
  	  <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email">
  	</div>
  	<div class="input-group">
  	  <input type="password" name="password_1" placeholder="Create a password">
  	</div>
  	<div class="input-group">
  	  <input type="password" name="password_2" placeholder="Confirm password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Sign up</button>
  	</div>
  	<p class="signin-link">
  		Already a member? <a href="login.php">Log in</a>
  	</p>
</form>

</body>
</html>
