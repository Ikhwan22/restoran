<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color:#212529;">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?= base_url('assets/img/logo.png') ?>" alt="" />Adam's Restoran</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('c_kasir/index'); ?>">Pesan Menu</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('c_kasir/laporanHarian'); ?>">Laporan Harian</a></li>
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
                <h3 class="section-heading text-uppercase">Laporan Harian</h3>
            </div>

            <hr>
            <div class="container text-justify mb-5">
                <div class="justify-content-center">
                    <div class="bg-white rounded p-3 card-shadow">
                    <!-- tanggal harian -->
                        <div class="form-row">
                            <div class="col-lg-6">
                                <div class="row form-group">
                                    <label class = col for="tanggal-harian">Tanggal Laporan Harian </label>
                                    <input type="date" class="col form-control" id="tanggal-harian" name="tanggal-harian">
                                </div>
                            </div>
                        </div>
                    <!-- end tanggal harian -->

                    <!-- start tabel list laporan -->
                    <div class="table-responsive">
                        <table id="table" class="table table-bordered table-hover table-stripped mb-5">
                            <h3 class="mt-3 mb-3 text-center">Laporan Harian pada Tanggal <span id="target-tanggal-pilih">...</span></h3>
                            <hr>
                            <span id="target-peringatan" class="mt-5 mb-5 text-center"></span>
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama Pemesan</th>
                                    <th>Meja Pemesan</th>
                                    <th>Total Harga Pesanan</th>
                                    <th>Total Pembayaran Pesanan</th>
                                    <th>Total Kembalian Pesanan</th>
                                    <th>Waktu Pemesanan</th>
                                </tr>
                            </thead>
                            <tbody id="laporan-harian">
                            </tbody>
                        </table>
                    </div>
                    <!-- end tabel list laporan -->

                    <div class="col-lg-6">
                        <!-- total pemesanan harian -->
                        <div class="row form-group">
                            <label class = col for="total-pemesanan">Total Pemesanan Harian</label>
                            <input type="text" class="col form-control" id="total-pemesanan" name="total-pemesanan" value="Rp. 0" readonly>
                        </div>

                        <!-- total pembayaran harian-->
                        <div class="row form-group">
                            <label class = col for="total-pembayaran">Total Pembayaran Harian</label>
                            <input type="text" class="col form-control" id="total-pembayaran" name="total-pembayaran" value="Rp. 0" readonly>
                        </div>

                        <!-- total kembalian-->
                        <div class="row form-group">
                            <label class = col for="total-kembalian">Total Kembalian</label>
                            <input type="text" class="col form-control" id="total-kembalian" name="total-kembalian" value="Rp. 0" readonly>
                        </div>
                    </div>


                    </div>
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
        var tanggalHarian;

        jQuery(function($) {
            //tanggal harian ketika berubah atau diinputkan
            $('#tanggal-harian').on('input', function() {
                tanggalHarian = $('#tanggal-harian').val();
                getLaporanByTanggal(tanggalHarian);
            });
        });

        function getLaporanByTanggal(tanggalHarian){
            $.ajax({
                type: "POST",
                data: 'tanggalHarian=' + tanggalHarian,
                url: '<?= base_url('c_kasir/getLaporanByTanggal'); ?>',
                dataType: 'json',
                success: function(data) {
                    //js ubah format tanggal manual
                    const date = new Date(tanggalHarian);
                    const formattedDate = date.toLocaleDateString('en-GB', {
                    day: 'numeric', month: 'long', year: 'numeric'
                    }).replace(/ /g, ' ');
                    $('#target-tanggal-pilih').html(formattedDate);

                    document.getElementById("total-pemesanan").value="Rp. "+Number(data.total[0].total).toLocaleString();
                    document.getElementById("total-pembayaran").value="Rp. "+Number(data.total[0].bayar).toLocaleString();
                    document.getElementById("total-kembalian").value="Rp. "+Number(data.total[0].kembalian).toLocaleString();
                
                    var baris="";
                    if(data.detail.length == 0){
                        var baris = '<div class="alert alert-warning alert-dismissible fade show" role="alert">'+
                            '<strong>Tidak ada Laporan Pada Tanggal '+formattedDate+'</strong>'+
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                '<span aria-hidden="true">&times;</span>'+
                            '</button>'+
                            '</div>';
                            $('#target-peringatan').html(baris);
                    }else{
                        for(var i =0; i<data.detail.length; i++){
                            var no = i+1;

                            var d = new Date(data.detail[i].tanggal);
                            var waktu = d.toLocaleDateString('en-GB', {
                            day: 'numeric', month: 'long', year: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric'
                            }).replace(/ /g, ' ');

                            baris += '<tr>'+
                                            '<td>'+no+'</td>' +
                                            '<td>'+data.detail[i].nama+'</td>' +
                                            '<td>'+data.detail[i].meja+'</td>' +
                                            '<td> Rp. '+Number(data.detail[i].total).toLocaleString()+'</td>' +
                                            '<td> Rp. '+Number(data.detail[i].bayar).toLocaleString()+'</td>' +
                                            '<td> Rp. '+Number(data.detail[i].kembalian).toLocaleString()+'</td>' +
                                            '<td>'+waktu+'</td>' +
                                    '</tr>';
                        }
                        $('#laporan-harian').html(baris);
                    }
                }
            });
        }
    </script>