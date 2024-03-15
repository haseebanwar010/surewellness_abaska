<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?> 


<div class="breadcrumb_container">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
				<h3>job listing</h3>
				<button data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">login as a job seaker </button>
			</div>
			<div class="inner_page_heading_line"></div>
			</div>
			<div class="job_detail_container">
                <?php 
                if($result){
                    
                
                ?>
                

            
				<div class="job_detail_bx">
				<div class="col-sm-9">
					<h2><?php echo $result->title; ?></h2>
					<h4><?php echo $result->location; ?></h4>
					<h5><?php echo date("M d , Y",strtotime($result->datetime)) ;?></h5>
					<div class="doc_pdf"><a href="<?php echo base_url('uploads/'.$result->document); ?>">Download Document</a></div>
				</div>
				<div class="col-sm-3">
					<h1><?php echo $result->pay; ?></h1>
				<?php if($this->session->userdata('validated')){ ?>
					<form method="post" action="<?php echo base_url('Apply'); ?>">
					<input type="hidden" name="hiddenid" value="<?php echo $result->id; ?>"/> 
					<button type="submit" name="apply">Apply Now</button>
					
                    </form>
                    <?php }else{ ?>
<button data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Apply Now</button>
<?php } ?>
				</div>
				</div>
				<div class="col-sm-12">
				<h2>Job Description</h2>	
				<?php echo $result->description; ?>
				</div>
				<h2>Job Details</h2>
				<div class="col-sm-6">
					<div class="job_detail_info">
						<div class="job_q">
							Functional Area:
						</div>
						<div class="job_ans">
							<?php echo $result->functional_area; ?>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="job_detail_info">
						<div class="job_q">
							Job Shift:
						</div>
						<div class="job_ans">
							<?php echo $result->job_shift; ?>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="job_detail_info">
						<div class="job_q">
							Job Type:
						</div>
						<div class="job_ans">
							<?php echo $result->job_type; ?>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="job_detail_info">
						<div class="job_q">
							Total Positions:
						</div>
						<div class="job_ans">
							<?php echo $result->positions; ?>
						</div>
					</div>
				</div>
			<?php
                }
            ?>
			</div>
			
		</div>
	</div>
	</div>
