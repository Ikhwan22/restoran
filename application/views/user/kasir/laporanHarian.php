<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color:#212529;">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?= base_url('assets/img/logo.png') ?>" alt="" />Adam's Restoran</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('c_kasir/index'); ?>">Pesan Menu</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('c_kasir/laporanHarian'); ?>">Laporan Harian</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('c_kasir/laporanBulanan'); ?>">Laporan Bulanan</a></li>
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
                            </div>
                        </div>
                        <!-- end form pilih pesanan -->

                        <!-- start daftar keranjang pesanan -->
                        <div class="col-lg">
                            <div class="row-lg">
                                <div class="col-lg  bg-white rounded p-3 ml-2 card-shadow">
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
    
    <!-- script js untuk pesanan -->
    <script src="<?= base_url('assets/js/jquery-3.5.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery-ui.min.js'); ?>"></script>
    <!-- end script js untuk pesanan -->

    <script type="text/javascript">
    
    </script>