<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$this->session->logged_in['ad']?>&nbsp<?=$this->session->logged_in['soyad']?></p>
          
        </div>
      </div><br>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       
        
     
       <li>
          <a href="<?=base_url()?>admin/Kullanicilar">
            <i class="fa fa-user"></i> <span>Kullanıcılar</span>
            
          </a>
        </li>
		 <li>
          <a href="<?=base_url()?>admin/cicekler">
            <i class="fa fa-tree"></i> <span>Çiçekler</span>
            
          </a>
		  
        </li>
		<li>
          <a href="<?=base_url()?>admin/Musteriler">
            <i class="fa  fa-users"></i> <span>Müşteriler</span>
            
          </a>
        </li>
		<li>
          <a href="<?=base_url()?>admin/Kategoriler">
            <i class="fa fa-files-o"></i>
            <span>Kategoriler</span>
           
          </a>
		  <li >
          <a href="<?=base_url()?>admin/Mesajlar">
            <i class="fa fa-laptop"></i>
            <span>Mesajlar</span>
            </a>
			

          
        </li>
		  <li>
          <a href="<?=base_url()?>admin/Kampanyalar">
            <i class="fa fa-table"></i> <span>Kampanyalar</span>
            
          </a>
        </li>
         
		  <li>
          <a href="<?=base_url()?>admin/Turler">
            <i class="fa fa-th"></i> <span>Türler</span>
            
          </a>
        </li>
         
       
        <li class="treeview">
          <a href="<?=base_url()?>admin/Siparisler">
            <i class="fa fa-pie-chart"></i>
            <span>Siparişler</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>admin/Siparisler"><i class="fa fa-circle-o"></i>Yeni Siparişler</a></li>
            <li><a href="<?=base_url()?>admin/Siparisler/onayli"><i class="fa fa-circle-o"></i>Onaylanan Siparisler</a></li>
            <li><a href="<?=base_url()?>asset/admin/pages/charts/flot.html"><i class="fa fa-circle-o"></i>Kargodaki Siparisler</a></li>
            <li><a href="<?=base_url()?>asset/admin/pages/charts/inline.html"><i class="fa fa-circle-o"></i>Tmamalanan Siparişler</a></li>
          </ul>
        </li>
        
        <li >
          <a href="<?=base_url()?>admin/Home/ayarlar">
            <i class="fa  fa-gears "></i> <span>Ayarlar</span>
            
          </a>
         
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
