<?php
/**
 * 
 */
class Bencana extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Dinkes_model');
		$this->load->model('Bencana_model');
		$this->load->model('login_model');
		$this->load->model('Korban_model');
	}

	public function index()
	{
		$data['judul'] = 'Daftar Bencana';
		$data['bencana'] = $this->Bencana_model->getAllBencana();
		$data['users'] = $this->login_model->getAllUser();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('bencana/index',$data);
		$this->load->view('templates/footer',$data);
	}

	public function tambah()
	{
		$lokasi = $this->input->post('lokasi');
		$tipe = $this->input->post('tipe');
		$skala = $this->input->post('skala');
		$tingkat = $this->input->post('tingkat');
		$tanggal = $this->input->post('tanggal');

		$data = array (
				'lokasi' => $lokasi,
				'tipe' =>$tipe,
				'skala' => $skala,
				'tingkat' => $tingkat,
				'tanggal' => $tanggal
			);
		
		$data['judul'] = 'Form Tambah Bencana';
		$this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
		$this->load->view('bencana/tambahBencana',$data);
		$this->load->view('templates/footer',$data);
	} 

}