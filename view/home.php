<div class="mySlides">
	<div class="selebaran">
		<h2>KOPMA dr.ANGKA ITS</br></h2>
	</div>
</div>
<div class="mySlides">
	<div class="selebaran-2">
		<h2>BISNIS - ORGANISASI - KELUARGA</br></h2>
	</div>
</div>
<div class="mySlides">
	<div class="selebaran-3">
		<h2>APA YANG KALIAN TUNGGU?</br></h2>
	</div>
</div>

	<div class="moneymaker">
	<div class="row">
	<!--Sisi Kiri -->
	<div class="col-md-6">
		<h2>UNIT KEGIATAN MAHASISWA</h2><br>
		<h4>MEMILIKI <?php 
		$this->db->select('*');
		$this->db->from('anggota');
		echo $this->db->count_all_results();
		?> ANGGOTA AKTIF</h4>
		</div>
		<!--Sisi Kanan -->
		<div class="col-md-6">
			<h2>Sekretariat :</h2><br>
			<h4>Gedung SCC lt.1 Kampus ITS Sukolilo</h4>
		</div>

		</div>
	</div>
<script type="text/javascript" src="<?php echo base_url(''); ?>assets/js/jquery.js"></script>
</body>
