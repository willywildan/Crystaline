<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
/**
 * 
 */
class Role extends CI_Controller
{
	public function index()
	{
		
	}
	public function hash_string($string)
	{
		$hashed_string = password_hash($string, PASSWORD_BYCRYPT)
	}
}
?>