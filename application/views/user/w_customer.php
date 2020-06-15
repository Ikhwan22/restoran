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
            <?php echo form_open('c_customer/reservasi');?>
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
                        <input type="number" class="form-control form-control-user" name="no_telp" value="<?= $this->session->userdata('no_telp')?>" readonly require>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                        <label for="selectMeja">Meja</label>
                        <select class="form-control" id="selectMeja" name="meja" require>
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
                        <label for="tanggalPemesanan">Waktu</label>
                        <input id="tanggalPemesanan" type="date" class="form-control form-control-user" name="tanggal" require>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="waktuPemesanan">Waktu</label>
                        <input id="waktuPemesanan" type="time" class="form-control form-control-user" name="waktu" require>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Lakukan Reservasi</button>
            </form>
        </div>
    </section>