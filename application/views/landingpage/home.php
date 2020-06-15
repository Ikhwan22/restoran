    <!-- Masthead-->
    <header class="masthead mt-5">
        <div class="container">
            <img src="<?= base_url('assets/img/logo.png') ?>" width="15%" alt="">
            <h3 class="text-uppercase">Selamat Datang di Adam's Restoran</h3>
            <h4 class="text-uppercase">Segera Coba Fitur Reservasi Online</h4>
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
            <?php echo form_open('auth/kritik');?>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control form-control-user" id="nama" name="nama" require>
                    </div>
                    <div class="col-sm-6">
                        <label for="email">Alamat Email</label>
                        <input type="email" class="form-control form-control-user" id="email" name="email" require>
                    </div>
                </div>
                <div class="form-group">
                    <label for="kritik_dan_saran">Kritik dan Saran</label>
                    <textarea class="form-control" rows="3" aria-label="With textarea" name="kritik_saran" require></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Kirim</button>
            </form>
        </div>
    </section>