<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesajlar extends CI_Controller {
	
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
		$query=$this->db->get("mesajlar");
		$data["mesaj"]=$query->result();
		$query=$this->db->get("kullanici");
		$data["veri"]=$query->result();
	
		//sıra önemli
		$this->load->view('admin/_header.php',$data);
		$this->load->view('admin/_sidebar.php');
		$this->load->view('admin/MesajListesi.php',$data);
		$this->load->view('admin/_footer.php');

		//echo "admin ana sayfa";
	}
	public function ekle()
	{
		$query=$this->db->get("mesajlar");
		$data["veri"]=$query->result();
	
			$this->load->view('admin/Mesaj_ekle',$data);
	}
	public function sil($id)
	{
		$this->db->query("DELETE FROM mesajlar WHERE id=$id");
		$this->session->set_flashdata("sonuc","Kayıt Silme Işlemi Başarı ile Gerçekleştirildi.");
		//listeye ekleme
		redirect(base_url()."admin/Mesajlar");
		
	}
	public function detay($id)
	{
		$this->db->query("UPDATE mesajlar SET durum='Okundu' WHERE id=$id");
		$sorgu=$this->db->query("SELECT * FROM mesajlar WHERE id=$id");
		$data["mesaj"]=$sorgu->result();
			$query=$this->db->get("kullanici");
		$data["veri"]=$query->result();
	
		$this->load->view('admin/_header.php',$data);
		$this->load->view('admin/_sidebar.php');
		$this->load->view('admin/MesajDetay.php',$data);
		$this->load->view('admin/_footer.php');
	}

	public function guncelleKaydet($id)
	{
		
		
		$data =array(
		'adminnotu' => $this->input->post('adminnotu')
		
		);
		
		$this->Database_Model->update_data("mesajlar",$data,$id);
		$this->session->set_flashdata("sonuc","Güncelleme İşlemi Başarı ile Gerçekleştirildi.");
		//listeye ekleme
		redirect(base_url()."admin/Mesajlar/detay/$id");
		
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
