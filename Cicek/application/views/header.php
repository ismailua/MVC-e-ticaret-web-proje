<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?=$veri[0]->adi?></title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="description" content="<?=$veri[0]->aciklama?>">
<meta name="keywords" content="<?=$veri[0]->keywords?>">



<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css" type="text/css" media="all" />
<!--[if lte IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
<script src="<?=base_url()?>assets/js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/jquery-func.js" type="text/javascript"></script>
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
	 $hakkimizda="";
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
       
        
		<li  class="<?=$hakkimizda?>"><a href="<?=base_url()?>Home/Hakkımızda">Hakkımızda</a></li>
        
		<li class="<?=$iletişim?>"><a href="<?=base_url()?>Home/iletisim">İletişim</a></li>
        <li  class="<?=$kayit_ol?>"><a href="<?=base_url()?>Home/kayit_ol">Kayıt Ol</a></li>
      </ul>
    </div>
    <!-- End Navigation -->
  </div>