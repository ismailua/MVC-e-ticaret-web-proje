<div id="sidebar" class="span3">
		
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<?php
			  foreach($kategori as $rs)
			  {
		      ?>
                 <li><a href="<?=base_url()?>Home/kategori/<?=$rs->id?>/<?=$rs->adi ?>"> <?=$rs->adi?></a></li>
			  <?php
			  }?>
           
		</ul>
		<br/>
		  
			
	</div>