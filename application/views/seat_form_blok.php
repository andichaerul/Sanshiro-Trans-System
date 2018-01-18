
<link rel="stylesheet" href="<?php echo base_url('asset/css-seat.css'); ?>">
<form action="insert_will_blokir" method="get">

<?php
$no=1;
    foreach ($seat as $row){
        echo "<tr>
        
        <div class='bus-table10'></div>
            <script>
            var row = Array(),
                booked=Array(),
                seatdisplay = ".$row->kode_perjalanan.",
                
           
    i = 0,
    j = 0;
    
row = ".$row->model_seat.";
$.each(row, function(index, value) {
    $('.bus-table10').append('<tr>');
    while (j < index + 1) {
        for (i = 0; i < value.length; i++) {
            if (row[j][i] !== ' ') {
                $('.bus-table10 tr:nth-child(' + (index + 1) + ')').append(
                   '<td seatno=' + row[j][i] + ' class=' + row[j][i] + '><input type=checkbox id=' + row[j][i] + ' value=' + row[j][i] + ' data-price=".$row->harga." data-form=1 name=ckb[] onclick=chkcontrol(' + row[j][i] + ') /><label for=' + row[j][i] + '></td>');
            } else {
                $('.bus-table10 tr:nth-child(' + (index + 1) + ')').append('<td></td>');
            }
        }
        j++;
    }
});

</script>
</td>
            </tr>";
        $no++;
    }
    ?>
    <input type="" name="code" value="<?php echo $row->kode_perjalanan ?>">
    <input type="submit" name="" value="update">
</form>
<script>
          booked = [<?php foreach($booked as $data){ ?>   
            <?php echo $data->no_seat; ?>,
           <?php } ?>]
          
          
          
$.each(booked, function(i, seatNo) {
    $('[seatno=' + seatNo + ']').addClass('taken').children().prop('disabled', true)
})
          
</script> 
<input type="" id="field_results1" name="nokursi" placeholder="no kursi"> 

<script>$(document).ready(function(){
    $checks = $(":checkbox");
    $checks.on('change', function() {
        var string = $checks.filter(":checked").map(function(i,v){
            return this.value;
        }).get().join(",");
        $('#field_results').text(string);
        $('#field_results1').val(string);
    });
});</script>  