<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
 
    
    
    <div class="content-wrapper">
        
        <?php if($this->session->flashdata('msg')){ ?>
        <section class="content alertcontent">  
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?=$this->session->flashdata('msg')?>
              </div>          
        </section>
    <?php } ?>
        
        
        
        <?php if(validation_errors()){ ?>
        <section class="content alertcontent">    
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <?php echo validation_errors(); ?>
            </div>
        </section>
    <?php } ?>
       
        
    <section class="content-header">
      <h1>
        Update Career
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $baseUrl; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $baseUrl; ?>admin/careers">Careers</a></li>
        <li class="active">Update Career</li>
      </ol>
    </section>
          <section class="content">
              <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Update Career</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form id="" role="form" method="post" action="<?php echo $baseUrl; ?>admin/careers/edit/<?php echo $career['id']; ?>" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $career['id']; ?>">
                <!-- text input -->
                
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Title</label>
                        <input value="<?php echo $career['title'];  ?>" name="title" type="text" class="form-control" placeholder="Enter Career Title">
                    </div>
                </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Price</label>
                        <input value="<?php echo $career['price']; ?>" name="price" type="text" class="form-control" placeholder="Enter Career price">
                    </div>
                </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Location</label>
                        <input value="<?php echo $career['location']; ?>" name="location" type="text" class="form-control" placeholder="Enter Location">
                    </div>
                </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Date</label>
                        <input value="<?php echo date("m/d/Y",strtotime($career['date'])); ?>" name="date" type="text" class="form-control datepicker" placeholder="Enter Date">
                    </div>
                </div>
                  
                  <div class="col-lg-6">
                    <div class="form-group fileformgroup">
                        <label>Document</label>
                        <input name="document" type="file" class="form-control">
                    </div>
                </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Functional Area</label>
                        <input value="<?php echo $career['functional_area']; ?>" name="functional_area" type="text" class="form-control" placeholder="Enter Functional Area">
                    </div>
                </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Job Shift</label>
                        <input value="<?php echo $career['job_shift']; ?>" name="job_shift" type="text" class="form-control" placeholder="Enter Job Shift">
                    </div>
                </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Job Type</label>
                        <input value="<?php echo $career['job_type']; ?>" name="job_type" type="text" class="form-control" placeholder="Enter Job Type">
                    </div>
                </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Positions</label>
                        <input value="<?php echo $career['positions']; ?>" name="positions" type="text" class="form-control" placeholder="Enter Total Number Of Positions">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea id="editor1" name="description" rows="10" cols="80"><?php echo $career['description']; ?></textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <button class="btn bg-navy margin submitbtn" type="submit">Submit</button>
                    </div>
                </div> 
              </form>
            </div>
            <!-- /.box-body -->
          </div>
        </section>
    </div>



