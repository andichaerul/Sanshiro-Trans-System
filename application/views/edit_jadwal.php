<?php foreach ($edit as $rowl) {
}?>


<div class="container-fluid"><div class="testing">bushand</div>
	<div class="row">
		<div class="col-md-12">Edit trip</div>
		<div class="col-md-12">
			<div class="row">
				<form method="get" action="update_jadwal">
				<div class="col-md-2">
				    <div class="form-group">
				    	<label for="code_trip">Code Trip</label>
				    	<input type="text" readonly name="code_trip" id="code_trip" class="form-control" value="<?php echo "$rowl->kode_trip"; ?>" >
				    </div>
				    <?php echo "$rowl->from"; ?><br><br>
				    <?php echo "$rowl->to"; ?>
				    <div class="form-group">
				    	<label for="via">Via</label>
				    	<textarea name="via" required id="via" class="form-control" placeholder="Contoh = Makassar - Maros - Parepare - Pangkep"><?php echo "$rowl->via"; ?></textarea>  
				    </div>
				    <div class="form-group">
				    	<label for="namapo">Nama PO</label>
				    	<input type="" name="namapo" required readonly id="namapo" class="form-control" value="Sanshiro Trans">
				    </div>
				    <div class="form-group">
				    	<label for="kelasbus">Kelas Bus | Sebelumnya <?php echo "$rowl->kelas"; ?></label>
				    	<select name="kelasbus" id="kelasbus" required class="form-control" required="yes">
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
				    	<label for="kodeseat">Kode Seat | Sebelumnya <?php echo "$rowl->ket"; ?></label>
				    	<select name="kodeseat" id="kodeseat" required class="form-control" required="yes">
                                <option value="" selected="selected">Kode Seat</option>
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
				    	<input type="time" name="jamstart" id="jamstart" required class="form-control" value="<?php echo "$rowl->jam_start"; ?>" >
				    </div>
				    <div class="form-group">
				    	<label for="durasi">Durasi</label>
				    	<input type="time" name="durasi" id="durasi" required class="form-control" value="<?php echo "$rowl->durasi"; ?>">
				    </div>
				    <div class="form-group">
				    	<label for="jamtiba">Jam Tiba</label>
				    	<input type="time" name="jamtiba" id="jamtiba" required class="form-control" value="<?php echo "$rowl->jam_tiba"; ?>">
				    </div>
				    <div class="form-group">
				    	<label for="Harga">Harga</label>
				    	<input type="number" name="Harga" id="Harga" required class="form-control" value="<?php echo "$rowl->harga"; ?>">
				    </div>
				    <div class="form-group">
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