
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
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Anasayfa</a></li>
       
      </ol>
    
      <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Kullanıcı Ekle</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?=base_url()?>admin/Kullanicilar/eklekaydet" method="post">
              <div class="box-body">
			  <div class="form-group">
                  <label for="exampleInputEmail1">Kullanıcı Adı</label>
                  <input type="text" name="ad" class="form-control"  placeholder=" Enter Kullanıcı Adı">
                </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Soyadı</label>
                  <input type="text" name="soyad" class="form-control"  placeholder="Enter Soyadı">
                </div>
				 <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="sifre" class="form-control"  placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control"  placeholder="Enter email">
                </div>
               
				 
				 <div class="form-group">
                  <label>Durum</label>
                  <select class="form-control" name="durum">
                    <option>onayli</option>
                    <option>beklemede</option>
                    <option>engelli</option>
                  </select>
              </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">
				  
               </div>
			   
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn bg-purple btn-flat margin">Kullanıcı Ekle</button>
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