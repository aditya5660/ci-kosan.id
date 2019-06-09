<div class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-pad">
                <div class="dashboard-nav d-none d-xl-block d-lg-block">
                    <div class="dashboard-inner">
                        <h4>Main</h4>
                        <ul>
                            <li class="<?= $this->uri->segment(2) == 'index' ? 'active': '' ?>"><a href="<?= base_url('admin/index');?>"><i class="flaticon-dashboard"></i> Dashboard</a></li>
                            <li class="<?= $this->uri->segment(2) == 'datakost' ? 'active': '' ?>" ><a href="<?= base_url('admin/datakost');?>"><i class="flaticon-apartment-1"></i>Data Kost</a></li>
                            <li class="<?= $this->uri->segment(2) == 'dataowner' ? 'active': '' ?>" ><a href="<?= base_url('admin/dataowner');?>"><i class="flaticon-people"></i>Data Pemilik Kost</a></li>
                            <li class="<?= $this->uri->segment(2) == 'datamember' ? 'active': '' ?>" ><a href="<?= base_url('admin/datamember');?>"><i class="flaticon-people"></i>Data Member</a></li>
                            <li class="<?= $this->uri->segment(2) == 'blog' ? 'active': '' ?>" ><a href="<?= base_url('admin/blog');?>"><i class="flaticon-plus"></i>Blog</a></li>
                        </ul>
                        <h4>Account</h4>
                        <ul>
                            <li class="<?= $this->uri->segment(2) == 'dataadmin' ? 'active': '' ?>" ><a href="<?= base_url('admin/dataadmin');?>"><i class="flaticon-people"></i>Data Admin</a></li>
                            <li ><a href="<?= base_url('login/logout');?>"><i class="flaticon-logout"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            