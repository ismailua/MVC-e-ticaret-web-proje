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
	
    <link rel="shortcut icon" href="<?=base_url()?>assets/ico1/favicon.ico">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css" type="text/css" media="all" />
<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
<script src="<?=base_url()?>assets/js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/jquery-func.js" type="text/javascript"></script>
  </head>
<body>
<!-- 
	Upper Header Section 
-->

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


	<div class="row">

	<div id="sidebar" class="span3">

    

		

	
	</div>
	
	<div class="span12">
   
	<div class="well well-small">
	<div class="row-fluid">
			
			
			
	<div  class="span4">
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
           
             Konu: <input type="text" name="konu" placeholder="subject" class="input-xlarge"/>
          
          </div>
          <div class="control-group">
              <textarea rows="5" id="textarea" class="input-xlarge"></textarea>
           
          </div>

            <button class="btn btn-large" type="submit">Gönder</button>

        </fieldset>
      </form>
		</div>
		</div>


            
              </li>
            </ul>
            
</div>
</div>
</div> <!-- Body wrapper -->
<!-- 
Clients 
-->
</div>