<div id="main">
    <div class="cl">&nbsp;</div>
    <!-- Content -->
    <div id="content">
      <!-- Content Slider -->
      <div id="slider" class="box">
        <div id="slider-holder">
		 <ul>
		<?php
		foreach ($yeni as $rs)
		{
		?>	
		 <li><a href="<?=base_url()?>Home/Urun_detay/<?=$rs->id?>"><center><img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" /></center></a></li>
		
		<?php
		}
		?>
         
          </ul>
        </div>
        <div id="slider-nav"> <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> </div>
      </div>
      <!-- End Content Slider -->
      <!-- Products -->