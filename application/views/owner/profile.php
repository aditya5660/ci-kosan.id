            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5">
                    <div class="dashboard-content">
                        <div class="dashboard-header clearfix">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"><h4>My Profile</h4></div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="breadcrumb-nav">
                                        <ul>
                                            <li>
                                                <a href="#">Index</a>
                                            </li>
                                            <li>
                                                <a href="#>Dashboard</a>
                                            </li>
                                            <li class="active">My Profile</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-list">
                            <h3 class="heading">Profile Details</h3>
                            <div class="dashboard-message contact-2 bdr clearfix">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <!-- Edit profile photo -->
                                        <div class="edit-profile-photo">
                                            <img src="<?= base_url('uploadimg/profile/'.$profile->image) ?>" alt="profile-photo" class="img-fluid">
                                            <div class="change-photo-btn">
                                                <div class="photoUpload">
                                                    <span><i class="fa fa-upload"></i></span>
                                                    <input type="file" class="upload">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9">
                                        <form action="#" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                            <input type="hidden" name="idUser" class="form-control" value="<?= $profile->idUser ?>">
                                            <input type="hidden" name="level" class="form-control" value="0">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group name">
                                                        <label>Nama Depan</label>
                                                        <input type="text" name="namaDepan" class="form-control" value="<?= $profile->namaDepan ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group email">
                                                        <label>Nama Belakang</label>
                                                        <input type="text" name="namaBelakang" class="form-control" value="<?= $profile->namaBelakang ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group subject">
                                                        <label>Ho HP</label>
                                                        <input type="text" name="noHp" class="form-control" value="<?= $profile->noHp ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group number">
                                                        <label>Email</label>
                                                        <input type="email" name="email" class="form-control" value="<?= $profile->email ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="send-btn">
                                                        <button type="submit" class="btn btn-md button-theme">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
=
                        </div>
                    </div>
                    <p class="sub-banner-2 text-center">© 2018 Kosan.id. Trademarks and brands are the property of their respective owners.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashbord end -->
