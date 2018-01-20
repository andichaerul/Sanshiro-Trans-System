
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">Daftar Pemesanan</div>
		<div class="col-md-12">
			<table class="table table-hover">
    <thead>
      <tr>
        <th>No Booking</th>
        <th>Nama Pemesan</th>
        <th>Time Order</th>
        <th>Limit Order</th>
        <th>Status Konfirmasi</th>
        <th>Pembayaran</th>
        <th>Detail</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>

    	<?php foreach ($order as $row) {
	echo "<tr>
        <td>".$row->no_boking."</td>
        <td>".$row->nama_user."</td>
        <td>".$row->time_order."</td>
        <td>".$row->limit_pay."</td>
        <td>".$row->konfir."</td>
        <td>".rp($row->harga_total)."</td>
        <td><button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#".$row->no_boking."'>Detail</button></td>
        <td>Warning<br>
            Close<br>
            Kirim Tiket</td>
        </tr>
          <div class='modal fade' id='".$row->no_boking."' role='dialog'>
    <div class='modal-dialog'>
      <!-- Modal content-->
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal'></button>
          <h4 class='modal-title'>Detail Pemesanan ".$row->no_boking."</h4>
        </div>
        <div class='modal-body'>
        <div class='row'>
            <div class='col-md-12'>Detail Pemesan</div>
            <div class='col-md-12'>Nama Pemesan : ".$row->nama_user."</div>
            <div class='col-md-12'>Email : ".$row->email_user."</div>
            <div class='col-md-12'>No Telp : ".$row->phone_user."</div>
            <div class='col-md-12'>Detail Perjalanan</div>
            <div class='col-md-4'>".$row->from."<br>
                                  ".$row->jam_start."<br>
                                  ".$row->tanggal_start."<br>
                                  </div>
            <div class='col-md-4'>".$row->to."<br>
                                  ".$row->jam_tiba."<br>
                                  ".$row->tanggal_start."<br>
                                  </div>
            <div class='col-md-4'>Kelas Bus : ".$row->kelas."</div>

            <div class='col-md-12'>Detail Penumpang</div>
            <script>
             $(document).ready(function(){
             $('#pax".$row->no_boking."').load('view_pax?code=".$row->no_boking."');
            });
            </script>
            <div id='pax".$row->no_boking."' class='col-md-12'></div>
            </div>	



        

        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
        </div>
      </div>
    </div>
  </div> 
        ";
        } ?>
      
    </tbody>
  </table>
		</div>
	</div>
</div>
<!-- Trigger the modal with a button -->
  

  <!-- Modal -->
