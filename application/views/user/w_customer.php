<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?= base_url('assets/img/logo.png') ?>" alt="" />Adam's Restoran</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                   <img src="<?= base_url($this->session->userdata('gambar'))?>" style="max-width: 100px;">
                    <li class="nav-item">
                        <!-- <button type="button" class="btn nav-link" data-toggle="modal" data-target="#profil">
                            Profil
                        </button> -->
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: transparent;">
                              <?= $this->session->userdata('nama')?>
                            </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="" class="dropdown-item" data-toggle="modal" data-target="#profil">Edit Profil</a>
                                <a href="<?= base_url('c_customer/logout')?>" class="dropdown-item" onclick="return confirm('Apakah anda yakin ingin memesan paket ini?')">Logout</a>
                            </div>
                        </div>
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
                        <input type="text" class="form-control form-control-user" name="nama" value="<?= $this->session->userdata('nama')?>" readonly require>
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label for="email">Email</label>
                        <input type="email" class="form-control form-control-user" name="email" value="<?= $this->session->userdata('email')?>" readonly require>
                    </div>
                    <div class="col-sm-4">
                        <label for="telepon">Telepon</label>
                        <input type="number" class="form-control form-control-user" name="telepon" value="<?= $this->session->userdata('no_telp')?>" readonly require>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label for="selectMeja">Meja</label>
                        <select class="form-control" id="selectMeja" name="meja">
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
                            <select class="form-control" name="bayar">
                                <option value=""></option>
                                <option value="1">Transfer</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label for="waktu">Waktu</label>
                        <input type="text" class="form-control form-control-user" name="waktu" placeholder="Contoh = 17.00">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Lakukan Reservasi</button>
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

    <!-- Modal Profil Customer-->
    <div class="modal fade" id="profil" tabindex="-1" role="dialog" aria-labelledby="registerLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerLabel">Edit Profil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('c_customer/edit');?>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="nama" placeholder="Masukan Nama" value="<?= $this->session->userdata('nama')?>" require>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" name="email" placeholder="Email" value="<?= $this->session->userdata('email')?>" require>
                        </div>
                        <div class=" form-group">
                            <input type="number" class="form-control form-control-user" name="no_telp" placeholder="No Telp" value="<?= $this->session->userdata('no_telp')?>" require>
                        </div>
                        <div class=" form-group">
                            <div>
                                <label for="gambarCustomer">Foto</label>
                            </div>
                            <input type="file" id="gambarCustomer" name="gambar">
                        </div>
                        <div class=" form-group">
                            <input type="text" class="form-control form-control-user" name="username" placeholder="Username" value="<?= $this->session->userdata('username')?>" require>
                        </div>
                        <div class=" form-group">
                            <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Edit Profil</button>
                    </form>
                </div>
            </div>
        </div>
    </div>