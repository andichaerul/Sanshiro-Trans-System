<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css-seat.css'); ?>">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			Model Seat
		</div>
		<div class="col-md-6">
		<div class='bus-table10'></div>
		</div>
		<div class="col-md-6">
			<div class="col-md-12">Data Seat</div>
			<form method="get" action="insert_seat_go">
			<div class="col-md-12">
				<div class="form-group">
                  <label for="codeseat">Generate Code Seat</label>
                  <input type="" readonly="" name="code" class="form-control" id="codeseat" value="<?php echo rand(100,999) ?>">
                </div>
                <div class="form-group">
                  <label for="title">Nama Layout Seat</label>
                  <input type="" class="form-control" id="title" name="namaseat">
                </div>
                <input type="hidden" name="seatlayout" value="[
    ['<?php echo $_GET["seat0"]; ?>', '<?php echo $_GET["seat1"]; ?>', '<?php echo $_GET["seat2"]; ?>', '<?php echo $_GET["seat3"]; ?>', '<?php echo $_GET["seat4"]; ?>', '<?php echo $_GET["seat5"]; ?>', '<?php echo $_GET["seat6"]; ?>', '<?php echo $_GET["seat7"]; ?>', '<?php echo $_GET["seat8"]; ?>', '<?php echo $_GET["seat9"]; ?>', '<?php echo $_GET["seat10"]; ?>', '<?php echo $_GET["seat11"]; ?>', '<?php echo $_GET["seat12"]; ?>'],
    ['<?php echo $_GET["seat13"]; ?>', '<?php echo $_GET["seat14"]; ?>', '<?php echo $_GET["seat15"]; ?>', '<?php echo $_GET["seat16"]; ?>', '<?php echo $_GET["seat17"]; ?>', '<?php echo $_GET["seat18"]; ?>', '<?php echo $_GET["seat19"]; ?>', '<?php echo $_GET["seat20"]; ?>', '<?php echo $_GET["seat21"]; ?>', '<?php echo $_GET["seat22"]; ?>', '<?php echo $_GET["seat23"]; ?>', '<?php echo $_GET["seat24"]; ?>', '<?php echo $_GET["seat25"]; ?>'],
    ['<?php echo $_GET["seat26"]; ?>', '<?php echo $_GET["seat27"]; ?>', '<?php echo $_GET["seat28"]; ?>', '<?php echo $_GET["seat29"]; ?>', '<?php echo $_GET["seat30"]; ?>', '<?php echo $_GET["seat31"]; ?>', '<?php echo $_GET["seat32"]; ?>', '<?php echo $_GET["seat33"]; ?>', '<?php echo $_GET["seat34"]; ?>', '<?php echo $_GET["seat35"]; ?>', '<?php echo $_GET["seat36"]; ?>', '<?php echo $_GET["seat37"]; ?>', '<?php echo $_GET["seat38"]; ?>'],
    ['<?php echo $_GET["seat39"]; ?>', '<?php echo $_GET["seat40"]; ?>', '<?php echo $_GET["seat41"]; ?>', '<?php echo $_GET["seat42"]; ?>', '<?php echo $_GET["seat43"]; ?>', '<?php echo $_GET["seat44"]; ?>', '<?php echo $_GET["seat45"]; ?>', '<?php echo $_GET["seat46"]; ?>', '<?php echo $_GET["seat47"]; ?>', '<?php echo $_GET["seat48"]; ?>', '<?php echo $_GET["seat49"]; ?>', '<?php echo $_GET["seat50"]; ?>', '<?php echo $_GET["seat51"]; ?>'],
    ['<?php echo $_GET["seat52"]; ?>', '<?php echo $_GET["seat53"]; ?>', '<?php echo $_GET["seat54"]; ?>', '<?php echo $_GET["seat55"]; ?>', '<?php echo $_GET["seat56"]; ?>', '<?php echo $_GET["seat57"]; ?>', '<?php echo $_GET["seat58"]; ?>', '<?php echo $_GET["seat59"]; ?>', '<?php echo $_GET["seat60"]; ?>', '<?php echo $_GET["seat61"]; ?>', '<?php echo $_GET["seat62"]; ?>', '<?php echo $_GET["seat63"]; ?>', '<?php echo $_GET["seat64"]; ?>'],
]">
                <div class="form-group">
                  <label for="btn"></label>
                  <input type="submit" class="form-control" id="" value="Simpan">
                </div></div></form>


			</div>
		</div>

	</div>
</div>


        
        
            <script>
            var row = Array(),
                booked=Array(),
                
           
    i = 0,
    j = 0;
    
row = [
    ['<?php echo $_GET["seat0"]; ?>', '<?php echo $_GET["seat1"]; ?>', '<?php echo $_GET["seat2"]; ?>', '<?php echo $_GET["seat3"]; ?>', '<?php echo $_GET["seat4"]; ?>', '<?php echo $_GET["seat5"]; ?>', '<?php echo $_GET["seat6"]; ?>', '<?php echo $_GET["seat7"]; ?>', '<?php echo $_GET["seat8"]; ?>', '<?php echo $_GET["seat9"]; ?>', '<?php echo $_GET["seat10"]; ?>', '<?php echo $_GET["seat11"]; ?>', '<?php echo $_GET["seat12"]; ?>'],
    ['<?php echo $_GET["seat13"]; ?>', '<?php echo $_GET["seat14"]; ?>', '<?php echo $_GET["seat15"]; ?>', '<?php echo $_GET["seat16"]; ?>', '<?php echo $_GET["seat17"]; ?>', '<?php echo $_GET["seat18"]; ?>', '<?php echo $_GET["seat19"]; ?>', '<?php echo $_GET["seat20"]; ?>', '<?php echo $_GET["seat21"]; ?>', '<?php echo $_GET["seat22"]; ?>', '<?php echo $_GET["seat23"]; ?>', '<?php echo $_GET["seat24"]; ?>', '<?php echo $_GET["seat25"]; ?>'],
    ['<?php echo $_GET["seat26"]; ?>', '<?php echo $_GET["seat27"]; ?>', '<?php echo $_GET["seat28"]; ?>', '<?php echo $_GET["seat29"]; ?>', '<?php echo $_GET["seat30"]; ?>', '<?php echo $_GET["seat31"]; ?>', '<?php echo $_GET["seat32"]; ?>', '<?php echo $_GET["seat33"]; ?>', '<?php echo $_GET["seat34"]; ?>', '<?php echo $_GET["seat35"]; ?>', '<?php echo $_GET["seat36"]; ?>', '<?php echo $_GET["seat37"]; ?>', '<?php echo $_GET["seat38"]; ?>'],
    ['<?php echo $_GET["seat39"]; ?>', '<?php echo $_GET["seat40"]; ?>', '<?php echo $_GET["seat41"]; ?>', '<?php echo $_GET["seat42"]; ?>', '<?php echo $_GET["seat43"]; ?>', '<?php echo $_GET["seat44"]; ?>', '<?php echo $_GET["seat45"]; ?>', '<?php echo $_GET["seat46"]; ?>', '<?php echo $_GET["seat47"]; ?>', '<?php echo $_GET["seat48"]; ?>', '<?php echo $_GET["seat49"]; ?>', '<?php echo $_GET["seat50"]; ?>', '<?php echo $_GET["seat51"]; ?>'],
    ['<?php echo $_GET["seat52"]; ?>', '<?php echo $_GET["seat53"]; ?>', '<?php echo $_GET["seat54"]; ?>', '<?php echo $_GET["seat55"]; ?>', '<?php echo $_GET["seat56"]; ?>', '<?php echo $_GET["seat57"]; ?>', '<?php echo $_GET["seat58"]; ?>', '<?php echo $_GET["seat59"]; ?>', '<?php echo $_GET["seat60"]; ?>', '<?php echo $_GET["seat61"]; ?>', '<?php echo $_GET["seat62"]; ?>', '<?php echo $_GET["seat63"]; ?>', '<?php echo $_GET["seat64"]; ?>'],
]
;
$.each(row, function(index, value) {
    $('.bus-table10').append('<tr>');
    while (j < index + 1) {
        for (i = 0; i < value.length; i++) {
            if (row[j][i] !== ' ') {
                $('.bus-table10 tr:nth-child(' + (index + 1) + ')').append(
                   '<td seatno=' + row[j][i] + ' class=' + row[j][i] + '><input type=checkbox id=' + row[j][i] + ' value=' + row[j][i] + ' /><label for=' + row[j][i] + '></td>');
            } else {
                $('.bus-table10 tr:nth-child(' + (index + 1) + ')').append('<td></td>');
            }
        }
        j++;
    }
});

</script>
</td>
            </tr>"

