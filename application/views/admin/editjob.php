<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	



<div class="content-wrapper">
    
    
   
    <section class="content-header">
      <h1>
        Job Detail
      </h1>

    </section>

    <section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Careers | Add Job</h3>

<!--
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
-->
        </div>
        
<div class="box-body">
    <form method="post" action="<?php echo base_url('admin/Showalljobs/update') ?>" enctype="multipart/form-data">
<input type="hidden" name="hiddenid" value="<?php echo $result->id;?>">
        <div class="row"> 
            <div class="col-md-6">
              <div class="form-group" >
                <label>Title</label>
                <input type="text" name="title" value="<?php echo $result->title; ?>"  class="form-control"  required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group" >
                <label>Pay</label>
                <input type="text" name="pay"  value="<?php echo $result->pay ; ?>" class="form-control" required>
              </div>      
            </div>
        </div>

        <div class="row"> 
            <div class="col-md-6">
              <div class="form-group" >
                <label>Location</label>
                <input type="text" name="location" value="<?php echo $result->location ; ?>"  class="form-control"  required>
              </div>
            </div>
            <div class="col-md-6">
            <div class="form-group" >
                <label>Job Type</label>
                <input type="text" name="job_type" value="<?php echo $result->job_type ; ?>"  class="form-control"  required>
            </div>       
            </div>
        </div>

        <div class="row"> 
            <div class="col-md-6">
              <div class="form-group" >
                <label>Functional Area</label>
                <input type="text" name="functional_area" value="<?php echo $result->functional_area ; ?>"  class="form-control"  required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group" >
                <label>Position</label>
                <input type="text" name="position" value="<?php echo $result->positions;?>"  class="form-control"  required>
              </div>      
            </div>
        </div>
        
        <div class="row"> 
            <div class="col-md-6">
              <div class="form-group" >
                <label>Job Shift</label>
                <input type="text" name="job_shift" value="<?php echo $result->job_shift ; ?>"  class="form-control"  required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group" >
                <label>Document</label>
                <input type="file" name="document"  class="form-control" >
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
                    <textarea id="editor1" name="description"  rows="10" cols="80" required><?php echo $result->description; ?></textarea>
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