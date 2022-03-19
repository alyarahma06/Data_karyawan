<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MKaryawan');
    }


  public function dataKaryawan()
  {
  	$data['datakaryawan'] = $this->MKaryawan->getall();
  	$data['no'] = $no = 1;
    $this->load->view('Admin/datakaryawan', $data);
  }

  public function inputDataKaryawan()
  {
    $this->load->view('Admin/tambahdata');
  }

  public function inputdata()
  {
  	
  	$data = array(
        'NIK' => $_POST['NIK'],
        'nama_karyawan' => $_POST['nama_karyawan'],
        'jabatan' => $_POST['jabatan'],
        'tgl_masuk' => $_POST['tgl_masuk'],
        'divisi' => $_POST['divisi'],
	);
	$this->db->insert('tbl_karyawan', $data);
     redirect('Admin/dataKaryawan');    
	}

	public function editkaryawan()
	{
		
		$this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->where('NIK', $_GET['NIK']);
        $query['data'] = $this->db->get()->result();

		$this->load->view('Admin/editkaryawan', $query);
	}

	public function editdata()
	{


		$this->db->set('NIK', $_POST['NIK']);
		$this->db->set('nama_karyawan',$_POST['nama_karyawan'] );
		$this->db->set('jabatan', $_POST['jabatan']);
		$this->db->set('tgl_masuk',$_POST['tgl_masuk']);
		$this->db->set('divisi', $_POST['divisi']);
		$this->db->replace('tbl_karyawan');
		redirect('Admin/dataKaryawan');
	}

	function hapusdata(){

	// $where = array('NIK' => );
	$this->db->where('NIK', $_GET['NIK']);
	$this->db->delete('tbl_karyawan');
	redirect('Admin/dataKaryawan');

	}
 
}

