<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Cari Kost</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Cari Kost</li>
            </ul>
            <br>
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
<!-- Sub Banner end -->

<!-- Properties section body start -->
<div class="properties-section-body content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-left">
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
                                    Rp. <?= $kost->hargaBulanan ?> ,- | <a href="#"><i class="fa fa-calendar"></i> Oct 27, 2018 </a>
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
                    
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                
                <div class="row">
                <?php foreach($search as $kost) : ?>
                
                    <div class="col-lg-6 col-md-6 col-sm-12" >
                        <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="price-box"><span>Rp <?= $kost->hargaBulanan ?> </span> Per bulan</div>
                                <img class="d-block w-100" src="<?= base_url('uploadimg/kost/'.$kost->image);?>" alt="<?= $kost->namaKost;?>">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="<?= base_url('home/detailkos/'.$kost->idKost)?>"><?= $kost->namaKost;?></a>
                            </h1>

                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i><?= $kost->alamat;?>
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
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
                            <a href="#">
                                <i class="flaticon-people"></i> Pak Sabar
                            </a>
                            <a href="" class="float-right">
                               <?= $kost->kabupatenKota ?> , <?= $kost->provinsi ?> <i class="flaticon-pin"></i>
                            </a>
                        </div>
                    </div>

                </div>
                <?php endforeach;?>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- Properties section body end -->
