 <!-- Content Wrapper. Contains page content -->
 
 

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cicekler
        <small>Tablo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Cicekler</a></li>
        <li class="active">Cicek Öneri</li>
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
        <h4>Cicek Listesi</h4>
		<div class="table-responsive">
      <a type="button" class="btn bg-purple btn-flat margin glyphicon glyphicon-plus" href="<?=base_url()?>admin/Cicekler/ekle">Yeni Cicek Ekle</a>
                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th><input type="checkbox" id="checkall" /></th>
                   <th>Cicek Ad</th>
                   <th>Türü</th>
                   <th>Adet</th>
                   <th>Fiyat</th>
				    <th>Kategori</th>
                    <th>Durum</th>
		
					<th>Resim</th>
					
					<th>Galeri</th>
					<th>Uzun Açıklama</th>
					<th>Düzenle</th>
                     <th>Sil</th>
                   </thead>
    <tbody>
	<?php
	foreach($veri as $rs)
	{
	?>
    
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
	  
	<td><?=$rs->Ad?></td>
    <td><?=$rs->turadi?></td>
    <td><?=$rs->adet?></td>
	<td><?=$rs->fiyat?></td>
	<td><?=$rs->katadi?></td>
	
	<td><?=$rs->durum?></td>
	<td>
	<a href="<?=base_url()?>/admin/cicekler/resim_ekle/<?=$rs->id?>" >
	<?php 
	if($rs->resim==NULL)
		
	
	{?>
	    Resim Ekle
	
	<?php
	}else
	{?>
   <img height="40" src="<?=base_url()?>uploads/<?=$rs->resim?>">
   <?php
	}
	?>
</a>
	
	
	
	</td>
	
  
	 
	
	
	
	
	
    
	<td><a href="<?=base_url()?>/admin/Cicekler/resim_galeri_ekle/<?=$rs->id?>" ><img height="40" src=" <?=base_url()?>assets/admin/img/img.png" ></a></td>
	<td><?=$rs->uzun_aciklama?></td>
    <td><a href="<?=base_url()?>admin/Cicekler/edit/<?=$rs->id?>" class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"  ><span class="glyphicon glyphicon-pencil"></span></a></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><a href="<?=base_url()?>admin/Cicekler/sil/<?=$rs->id?>" onclick="return confirm('Silinecek Emin misin?');" class="btn btn-danger btn-xs" data-title="Delete"  data-target="#delete" >
	<span class="glyphicon glyphicon-trash"></span></a></p></td>
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

 
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
   <!-- <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Silme İşlemi</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Silmek istegiğinzden emin misiniz?</div>
       
      </div>
        <div class="modal-footer ">
        <a href="<?=base_url()?>/admin/Cicekler/sil/<?=$veri[0]->id?>" type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</a>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>-->
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
  