<?php
/**
 * 
 */
class Bencana_model extends CI_model
{
	
	public  function getAllBencana()
	{
		return $query = $this->db->get('bencana')->result_array();

	}

	public function tambahDataBencana($data){
		
			return $this->db->insert('bencana', $data);
	}
}