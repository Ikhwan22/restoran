    <!-- Services-->
    <section class="page-section  mt-5" id="services">
        <div class="container text-justify mb-5">
            <div class="justify-content-center">
                <center><img src="<?= base_url('assets/img/denah.png') ?>" alt=""></center><br>
            </div>
                <div class="justify-content-center">
                    <div class="bg-white rounded p-3 card-shadow">
                        <div class="form-row">
                            <div class="col-lg-6">
                                <div class="row form-group">
                                    <label class = col for="tanggal-harian">Tanggal Laporan Reservasi </label>
                                    <input type="date" class="col form-control" id="tanggal-harian" name="tanggal-harian">
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="table" class="table table-bordered table-hover table-stripped mb-5">
                                <h3 class="mt-3 mb-3 text-center">Laporan Reservasi pada Tanggal <span id="target-tanggal-pilih">...</span></h3>
                                <hr>
                                <span id="target-peringatan" class="mt-5 mb-5 text-center"></span>
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Telepon</th>
                                        <th>Meja</th>
                                        <th>Bayar</th>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="laporan-harian">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <div class="modal fade" id="modalTolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Penolakan Reservasi</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <form action="">
                  <div class="form-group">
                    <textarea name="alasan_penolakan" id="alasan" class="form-control" rows="4" placeholder="Alasan Penolakan"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary float-right" id="penolakan">Simpan</button>
               </form>
            </div>
          </div>
        </div>
    </div>

    <span id="modal-foto-transfer"></span>

    <script src="<?= base_url('assets/'); ?>js/jquery-3.4.1.js"></script>
    <script>
        var tanggalHarian;
        var val;

        $(document).ready(function(){
            $(document).on('click', '.konfirmasi', function(){
                var konfID = $(this).attr("id");
                $.ajax({
                    url: "<?php echo base_url() ?>c_admin/konfirmasi",
                    method: 'post',
                    data: {konfID: konfID},
                    success: function(data){

                        $('#success').addClass("alert alert-success");
                        $('#success').text("Data deleted successfully");
                    }
                });
                getLaporanByTanggal(tanggalHarian);
            });

            $(document).on('click', '#penolakan', function(){
                var tolakID = $('.ditolak').attr("id");
                var alasan = $('#alasan').val();
                $.ajax({
                    url: "<?php echo base_url() ?>c_admin/insert_tolak",
                    method: 'post',
                    data: {tolakID: tolakID, alasan: alasan},
                    success: function(data){
                        $('#alasan').val("");
                        $('#success').addClass("alert alert-success");
                        $('#success').text("Data deleted successfully");
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
                url: '<?= base_url('c_admin/getLaporanByTanggal'); ?>',
                dataType: 'json',
                success: function(data) {
                    //js ubah format tanggal manual
                    const date = new Date(tanggalHarian);
                    const formattedDate = date.toLocaleDateString('en-GB', {
                    day: 'numeric', month: 'long', year: 'numeric'
                    }).replace(/ /g, ' ');
                    $('#target-tanggal-pilih').html(formattedDate);
                
                    var baris="";
                    if(data.detail.length == 0){
                        baris = '<div class="alert alert-warning alert-dismissible fade show" role="alert">'+
                            '<strong>Tidak ada Laporan Pada Tanggal '+formattedDate+'</strong>'+
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close" >'+
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
            var modal = "";
            for(var i =0; i<data.detail.length; i++){
                var no = i+1;

                var d = new Date(data.detail[i].tanggal);
                var waktu = d.toLocaleDateString('en-GB', {
                day: 'numeric', month: 'long', year: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric'
                }).replace(/ /g, ' ');

                baris += '<tr>'+
                                '<td>'+no+'</td>' +
                                '<td>'+data.detail[i].nama+'</td>' +
                                '<td>'+data.detail[i].email+'</td>' +
                                '<td>'+data.detail[i].telepon+'</td>' +
                                '<td>'+data.detail[i].meja+'</td>' +
                                '<td>'+data.detail[i].bayar+'</td>' +
                                '<td>'+data.detail[i].tanggal+'</td>' +
                                '<td>'+data.detail[i].waktu+'</td>'+
                                '<td><button class="btn btn-info" data-toggle="modal" data-target="#fotoTransfer'+data.detail[i].id+'">Bukti Pembayaran</button></td>';
                        if(data.detail[i].konfirmasi == "0"){
                            baris+='<td><button class="btn btn-success konfirmasi" id="'+data.detail[i].id+'" value="'+data.detail[i].konfirmasi+'">Konfirmasi</button>&nbsp<button class="btn btn-danger ditolak" id="'+data.detail[i].id+'" data-toggle="modal" data-target="#modalTolak">Tolak</button></td>';
                        }else if(data.detail[i].konfirmasi == "1"){
                            baris+='<td><button class="btn btn-success">Terkonfirmasi</button>&nbsp<button class="btn btn-danger ditolak" id="'+data.detail[i].id+'" data-toggle="modal" data-target="#modalTolak">Tolak</button></td>';
                        }else{
                            baris+='<td><button class="btn btn-danger">Ditolak</button>&nbsp<button class="btn btn-success konfirmasi" id="'+data.detail[i].id+'" value="'+data.detail[i].konfirmasi+'">Konfirmasi</button></td>';
                        }
                baris+='</tr>';

                modal += '<div class="modal fade" id="fotoTransfer'+data.detail[i].id+'" tabindex="-1" role="dialog" aria-labelledby="registerLabel" aria-hidden="true">'+
                            '<div class="modal-dialog" role="document">'+
                                '<div class="modal-content">'+
                                    '<div class="modal-header">'+
                                        '<h5 class="modal-title" id="registerLabel">Bukti Pembayaran</h5>'+
                                        '<button type="button" class="close" data-dismiss="modal" aria-label="Close">'+
                                            '<span aria-hidden="true">&times;</span>'+
                                        '</button>'+
                                    '</div>'+
                                    '<div class="modal-body">'+
                                    '<img src="http://localhost/restoran/assets/uploads/transfer/'+data.detail[i].foto_transfer+'" class="rounded" alt="..." style="text-align:center; height: 500px; width: 465px;">'+
                                            '<button type="button" class="btn btn-primary btn-user btn-block">Ok</button>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>';
            }
            $('#laporan-harian').html(baris);
            $('#modal-foto-transfer').html(modal);
        }
    </script>


    