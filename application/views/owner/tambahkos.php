            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5 dashboard-content">
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"><h4>Tambah Kost</h4></div>
                            <div class="col-sm-12 col-md-6">
                                <div class="breadcrumb-nav">
                                    <ul>
                                        <li>
                                            <a href="#">Index</a>
                                        </li>
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">Tambah Kosan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-address dashboard-list">
                        <form action="<?php base_url('owner/tambahkos') ?>" method="post" enctype="multipart/form-data">
                            <h4 class="bg-grea-3">Detail Kost</h4>
                            <div class="search-contents-sidebar">
                                <div class="row pad-20">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Nama Kost</label>
                                            <input type="text" class="input-text" name="namaKost" placeholder="Nama Kost">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Tipe Kost</label>
                                            <select class="selectpicker search-fields" name="tipeKost">
                                                <option value="Kost Putra">Kost Putra</option>
                                                <option value="Kost Putri">Kost Putri</option>
                                                <option value="Kost Pasutri">Kost Pasutri</option>
                                                <option value="Kost Campur">Kost Campur</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Ukuran Kamar</label>
                                            <input type="text" class="input-text" name="ukuranKamar" placeholder="m2">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Harga Bulanan</label>
                                            <input type="text" class="input-text" name="hargaBulanan" placeholder="Rp">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Harga Tahunan</label>
                                            <input type="text" class="input-text" name="hargaTahunan" placeholder="Rp">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                            <label>Jam Kunjung</label>
                                            <select class="selectpicker search-fields" name="jamKunjung">
                                                <option value="Dibatasi">Dibatasi</option>
                                                <option value="Bebas 24Jam">Bebas 24Jam</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            <h4 class="bg-grea-3">Lokasi Kost</h4>
                            <div class="row pad-20">
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="input-text" name="alamat"  placeholder="Alamat">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <input type="text" class="input-text" name="kecamatan"  placeholder="Kecamatan">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Kabupaten Kota</label>
                                        <input type="text" class="input-text" name="kabupatenKota"  placeholder="Kabupaten Kota">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <input type="text" class="input-text" name="provinsi"  placeholder="Provinsi">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Kode Pos</label>
                                        <input type="text" class="input-text" name="kodepos"  placeholder="Kode Pos">
                                    </div>
                                </div>
                            </div>
                            <h4 class="bg-grea-3">Fasilitas (Pptional)</h4>
                            <div class="row pad-20">
                                <?php foreach ($fasilitas as $fasilitas):?>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="checkbox checkbox-theme checkbox-circle">
                                        <input id="<?= $fasilitas->idfasilitas;?>" name="fasilitas[]" type="checkbox" value="<?= $fasilitas->NamaFasilitas;?>">
                                        <label for="<?= $fasilitas->idfasilitas;?>"><?= $fasilitas->NamaFasilitas;?></label>
                                    </div>
                                </div>
                                <?php endforeach ?>
                            </div>
                            <h4 class="bg-grea-3">Deskripsi</h4>
                            <div class="row pad-20">
                                <div class="col-lg-12">
                                    <textarea class="input-text" name="deskripsi" placeholder="Detailed Information"></textarea>
                                </div>
                            </div>
                            <h4 class="bg-grea-3">Foto Kosan</h4>
                            <div class="row pad-20">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="name">Photo</label>
                                    <input class="form-control-file <?php echo form_error('price') ? 'is-invalid':'' ?>" type="file" name="image" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('image') ?>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                    <input class="btn btn-md button-theme" type="submit" name="btn" value="Tambah Kosan" />
                            </div> 
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <p class="copy text-center">© 2018 <a href="#">Codeinaja</a> Trademarks and brands are the property of their respective owners.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard end -->

