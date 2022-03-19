<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MKaryawan extends CI_Model {

	
	public function getall()
	{
		$data = $this->db->get('tbl_karyawan')->result();
		return $data;
	}

	public function hapus()
	{
		$this->db->where($where);
		$this->db->delete('tbl_karyawan');

	}
}
?>