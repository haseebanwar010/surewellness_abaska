	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<?php if(isset($sectionid) && $sectionid==1){ ?><div class="banner_inner" style="background-image: url(<?php echo $baseUrl; ?>assets/frontend/images/banner_innber.jpg);"></div><?php }else{ ?>
<div class="banner_inner" style="background-image: url(<?php echo $baseUrl; ?>assets/frontend/images/home/banner_innber.jpg);"></div><?php } ?>

	

</div>
<div class="breadcrumb_container">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?php echo $baseUrl; ?>">Home</a></li>
  <li class="breadcrumb-item active">About Us</li>
</ol>

				</div>
			</div>
		</div>
</div>
	<div class="container">
		<div class="row">
		
			<div class="col-sm-12">
				<div class="about_wrp"><div class="about_us_pic" style="background-image: url(<?php echo $baseUrl; ?>uploads/<?php echo $who_we_are[0]['image'] ?>);">
			  </div>
			    <div class="about_info">
			    	<h3><?php echo $who_we_are[0]['title']; ?></h3>
			    	<?php echo $who_we_are[0]['description']; ?>
			    </div></div>
			</div>
			
<!--
			<div class="about_cmp">
			<div class="col-sm-6">
				<div class="what_we_do">
					<h2><?php echo $what_we_do[0]['title']; ?></h2>
					<?php echo $what_we_do[0]['description']; ?>
				</div>
				
			</div>
			<div class="col-sm-6">
				<div class="getting_start">
					<h2><?php echo $getting_started[0]['title']; ?></h2><?php echo $getting_started[0]['description']; ?></div>
			</div></div>
			
-->
			
		</div>
	</div>



<div class="about_us_box_container">
		<div class="container">
		<div class="row">
			
			<div class="col-sm-12">
				<div class="services_id">
					<div class="about_us_pg"> 
						<div class="services_icons">
					    <img src="<?php echo $baseUrl; ?>assets/frontend/images/icon_new5.png" alt=""> </div>
					  <h2><?php echo $what_we_do[0]['title']; ?></h2>
						<?php echo $what_we_do[0]['description']; ?>
				
						
					</div>
					<div class="about_us_pg about_us_pg1">
					 
					<div class="services_icons">
				   
					    <img src="<?php echo $baseUrl; ?>assets/frontend/images/icon_new4.png" alt=""> </div>
						<h2><?php echo $getting_started[0]['title']; ?></h2>
						<?php echo $getting_started[0]['description']; ?>
					
						
					</div>
					
					
					
				</div>
				
				
			</div>
			
		</div>
	</div>
	</div>
<div class="container">
		<div class="row">
            <div class="privacy">
				
				<div class="col-sm-12">
					<h2><?php echo $privacy_policy[0]['title']; ?></h2>
					<?php echo $privacy_policy[0]['description']; ?>
				
				</div>
			</div>
    </div>
</div>
	