<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
 
    
    
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
        Add Home Video
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $baseUrl; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $baseUrl; ?>admin/homevideos">Home Videos</a></li>
        <li class="active">Add Home Video</li>
      </ol>
    </section>
          <section class="content">
              <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Add Home Video</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form id="" role="form" method="post" action="<?php echo $baseUrl; ?>admin/homevideos/add" enctype="multipart/form-data">
                <!-- text input -->
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Title</label>
                        <input value="<?php if(isset($_POST['title'])){echo $_POST['title']; }?>" name="title" type="text" class="form-control" placeholder="Enter Video Title">
                    </div>
                </div>
                  <!--<div class="col-lg-6">
                    <div class="form-group">
                        <label>Sub Title</label>
                        <input value="<?php if(isset($_POST['sub_title'])){echo $_POST['sub_title']; }?>" name="sub_title" type="text" class="form-control" placeholder="Enter Banner Sub Title">
                    </div>
                </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Video (URL)</label>
                        <input value="<?php if(isset($_POST['video'])){echo $_POST['video']; }?>" name="video" type="text" class="form-control" placeholder="Enter Video">
                    </div>
                </div>-->
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Home</label>
                        <select class="form-control select2" name="home_id">
                            <option value="">Please select Home</option>
                            <?php foreach($homes as $home){ ?><option value="<?php echo $home['id']; ?>"><?php echo $home['title']; ?></option><?php } ?>
                        </select>
                    </div>
                </div>
                  
                <div class="col-lg-6">
                    <div class="form-group fileformgroup">
                        <label>Video (MP4)</label>
                        <input value="" required name="video" type="file" class="form-control" >
                    </div>
                </div>
<!--
                  <div class="col-lg-12">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" placeholder="Enter Banner Description"><?php if(isset($_POST['description'])){echo $_POST['description']; }?></textarea>
                    </div>
                </div>
-->
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


<script>
    
</script>
