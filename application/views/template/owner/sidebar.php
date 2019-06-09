<div class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-pad">
                <div class="dashboard-nav d-none d-xl-block d-lg-block">
                    <div class="dashboard-inner">
                        <h4>Main</h4>
                        <ul>
                            <li class="<?php echo $this->uri->segment(2) == 'index' ? 'active': '' ?>"><a href="<?php echo base_url('owner/index');?>"><i class="flaticon-dashboard"></i> Dashboard</a></li>
                            <li class="<?= $this->uri->segment(2) == 'databooking' ? 'active': '' ?>" ><a href="<?= base_url('owner/databooking');?>"><i class="flaticon-apartment-1"></i>Booking</a></li>
                            <li class="<?php echo $this->uri->segment(2) == 'daftarkos' ? 'active': '' ?>"><a href="<?php echo base_url('owner/daftarkos');?>"><i class="flaticon-apartment-1"></i>Daftar Kosan</a></li>
                            <li class="<?php echo $this->uri->segment(2) == 'tambahkos' ? 'active': '' ?>"><a href="<?php echo base_url('owner/tambahkos');?>"><i class="flaticon-plus"></i>Tambah Kosan</a></li>
                        </ul>
                        <h4>Account</h4>
                        <ul>
                            <li class="<?php echo $this->uri->segment(2) == 'profile' ? 'active': '' ?>" ><a href="<?php echo base_url('owner/profile');?>"><i class="flaticon-people"></i>My Profile</a></li>
                            <li><a href="<?php echo base_url('login/logout');?>"><i class="flaticon-logout"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>