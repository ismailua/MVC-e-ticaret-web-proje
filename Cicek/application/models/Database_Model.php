<?php
class Database_Model extends CI_Model{
	
	 function __construct() {
		 
		 parent::__construct();
		 
	 }
	 public function insert_data($table,$data)
	 {
		 $this->db->insert($table,$data);
		 return $this->db->insert_id();//true false değeri döndürür
	 
	 
	 }
	 public function login($tablo,$email,$sifre)
	 {
		// echo $email.$sifre;
		 
		 $this->db->select('*');
		 $this->db->from($tablo);
		 $this->db->where('email',$email);
		 $this->db->where('sifre',$sifre);
		 
		 $this->db->limit(1);
		 
		 $query=$this->db->get();
		 
		 if($query->num_rows()==1)
		 {
			 return $query->result();
		 }
		 else{
		 return false;
		 }
		 
	 
	 }
	  public function update_data($table,$data,$id)
	 {
		 $this->db->where("id",$id);
		  $this->db->update($table,$data);
		 return true;
	 }
	 public function get_urun($id)
	 {
		 $sql="SELECT turu.adi as turadi, kategoriler.adi as katadi ,cicek.* FROM cicek
        LEFT JOIN turu
        ON cicek.Tur=turu.id
        LEFT JOIN kategoriler
        ON cicek.kategori_id=kategoriler.id
		WHERE cicek.id=$id";
		 
		 $query=$this->db->query($sql);
		 
		 if($query->num_rows()==1)
		 {
			 return $query->result();
		 }
		 else{
		 return false;
		 }
		 
}
 public function get_kategori($id)
	 {
		 $sql="SELECT turu.adi as turadi, kategoriler.adi as katadi ,cicek.* FROM cicek
        LEFT JOIN turu
        ON cicek.Tur=turu.id
        LEFT JOIN kategoriler
        ON cicek.kategori_id=kategoriler.id
		WHERE cicek.kategori_id=$id"
		
		;
		 
		 $query=$this->db->query($sql);
		 
		 if($query->num_rows()==1)
		 {
			 return $query->result();
		 }
		 else{
		 return false;
		 }
		 
}
}