

<!-- Banner start -->
<div class="banner" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height active">
                <img class="d-block w-100" src="<?php echo base_url('assets/img/banner/banner-1.jpg');?>" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-center">
                            <h3 class="text-uppercase">Cari Kos-Kosanmu</h3>
                            <p>
                                Dapatkan Info Kost Murah, Kost Harian, Kost Bebas dan Info Kosan lainnya di Kosan.id!
                            </p>
                            <form id="form_search" action="<?= base_url('home/search') ?> " method="get">
                            <div class="inline-search-area ml-auto mr-auto d-none d-xl-block d-lg-block" >
                                <div class="row justify-content-md-center">
                                    <div class="col-xl-8 col-lg-8 col-sm-8 col-6 search-col"> 
                                            <div class="form-group ">
                                                <input class="form-control " id="title" name="title" type="text" placeholder="Ketik nama tempat atau alamat..." required="required">
                                            </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-sm-4 col-6 search-col">
                                        <button type="submit" class="btn button-theme btn-search btn-block">
                                            <i class="fa fa-search"></i><strong>Search</strong>
                                        </button>
                                    </div>
                                    
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container search-options-btn-area">
        <a class="search-options-btn d-lg-none d-xl-none">
            <div class="search-options d-none d-xl-block d-lg-block">Search Options</div>
            <div class="icon"><i class="fa fa-chevron-up"></i></div>
        </a>
    </div>
</div>
<!-- Banner end -->
<!-- Search Section start -->
<div class="search-section search-area bg-grea animated fadeInDown" id="search-style-1">
    <div class="container">
        <div class="search-section-area">
            <div class="search-area-inner">
                <div class="search-contents">
                    <form method="GET">
                        <div class="row">
                            <div class="col-xl-4 col-lg-3 col-sm-6 col-6 search-col">
                                <div class="form-group search-fields">
                                    <input class="form-control" type="search" placeholder="" required="required">
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <button class="search-button">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Section end -->
<!-- Featured Properties start -->
<div class="featured-properties content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Rekomendasi Kost</h1>
            <p>Cari Kos Terbaik Di Kotamu</p>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
            
            <?php foreach ($kost as $kost): ?>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="price-box"><span>Rp <?php echo $kost->hargaBulanan?></span> Per bulan</div>
                                <img class="d-block w-100" src="<?php echo base_url('uploadimg/kost/'.$kost->image);?>" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="<?php echo base_url('home/detailkos/'.$kost->idKost) ?>"><?php echo $kost->namaKost?></a>
                            </h1>

                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"><?php echo $kost->alamat?></i>
                                </a>
                            </div>
                        </div>
                        <?php $fasilitas = explode('//', $kost->fasilitas); ?>
                        
                        <ul class="facilities-list clearfix">
                        <?php foreach ($fasilitas as $fasilitas ) : ?>
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
                            <a href="">
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
            <div class="slick-prev slick-arrow-buton">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="slick-next slick-arrow-buton">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    </div>
</div>
<!-- Featured Properties end -->
<!-- Categories strat -->
<div class="categories content-area-7">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Kota Besar</h1>
            <p>Temukan Rumah Kost Di Kota Favorit mu.</p>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 col-pad">
                <div class="category">
                    <div class="category_bg_box category_long_bg cat-4-bg">
                        <div class="category-overlay">
                            <div class="category-content">
                                <h3 class="category-title">
                                    <a href="<?= base_url('home/search?location=Jakarta')?>">Jakarta</a>
                                </h3>
                                <h4 class="category-subtitle">128 Kost</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-1-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="<?= base_url('home/search?location=Yogyakarta')?>">Jogja</a>
                                        </h3>
                                        <h4 class="category-subtitle">27 Kost</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-2-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="<?= base_url('home/search?location=Semarang')?>">Semarang</a>
                                        </h3>
                                        <h4 class="category-subtitle">98 Kost</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-3-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="<?= base_url('home/search?location=Surabaya')?>">Surabaya</a>
                                        </h3>
                                        <h4 class="category-subtitle">98 Kost</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-5-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="<?= base_url('home/search?location=Bandung')?>">Bandung</a>
                                        </h3>
                                        <h4 class="category-subtitle">98 Kost</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Categories end -->

<!-- Counters strat -->
<div class="counters overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-sale"></i>
                    <h1 class="counter">967</h1>
                    <p>Kost Disewakan</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-rent"></i>
                    <h1 class="counter">1276</h1>
                    <p>Kost Tersewa</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-user"></i>
                    <h1 class="counter">396</h1>
                    <p>Pemilik Kost</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div style=" padding: 40px 0 30px; ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-4 col-xs-12 col-sm-12">
                <div class="heading-primary">
                    <h2>Apakah Anda Pemilik Kosan? </h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                <div class="form-group text-center">
                    <a href="<?= base_url('register')?>" class="search-button">Pasang Iklan Disini</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog start -->
<div class="blog content-area-3">
    <div class="container" style ="padding-top: 40px">
        <!-- Main title -->
        <div class="main-title">
            <h1>Seputar Kamar Kost</h1>
            <p>Temukan Tips dan Trik Ngekost Disini.</p>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <?php foreach ($blog as $blog ) : ?>    
                <div class="slick-slide-item">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="<?php echo base_url('uploadimg/blog/'.$blog->image);?>" alt="blog" class="img-fluid">
                            <div class="date-box">
                            <?php   $myvalue = $blog->tglArtikel;
                                    $datetime = new DateTime($myvalue);
                                    $date = $datetime->format('d');
                                    $month = $datetime->format('m');
                            ?>
                                <span><?= $date ?></span><?= $month ?>
                            </div>
                        </div>
                        <div class="detail">
                            <h3><a href="<?= base_url('blog/blogdetails/'.$blog->idArtikel)?>"><?= $blog->judulArtikel ?> </a></h3>
                            <div class="post-meta">
                                <span><a href="#"><i class="flaticon-people"></i>Admin</a></span>
                            </div>
                            <p><?= substr($blog->isiArtikel,0,150) ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            <div class="slick-prev slick-arrow-buton">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="slick-next slick-arrow-buton">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    </div>
</div>
<!-- Blog end -->

<!-- Partners strat -->
<div class="partners">
    <div class="container">
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 5, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 3}}, {"breakpoint": 768,"settings":{"slidesToShow": 2}}]}'>
                <div class="slick-slide-item"><img src="<?= base_url('assets/img/brand/brand-1.png')?>" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="<?= base_url('assets/img/brand/brand-2.png')?>" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="<?= base_url('assets/img/brand/brand-3.png')?>" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="<?= base_url('assets/img/brand/brand-4.png')?>" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="<?= base_url('assets/img/brand/brand-1.png')?>" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="<?= base_url('assets/img/brand/brand-2.png')?>" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="<?= base_url('assets/img/brand/brand-3.png')?>" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="<?= base_url('assets/img/brand/brand-4.png')?>" alt="brand" class="img-fluid"></div>
            </div>
        </div>
    </div>
</div>
<!-- Partners end -->



