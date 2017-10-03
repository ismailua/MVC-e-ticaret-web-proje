<?php
$this->load->view('_header.php');
$this->load->view('_sidebar.php');
?>
	<div class="span9">
   
	
	<h3>Urunler</h3>
	<hr class="soft"/>

<br class="clr"/>


	<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails">
		<?php
		foreach($veri as $rs)
		{
	    ?>
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""/></a>
				<div class="caption">
				  <h5><?=$rs->Ad?></h5>
				  <p> 
					<?=$rs->aciklama?>
				  </p>
				   <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Sepete Ekle<i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?=$rs->fiyat?></a></h4>
				</div>
			  </div>
		</li>
		<?php }?>
			
		  </ul>
	<hr class="soft"/>
	</div>
		
</div>

	<a href="compair.html" class="btn btn-large pull-right">Compair Product</a>
	<div class="pagination">
			<ul>
			<li><a href="#">&lsaquo;</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">...</a></li>
			<li><a href="#">&rsaquo;</a></li>
			</ul>
			</div>
			<br class="clr"/>
</div>
</div>
</div>
</div>
<?php
$this->load->view('_footer.php');

?>