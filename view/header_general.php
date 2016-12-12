

<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="<?php echo base_url();?>">SIM Anggota Kopma ITS</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a href="<?php echo base_url();?>">Home</a></li>
	      <li><a href="<?php echo base_url();?>AnggotaData">Data Anggota</a></li>
	      <li><a href="#">Data Iuran</a></li>
		 <li><a href="#" data-toggle="modal" data-target="#myModal">Tentang</a></li>
	    </ul>
        <div class="left-nav">
            <img src="<?php echo base_url();?>assets/images/kopma-logo.png">
        </div>
	  </div>
	</nav>
	
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" style="z-index: 5">
  <div class="modal-dialog" onClick="$('#myModal').modal()">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tentang</h4>
      </div>
      <div class="modal-body">
       <p>SIM Anggota Merupakan Sistem Informasi Anggota KOPMA dr.Angka ITS. Dengan SIM ini diharapkan anggota dapat lebih berpartisipasi aktif dalam KOPMA dr.Angka ITS.</p></br>
    <h4>Apa Yang Bisa Kami Lakukan?</h4><br>
    <p>1. Dengan adanya SIM ini kalian dapat melakukan pengecekan terhadap data diri kalian.</p>
    <p>2. Melakukan pengecekan terhadap status iuran kalian sehingga dapat membantu mengetahui kelunasan iuran bulanan kalian.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>

<script type="text/javascript" src="<?php echo base_url(''); ?>assets/js/jquery.js"></script>
