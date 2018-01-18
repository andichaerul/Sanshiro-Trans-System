<div class='row'>
          <div class='col-md-4'>Nama Penumpang</div>
          <div class='col-md-4'>Jenis Kelamin</div>
          <div class='col-md-4'>No Kursi</div>
	      </div>
<?php foreach ($pax as $pax) {
	echo "
	      <div class='row'>
	      <div class='col-md-4'>".$pax->nama_penumpang."</div>
	      <div class='col-md-4'>".$pax->jenis_kelamin."</div>
	      <div class='col-md-4'>".$pax->no_seat."</div>
	      </div>

	";
} ?>