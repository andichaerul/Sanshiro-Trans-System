<?php foreach ($vial as $key) {
	# code...
};?>
<form method="post" action="aktivkan_jadwal">
<div ng-app="myApp" class="container-fluid">
  <div class="row">
    <div class="col-md-12" ng-controller="demoController as demo">
      <h3>ngTable directive</h3>
      <input type="submit" name="" value="Submit">
      <input type="checkbox" onclick="toggle(this);" />Check all?</>
      <table ng-table="demo.tableParams" class="table table-condensed table-bordered table-striped">
        <tr ng-repeat="row in $data">
          <td data-title="'Status'" filter="{name: 'text'}">
          <input type="hidden" name="aktiv[{{$index}}]" value="false"> 
          <input type="checkbox" value="true" name="aktiv[{{$index}}]" ng-checked="{{row.status}}">
          <input type="hidden" name="kodeperjalanan[]" value="{{row.kodeperjalanan}}">
          <input type="hidden" name="no_kode[]" value="{{row.kode}}">
          {{row.status}}
          </td>
          <td data-title="'Tgl'" filter="{tgl: 'text'}">{{row.tgl}}</td>
          <td data-title="'Kelas Bus'">{{row.kelas}}</td>
          <td data-title="'Jam Start'" filter="{ jamstart: 'text'}">{{row.jamstart}}</td>
          <td data-title="'Durasi'" filter="{durasi: 'text'}">{{row.durasi}}</td>
          <td data-title="'Jam Tiba'" filter="{jamtiba: 'text'}">{{row.jamtiba}}</td>
          <td data-title="'Via'" filter="{age: 'number'}">{{row.via}}</td>
          <td data-title="'Seat Layout'" filter="{age: 'number'}">{{row.seat}}</td>
          <td data-title="'Pax'" filter="{age: 'number'}">{{row.pax}}</td>
          <td data-title="'Harga'" filter="{age: 'number'}">{{row.harga}}</td>
        </tr>
      </table>
    </div>
  </div>
</div>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.2/angular.min.js'></script>
  <script src='https://unpkg.com/ng-table/bundles/ng-table.min.js'></script>


<script>
  angular.module("ngTableDemos", []);


(function() {
  "use strict";

  angular.module("ngTableDemos").factory("ngTableDemoCountries", dataFactory);

  dataFactory.$inject = ["ngTableSimpleMediumList"];

  function dataFactory(ngTableSimpleMediumList) {
    var countries = ngTableSimpleMediumList.reduce(function(results, item) {
      if (results.indexOf(item.country) < 0) {
        results.push(item.country);
      }
      return results;
    }, []).map(function(country){
      return { id: country, title: country};
    });

    countries.sort(function(a, b) {
      if (a.title > b.title) {
        return 1;
      }
      if (a.title < b.title) {
        return -1;
      }
      // a must be equal to b
      return 0;
    });
    return countries;
  }
})();



(function() {
  "use strict";

  angular.module("ngTableDemos").factory("ngTableSimpleMediumList", dataFactory);

  dataFactory.$inject = [];


  function dataFactory() {
    return [<?php foreach ($vial as $row) {
echo "{'status':'".$row->status."','tgl':'".longdate_indo($row->tanggal_start)."','kelas':'".$row->kelas."','jamstart':'".date('g:i A',strtotime($row->jam_start))."','durasi':'".date('g:i',strtotime($row->durasi))."','jamtiba':'".date('g:i A',strtotime($row->jam_tiba))."','via':'".$row->via."','seat':'".$row->ket."','pax':'".$row->total."','harga':'".rp($row->harga)."','kodeperjalanan':'".$row->kode_perjalanan."','kode':'".$row->no_kode."'},";
} ?>];
  }
})();

</script>

  

    <script>
      (function() {
  "use strict";

  var app = angular.module("myApp", ["ngTable", "ngTableDemos"]);

  app.controller("demoController", demoController);
  
  demoController.$inject = ["NgTableParams", "ngTableSimpleMediumList", "ngTableDemoCountries"];
  
  function demoController(NgTableParams, simpleList, countries) {
    this.countries = countries;
    this.tableParams = new NgTableParams({
      // initial filter
      filter: { name: "" } 
    }, {
      dataset: simpleList
    });
  }
  
  
  app.controller("dynamicDemoController", dynamicDemoController);
  
  dynamicDemoController.$inject = ["NgTableParams", "ngTableSimpleMediumList", "ngTableDemoCountries"];
  
  function dynamicDemoController(NgTableParams, simpleList, countries) {
    this.cols = [
      { field: "name", title: "Name", filter: { name: "text" }, show: true },
      { field: "age", title: "Age", filter: { age: "number" }, show: true },
      { field: "money", title: "Money", show: true },
      { field: "country", title: "Country", filter: { country: "select" }, filterData: countries, show: true }
    ];
    
    this.tableParams = new NgTableParams({
      // initial filter
      filter: { country: "Ecuador" } 
    }, {
      dataset: simpleList
    });
  }
})();
(function() {
  "use strict";

  angular.module("myApp").run(setRunPhaseDefaults);
  setRunPhaseDefaults.$inject = ["ngTableDefaults"];

  function setRunPhaseDefaults(ngTableDefaults) {
    ngTableDefaults.params.count = 100000;
    ngTableDefaults.settings.counts = [];
  }
})();
    </script>












<script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Yakin ingin menghapus?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
<script type="text/javascript">
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  check = document.getElementsByClassName("check");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "table-row";
      } else {
        tr[i].style.display = "none"; 
      }
    }
   }
   }
</script>
<script type="text/javascript">
    function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
</script>
