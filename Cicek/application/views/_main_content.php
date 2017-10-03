<div class="span9">		
			
		
	
			  <ul class="thumbnails">
			  	  	<?php
		foreach($yeni as $rs)
		{
		?>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="<?=base_url()?>Home/Urun_detay/<?=$rs->id?>"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""/></a>
					<div class="caption">
					  <h5><?=$rs->Ad?></h5>
					  <p> 
						<?=$rs->aciklama?>
					  </p>
					 
					  <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="<?=base_url()?>Home/Urun_detay/<?=$rs->id?>">Sepet<i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?=$rs->fiyat?> TL</a></h4>
					</div>
				  </div>
				</li>
						   <?php
		}
		?>
				
				
			  </ul>	

		</div>
		</div>
	</div>
</div>