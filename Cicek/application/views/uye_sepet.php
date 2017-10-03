<?php
$this->load->view("_header.php");
$this->load->view("_sidebar.php");

?>
<div id="mainBody">
	<div class="container">
	<div class="row">


	<div class="span9">
    
	<h3>  Sepetim [ <small>3 Item(s) </small>]</h3>	
			
			
	<table class="table table-bordered">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Urun</th>
				  <th>Urun Adi</th>
                  <th>Miktar/Guncelle</th>
                  
				   <th>Fiyat</th>
				   
                  
				</tr>
              </thead>
			     <tbody>
            
			  <?php
			  $sn=0;
			  $top=0;
	        foreach($veriler as $rs)
          	{   $sn++;
				$tutar= $rs->cikfiyat * $rs->miktar;
				$top+=$tutar;
         	?>
    
                <tr>
				<td><?=$sn?></td>
                <td> <img width="60" src="<?=base_url()?>uploads/<?=$rs->cikres?>" alt=""/></td>
                <td><?=$rs->cikadi?></td> 
				  <td>
					<div class="input-append"><input class="span1" style="max-width:34px" placeholder="<?=$rs->miktar?>" id="appendedInputButtons" size="16" type="text"><button class="btn" type="button"><i class="icon-minus"></i></button><button class="btn" type="button"><i class="icon-plus"></i>
					</button><button class="btn btn-danger" type="button"><a href="<?=base_url()?>Home/sepetsil/<?=$rs->Id?>"><i class="icon-remove icon-white"></i></a></button></div>
				  </td>
               
                  <td colspan="6"><?=$rs->cikfiyat?> TL</td>
      
                </tr>
				
                <tr>
                  <td colspan="6" style="text-align:right">TUTAR:	</td>
                  <td> <?=$tutar?> TL</td>
                </tr>
				
                
				 <tr>
                  <td colspan="6" style="text-align:right"><strong>TOPLAM=</strong></td>
                  <td class="label label-important" style="display:block"> <strong> <?=$top?> TL </strong></td>
                </tr>
				<?php
  
	}
  ?>
    
				</tbody>
            </table>
				 <?php
		
		if($sn>0)
		{	
		?>
           
		
			<table class="table table-bordered">
			 <tr><th>Alici Bilgileri </th></tr>
			 <tr> 
			 <td>
				<form class="form-horizontal" action="<?=base_url()?>Home/siparis_tamamla/" method="post">
				  <div class="control-group">
					<label class="control-label" for="inputCountry">Adi Soyadi: </label>
					<div class="controls">
					  <input type="text" value="<?=$musteri[0]->adsoy?>" name="adsoy" id="inputCountry" >
					</div>
				  </div>
				 <div class="control-group">
					<label class="control-label" for="inputCountry">Sehir: </label>
					<div class="controls">
					  <input type="text" value="<?=$musteri[0]->sehir?>"  name="sehir" id="inputCountry" >
					</div>
				  </div>
				   <div class="control-group">
					<label class="control-label" for="inputCountry">Adres:</label>
					<div class="controls">
					  <input type="text" name="adres" value="<?=$musteri[0]->adres?>"  id="inputCountry">
					</div>
				  </div>
				   <div class="control-group">
					<label class="control-label" for="inputCountry">Telefon: </label>
					<div class="controls">
					  <input type="text" value="<?=$musteri[0]->tel?>"  name="tel" id="inputCountry" >
					</div>
				  </div>
				   <div class="control-group">
					<label class="control-label" for="inputCountry">Tutar: </label>
					<div class="controls">
					  <input type="text" value="<?=$top?>"  name="tutar" id="inputCountry" readonly >
					</div>
				  </div>
				  
				 <hr>
		 
			
	             <h3>Odeme Bilgileri</h3>
				 <div class="control-group">
					<label class="control-label" for="inputCountry">Kredi Karti No: </label>
					<div class="controls">
					  <input type="text" name="kartno" id="inputCountry" >
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="inputCountry">Skt Ay: </label>
					<div class="controls">
					  <input type="text" name="ay" id="inputCountry" >
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="inputCountry">Skt yil: </label>
					<div class="controls">
					  <input type="text" name="yil" id="inputCountry" >
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="inputCountry">Guvenlik Kodu: </label>
					<div class="controls">
					  <input type="text"name="gkodu" id="inputCountry" >
					</div>
				  </div>
				 
				  <div class="control-group">
					<div class="controls">
					  <button type="submit" class="btn"> Alisverisi Tamamla </button>
					</div>
				  </div>
					</form>	
<?php
		}
?>		
			  </td>
			  </tr>
            </table>		
	<a href="<?=base_url()?>Home" class="btn btn-large"><i class="icon-arrow-left"></i> Alisverise Devam </a>
	<a href="<?=base_url()?>Home/siparis_tamamla/" class="btn btn-large pull-right">Git <i class="icon-arrow-right"></i></a>
		
</div>
</div></div>
</div>
<?php
$this->load->view("_footer.php");


?>