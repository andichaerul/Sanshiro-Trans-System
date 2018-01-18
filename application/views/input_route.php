<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="col-md-12 head">Daftar Route yang dilayani</div>
			<div class="col-md-12 sub">
				<div class="col-md-4 head-sub">Kode Rute</div>
				<div class="col-md-4 head-sub">Nama Rute</div>
				<div class="col-md-4 head-sub-none">Action</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-4"><?php foreach ($listrute as $row) {
                                      echo "$row->kode_rute<br>";}?>
                </div>
				<div class="col-md-4"><?php foreach ($listrute as $row) {
                                      echo "$row->daftar_rute<br>";}?>
                </div>
                <div class="col-md-4"><?php foreach ($listrute as $row) {
                                      echo "<a href='delete_rute_real?koderute=$row->kode_rute' class='confirmation'>Delete</a><br>"




                                      ;}?>
                </div>
            </div>
            
		</div>

		<div class="col-md-8">
		<div class="col-md-12">Input Rute Baru<br></div>
		<div class="col-md-4">
		<form method="get" action="<?php echo base_url('index.php/admin/input_rute_real'); ?>">
		<div class="form-group">
                  <label for="koderute">Kode Rute</label>
                  <input type="number" class="form-control" id="koderute" name="koderute" required="">
                </div>
        <div class="form-group">
                  <label for="namarute">Nama Rute</label>
                  <input type="text" class="form-control" id="namarute" name="namarute" required="">
                </div>
        <div class="form-group">
                  <label for="btn"></label>
                  <input type="submit" class="form-control" id="btn" value="Simpan">
                </div>
		</form>	
		</div>
		
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
	

