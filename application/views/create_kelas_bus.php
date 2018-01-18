<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">Buat Kelas Bus</div>
		<div class="col-md-12">
			<form method="get" action="insert_kelas_bus">
			<div class="col-md-3">
				<div class="form-group">
                  <label for="kode_kelas">Kode Kelas</label>
                  <input type="" readonly class="form-control" id="kode_kelas" name="kelas_bus" value="<?php echo rand(100,1000) ?>"> 
                </div>
                <div class="form-group">
                  <label for="kelas">Title Kelas</label>
                  <input type="" class="form-control" id="kelas" name="kelas">
                </div>
                <div class="form-group">
                  <label for="fasilitas">Fasilitas</label>
                  <textarea class="form-control" id="" name="fasilitas"></textarea> 
                </div>
                <div class="form-group">
                  <label for="submit" style="visibility: hidden;">button</label>
                  <input type="submit" class="form-control" id="submit">
                </div>
			</div>
		</form>
		</div>
	</div>
</div>