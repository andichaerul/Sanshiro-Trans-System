<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">Edit Kelas Bus</div>
		<form method="get" action="real_update_kelas_bus">
		<div class="col-md-3">
			<div class="form-group">
                  <label for="kode_kelas">Kode Kelas</label>
                  <input type=""  readonly class="form-control" id="kode_kelas" value="<?php echo $_GET["kode_kelas"]; ?>" name="kode_kelas">
                </div>
            <div class="form-group">
                  <label for="kelas">Kelas</label>
                  <input type="" class="form-control" id="kelas" value="<?php echo $_GET["kelas"]; ?>" name="kelas">
                </div>
            <div class="form-group">
                  <label for="fasilitas">fasilitas</label>
                  <textarea name="fasilitas" class="form-control" id="fasilitas"><?php echo $_GET["fasilitas"]; ?></textarea> 
                </div>
                <div class="form-group">
                  <label for="submit"></label>
                  <input type="submit" class="form-control" id="submit">
                </div>        

		</div>
	</form>
	</div>
</div>