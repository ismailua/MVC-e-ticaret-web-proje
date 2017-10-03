<?php


class Login extends CI_Controller {
	
	//base_url için sabitler
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation',"session");
		$this->load->library("session");
		$this->load->model("Admin_Model");
		$this->load->database();
		
		
		
	}
	
	
	public function index()
	{//sıra önemli
		$this->load->view('admin/login_formu');
	}
	public function login_ol()
	{//sıra önemli
	/*
	$this->form_validation->set_rules('email','email','trim|required|xss_clean');
	$this->form_validation->set_rules('password','password','trim|required|xss_clean');
	
	 if($this->form_validation->run()==FALSE){
		 $this->session->set_flashdata("login_hata","Giris verileri uygun değil");
		 $this->load->view('admin/login_formu');
	 }
      else 
	  {
		  */
	
		$email=$this->input->post('email',TRUE);
		$sifre=$this->input->post('password',TRUE);
		//CONFİG DE XSS TRUE YAPTIK hacklenmesin diye
		$result=$this->Admin_Model->login($email,$sifre);
		
	  if($result)
	  {
		  //kullanıcı var ise bilgileri diziye aktarr
		  $sess_array=array(
		  'id'=>$result[0]->id,
		  'ad'=>$result[0]->ad,
		  'soyad'=>$result[0]->soyad,
		  'sifre'=>$result[0]->sifre,
		  'email'=>$result[0]->email,
		   'resim'=>$result[0]->resim,
		 
		  );
		  //dizi verileri codegniter session kütüphanesine aktarılıyor
		  $this->session->set_userdata('logged_in',$sess_array);//sess_array=oturum dizi logged_in=oturum_data
		  
		  redirect('/admin/Home/');
	  }
	  else
	  {
		  $this->session->set_flashdata("login_hata","Geçersiz Email yada Sifre");
	      $this->load->view('admin/login_formu');
	  }
		  
	  
		  
	 //$query=$this->db->query("SELECT *FROM kullanici WHERE ")
	}

	
	public function log_out()
	{//sıra önemli
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		$this->load->view('admin/login_formu');
	}

}