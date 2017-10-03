<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cicekler extends CI_Controller {
	
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
		$sql="SELECT turu.adi as turadi, kategoriler.adi as katadi ,cicek.* FROM cicek
        LEFT JOIN turu
        ON cicek.Tur=turu.id
        LEFT JOIN kategoriler
        ON cicek.kategori_id=kategoriler.id
		ORDER BY cicek.Ad";
		//veritabnından veri çekme
		$query=$this->db->query("$sql");
		$data["veri"]=$query->result();
		
		//foto gelsin diye
		$query=$this->db->get("kullanici");
		$data1["veri"]=$query->result();
	
		//sıra önemli
		$this->load->view('admin/_header.php',$data1);
		$this->load->view('admin/_sidebar.php');
		$this->load->view('admin/CicekListesi.php',$data);
		$this->load->view('admin/_footer.php');
		

		//echo "admin ana sayfa";
	}
	public function ekle()
	{
		$query=$this->db->get("kullanici");
		$data1["veri"]=$query->result();
			$this->load->view('admin/Cicek_ekle',$data1);
			
	}
	public function sil($id)
	{
		$this->db->query("DELETE FROM cicek WHERE id=$id");
		
		$this->session->set_flashdata("sonuc","Kayıt Silme Işlemi Başarı ile Gerçekleştirildi.");
		//listeye ekleme
		redirect(base_url().'admin/Cicekler');
		
	}
	public function edit($id)
	{   
	    $result=$this->Database_Model->get_urun($id);
		  if($result)
		  {
			  //optionlar olmadı
			  
			  $sorgu=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
			  $data["kategoriler"]=$sorgu->result();
			  
			  $sorgu=$this->db->query("SELECT * FROM turu ORDER BY adi");
			  $data["turu"]=$sorgu->result();
			   
			  
			  $data["veri"]=$result;
			  $this->load->view('admin/Cicek_guncelle',$data);
		  }
		   else
			   redirect(base_url().'admin/sayfayok');
		
		
	
	
	}

	public function guncelleKaydet($id)
	{
		$data =array(
		'Ad' => $this->input->post('Ad'),
		'Tur' => $this->input->post('Tur'),
		'kategori_id' => $this->input->post('kategori_id'),
		'adet' => $this->input->post('adet'),
		'fiyat' => $this->input->post('fiyat'),
		'aciklama' => $this->input->post('aciklama'),
		'keywords' => $this->input->post('keywords'),
		'durum' => $this->input->post('durum'),
		'uzun_aciklama' => $this->input->post('uzun_aciklama')
		);
		
		$this->Database_Model->update_data("cicek",$data,$id);
		$this->session->set_flashdata("sonuc","Güncelleme İşlemi Başarı ile Gerçekleştirildi.");
		//listeye ekleme
		redirect(base_url()."admin/Cicekler");
		
	}
	
	public function eklekaydet ()
	{
		$data =array(
		'Ad' => $this->input->post('Ad'),
		'Tur' => $this->input->post('Tur'),
		'kategori_id' => $this->input->post('kategori_id'),
		'adet' => $this->input->post('adet'),
		'fiyat' => $this->input->post('fiyat'),
		'aciklama' => $this->input->post('aciklama'),
		'keywords' => $this->input->post('keywords'),
		'durum' => $this->input->post('durum'),
		'uzun_aciklama' => $this->input->post('uzun_aciklama')
	
		);
		$this->Database_Model->insert_data("cicek",$data);
		$this->session->set_flashdata("sonuc","Ekleme Işlemi Başarı ile Gerçekleştirildi.");
		//listeye ekleme
		redirect(base_url()."admin/Cicekler");
	}
		public function resim_ekle($id)
	{
		$this->db->where("id",$id);
		$sorgu = $this->db->get("cicek");
		$data["veri"]=$sorgu->result();
		
		$query=$this->db->get("kullanici");
		$data1["veri"]=$query->result();
		
	     $this->load->view('admin/_header.php',$data1);
		 $this->load->view('admin/_sidebar.php');
		 $this->load->view('admin/cicek_resim_ekleme_formu',$data);
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
		
		        $this->Database_Model->update_data("cicek",$data,$id);
                $this->session->set_flashdata("sonuc","Resim Upload Edildi");

                redirect(base_url().'admin/Cicekler');
                }
		
	    }
	}
		public function resim_galeri_ekle($id)
	{
		$this->db->where("id",$id);
		
		
		$sorgu = $this->db->query("SELECT * FROM cicek WHERE id=$id");
		
		$data["veri"]=$sorgu->result();
	 //galeri olmadı
		
		
		$sorgu = $this->db->query("SELECT * FROM cicekler_resim WHERE cicek_id=$id");
		
		$data["cicekler"]=$sorgu->result();
		
	
		$this->load->view('admin/cicek_galeri_ekleme_formu',$data);
		
	}
	
	public function resim_galeri_upload($id)
	{
		$config['upload_path']='./uploads/';
	    $config['allowed_types']='gif|jpg|png';
	    $config['max_size']=300;
		$config['max_width']=1024;
		$config['max_height']=900;
		
		$this->load->library('upload',$config);
		 if ( ! $this->upload->do_upload('resim'))
                {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata("sonuc","Upload Hatası".$error);
					redirect(base_url()."admin/cicekler/resim_galeri_ekle/$id");
					echo "hata";
                }
                else
                {          
		
	    {
		$data =array(
		         'cicek_id' =>$id ,
				 'resim' => $this->upload->data('file_name')
		 
		);
		
		        $this->Database_Model->insert_data("cicekler_resim",$data);
                $this->session->set_flashdata("sonuc","Resim Upload Edildi");

                 redirect(base_url()."/admin/Cicekler/resim_galeri_ekle/$id");
                }
		
	    }
	}
	
}
