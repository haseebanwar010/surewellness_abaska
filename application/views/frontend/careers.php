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
  <li class="breadcrumb-item active">Job Listing</li>
</ol>

				</div>
			</div>
		</div>
</div>
	<div class="job_container">
		<div class="container">
              <?php if($this->session->flashdata('msg')){ ?>
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?=$this->session->flashdata('msg')?>
              </div>          
    <?php } ?>
		<div class="row">
			<div class="col-sm-12">
				<div class="inner_page_heading">
				<h3>job listing</h3>
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
			
		<?php foreach($careers as $career){ ?>
			<div class="col-sm-6">
				<div class="job_info">
					<div class="job_info_heading">
						<h2><?php echo $career['title']; ?></h2>
						<h3><?php echo $career['location']; ?></h3>
					</div>
					<div class="job_other_detail">
						<div class="job_date"><?php echo date('d-M-Y',strtotime($career['date'])); ?></div>
						<a href="<?php echo $baseUrl; ?>careers/detail/<?php echo $career['id']; ?>"><button>Detail</button></a>
					</div>
				</div>
			</div>
			<?php } ?>
			
		</div>
	</div>
	</div>
	