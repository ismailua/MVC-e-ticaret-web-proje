<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musteriler extends CI_Controller {
	
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
	{
		//veritabnından veri çekme
		$query=$this->db->get("musteriler");
		$data["veri"]=$query->result();
	
		//sıra önemli
		$this->load->view('admin/_header.php',$data);
		$this->load->view('admin/_sidebar.php');
		$this->load->view('admin/MusteriListesi.php',$data);
		$this->load->view('admin/_footer.php');

		//echo "admin ana sayfa";
	}
	
	public function sil($id)
	{
		$this->db->query("DELETE FROM musteriler WHERE id=$id");
		$this->session->set_flashdata("sonuc","Kayıt Silme Işlemi Başarı ile Gerçekleştirildi.");
		//listeye ekleme
		redirect(base_url()."admin/Musteriler");
		
	}
	public function edit($id)
	{
		$sorgu=$this->db->query("SELECT * FROM musteriler WHERE Id=$id");
		$data["veri"]=$sorgu->result();
		
	
		$this->load->view('admin/Musteri_guncelle',$data);
	}
	public function guncelleKaydet($id)
	{
		
		
		$data =array(
		'adsoy' => $this->input->post('adsoy'),
		'email' => $this->input->post('email'),
		'sifre' => $this->input->post('sifre'),
		'tel' => $this->input->post('tel'),
		'adres' => $this->input->post('adres'),
		'aciklama' => $this->input->post('aciklama'),
		
		'durum' => $this->input->post('durum')
		
		);
		
		$this->Database_Model->update_data("musteriler",$data,$id);
		$this->session->set_flashdata("sonuc","Güncelleme İşlemi Başarı ile Gerçekleştirildi.");
		//listeye ekleme
		redirect(base_url()."admin/Musteriler");
		
	}
	
	

	
	
	
}
