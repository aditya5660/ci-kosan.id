
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Detail Kost</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Detail Kost</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->
<!-- Properties details page start -->
<div class="properties-details-page content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Heading properties 3 start -->
                <div class="heading-properties-3">
                    <h1><?= $kost->namaKost; ?></h1>
                    <div class="mb-30"><span class="property-price">Rp <?= $kost->hargaBulanan?> / Bulan</span> <span class="rent">ADA KAMAR</span> <span class="location"><i class="flaticon-pin"></i><?= $kost->alamat?>,<?= $kost->kecamatan?>,<?= $kost->kabupatenKota?>,<?= $kost->provinsi?></span></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- main slider carousel items -->
                <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-40">
                    <div class="carousel-inner">
                        <div class="active item carousel-item" data-slide-number="0">
                            <img src="<?= base_url('uploadimg/kost/'.$kost->image ) ?> " class="img-fluid" alt="slider-properties">
                        </div>
                    </div>
                    <!-- main slider carousel nav controls -->
                    <ul class="carousel-indicators smail-properties list-inline nav nav-justified">
                        <li class="list-inline-item active">
                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#propertiesDetailsSlider">
                                <img src="<?= base_url('uploadimg/kost/'.$kost->image ) ?> " class="img-fluid" alt="properties-small">
                            </a>
                        </li>
                    </ul>
                    <!-- main slider carousel items -->
                </div>
                <!-- Properties description start -->
                <div class="properties-description mb-40">
                    <h3 class="heading-2">
                        Description
                    </h3>
                    <p>
                        <ul class="amenities">
                            <li>Tipe Kost   = <?= $kost->tipeKost?></li>
                            <li>Ukuran Kamar  = <?= $kost->ukuranKamar?></li>
                            <li>Harga Bulanan  = Rp <?= $kost->hargaBulanan?> ,-</li>
                            <li>Harga Tahunan  = Rp <?= $kost->hargaTahunan?> ,-</li>
                            <li>Jam Kunjung  = <?= $kost->jamKunjung?></li>
                        </ul>
                    </p>
                    <p><?= $kost->deskripsi ?></p>
                </div>
                <!-- Properties amenities start -->
                <div class="properties-amenities mb-40">
                    <h3 class="heading-2">
                        Features
                    </h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <ul class="amenities">
                            <?php $fasilitas = explode('//', $kost->fasilitas); ?>
                            <?php foreach ($fasilitas as $fasilitas ): ?>
                                <li><i class="fa fa-check"></i><?= $fasilitas?></li>
                            <?php endforeach ?>
                            </ul>   
                        </div>
                    </div>
                </div>
                <!-- Location start -->
                <div class="location mb-50">
                    <div class="map">
                        <h3 class="heading-2">Lokasi Kos</h3>
                        <div id="map" class="contact-map"></div>
                    </div>
                </div>
                <!-- contact -->
                <div class="col-lg-12">
                    <div class="send-btn">
                        <a class="btn btn-md btn-primary" href="<?= base_url('user/booking/'.$kost->idKost)?>">Booking Kost</a>
                    </div>
                </div>
                <br>
                <br>
                <!-- Similar Properties start -->
                <h3 class="heading-2">Rekomendasi Kost</h3>
                <div class="row similar-properties">
                    <?php foreach(array_slice($kostall, 0, 2) as $kost ): ?>
                    <div class="col-md-6">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="<?=  base_url('home/detailkos/'.$kost->idKost)  ?>" class="property-img">
                                    <div class="price-box"><span>Rp 500 ribu</span> Per bulan</div>
                                    <img class="d-block w-100" src="<?=  base_url('uploadimg/kost/'.$kost->image)  ?>" alt="properties">
                                </a>
                            </div>
                            <div class="detail">
                                <h1 class="title"><a href="<?=  base_url('home/detailkos/'.$kost->idKost)  ?>"><?= $kost->namaKost ?></a></h1>
                                <div class="location">
                                    <a href="<?=  base_url('home/detailkos/'.$kost->idKost)  ?>">
                                        <i class="flaticon-pin"></i><?= $kost->alamat ?>
                                    </a>
                                </div>
                            </div>
                            <ul class="facilities-list clearfix">
                            <?php $fasilitas = explode('//', $kost->fasilitas); ?>
                            <?php foreach ($fasilitas as $fasilitas ): ?>
                                <li><i class="<?php if($fasilitas=='Wifi'){echo "fa fa-wifi";} ?>"></i></li>
                                <li><i class="<?php if($fasilitas=='AC'){echo "fa fa-asterisk";} ?>"></i></li>
                                <li><i class="<?php if($fasilitas=='TV'){echo "fa fa-tv";} ?>"></i></li>
                                <li><i class="<?php if($fasilitas=='Kamar Mandi Luar'){echo "fa fa-shower";} ?>"></i></li>
                                <li><i class="<?php if($fasilitas=='Kasur'){echo "fa fa-bed";} ?>"></i></li>
                                <li><i class="<?php if($fasilitas=='Kamar Mandi Dalam'){echo "fa fa-bath";} ?>"></i></li>
                                <li><i class="<?php if($fasilitas=='Free Listrik'){echo "fa fa-plug";} ?>"></i></li>
                            <?php endforeach ?>
                            </ul>
                            <div class="footer">
                                <a href="#">
                                    <i class="flaticon-people"></i> Pak Sabar
                                </a>
                                <a href="" class="float-right">
                                    <?= $kost->kabupatenKota ?> , <?= $kost->provinsi ?> <i class="flaticon-pin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
                    <!-- Recent properties start -->
                    <div class="widget recent-properties">
                        <h3 class="sidebar-title">Kost Terbaru</h3>
                        <div class="s-border"></div>
                        <?php foreach(array_slice($kostall, 0, 3) as $kost ): ?>
                        <div class="media mb-4">
                            <a class="pr-3" href="<?= base_url('home/detailkos/'.$kost->idKost)?> ">
                                <img class="media-object" src="<?= base_url('uploadimg/kost/'.$kost->image) ?> " alt="Img <?= $kost->namaKost ?>">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="<?= base_url('home/detailkos/'.$kost->idKost)?> "><?= $kost->namaKost ?></a>
                                </h5>
                                <div class="listing-post-meta">
                                    Rp. <?= $kost->hargaBulanan ?> | <a href="#"><i class="fa fa-calendar"></i> Oct 27, 2018 </a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                    <!-- Posts by category Start -->
                    <div class="posts-by-category widget">
                        <h3 class="sidebar-title">Category</h3>
                        <div class="s-border"></div>
                        <ul class="list-unstyled list-cat">
                            <li><a href="<?= base_url('home/search?tipekost=Kost+Putra'); ?>">Kost Putra<span>(45)</span></a></li>
                            <li><a href="<?= base_url('home/search?tipekost=Kost+Putri'); ?>">Kost Putri <span>(21)</span> </a></li>
                            <li><a href="<?= base_url('home/search?tipekost=Kost+Campur'); ?>">Kost Campur <span>(23)</span></a></li>
                            <li><a href="<?= base_url('home/search?tipekost=Kost+Pasutri'); ?>">Kost Pasutri <span>(19)</span></a></li>
                        </ul>
                    </div>
                    <!-- Social links start -->
                    <div class="widget social-links">
                        <h3 class="sidebar-title">Social Links</h3>
                        <div class="s-border"></div>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="pinterest-bg"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                    <!-- Our agent sidebar start -->
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties details page end -->
