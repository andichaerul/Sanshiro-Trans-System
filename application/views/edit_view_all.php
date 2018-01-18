<?php foreach ($edit as $row1) {

} ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			Edit Jadwal Perjalanan
		</div>
		<div class="col-md-3">
			<form method="get" action="update_single_all">
			   <div class="form-group">
			   	<input type="hidden" name="code" value="<?php echo $row1->kode_perjalanan ?>" ><br>
                  <label for="buskelas">Bus Kelas</label>
                  <select name="kelasbus" id="buskelas" class="form-control" required="yes">
                                <option value="" selected="selected">Kelas Bus</option>
                                <?php require_once 'asset/config-search-list.php';
                                  $stmt = $db->prepare('SELECT * FROM kelasbus');
                                  $stmt->execute();
                                ?>
                                <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                                <?php extract($row); ?>
                                <option value="<?php echo $kode_kelas; ?>"><?php echo $kelas; ?></option>
                                <?php endwhile; ?>
                        </select>
                </div>
                <div class="form-group">
                  <label for="modelseat">Model Seat | Sebelumnya</label>
                  <select name="seat" id="modelseat" class="form-control" required="yes">
                                <option value="" selected="selected">Seat Layout</option>
                                <?php require_once 'asset/config-search-list.php';
                                  $stmt = $db->prepare('SELECT * FROM layout_seat');
                                  $stmt->execute();
                                ?>
                                <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                                <?php extract($row); ?>
                                <option value="<?php echo $code_seat; ?>"><?php echo $ket; ?></option>
                                <?php endwhile; ?>
                        </select>
                </div>
                <div class="form-group">
                  <label for="jamstart">Jam Start</label>
                  <input type="time" class="form-control" id="jamstart" name="jamstart" value="<?php echo $row1->jam_start ?>">
                </div>
                <div class="form-group">
                  <label for="via">Via</label>
                  <textarea id="via" name="via" class="form-control"><?php echo $row1->via ?></textarea>
                </div>
                <div class="form-group">
                  <label for="durasi">Durasi</label>
                  <input type="time" class="form-control" id="durasi" name="durasi" value="<?php echo $row1->durasi ?>">
                </div>
                <div class="form-group">
                  <label for="jamtiba">Jam Tiba</label>
                  <input type="time" class="form-control" id="jamtiba" name="jamtiba" value="<?php echo $row1->jam_tiba ?>">
                </div>
                <div class="form-group">
                  <label for="harga">Harga</label>
                  <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $row1->harga ?>">
                </div>
                <div class="form-group">
                  <label for="submit"></label>
                  <input type="submit" class="form-control" id="submit" value="Update">
                </div>
		</div></form>
	</div>
</div>