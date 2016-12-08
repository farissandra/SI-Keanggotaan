
<body>
	<div class="content">
		<h1><?php echo $title; ?></h1>
		<div class="data">
		<table>
			<tr>
				<td width="30%">Foto</td>
				<td><img style="width:200px" src="<?php echo base_url('assets/uploads/files/'.$Student->foto_anggota);?>" />
			</tr></td>
			</tr>
			<tr>
				<td width="30%">Nomor Anggota</td>
				<td><?php echo $Student->na_anggota; ?></td>
			</tr>
			<tr>
				<td valign="top">Name Student</td>
				<td><?php echo $Student->nama_anggota; ?></td>
			</tr>
			<tr>
				<td valign="top">NRP</td>
				<td><?php echo $Student->nrp_anggota; ?></td>
			</tr>
			<tr>
				<td valign="top">Address</td>
				<td><?php echo $Student->alamat_sby; ?></td>
			</tr>
			<tr>
				<td valign="top">Address Asal</td>
				<td><?php echo $Student->alamat_asal; ?></td>
			</tr>
			
			<tr>
				<td valign="top">TTL (dd-mm-yyyy)</td>
				<td><?php echo date('d-m-Y',strtotime($Student->tanggal_lahir)); ?></td>
			</tr>
			<tr>
				<td valign="top">Daftar (dd-mm-yyyy)</td>
				<td><?php echo date('d-m-Y',strtotime($Student->tanggal_terdaftar)); ?></td>
		

		</table>
		</div>
		<br />
		<div class="button-kopma">
			<?php echo $link_back; ?>
		</div>
	</div>
</body>
</html>
