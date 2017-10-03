<div class="shell">	
    
    <div id="main">
    <div class="cl">&nbsp;</div>

	
	
    
	<div class="products">
        <div class="cl">&nbsp;</div>
        <ul>
      
		<?php
		foreach($yeni as $rs)
		{
		?>
		 
		
          <li > <a href="<?=base_url()?>Home/Urun_detay/<?=$rs->id?>"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" /></a>
            <div class="product-info"></br></br></br></br></br>
              <h3><?=$rs->Ad?></h3>
              <div class="product-desc">
                <h4>Hediye</h4>
                <p>Fiyatı<br />
                 </p>
                <strong class="price"><?=$rs->fiyat?></strong> </div>
            </div>
			
          </li>
		   
		 
       
           <?php
		}
		?>
     
      
            </div>
          </li>
        </ul>
        
      </div>
      <!-- End Products -->
	
    
   
	 
       
      		     
	

		  