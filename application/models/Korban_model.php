<?php
/**
 * 
 */
class Korban_model extends CI_model
{
	
	public  function getAllKorban()
	{

		return $this->db->get('korban')->result_array();
	}

	public function tambah($data){

		$this->db->insert('korban', $data);
	}

	public function get($id)
	{
		return $this->db->where('id',$id)
						->get('korban')
						->row();
	}

	public function update($data,$id){
		return $this->db->where('id',$id)
						->update('korban',$data);
	}

	public function delete($id){
		return $this->db->where('id',$id)
						->delete('korban');
	}
}