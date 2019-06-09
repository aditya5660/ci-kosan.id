            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5">
                    <div class="dashboard-content">
                        <div class="dashboard-header clearfix">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"><h4>My Properties</h4></div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="breadcrumb-nav">
                                        <ul>
                                            <li>
                                                <a href="#">Index</a>
                                            </li>
                                            <li>
                                                <a href="#">Dashboard</a>
                                            </li>
                                            <li class="active">My Properties</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($this->session->flashdata('success')): ?>
                            <div class="alert alert-success alert-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?= $this->session->flashdata('success'); ?>
                            </div>
                        <?php endif; ?>
                        
                        
                        <div class="dashboard-list">
                            <h3>My Properties List</h3>
                            <?php foreach ($kosts as $kost): ?>
                            <table class="manage-table">
                                <tbody>
                                <tr class="responsive-table">
                                    <td class="listing-photoo">
                                        <img src="<?= base_url('uploadimg/kost/'.$kost->image);?> " alt="<?= $kost->namaKost?>" class="img-fluid">
                                    </td>
                                    <td class="title-container">
                                        <h2><a href="<?= base_url('home/detailkos/'.$kost->idKost) ?>"><?= $kost->namaKost?></a></h2>
                                        <h5 class="d-none d-xl-block d-lg-block d-md-block"><i class="flaticon-pin"></i> <?= $kost->alamat?> </h5>
                                        <h6 class="table-property-price">Rp <?= $kost->hargaBulanan?>/ Bulan</h6> <h6 class="table-property-price">Rp <?= $kost->hargaTahunan?>/ Tahun</h6>
                                    </td>
                                    <td class="expire-date">4.01.2018</td>
                                    <td class="action">
                                        <a href="<?= base_url('owner/editkos/'.$kost->idKost) ?>"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="<?= site_url('owner/delete/'.$kost->idKost);?>" class="delete"><i class="fa fa-remove"></i> Delete</a>
                                    </td>
                                </tr>
                                </tbody>
                                
                            </table>
                            <?php endforeach ?>
                            </div>    
                        </div>      
                    <p class="sub-banner-2 text-center">© 2018 Codeinaja. Trademarks and brands are the property of their respective owners.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-sm button-theme">Search</button>
    </form>
</div>

