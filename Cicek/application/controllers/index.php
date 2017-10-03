<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	//base_url için sabitler
	
	function __construct()
	{
		parent::__construct();
			$this->load->library('session');
		
		
	
		
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('Database_Model');
		$this->load->library('email');
		
		
		
		
		
	}
	
	
	public function index()
	{//sıra önemli
       $query=$this->db->get("ayarlar");//ayarlar tablosunu veritabanına yükle
	   $data["ayar"]=$query->result();
	   
	   $query=$this->db->get("cicek");
	   $data["yeni"]=$query->result();
	   
	   $data["menu"]="Home";
	   
	   $query=$this->db->get("kategoriler");
	   $data["kategori"]=$query->result();
	 
	   $query=$this->db->query("SELECT * FROM cicek limit 3 ");
	   $data["cicek"]=$query->result();
	   
	   $query=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0 ");
	   $data["kate"]=$query->result();
	   
	   
	   $this->load->view('_header',$data);
	   $this->load->view('_silider',$data);
	   $this->load->view('_sidebar',$data);
	   $this->load->view('_main_content');
	   $this->load->view('_footer');
		
		//echo "admin ana sayfa";
	}
	public function Urun_detay($id)
	{
		
	$result=$this->Database_Model->get_urun($id);
	  if($result)
	  { 
        $this->db->where("id",$id);
		
		$query=$this->db->get("cicek");
	    $data["yeni"]=$query->result();
		
		$data["menu"]="detay";
		
        $data["veri"]=$result;
		$this->db->where("cicek_id",$id);
		
		$sorgu2 = $this->db->get("cicekler_resim");
		$data["cicekler"]=$sorgu2->result();
		
		$query=$this->db->get("kategoriler");
	    $data["kategori"]=$query->result();
	 
	    $query=$this->db->query("SELECT * FROM cicek WHERE id=$id ");
	    $data["cicek"]=$query->result();
	   
	    $query=$this->db->query("SELECT resim, Ad,aciklama,fiyat FROM cicek limit 6  ");
	    $data["denek"]=$query->result();
	   
	    $query=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0 ");
	    $data["kate"]=$query->result();
		
		$query=$this->db->get("ayarlar");//ayarlar tablosunu veritabanına yükle
	    $data["ayar"]=$query->result();
		
	  	$this->load->view('_Urun_detay',$data);
	    }
	   else
		   redirect(base_url().'admin/sayfayok');
		
	}

	public function mesaj_ekle ()
	{
		$data =array(
		'adsoy' => $this->input->post('adsoy'),
		'email' => $this->input->post('email'),
		'tel' => $this->input->post('tel'),
		
		'mesaj' => $this->input->post('mesaj'),
		'IP' => $_SERVER['REMOTE_ADDR']
	
		);
		$this->Database_Model->insert_data("mesajlar",$data);
	
		$this->session->set_flashdata("sonuc","Mesajınız Başarı ile Gönderildi.");
		//listeye ekleme
		redirect(base_url()."Home/iletisim");
	}
	public function hakkimizda()
	{
		$query=$this->db->get("ayarlar");//ayarlar tablosunu veritabanına yükle
	   $data["ayar"]=$query->result();
	   
	   $query=$this->db->get("cicek");
	   $data["yeni"]=$query->result();
	   
	   $data["menu"]="Home";
	   
	   $query=$this->db->get("kategoriler");
	   $data["kategori"]=$query->result();
	 
	   $query=$this->db->query("SELECT * FROM cicek limit 3 ");
	   $data["cicek"]=$query->result();
	   
	   $query=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0 ");
	   $data["kate"]=$query->result();
		
	   $this->load->view('hakkimizda',$data);	
	}
    public function kategori($id)
	{		
		//$result=$this->Database_Model->get_kategori($id);
	 // if($result)
	  //{ 
  
    $query=$this->db->query("SELECT turu.adi as turadi, kategoriler.adi as katadi ,cicek.* FROM cicek
        LEFT JOIN turu
        ON cicek.Tur=turu.id
        LEFT JOIN kategoriler
        ON cicek.kategori_id=kategoriler.id
		WHERE cicek.id=$id" );
	   $data["veriler"]=$query->result();
	   
       $query=$this->db->query("SELECT * FROM cicek WHERE kategori_id=$id ");
	   $data["veri"]=$query->result();
        
       $data["menu"]="Home";
	
	   $query=$this->db->get("ayarlar");//ayarlar tablosunu veritabanına yükle
	   $data["ayar"]=$query->result();
	   
	   $query=$this->db->get("kategoriler");
	   $data["kategori"]=$query->result();
	   
	   $this->load->view('_kategori',$data);
	  /*  }
	   else
		   redirect(base_url().'admin/sayfayok');*/
	}
	public function iletisim()
	{
	   $query=$this->db->get("ayarlar");//ayarlar tablosunu veritabanına yükle
	   $data["ayar"]=$query->result();
	   
	   $query=$this->db->get("cicek");
	   $data["yeni"]=$query->result();
	   
	   $data["menu"]="Home";
	   
	   $query=$this->db->get("kategoriler");
	   $data["kategori"]=$query->result();
	
	   $query=$this->db->query("SELECT * FROM kategoriler WHERE ust_id=0 ");
	   $data["kate"]=$query->result();
	   
	   $query=$this->db->query("SELECT *  FROM ayarlar limit 1 ");
	   $data["veri"]=$query->result();
	 
	   $this->load->view('_iletisim',$data);
	
	}
	
	public function uyelik()
	{
	   $query=$this->db->get("ayarlar");//ayarlar tablosunu veritabanına yükle
	   $data["ayar"]=$query->result();
	   
	   $data["menu"]="Home";
	   
	   $query=$this->db->query("SELECT * FROM ayarlar limit 1");
	   $data["veri"]=$query->result();
	   
	   redirect(base_url()."Home");
	}
	
	public function uyepanel()
	{
		if(!$this->session->userdata('uye_session'))
		{
			redirect(base_url().'Home/uyelik');
		}
		$query=$this->db->get("ayarlar");//ayarlar tablosunu veritabanına yükle
	    $data["ayar"]=$query->result();
		
	    $data["menu"]="Home";
		
	    $query=$this->db->get("kategoriler");
	    $data["kategori"]=$query->result();
		
		$query =$this->db->query("Select * from ayarlar limit 1");
		$data["veri"]=$query->result();
		
		$id=$this->session->uye_session["Id"];
		
		$query =$this->db->query("SELECT * FROM musteriler WHERE Id=$id");
		$data ["veri2"]=$query->result();
		$this->load->view('uye_panel',$data);
	}
	public function eklekaydet()
        {
                $data=array(

                        'adsoy'=>$this->input->post('adsoy'),
                        "email"=>$this->input->post("email"),
                        "sifre"=>$this->input->post("sifre"),
						"adres"=>$this->input->post("adres")
                       
                 );
			   $this->db->where("email",$this->input->post("email"));
			   $sonuc = $this->db->get("musteriler");
			   if(!$sonuc->result())
			   {
				   $this->Database_Model->insert_data("musteriler",$data);//tume ekleme işlemlerini bu fonksiyon yapacak
				   $this->session->set_flashdata("sonuc","Kayıt Gerçekleştirildi Giriş YaparakDevam Edebilirsiniz,"); //tek yazımlık 
				   redirect(base_url()."Home");
				   
			   }
               else
			   {
				   $this->session->set_flashdata("sonuc","Bu Kullanıcı Mevcut"); //tek yazımlık 
				   redirect(base_url()."Home/uye_panel");
			   }
        }
		
	public function uyegiris_yap()
	{
		$email=$this->input->post('email');
		$sifre=$this->input->post('sifre');
		
		$email=$this->security->xss_clean($email);
		$sifre=$this->security->xss_clean($sifre);
		
		if($email and $sifre)
		{
			$result=$this->Database_Model->login("musteriler",$email,$sifre);
			if($result)
			{
				$sess_array=array(
				'Id'=> $result[0]->Id,
				'email'=> $result[0]->email,
				'adsoy'=> $result[0]->adsoy,
				
				);
				$this->session->set_userdata('uye_session',$sess_array);
				
				redirect(base_url().'Home/uyepanel/');
			}
			else
			{
				$this->session->set_flashdata("mesaj","Gecersiz Email yada Sifre:");
				redirect(base_url().'Home/uyelik');
			}
		}
		else
		{
			
				$this->session->set_flashdata("mesaj","Alanlar Boş:");
				redirect(base_url().'Home/uyelik');
		}
		
	}
	public function profil_guncelle()
	{
		$data = array(
		 'ad' => $this->input->post("ad"),
		 'soyad' => $this->input->post("soyad"),
		 'email' => $this->input->post("email"),
		 'kullanici_adi' => $this->input->post("kullanici_adi"),
		 'sifre' => $this->input->post("sifre")
		);
		
		 $this->Database_Model->update_data("kullanici",$data,$this->input->post("id"));
		
		 $this->session->set_flashdata("sonuc","Güncelleme Başarılı"); //tek yazımlık 
		 redirect(base_url()."home/profilim");
	}
	public function cikis_yap()
	{
	  $this->session->unset_userdata("uye_session");
       redirect(base_url()."home/uyelik");
	}
	public function yeni_uye()
	{
	$query=$this->db->get("ayarlar");//ayarlar tablosunu veritabanına yükle
	   $data["ayar"]=$query->result();
		
		
		$data["menu"]="Home";

		$query=$this->db->get("kategoriler");  
	    $data["kategori"]=$query->result();
		
		
	
		$this->load->view('login',$data);
	
	}
	
	public function siparislerim()
	{    //Login kontorlü
		if(!$this->session->userdata('uye_session'))
		{
			redirect(base_url().'Home/uyelik');
		}
		$musteri_id = $this->session->uye_session["Id"];
		
		$query=$this->db->query("SELECT * FROM siparisler WHERE musteri_id=$musteri_id");//ayarlar tablosunu veritabanına yükle
	    $data["veriler"]=$query->result();
		
		
		$query=$this->db->get("ayarlar");//ayarlar tablosunu veritabanına yükle
	    $data["ayar"]=$query->result();
	    $data["menu"]="Home";
		
	    $query=$this->db->get("kategoriler");
	    $data["kategori"]=$query->result();
		
	  $this->load->view('uye_siparisler',$data);
	 
	}
	public function sepete_ekle($id)
	{  
	if(!$this->session->userdata('uye_session'))
		{
			redirect(base_url().'Home/uyelik');
		}
	$data = array(
		 'musteri_id' => $this->session->uye_session["Id"],
		 'urun_id' => $id,
		 'miktar' => $this->input->post("miktar"),
		
		
		);
		
		 $this->Database_Model->insert_data("sepet",$data);
		
		 $this->session->set_flashdata("sonuc","Urun Sepete Eklendi"); //tek yazımlık 
		 redirect(base_url()."Home/Urun_detay/$id");
	}
	public function Sepetim()
	{ 
	if(!$this->session->userdata('uye_session'))
		{
			redirect(base_url().'Home/uyelik');
		}
	  $musteri_id=$this->session->uye_session["Id"];
		
	   $query=$this->db->get("ayarlar");//ayarlar tablosunu veritabanına yükle
	   $data["ayar"]=$query->result();
	   $data["menu"]="Home";
	   
	   $query=$this->db->get("kategoriler");
	   $data["kategori"]=$query->result();
	   
	   $query=$this->db->query("SELECT * From musteriler WHERE Id=$musteri_id limit 1");
	   $data["musteri"]=$query->result();
	   
	   $musteri_id=$this->session->uye_session["Id"];
		
       $query=$this->db->query("SELECT sepet.*, cicek.Ad as cikadi , cicek.fiyat as cikfiyat,cicek.birim as cikbirim, cicek.resim as cikres FROM sepet
        INNER JOIN cicek 
        ON cicek.id=sepet.urun_id
		WHERE sepet.musteri_id=$musteri_id
		order by cikadi");
		
	   $data["veriler"]=$query->result();
	   $this->load->view('uye_sepet',$data);
	
	}
	public function siparis_tamamla()
	{ if(!$this->session->userdata('uye_session'))
		{
			redirect(base_url().'Home/uyelik');
		}
	  $musteri_id = $this->session->uye_session["Id"];
	  //Banka kartı öddeme tutarı gönderilip onay alınması lazım bu arada
	  
	            $data=array(

                        'adsoy'=>$this->input->post('adsoy'),
                        "adres"=>$this->input->post("adres"),
                        "tel"=>$this->input->post("tel"),
						"sehir"=>$this->input->post("sehir"),
						"tutar"=>$this->input->post("tutar"),
						"musteri_id"=>$musteri_id,
						'ip' => $_SERVER['REMOTE_ADDR']
                           );
			  
				   $siparis_id=$this->Database_Model->insert_data("siparisler",$data);//tume ekleme işlemlerini bu fonksiyon yapacak
					   if($siparis_id){
						   
					   $query=$this->db->query("SELECT sepet.*, cicek.Ad as cikadi , cicek.fiyat as cikfiyat,cicek.birim as cikbirim, cicek.resim as cikres FROM sepet
						INNER JOIN cicek 
						ON cicek.id=sepet.urun_id
						WHERE sepet.musteri_id=$musteri_id
						order by cikadi");
						$veriler=$query->result();
						foreach ($veriler as $rs)
						{
						  $data=array(
							"musteri_id"=>$this->session->uye_session["Id"],
							"siparis_id"=>$siparis_id,
							"urun_id"=>$rs->Id,
							"adi"=>$rs->cikadi,
							"miktar"=>$rs->miktar,
							"tutar"=>$rs->miktar * $rs->cikfiyat,
							"fiyat"=>$rs->cikfiyat
							
							   );
							$this->Database_Model->insert_data("siparis_urunler",$data);
						}
					   }//Urun id if
                   $this->db->query("DELETE FROM sepet WHERE musteri_id=$musteri_id");//online olan müşterinin sepetini boşalt
				  
				  $this->session->set_flashdata("sonuc","Siparisiniz Tamamlanmıştır .Yine Bekleriz"); //tek yazımlık 
				   redirect(base_url()."Home/siparislerim");
				   
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
		 
		
            $this->load->view('siparis_detay',$data);
		   }
	public function sepetsil($id)
	        { 
			$this->db->query("DELETE FROM sepet WHERE Id=$id");
			  redirect(base_url()."Home/sepetim");
			}
		}
		