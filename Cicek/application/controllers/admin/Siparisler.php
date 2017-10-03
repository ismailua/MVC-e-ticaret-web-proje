<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siparisler extends CI_Controller {
	
	//base_url için sabitler
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		
		$this->load->helper(array('form','url'));
			$this->load->database();//sayfada database erişmeyi sağlar
		$this->load->model('Database_Model');//model tanımlaması
		
		if(!$this->session->userdata('logged_in'))
		{
			redirect(base_url().'admin/Login');
		}
		
	}
	
	
	public function index()
	{
		 $sorgu=$this->db->query("SELECT * FROM siparisler WHERE durum='Yeni' ORDER BY Id desc");
		  $data["veriler"]=$sorgu->result();
		//foto gelsin diye
		$query=$this->db->get("kullanici");
		$data["veri"]=$query->result();
	
		//sıra önemli
		$this->load->view('admin/_header.php',$data);
		$this->load->view('admin/_sidebar.php');
		$this->load->view('admin/SiparisListesi.php',$data);
		$this->load->view('admin/_footer.php');
		

		//echo "admin ana sayfa";
	}
		public function onayli()
	{
		 $sorgu=$this->db->query("SELECT * FROM siparisler WHERE durum='Onaylandı' ORDER BY Id desc");
		  $data["veriler"]=$sorgu->result();
		//foto gelsin diye
		$query=$this->db->get("kullanici");
		$data["veri"]=$query->result();
	
		//sıra önemli
		$this->load->view('admin/_header.php',$data);
		$this->load->view('admin/_sidebar.php');
		$this->load->view('admin/SiparisListesi_onayli.php',$data);
		$this->load->view('admin/_footer.php');
		

		//echo "admin ana sayfa";
	}
	public function siparis_detay($id)
	        { 
			if(!$this->session->userdata('uye_session'))
		{
			redirect(base_url().'Home/uyelik');
		}
			$musteri_id = $this->session->uye_session["Id"];
			$query=$this->db->query("SELECT * FROM siparisler WHERE Id=$id");//ayarlar tablosunu veritabanına yükle
	         $data["siparis"]=$query->result();
			 
			 $query=$this->db->query("SELECT * FROM siparis_urunler WHERE siparis_id=$id");//ayarlar tablosunu veritabanına yükle
	         $data["urunler"]=$query->result();
	       
		   $query=$this->db->get("ayarlar");//ayarlar tablosunu veritabanına yükle
	       $data["ayar"]=$query->result();
		   $data["menu"]="Home";
		 $query=$this->db->get("kullanici");
		$data["veri"]=$query->result();
		
		$this->load->view('admin/_header.php',$data);
		$this->load->view('admin/_sidebar.php');
            $this->load->view('admin/siparis_detay',$data);
			$this->load->view('admin/_footer.php');
		   }
	public function ekle()
	{
		$query=$this->db->get("kullanici");
		$data1["veri"]=$query->result();
			$this->load->view('admin/siparis_ekle',$data1);
			
	}
	public function sil($id)
	{
		$this->db->query("DELETE FROM siparis WHERE id=$id");
		
		$this->session->set_flashdata("sonuc","Kayıt Silme Işlemi Başarı ile Gerçekleştirildi.");
		//listeye ekleme
		redirect(base_url().'admin/Siparisler');
		
	}
	public function edit($id)
	{   
	    $result=$this->Database_Model->get_urun($id);
		  if($result)
		  {
			  //optionlar olmadı
			  $sorgu=$this->db->query("SELECT * FROM turu ORDER BY adi");
			  $data["turu"]=$sorgu->$result(); 
			  
			  $sorgu=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
			  $data["kategoriler"]=$sorgu->$result();
			  
			   
			  
			  $data["veri"]=$result;
			  $this->load->view('admin/siparisListesi"',$data);
		  }
		   else
			   redirect(base_url().'admin/sayfayok');
		
		
	
	
	}

	public function guncelle($id)
	{
		$data =array(
		'kargofirma' => $this->input->post('kargofirma'),
		'kargono' => $this->input->post('kargono'),
		'durum' => $this->input->post('durum'),
		'admin_aciklama' => $this->input->post('admin_aciklama')
		
		);
		
		$this->Database_Model->update_data("siparisler",$data,$id);
		$this->session->set_flashdata("sonuc","Siparis  Başarı ile Güncenlendi.");
		//listeye ekleme
		redirect(base_url()."admin/Siparisler");
		
	}
	
	


	

}
