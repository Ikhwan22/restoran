<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?= base_url('assets/img/logo.png') ?>" alt="" />Adam's Restoran</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <button type="button" style="color: blue;" class="btn nav-link" data-toggle="modal" data-target="#profil">
                            <strong>Profil</strong>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Kasir-->
    <section class="page-section mt-5" id="services">
        <div class="container">
            <div class="text-center">
                <h3 class="section-heading text-uppercase">Kasir</h3>
            </div>

            <hr>
            <div class="container text-justify mb-5">
                <div class="row justify-content-center">
                    <!-- start form pilih pesanan -->
                    <div class="col-lg-5">
                        <div class="bg-white rounded p-3 card-shadow">
                        <h4 class="text-uppercase text-center">Pilih Pesanan</h4>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="jenis-pesanan">Jenis Pesanan</label>
                                    <select class="form-control" id="jenis-pesanan" name="jenis-pesanan">
                                        <option value="makanan">Makanan</option>
                                        <option value="minuman">Minuman</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama-pesanan">Nama Pesanan</label>
                                    <select class="form-control" id="nama-pesanan" name="nama-pesanan">
                                        <option value="">Nasi Goreng</option>
                                        <option value="">Ayam Goreng</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="harga-satuan">Harga Satuan</label>
                                    <input type="text" class="form-control" id="harga-satuan" name="harga-satuan" value="Rp. 20.000,00-" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah-pesan">Jumlah Pesan</label>
                                    <input type="number" class="form-control" id="jumlah-pesan" name="jumlah-pesan" min="1" value="1" required>
                                </div>
                                <div class="form-group">
                                    <label for="total-harga">Total Harga</label>
                                    <input type="text" class="form-control" id="total-harga" name="total-harga" value="Rp. 20.000,00-" readonly>
                                </div>

                                <div class="mt-5 tombol">
                                    <button class="btn btn-success btn-block">
                                        Add to Cart
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end form pilih pesanan -->

                    <!-- start daftar keranjang pesanan -->
                    <div class="col-lg">
                        <div class="row-lg">
                            <div class="col-lg  bg-white rounded p-3 ml-2 card-shadow">
                                <h3>Shopping Cart</h3>
                                <div class="table-responsive">

                                    <table id="table" class="table table-bordered table-hover table-stripped">
                                        <thead>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>Nama Pesanan</th>
                                                <th>Jumlah Pesanan</th>
                                                <th>Harga Pesanan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="daftar-pesanan">
                                            <tr>
                                                <th>1</th>
                                                <td>Nasi Goreng</td>
                                                <td>1</td>
                                                <td>20000</td>
                                                <td>
                                                    <button class="btn btn-danger">
                                                    <span class="fas fa-trash"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>

                                <div class="mt-5 tombol">
                                    <button class="btn btn-success btn-block">
                                    <span class="fas fa-shopping-cart"></span>
                                        Checkout
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end daftar keranjang pesanan -->
                </div>
            </div>

        </div>
    </section>

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left"><strong>Email : kelompok1@gmail.com</strong></div>
                <div class="col-lg-4 my-3 my-lg-0"><strong>Copyright © Your Website 2020</strong></div>
                <div class="col-lg-4 text-lg-right"><strong>Contact : 089364826482</strong></div>
            </div>
        </div>
    </footer>

    <!-- Modal Profil -->
    <div class="modal fade" id="profil" tabindex="-1" role="dialog" aria-labelledby="profilLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="profilLabel">Profil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="user" method="post" action="">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control form-control-user" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control form-control-user" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input type="text" class="form-control form-control-user" id="telepon" name="telepon">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control form-control-user" id="foto" name="foto">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control form-control-user" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control form-control-user" id="password" name="password">
                        </div>

                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Simpan
                        </button>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-dismiss="modal" data-target="#login">Logout</button>
                </div>
            </div>
        </div>
    </div>