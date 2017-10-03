
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
              <h3 class="box-title">Musteri Guncelle</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <form role="form" action="<?=base_url()?>/admin/Musteriler/guncelleKaydet/<?=$veri[0]->Id?>" method="post">
              <div class="box-body">
			  <div class="form-group">
                  <label><b>Adı Soyadı:</label>
		  <div class="form-group">
		 
        <input class="form-control " name="adsoy" value="<?=$veri[0]->adsoy?>" type="text" placeholder="Kullanıcı adı">
        </div>
          <div class="form-group">
		  <label><b>Email:</label>
        <input class="form-control " name="email" value="<?=$veri[0]->email?>" type="text" placeholder="Kullanıcı adı">
        </div>
        <div class="form-group">
         <label><b>Sifre:</label>
        <input class="form-control "  name="sifre" value="<?=$veri[0]->sifre?>" type="text"  placeholder="Soyad">
        </div>
		<div class="form-group">
         <label><b>Adres:</label>
        <input class="form-control " name="adres" type="text" value="<?=$veri[0]->adres?>" placeholder="Sifre">
        </div>
		<div class="form-group">
         <label><b>Aciklama:</label>
        <input class="form-control " name="aciklama" type="text" value="<?=$veri[0]->aciklama?>" placeholder="Sifre">
        </div>
		
		<div class="form-group">
                  <label>Durum</label>
                  <select class="form-control" name="durum">
                    <option>onayli</option>
                    <option>beklemede</option>
                    <option>engelli</option>
                  </select>
              </div>
               
		
    
        
        </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn bg-purple btn-flat margin">Guncelle</button>
              </div>
            
          </div>
		  </form>
         

         
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
   $this->load->view('admin/_footer.php');
?>