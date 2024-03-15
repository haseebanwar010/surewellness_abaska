<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	


<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Senior Home Search
<!--        <small>Control panel</small>-->
      </h1>

    </section>

    <section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Senior Home Search|Add Banner Section</h3>

<!--
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
-->
        </div>
        
<div class="box-body">
    <form method="post" action="<?php echo base_url('admin/bannersectionsenior/addseniorsection') ?>" enctype="multipart/form-data">
        <input type="hidden" name="hiddensection" value="0" />
           <div class="row"> 
            <div class="col-md-6">
              <div class="form-group" >
                <label>Title</label>
                <input type="text" name="title" value="<?php echo $result->title; ?>"  class="form-control" placeholder="Title" required>
              </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label>Sub Title</label>
                  <input type="text" name="sub_title" value="<?php echo $result->sub_title; ?>" class="form-control" placeholder="Sub Title" required>
              </div>            
            </div>

        </div>
        <div class="row"> 
            <div class="col-md-6">
              <div class="form-group" >
                <label>Video Url</label>
                <input type="text" name="video" value="<?php echo $result->	video; ?>" class="form-control" placeholder="URL" required>
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
                    <textarea id="editor1" name="description"  rows="10" cols="80" required><?php echo $result->description;?></textarea>
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