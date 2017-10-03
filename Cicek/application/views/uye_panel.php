<?php
$this->load->view("_header.php");

?>
<div id="mainBody">
	<div class="container">
	<div class="row">
	
	<div id="sidebar" class="span3">	
	
		<h5 class="title-bg">ÜYE İŞLEMLERİ</h5>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li ><a href="<?=base_url()?>Home/uyepanel"> Profil Bilgilerim</a>
				
			</li>
			<li ><a href="<?=base_url()?>Home/siparislerim"> Siparişlerim </a>
			
			</li>
			<li ><a href="<?=base_url()?>Home/Sepetim">Sepetim</a>
				
			</li>
			<li><a href="products.html">Yorumlarım</a></li>
			<li><a href="products.html">Favori Ürünler</a></li>
			<li><a href="<?=base_url()?>Home/cikis_yap">Çıkış</a></li>
		</ul>
		<br/>
		 
			
	</div>
	<div class="span9">
   
	
	<div class="well">
	
	<form class="form-horizontal" action="<?=base_url()?>home/profil_guncelle" method="post" >
		<h4>Profil Bilgileri</h4>
		
		
		<div class="control-group">
			<label class="control-label" for="inputFname1">İsim Soyisim<sup>*</sup></label>
			<div class="controls">
			  <input type="text" value="<?=$veri2[0]->adsoy?>" id="inputFname1" placeholder="First Name">
			</div>
		 </div>
		
		<div class="control-group">
		<label class="control-label" for="input_email">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" value="<?=$veri2[0]->email?>" id="input_email" placeholder="Email" disabled>
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Sifre<sup>*</sup></label>
		<div class="controls">
		  <input type="password"value="<?=$veri2[0]->sifre?>" id="inputPassword1" placeholder="Password">
		</div>
	  </div>	  
		

	

	
	
		
		<div class="control-group">
			<label class="control-label" for="address">Addres<sup>*</sup></label>
			<div class="controls">
			  <input type="text" value="<?=$veri2[0]->adres?>" id="address" placeholder="Adress"/> 
			</div>
		</div>
		
		
		
		<div class="control-group">
			<label class="control-label" for="mobile">Telefon </label>
			<div class="controls">
			  <input type="text" value="<?=$veri2[0]->tel?>"  name="mobile" id="mobile" placeholder="Mobile Phone"/> 
			</div>
		</div>
		
	<p><sup>*</sup>Zorunlu Alanlar	</p>
	
	<div class="control-group">
			<div class="controls">
				<input type="hidden" name="email_create" value="1">
				<input type="hidden" name="is_new_customer" value="1">
				<input class="btn btn-large btn-success" type="submit" value="Güncelle" />
			</div>
		</div>		
	</form>
</div>

</div>
</div>
</div>
</div>


<?php
$this->load->view("_footer.php");
?>