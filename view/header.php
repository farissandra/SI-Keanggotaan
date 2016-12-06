<!-- Start Header -->
	
    <!-- Start Nav -->

    <nav class="navbar navbar-all">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#important-id-for-collapsing" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar" style="background-color:black"></span>
                <span class="icon-bar" style="background-color:black"></span>
                <span class="icon-bar" style="background-color:black"></span>
            </button>
            <div class="logo-header">
                <li style="list-style-type: none; background-color: #e6e6e6; margin: 0px; padding: 5px;"><img style="height: 40px;" src="<?php echo base_url('');?>assets/images/kopma-logo.png"/></li>
            </div>
            <li style="list-style-type: none;"><a href="<?php echo base_url('dasbor');?>">Dashboard</a></li>
        </div>
        
<!--===========================Float left==================================-->      
    <div class="nav-right">     
<!--===========================Float right==================================-->
    <div class="collapse navbar-collapse" id="important-id-for-collapsing">
                <div class="nav navbar-nav">
                    <div class="navbarD">
                    <li style="padding: 14px 16px; color: white;">Selamat datang</li>

                    <li class="dropdown">
                    <a class="dropbtn" href="#" title="Update profil"><?php echo ucfirst($this->session->userdata("username")); ?></a>
                    <div class="dropdown-content">
                      <a href="<?php echo base_url('User/');?>">Lihat Profil</a>
                      <a href="<?php echo base_url('User/update');?>">Ganti Password</a>
                    </div>
                    </li>

                    <li style="background-color: red"><a href="<?php echo base_url('Auth/logout');?>" title="Logout">Logout</a></li>
                    </div>
                    </div>
            </div>

        </div>
    </div>
    </nav>

    <!-- Start Article -->

    <div class="container">