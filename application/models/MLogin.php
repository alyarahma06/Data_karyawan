<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLogin extends CI_Model {

	
	public function getall()
	{
		$data = $this->db->get('tbl_login');
		return $data;
	}
}
?>