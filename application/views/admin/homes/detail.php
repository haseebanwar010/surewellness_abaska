<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Property
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $baseUrl; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $baseUrl; ?>hostels">Properties</a></li>
        <li class="active">All Properties</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
<?php if($this->session->flashdata('msg')){ ?>
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?=$this->session->flashdata('msg')?>
              </div>          
    <?php } ?>
            
            
            
            
      
    <section class="invoice">
        
      <!-- title row -->
      <div class="row customdetailheader">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-building-o"></i><?php echo $home_detail[0]['title']; ?>
            <small class="pull-right">Since: <?php echo date('d-M-Y',strtotime($home_detail[0]['created_date'])); ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">

          <b>Location:</b> <?php echo $home_detail[0]['location']; ?><br>
            <b>State:</b> <?php echo $home_detail[0]['state_name']; ?><br>
          <b>City:</b> <?php echo $home_detail[0]['city_name']; ?><br>
          
          
        </div>
          <div class="col-sm-4 invoice-col">

          <b>Key:</b> <?php echo $home_detail[0]['house_key']; ?><br>
          <b>Space:</b> <?php echo $home_detail[0]['people_spaces']; ?><br>
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

		<div class="row customdetailheader">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-image"></i>Images
          </h2>
        </div>
        <!-- /.col -->
      </div>
		
		
		<?php if(isset($home_detail[0]['images'])){
    $home_detail[0]['images']=unserialize($home_detail[0]['images']);
    if(empty($home_detail[0]['images'])){ $home_detail[0]['images']=array(); } }   ?>
		<div class="thumbimages">
			<ul>
                <?php foreach($home_detail[0]['images'] as $image){ ?>
				<li>
					<a class="fancybox" href="<?php echo $baseUrl; ?>uploads/<?php echo $image['name']; ?>" data-fancybox-group="gallery<?php echo $home_detail[0]['id']; ?>" title="">
						<img src="<?php echo $baseUrl; ?>uploads/<?php echo $image['name']; ?>">
					</a>
				</li>
                <?php } ?>
			</ul>
		</div>
		
		<div class="row customdetailheader">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-pencil-square-o"></i>Description
          </h2>
        </div>
        <!-- /.col -->
      </div>
		<div class="descriptoor">
			<?php echo $home_detail[0]['description']; ?>
		</div>
		
      
    </section>
            
            
           
        </div>
        </div>
    </section>
</div>