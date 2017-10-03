<?php
$this->load->view("_header.php");

?>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a>Hakkimizda</a>
				
			</li>
			<li class="subMenu"><a> Reklamlarimiz </a>
			
			</li>
			<li class="subMenu"><a>Basinda Biz</a>
				
			</li>
			<li><a href="products.html">Kampanyalar</a></li>
			<li><a href="products.html">Site Haritasi</a></li>
			<li><a href="products.html">Insan Kaynaklari</a></li>
		</ul>
		<br/>
		  
	</div>
<!-- Sidebar end=============================================== -->
	<div class="span9" id="mainCol">
    
	<h3> Hakkimizda</h3>	
	<hr class="soft"/>
	
	<p>
	<?=$ayar[0]->hakkimizda?>
	</p>
</div>
</div></div>
</div>
<?php
$this->load->view("_footer.php");
?>