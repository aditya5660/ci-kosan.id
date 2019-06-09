<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Blog Details </h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Blog Details</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Blog body start -->
<div class="blog-body content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-left">
                    <!-- Search box -->
                    <div class="widget search-box">
                        <h3 class="sidebar-title">Search</h3>
                        <div class="s-border"></div>
                        <form class="form-inline form-search" method="GET">
                            <div class="form-group">
                                <label class="sr-only" for="textsearch2">Looking for something</label>
                                <input type="text" class="form-control" id="textsearch2" placeholder="Looking for something">
                            </div>
                            <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
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
                                    Rp.<?= $kost->hargaBulanan ?> | <a href="#"><i class="fa fa-calendar"></i> Oct 27, 2018 </a>
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
                    <!-- Social links Start -->
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
                    
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <!-- Blog 1 start -->
                <div class="blog-1 blog-big">
                    <div class="blog-photo">
                        <img src="<?php echo base_url('uploadimg/blog/'.$blog->image);?>" alt="<?= $blog->judulArtikel ?>" class="img-fluid">
                    </div>
                    <div class="detail">
                        <h3>
                            <a href="#"><?= $blog->judulArtikel ?></a>
                        </h3>
                        <p><?= $blog->isiArtikel ?></p>
                        <br>
                        <br>
                        <p><i>Post by Admin </i></p>
                        <p><i><?= $blog->tglArtikel ?></i></p>
                        <br>
                        
                    </div>
                </div>
                
                <!-- Contact 2 start -->
                <div class="contact-2 mb-30">
                    <h3 class="heading-2">Contact Form</h3>
                    <form action="#" method="GET" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group name">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group email">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group subject">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group number">
                                    <input type="text" name="phone" class="form-control" placeholder="Number">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group message">
                                    <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="send-btn">
                                    <button type="submit" class="btn btn-md button-theme">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog body end -->
