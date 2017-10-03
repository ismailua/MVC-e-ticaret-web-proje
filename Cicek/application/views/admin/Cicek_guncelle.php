
<?php
     $this->load->view('admin/_header.php');
      $this->load->view('admin/_sidebar.php');
?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
    
      <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cicek Guncelle</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?=base_url()?>/admin/Cicekler/guncelleKaydet/<?=$veri[0]->id?>" method="post">
              <div class="box-body">
			  <div class="form-group">
                  <label for="exampleInputEmail1">Cicek Adı</label>
                  <input type="text" name="Ad" value="<?=$veri[0]->Ad?>" class="form-control"  placeholder=" Enter Kullanıcı Adı">
                </div>
	 			 <div class="controls">
		      <label>Türü:</label><br>
	         	<select name="Tur" >
		       <option value="<?=$veri[0]->Tur?>" ><?=$veri[0]->turadi?></option>
		     <?php 
		     foreach($turu as $rs)
		      {
		    ?>
		  <option value="<?=$rs->id?>"><?=$rs->adi?></option>
		  <?php
		  }
          ?>
		  </select>
	   </div><br>
				<div class="controls">
		 <label>Kategori:</label><br>
		<select name="kategori_id" >
		  <option value="<?=$veri[0]->kategori_id?>" ><?=$veri[0]->katadi?></option>
		  <?php 
		  foreach($kategoriler as $rs)
		  {
		?>
		  <option value="<?=$rs->id?>"><?=$rs->adi?></option>
		  <?php
		  }
          ?>
		  </select>
	   </div>
                
				 
				<div class="form-group">
        
         <label>Adet:</label><br>
        <input class="form-control " name="adet" value="<?=$veri[0]->adet?>" type="text"  placeholder="Adet">
        </div>
		<div class="form-group">
		 <label>Fiyat:</label><br>
        <input class="form-control " name="fiyat" value="<?=$veri[0]->fiyat?>" type="text"  placeholder="Fiyat">
        </div>
		<div class="form-group">
		 <label>Açıklama:</label><br>
        <input class="form-control " name="aciklama" value="<?=$veri[0]->aciklama?>" type="text"  placeholder="Açıklama">
        </div>
		<div class="form-group">
		 <label>Keywords:</label><br>
        <input class="form-control " name="keywords" value="<?=$veri[0]->keywords?>" type="text"  placeholder="Keywords">
        </div>
		<b>Durum:</b>
       <div class="form-group">
        <select name="durum">
		
		<option>onaylı</option>
		<option>beklemede</option>
		</select>
        </div>
		
		<script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
		 <b>Uzun Açıklama:</b><br>
		<textarea name="uzun_aciklama" id="uzun_aciklama"  rows="10" cols="150">
         <?=$veri[0]->uzun_aciklama?>
          </textarea>
		  <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'uzun_aciklama' );
            </script>
        </div>
			   
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn bg-purple btn-flat margin">Guncelle</button>
              </div>
            
          </div>
		  </form>
          <!-- /.box -->
        
       
         

         
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
   $this->load->view('admin/_footer.php');
?>