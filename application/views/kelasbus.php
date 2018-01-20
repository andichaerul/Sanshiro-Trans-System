<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">Daftar Kelas Bus</div>
		<div class="col-md-5"><a href="create_kelas_bus">Create New</a></div>
		<div class="col-md-12">
            <table class="table table-hover">
               <thead>
                <tr>
                 <th>Kode Kelas</th>
                 <th>Title Kelas</th>
                 <th>Fasilitas</th>
                 <th></th>
                </tr>
               </thead>
            <tbody>
                <?php foreach ($kelasbus as $row ) {
	            echo "<tr>
                <td>$row->kode_kelas</td>
                <td>$row->kelas</td>
                <td>$row->fasilitas</td>
                <td><a href='delete_kelas_bus?kode_kelas=$row->kode_kelas'>Hapus</a><br> 
                    <a href='update_kelas_bus?kode_kelas=$row->kode_kelas&kelas=$row->kelas&fasilitas=$row->fasilitas'>Edit</a>
                </td>
                </tr>";
                } ?>  
            </tbody>
            </table>
		</div>
	</div>
</div>

