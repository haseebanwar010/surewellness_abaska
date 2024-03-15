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
  <li class="breadcrumb-item active">Testimonials</li>
</ol>

				</div>
			</div>
		</div>
</div>
<div class="section_testimonials">
		<div class="container">
		<div class="row">
		
		
				<div class="col-sm-12">
				<div class="inner_page_heading">
				<h3>What Our Clients Say?</h3>
			
			</div>
			<div class="inner_page_heading_line"></div>
			</div>
		
			<div class="col-sm-12"> 
     	
     	<?php foreach($testimonials as $testimonial){ ?>
     	<div class="testimonilas_box ">
      	<div class="user_pic" style="background-image: url(<?php echo $baseUrl; ?>uploads/<?php echo $testimonial['image']; ?>);"></div>
      	<div class="user_info user_info1">
      		<p><?php echo $testimonial['description']; ?></p>
      		<h4><?php echo $testimonial['name']; ?></h4>
      	</div>
      </div>
                <?php } ?>
      	
     
      
      </div>
			
		
		</div>
	</div>
	</div>
	