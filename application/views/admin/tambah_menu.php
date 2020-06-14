    <!-- Services-->
    <section class="page-section mt-5" id="services">
        <div class="container">
            <div id="success"></div>
            <form action="">
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control form-control-user" id="nama" name="nama">
                    </div>
                    <div class="col-sm-4">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control form-control-user" id="harga" name="harga">
                        <input type="hidden" name="single" id="single">
                    </div>
                    <div class="col-sm-4">
                    <label for="menu">Menu</label>
                    <select class="form-control" id="menu" name="menu" onchange="pilihMenu(this)">
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
                    <div class="col-sm-12" style="margin-top: 10px;">
                    <center>
                        <button type="submit" class="btn btn-primary btn-user btn-block col-sm-2" id="submit" name="submit" value="submit">
                            Simpan
                        </button>
                    </center>
                    </div>
                </div>
            </form>

            <br>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="list_menu" name="list_menu">
                </tbody>
            </table>

        </div>

    </section>
    

    <script src="<?= base_url('assets/'); ?>js/jquery-3.4.1.js"></script>
    <script>
        $(document).ready(function(){
            jenisMenu= '<?= $select;?>';
            getMenu(jenisMenu);

            $('#submit').click(function(){
                var submit = $(this).val();
                var singleID = $('#single').val();
                var nama = $('#nama').val();
                var harga = $('#harga').val();
                var jenis = $('#menu').val();
                $.ajax({
                    url: "<?php echo base_url() ?>c_admin/insert_menu",
                    method: 'post',
                    data: {submit: submit, singleID: singleID, nama: nama, harga: harga, jenis:jenis},
                    success: function(data){
                        $('#nama').val("");
                        $('#harga').val("");
                        $('#menu').val("");
                        if($('#submit').val() == "submit"){
                            $('#success').text("Data inserted successfully");
                        }else{
                            $('#success').text("Data updated successfully");
                        }
                        $('#success').addClass("alert alert-success");
                        $('#list_menu').show();
                        $('#submit').text("Submit");
                        $('#submit').val("submit");
                        
                    }
                });
                getMenu(jenisMenu)
            });

            $(document).on('click', '.delete', function(){
                var delID = $(this).attr("id");
                if(confirm("Apakah anda yakin ingin menghapus data ini?")){
                    $.ajax({
                        url: "<?php echo base_url() ?>c_admin/delete_menu",
                        method: 'post',
                        data: {delID: delID},
                        success: function(data){
                            $('#success').addClass("alert alert-success");
                            $('#success').text("Data deleted successfully");
                        }
                    });
                }else{
                    return false;
                }
                getMenu(jenisMenu)
            });

            $(document).on('click', '.edit', function(){
                var edID = $(this).attr("id");
                $.ajax({
                    url: "<?php echo base_url() ?>c_admin/fetch_single_menu",
                    method: 'post',
                    data: {edID: edID},
                    dataType: "json",
                    success: function(data){
                        var i;
                        for(i in data){
                            $('#nama').val(data[i].nama);
                            $('#harga').val(data[i].harga);
                            $('#jenis').val(data[i].jenis);
                        }
                        $('#single').val(edID);
                        $('#submit').text("Update");
                        $('#submit').val("update");
                        $('#list_menu').hide();
                    }
                });
                getMenu(jenisMenu)
            });
        });

        function pilihMenu(val){
            jenisMenu = val.value;
            getMenu(jenisMenu);
        }

        function getMenu(jenisMenu){
            $.ajax({
                method: "POST",
                data: 'jenis='+jenisMenu,
                url: "<?php echo base_url() ?>c_admin/ambil_menu",
                success: function(data){
                    $('#list_menu').html(data);
                }
            });
        }
    </script>