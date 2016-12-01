<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="jarak">
  	<div class="row">
	    <div class="col-xs-1 col-sm-3 col-md-4"></div>
	    <div class="col-xs-10 col-sm-6 col-md-4">
	    	<form action="<?php echo site_url('Auth/login');?>" method="POST"> //menghubungkan ke controller
			  <div class="form-group">
			    <label for="username">Username:</label>
			    <input type="text" class="form-control" id="username" name="Username" placeholder="Username">
			  </div>
			  <div class="form-group">
			    <label for="password">Password:</label>
			    <input type="password" class="form-control" id="password" name="Password" placeholder="Password">
			  </div>
			  <button type="submit" class="btn btn-default" name="Submit">Login</button>
			</form><br>
			<a href="index.php">Back to homepage</a>
	    </div>
	    <div class="col-xs-1 col-sm-3 col-md-4"></div>
  	</div>	
</div>
</body>
</html>
