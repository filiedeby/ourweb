<?php
	if(get_cookie('lang_is') === 'en'){

				$home 	= "Beranda";
				$se 	= "Layanan Terbaik";
				$cob 	= "Unit Bisnis";
				$op 	= "Mitra Kami";
				$sc 	= "Asuransi Penunjang";
				$sr 	= "Mendukung Reasuransi";
				$vm 	= "Visi Misi";
				$ot 	= "Team Kami";
				$oa 	= "Aktivitas Kami";
				$cu 	= "Hubungi Kami";
				$au 	= "Mengenai Kami";
				
				
					
			}else{
				$home 	= "Home";
				$se 	= "Service Excellent";
				$cob 	= "Class of Business";
				$op 	= "Our Partners";
				$sc 	= "Supported Cedants";
				$sr 	= "Supporting Reinsurances";
				$vm 	= "Vision Mission";
				$ot 	= "Our Team";
				$oa 	= "Our Activities";
				$cu 	= "Contact Us";
				$au 	= "About Us";
			}
			
	?>

	<style>
.langdsk {
    display: block;
  }	
.langmbl {
    display: none;
	margin: 0px 0px 0px 0px !important;
  }	  	
@media screen and (max-width: 1024px) {
	.langdsk {
		display: block;
	}	
	.langmbl {
		display: none;
		margin: 0px 0px 0px 0px !important;
	}	 	 
}

@media screen and (max-width: 979px) {
	.langdsk {
		display: none;
	}
	.langmbl {
		display: block;
		margin: 10px 10px 0px 0px !important;
	}	
}

@media screen and (max-width: 767px) {
	.langdsk {
    	display: none;
  	}
	  .langmbl {
		display: block;
		margin: 10px 10px 0px 0px !important;
	}	
}

@media screen and (max-width: 400px) {
	.langdsk {
    	display: none;
  	}
	  .langmbl {
		display: block;
		margin: 10px 10px 0px 0px !important;
	}	
}
	</style>
	
	
<header>
  <div class="container b-header__box b-relative">
    <a href="<?= base_url(''); ?>" class="b-left b-logo "><img class="color-theme" data-retina src="<?php echo base_url(); ?>assets/images/lgsimasre.png" alt="Logo" width="200px;" /></a>
    <div class="b-header-r b-right b-header-r--icon">
      
      <div class="b-top-nav-show-slide f-top-nav-show-slide b-right j-top-nav-show-slide"><i class="fa fa-align-justify"></i></div>
      <nav class="b-top-nav f-top-nav b-right j-top-nav">
          <ul class="b-top-nav__1level_wrap">
				<li class="b-top-nav__1level f-top-nav__1level f-primary-b"><a href="<?= base_url(''); ?>"><i class="fa fa-home b-menu-1level-ico"></i> <?= $home; ?> <span class="b-ico-dropdown"></span></a>
					
				</li>
				<li class="b-top-nav__1level f-top-nav__1level f-primary-b">
					<a href=""><i class="fa fa-folder-open b-menu-1level-ico"></i> <?= $se; ?><span class="b-ico-dropdown"></span></a>
					<div class="b-top-nav__dropdomn">
						<ul class="b-top-nav__2level_wrap">
							<li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="<?= base_url('main/'); ?>cob"><i class="fa fa-angle-right"></i> <?= $cob; ?></a></li>
							
							<li data-box-id="0" class="b-top-nav__2level f-top-nav__2level f-primary b-top-nav__with-multi-lvl"><a onclick="return false" href=""><i class="fa fa-angle-right"></i> <?= $op; ?></a>
								<ul id="0" class="b-top-nav__multi-lvl-box">
									<li class="b-top-nav__multi-lvl"><a href="<?= base_url('main/'); ?>supportc"><i class="fa fa-angle-right"></i> <?= $sc; ?></a></li>
									<li class="b-top-nav__multi-lvl"><a href="<?= base_url('main/'); ?>supportre"><i class="fa fa-angle-right"></i> <?= $sr; ?></a></li>
								</ul>
							</li>


						</ul>
					</div>
				</li>
				<li class="b-top-nav__1level f-top-nav__1level f-primary-b">
					<a href=""><i class="fa fa-picture-o b-menu-1level-ico"></i> <?= $au; ?> <span class="b-ico-dropdown"></span></a>
					<div class="b-top-nav__dropdomn">
						<ul class="b-top-nav__2level_wrap">
							<li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="<?= base_url('main/'); ?>visimisi"><i class="fa fa-angle-right"></i> <?= $vm; ?></a></li>
							<li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="<?= base_url('main/'); ?>team"><i class="fa fa-angle-right"></i> <?= $ot; ?></a></li>
							<li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="<?= base_url('main/'); ?>activity"><i class="fa fa-angle-right"></i> <?= $oa; ?></a></li>
							
							
						</ul>
					</div>
				</li>
				<li class="b-top-nav__1level f-top-nav__1level f-primary-b"><a href="<?= base_url('main/'); ?>contact"><i class="fa fa-home b-menu-1level-ico"></i> <?= $cu; ?> <span class="b-ico-dropdown"></span></a>
				</li>

				<!--lang -->
						
					<?php if(get_cookie('lang_is') === 'en'){ ?>
					<li class="langdsk b-top-nav__1level f-top-nav__1level f-primary-b" style="padding: 0px 0px !important; white-space: nowrap; float: left; list-style: none; position: relative;">
						<a href="<?php echo site_url('lang_setter/set_to/indonesia');?>" style="padding: 5px 5px; !important"><img src="<?php echo base_url(); ?>assets/images/bendera/idn.png" alt="Indonesia" width="20px" style="padding: 0px 0px; !important" data-bs-placement="top" title="Bahasa Indonesia" /></a>					
						<a href="<?php echo site_url('lang_setter/set_to/english');?>" style="padding: 5px 5px; !important"><img src="<?php echo base_url(); ?>assets/images/bendera/eng.png" alt="United States" width="20px" style="padding: 0px 0px; !important" data-bs-placement="top" title="Bahasa Inggris" /></a>
					</li>

					<?php }else{ ?>
					<li class="langdsk b-top-nav__1level f-top-nav__1level f-primary-b" style="padding: 0px 0px !important; white-space: nowrap; float: left; list-style: none; position: relative;">
						<a href="<?php echo site_url('lang_setter/set_to/indonesia');?>" style="padding: 5px 5px; !important"><img src="<?php echo base_url(); ?>assets/images/bendera/idn.png" alt="Indonesia" width="20px" style="padding: 0px 0px; !important" data-bs-placement="top" title="Indonesia" /></a>
						<a href="<?php echo site_url('lang_setter/set_to/english');?>" style="padding: 5px 5px; !important"><img src="<?php echo base_url(); ?>assets/images/bendera/eng.png" alt="United States" width="20px" style="padding: 0px 0px; !important" data-bs-placement="top" title="English" /></a>
						
					</li>		
					<?php } ?>
				
   
			</ul>
      </nav>

    </div>
	<div class="b-header-ico-group f-header-ico-group b-right">
         <ul>
		 	<div class="langmbl">			
					<?php if(get_cookie('lang_is') === 'en'){ ?>
					<li class="b-top-nav__1level f-top-nav__1level f-primary-b" style="padding: 0px 0px !important; white-space: nowrap; float: left; list-style: none; position: relative;">
						<a href="<?php echo site_url('lang_setter/set_to/indonesia');?>" style="padding: 5px 5px; !important"><img src="<?php echo base_url(); ?>assets/images/bendera/idn.png" alt="Indonesia" width="30px" style="padding: 0px 0px; !important" data-bs-placement="top" title="Bahasa Indonesia" /></a>					
						<a href="<?php echo site_url('lang_setter/set_to/english');?>" style="padding: 5px 5px; !important"><img src="<?php echo base_url(); ?>assets/images/bendera/eng.png" alt="United States" width="30px" style="padding: 0px 0px; !important" data-bs-placement="top" title="Bahasa Inggris" /></a>
					</li>

					<?php }else{ ?>
					<li class="b-top-nav__1level f-top-nav__1level f-primary-b" style="padding: 0px 0px !important; white-space: nowrap; float: left; list-style: none; position: relative;">
						<a href="<?php echo site_url('lang_setter/set_to/indonesia');?>" style="padding: 5px 5px; !important"><img src="<?php echo base_url(); ?>assets/images/bendera/idn.png" alt="Indonesia" width="30px" style="padding: 0px 0px; !important" data-bs-placement="top" title="Indonesia" /></a>
						<a href="<?php echo site_url('lang_setter/set_to/english');?>" style="padding: 5px 5px; !important"><img src="<?php echo base_url(); ?>assets/images/bendera/eng.png" alt="United States" width="30px" style="padding: 0px 0px; !important" data-bs-placement="top" title="English" /></a>
						
					</li>		
					<?php } ?>
			</div>
		 </ul>
      </div>
  </div>
</header>
