            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5 dashboard-content">
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"><h4>Edit Kost</h4></div>
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
                        <form action="<?php base_url('owner/editkos'); ?>" method="post" enctype="multipart/form-data">
                            <h4 class="bg-grea-3">Detail Kost</h4>
                            <div class="search-contents-sidebar">
                                <div class="row pad-20">
                                <input type="hidden" name="idKost" value="<?php echo $kost->idKost ?>" >  
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Nama Kost</label>
                                            <input type="text" class="input-text" name="namaKost" placeholder="Nama Kost" value="<?= $kost->namaKost; ?>"  >
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Tipe Kost</label>
                                            <select class="selectpicker search-fields" name="tipeKost" value="<?= $kost->tipeKost; ?>"  >
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
                                            <input type="text" class="input-text" name="ukuranKamar" placeholder="m2" value="<?= $kost->ukuranKamar; ?> "  >
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Harga Bulanan</label>
                                            <input type="text" class="input-text" name="hargaBulanan" placeholder="Rp" value=" <?= $kost->hargaBulanan; ?>" >
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Harga Tahunan</label>
                                            <input type="text" class="input-text" name="hargaTahunan" placeholder="Rp" value="<?= $kost->hargaTahunan; ?> " >
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                            <label>Jam Kunjung</label>
                                            <select class="selectpicker search-fields" name="jamKunjung" value="<?= $kost->jamKunjung; ?>" >
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
                                        <input type="text" class="input-text" name="alamat"  placeholder="Alamat" value="<?= $kost->alamat; ?>" >
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <input type="text" class="input-text" name="kecamatan"  placeholder="Kecamatan" value="<?= $kost->kecamatan; ?>" >
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Kabupaten Kota</label>
                                        <input type="text" class="input-text" name="kabupatenKota"  placeholder="Kabupaten Kota" value="<?= $kost->kabupatenKota; ?>" >
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <input type="text" class="input-text" name="provinsi"  placeholder="Provinsi" value="<?= $kost->provinsi; ?>" >
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Kode Pos</label>
                                        <input type="text" class="input-text" name="kodepos"  placeholder="Kode Pos" value="<?= $kost->kodepos; ?>" >
                                    </div>
                                </div>
                                
                            </div>
                            <h4 class="bg-grea-3">Features (optional)</h4>
                            <div class="row pad-20">

                                <?php foreach ($fasilitas as $fasilitas ) : ?>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="checkbox checkbox-theme checkbox-circle">
                                        <input id="<?= $fasilitas->idfasilitas;?>" name="fasilitas[]" type="checkbox" <?php in_array($fasilitas->NamaFasilitas, $chxfasilitas) ? print "checked" : ""; ?> value="<?= $fasilitas->NamaFasilitas;?>" >
                                        <label for="<?= $fasilitas->idfasilitas;?>"><?= $fasilitas->NamaFasilitas;?></label>
                                    </div>
                                </div>
                                <?php endforeach ?>
                            </div>
                            <h4 class="bg-grea-3">Deskripsi</h4>
                            <div class="row pad-20">
                                <div class="col-lg-12">
                                    <textarea class="input-text" name="deskripsi" placeholder="Detailed Information"><?= $kost->deskripsi; ?></textarea>
                                </div>
                            </div>
                            
                            <h4 class="bg-grea-3">Foto Kosan</h4>
                            <div class="row pad-20">
                                <div class="col-lg-4">
                                    <img witdh="50%"  src="<?= base_url('uploadimg/kost/'.$kost->image);?> " alt="<?= $kost->namaKost?>" class="img-fluid">
                                </div>
                                <input type="hidden" name="oldImage" value="<?= $kost->image ?>">
                                <div class="col-lg-4">
                                    <input class="form-control-file <?php echo form_error('price') ? 'is-invalid':'' ?>" type="file" name="image" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('image') ?>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <h4 class="bg-grea-3">Contact Details</h4>
                            <div class="row pad-20">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="input-text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="input-text" name="Email" placeholder="email">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>No HP ( WA ) </label>
                                        <input type="text" class="input-text" name="phone"  placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <input class="btn btn-md button-theme" type="submit" name="btn" value="Simpan Kosan" />
                                    
                                </div>
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

