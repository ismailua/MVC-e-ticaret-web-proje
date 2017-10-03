<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>e-Cicek</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$veri[0]->aciklama?>">
    <meta name="keywords" content="<?=$veri[0]->keywords?>">
    <!-- Bootstrap styles -->
    <link href="<?=base_url()?>assets/css1/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="<?=base_url()?>assets/style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="<?=base_url()?>assets/font-awesome1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css" type="text/css" media="all" />
<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
<script src="<?=base_url()?>assets/js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/jquery-func.js" type="text/javascript"></script>
		<!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/ico1/favicon.ico">
  </head>
<body>




<!-- Shell -->
<div class="shell">
  <!-- Header -->
  <div id="header">
    <h1 id="logo"><a href="<?=base_url()?>Home">E-Cicek</a></h1>
    <!-- Cart -->
    <div id="cart"> <a href="#" class="cart-link">Sepetin</a>
      <div class="cl">&nbsp;</div>
      <span>Articles: <strong>4</strong></span> &nbsp;&nbsp; <span>Cost: <strong>$250.99</strong></span> </div>
    <!-- End Cart -->
    <!-- Navigation -->
    <div id="navigation">
     <?php
	 $Home="";
	 $kampanyalar="";
	 $hakkımızda="";
	 $bize_yazin="";
	 $iletişim="";
	 $kayit_ol="";
	 
	 
	 
	 switch($menu)
	 {
		 case "Home";
		  $Home='active';
		  break;
		  case "kampanyalar";
		  $kampanyalar='active';
		  break;
		  case "hakkımızda";
		  $hakkımızda='active';
		  break;
		  case "bize_yazin";
		    $bize_yazin='active';
			break;
		case "iletişim";
		 $iletişim='active';
		 break;
		   case "kayit_ol";
		  $kayit_ol='active';
		  break;
	 }
	
	?>
      <ul>
        <li class="<?=$Home?>"><a href="<?=base_url()?>Home" >Anasayfa</a></li>
       
        <li  class="<?=$kampanyalar?>"><a href="<?=base_url()?>Home/kampanyalar">Kampanyalar</a></li>
		<li  class="<?=$hakkımızda?>"><a href="<?=base_url()?>Home/hakkımızda">Hakkımızda</a></li>
        <li  class="<?=$bize_yazin?>"><a href="<?=base_url()?>Home/bize_yazin">Bize Ulaşın</a></li>
		<li class="<?=$iletişim?>"><a href="<?=base_url()?>Home/iletisim">İletişim</a></li>
        <li  class="<?=$kayit_ol?>"><a href="<?=base_url()?>Home/kayit_ol">Kayıt Ol</a></li>
      </ul>
    </div>
    <!-- End Navigation -->
  </div>
<!-- 
Body Section 
-->
	<div class="row">
<div id="sidebar" class="span3">

			  
			
		

	</div>
	<div class="span12">
   
	<div class="well well-small">
	<div class="row-fluid">
			
			
                
<div class="container">
	
	<h1>İletişim</h1>
	
	<div class="span9">
		<div class="span7">
		<h4>İletişim Detayları</h4>
		<p>	
			<?=$veri[0]->iletisim?>
		</p>		
		</div>
		
			

		
		
	
		<div >
		
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
		</div>
	
	<div>
	<div class="span11">
	<iframe style="width:100%; height:300; border: 0px" scrolling="no" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=18+California,+Fresno,+CA,+United+States&amp;aq=0&amp;oq=18+California+united+state&amp;sll=39.9589,-120.955336&amp;sspn=0.007114,0.016512&amp;ie=UTF8&amp;hq=&amp;hnear=18,+Fresno,+California+93727,+United+States&amp;t=m&amp;ll=36.732762,-119.695787&amp;spn=0.017197,0.100336&amp;z=14&amp;output=embed"></iframe><br />
	<small><a href="https://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=18+California,+Fresno,+CA,+United+States&amp;aq=0&amp;oq=18+California+united+state&amp;sll=39.9589,-120.955336&amp;sspn=0.007114,0.016512&amp;ie=UTF8&amp;hq=&amp;hnear=18,+Fresno,+California+93727,+United+States&amp;t=m&amp;ll=36.732762,-119.695787&amp;spn=0.017197,0.100336&amp;z=14" style="color:#0000FF;text-align:left">Haritayı Büyüt</a></small>
	</div>
	</div>
</div>

            
               
            </div>
			</div>
			
			</div>
				


       
        
  </div>
				  
</div> <!-- Body wrapper -->
<!-- 
Clients 
-->
