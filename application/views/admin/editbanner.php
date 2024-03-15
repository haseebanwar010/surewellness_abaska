<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div class="content-wrapper">
  
    <section class="content-header">
      <h1>
        Banners
<!--        <small>Control panel</small>-->
      </h1>
<!--
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
-->
    </section>
    
      
    <section class="content-header">

    </section>
    
    <section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Banner</h3>
            <a href="<?php echo base_url('admin/Showallbanners');?>" class="btn btn-primary pull-right">Back</a>
<!--
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
-->
        </div>
        
        <div class="box-body">
        <form method="post" action="<?php echo base_url('admin/showallbanners/update') ?>" enctype="multipart/form-data">
        <input type="hidden" name="hiddenid" value="<?php echo $result->id;?>">

        <div class="row"> 
            <div class="col-md-6">
              <div class="form-group" >
                <label>Banner</label>
                <input type="file" name="image" class="form-control" placeholder="Banner">
              </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label>Selection Type</label>
                <select class="form-control select2" style="width: 100%;" name="cetagory"> 
                 <?php if($result->section_Id==0){?> 
                  <option selected="selected" value="0">Senior Home Search</option>
                <?php } ?>
                 <?php if($result->section_Id==1){?> 
                  <option selected="selected" value="1">Home Providers</option>
                <?php } ?>
                  <?php if($result->section_Id==0){?> 
                  <option value="1">Home Providers</option>
                  <?php } ?>
                  <?php if($result->section_Id==1){?>
                  <option value="0">Senior Home Search</option>
                  <?php } ?>
                </select>
              </div>            
            </div>
            

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