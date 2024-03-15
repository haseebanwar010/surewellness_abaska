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
        
        <section class="content alertcontent validerror">    
            <div id="validationshow" class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <?php //echo validation_errors(); ?>
                <!--<p id="validerrorp"></p>-->
            </div>
        </section>
        
        
        <?php if(validation_errors()){ ?>
        <section class="content alertcontent">    
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <?php echo validation_errors(); ?>
            </div>
        </section>
    <?php } ?>
        <?php if($this->session->flashdata('sameemailerror')){ ?>
        <section class="content alertcontent">    
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <?=$this->session->flashdata('sameemailerror')?>
            </div>
        </section>             
    <?php } ?>
        
    <section class="content-header">
      <h1>
        Update Slider Section
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $baseUrl; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Slider Section</a></li>
        <li class="active">Update Slider Section</li>
      </ol>
    </section>
          <section class="content">
              <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Update Slider Section</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form id="" role="form" method="post" action="<?php echo $baseUrl; ?>admin/slidersection/edit/<?php echo $slidersection['id']; ?>" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $slidersection['id']; ?>">
                <!-- text input -->
               <div class="col-lg-6">
                    <div class="form-group">
                        <label>Title</label>
                        <input value="<?php echo $slidersection['title']; ?>" name="title" type="text" class="form-control" placeholder="Slider Title">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Sub Title</label>
                        <input value="<?php echo $slidersection['sub_title']; ?>" name="sub_title" type="text" class="form-control" placeholder="Slider Sub Title">
                    </div>
                </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Video(URL)</label>
                        <input value="<?php echo $slidersection['video']; ?>" name="video" type="text" class="form-control" placeholder="Slider video">
                    </div>
                </div>
                   <div class="col-lg-12">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea id="" class="form-control" name="description" placeholder="Enter Section Description"><?php echo $slidersection['description']; ?></textarea>
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



