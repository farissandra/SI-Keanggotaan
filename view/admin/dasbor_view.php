
<div class="dasbor_body">
	<div class="container" style="margin-bottom: 10px">

<div class="col-md-6">
	<div style="">
		<h4>Jumlah Anggota Terdaftar</h4>
	</div>
		<h5>
		<?php 
		$this->db->select('*');
		$this->db->from('anggota');
		echo $this->db->count_all_results();
		?>
		</h5>
</div>

				<!--Navigasi	-->
<div class="col-md-6" style="text-align: center; float: right;">
	<div class="button-kopma" style="color: white">
		<a href="<?php echo site_url('anggota1');?>">Daftar Data Anggota</a>
	</div>
	<div class="button-kopma" style="color: white">
		<a href="<?php echo site_url('iuran');?>">Data Iuran Anggota</a>
	</div>
</div>

	</div>
</div>
