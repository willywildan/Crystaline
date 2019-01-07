<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
  public function ___construct()
  {
    parent::___construct();
    $this->load->model('login_model');
  }

  function ceklogin()
  {
    if (isset($_POST['login'])) 
    {

        $user = $this->input->post('user',true);
        $lvl = $this->input->post('lvl',true);
        $pass = $this->input->post('pass',true);
        $cek = $this->login_model->proseslogin($user,$pass,$lvl);


        if ($cek) 
        {
            foreach ($cek as $row);
            $this->session->set_userdata('username', $row->username);
            $this->session->set_userdata('level', $row->level);
            $query = $this->login_model->check_account($user, $pass);
            if ($this->session->userdata('level') === "dinkes") {
              $userdata = array(
              'is_login'    => true,
              'id'          => $query->id,
              'nama'        => $query->nama,
              'nik'         => $query->nik,
              'username'    => $query->username,
              'email'       => $query->email,
              'password'    => $query->password,
              'avatar'      => $query->avatar,
              'level'       => $query->level
            );
            $this->session->set_userdata($userdata);
            $this->load->view('user/editsar',$userdata);
        /*    $this->load->view('templates/header',$userdata);*/
            $this->load->view('templatesdinkes/header',$userdata);
            redirect('Dinkesdashboard');
            } elseif ($this->session->userdata('level') === "sar") {
              $userdata = array(
              'is_login'    => true,
              'id'          => $query->id,
              'nama'        => $query->nama,
              'nik'         => $query->nik,
              'username'    => $query->username,
              'email'       => $query->email,
              'password'    => $query->password,
              'avatar'      => $query->avatar,
              'level'       => $query->level
            );
            $this->session->set_userdata($userdata);
            $this->load->view('templates/header',$userdata);
          /*  $this->load->view('templatesdinkes/header',$userdata);*/
              redirect('home');
            }
        } else{//harus tambah perulangan
         $this->session->set_flashdata('info','Username dan Password tidak ditemukan');
          redirect('role');
        } 
    }
  }
    
    public function register($nama='')
    {
      $this->load->model('login_model');
      $id = $this->input->post('id');
      $nama = $this->input->post('nama');
      $nik = $this->input->post('nik');
      $username = $this->input->post('username');
      $email = $this->input->post('email');
      $passwor = $this->input->post('password');
      $password = $this->login->hash_string($password);
      $avatar = $this->input->post('avatar');
      $level = $this->input->post('level');

      $data = [
          'nama' => $nama,
          'nik' =>$nik,
          'username' => $username,
          'email' => $email,
          'password' => $password,
          'avatar' => $avatar,
          'level' => $level
        ];

        $save = $this->login_model->tambahUser($data,'users');
    }

  public function editsar($id)
  {
    $this->load->model('login_model');
    
    $edit = $this->login_model->get($id);

    $data['editsar'] = $edit;
    
    $this->load->view('templates/header',$data);
    $this->load->view('templates/sidebar',$data);
    $this->load->view('user/editsar',$data);
    $this->load->view('templates/footer',$data);
  }

  public function updatesar()
    {
      $this->load->model('login_model');

      $id = $this->input->post('id');
      $nama = $this->input->post('nama');
      $nik = $this->input->post('nik');
      $username = $this->input->post('username');
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $avatar = $this->input->post('avatar');
      if (empty($avatar)) {
        $avatar = $this->session->userdata('avatar');
      }else{
        $avatar = $this->input->post('avatar');
      }
      $level = $this->input->post('level');

      $data = [
          'nama' => $nama,
          'nik' =>$nik,
          'username' => $username,
          'email' => $email,
          'password' => $password,
          'avatar' => $avatar,
          'level' => $level
        ];
            $save = $this->login_model->update($data,$id);
            $this->session->set_userdata($data);
            $this->load->view('templates/header',$userdata);
/*            $this->load->view('templatesdinkes/header',$userdata);*/
            redirect('home');
    }

    public function editdinkes($id)
  {
    $this->load->model('login_model');

    $edit = $this->login_model->get($id);

    $data['editdinkes'] = $edit;
    
    $this->load->view('templatesdinkes/header',$data);
    $this->load->view('templatesdinkes/sidebar',$data);
    $this->load->view('user/editdinkes',$data);
    $this->load->view('templatesdinkes/footer',$data);
  }

  public function updatedinkes()
    {
      $this->load->model('login_model');

      $id = $this->input->post('id');
      $nama = $this->input->post('nama');
      $nik = $this->input->post('nik');
      $username = $this->input->post('username');
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $avatar = $this->input->post('avatar');
      if (empty($avatar)) {
        $avatar = $this->session->userdata('avatar');
      }else{
        $avatar = $this->input->post('avatar');
      }
      $level = $this->input->post('level');

      $data = [
          'nama' => $nama,
          'nik' =>$nik,
          'username' => $username,
          'email' => $email,
          'password' => $password,
          'avatar' => $avatar,
          'level' => $level
        ];
            $save = $this->login_model->update($data,$id);
            $this->session->set_userdata($data);
            /*$this->load->view('templates/header',$userdata);*/ //tanya
            $this->load->view('templatesdinkes/header',$userdata);
            redirect('Dinkesdashboard');
    }

   function loginsar(){
    $this->load->view('user/loginsar');
  }
  

  function logout()
  {
  	session_destroy();
  	redirect('role');
  }

    function index()
    {
    $this->load->view('user/login');
    }

}
