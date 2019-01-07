<?php
/**
 * 
 */
class Home extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Dashboard_model');
		$this->load->model('Korban_model');
		$this->load->model('Bencana_model');
		$this->load->model('login_model');
	}
	
	public function index()
	{
		$this->load->model('Dashboard_model');
		$data['judul'] = 'Halaman Home';

		$data['dashboard'] = $this->Dashboard_model->getAllDashboard();
		$data['korban'] = $this->Korban_model->getAllKorban();
		$data['bencana'] = $this->Bencana_model->getAllBencana();
		$data['users'] = $this->login_model->getAllUser();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('home/index',$data);
		$this->load->view('templates/footer' ,$data);
	}

	public function dinkes()
	{
		$this->load->model('Dashboard_model');
		$this->load->model('Dinkes_model');
		$data['judul'] = 'Halaman Dinkes';
		$data['dashboard'] = $this->Dashboard_model->getAllDashboard();
		$data['korban'] = $this->Korban_model->getAllKorban();
		$data['bencana'] = $this->Bencana_model->getAllBencana();
		$data['users'] = $this->login_model->getAllUser();
		$this->load->view('templatesdinkes/header',$data);
		$this->load->view('templatesdinkes/sidebar',$data);
		$this->load->view('dinkes/index',$data);
		$this->load->view('templatesdinkes/footer' ,$data);
	}
	
	public function sar()
	{
		$this->load->model('Dashboard_model');
		$this->load->model('Bencana_model');
		$this->load->model('Korban_model');
		$data['judul'] = 'Halaman SAR';
		$data['dashboard'] = $this->Dashboard_model->getAllDashboard();
		$data['korban'] = $this->Korban_model->getAllKorban();
		$data['bencana'] = $this->Bencana_model->getAllBencana();
		$data['users'] = $this->login_model->getAllUser();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('home/index',$data);
		$this->load->view('templates/footer' ,$data);
	}
}