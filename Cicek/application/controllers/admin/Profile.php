<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	
	//base_url için sabitler
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		
		$this->load->database();//sayfada database erişmeyi sağlar
		
		
	}
	
	
	public function index()
	{
		//veritabnından veri çekme
		$query=$this->db->get("kullanici");
		$data["veri"]=$query->result();
	
		//sıra önemli
		$this->load->view('admin/header.php');
		$this->load->view('admin/sidebar.php');
		$this->load->view('admin/profile.php',$data);
		$this->load->view('admin/footer.php');

		//echo "admin ana sayfa";
	}
	
	
	
}
