<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->

  
     
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
       <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ayarlar</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?=base_url()?>admin/Home/ayarguncelle/<?=$veriler[0]->id?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Site Adı</label>
                  <input  class="form-control" name="adi"  placeholder="Enter email"
              value=" <?=$veriler[0]->adi?>">
			   </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Adres</label>
                  <input name="adres" class="form-control"  placeholder="Enter email"
                   value="  <?=$veriler[0]->adres?>">
			   </div>
			    <div class="form-group">
                  <label for="exampleInputEmail1">Sehir</label>
                  <input name="sehir" class="form-control"  placeholder="Enter email"
                   value="  <?=$veriler[0]->sehir?>">
			   </div>
			    <div class="form-group">
                  <label for="exampleInputEmail1">Telefon</label>
                  <input name="tel" class="form-control"  placeholder="Enter email"
                   value="  <?=$veriler[0]->tel?>">
			   </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Keywords</label>
                  <input name="keywords" class="form-control"  placeholder="Enter email"
                   value="  <?=$veriler[0]->keywords?>">
			   </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Smtp Server</label>
                  <input name="smtpserver" class="form-control"  placeholder="Enter email"
                value="  <?=$veriler[0]->smtpserver?>">
				</div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Smtp Email</label>
                  <input name="smtpemail" class="form-control"  placeholder="Enter email"
              value="  <?=$veriler[0]->smtpemail?>">
			  </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">Smtp Sifre</label>
                  <input name="password" class="form-control"  placeholder="Password"
                value="  <?=$veriler[0]->password?>">
				</div>
                 <label for="exampleInputEmail1">İletişim Sayfası</label>
				<script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
		 
		    <textarea name="iletisim" id="iletisim"  rows="10" cols="150">
                  <?=$veriler[0]->iletisim?>
          </textarea>
		  <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'iletisim' );
            </script>
        </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Güncelle</button>
              </div>
            </form>
          </div>
        
     
     </div>
	 
	 </div>
    </section>

   
         

         
             
  <!-- /.content-wrapper -->
  