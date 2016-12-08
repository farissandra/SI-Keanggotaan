<!--<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="" rel="shortcut icon">
<title><?php echo $title?></title>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/login/login.css" rel="stylesheet">
</head>

<body>

<div class="container" style="margin-top: 5%">

<div class="login">
    <?php
    if($this->session->flashdata('sukses')){
      echo '<p class="warning" style="margin:10px 20px;">'.$this->session->flashdata('sukses').'</p>';
    }
    echo validation_errors('<p class="warning" style="margin:10px 20px;">','</p>');
    ?>
</div>

    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Masuk Ke Halaman Admin</h1>
            <div class="account-wall">
                <img class="profile-img" src="<?php echo base_url(); ?>assets/images/kopma-logo.png"
                    alt="">
      <form class="form-signin" action="<?php echo base_url("Auth/login");?>" method="post">
                  <input type="text" name="username" class="form-control" placeholder="Username" id="username" required autofocus>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                  <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" id="submit" value="login">
                      Masuk</button>
                  <label class="checkbox pull-left">
                      <input type="checkbox" value="remember-me">
                      Remember me
                  </label>
                  </form>
      
            </div>
        </div>
    </div>
</div>
</body>
</html>-->

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title?></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/css/style.css">
	<script src="<?php echo base_url(); ?>assets/css/js/jquery.min.js"></script>
  	<script src="<?php echo base_url(); ?>assets/css/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jarak">

<div class="login">
        <?php
        if($this->session->flashdata('sukses')){
        echo '<p class="warning" style="margin:10px 20px;">'.$this->session->flashdata('sukses').'</p>';
        }
        echo validation_errors('<p class="warning" style="margin:10px 20px;">','</p>');
        ?>
    </div>

  	<div class="row">
	    <div class="col-xs-1 col-sm-3 col-md-4"></div>
	    <div class="col-xs-10 col-sm-6 col-md-4">

        <h3 class="text-center login-title" style="margin-bottom:30px">Masuk Ke Halaman Admin</h3>
	    	<form action="<?php echo base_url("Auth/login");?>" method="POST">
			  <div class="form-group">
			    <label for="username">Username:</label>
			   <input type="text" name="username" class="form-control" placeholder="Username" id="username" required autofocus>
			  </div>
			  <div class="form-group">
			    <label for="password">Password:</label>
			   <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
			  </div>
			  <button type="submit" class="btn btn-default" name="Submit">Login</button>
			</form><br>
	    </div>
	    <div class="col-xs-1 col-sm-3 col-md-4"></div>
  	</div>	
</div>

</body>
</html>


                

