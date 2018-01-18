<?php 

class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	function home(){
		$data = $this->db->query("SELECT * from book_data ");
		return $data->result();
	}
	function listrute(){
		$data = $this->db->query("SELECT * from destinasi");
		return $data->result();
	}
	function jadwal(){
		$this->db->select('*,ok.daftar_rute as mol,om.daftar_rute as nol');
        $this->db->from('daftar_trip');
        $this->db->join('kelasbus', 'kelasbus.kode_kelas = daftar_trip.kelas_bus');
        $this->db->join('destinasi as ok','ok.kode_rute = daftar_trip.start','left');
        $this->db->join('destinasi as om','om.kode_rute = daftar_trip.tujuan','left');
        $data = $this->db->get();
        return $data->result();

	}
	function kelasbus(){
		$data = $this->db->query("SELECT * from kelasbus");
		return $data->result();
	}
	function insert_jadwal(){
		$generate =$this->input->get('generate');
		$codetrip =$this->input->get('code_trip'); 
		$dari =$this->input->get('Start');
		$tujuan =$this->input->get('Tujuan');
		$kelasbus =$this->input->get('kelasbus');
		$jamstart =$this->input->get('jamstart');
		$durasi =$this->input->get('durasi');
		$jamtiba =$this->input->get('jamtiba');
		$harga =$this->input->get('Harga');
		$tanggal =$this->input->get('tanggal');
		$kodeperjalanan =$this->input->get('kodeperjalanan');
		$namapo =$this->input->get('namapo');
		$seat =$this->input->get('kodeseat');
		$tanggalstart=$this->input->get('tanggalstart');
		$via =$this->input->get('via');
		$kodestart =$this->input->get('kodestart');
		$kodetujuan = $this->input->get('kodetujuan');
		$data = array(
			    'trip_code'=>$generate,
			    'kode_trip'=>$codetrip,
			    'kelas_bus'=>$kelasbus,
			    'jam_start'=>$jamstart,
			    'jam_tiba'=>$jamtiba,
			    'durasi'=>$durasi,
			    'start'=>$kodestart,
			    'tujuan'=>$kodetujuan,
			    'harga'=>$harga
			    );
		
		$this->db->insert('daftar_trip',$data);
        for ($i=0; $i < 30; $i++) 
        {
        $jadwal30[30] = array(
               'kode_perjalanan'=>$kodeperjalanan[$i],
               'no_kode'=>$codetrip,
               'nama_po'=>$namapo,
               'bus_kelas'=>$kelasbus,
               'code_seat'=>$seat,
               'tanggal_start'=>$tanggalstart[$i],
               'jam_start'=>$jamstart,
               'via'=>$via,
               'durasi'=>$durasi,
               'jam_tiba'=>$jamtiba,
               'kode_start'=>$kodestart,
               'kode_tujuan'=>$kodetujuan,
               'harga'=>$harga,
		       );
            $this->db->insert_batch('jadwal_perjalanan',$jadwal30);
            }
	}
	function insert_kelas_bus(){
		$kelas_bus = $this->input->get('kelas_bus');
		$Kelas = $this->input->get('kelas');
		$fasilitas = $this->input->get('fasilitas');
		$data = array(
			    'kode_kelas' => $kelas_bus,
			    'kelas' => $Kelas,
			    'fasilitas' => $fasilitas,
		);
		$this->db->insert('kelasbus',$data);
	}
	function real_insert_kelas_bus(){
		$kelas_bus = $this->input->get('kode_kelas');
		$Kelas = $this->input->get('kelas');
		$fasilitas = $this->input->get('fasilitas');
		$data = array(
			    'kode_kelas' => $kelas_bus,
			    'kelas' => $Kelas,
			    'fasilitas' => $fasilitas,
		);
		$this->db->replace('kelasbus',$data);

	}
	function seat(){
		$data = $this->db->query("SELECT * from layout_seat");
		return $data->result();
	}
	function edit_jadwal(){
		$kode = $this->input->get('kode');
        $this->db->select('*,from.daftar_rute as from,to.daftar_rute as to');
        $this->db->from('daftar_trip');
        $this->db->join('jadwal_perjalanan', 'jadwal_perjalanan.no_kode = daftar_trip.kode_trip','left');
        $this->db->join('layout_seat','layout_seat.code_seat = jadwal_perjalanan.code_seat');
        $this->db->join('kelasbus', 'kelasbus.kode_kelas = jadwal_perjalanan.bus_kelas');
        $this->db->join('destinasi as from', 'from.kode_rute = daftar_trip.start');
        $this->db->join('destinasi as to', 'to.kode_rute = daftar_trip.tujuan');
        $this->db->where('kode_trip',$kode);
        $data = $this->db->get();
        return $data->result();
	}
	function update_jadwal(){
		$codetrip =$this->input->get('code_trip'); 
		$dari =$this->input->get('Start');
		$tujuan =$this->input->get('Tujuan');
		$kelasbus =$this->input->get('kelasbus');
		$jamstart =$this->input->get('jamstart');
		$durasi =$this->input->get('durasi');
		$jamtiba =$this->input->get('jamtiba');
		$harga =$this->input->get('Harga');
		$tanggal =$this->input->get('tanggal');
		$kodeperjalanan =$this->input->get('kodeperjalanan');
		$namapo =$this->input->get('namapo');
		$seat =$this->input->get('kodeseat');
		$tanggalstart=$this->input->get('tanggalstart');
		$via =$this->input->get('via');
		$kodestart =$this->input->get('kodestart');
		$kodetujuan = $this->input->get('kodetujuan');
		$data = array(
			    'kode_trip'=>$codetrip,
			    'kelas_bus'=>$kelasbus,
			    'jam_start'=>$jamstart,
			    'jam_tiba'=>$jamtiba,
			    'durasi'=>$durasi,
			    'harga'=>$harga
			    );
        $this->db->where('kode_trip', $codetrip);
        $this->db->update('daftar_trip', $data);
         $jadwalupdate = array(
         	   'nama_po'=>$namapo,
               'bus_kelas'=>$kelasbus,
               'code_seat'=>$seat,
               'jam_start'=>$jamstart,
               'via'=>$via,
               'durasi'=>$durasi,
               'jam_tiba'=>$jamtiba,
               'harga'=>$harga,

         );
               
        $this->db->where('no_kode', $codetrip);
        $this->db->update('jadwal_perjalanan', $jadwalupdate);       
	}
	function view_all_jadwal(){
		$code = $this->input->get('code');
		$this->db->select('*,count(kode_trip) as total');
        $this->db->from('jadwal_perjalanan');
        $this->db->join('kelasbus', 'kelasbus.kode_kelas = jadwal_perjalanan.bus_kelas');
        $this->db->join('layout_seat','layout_seat.code_seat = jadwal_perjalanan.code_seat');
        $this->db->join('daftar_penumpang','daftar_penumpang.kode_trip = jadwal_perjalanan.kode_perjalanan','left');
        $this->db->group_by("kode_perjalanan");
        $this->db->where('no_kode', $code);
        $this->db->order_by('tanggal_start');
        $data = $this->db->get();
		return $data->result();
	}
	function edit_view_all(){
		$code = $this->input->get('code');
		$data = $this->db->query("SELECT * from jadwal_perjalanan where kode_perjalanan=$code");
		return $data->result();
	}
	function update_single_all(){
		$code = $this->input->get('code');
		$kelasbus = $this->input->get('kelasbus');
		$seat = $this->input->get('seat');
		$jamstart = $this->input->get('jamstart');
		$via = $this->input->get('via');
		$durasi = $this->input->get('durasi');
		$jamtiba = $this->input->get('jamtiba');
		$harga = $this->input->get('harga');
		$data = array(
               'bus_kelas'=>$kelasbus,
               'code_seat'=>$seat,
               'jam_start'=>$jamstart,
               'via'=>$via,
               'durasi'=>$durasi,
               'jam_tiba'=>$jamtiba,
               'harga'=>$harga,

         );
               
        $this->db->where('kode_perjalanan', $code);
        $this->db->update('jadwal_perjalanan', $data);
		
	}
	function order_list(){
		$this->db->select('*,from.daftar_rute as from,to.daftar_rute as to');
        $this->db->from('book_data');
        $this->db->join('jadwal_perjalanan', 'jadwal_perjalanan.kode_perjalanan = book_data.kode_jadwal','left');
        $this->db->join('destinasi as from', 'from.kode_rute = jadwal_perjalanan.kode_start','left');
        $this->db->join('destinasi as to', 'to.kode_rute = jadwal_perjalanan.kode_tujuan','left');
        $this->db->join('kelasbus', 'kelasbus.kode_kelas = jadwal_perjalanan.bus_kelas','left');
		$data = $this->db->get();
		return $data->result();
	}
	function pax_order(){
		$code = $this->input->get('code');
		$this->db->select('*');
		$this->db->from('daftar_penumpang');
		$this->db->where('no_booking',$code);
		$data = $this->db->get();
		return $data->result();

	}
	function insert_seat_go(){
		$code =$this->input->get('code');
		$layout =$this->input->get('seatlayout');
		$nama = $this->input->get('namaseat');
		$data = array(
			    'code_seat'=>$code,
			    'model_seat'=>$layout,
			    'ket'=>$nama,
			    );
		
		$this->db->insert('layout_seat',$data);
	}
	function list_seat(){
		$this->db->select('*');
		$this->db->from('layout_seat');
		$data = $this->db->get();
		return $data->result();
	}
	function search_jadwal(){
		$this->db->select('*,from.daftar_rute as from, to.daftar_rute as to');
		$this->db->from('jadwal_perjalanan');
		$this->db->join('destinasi as from','from.kode_rute = jadwal_perjalanan.kode_start');
		$this->db->join('destinasi as to','to.kode_rute = jadwal_perjalanan.kode_tujuan');
		$this->db->join('kelasbus','kelasbus.kode_kelas = jadwal_perjalanan.bus_kelas');
		$this->db->order_by("tanggal_start");
		$data = $this->db->get();
		return $data->result();
	}
	function aktiv_jadwal(){
		$code = $this->input->get('code');
		$data = array(
			    'status'=>'on',
			    );

		$this->db->where('no_kode', $code);
        $this->db->update('jadwal_perjalanan', $data);
	}
	function non_jadwal(){
		$code = $this->input->get('code');
		$data = array(
			    'status'=>'-',
			    );

		$this->db->where('no_kode', $code);
        $this->db->update('jadwal_perjalanan', $data);
	}
	function s_non_jadwal(){
		$code = $this->input->get('code');
		$data = array(
			    'status'=>'-',
			    );

		$this->db->where('kode_perjalanan', $code);
        $this->db->update('jadwal_perjalanan', $data);
	}
	function on_non_jadwal(){
		$code = $this->input->get('code');
		$data = array(
			    'status'=>'checked',
			    );
		$this->db->where('kode_perjalanan', $code);
        $this->db->update('jadwal_perjalanan', $data);   
	}
	function aktiv_jadwal_insert(){
		$code =$this->input->get('aktiv');
		$data = array(
			    'status'=>'checked',
			    );
		for ($i=0; $i < count($code); $i++) { 
			$this->db->where('kode_perjalanan', $code[$i]);
			$this->db->update('jadwal_perjalanan', $data);  
		};
        

	}
	function display_seat_will_block(){
		$code = $this->input->get('code');
		$this->db->select('*');
        $this->db->from('jadwal_perjalanan');
        $this->db->where('kode_perjalanan',$code);
        $this->db->join('layout_seat', 'layout_seat.code_seat = jadwal_perjalanan.code_seat');
        $data = $this->db->get();
        return $data->result();
	}
	function book_seat_will_blokir(){
		$code = $this->input->get('code');
		$this->db->select('*');
		$this->db->from('daftar_penumpang');
		$this->db->where('kode_trip',$code);
		$data = $this->db->get();
        return $data->result();
	}
	function insert_will_block(){
		$code = $this->input->get('code');
		$seat = $this->input->get('ckb');
		$no_penumpang = rand(100000,999999);
		$no_booking = rand(100000,999999);
		$count = count($seat);
            for ($i=0; $i < $count; $i++) 
            {
            $data[$count] = array(
            	'no_penumpang'=>rand(100000,999999),
            	'no_booking'=>$no_booking,
            	'kode_trip'=>$code,
            	'nama_penumpang'=>'user',
            	'no_seat'=>$seat[$i],
            	'jenis_kelamin'=>'user',
            );

            $this->db->insert_batch('daftar_penumpang',$data);
            }

	}
	function input_real_to_database(){
	$selama = $_GET['selama'];
	$codetrip = $_GET['code_trip'];
	$generate =$this->input->get('generate');
	$codetrip =$this->input->get('code_trip'); 
	$dari =$this->input->get('Start');
	$tujuan =$this->input->get('Tujuan');
	$kelasbus =$this->input->get('kelasbus');
	$jamstart =$this->input->get('jamstart');
	$durasi =$this->input->get('durasi');
	$jamtiba =$this->input->get('jamtiba');
	$harga =$this->input->get('Harga');
	$tanggal =$this->input->get('tanggal');
	$namapo =$this->input->get('namapo');
	$seat =$this->input->get('kodeseat');
	$tanggalstart=$this->input->get('tanggalaktiv');
	$via =$this->input->get('via');
	$kodestart =$this->input->get('kodestart');
	$kodetujuan = $this->input->get('kodetujuan');
	$tanggal = date('Y-m-d');
	$kodeperjalanan = rand(10000000000,9999999999);
    
    for ($i=0; $i < $selama ; $i++) { 
    $jadwal[$selama] = array(
    'kode_perjalanan'=>rand(1000000000,9999999999)+$i,
    'no_kode'=>$codetrip,
    'nama_po'=>$namapo,
    'bus_kelas'=>$kelasbus,
    'code_seat'=>$seat,
    'tanggal_start'=>date('Y-m-d', strtotime('+ '.$i.' day', strtotime($tanggal))),
    'jam_start'=>$jamstart,
    'via'=>$via,
    'durasi'=>$durasi,
    'jam_tiba'=>$jamtiba,
    'kode_start'=>$kodestart,
    'kode_tujuan'=>$kodetujuan,
    'harga'=>$harga,
	 );
    $this->db->insert_batch('jadwal_perjalanan',$jadwal); 
    }
    $data = array(
			    'trip_code'=>rand(1000000000,9999999999),
			    'kode_trip'=>$codetrip,
			    'kelas_bus'=>$kelasbus,
			    'jam_start'=>$jamstart,
			    'jam_tiba'=>$jamtiba,
			    'durasi'=>$durasi,
			    'start'=>$kodestart,
			    'tujuan'=>$kodetujuan,
			    'harga'=>$harga
			    );
		$this->db->insert('daftar_trip',$data);

    }

}