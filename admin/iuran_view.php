
<div id="detail">
<?php foreach ($bayar as $b): ?>
<div>Nomor Anggota : <?php echo $b->na_anggota ?></div>
<!-- Fetching All Details of Selected Student From Database And Showing In a Form -->


<form method="post" action="<?php echo base_url() ."iuran/update"?>">
<label>Bulan pembayaran terakhir :</label>
<input type="text" name="bln_bayar" value="<?php echo $b->bln_bayar; ?>">

<input type="submit" value="update">
</form>
<?php endforeach; ?>
</div>
