<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?= base_url('assets/img/logo.png') ?>" alt="" />Adam's Restoran</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: blue;" href="<?= base_url('c_admin/tambah_menu'); ?>"><strong>Tambah Menu</strong></a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: blue;" href="<?= base_url('c_admin/tambah_event'); ?>"><strong>Tambah Event</strong></a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: blue;" href="<?= base_url('c_admin/laporan_reservasi'); ?>"><strong>Laporan Reservasi</strong></a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color: blue;" href="<?= base_url('c_admin/laporan_bulanan'); ?>"><strong>Laporan Bulanan</strong></a></li>
                    <li class="nav-item">
                        <button type="button" class="btn nav-link" style="color: blue;" data-toggle="modal" data-target="#profil">
                            <strong>Profil</strong>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <form action="">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="nama">Nama Event</label>
                        <input type="text" class="form-control form-control-user" id="nama" name="nama">
                    </div>
                    <div class="col-sm-6">
                        <label for="harga">Potongan Harga</label>
                        <input type="text" class="form-control form-control-user" id="harga" name="harga">
                    </div>
                </div>
            </form>

            <center>
                <button type="submit" class="btn btn-primary btn-user btn-block col-sm-2">
                    Simpan
                </button>
            </center>

            <br>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Event</th>
                        <th scope="col">Potongan Harga</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

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