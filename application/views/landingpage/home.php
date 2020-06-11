<body id="page-top">
    <!-- Navigation src -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?= base_url('assets/img/logo.png') ?>" alt="" />Adam's Restoran</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <button type="button" class="btn nav-link" data-toggle="modal" data-target="#loginCustomer">
                            Reservasi Online
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn nav-link" data-toggle="modal" data-target="#register">
                            Register
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn nav-link" data-toggle="modal" data-target="#login">
                            Login
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <img src="<?= base_url('assets/img/logo.png') ?>" width="15%" alt="">
            <h3 class="text-uppercase">Selamat Datang di Adam's Restoran</h3>
            <h4 class="text-uppercase">Segera Coba Fitur Reservasi Online</h4>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h3 class="section-heading text-uppercase">Menu</h3>
                <hr>
            </div>
            <div class="card-deck mb-3 text-center">
                <?php foreach ($makanan as $m1) : ?>
                    <div class="card border-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header">
                            <h5 class="my-0 font-weight-normal "><?= $m1->nama ?></h5>
                        </div>
                        <div class="card-body text-info">
                            <h5 class="card-title font-weight-bolder"><?= $m1->harga ?></h5>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="card-deck mb-3 text-center">
                <?php foreach ($minuman as $m2) : ?>
                    <div class="card border-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header">
                            <h5 class="my-0 font-weight-normal "><?= $m2->nama ?></h5>
                        </div>
                        <div class="card-body text-info">
                            <h5 class="card-title font-weight-bolder"><?= $m2->harga ?></h5>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h3 class="section-heading text-uppercase">LOKASI</h3>
            </div>
            <hr>
            <div class="card-deck mb-3 text-center">
                <?php foreach ($lokasi as $l) : ?>
                    <div class="card border-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header">
                            <h6 class="my-0 font-weight-normal "><?= $l->nama ?></h6>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h3 class="section-heading text-uppercase">KRITIK DAN SARAN</h3>
            </div>
            <hr>
            <form class="user" method="post" action="">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control form-control-user" id="nama" name="nama">
                    </div>
                    <div class="col-sm-6">
                        <label for="telepon">Telepon</label>
                        <input type="text" class="form-control form-control-user" id="telepon" name="telepon">
                    </div>
                </div>
                <div class="form-group">
                    <label for="kritik_dan_saran">Kritik dan Saran</label>
                    <textarea class="form-control" rows="3" aria-label="With textarea"></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Kirim
                </button>

            </form>
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


     <!-- Modal Login Customer-->
     <div class="modal fade" id="loginCustomer" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginLabel">Login Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('auth/loginCustomer');?>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="username" placeholder="Masukan Username" require>
                        </div>
                        <div class=" form-group">
                            <input type="password" class="form-control form-control-user" name="password" placeholder="Password" require>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Masuk Akun</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Register Customer-->
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="registerLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerLabel">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('auth/registerCustomer');?>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="nama" placeholder="Masukan Nama" require>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" name="email" placeholder="Email" require>
                        </div>
                        <div class=" form-group">
                            <input type="number" class="form-control form-control-user" name="no_telp" placeholder="No Telp" require>
                        </div>
                        <div class=" form-group">
                            <div>
                                <label for="gambarCustomer">Foto</label>
                            </div>
                            <input type="file" id="gambarCustomer" name="gambar" require>
                        </div>
                        <div class=" form-group">
                            <input type="text" class="form-control form-control-user" name="username" placeholder="Username" require>
                        </div>
                        <div class=" form-group">
                            <input type="password" class="form-control form-control-user" name="password" placeholder="Password" require>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>