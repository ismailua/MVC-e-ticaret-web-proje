 <!-- Content Wrapper. Contains page content -->
 
 

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mesajlar
        <small>Tablo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Mesajlar</a></li>
       
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
        <h4>Mesaj Listesi</h4>
		<div class="table-responsive">
      <a type="button" class="btn bg-purple btn-flat margin glyphicon glyphicon-plus" href="<?=base_url()?>admin/Mesajlar/ekle">Yeni Mesaj Ekle</a>
                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th><input type="checkbox" id="checkall" /></th>
                   <th>Ad Soyadı</th>
                   <th>Email</th>
				   <th>Telefon</th>
				   <th>Mesaj</th>
				   <th>Tarih</th>
				   <th>IP</th>
                    <th>Durum</th>
					
					<th>Detay</th>
                     <th>Sil</th>
                   </thead>
    <tbody>
	<?php
	foreach($mesaj as $rs)
	{
	?>
    
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td><?=$rs->adsoy?></td>
    <td><?=$rs->email?></td>
    <td><?=$rs->tel?></td>
	   <td><?=$rs->mesaj?></td>
    <td><?=$rs->tarih?></td>
	   
	   <td><?=$rs->IP?></td>
	

	
    
	<td><?=$rs->durum?></td>
	
	
    <td><p data-placement="top" data-toggle="tooltip" title="Detay"><a href="<?=base_url()?>admin/Mesajlar/detay/<?=$rs->id?>" class="btn btn-primary btn-xs" data-title="Detay" data-toggle="modal" ><span class="glyphicon glyphicon-pencil"></span></a></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><a href="<?=base_url()?>admin/Mesajlar/sil/<?=$rs->id?>"  onclick="return confirm('Silinecek Emin misin?');" class="btn btn-danger btn-xs" data-title="Delete"  data-target="#delete" >
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

 <form role="form" action="<?=base_url()?>/admin/Mesajlar/guncelleKaydet/<?=$veri[0]->id?>" method="post">
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
        <a href="<?=base_url()?>/admin/Mesajlar/sil/<?=$veri[0]->id?>" type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Evet</a>
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
  