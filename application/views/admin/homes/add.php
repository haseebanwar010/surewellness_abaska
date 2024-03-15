<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
 
    
    
    <div class="content-wrapper">
        
        <section class="content alertcontent validerror">    
            <div id="validationshow" class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <?php //echo validation_errors(); ?>
                <!--<p id="validerrorp"></p>-->
            </div>
        </section>

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
        Add Home
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $baseUrl; ?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="<?php echo $baseUrl; ?>admin/homes">Homes</a></li>
        <li class="active">Add Home</li>
      </ol>
    </section>
          <section class="content">
              <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Add Home</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form id="fileupload" role="form" method="post" action="<?php echo $baseUrl; ?>admin/homes/add" enctype="multipart/form-data">
                <!-- text input -->
                  
                  
                  
                  
                  
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Title</label>
                        <input value="<?php if(isset($_POST['title'])){echo $_POST['title']; }?>" name="title" type="text" class="form-control" placeholder="Enter Home Title">
                    </div>
                </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Location</label>
                        <input value="<?php if(isset($_POST['location'])){echo $_POST['location']; }?>" name="location" type="text" class="form-control" placeholder="Enter Location">
                    </div>
                </div>
                
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>State</label>
                        <select id="state" name="state_id" class="form-control select2 state_changer" style="width: 100%;">
                            <option value="" selected="selected"></option>
                            <?php foreach($states as $state){ ?>
                            <option value="<?php echo $state['id']; ?>"><?php echo $state['name']; ?></option>
                            <?php } ?>
                            
                        </select>
                    </div>
                </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>City</label>
                        <select id="city" name="city_id" class="form-control select2 city_changer" style="width: 100%;">
                            <option value="" selected="selected"></option>
                            
                        </select>
                    </div>
                </div>
                   <div class="col-lg-6">
                    <div class="form-group">
                        <label>House Key</label>
                        <input disabled value="<?php echo $key; ?>" name="house_key" type="text" class="form-control" placeholder="Enter House Key">
                    </div>
                </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Space</label>
                        <input value="<?php if(isset($_POST['people_spaces'])){echo $_POST['people_spaces']; }?>" name="people_spaces" type="text" class="form-control" placeholder="Enter Space">
                    </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea id="editor1" name="description" rows="10" cols="80"><?php if(isset($_POST['description'])){echo $_POST['description']; }?></textarea>
                    </div>
                </div>
                 
                  
                  <div class="col-lg-12">
                      <div class="row fileupload-buttonbar">
            <div class="col-lg-7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add files...</span>
                    <input id="imagefilechanger" type="file" value="files[]" name="files[]" multiple>
                    
                </span>
            </div>
        </div>
        <table role="presentation" class="table table-striped imagestable"><tbody class="files"></tbody></table>
                  </div>
                  
                  
                  
                  
                <div class="col-lg-12">
                    <div class="form-group">
                        <a id="homeaddbtn"  class="btn bg-navy margin submitbtn">Submit</a>
                    </div>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
        </section>
    </div>


<script>
    $(document).ready(function(){
         $('#us3').locationpicker({
                location: {
                    latitude: 31.520370,
                    longitude: 74.358747
                },
                radius: 0,
                inputBinding: {
                    latitudeInput: $('#latitude'),
                    longitudeInput: $('#longitude'),
                    radiusInput: $('#us3-radius'),
                    locationNameInput: $('#us3-address')
                },
                enableAutocomplete: true,
                onchanged: function (currentLocation, radius, isMarkerDropped) {
                    // Uncomment line below to show alert on each Location Changed event
                    //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
                }
            });
        
        
        
    });
</script>
