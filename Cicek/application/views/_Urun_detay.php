<?php
$this->load->view("_header.php");
$this->load->view("_sidebar.php");
?>

	<div id="mainBody">
	<div class="container">
	<div class="row">

<!-- Sidebar end=============================================== -->
	<div class="span9">
  	
	<div class="row">	  
			<div id="gallery" class="span3">
            <a href="<?=base_url()?>uploads/<?=$cicek[0]->resim?> " title="<?=$cicek[0]->Ad?> ">
				<img  src="<?=base_url()?>uploads/<?=$cicek[0]->resim?>" style="width:100%" alt="<?=$cicek[0]->Ad?> "/>
            </a>
			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
				   <?php
				  foreach($cicekler as $rs)
				  {
					  ?>
                   <a href="<?=base_url()?>uploads/<?=$rs->resim?>"> <img style="width:29%" src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""/></a>
                    <?php
				  }
				  ?>
                  
                  </div>
                  <div class="item">
				    <?php
				  foreach($cicekler as $rs)
				  {
					  ?>
                    <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""/></a>
                    <?php
				  }
				  ?>
                  
                 
                  </div>
                </div>
              <!--  
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a> 
			  -->
              </div>
			  
			 <div class="btn-toolbar">
			  <div class="btn-group">
				<span class="btn"><i class="icon-envelope"></i></span>
				<span class="btn" ><i class="icon-print"></i></span>
				<span class="btn" ><i class="icon-zoom-in"></i></span>
				<span class="btn" ><i class="icon-star"></i></span>
				<span class="btn" ><i class=" icon-thumbs-up"></i></span>
				<span class="btn" ><i class="icon-thumbs-down"></i></span>
			  </div>
			</div>
			</div>
			<div class="span6">
			<?php 
		if($this->session->flashdata("sonuc"))
		{  ?>
	     <div class="alert alert-success">
		       <button type="button" class="close" data-dismiss="alert">x</button>
			   <strong>İşlem :</strong><?=$this->session->flashdata("sonuc")?>
			   </div>
			
		<?php
		} ?>
				<h3><?=$cicek[0]->Ad?> </h3>
				
				<hr class="soft"/>
				<form class="form-horizontal qtyFrm" action="<?=base_url()?>Home/sepete_ekle/<?=$cicek[0]->id?>" method="post">
				  <div class="control-group">
					<label class="control-label"><span><?=$cicek[0]->fiyat?> </span></label>
					<div class="controls">
					Adet:<input type="number" name="miktar" class="span1" />
					  <button type="submit"  class="btn btn-large btn-primary pull-right"> Sepete Ekle <i class=" icon-shopping-cart"></i></button>
					</div>
				  </div>
				</form>
				
				<hr class="soft"/>
				<h4>Stokta <?=$cicek[0]->adet?> Tane Var</h4>
				
				<hr class="soft clr"/>
				<p>
				<?=$cicek[0]->aciklama?> 
				
				</p>
				
				<br class="clr"/>
			<a href="#" name="detail"></a>
			<hr class="soft"/>
			</div>
			
			<div class="span9">
            <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Urun Detay</a></li>
              <li><a href="#profile" data-toggle="tab">Bu Urunlere Baktınız Mı ?</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="home">
			  <h4>Urun Bilgi</h4>
                <table class="table table-bordered">
				<tbody>
				<tr class="techSpecRow"><th colspan="2">Urun Detay</th></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Kategorisi: </td><td class="techSpecTD2"><?=$veri[0]->turadi?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Turu:</td><td class="techSpecTD2"><?=$veri[0]->katadi?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Fiyat:</td><td class="techSpecTD2"><?=$veri[0]->fiyat?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Adet:</td><td class="techSpecTD2"><?=$veri[0]->adet?></td></tr>
				
				
				</tbody>
				</table>
				
				<h5>Özellikler</h5>
				<p>
				<p> Yaklaşık Ürün Boyutu: 55 cm</br>
                Seramik vazo içerisinde 2 dal phalaenopsis orkide</br>
                Orkide; asalet ve kendine güvenin simgesidir.</br>
                Görkemi ve güzelliğiyle büyüleyen, zarafetiyle tüm bakışları üzerine çeviren beyaz orkide şimdi tüm güzelliğini sevdiklerinize sunmaya geliyor.</p>
				</p>
              </div>
			  <div class="tab-pane fade" id="profile">
		
		<div class="tab-pane active" id="blockView">
				<ul class="thumbnails">
				  	  	<?php
		foreach($denek as $rs)
		{
		?>
		
			
		
				<li class="span3">
				  <div class="thumbnail">
					<a  href=""><img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""/></a>
					<div class="caption">
					  <h5><?=$rs->Ad?></h5>
					  <p> 
						<?=$rs->aciklama?>
					  </p>
					 
					  <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Sepet<i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?=$rs->fiyat?></a></h4>
					</div>
				  </div>
				</li>
				
						   <?php
		}
		?>
				
			
				
					 </div>

          </div>

	</div>
</div>
</div> </div>
</div>
<?php
$this->load->view("_footer.php");
?>