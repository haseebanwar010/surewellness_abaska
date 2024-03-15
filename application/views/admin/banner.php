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
    
    <section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Add Banner</h3>

<!--
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
-->
        </div>
        
        <div class="box-body">
        <form method="post" action="<?php echo base_url('admin/banners/add') ?>" enctype="multipart/form-data">
        <div class="row"> 
            <div class="col-md-6">
              <div class="form-group" >
                <label>Banner</label>
                <input type="file" name="image" class="form-control" placeholder="Banner" required>
              </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label>Selection Type</label>
                <select class="form-control select2" style="width: 100%;" name="cetagory">
                  <option selected="selected" value="">Selection Type</option>
                  <option value="0">Senior Home Search</option>
                  <option value="1">Home Providers</option>
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