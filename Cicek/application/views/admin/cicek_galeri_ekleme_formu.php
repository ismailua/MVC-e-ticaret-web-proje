
<?php
     $this->load->view('admin/_header.php');
      $this->load->view('admin/_sidebar.php');
?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Anasayfa
        <small>Ne alsam?</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Anasayfa</a></li>
        <li class="active">Resim Galerisi Ekleme Ekleme</li>
      </ol>
    
      
        
     <h3> <?=$veri[0]->Ad?></h3>
	   <?php
	   if($veri[0]->resim!=NULL)
	   {?>
         <img height="100" src="<?=base_url()?>uploads/<?=$veri[0]->resim?>">
	   <?php
	   }
         
         ?>

		 <form action="<?=base_url()?>admin/cicekler/resim_galeri_upload/<?=$veri[0]->id?>" method="post" enctype="multipart/form-data">		
         <input type="file" name="resim" size="20" onchange="this.form.submit();"/>
		
		 </form>
		 
		 <div class="container">
       <div id="main_area">
        <!-- Slider -->
        <div class="row">
            <div class="col-sm-6" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                   
         <?php
		  foreach ($cicekler as $rs)
		  {
			  ?>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-1"><img src="<?=base_url()?>uploads/<?=$rs->resim?>"></img></a>
                    </li>
			
	    <?php
		  
		  }
		 ?>
			  
		 </ul>
		 </div>
		  
		

      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
   $this->load->view('admin/footer.php');
?>