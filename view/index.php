<body>
	<div class="content">
	<div class="container">
	<div class="col-md-12" style="text-align: -moz-center;">
		<h1>Data Anggota</h1>
			<form id="custom-search-input" method="post" action="<?php echo base_url().'AnggotaData/cari' ?>">
                            <div class="input-group col-md-4">
                                <input type="text" name="cari" class="  search-query form-control" placeholder="Cari Anggota..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" value="cari" type="submit">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </form>


		<div class="pagination"><?php echo $pagination; ?></div>
		<div class="data"><?php echo $table; ?></div>
		<div class="pagination"><?php echo $pagination; ?></div>
		
	</div>
	</div>
	</div>
</body>
</html>


						
