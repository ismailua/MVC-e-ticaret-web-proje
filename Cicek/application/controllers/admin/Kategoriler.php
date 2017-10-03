<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategoriler extends CI_Controller {
	
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
		$query=$this->db->get("kategoriler");
		$data["veri"]=$query->result();
	
		//sıra önemli
		$this->load->view('admin/_header.php',$data);
		$this->load->view('admin/_sidebar.php');
		$this->load->view('admin/KategoriListesi.php',$data);
		$this->load->view('admin/_footer.php');

		//echo "admin ana sayfa";
	}
	public function ekle()
	{
		$query=$this->db->get("kategoriler");
		$data["veri"]=$query->result();
	
			$this->load->view('admin/Kategoriler_ekle',$data);
	}
	public function sil($id)
	{
		$this->db->query("DELETE FROM kategoriler WHERE id=$id");
		$this->session->set_flashdata("sonuc","Kayıt Silme Işlemi Başarı ile Gerçekleştirildi.");
		//listeye ekleme
		redirect(base_url()."admin/Kategoriler");
		
	}
	public function edit($id)
	{
		$sorgu=$this->db->query('SELECT * FROM kategoriler WHERE Id=$id');
		$data["veri"]=$sorgu->result();
		
	
		$this->load->view('admin/Kategoriler',$data);
	}
	public function guncelleKaydet($id)
	{
		
		
		$data =array(
		'adi' => $this->input->post('adi'),
		'aciklama' => $this->input->post('aciklama'),
		'keywords' => $this->input->post('keywords'),
		
		'durum' => $this->input->post('durum')
		);
		
		$this->Database_Model->update_data("kullanici",$data,$id);
		$this->session->set_flashdata("sonuc","Güncelleme İşlemi Başarı ile Gerçekleştirildi.");
		//listeye ekleme
		redirect(base_url()."admin/Kullanicilar");
		
	}
	
	public function eklekaydet ()
	{
		$data =array(
		'adi' => $this->input->post('adi'),
		'aciklama' => $this->input->post('aciklama'),
		'keywords' => $this->input->post('keywords'),
		
		'durum' => $this->input->post('durum')
		);
		$this->Database_Model->insert_data("kullanici",$data);
		$this->session->set_flashdata("sonuc","Ekleme Işlemi Başarı ile Gerçekleştirildi.");
		//listeye ekleme
		redirect(base_url()."admin/Kullanicilar");
	}


	
	
	
}
