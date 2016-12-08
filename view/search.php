<div class="container">
  <div class="col-md-12" style="text-align: -moz-center;">

<form id="custom-search-input" method="post" action="<?php echo base_url().'AnggotaData/cari/' ?>">
                            <div class="input-group col-md-4">
                                <input type="text" name="cari" class="  search-query form-control" placeholder="Cari Anggota..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="submit" value="search" name="q">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </form>
    
    <table class="table table-hover">
      <thead>
        <tr>
          <th>NA</th>
          <th>Nama</th>
          <th>NRP</th>
           <td><strong>Action</strong></td>
        </tr>
      </thead>
      <tbody>
        <?php
        if (count($ListAnggota) > 0) {
          foreach($ListAnggota as $row)
          {
            echo "<div class=\"letter\">";
            ?>

            <tr>
              <td valign="top"><?php echo $row['na_anggota']; ?></td>
              <td valign="top"><?php echo $row['nama_anggota']; ?></td>
              <td valign="top"><?php echo $row['nrp_anggota']; ?></td>
              <td><a href="<?php echo site_url('AnggotaData/view/'.$row['na_anggota']); ?>">View</a></td>

        <?php
            echo "</div>";
          }
          echo "<tr><td colspan='6'><div style='background:000; float:right;'>".$this->pagination->create_links()."</div></td></tr>";
        } else {
          echo "<tbody><tr><td colspan='8' style='padding:10px; background:#F00; border:none; color:#FFF;'>Hasil pencarian tidak ditemukan.</td></tr></tbody>";
        }
        ?>
      </tbody>
    </table>
    </div>
    </div>
