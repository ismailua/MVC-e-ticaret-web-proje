<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	//base_url için sabitler
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form','url'));
		
		if(!$this->session->userdata('logged_in'))
		{
			redirect(base_url().'admin/Login');
		}
		
		
		
		
		$this->load->database();//sayfada database erişmeyi sağlar
		$this->load->model('Database_Model');//model tanımlaması
		
	}
	
		
		
		
		
	
	
	
	public function index()
	{//sıra önemli
	
	//veritabnından veri çekme
		$query=$this->db->get("kullanici");
		$data["veri"]=$query->result();
	
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		
		$this->load->view('admin/_main_content');
		$this->load->view('admin/_footer');
		
		//echo "admin ana sayfa";
	}
	
	public function login()
	{
		$this->load->view('admin/login_formu');
	}
	public function ayarlar()
	{
		$query=$this->db->get("kullanici");
		$data["veri"]=$query->result();
		
		$query=$this->db->query("SELECT *  FROM ayarlar limit 1 ");
		$data["veriler"]=$query->result();
		
		$this->load->view('admin/ayarlar',$data);
	}
	public function ayarguncelle($id)
	{
			
		$data =array(
		'adi' => $this->input->post('adi'),
		'keywords' => $this->input->post('keywords'),
		'adres' => $this->input->post('adres'),
		'sehir' => $this->input->post('sehir'),
		'tel' => $this->input->post('tel'),
		'smtpserver' => $this->input->post('smtpserver'),
		'smtpemail' => $this->input->post('smtpemail'),
        'password' => $this->input->post('password'),
	   'smtpemail' => $this->input->post('smtpemail'),
		'password' => $this->input->post('password'),
	     'iletisim' => $this->input->post('iletisim')
		
		);
		
		$this->Database_Model->update_data("ayarlar",$data,$id);
		$this->session->set_flashdata("sonuc","Güncelleme İşlemi Başarı ile Gerçekleştirildi.");
		//listeye ekleme
		redirect(base_url()."admin/Home/ayarlar");
	}
	
}
