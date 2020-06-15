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
                    <h5 class="modal-title" id="loginLabel"><span id="judul-modal-login"></span></h5>
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
                            <input type="password" class="form-control form-control-user" name="password" placeholder="Password" value="<?= $this->session->userdata('password')?>">
                        </div>
                        <?= $this->session->userdata('status');?>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Edit Profil</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="<?= base_url('assets/js/jquery-3.5.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery-ui.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- Third party plugin JS-->
    <script src="<?= base_url('assets/js/jquery.easing.min.js'); ?>"></script>
    <!-- Contact form JS-->
    <script src="<?= base_url('assets/'); ?>mail/jqBootstrapValidation.js"></script>
    <script src="<?= base_url('assets/'); ?>mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('assets/'); ?>js/scripts.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?= base_url('assets/'); ?>js/bootstrap.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.bundle.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
</body>
</html>

<script type="text/javascript">
    function judulReservasi(){
        $('#judul-modal-login').html("Login Reservasi Online");
    }

    function judulLogin(){
        $('#judul-modal-login').html("Login User");
    }
</script>