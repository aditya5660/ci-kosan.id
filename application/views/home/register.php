
<!-- Contact section start -->
<div class="contact-section overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <!-- details -->
                    <div class="details">
                        <!-- Logo-->
                        <a href="<?= base_url()?>">
                        <img src="<?= base_url('assets/img/logos/black-logo.png');?>" class="cm-logo" alt="black-logo">
                        </a>
                        <!-- Name -->
                        <h3>Daftar Sebagai Pengguna</h3>
                        <!-- Form start-->
                        <form action="" method="POST">
                            
                            <div class="form-group">
                                <input type="text" name="namaDepan" class="input-text" placeholder="Nama Depan">
                            </div>
                            <div class="form-group">
                                <input type="text" name="namaBelakang" class="input-text" placeholder="Nama Belakang">
                            </div>
                            <div class="form-group">
                                <input type="text" name="noHp" class="input-text" placeholder="No Hp">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="input-text" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="input-text" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <select class="form-control input-text" id="level" name ="level">
                                    <option value="1" class="input-text">Daftar Sebagai</option>
                                    <option value="1" class="input-text">Pencari Kost</option>
                                    <option value="0" class="input-text">Pemilik Kost</option>
                                </select>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn-md button-theme btn-block">Daftar</button>
                            </div>
                        </form>
                        <!-- Social List -->
                        
                        
                        
                    </div>
                    <!-- Footer -->
                    <div class="footer">
                        <span>Already a member? <a href="<?php echo base_url('login');?>">Login here</a></span>
                    </div>
                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>
<!-- Contact section end -->
