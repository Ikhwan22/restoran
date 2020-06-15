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
                    <div class="row">
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
                        <div class="col-lg-6">
                            <input type="hidden" name="total_disembunyikan" id="total_disembunyikan">
                            <button class="btn btn-success" style="float: right;" id="kirim" name="kirim">Kirim Laporan</button>
                        </div>
                    </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    
    <!-- script js untuk pesanan -->
    <script src="<?= base_url('assets/js/jquery-3.5.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery-ui.min.js'); ?>"></script>
    <!-- end script js untuk pesanan -->

    <script type="text/javascript">
        var tanggalHarian;

        $(document).ready(function(){
            $(document).on('click', '#kirim', function(){
                var tanggal = $('#tanggal-harian').val();
                var total = $('#total_disembunyikan').val();
                $.ajax({
                    url: "<?php echo base_url() ?>c_kasir/insert_laporan",
                    method: 'post',
                    data: {tanggal: tanggal, total: total},
                    success: function(data){
                        alert(data);
                    }
                });
            });   
        });

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
                    
                    $('#total_disembunyikan').val(data.total[0].total);

                    var baris="";
                    if(data.detail.length == 0){
                        baris = '<div class="alert alert-warning alert-dismissible fade show" role="alert">'+
                            '<strong>Tidak ada Laporan Pada Tanggal '+formattedDate+'</strong>'+
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                '<span aria-hidden="true">&times;</span>'+
                            '</button>'+
                            '</div>';
                            $('#target-peringatan').html(baris);
                            loadTabel(data);
                    }else{
                        $('#target-peringatan').html(baris);
                        loadTabel(data);
                    }
                        
                }
            });
        }

        function loadTabel(data){
            var baris="";
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
    </script>