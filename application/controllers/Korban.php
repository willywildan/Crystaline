<?php

/**
 * 
 */
class Korban extends CI_Controller
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

		$data['judul'] = 'Daftar Korban';
		$data['korban'] = $this->Korban_model->getAllKorban();
		$data['users'] = $this->login_model->getAllUser();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('korban/index',$data);
		$this->load->view('templates/footer');
	}

	public function tambah($nama=''){
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
		$data['judul'] = 'Form Tambah Data';
		$data['nama'] = $nama;
		$data['users'] = $this->login_model->getAllUser();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('korban/tambah');
		$this->load->view('templates/footer');
	
		/*$this->Korban_model->tambahDataKorban();*/
	}

	public function tambah_aksi()
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
		$save = $this->korban_model->tambah($data,'korban');

	}

	public function edit($id)
	{
		$this->load->model('korban_model');		

		$edit = $this->korban_model->get($id);

		$data['edit'] = $edit;
		
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('korban/edit',$data);
		$this->load->view('templates/footer');

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
		redirect('korban');

	}

	public function hapus($id){

		$this->load->model('korban_model');

		$delete = $this->korban_model->delete($id);

		redirect('korban');
	}
	
}