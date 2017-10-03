<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kullanicilar extends CI_Controller {
	
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
		$query=$this->db->get("kullanici");
		$data["veri"]=$query->result();
	
		//sıra önemli
		$this->load->view('admin/_header.php',$data);
		$this->load->view('admin/_sidebar.php');
		$this->load->view('admin/KullanicilarListesi.php',$data);
		$this->load->view('admin/_footer.php');

		//echo "admin ana sayfa";
	}
	public function ekle()
	{
		$query=$this->db->get("kullanici");
		$data["veri"]=$query->result();
	
			$this->load->view('admin/Kullanici_ekle',$data);
	}
	public function sil($id)
	{
		$this->db->query("DELETE FROM kullanici WHERE id=$id");
		$this->session->set_flashdata("sonuc","Kayıt Silme Işlemi Başarı ile Gerçekleştirildi.");
		//listeye ekleme
		redirect(base_url()."admin/Kullanicilar");
		
	}
	public function edit($id)
	{
		$sorgu=$this->db->query('SELECT * FROM kullanici WHERE id=21');
		$data["veri"]=$sorgu->result();
		
	
		$this->load->view('admin/Kullanici_guncelle',$data);
	}

	public function guncelleKaydet($id)
	{
		
		$data =array(
		'ad' => $this->input->post('ad'),
		'soyad' => $this->input->post('soyad'),
		'sifre' => $this->input->post('sifre'),
		'email' => $this->input->post('email')
		
		);
		
		$this->Database_Model->update_data("kullanici",$data,$id);
		$this->session->set_flashdata("sonuc","Güncelleme İşlemi Başarı ile Gerçekleştirildi.");
		//listeye ekleme
		redirect(base_url()."admin/Kullanicilar");
		
	}
	
	public function eklekaydet ()
	{
		$data =array(
		'ad' => $this->input->post('ad'),
		'soyad' => $this->input->post('soyad'),
		'sifre' => $this->input->post('sifre'),
		'email' => $this->input->post('email'),
		'durum' => $this->input->post('durum'),
	
		);
		$this->Database_Model->insert_data("kullanici",$data);
		$this->session->set_flashdata("sonuc","Ekleme Işlemi Başarı ile Gerçekleştirildi.");
		//listeye ekleme
		redirect(base_url()."admin/Kullanicilar");
	}
	public function resim_ekle($id)
	{
		$this->db->where("id",$id);
		$sorgu = $this->db->get("kullanici");
		
		$data["veri"]=$sorgu->result();
		
	     $this->load->view('admin/_header.php',$data);
		 $this->load->view('admin/_sidebar.php');
		 $this->load->view('admin/kullanicii_resim_ekleme_formu',$data);
         $this->load->view('admin/_footer.php');
		
	}
	public function resim_upload($id)
	{
		$config['upload_path']='./uploads/';
	    $config['allowed_types']='gif|jpg|png';
	    $config['max_size']=30000;
		$config['max_width']=10024;
		$config['max_height']=9000;
		
		$this->load->library('upload',$config);
		 if ( ! $this->upload->do_upload('resim'))
                {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata("sonuc","Upload Hatası".$error);
                    print_r($error);
                }
                else
                {          
		
	    {
		$data =array(
		         'resim' => $this->upload->data('file_name')
		 
		);
		
		        $this->Database_Model->update_data("kullanici",$data,$id);
                $this->session->set_flashdata("sonuc","Resim Upload Edildi");

                redirect(base_url().'admin/Kullanicilar');
                }
		
	    }
	}
	
	
	
}
