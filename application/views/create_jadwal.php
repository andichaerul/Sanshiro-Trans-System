<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">Create New Trip</div>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2">
                    <div class="form-group">
                    	<form method="get" action="insert_jadwal_real">
                    	
				    </div>
				    <div class="form-group">
				    	<label for="code_trip">Code Trip</label>
				    	<input type="text" required name="code_trip" id="code_trip" class="form-control">
				    </div>
				    <div class="form-group">
				    	<label for="code_trip">Aktiv Dari Tanggal</label>
				    	<input type="text" required name="tanggalaktiv" readonly id="" class="form-control" value="<?php echo "".date('Y-m-d')."" ?>">
				    </div>
				    <div class="form-group">
				    	<label for="code_trip">Selama</label>
				    	<input type="number" required name="selama" id="" class="form-control">
				    </div>
				    <div class="form-group">
				    	<label for="dari">Dari</label>
                        <select name="kodestart" id="dari" class="form-control" required="yes">
                                <option value="" selected="selected">Dari</option>
                                <?php require_once 'asset/config-search-list.php';
                                  $stmt = $db->prepare('SELECT * FROM destinasi');
                                  $stmt->execute();
                                ?>
                                <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                                <?php extract($row); ?>
                                <option value="<?php echo $kode_rute; ?>"><?php echo $daftar_rute; ?></option>
                                <?php endwhile; ?>
                        </select>
				    </div>
				    <div class="form-group">
				    	<label for="Tujuan">Tujuan</label>
                        <select name="kodetujuan" id="Tujuan" class="form-control" required="yes">
                                <option value="" selected="selected">Tujuan</option>
                                <?php require_once 'asset/config-search-list.php';
                                  $stmt = $db->prepare('SELECT * FROM destinasi');
                                  $stmt->execute();
                                ?>
                                <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                                <?php extract($row); ?>
                                <option value="<?php echo $kode_rute; ?>"><?php echo $daftar_rute; ?></option>
                                <?php endwhile; ?>
                        </select>
				    </div>
				    <div class="form-group">
				    	<label for="via">Via</label>
				    	<textarea name="via" required id="via" class="form-control" placeholder="Contoh = Makassar - Maros - Parepare - Pangkep"></textarea>  
				    </div>
				    <div class="form-group">
				    	<label for="namapo">Nama PO</label>
				    	<input type="" name="namapo" readonly required id="namapo" class="form-control" value="Sanshiro Trans">
				    </div>
				    <div class="form-group">
				    	<label for="kelasbus">Kelas Bus</label>
				    	<select name="kelasbus" required id="kelasbus" class="form-control" required="yes">
                                <option value="" selected="selected">Kelas Bus</option>
                                <?php require_once 'asset/config-search-list.php';
                                  $stmt1 = $db->prepare('SELECT * FROM kelasbus');
                                  $stmt1->execute();
                                ?>
                                <?php while($row = $stmt1->fetch(PDO::FETCH_ASSOC)): ?>
                                <?php extract($row); ?>
                                <option value="<?php echo $kode_kelas; ?>"><?php echo $kelas; ?></option>
                                <?php endwhile; ?>
                        </select>
				    </div>
				    <div class="form-group">
				    	<label for="kodeseat">Seat Layout</label>
				    	<select name="kodeseat" id="kodeseat" required class="form-control" required="yes">
                                <option value="" selected="selected">Seat Layout</option>
                                <?php require_once 'asset/config-search-list.php';
                                  $stmt1 = $db->prepare('SELECT * FROM layout_seat');
                                  $stmt1->execute();
                                ?>
                                <?php while($row = $stmt1->fetch(PDO::FETCH_ASSOC)): ?>
                                <?php extract($row); ?>
                                <option value="<?php echo $code_seat; ?>"><?php echo $ket; ?></option>
                                <?php endwhile; ?>
                        </select>
				    </div>
				    
			</div>
			<div class="col-md-2 col-md-offset-1">
				<div class="form-group">
				    	<label for="jamstart">Jam Start</label>
				    	<input type="time" name="jamstart" id="jamstart" required class="form-control">
				    </div>
				    <div class="form-group">
				    	<label for="durasi">Durasi</label>
				    	<input type="time" name="durasi" required id="durasi" class="form-control">
				    </div>
				    <div class="form-group">
				    	<label for="jamtiba">Jam Tiba</label>
				    	<input type="time" name="jamtiba" id="jamtiba" required class="form-control">
				    </div>
				    <div class="form-group">
				    	<label for="Harga">Harga</label>
				    	<input type="number" name="Harga" id="Harga" required class="form-control">
				    </div>
				    <label for="Harga" style="visibility: hidden;">Harga</label>
				    	<button type="submit" class="form-control">Submit</button>
				    </div>
				    
				    </div>
				    </div>

				
			</div>	
		</div>
	</div>
</div>
				    	
				    </form>