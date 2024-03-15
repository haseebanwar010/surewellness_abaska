<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
$sitedata=getsitedata();

?>
<body class="<?php if(isset($page) && $page=="homepage"){ ?>noscrolly_body<?php } ?>">

	






<div class="header_banner">
<div class="header">
	
<div class="header_top">
	<div class="container">
		<div class="row">
					
					
					<div class="col-sm-4">
					<div class="top_btns"><img src="<?php echo $baseUrl; ?>assets/frontend/images/t1.png" /></div>
			<div class="social_media">
						
							<ul>
								<li ><a target="_blank" href="<?php echo $sitedata->facebook; ?>" class="fb"></a></li> 
<li ><a target="_blank" href="<?php echo $sitedata->google_plus; ?>" class="gm"></a></li>
<li><a target="_blank" href="<?php echo $sitedata->twitter; ?>"  class="tw"></a></li>
<li ><a target="_blank" href="<?php echo $sitedata->linkedin; ?>" class="lnk"></a></li>
<li ><a target="_blank" href="<?php echo $sitedata->youtube; ?>" class="youtube"></a></li>
							</ul>
						</div>
		</div>
		<div class="col-sm-8">
			<div class="tp2"><img src="<?php echo $baseUrl; ?>assets/frontend/images/t2.png" alt=""/></div>
			<div class="cont_info">
					<div class="ph"><?php echo $sitedata->phone; ?>, <?php echo $sitedata->phone2; ?></div>
					<div class="email"><?php echo $sitedata->email; ?></div>
					<div class="clock"><?php echo $sitedata->availability; ?></div>
					
			</div>
			
		</div>
		
		
		</div>
	</div>
	
	</div>
<div class="container">
		<div class="row">
		  <div class="col-sm-4">
				
				<div class="logo">
					<a href="<?php echo $baseUrl; ?>">
					<img src="<?php echo $baseUrl; ?>assets/frontend/images/logo.png" width="326" height="146" alt=""/> </a>
			  </div>
				
		  </div>
			<div class="col-sm-8">
				
				


		<div class="menu_bx">
			
			
              	<div class="free_cons">
                    <a href="#" class="requestion_a_quote" data-toggle="modal" data-target="#exampleModal1" data-whatever="@getbootstrap">FREE CONSULTATION</a>
			<a href="<?php echo $baseUrl; ?>careers" class="requestion_a_quote">Careers</a>
			</div>
						 <div class="mobile_menu">
             
              	<a href="javascript:void(0);">
                	<span></span>
                	<span></span>
                	<span></span>
                </a>
              </div>
							<div class="menu">
								<ul>
									<li><a href="<?php echo $baseUrl; ?>">Home</a></li>
								    <li><a href="<?php echo $baseUrl; ?>pages/aboutus">About Us</a></li>
								    <li><a href="<?php echo $baseUrl; ?>homes/all_homes">Search</a></li>
								    <li><a href="<?php echo $baseUrl; ?>pages/contactus">Contact Us</a></li>
								</ul>
							</div>
			
		</div>
		


									
			</div>
		</div>
</div>
</div>


	