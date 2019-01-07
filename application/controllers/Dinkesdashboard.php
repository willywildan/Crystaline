<?php
/**
 * 
 */
class Dinkesdashboard extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Dinkes_model');
		$this->load->model('Bencana_model');
		$this->load->model('login_model');
		$this->load->model('Korban_model');
	}
	
	public function index($nama  = '')
	{
		$this->load->model('Dinkes_model');
		$data['judul'] = 'Dinkes - Halaman Home';
		$data['nama'] = $nama;
		$data['dashboard'] = $this->Dinkes_model->getAllDinkes();
		$data['bencana'] = $this->Bencana_model->getAllBencana();
		$data['korban'] = $this->Korban_model->getAllKorban();
		$data['users'] = $this->login_model->getAllUser();
		$this->load->view('templatesdinkes/header',$data);
		$this->load->view('templatesdinkes/sidebar',$data);
		$this->load->view('dinkes/index',$data);
		$this->load->view('templatesdinkes/footer',$data);
	}

		public function bencana($nama  = '')
	{
		$this->load->model('Dinkes_model');
		$data['judul'] = 'Dinkes - bencana';
		$data['nama'] = $nama;
		$data['dashboard'] = $this->Dinkes_model->getAllDinkes();
		$data['bencana'] = $this->Bencana_model->getAllBencana();
		$data['users'] = $this->login_model->getAllUser();
		$this->load->view('templatesdinkes/header',$data);
		$this->load->view('templatesdinkes/sidebar',$data);
		$this->load->view('dinkes/bencana',$data);
		$this->load->view('templatesdinkes/footer',$data);
	}

		public function korban($nama  = '')
	{
		$this->load->model('Dinkes_model');
		$data['judul'] = 'Dinkes - korban';
		$data['nama'] = $nama;
		$data['dashboard'] = $this->Dinkes_model->getAllDinkes();
		$data['korban'] = $this->Korban_model->getAllKorban();
		$data['users'] = $this->login_model->getAllUser();
		$this->load->view('templatesdinkes/header',$data);
		$this->load->view('templatesdinkes/sidebar',$data);
		$this->load->view('dinkes/korban',$data);
		$this->load->view('templatesdinkes/footer',$data);
	}



	//korban
	public function edit($id)
	{
		$this->load->model('korban_model');		

		$edit = $this->korban_model->get($id);

		$data['edit'] = $edit;
		
		$this->load->view('templatesdinkes/header',$data);
		$this->load->view('templatesdinkes/sidebar',$data);
		$this->load->view('dinkes/korbanupdate',$data);
		$this->load->view('templatesdinkes/footer',$data);
	}

	public function update()
	{
		$this->load->model('korban_model');
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$umur = $this->input->post('umur');
		$idBencana = $this->input->post('idBencana');
		$posko = $this->input->post('posko');
		$foto = $this->input->post('foto');
		$kondisi = $this->input->post('kondisi');
		$triase = $this->input->post('triase');
		
		$data = [
				'nama' => $nama,
				'alamat' =>$alamat,
				'umur' => $umur,
				'idBencana' => $idBencana,
				'posko' => $posko,
				'foto' => $foto,
				'kondisi' => $kondisi,
				'triase' => $triase
			];

		$save = $this->korban_model->update($data,$id);
		redirect('Dinkesdashboard/korban');

	}


}