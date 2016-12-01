<!DOCTYPE html>
<html>
<head>
	<title>Anggota Kopma ITS</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styledaftar.css">
	<script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.<?php  ?>">SIM Anggota Kopma ITS</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a href="index.php">Home</a></li>
	      <li><a href="anggotaadmin.php">Data Anggota</a></li>
	      <li class="active"><a href="iuranadmin.php">Data Iuran</a></li>
	      <li><a href="loginpage.php">Login</a></li> <!--Kalau udah login, ganti pake php nya jadi Logout-->
	    </ul>
	  </div>
	</nav>
	 
	<div class="row">
	    <div class="col-xs-1 col-sm-1 col-md-1">
	    	
	    </div>
	    <div class="col-xs-10 col-sm-10 col-md-10">
	    	<form class="pencarian">
			    <div class="form-group">
			      	<input type="text" class="form-control" id="search" placeholder="Search...">
			    </div>
			</form>
			<ul class="pagination">
			  	<li class="active"><a href="#">1</a></li>
			  	<li><a href="#">2</a></li>
			  	<li><a href="#">3</a></li>
			  	<li><a href="#">4</a></li>
			  	<li><a href="#">5</a></li>
			</ul>

	    <table class="table table-striped">
		    <thead>
		      <tr>
		        <th>Nomor</th>
		        <th>Nama</th>
		        <th>NRP</th>
		        <th>Terkahir Bayar</th>
		        <th>Action</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr> <!--Buat php fungsi generate ini-->
		        <td>001</td>
		        <td>Suryo</td>
		        <td>1234567890</td>
		        <td>21 Desember 2012</td>
		        <td>
		        	<a href="#">View</a>
		        	<a href="#">Edit</a>
		        	<a href="#">Delete</a>
		        </td>
		      </tr>
		    </tbody>
		 </table>
		 <a href="anggotaedit.php"><button type="button" class="btn btn-primary">Tambah Anggota</button></a> <!-- Kalau login sebagai user, button ini ilang...display : none; -->
			<ul class="pagination">
			  	<li class="active"><a href="#">1</a></li>
			  	<li><a href="#">2</a></li>
			  	<li><a href="#">3</a></li>
			  	<li><a href="#">4</a></li>
			  	<li><a href="#">5</a></li>
			</ul>
		</div>
	    <div class="col-xs-1 col-sm-1 col-md-1">
	    	
	    </div>
  	</div>
</body>
</html>
