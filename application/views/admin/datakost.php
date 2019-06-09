            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5">
                    <div class="dashboard-content">
                        <div class="dashboard-header clearfix">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"><h4>Hello , Tom</h4></div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="breadcrumb-nav">
                                        <ul>
                                            <li>
                                                <a href="#">Index</a>
                                            </li>
                                            <li>
                                                <a href="#" class="active">Kost</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                <table class="table table-bordered">
                    <thead class="bg-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama Kost</th>
                        <th>Pemilik</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <?php foreach ($kost as $kost ) : ?>
                    <?php $i = 1 ?> 
                    <tbody>
                    <tr>
                        <th><?= $i ?></th>
                        <td><?= $kost->namaKost?></td>
                        <td>Pemilik</td>
                        <td><?= $kost->alamat?>,<?=$kost->provinsi ?></td></td>
                        <td>
                            <a href="<?= base_url('home/detailkos/'.$kost->idKost) ?>" class="float-left"><i class="fa fa-plus-circle"></i> Detail</a>
                            <a href="<?= base_url('admin/deletekost/'.$kost->idKost) ?>" class="float-right"> Delete <i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    </tbody>
                <?php $i++ ?>
                <?php endforeach ?>
                </table>
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
<!-- Dashbord end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="https://storage.googleapis.com/themevessel-items/neer/index.html#">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-sm button-theme">Search</button>
    </form>
</div>