<div class="content">

<div class="admin-prof">
<div>Username Anda : <?php echo ucfirst($this->session->userdata("username")); ?></div>
<div>Action : <?php echo anchor('User/update/','Ganti Password');?> | <?php echo anchor('User/hapus/','Hapus'); ?> </div>
</div>

<div class="row">
<div class="col-md-12">
<div class="admin-oth">

  <?php 
  foreach ($posts as $p) {
    ?>

    <div>ID <?php echo $p->id_user ?></div>
    <div>Username <?php echo $p->username ?></div>
  <?php }?>
</div>
</div>
</div>
</div>
