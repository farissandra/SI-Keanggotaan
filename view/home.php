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
			<div class="moneymaker-judul">
			<h3>More Information</h3><br>
			</div>

			<div class="socmed"><a href="https://www.facebook.com/Kopma-dr-Angka-ITS-335534323180404/"><img src="<?php echo base_url()?>assets/images/fb.png" style="height: 30px"></a></div>

			<div class="socmed"><a href="https://www.instagram.com/kopma_its/"><img src="<?php echo base_url()?>assets/images/ig.png" style="height: 30px"></a></div>

			<div class="socmed"><a href="https://twitter.com/kopma_its"><img src="<?php echo base_url()?>assets/images/twitter.png" style="height: 30px"></a></div>

			<div class="socmed"><a href="http://line.me"><img src="<?php echo base_url()?>assets/images/line.png" style="height: 30px"></a></div>
		
		<div class="moneymaker-kontak" style="text-align: left">
			<h6><img src="<?php echo base_url()?>assets/images/loc.png" style="height: 20px; padding-right:  15px">Gedung SCC lt.1 Kampus ITS Sukolilo</h6>
			<h6><img src="<?php echo base_url()?>assets/images/tel.png" style="height: 20px; padding-right: 15px">0857 2312 1231</h6>
		</div>
		
		</div>

		</div>
	</div>


		</div>
	</div>
<script type="text/javascript" src="<?php echo base_url(''); ?>assets/js/jquery.js"></script>
</body>
