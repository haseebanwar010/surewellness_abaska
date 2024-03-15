	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<!--Modals Start-->

<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-contents">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    
     <div class="card card-container">
          
          
            <h4>Are you sure you want to apply?</h4>
            <p id="profile-name" class="profile-name-card"></p>
        
            
         <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
         <a href="<?php echo $baseUrl; ?>careers/apply/<?php echo $career['id']; ?>" class="forgot-password forgot-password1"><button type="button" class="btn btn-default" >Yes</button></a>
             
        <!-- /card-container -->
    </div>
  </div>
</div>
</div>
<!--Modals End-->



<?php if(isset($sectionid) && $sectionid==1){ ?><div class="banner_inner" style="background-image: url(<?php echo $baseUrl; ?>assets/frontend/images/banner_innber.jpg);"></div><?php }else{ ?>
<div class="banner_inner" style="background-image: url(<?php echo $baseUrl; ?>assets/frontend/images/home/banner_innber.jpg);"></div><?php } ?>
</div>
<div class="breadcrumb_container">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?php echo $baseUrl; ?>">Home</a></li>
  <li class="breadcrumb-item active">Job Detail</li>
</ol>

				</div>
			</div>
		</div>
</div>
	
	<div class="job_container">
		<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="inner_page_heading">
				<h3>job Detail</h3>
                    <?php if(!isset($_SESSION['jobseaker']) || empty($_SESSION['jobseaker'])){ ?>
				<button data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">login as a job seeker </button>
                    <?php }else{ ?>
                     <div class="dropdown myaccountdrop">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">My Account
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="<?php echo $baseUrl; ?>job_seaker/logout">Logout</a></li>
  </ul>
</div> <?php } ?>
			</div>
			<div class="inner_page_heading_line"></div>
			</div>
			<div class="job_detail_container">
				<div class="job_detail_bx"><div class="col-sm-9">
					<h2><?php echo $career['title']; ?></h2>
					<h4><?php echo $career['location']; ?></h4>
					<h5><?php echo date('d-M-Y',strtotime($career['date'])); ?></h5>
                    <div class="doc_pdf"><a href="<?php echo $baseUrl; ?>uploads/<?php echo $career['document']; ?>">Download Document</a></div>
				</div>
				<div class="col-sm-3">
					<h1><?php echo $career['price']; ?></h1>
                    <?php if(isset($_SESSION['jobseaker']) && !empty($_SESSION['jobseaker'])){ ?>
					<button data-toggle="modal" data-target="#applyModal">Apply Now</button>
                    <?php }else{ ?>
                    <button data-toggle="modal" data-target="#exampleModal">Apply Now</button>
                    <?php } ?>
                    <a class="pdfformlink" href="<?php echo $baseUrl; ?>assets/frontend/forms/SUREWELLNESS SYSTEMS JOB APP.pdf"><img src="<?php echo $baseUrl; ?>assets/frontend/images/PDF.png"></a>
				</div></div>
				<div class="col-sm-12">
				<h2>Job Description</h2>	
				<?php echo $career['description']; ?>
					<h2>Job Details</h2></div>
				<div class="col-sm-6">
					<div class="job_detail_info">
						<div class="job_q">
							Functional Area:
						</div>
						<div class="job_ans">
							<?php echo $career['functional_area']; ?>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="job_detail_info">
						<div class="job_q">
							Job Shift:
						</div>
						<div class="job_ans">
							<?php echo $career['job_shift']; ?>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="job_detail_info">
						<div class="job_q">
							Job Type:
						</div>
						<div class="job_ans">
							<?php echo $career['job_type']; ?>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="job_detail_info">
						<div class="job_q">
							Total Positions:
						</div>
						<div class="job_ans">
							<?php echo $career['positions']; ?>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	</div>
	
	
	