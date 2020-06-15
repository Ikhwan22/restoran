<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Adam's Restoran</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/') ?>img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="<?= base_url('assets/'); ?>js/fontawesome-all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="<?= base_url('assets/'); ?>css/Montserrat-400-700.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/'); ?>css/Roboto+Slab-400-700.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/'); ?>css/Droid+Serif-400-700-italic.css" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/'); ?>css/styles.css" rel="stylesheet" />
    <script src="<?= base_url('assets/js/jquery-3.5.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap-datepicker.min.css" />
</head>
<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top mb-5" id="mainNav" style="background-color:#212529;">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?= base_url('assets/img/logo.png') ?>" alt="" />Adam's Restoran</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <?php if($this->session->userdata('status') == "customer"):?>
                        <img src="<?= base_url('') ?>gambar/<?= $this->session->userdata('gambar');?>" style="max-width: 100px;">
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
                                    <a href="<?= base_url('auth/logout');?>" class="dropdown-item" onclick="return confirm('Apakah Anda Yakin ingin Logout?')">Logout</a>
                                </div>
                            </div>
                        </li>
                    <?php elseif($this->session->userdata('status') == "kasir"):?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('c_kasir/index'); ?>">Pesan Menu</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('c_kasir/laporanHarian'); ?>">Laporan Harian</a></li>
                        <img src="<?= base_url('') ?>gambar/<?= $this->session->userdata('gambar');?>" style="max-width: 100px;">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: transparent;">
                                <?= $this->session->userdata('nama');?>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="" class="dropdown-item" data-toggle="modal" data-target="#profil">Edit Profil</a>
                                <a href="<?= base_url('auth/logout');?>" class="dropdown-item" onclick="return confirm('Apakah Anda Yakin ingin Logout?')">Logout</a>
                            </div>
                        </div>
                    <?php elseif($this->session->userdata('status') == "admin"):?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('c_admin/tambah_menu'); ?>">Tambah Menu</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('c_admin/tambah_event'); ?>">Tambah Event</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('c_admin/laporan_reservasi'); ?>">Laporan Reservasi</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('c_admin/laporan_bulanan'); ?>">Laporan Bulanan</a></li>
                        <img src="<?= base_url('') ?>gambar/<?= $this->session->userdata('gambar');?>" style="max-width: 100px;">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: transparent;">
                                <?= $this->session->userdata('nama')?>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="" class="dropdown-item" data-toggle="modal" data-target="#profil">Edit Profil</a>
                                <a href="<?= base_url('auth/logout');?>" class="dropdown-item" onclick="return confirm('Apakah Anda Yakin ingin Logout?')">Logout</a>
                            </div>
                        </div>
                    <?php else:?>
                        <li class="nav-item">
                            <button type="button" class="btn nav-link" data-toggle="modal" data-target="#loginCustomer" onclick="judulReservasi()">
                                Reservasi Online
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn nav-link" data-toggle="modal" data-target="#register">
                                Register
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn nav-link" data-toggle="modal" data-target="#loginCustomer" onclick="judulLogin()">
                                Login
                            </button>
                        </li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </nav>    