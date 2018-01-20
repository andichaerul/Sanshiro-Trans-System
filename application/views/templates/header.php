
<style type="text/css">
  .container-fluid.navbur {
    background: aliceblue;
    height: 40px;
    line-height: 40px;
    margin-top: -22px;
    margin-bottom: 15px;
}

span.menuhead {
    margin-right: 30px;
}
</style>

<head>
  <title><?php echo $title ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url('asset/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('asset/custom.css'); ?>">
  <script src="<?php echo base_url('asset/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/bootstrap.min.js'); ?>"></script>
  <link href="<?php echo base_url('asset/DatePicker1/css/bootstrap-datepicker.css'); ?>" rel="stylesheet">
  <script src="<?php echo base_url('asset/DatePicker/js/jquery-1.10.2.min.js'); ?>"></script>
  <script src="<?php echo base_url('asset/DatePicker1/js/bootstrap-datepicker.js'); ?>"></script>
  
</head>
<nav class="navbar navbar-default" id="">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand white" href="#">Sanshiro Trans System</a><br>
     
      <br>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" id="menu-sanshiro">
        <li><a href="#">Selamat datang, <?php echo $this->session->userdata("nama"); ?></a></li> 
        <li><a href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a></li> 
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid navbur">
   <div class="menuho">
        <span class="menuhead"><a href="<?php echo base_url('index.php/admin/'); ?>">- Home</a></span>
      <span class="menuhead"><a href="<?php echo base_url('index.php/admin/input_route'); ?>">- List Route</a></span>
      <span class="menuhead"><a href="<?php echo base_url('index.php/admin/order'); ?>">- Bookings</a></span>
      <span class="menuhead"><a href="#">- Manajemen </a></span>
      <span class="menuhead"><a href="<?php echo base_url('index.php/admin/jadwal'); ?>">- Depature Schedule</a></span>
      <span class="menuhead"><a href="<?php echo base_url('index.php/admin/index_seat'); ?>">- Layout Seat</a></span>
      <span class="menuhead"><a href="<?php echo base_url('index.php/admin/kelas_bus'); ?>">- Kelas Bus</a></span>
      <span class="menuhead"><a href="#">- Penumpang List</a></span>
      <span class="menuhead"><a href="<?php echo base_url('index.php/admin/block_seat'); ?>">- Blok Seat</a></span>
      </div>
</div>





























<script type='text/javascript'>
//<![CDATA[
var Nanobar=function(){var c,d,e,f,g,h,k={width:"100%",height:"2px",zIndex:9999,top:"0"},l={width:0,height:"100%",clear:"both",transition:"height .3s"};c=function(a,b){for(var c in b)a.style[c]=b[c];a.style["float"]="left"};f=function(){var a=this,b=this.width-this.here;0.1>b&&-0.1<b?(g.call(this,this.here),this.moving=!1,100==this.width&&(this.el.style.height=0,setTimeout(function(){a.cont.el.removeChild(a.el)},100))):(g.call(this,this.width-b/4),setTimeout(function(){a.go()},16))};g=function(a){this.width=
a;this.el.style.width=this.width+"%"};h=function(){var a=new d(this);this.bars.unshift(a)};d=function(a){this.el=document.createElement("div");this.el.style.backgroundColor=a.opts.bg;this.here=this.width=0;this.moving=!1;this.cont=a;c(this.el,l);a.el.appendChild(this.el)};d.prototype.go=function(a){a?(this.here=a,this.moving||(this.moving=!0,f.call(this))):this.moving&&f.call(this)};e=function(a){a=this.opts=a||{};var b;a.bg=a.bg||"#db3131";this.bars=[];b=this.el=document.createElement("div");c(this.el,
k);a.id&&(b.id=a.id);b.style.position=a.target?"relative":"fixed";a.target?a.target.insertBefore(b,a.target.firstChild):document.getElementsByTagName("body")[0].appendChild(b);h.call(this)};e.prototype.go=function(a){this.bars[0].go(a);100==a&&h.call(this)};return e}();
var nanobar = new Nanobar();nanobar.go(30);nanobar.go(60);nanobar.go(100);
//]]>
</script>