<style type="text/css">
  .show-on-print{
 display: none; 
}

@media print {
  .show-on-print{
    display:block;
  }
  .hide-on-print{
    display: none;
  }
 }
</style>

    <!-- Services-->
    <section class="page-section  mt-5" id="services">
        
        <div class="container">
            <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="name">Pilih Tanggal</label>
                <input required type="date" name="tanggal" class="form-control" id="datepicker1"> 

            </div>                    
          </div>
            <div class="col-md-4"><div class="form-group">
              <label for="name">Hingga</label>
                <input required type="date" name="tanggal2" class="form-control" id="datepicker2"> </div>
            </div>
        </div>
        <button class="add btn btn-primary">Lihat <span class="fas fa-search"> </span></button>
        <button id="print" style="float: right;" class="btn btn-primary">Print</button>
            <table class="table table-hover" id="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Total</th>
                    </tr> 
                </thead> 
                <tbody id="laporan">
                </tbody>
            </table>
        </div>

    </section>
<!-- 	
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>
  
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script> -->

    <script>

  $(document).ready(function(){   
    
    $('.add').click(function(){

      var tgl1 = document.getElementById("datepicker1").value;
      var tgl2 = document.getElementById("datepicker2").value;
      
      $.ajax({
          url : "<?php echo base_url();?>c_admin/ambil_laporan",
          method : "POST",
          data : {tgl1: tgl1, tgl2: tgl2},
          success: function(data){
            // console.log(data);
            $('#laporan').html(data);
          }
        });


      });

    function printData() {
      var divToPrint = document.getElementById("table");
      newWin = window.open("");
      newWin.document.write(divToPrint.outerHTML);
      newWin.print();
    newWin.close();
  }

     $('#print').click(function(){
          printData();
          
     });
      

    // $.extend($.fn.dataTable.defaults, {
    //   dom: 'Bfrtip'
    // });
    // $("#table").DataTable({
    //   buttons: [
    //     'copy', 'excel', 'pdf'
    //   ]
    // });


    


    //  $('#datepicker1').datepicker({
    //     autoclose: true
    //     });
    //  $('#datepicker2').datepicker({
    //   autoclose: true
    // });

//     $('#table').DataTable( {
//     autoFill: true,
//     dom : 'Bfrtip',
//     buttons: [
//     'copy', 'excel', 'pdf'
//   ]
    
// } );
      
  });

    

</script>