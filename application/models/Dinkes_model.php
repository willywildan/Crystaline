<?php
/**
 * 
 */
class Dinkes_model extends CI_model
{
	
	public  function getAllDinkes()
	{
		return $query = $this->db->get('bencana')->result_array();
		return $query = $this->db->get('korban')->result_array();

	}

	public function getkorban($id)
	{
		return $this->db->where('id',$id)
						->get('korban')
						->row();
	}

	public function updatekorban($data,$id){
		return $this->db->where('id',$id)
						->update('korban',$data);
	}

}