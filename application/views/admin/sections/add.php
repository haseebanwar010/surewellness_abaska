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
        Add Section
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $baseUrl; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $baseUrl; ?>admin/sections/allsections/<?php echo $sectionid; ?>">Sections</a></li>
          <?php if($sectionid==1){ ?>
        <li class="active">Add Section(Search For Homes)</li><br />
          <?php }else{ ?>
          <li class="active">Add Section(Home Providers)</li><br />
          <?php } ?>
      </ol>
    </section>
          <section class="content">
              <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Add Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form id="" role="form" method="post" action="<?php echo $baseUrl; ?>admin/sections/add/<?php echo $sectionid; ?>" enctype="multipart/form-data">
                  <input type="hidden" name="section_id" value="<?php echo $sectionid; ?>">
                <!-- text input -->
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Title</label>
                        <input value="<?php if(isset($_POST['title'])){echo $_POST['title']; }?>" name="title" type="text" class="form-control" placeholder="Enter Section Title">
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
                        <textarea id="editor1" class="form-control" name="description" placeholder="Enter Section Description"><?php if(isset($_POST['description'])){echo $_POST['description']; }?></textarea>
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
