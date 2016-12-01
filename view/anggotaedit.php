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
<div class="atasan">
Data Anggota Personal</div>
	<div class="row">
	    <div class="col-xs-1 col-sm-1 col-md-2">
	    </div>
	    <div class="col-xs-10 col-sm-10 col-md-8">
	    <div class="editdata">
	    	<div class="form-group">
	    	 	<label for="noanggota">Nomor Anggota:</label>
			  	<input type="text" class="form-control" id="noanggota" placeholder="Nomor Anggota">
			</div>
			<div class="form-group">
				<label for="nama">Nama:</label>
			  	<input type="text" class="form-control" id="nama" placeholder="Nama">
			</div>
			<div class="form-group">
				<label for="nrp">NRP:</label>
			  	<input type="text" class="form-control" id="nrp" placeholder="NRP">
			</div>
			<div class="form-group">
				<label for="alamatsby">Alamat di Surabaya:</label>
			  	<input type="text" class="form-control" id="alamatsby" placeholder="Alamat Surabaya">
			</div>
			<div class="form-group">
				<label for="alamatasal">Alamat Asal:</label>
			  	<input type="text" class="form-control" id="alamatasal" placeholder="Alamat Asal">
			</div>
			<div class="form-group">
				<label for="ttl">Tangal Lahir:</label>
			  	<input type="date" class="form-control" id="ttl" placeholder="Tanggal Lahir">
			</div>
			<div class="form-group">
				<label for="tdf">Tangal Daftar:</label>
			  	<input type="date" class="form-control" id="tdf" placeholder="Tanggal Daftar">
			</div>
			<div class="form-group">
				<label for="foto">Foto:</label>
			  	<input type="file" class="form-control" id="foto" placeholder="Browse">
			</div>
			<button type="button" class="btn btn-default">Save</button>
			<button type="button" class="btn btn-primary">Save and Back to List</button>
			<a href="anggotaadmin.php"><button type="button" class="btn btn-danger">Cancel</button></a>
	    </div></div>
	    <div class="col-xs-1 col-sm-1 col-md-2">
	    </div>
  	</div>	
</body>
</html>
