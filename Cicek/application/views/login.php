<?php
$this->load->view("_header.php");
$this->load->view("_sidebar.php");
?>
<div id="mainBody">
	<div class="container">
	<div class="row">
	<div class="span9">
  
	<div class="row">
		<div class="span4">
			<div class="well">
			<h5>Yeni Hesap Olustur</h5><br/>
			
			<form  action="<?=base_url()?>Home/eklekaydet" method="post">
			 <div class="control-group">
			<label class="control-label" for="inputFname1">Isim Soyisim<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="adsoy" id="inputFname1" placeholder="First Name">
			</div>
		 </div>
		
		<div class="control-group">
		<label class="control-label" for="input_email">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" name="email" id="input_email" placeholder="Email" >
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Sifre<sup>*</sup></label>
		<div class="controls">
		  <input type="password" name="sifre" id="inputPassword1" placeholder="Password">
		</div>
	  </div>	  
		<div class="control-group">
			<label class="control-label" for="address">Addres<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="adres" id="address" placeholder="Adress"/> 
			</div>
		</div>
		
		
		
		<div class="control-group">
			<label class="control-label" for="mobile">Telefon </label>
			<div class="controls">
			  <input type="text"   name="mobile" id="mobile" placeholder="Mobile Phone"/> 
			</div>
		</div>
		
	<p><sup>*</sup>Zorunlu Alanlar	</p>
	
			  <div class="controls">
			  <button type="submit" class="btn block">Kaydet</button>
			  </div>
			</form>
		</div>
		</div>
		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h5>Zaten Uye misin?</h5>
			<form action="<?=base_url()?>Home/uyegiris_yap" method="post">
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Email</label>
				<div class="controls">
				  <input class="span3"  type="text" id="inputEmail1" placeholder="Email">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword1">Sifre</label>
				<div class="controls">
				  <input type="password" class="span3"  id="inputPassword1" placeholder="Password">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn">Giris</button> <a href="forgetpass.html">Sifremi Unuttum?</a>
				</div>
			  </div>
			</form>
		</div>
		</div>
	</div>	
	
</div>
</div></div>
</div>
<?php
$this->load->view("_footer.php");
?>