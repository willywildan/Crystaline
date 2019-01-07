<?php
/**
 * 
 */
class Dashboard_model extends CI_model
{
	
	public  function getAllDashboard()
	{
		return $query = $this->db->get('korban')->result_array();//Database
		return $query = $this->db->get('bencana')->result_array(); 
	}
}