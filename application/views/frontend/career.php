<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?> 



<div class="breadcrumb_container">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
  <li class="breadcrumb-item active">Job Listing</li>
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
		<?php
                if($result)
                {
                    foreach($result as $rec){
        ?>
	
		
		
			<div class="col-sm-6">
				<div class="job_info">
					<div class="job_info_heading">
						<h2><?php echo $rec->title; ?></h2>
						<h3><?php echo $rec->location; ?></h3>
					</div>
					<div class="job_other_detail">
						<div class="job_date"><?php echo date("M d , Y",strtotime($rec->datetime)) ;?> </div>
						<a href="<?php echo base_url('Jobdetails/show/'.$rec->id);?>"><button>Detail</button></a>
					</div>
				</div>
			</div>
			

        <?php
                    }
                }
        ?>
			
			
		</div>
	</div>
	</div>




