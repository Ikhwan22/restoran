    <!-- Kasir-->
    <section class="page-section mt-5" id="services">
        <div class="container">
            <div class="text-center">
                <h3 class="section-heading text-uppercase">Kasir</h3>
            </div>

            <hr>
            <div class="container text-justify mb-5">
                <div class="row justify-content-center">
                    
                        <!-- start form pilih pesanan -->
                        <div class="col-lg-5">
                            <div class="bg-white rounded p-3 card-shadow">
                            <h4 class="text-uppercase text-center">Pilih Pesanan</h4>
                                
                                    <div class="form-group">
                                        <label for="nama-pemesan">Nama Pemesan</label>
                                        <input type="text" class="form-control" id="nama-pemesan" name="nama-pemesan" placeholder="..." required>
                                    </div>
                                    <div class="form-group">
                                        <label for="meja">Meja</label>
                                        <select class="form-control" id="meja" name="meja">
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
                                    <div class="form-group">
                                        <label for="jenis-pesanan">Jenis Pesanan</label>
                                        <select class="form-control" id="jenis-pesanan" name="jenis-pesanan" onchange="pilihMenu(this)">
                                            <?php
                                            $select ="makanan";
                                            if($select=="makanan"):?>
                                                <option value="makanan" selected>Makanan</option>
                                                <option value="minuman" >Minuman</option>
                                                <?php $select ="makanan";
                                            else:?>
                                                <option value="minuman" selected>Minuman</option>
                                                <option value="makanan" >Makanan</option>
                                                <?php $select ="minuman";
                                            endif;?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama-pesanan">Nama Pesanan</label>
                                        <select class="form-control" id="nama-pesanan" name="nama-pesanan" onchange="idMenu(this)">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga-satuan">Harga Satuan</label>
                                        <input type="text" class="form-control" id="harga-satuan" name="harga-satuan" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah-pesan">Jumlah Pesan</label>
                                        <input type="number" class="form-control" id="jumlah-pesan" name="jumlah-pesan" min="1" value="1" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="total-harga">Total Harga</label>
                                        <input type="text" class="form-control" id="total-harga" name="total-harga" value="Rp. 20.000,00-" readonly>
                                    </div>

                                    <div class="mt-5 tombol">
                                        <button class="btn btn-success btn-block" onclick="tambahKeKeranjang()" type="button">
                                            Add to Cart
                                        </button>
                                    </div>
                                
                            </div>
                        </div>
                        <!-- end form pilih pesanan -->

                        <!-- start daftar keranjang pesanan -->
                        <div class="col-lg">
                            <div class="row-lg">
                                <div class="col-lg  bg-white rounded p-3 ml-2 card-shadow">
                                    <h3>Shopping Cart</h3>
                                    <hr>
                                    <span id="pesan-berhasil" class="mt-3 mb-3"></span>
                                    <!-- tabel daftar item -->
                                    <div class="table-responsive">
                                        <table id="table" class="table table-bordered table-hover table-stripped mb-5">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>No</th>
                                                    <th>Nama Pesanan</th>
                                                    <th>Jumlah Pesanan</th>
                                                    <th>Harga Pesanan</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="daftar-pesanan">
                                                
                                            </tbody>

                                        </table>
                                    </div>
                                    
                                    <!-- total harga pesanan -->
                                    <div class="container">
                                        <div class="form-group row row-cols-2">
                                            <label for="total-harga-pesanan">Total Harga Pesanan</label>
                                            <div class="col">
                                                <input type="text" class="form-control" id="total-harga-pesanan" name="total-harga-pesanan" value="Rp. 0" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- bayar -->
                                    <div class="container">
                                        <div class="form-group row row-cols-2">
                                            <label for="bayar-pesanan">Pembayaran Pesanan (Rp.)</label>
                                            <div class="col">
                                                <input type="number" class="form-control" id="bayar-pesanan" min="0" name="bayar-pesanan" value="0" required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- kembali -->
                                    <div class="container">
                                        <div class="form-group row row-cols-2">
                                            <label for="kembalian-pesanan">Kembalian Pesanan</label>
                                            <div class="col">
                                                <input type="text" class="form-control" id="kembalian-pesanan" name="kembalian-pesanan" value="Rp. 0" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <span class="mt-5" id="pesan-peringatan"></span>
                                    <!-- button checkout -->
                                    <div class="mt-5 tombol">
                                        <button class="btn btn-success btn-block" type="button" onclick="checkOut()">
                                        <span class="fas fa-shopping-cart"></span>
                                            Checkout
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end daftar keranjang pesanan -->
                    
                </div>
            </div>

        </div>
    </section>
    
    <!-- script js untuk pesanan -->
    <script src="<?= base_url('assets/js/jquery-3.5.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery-ui.min.js'); ?>"></script>
    <!-- end script js untuk pesanan -->

    <script type="text/javascript">
        var jenisMenu;
        var kodeMenu;
        var hargaSatuan;
        var jumlahPesan;
        var total;
        var seluruhHargaPesanan;
        var pembayaran;
        var kembalianPembayaran;

        $(document).ready(function() {
            jenisMenu= '<?= $select;?>';
            getMenu(jenisMenu);
            getKeranjang();
            totalHargaPesanan();
        });

        function pilihMenu(val){
            jenisMenu = val.value;
            getMenu(jenisMenu);
        }

        function idMenu(val){
            kodeMenu = val.value;
            getHarga(jenisMenu,kodeMenu);
        }

        function getMenu(jenisMenu){//memunculkan menu pada select-option #nama-pesanan
            $.ajax({
                type: "POST",
                data: 'jenisMenu=' + jenisMenu,
                url: '<?= base_url('c_kasir/getMenu'); ?>',
                success: function(hasil) {
                    $('#nama-pesanan').html(hasil);
                    kodeMenu = document.getElementById("nama-pesanan").value;
                    getHarga(jenisMenu,kodeMenu);
                }
            });
        }

        function getHarga(jenisMenu,kodeMenu){//memunculkan harga dari makanan yang dipilih
            $.ajax({
                type: "POST",
                data: 'jenisMenu=' + jenisMenu +'&kodeMenu=' + kodeMenu,
                url: '<?= base_url('c_kasir/getHarga'); ?>',
                success: function(data) {
                    hargaSatuan = data;
                    document.getElementById("harga-satuan").value="Rp. "+Number(data).toLocaleString();
                    totalHarga(jumlahPesan,hargaSatuan);
                }
            });
        }

        //ajax untuk mengambil banyak pesanan yang diinputkan
        jQuery(function($) {
            //saat load
            jumlahPesan = $('#jumlah-pesan').val();
            totalHarga(jumlahPesan,hargaSatuan);

            //ketika berubah atau diinputkan
            $('#jumlah-pesan').on('input', function() {
                jumlahPesan = $('#jumlah-pesan').val();
                totalHarga(jumlahPesan,hargaSatuan);
            });
        
        });

        //fungsi untuk menampilkan total harga
        function totalHarga(jumlahPesan,hargaSatuan){
            total = Number(jumlahPesan)*Number(hargaSatuan);
            document.getElementById("total-harga").value="Rp. "+Number(total).toLocaleString();
            kembalian(pembayaran,seluruhHargaPesanan);
        }

        //fungsi menambahkan data dari form ke keranjang
        function tambahKeKeranjang(){
            var coba = document.getElementById("nama-pesanan");
            var namaPsn = coba.options[coba.selectedIndex].text; //mengambil dari combo box berupa text
            var jumlahPsn = $("[name='jumlah-pesan']").val();
            var totalPsn = total;

            $.ajax({
                type: "POST",
                data: 'namaPesanan=' + namaPsn +'&jumlahPesan=' + jumlahPsn +'&totalHarga=' + totalPsn,
                url: '<?= base_url('c_kasir/addToCart'); ?>',
                success: function(data) {
                    $('#pesan-berhasil').html(data);
                    getKeranjang();
                    totalHargaPesanan();
                }
            });
        }

        //fungsi melihat data dari tabel keranjang
        function getKeranjang(){
            $.ajax({
                type: "POST",
                url: '<?= base_url('c_kasir/getKeranjang'); ?>',
                dataType: 'json',
                success: function(data) {
                    var baris="";
                    for (var i =0; i<data.length; i++){
                        var no = i+1;
                        baris += '<tr>'+
                                        '<td>'+no+'</td>' +
                                        '<td>'+data[i].nama_pesanan+'</td>' +
                                        '<td>'+data[i].jumlah_pesanan+'</td>' +
                                        '<td> Rp. '+Number(data[i].harga_pesanan).toLocaleString()+'</td>' +
                                        '<td><button class="btn btn-danger" type="button" onclick="deleteItemPesanan('+data[i].id+')"><span class="fas fa-trash"></span></button></td>' +
                                '</tr>';
                    }
                    $('#daftar-pesanan').html(baris);
                }
            });
        }

        //fungsi hapus dari keranjang
        function deleteItemPesanan(id){
            $.ajax({
                type: "POST",
                url: '<?= base_url()."c_kasir/deleteItemPesanan/"?>'+id+'',
                success: function(data) {
                    $('#pesan-berhasil').html(data);
                    getKeranjang();
                    totalHargaPesanan();
                }
            });
        }

        //function untuk menampilkan total harga dari keranjang
        function totalHargaPesanan(){
            $.ajax({
                type: "POST",
                url: '<?= base_url('c_kasir/totalHargaPesanan'); ?>',
                dataType: 'json',
                success: function(data) {
                    seluruhHargaPesanan = data[0].jumlah;
                    document.getElementById("total-harga-pesanan").value="Rp. "+Number(data[0].jumlah).toLocaleString();
                    kembalian(pembayaran,seluruhHargaPesanan);
                }
            });
        }

        //ajax untuk mengambil banyaknya pembayaran yang diinputkan
        jQuery(function($) {
            //saat load
            pembayaran = $('#bayar-pesanan').val();
            kembalian(pembayaran,seluruhHargaPesanan);

            //ketika berubah atau diinputkan
            $('#bayar-pesanan').on('input', function() {
                pembayaran = $('#bayar-pesanan').val();
                kembalian(pembayaran,seluruhHargaPesanan);
            });
        
        });

        //function hitung uang kembalian 
        function kembalian(pembayaran,seluruhHargaPesanan){
            kembalianPembayaran = Number(pembayaran)-Number(seluruhHargaPesanan);
            document.getElementById("kembalian-pesanan").value="Rp. "+Number(kembalianPembayaran).toLocaleString();
        }

        function checkOut(){
            var coba = document.getElementById("meja");
            var meja = coba.options[coba.selectedIndex].text; //mengambil dari combo box berupa text
            var namaPemesan = $("[name='nama-pemesan']").val();
            
            if(namaPemesan == ""){
                var baris = '<div class="alert alert-danger alert-dismissible fade show" role="alert">'+
                            'Tolong isi Nama Pemesan'+
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                '<span aria-hidden="true">&times;</span>'+
                            '</button>'+
                            '</div>';
                $('#pesan-peringatan').html(baris);
            }else if(kembalianPembayaran < -1){
                var baris = '<div class="alert alert-danger alert-dismissible fade show" role="alert">'+
                            'Kembalian tidak boleh negatif'+
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                                '<span aria-hidden="true">&times;</span>'+
                            '</button>'+
                            '</div>';
                $('#pesan-peringatan').html(baris);
            }else{
                $.ajax({
                    type: "POST",
                    data: 'namaPemesan=' + namaPemesan +'&meja=' + meja +'&seluruhHargaPesanan=' + seluruhHargaPesanan +'&pembayaran=' + pembayaran +'&kembalianPembayaran=' + kembalianPembayaran,
                    url: '<?= base_url('c_kasir/tambahDataKasir'); ?>',
                    success: function(data) {
                        console.log(data);
                        $('#pesan-berhasil').html(data);
                        getKeranjang();
                        totalHargaPesanan();
                    }
                });
            }
        }
    </script>