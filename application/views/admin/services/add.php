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
        Add Service
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $baseUrl; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $baseUrl; ?>admin/services">Services</a></li>
        <li class="active">Add Service</li><br />
         
      </ol>
    </section>
          <section class="content">
              <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Add Service</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form id="" role="form" method="post" action="<?php echo $baseUrl; ?>admin/services/add" enctype="multipart/form-data">
                 
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Title</label>
                        <input value="<?php if(isset($_POST['title'])){echo $_POST['title']; }?>" name="title" type="text" class="form-control" placeholder="Enter Service Title">
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="form-group fileformgroup">
                        <label>Icon</label>
                        <input value="" required name="icon" type="file" class="form-control" >
                    </div>
                </div>
                  <div class="col-lg-6">
                    <div class="form-group fileformgroup">
                        <label>Image</label>
                        <input value="" required name="image" type="file" class="form-control" >
                    </div>
                </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea id="editor1" class="form-control" name="description" placeholder="Enter Service Description"><?php if(isset($_POST['description'])){echo $_POST['description']; }?></textarea>
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


<script>
    
</script>
