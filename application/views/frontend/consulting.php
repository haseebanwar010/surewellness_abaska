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
  <li class="breadcrumb-item active">Professional Consulting</li>
</ol>

				</div>
			</div>
		</div>
</div>
<div class="job_container job_container1">
		<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="inner_page_heading">
				<h3><?php echo $consulting[0]['title']; ?></h3>
				
			</div>
			<div class="inner_page_heading_line"></div>
			
			<div class="managemnt">
				
					
					<div class="mangagemnt_pic_box managemnt_picture1">
					<div class="managemnt_picture" style="background-image: url(<?php echo $baseUrl; ?>uploads/<?php echo $consulting[0]['image']; ?>);"></div>
						<div class="button_three">
							<div class="speaks"><a data-toggle="modal" data-target="#exampleModal12" href="#">Speak With a Case Consultant</a></div>
							<div class="request"><a href="#">Request for Quote</a></div>
							<div class="constl"><a data-toggle="modal" data-target="#exampleModal13" href="#">To have a Consultant Contact You</a></div>
							
							
						</div>	
					</div>
					
					<div class="managemnt_txt">
						<?php echo $consulting[0]['description']; ?>
					</div>
			</div>
			
			
			</div>
			
			
		</div>
	</div>
	</div>