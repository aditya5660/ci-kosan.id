<div class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-pad">
                <div class="dashboard-nav d-none d-xl-block d-lg-block">
                    <div class="dashboard-inner">
                        <h4>Main</h4>
                        <ul>
                            <li class="<?= $this->uri->segment(2) == 'index' ? 'active': '' ?>"><a href="<?= base_url('user/index');?>"><i class="flaticon-dashboard"></i> Dashboard</a></li>
                            <li class="<?= $this->uri->segment(2) == 'databooking' ? 'active': '' ?>" ><a href="<?= base_url('user/databooking');?>"><i class="flaticon-apartment-1"></i>Booking</a></li>
                            <li class="<?= $this->uri->segment(2) == 'message' ? 'active': '' ?>" ><a href="<?= base_url('user/dataowner');?>"><i class="flaticon-mail"></i>Message</a></li>
                        </ul>
                        <h4>Account</h4>
                        <ul>
                            <li class="<?= $this->uri->segment(2) == 'profile' ? 'active': '' ?>" ><a href="<?= base_url('user/profile');?>"><i class="flaticon-people"></i>My Profile</a></li>
                            <li ><a href="<?= base_url('');?>"><i class="flaticon-logout"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            