<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?= base_url('assets/img/logo.png') ?>" alt="" />Adam's Restoran</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <button type="button" class="btn nav-link" data-toggle="modal" data-target="#profil">
                            Profil
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">

        <div class="container">
            <h2 class="text-uppercase">Segera Coba Fitur</h2>
            <h2 class="text-uppercase" style="color: yellow;">Reservasi Online</h2>
            <h3 class="text-uppercase">Dibawah ini</h3>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h3 class="section-heading text-uppercase">Denah</h3>
                <hr>
                <img src="<?= base_url('assets/img/denah.png') ?>" alt="">
            </div>
            <h6 style="padding-left: 5cm;">a = pintu masuk</h6>
            <h6 style="padding-left: 5cm;">b = toilet</h6>
            <h6 style="padding-left: 5cm;">c = kasir</h6>
            <h6 style="padding-left: 5cm;">d = gudang/ruangan karyawan</h6>
            <h6 style="padding-left: 5cm;">e = meja customer</h6>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h3 class="section-heading text-uppercase">Reservasi Online</h3>
            </div>
            <hr>
            <form class="user" method="post" action="">

                <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control form-control-user" id="nama" name="nama">
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label for="email">Email</label>
                        <input type="text" class="form-control form-control-user" id="email" name="email">
                    </div>
                    <div class="col-sm-4">
                        <label for="telepon">Telepon</label>
                        <input type="text" class="form-control form-control-user" id="telepon" name="telepon">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label for="meja">Meja</label>
                        <select class="form-control" id="meja">
                            <option value=""></option>
                            <option value="1">e1</option>
                            <option value="2">e2</option>
                            <option value="3">e3</option>
                            <option value="4">e4</option>
                            <option value="5">e5</option>
                            <option value="6">e6</option>
                            <option value="7">e7</option>
                            <option value="8">e8</option>
                            <option value="9">e9</option>
                            <option value="10">e10</option>
                            <option value="11">e11</option>
                            <option value="12">e12</option>
                        </select>
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <div class="dropdown">
                            <label for="bayar">Bayar</label>
                            <select class="form-control" id="bayar">
                                <option value=""></option>
                                <option value="1">Transfer</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label for="waktu">Waktu</label>
                        <input type="text" class="form-control form-control-user" id="Waktu" name="Waktu" placeholder="Contoh = 17.00">
                    </div>
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