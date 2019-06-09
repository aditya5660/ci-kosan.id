<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Seputar Kosan</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Seputar Kosan</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Blog body start -->
<div class="blog-body content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="row">
                <?php foreach ($blog as $blog) : ?>
                    <div class="col-lg-6 col-md-6">
                        <div class="blog-1">
                            <div class="blog-photo">
                                <img src="<?php echo base_url('uploadimg/blog/'.$blog->image);?>" alt="small-blog" class="img-fluid">
                                <div class="date-box">
                                    <span>14</span>Nov
                                </div>
                            </div>
                            <div class="detail">
                                <h3>
                                    <a href="<?= base_url('blog/blogdetails/'.$blog->idArtikel)?>"><?= $blog->judulArtikel ?> </a>
                                </h3>
                                <div class="post-meta">
                                    <span><a href="#"><i class="flaticon-people"></i>Admin</a></span>
                                </div>
                                <p><?= substr($blog->isiArtikel,0,150) ?></p>
                                <a href="<?= base_url('blog/blogdetails/'.$blog->idArtikel)?>" class="read-more">Read more</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                </div>

                <div class="pagination-box hidden-mb-45 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#">Prev</a>
                            </li>
                            <li class="page-item"><a class="page-link  active" href="blog-columns-2col.html">1</a></li>
                            <li class="page-item"><a class="page-link" href="blog-columns-3col.html">2</a></li>
                            <li class="page-item"><a class="page-link" href="blog-classic-fullwidth.html">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="blog-columns-2col.html">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
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
                    </div>
                    <!-- Posts by category Start -->
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
        </div>
    </div>
</div>
<!-- Blog body end -->