    <!-- Services-->
    <section class="page-section mt-5" id="services">
        <div class="container">
            <form action="">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <label for="nama">Nama Event</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="col-sm-6">
                        <label for="harga">Potongan Harga (dalam %)</label>
                        <input type="text" class="form-control" id="harga" name="harga">
                        <input type="hidden" name="single" id="single">
                    </div>
                </div>
                <center>
                    <button type="submit" class="btn btn-primary btn-block col-sm-2" id="submit" name="submit" value="submit">
                        Simpan
                    </button>
                </center>
            </form>

            <br>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nama Event</th>
                        <th scope="col">Potongan Harga</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody id="event">
                    
                </tbody>
            </table>

        </div>

    </section>

    <script src="<?= base_url('assets/'); ?>js/jquery-3.4.1.js"></script>
    <script>
        $(document).ready(function(){
            getData();

            $('#submit').click(function(){
                var submit = $(this).val();
                var singleID = $('#single').val();
                var nama = $('#nama').val();
                var harga = $('#harga').val();
                $.ajax({
                    url: "<?php echo base_url() ?>c_admin/insert_event",
                    method: 'post',
                    data: {submit: submit, singleID: singleID, nama: nama, harga: harga},
                    success: function(data){
                        $('#nama').val("");
                        $('#harga').val("");
                        if($('#submit').val() == "submit"){
                            $('#success').text("Data inserted successfully");
                        }else{
                            $('#success').text("Data updated successfully");
                        }
                        $('#success').addClass("alert alert-success");
                        $('#event').show();
                        $('#submit').text("Submit");
                        $('#submit').val("submit");
                        
                    }
                });
                getData()
            });

            $(document).on('click', '.delete', function(){
                var delID = $(this).attr("id");
                if(confirm("Apakah anda yakin ingin menghapus data ini?")){
                    $.ajax({
                        url: "<?php echo base_url() ?>c_admin/delete_event",
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
                getData()
            });

            $(document).on('click', '.edit', function(){
                var edID = $(this).attr("id");
                $.ajax({
                    url: "<?php echo base_url() ?>c_admin/fetch_single_event",
                    method: 'post',
                    data: {edID: edID},
                    dataType: "json",
                    success: function(data){
                        var i;
                        for(i in data){
                            $('#nama').val(data[i].nama);
                            $('#harga').val(data[i].diskon);
                        }
                        $('#single').val(edID);
                        $('#submit').text("Update");
                        $('#submit').val("update");
                        $('#event').hide();
                    }
                });
                getData()
            });
        });
        function getData(){
            $.ajax({
                url: "<?php echo base_url() ?>c_admin/getDataEvent",
                method: "post",
                dataType: "json",
                success: function(data){
                    var html= '';
                    var i;
                    for(i in data){
                        html+='<tr><td>'+data[i].nama+'</td><td>'+data[i].diskon+'</td><td><button class="btn btn-warning edit" id="'+data[i].id+'">Edit</button>&nbsp<button class="btn btn-danger delete" id="'+data[i].id+'">Delete</button></td></tr>';
                    }
                    $('#event').html(html);
                }
            }); 
        }
    </script>