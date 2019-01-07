<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {



	public function proseslogin($user,$pass,$lvl){

		$this->db->select('username,password,level');
		$this->db->from('users');
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$this->db->where('level',$lvl);
		$this->db->limit(1);
		$query  = $this->db->get();
		if ($query->num_rows()==1) {
			return $query->result();
		} else{
			return false;
		}

	}

	public function check_account($user)
    {
        //cari email lalu lakukan validasi
        $this->db->select('*');
		$this->db->from('users');
        $this->db->where('username', $user);
        $query = $this->db->get()->row();
        return $query;
    }

	public  function getAllUser()
	{
		return $this->db->get('users')->result_array();
	}

	public function tambahUser($data){
		
			return $this->db->insert('users', $data);
	}

	public function get($id)
	{
		return $this->db->where('id',$id)
						->get('users')
						->row();
	}

	public function update($data,$id){
		return $this->db->where('id',$id)
						->update('users',$data);
	}

	public function delete($id){
		return $this->db->where('id',$id)
						->delete('users');
	}
	public function hash_string($passwor)
  {
    $hashed_string = password_hash($passwor, PASSWORD_BYCRYPT, ["cost"=>$id]);
    return $hashed_string;
  }

   public function hash_verify($plain_text, $hashed_string)
  {
    $hashed_string = password_verify($plain_text, $hashed_string);
    return $hashed_string;
  }




}