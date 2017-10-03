<?php
$this->load->view('_header.php');
$this->load->view('_sidebar.php');
?>
<!-- Header End====================================================================== -->
<div id="mainBody">
<div class="container">
	<hr class="soften">
<h1>İletişim</h1>
	<hr class="soften"/>	
	<div class="row">
		<div class="span4">
		<h4>İletişim Detayları</h4>
		<p>	
		<?=$veri[0]->iletisim?>
		</p>		
		</div>
			
		
		<div class="span3">
		<h4>Bize Yazın</h4>
			<?php 
		if($this->session->flashdata("sonuc"))
		{  ?>
	     <div class="alert alert-success">
		       <button type="button" class="close" data-dismiss="alert">x</button>
			   <strong>İşlem :</strong><?=$this->session->flashdata("sonuc")?>
			   </div>
			
		<?php
		} ?>
		<!--inputlar boş girilimesin diye-->
	<script>
	function validateForm() {
    var x = document.forms["myForm"]["adsoy"].value;
    if (x == "") {
        alert("Kullanıcı alanı dolu olmalı");
        return false;
    }
	 var x = document.forms["myForm"]["email"].value;
    if (x == "") {
        alert("Email alanı dolu olmalı");
        return false;
    }
	 var x = document.forms["myForm"]["tel"].value;
    if (x == "") {
        alert("Telefon alanı dolu olmalı");
        return false;
    }
	 var x = document.forms["myForm"]["konu"].value;
    if (x == "") {
        alert("Konu alanı dolu olmalı");
        return false;
    }
}</script>
		<form class="form-horizontal" action="<?=base_url()?>Home/mesaj_ekle" method="post">
        <fieldset>
          <div class="control-group">
           
             Kullanıcı Adı: <input type="text" name="adsoy" placeholder="name" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
           Email:   <input type="text" name="email" placeholder="email" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
             Telefon: <input type="text" name="tel" placeholder="subject" class="input-xlarge"/>
          
          </div>
		  
          <div class="control-group">
              <textarea name="mesaj" rows="5" id="textarea" class="input-xlarge"></textarea>
           
          </div>

            <button class="btn btn-large" type="submit">Gönder</button>

        </fieldset>
      </form>
	  
		</div>
		<div class="span9">
	<iframe style="width:100%; height:300; border: 0px" scrolling="no" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=18+California,+Fresno,+CA,+United+States&amp;aq=0&amp;oq=18+California+united+state&amp;sll=39.9589,-120.955336&amp;sspn=0.007114,0.016512&amp;ie=UTF8&amp;hq=&amp;hnear=18,+Fresno,+California+93727,+United+States&amp;t=m&amp;ll=36.732762,-119.695787&amp;spn=0.017197,0.100336&amp;z=14&amp;output=embed"></iframe><br />
	<small><a href="https://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=18+California,+Fresno,+CA,+United+States&amp;aq=0&amp;oq=18+California+united+state&amp;sll=39.9589,-120.955336&amp;sspn=0.007114,0.016512&amp;ie=UTF8&amp;hq=&amp;hnear=18,+Fresno,+California+93727,+United+States&amp;t=m&amp;ll=36.732762,-119.695787&amp;spn=0.017197,0.100336&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small>
	</div>
	</div>
	
	<div class="row">
	
	</div>
</div>
</div>
<?php
$this->load->view('_footer.php');

?>