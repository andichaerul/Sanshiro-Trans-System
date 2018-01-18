<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css-seat.css'); ?>">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12"><a href="seat">Buat Layout Seat</a></div>
		<div class="col-md-12">Daftar Layout Seat</div>
		<div class="col-md-12">
			<table class='table table-hover'>
    <thead>
      <tr>
        <th>Code Seat</th>
        <th>Nama Seat</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
			<?php foreach ($list as $row) {
				echo "
                      <tbody>
                       <tr>
                       <td>".$row->code_seat."</td>
                       <td>".$row->ket."</td>
                       <td><button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#".$row->code_seat."'>View Seat</button></td>
                       <td><a href='seat_delete?code=".$row->code_seat."'>Delete</a></td>
                       </tr>
                       </tbody>
                       <div class='modal fade' id='".$row->code_seat."' role='dialog'>
    <div class='modal-dialog'>
    
      <!-- Modal content-->
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal'></button>
          <h4 class='modal-title'>Modal Header</h4>
        </div>
        <div class='modal-body'>
          <div class='".$row->code_seat."'></div>
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
        </div>
      </div>
      <script>
            var row = Array(),
                booked=Array(),
                
           
    i = 0,
    j = 0;
    
row = ".$row->model_seat."
;
$.each(row, function(index, value) {
    $('.".$row->code_seat."').append('<tr>');
    while (j < index + 1) {
        for (i = 0; i < value.length; i++) {
            if (row[j][i] !== ' ') {
                $('.".$row->code_seat." tr:nth-child(' + (index + 1) + ')').append(
                   '<td seatno=' + row[j][i] + ' class=' + row[j][i] + '><input type=checkbox id=' + row[j][i] + ' value=' + row[j][i] + ' /><label for=' + row[j][i] + '></td>');
            } else {
                $('.bus-table10 tr:nth-child(' + (index + 1) + ')').append('<td></td>');
            }
        }
        j++;
    }
});

</script>
                       ";
			} ?>
			</table>
		</div>
	</div>
</div>
<!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  