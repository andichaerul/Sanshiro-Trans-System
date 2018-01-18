<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->helper('tgl_indo');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	function index(){
		$data['lastorder'] = $this->m_login->home();
		$this->load->view('templates/header');
		$this->load->view('v_admin', $data);

	}

	function pax(){
		$this->load->view('templates/header');
		$this->load->view('v_admin');
	}

	function input_route(){
		$data1['listrute'] = $this->m_login->listrute();
		$data['title'] = "Daftar Route";
		$this->load->view('templates/header',$data);
		$this->load->view('input_route',$data1);

	}
	function input_rute_real(){
		$koderute = $this->input->get('koderute');
		$namarute = $this->input->get('namarute');
		$data = array();
		$data = array(
			    'kode_rute'=>$koderute,
			    'daftar_rute'=>$namarute
		);
		$this->db->insert('destinasi',$data);
		$this->load->view('templates/header',$data);
		redirect('/index.php/admin/input_route', 'refresh');
		

	}
	function delete_rute_real(){
		$koderute = $this->input->get('koderute');
		$this->db->delete('destinasi', array('kode_rute' => $koderute));
		redirect('/index.php/admin/input_route', 'refresh');


	}
	function jadwal(){
		$data['title'] = "Jadwal";
		$data1['jadwal'] = $this->m_login->jadwal();
		$this->load->view('templates/header',$data);
		$this->load->view('jadwal',$data1);
	}
	function create_jadwal(){
		$data['title'] = "Create Jadwal";
		$this->load->view('templates/header',$data);
		$this->load->view('create_jadwal');

	}
	function insert_jadwal(){
		$this->m_login->insert_jadwal();
		redirect('/index.php/admin/jadwal', 'refresh');
	}
	function delete_jadwal(){
		$generate = $this->input->get('generate');
		$nokode = $this->input->get('trip_code');
		$this->db->delete('daftar_trip',array('trip_code' =>$generate));
		$this->db->delete('jadwal_perjalanan',array('no_kode' =>$nokode));
		redirect('/index.php/admin/jadwal', 'refresh');

	}
	function edit_jadwal(){
		$data['title'] = "Edit Jadwal";
		$data1['edit'] = $this->m_login->edit_jadwal();
		$this->load->view('templates/header',$data);
		$this->load->view('edit_jadwal',$data1);
	}
	function update_jadwal(){
		$this->m_login->update_jadwal();
		redirect('/index.php/admin/jadwal', 'refresh');
	}
	function kelas_bus(){
		$data['title'] = "Kelas Bus";
		$data['kelasbus'] = $this->m_login->kelasbus();
		$this->load->view('templates/header',$data);
		$this->load->view('kelasbus');
	}
	function delete_kelas_bus(){
		$kode_kelas = $this->input->get('kode_kelas');
		$this->db->delete('kelasbus',array('kode_kelas'=>$kode_kelas));
		redirect('index.php/admin/kelas_bus','refresh');
	}
	function create_kelas_bus(){
		$data['title'] = "Create Kelas Bus";
		$this->load->view('templates/header',$data);
		$this->load->view('create_kelas_bus');
	}
	function insert_kelas_bus(){
		$this->m_login->insert_kelas_bus();
		redirect('index.php/admin/kelas_bus','refresh');
	}
	function update_kelas_bus(){
		$data['title'] = "Edit Kelas Bus";
		$this->load->view('templates/header',$data);
		$this->load->view('update_kelas_bus');
	}
	function real_update_kelas_bus(){
		$this->m_login->real_insert_kelas_bus();
		redirect('index.php/admin/kelas_bus','refresh');
	}
	function seat(){
		$data1['seat'] = $this->m_login->seat();
		$data['title'] = "Seat Layout";
		$this->load->view('templates/header',$data);
		$this->load->view('seat');
	}
	function view_all_jadwal(){
		$data1['vial'] = $this->m_login->view_all_jadwal();
		$data['title'] = "Jadwal Perjalanan";
		$this->load->view('templates/header',$data);
		$this->load->view('view_all_jadwal',$data1);
	}
	function delete_view_all(){
		$back = $this->input->get('back');
		$delete = $this->input->get('delete');
		$data['title'] = "Jadwal Perjalanan";
		$this->load->view('templates/header',$data);
		$this->load->view('delete_v_all_jadwal');
		$this->db->delete('jadwal_perjalanan',array('kode_perjalanan'=> $delete));

	}
	function edit_view_all(){
		$data1['edit'] = $this->m_login->edit_view_all();
		$data['title'] = "Edit Jadwal Perjalanan";
		$this->load->view('templates/header',$data);
		$this->load->view('edit_view_all',$data1);
	}
	function update_single_all(){
		$this->m_login->update_single_all();
		$this->load->view('update_single_direct');
	}
	function order(){
		$data1['order'] = $this->m_login->order_list();
		$data['title'] = "List Order";
		$this->load->view('templates/header',$data);
		$this->load->view('order',$data1);
	}
	function view_pax(){
        $data1['pax'] = $this->m_login->pax_order();
		$this->load->view('view_pax',$data1);
	}
	function send(){  
        $config = Array(  
        'protocol' => 'smtp',  
        'smtp_host' => 'mail.birautama.com',  
        'smtp_port' => 2525,  
        'smtp_user' => 'andi.chaerul@birautama.com',   
        'smtp_pass' => 'happyday 123',   
        'mailtype' => 'html',   
        'charset' => 'iso-8859-1'  
         );  
        $this->load->library('email', $config);  
        $this->email->set_newline("\r\n");  
        $this->email->from('andi.chaerul@birautama.com', 'Admin Re:Code');   
        $this->email->to('andichaerul85@gmail.com');   
        $this->email->subject('Percobaan email');   
        $this->email->message('Ini adalah email percobaan untuk Tutorial CodeIgniter: Mengirim Email via Gmail SMTP menggunakan Email Library CodeIgniter @ recodeku.blogspot.com');  
        if (!$this->email->send()) {  
        show_error($this->email->print_debugger());   
        }else{  
        echo 'Success to send email';   
    }  
    }
    function view_model_seat(){
    	$data['title'] = "View Model Seat";
		$this->load->view('templates/header',$data);
		$this->load->view('model_seat');
    }
    function insert_seat_go(){
    	$this->m_login->insert_seat_go();
    	redirect('index.php/admin/index_seat','refresh');
    } 
    function index_seat(){
    	$data1['list'] = $this->m_login->list_seat();
    	$data['title'] = "Daftar Model Kursi";
		$this->load->view('templates/header',$data);
		$this->load->view('index_seat',$data1);  
	}
	function seat_delete(){
		$code = $this->input->get('code');
		$data['title'] = "Delete Seat";
		$this->load->view('templates/header',$data);
		$this->db->delete('layout_seat',array('code_seat'=> $code));
		redirect('index.php/admin/index_seat','refresh');
	}
	function search_jadwal(){
		$data['result'] = $this->m_login->search_jadwal();
		$data['title'] = "Search Jadwal";
		$this->load->view('templates/header',$data);
		$this->load->view('index_search_jadwal');
	}
	function aktiv_jadwal(){
		$this->m_login->aktiv_jadwal();
		redirect($_SERVER['HTTP_REFERER']);
	}
	function non_jadwal(){
		$this->m_login->non_jadwal();
		redirect($_SERVER['HTTP_REFERER']);
	}
	function s_non_jadwal(){
		$this->m_login->s_non_jadwal();
		redirect($_SERVER['HTTP_REFERER']);
	}
	function on_non_jadwal(){
		$this->m_login->on_non_jadwal();
		redirect($_SERVER['HTTP_REFERER']);
	}
	function block_seat(){
		$data1['result'] = $this->m_login->search_jadwal();
		$data['title'] = "Block Kursi";
		$this->load->view('templates/header',$data);
		$this->load->view('block_seat',$data1);
	}
	function blk_seat(){
		$data1['booked'] = $this->m_login->book_seat_will_blokir();
		$data1['seat'] = $this->m_login->display_seat_will_block();
		$data['title'] = "Block Kursi";
		$this->load->view('templates/header',$data);
		$this->load->view('seat_form_blok',$data1);
	}
	function insert_will_blokir(){
    	$this->m_login->insert_will_block();
		redirect($_SERVER['HTTP_REFERER']);
	}
	function insert_jadwal_real(){
		$data['title'] = "insert jadwal";
		$this->load->view('templates/header',$data);
		$this->load->view('insert_jadwal_real');
		$this->m_login->input_real_to_database();
		redirect('index.php/admin/jadwal','refresh');

	}
	function aktivkan_jadwal(){
		$this->m_login->aktiv_jadwal_insert();
		redirect($_SERVER['HTTP_REFERER']);
	}


 }  