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
                                    <a href="#" class="active">Dashboard</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="heading-2">Tables</h3>
            <table class="table table-bordered">
        <thead class="bg-active">
        <tr>
            <th scope="col">No Booking</th>
            <th scope="col">Nama Kost</th>
            <th scope="col">Email Penyewa</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
        </thead>

        <tbody>
        
        <?php foreach ($bookings as $booking) : ?>
        <tr>
        
            <td scope="col"><?= $booking->idBooking ; ?></td>
            <td scope="col"><a href="<?= base_url('home/detailkos/'.$booking->idKost)?>"><?= $booking->namaKost ; ?></a></td> 
            <td scope="col"><?= $booking->email;?></td>
            <td scope="col"></a>
            </td>
            <td scope="col"><a href="<?= base_url('user/delete/'.$booking->idBooking)?>" class="btn btn-xs btn-warning">Konfirmasi</a><a href="<?= base_url('user/delete/'.$booking->idBooking)?>" class="btn btn-xs btn-danger">Hapus</a></td>
        
        </tr>
        <?php endforeach ?>
        </tbody>
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