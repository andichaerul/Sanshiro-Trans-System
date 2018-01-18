<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">Search Jadwal</div>
		<div class="col-md-12">
			<table class="table table-hover" id="myTable">
    <thead>
      <tr>
        <th>Status</th>
        <th></th>
        <th><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for date" title="Type in a name"><br>Tanggal</th>
        <th><input type="text" id="myInput1" onkeyup="myFunction1()" placeholder="Search for from.." title="Type in a name"><br>Dari</th>
        <th><input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Search for to.." title="Type in a name"><br>Tujuan</th>
        <th><input type="text" id="myInput3" onkeyup="myFunction3()" placeholder="Search for bus class.." title="Type in a name"><br>Kelas Bus</th>
        <th>Harga</th>
        <th></th>
      </tr>
    </thead>
    
  

		</div>
		<?php foreach ($result as $row) {
			echo "
			<tbody>
             <tr>
             <td>".$row->status."</td>
             <td><a href='on_non_jadwal?code=".$row->kode_perjalanan."'>On</a>
             <br><a href='s_non_jadwal?code=".$row->kode_perjalanan."'>Off</a></td>
              <td>".longdate_indo($row->tanggal_start)."</td>
              <td>".$row->from."<br>".date('g:i A',strtotime($row->jam_start))."</td>
              <td>".$row->to."<br>".date('g:i A',strtotime($row->jam_tiba))."</td>
              <td>".$row->kelas."</td>
              <td>".rp($row->harga)."</td>
              <td><a href='edit_view_all?code=".$row->kode_perjalanan."'>Edit</a></td>
            </tr>
            </tbody>






			";
		} ?></table>




		</div>
	</div>
</div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script>
function myFunction1() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script>
function myFunction2() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script>
function myFunction3() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput3");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>