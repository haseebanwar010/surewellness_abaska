<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	


<div class="content-wrapper">
    
   
    <section class="content-header">
      <h1>
        Section
      </h1>

    </section>

    <section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Section | Choose Us</h3>
<a href="<?php echo base_url('admin/Showallsections');?>" class="btn btn-primary pull-right">Back</a>

<!--
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
-->
        </div>
        
<div class="box-body">
    <form method="post" action="<?php echo base_url('admin/Showallsections/update') ?>" enctype="multipart/form-data">
<input type="hidden" name="hiddenid" value="<?php echo $result->id;?>">
        <div class="row"> 
            <div class="col-md-6">
              <div class="form-group" >
                <label>Title</label>
                <input type="text" name="title" value="<?php echo $result->title; ?>"  class="form-control" required>
              </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label>Selection Type</label>
                <select class="form-control select2" style="width: 100%;" name="cetagory" required>
                 <?php if($result->section_id==0){?> 
                  <option selected="selected" value="0">Senior Home Search</option>
                <?php } ?>
                 <?php if($result->section_id==1){?> 
                  <option selected="selected" value="1">Home Providers</option> 
                <?php } ?>
                  <?php if($result->section_id==0){?> 
                  <option value="1">Home Providers</option>
                  <?php } ?>
                  <?php if($result->section_id==1){?>
                  <option value="0">Senior Home Search</option>
                  <?php } ?>
                </select>
              </div>            
            </div>
        </div>
        <div class="row"> 
            <div class="col-md-6">
              <div class="form-group" >
                <label>Logo</label>
                <input type="file" name="image" class="form-control" placeholder="Logo" >
              </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
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