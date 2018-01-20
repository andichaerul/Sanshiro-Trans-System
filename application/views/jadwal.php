<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
			<a href="create_jadwal">Create New</a>
		</div>
		<div class="col-md-2"><a href="search_jadwal">Cari Jadwal</a></div>
			<div class="col-md-2"></div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table">
    <thead>
      <tr>
        <th class="col-md-1">Code Generate</th>
		<th class="col-md-1">Kode Trip</th>
		<th class="col-md-1">Kelas Bus</th>
		<th class="col-md-1">Jam Start</th>
		<th class="col-md-1">Jam tiba</th>
		<th class="col-md-1">Durasi</th>
		<th class="col-md-1">Start</th>
		<th class="col-md-1">Tujuan</th>
		<th class="col-md-1">Harga</th>
		<th class="col-md-1"></th>
      </tr>
    </thead>
    <tbody>

        <?php 
	foreach ($jadwal as $row) {
		echo "<tr>
        <td>".$row->trip_code."</td>
        <td>".$row->kode_trip."</td>
        <td>".$row->kelas."</td>
        <td>".date('g:i A',strtotime($row->jam_start))."</td>
        <td>".date('g:i A',strtotime($row->jam_tiba))."</td>
        <td>".date('g:i',strtotime($row->jam_start))." Jam</td>
        <td>".$row->mol."</td>
        <td>".$row->nol."</td>
        <td>".rp($row->harga)."</td>
        <td><a href='delete_jadwal?generate=".$row->trip_code."&trip_code=".$row->kode_trip."' class='confirmation'>Delete</a><br>
            <a href='edit_jadwal?kode=".$row->kode_trip."'>Edit</a><br>
            <a href='view_all_jadwal?code=".$row->kode_trip."'>View All</a>
        </td>
      </tr>";
	}

	 ?>

     </tbody>
  </table>
		</div>
	</div>
	</div>
	<script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Yakin ingin menghapus?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>