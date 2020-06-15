    <!-- Masthead-->
    <header class="masthead">

        <div class="container">
            <h2 class="text-uppercase">Segera Coba Fitur</h2>
            <h2 class="text-uppercase" style="color: yellow;">Reservasi Online</h2>
            <h3 class="text-uppercase">Dibawah ini</h3>
            <br>
            <?php foreach ($event as $eve) { ?>
                <h4 class="text-uppercase">Kami Merayakan <?= $eve->nama ?> dengan diskon sebesar <?= $eve->diskon ?>%</h4>
            <?php } ?>
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
            <form id="formReservasi" action="<?= base_url('c_customer/reservasi')?>" method="post">
                <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label for="nama">Nama</label>
                        <input type="text" id="iNama" class="form-control form-control-user" name="nama" value="<?= $this->session->userdata('nama')?>" readonly required>
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label for="email">Email</label>
                        <input type="email" id="iEmail" class="form-control form-control-user" name="email" value="<?= $this->session->userdata('email')?>" readonly required>
                    </div>
                    <div class="col-sm-4">
                        <label for="telepon">Telepon</label>
                        <input type="number" id="iTelepon" class="form-control form-control-user" name="no_telp" value="<?= $this->session->userdata('no_telp')?>" readonly required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label for="selectMeja">Meja</label>
                        <select class="form-control" id="selectMeja" name="meja" required>
                            <option value=""></option>
                            <option value="e1">e1</option>
                            <option value="e2">e2</option>
                            <option value="e3">e3</option>
                            <option value="e4">e4</option>
                            <option value="e5">e5</option>
                            <option value="e6">e6</option>
                            <option value="e7">e7</option>
                            <option value="e8">e8</option>
                            <option value="e9">e9</option>
                            <option value="e10">e10</option>
                            <option value="e11">e11</option>
                            <option value="e12">e12</option>
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
                        <label for="tanggalPemesanan">Tanggal</label>
                        <input id="tanggalPemesanan" id="iTanggal" type="date" class="form-control form-control-user" name="tanggal" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="waktuPemesanan">Waktu</label>
                        <input id="waktuPemesanan" id="iWaktu" type="time" class="form-control form-control-user" name="waktu" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Lakukan Reservasi</button>
            </form>

            <!-- start tabel riwayat reservasi -->
            <div class="text-center mt-5">
                <h3 class="section-heading text-uppercase">Riwayat Reservasi</h3>
            </div>
            <hr>

            <!-- alert transaksi -->
            <?php if($this->session->flashdata('transfer') == true):?>
            <div class="text-center">
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                <?= $this->session->flashdata('transfer'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            </div>
            <?php else:?>
            <?php endif;?>

            <div class="table-responsive mt-5">
                <table id="table" class="table table-bordered table-hover table-stripped mb-5">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Meja</th>
                            <th>Waktu</th>
                            <th>Tanggal</th>
                            <th>Alasan</th>
                            <th>Bukti Transfer</th>
                        </tr>
                    </thead>
                    <tbody id="daftar-pesanan">
                        <?php $i=1;
                        foreach($reservasi as $rvs):?>
                            <tr>
                                <td><?= $i;?></td>
                                <td><?= $rvs->meja;?></td>
                                <td><?= $rvs->waktu;?></td>
                                <td><?= $rvs->tgl_reservasi;?></td>
                                <?php if($rvs->konfirmasi ==1):?>
                                    <td>Reservasi Telah diKonfirmasi</td>
                                    <td><button class="btn btn-info" data-toggle="modal" data-target="#modalUploadTransfer<?= $rvs->id;?>">Upload Bukti Transfer</button></td>
                                <?php elseif($rvs->konfirmasi ==2):?>
                                    <td>Reservasi ditolak karena <?=$rvs->alasan_penolakan;?></td>
                                    <td>Reservasi dibatalkan</td>
                                <?php else:?>
                                    <td>Menunggu Kabar Reservasi</td>
                                    <td>Sedang Menunggu Kabar</td>
                                <?php endif;?>
                            </tr>
                        <?php $i++;
                        endforeach;?>
                    </tbody>

                </table>
            </div>
            <!-- end tabel riwayat reservasi -->
        </div>
    </section>


    <!-- Modal Upload Transfer-->
    <?php foreach($reservasi as $rv):?>
    <div class="modal fade" id="modalUploadTransfer<?= $rv->id;?>" tabindex="-1" role="dialog" aria-labelledby="registerLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerLabel">Upload Bukti Pembayaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('c_customer/uploadBuktiTransfer');?>
                    <input type="text" class="form-control" name="idReservasi" id="idReservasi" value="<?= $rv->id;?>" hidden>
                        <div class="form-group">
                            <label for="meja">Meja Pemesanan</label>
                            <input type="text" class="form-control form-control-user" name="meja" value="<?= $rv->meja;?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal Reservasi</label>
                            <input type="text" class="form-control form-control-user" name="tanggal" value="<?= $rv->tgl_reservasi;?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="waktu">Waktu Reservasi</label>
                            <input type="text" class="form-control form-control-user" name="waktu" value="<?= $rv->waktu;?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="fotoTransfer">Foto Transfer</label>
                            <input type="file" class="form-control form-control-user" name="foto" id="foto" accept="image/png, image/jpeg" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach;?>