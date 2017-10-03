<!-- Sidebar -->
    <div id="sidebar">
      <!-- Search -->
      <div class="box search">
        <h2>Arama <span></span></h2>
        <div class="box-content">
          <form action="#" method="post">
          <label>Anahtar Kelime</label>
            <select class="field">
               <?php
			  foreach($yeni as $rs)
			  {
		      ?>
                <option value=""><?=$rs->keywords?></option>
			  <?php
			  }?>
            </select>
            
            <label>Kategori</label>
            <select class="field">
               <?php
			  foreach($kategori as $rs)
			  {
		      ?>
                <option value="<?=$rs->id?>"><?=$rs->adi?></option>
			  <?php
			  }?>
            </select>
            <div class="inline-field">
              <label>Fiyat</label>
              <select class="field small-field">
			  <?php
			  foreach($yeni as $rs)
			  {
		      ?>
                <option value=""><?=$rs->fiyat?></option>
			  <?php
			  }?>
              </select>
              <label>den:</label>
              <select class="field small-field">
                <?php
			  foreach($yeni as $rs)
			  {
		      ?>
                <option value=""><?=$rs->fiyat?></option>
			  <?php
			  }?>
              </select>
            </div>
			<input type="submit"  class="search-submit" value="Ara" />
            
              <a href="<?=base_url()?>Home/iletişim" class="bul">Müşteri Temsilcesi İle İletişime Geç</a> </p>
            
          </form>
        </div>
      </div>
      <!-- End Search -->
      <!-- Categories -->
      <div class="box categories">
        <h2>Kategoriler <span></span></h2>
        <div class="box-content">
		
          <ul>
		   <?php
			  foreach($kategori as $rs)
			  {
		      ?>
                 <li><a href="<?=base_url()?>Home/kategori/<?=$rs->id?>/<?=$rs->adi ?>"> <?=$rs->adi?></a></li>
			  <?php
			  }?>
           
      
          </ul>
        </div>
      </div>
      <!-- End Categories -->
    </div>
    <!-- End Sidebar -->
    <div class="cl">&nbsp;</div>
  </div>
  <!-- End Main -->
  <!-- Side Full -->
  <div class="side-full">
    <!-- More Products -->
    <div class="more-products">
      <div class="more-products-holder">
	  <ul>
	  <?php 
	  foreach($yeni as $rs)
	  {
	  ?>
        
          <li><a href="#"><img size="40" src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" /></a></li>
		  
        
	  <?php
	  }
	  ?>
	  </ul>
	 
      </div>
      <div class="more-nav"> <a href="#" class="prev">previous</a> <a href="#" class="next">next</a> </div>
    </div>
    <!-- End More Products -->
    <!-- Text Cols -->
    
    <!-- End Text Cols -->
  </div>