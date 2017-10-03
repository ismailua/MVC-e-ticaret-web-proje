 <!-- Content Wrapper. Contains page content -->
 
 

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Siparisler
        <small>Tablo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Yeni Siparisler</a></li>
       
      </ol>
    </section>
	<!--hep uyarı mesajı durmasın diye-->
	<?php if ($this->session->flashdata("sonuc"))
	{?>
	 <div class="callout callout-info">
                <h4>İşlem:</h4><?=$this->session->flashdata("sonuc")?>
                
              </div>
	<?php }?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>




                  
<div class="container">
	<div class="row">
		
        
        <div class="col-md-11">
        <h4>Siparis Detay</h4>
		<?php if ($this->session->flashdata("sonuc"))
	{?>
	 <div class="callout callout-info">
                <h4>İşlem:</h4><?=$this->session->flashdata("sonuc")?>
                
              </div>
	<?php }?>
		<div class="table-responsive">
    <form action="<?=base_url()?>admin/Siparisler/guncelle/<?=$siparis[0]->Id?>" method="post">
                
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
				  <td><input type="text" name="adsoy" value="<?=$siparis[0]->kargofirma?>" /></td>
				  </tr>
				  <tr>
                  <th>Kargo No</th>
				  <td><input type="text" name="kargo" value="<?=$siparis[0]->kargono?>" /></td>
				  </tr>
                  
				    <tr>
                  <th>Durumu</th>
				  <td>
				  <select name="durum">
				  <option><?=$siparis[0]->durum?> </option>
				  <option>Onaylandı </option>
				  <option> Kargoda</option>
				  <option>Tamamlandı </option>
				  </select>
				  <?=$siparis[0]->kargono?></td>
				  </tr>
                   <tr>
                  <th>Siparis Notu</th>
				  <td><textarea class="span6"  name="admin_aciklama"></textarea></td>
				  </tr>
                  <tr>
                  <th></th>
				<td> <button  class="btn btn-warning btn-lg" style="width: 20%;"><span class="glyphicon glyphicon-ok-sign"></span>Güncelle</button></td>
				  </tr>
                  
				</tr>
				</form>
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
			
		
		

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>
                
            </div>
            
        </div>
	</div>
</div>

 <form role="form" action="<?=base_url()?>/admin/Kullanicilar/guncelleKaydet/<?=$veri[0]->id?>" method="post">
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Kullanici Düzenle</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " name="ad" value="<?=$veri[0]->ad?>" type="text" placeholder="Kullanıcı adı">
        </div>
        <div class="form-group">
        
        <input class="form-control "  name="soyad" value="<?=$veri[0]->soyad?>" type="text"  placeholder="Soyad">
        </div>
		<div class="form-group">
        
        <input class="form-control " name="sifre" type="text" value="<?=$veri[0]->sifre?>" placeholder="Sifre">
        </div>
		
       <div class="form-group">
        
        <input class="form-control " name="email" type="text" value="<?=$veri[0]->email?>" placeholder="Email">
        </div>
        
        </div>
          <div class="modal-footer ">
        <button  href="<?=base_url()?>/admin/Cicekler/guncelleKaydet/" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Güncelle</button>
      </div>
        </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    </form>
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Silme İşlemi</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Silmek istegiğinzden emin misiniz?</div>
       
      </div>
        <div class="modal-footer ">
        <a href="<?=base_url()?>/admin/Kullanicilar/sil/<?=$veri[0]->id?>" type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Evet</a>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Hayır</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
             
                <!-- /.attachment -->
              </div>
              <!-- /.item -->
              <!-- chat item -->
             

         
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  