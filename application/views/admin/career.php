<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	



<div class="content-wrapper">
    
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
        Careers
      </h1>

    </section>

    <section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Careers | Add Jobs</h3>

<!--
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
-->
        </div>
        
<div class="box-body">
    <form method="post" action="<?php echo base_url('admin/careers/add') ?>" enctype="multipart/form-data">

        <div class="row"> 
            <div class="col-md-6">
              <div class="form-group" >
                <label>Title</label>
                <input type="text" name="title"  class="form-control" placeholder="Title" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group" >
                <label>Pay</label>
                <input type="text" name="pay"  class="form-control" placeholder="Pay" required>
              </div>      
            </div>
        </div>

        <div class="row"> 
            <div class="col-md-6">
              <div class="form-group" >
                <label>Location</label>
                <input type="text" name="location"  class="form-control" placeholder="Location" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group" >
                <label>Document</label>
                <input type="file" name="document"  class="form-control" placeholder="Document" required>
              </div>      
            </div>
        </div>

        <div class="row"> 
            <div class="col-md-6">
              <div class="form-group" >
                <label>Functional Area</label>
                <input type="text" name="functional_area"  class="form-control" placeholder="Functional Area" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group" >
                <label>Position</label>
                <input type="text" name="position"  class="form-control" placeholder="Position" required>
              </div>      
            </div>
        </div>
        
        <div class="row"> 
            <div class="col-md-6">
              <div class="form-group" >
                <label>Job Shift</label>
                <input type="text" name="job_shift"  class="form-control" placeholder="Job Shift" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group" >
                <label>Job Type</label>
                <input type="text" name="job_type"  class="form-control" placeholder="Job Type" required>
              </div>      
            </div>
        </div>

    <div class="row">
        <div class="col-md-12">

        <div class="box box">
            <div class="box-header">
                <label class="box-title">Description</label>

            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                    <textarea id="editor1" name="description"  rows="10" cols="80" required></textarea>
            </div>
        </div>
          
        </div>
    </div>

        <div class="row">
            <div class="col-md-12">
              <div class="box-footer">
                <input type="submit" value="submit" name="bannersubmit" class="btn btn-info">
              </div>
            </div>
        </div>
</form>
        
</div>
        
        
        
        
    </div>
    </section>
   
   
   
   
   
   
   
   
   
  
</div>