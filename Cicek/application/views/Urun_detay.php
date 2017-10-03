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
<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					
				</div>
				
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section 
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	
	</div>
	<div class="span4">
	<div class="offerNoteWrapper">
	<h1 class="dotmark">
	
	
	</div>
	</div>
	<div class="span4 alignR">
	
	</div>
</div>
</header>

<!--
Navigation Bar Section 
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		 
		  
		  <div class="nav-collapse">
			<ul class="nav">
			   <li><a href="<?=base_url()?>Home" class="active">Anasayfa</a></li>
       
             <li><a href="#">Hesabim</a></li>
            <li><a href="#">Bize Ulasin</a></li>
           <li><a href="#">Kayit Ol</a></li>
      </ul>
			</ul>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>
			<ul class="nav pull-right">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
				<div class="dropdown-menu">
				<form class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" id="inputPassword" placeholder="Password">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					
				  </div>
				</form>
				</div>
			</li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
<!-- 
Body Section 
-->
	<div class="row">
<div id="sidebar" class="span3">
<div class="well well-small">
	<ul class="nav nav-list>
		<li><a href="#">Category 1</a></li>
            <li><a href="#">Category 2</a></li>
            <li><a href="#">Category 3</a></li>
            <li><a href="#">Category 4</a></li>
            <li><a href="#">Category 5</a></li>
            <li><a href="#">Category 6</a></li>
            <li><a href="#">Category 7</a></li>
            <li><a href="#">Category 8</a></li>
            <li><a href="#">Category 9</a></li>
            <li><a href="#">Category 10</a></li>
            <li><a href="#">Category 11</a></li>
            <li><a href="#">Category 12</a></li>
            <li class="last"><a href="#">Category 13</a></li>
	</ul>
</div>

			  
			
		

	</div>
	<div class="span9">
   
	<div class="well well-small">
	<div class="row-fluid">
			<div class="span5">
			<div id="myCarousel" class="carousel slide cntr">
                <div class="carousel-inner">
                  <div class="item active">
                   <a href="#"> <img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" alt="" style="width:100%"></a>
                  </div>
				  <?php
				  foreach($cicekler as $rs)
				  {
					  ?>
                  <div class="item">
                     <a href="#"> <img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" style="width:100%"></a>
                  </div>
				  <?php
				  }
				  ?>
                  
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">></a>
            </div>
			</div>
			<div class="span7">
				<h3><?=$veri[0]->Ad?></h3>
				<hr class="soft"/>
				
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
					<label class="control-label"><span>Adet:</span></label>
					<div class="controls">
					<input type="number" class="span6" placeholder="1">
					</div>
				  </div>
				
				  <div class="control-group">
					<label class="control-label"><span>Renk:</span></label>
					<div class="controls">
					  <select class="span11">
						  <option>Kırmızı</option>
						  <option>Mor</option>
						  <option>3 Dal Beyaz</option>
						  <option>5 Dal Beyaz</option>
						</select>
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label"><span>Vazo Çeşidi:</span></label>
					<div class="controls">
					  <select class="span11">
						  <option>Seramik</option>
						  <option>Metal</option>
						  <option>Pvc</option>
						  <option>Tahta</option>
						</select></br></br>
						<h3><?=$veri[0]->fiyat?></h3>
				  <p>
				  <p>
				  <button type="submit" class="shopBtn"><span class=" icon-shopping-cart"></span>Sepete Ekle</button>
				</form>
					</div>
				  </div>
				  
			</div>
			</div>
				<hr class="softn clr"/>


            <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Ürün Detayı</a></li>
              <li class=""><a href="#profile" data-toggle="tab">Yorumlar</a></li>
              
                  
                </ul>
              </li>
            </ul>
            <div id="myTabContent" class="tab-content tabWrapper">
            <div class="tab-pane fade active in" id="home">
			  <h4>Urun Bilgisi</h4>
                <table class="table table-striped">
				<tbody>
				<p> Yaklaşık Ürün Boyutu: 55 cm</br>
                Seramik vazo içerisinde 2 dal phalaenopsis orkide</br>
                Orkide; asalet ve kendine güvenin simgesidir.</br>
                Görkemi ve güzelliğiyle büyüleyen, zarafetiyle tüm bakışları üzerine çeviren beyaz orkide şimdi tüm güzelliğini sevdiklerinize sunmaya geliyor.</p>
				</table>
				
			</div>
			
			<label class="control-label"><span><b>Türü:</b>&nbsp<?=$veri[0]->turadi?></span></label>
			
			
		
			<label class="control-label"><span><b>Kategorisi:</b>&nbsp<?=$veri[0]->katadi?></span></label>
				
			<div class="tab-pane fade" id="profile">
			<div class="row-fluid">	  
			<div class="span2">
				<img src="<?=base_url()?>assets/img1/d.jpg" alt="">
			</div>
			
	
			
          
			
			
            </div>

</div>
</div>
</div> <!-- Body wrapper -->
<!-- 
Clients 
-->
