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
			<li ><a href="<?=base_url()?>Home/sepetim">Sepetim</a>
				
			</li>
			<li><a href="products.html">Yorumlarım</a></li>
			<li><a href="products.html">Favori Ürünler</a></li>
			<li><a href="<?=base_url()?>Home/cikis_yap">Çıkış</a></li>
		</ul>
		<br/>
		 
			
	</div>
	<div class="span9">
   
	
	<div class="well">
	<hr>
			<h3>Yapılan Siparis Bilgileri</h3>
			
			<table class="table table-bordered">
              <thead>
                <tr>
                  <th>Adı Soyadı</th>
				  <td><?=$siparis[0]->adsoy?></td>
				  </tr>
				  <tr>
                  <th>Adres</th>
				  <td><?=$siparis[0]->adres?></td>
				  </tr>
				  <tr>
                  <th>Telefon</th>
				  <td><?=$siparis[0]->tel?></td>
				  </tr>
				  <tr>
                  <th>Sehir</th>
				  <td><?=$siparis[0]->sehir?></td>
				  </tr>
				  <tr>
                  <th>Kargo Firma</th>
				  <td><?=$siparis[0]->kargofirma?></td>
				  </tr>
				  <tr>
                  <th>Kargo No</th>
				  <td><?=$siparis[0]->kargono?></td>
				  </tr>
                  
				   
                  
				</tr>
              </thead>
			    
            </table>
			<hr>
	<h5 class="title-bg">Siparise Ait Ürünler</h5>
     <table class="table table-bordered">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Tarih</th>
				  <th>Tutar</th>
                  <th>Durum</th>
				   <th>Detay</th>
				   
                  
				</tr>
              </thead>
			     <tbody>
            
			  <?php
			  $sn=0;
			  $top=0;
	        foreach($urunler as $rs)
          	{   $sn++;
				$tutar=0;
				
         	?>
    
                <tr>
				<td><?=$sn?></td>
                
                <td><?=$rs->tarih?></td> 
				
                <td> <?=$rs->tutar?> TL</td>
                <td><?=$rs->durum?></td> 
				
              <td><button class="btn btn-danger" type="button"><a href="<?=base_url()?>Home/siparis_detay/<?=$rs->Id?>"><i class="icon-search icon-red"></i></a></button></td>
                </tr>
				<?php
  
	}
  ?>
    
				</tbody>
            </table>
			
		
		
		
</div>
</div>
</div>
</div>


<?php
$this->load->view("_footer.php");
?>