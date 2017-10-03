
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
      
    
      
        
     <h3> <?=$veri[0]->ad?>&nbsp<?=$veri[0]->soyad?></h3>
   
	   <?php
	   if($veri[0]->resim!=NULL)
	   {?>
         <img height="100" src="<?=base_url()?>uploads/<?=$veri[0]->resim?>">
	   <?php
	   }
         
         ?>
         <form action="<?=base_url()?>admin/kullanicilar/resim_upload/<?=$veri[0]->id?>" method="post" enctype="multipart/form-data">		
         <input type="file" name="resim" size="20"/>
		 <input type="submit" value="upload"/>
		 </form>


      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->