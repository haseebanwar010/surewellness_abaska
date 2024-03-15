	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
	
	<div class="banner_inner" style="background-image: url(<?php echo $baseUrl; ?>assets/frontend/images/home/banner_innber.jpg);">
		
	</div>


	

</div>
<div class="breadcrumb_container">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?php echo $baseUrl; ?>">Home</a></li>
  <li class="breadcrumb-item active"><?php echo $service['title']; ?></li>
</ol>

				</div>
			</div>
		</div>
</div>
	<div class="job_container job_container1">
		<div class="container">
            <?php if($this->session->flashdata('msg')){ ?>
        <div class="alert alert-success alert-dismissible successmessageslider">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?=$this->session->flashdata('msg')?>
              </div>          
    <?php } ?>
		<div class="row">
			<div class="col-sm-12">
				<div class="inner_page_heading">
				<h3><?php echo $service['title']; ?></h3>
				
			</div>
			<div class="inner_page_heading_line"></div>
			
			<div class="managemnt">
				
					
					<div class="mangagemnt_pic_box managemnt_picture1">
					<div class="managemnt_picture" style="background-image: url(<?php echo $baseUrl; ?>uploads/<?php echo $service['image']; ?>);"></div>
						<div class="button_three">
							<div class="speaks"><a href="#" data-toggle="modal" data-target="#exampleModal12">Speak With a Case Consultant</a></div>
							<div class="request"><a href="#">Request for Quote</a></div>
							<div class="constl"><a href="#" data-toggle="modal" data-target="#exampleModal13">To have a Consultant Contact You</a></div>
							
							
						</div>	
					</div>
					
					<div class="managemnt_txt">
						<?php echo $service['description']; ?>
					</div>
			</div>
			
			
			</div>
			
			
		</div>
	</div>
	</div>
	