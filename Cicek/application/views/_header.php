<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
   

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$ayar[0]->adi?>  </title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="description" content="<?=$ayar[0]->aciklama?>">
<meta name="keywords" content="<?=$ayar[0]->keywords?>">

	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="<?=base_url()?>assets/themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="<?=base_url()?>assets/themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="<?=base_url()?>assets/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="<?=base_url()?>assets/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="<?=base_url()?>assets/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>assets/themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>assets/themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>assets/themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">


<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="<?=base_url()?>Home"><img src="<?=base_url()?>assets/themes/images/logo3.jpg" alt="Bootsshop"/></a>
	 <?php
			  $sn=0;
			
	        foreach($ayar as $rs)
          	{   $sn++;
			
         	?>
		<form class="form-inline navbar-search" method="post"  >
		
		<a href="<?=base_url()?>Home/Sepetim"><span class="btn btn-large btn-primary"><i class="icon-shopping-cart icon-white"></i> Sepetim </span> </a> 
   
   <?php
			}
			?>
	</form>
	
	
	
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
		  case "hakkimizda";
		  $hakkimizda='active';
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
	
	
	
	
	
	
    <ul id="topMenu" class="nav pull-right">
	 <li class="<?=$Home?>"><a href="<?=base_url()?>Home">Anasayfa</a></li>
	 <li class="<?=$hakkimizda?>"><a href="<?=base_url()?>Home/hakkimizda">Hakkımızda</a></li>
	 <li class="<?=$iletişim?>"><a href="<?=base_url()?>Home/iletisim">İletişim</a></li>
	 <li class="">
	 <?php 
if(!$this->session->uye_session)
{
	?>

	<a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Giriş Yap</span></a>
	<?php
} else{
?>
<li><a href="<?=base_url()?>Home/uyepanel"><?=$this->session->uye_session["adsoy"]?></a></li>

<?php
}
?>
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Giriş</h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm" action="<?=base_url()?>Home/uyegiris_yap" method="post">
			  <div class="control-group">								
				<input type="text" name="email" id="inputEmail" placeholder="Email">
			  </div>
			  <div class="control-group">
				<input type="password" name="sifre" id="inputPassword" placeholder="Password">
			  </div>
			  <div class="control-group">
				<label class="checkbox">
				<input type="checkbox"> Beni Hatırla</label>
				<a href="<?=base_url()?>Home/yeni_uye">Üye Ol</a>
				
			  </div>
				
			<button type="submit" class="btn btn-success">Giriş</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Kapat</button>
		  </div>
		  </form>	
	</div>
	</li>
    </ul>
  </div>
</div>
</div>
</div>