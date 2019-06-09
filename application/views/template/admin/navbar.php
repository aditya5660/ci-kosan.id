<!-- Main header start -->
<script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
<header class="main-header header-2 fixed-header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo pad-0" href="<?php echo base_url('');?>">
                <img src="img/logos/black-logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto d-lg-none d-xl-none">
                    <li class="nav-item dropdown active">
                        <a class="nav-link"href="<?= base_url('admin/index');?>"> Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link"href="<?= base_url('admin/datakost');?>">Data Kost</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link"href="<?= base_url('admin/dataowner');?>">Data Pemilik Kost</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link"href="<?= base_url('admin/datamember');?>">Data Member</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link"href="<?= base_url('admin/blog');?>">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link"href="<?= base_url('login/logout');?>">Logout</a>
                    </li>
                </ul>
                <div class="navbar-buttons ml-auto d-none d-xl-block d-lg-block">
                    <ul>
                        <li>
                            <div class="dropdown btns">
                                <a class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?= base_url('uploadimg/profile/')?>default.jpg" alt="avatar">
                                    My Account
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item"href="<?= base_url('admin/index');?>"> Dashboard</a>
                                    <a class="dropdown-item"href="<?= base_url('admin/datakost');?>">Data Kost</a>
                                    <a class="dropdown-item"href="<?= base_url('admin/dataowner');?>">Data Pemilik Kost</a>
                                    <a class="dropdown-item"href="<?= base_url('admin/datamember');?>">Data Member</a>
                                    <a class="dropdown-item"href="<?= base_url('admin/blog');?>">Blog</a>
                                    <a class="dropdown-item"href="<?= base_url('login/logout');?>">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->
