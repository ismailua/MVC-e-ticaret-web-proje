
<?php
     $this->load->view('admin/_header.php');
      $this->load->view('admin/_sidebar.php');
?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
<form role="form" action="<?=base_url()?>/admin/Cicekler/eklekaydet/" method="post">
<div  >
      <div >
    <div >
          <div >
        
        <h4 class="modal-title custom_align" id="Heading">Cicek Ekle</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " name="Ad"  type="text" placeholder="Cicek Adı">
        </div>
        <div class="form-group">
        
        <input class="form-control "  name="Tur" type="text"  placeholder="Türü">
        </div>
		<div class="form-group">
        
        <input class="form-control "  name="kategori_id" type="text"  placeholder="Kategori_id">
        </div>
		
		<div class="form-group">
        
        <input class="form-control " name="adet" type="text"  placeholder="Adet">
        </div>
		<div class="form-group">
        <input class="form-control " name="fiyat" type="text"  placeholder="Fiyat">
        </div>
		<div class="form-group">
		  <input class="form-control " name="aciklama" type="text"  placeholder="Aciklama">
        </div>
		<div class="form-group">
        <input class="form-control " name="keywords" type="text"  placeholder="Keywords">
        </div>
		 <div class="form-group">
                  <label>Select</label>
                  <select class="form-control" name="durum">
                    <option>onayli</option>
                    <option>beklemede</option>
                    <option>engelli</option>
                  </select>
              </div>
       
      
		<script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
		 <b>Uzun Açıklama:</b><br>
		<textarea name="uzun_aciklama" id="uzun_aciklama"  rows="10" cols="150">
         
          </textarea>
		  <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'uzun_aciklama' );
            </script>
			
	  
      </div>
	  
	  
	  
          <div class="modal-footer ">
        <button   href="<?=base_url()?>admin/Cicekler/eklekaydet/" ><span class="glyphicon glyphicon-ok-sign" ></span>Kaydet</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    </form>
    
    
  
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
  
  <?php
   $this->load->view('admin/_footer.php');
?>