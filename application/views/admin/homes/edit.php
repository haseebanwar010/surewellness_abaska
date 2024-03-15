<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>

 
    
    
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
        Update Home
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $baseUrl; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $baseUrl; ?>admin/homes">Homes</a></li>
        <li class="active">Update Home</li>
      </ol>
    </section>
          <section class="content">
              <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Update Home</h3>
            </div>
            <div class="box-body">
                <div class="asi">
              <form id="fileupload" role="form" method="post" action="<?php echo $baseUrl; ?>admin/homes/edit/<?php echo $home[0]['id']; ?>" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?php echo $home[0]['id']; ?>">
               
                  
                  
                  
                   
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Title</label>
                        <input value="<?php echo $home[0]['title']; ?>" name="title" type="text" class="form-control" placeholder="Enter Home Title">
                    </div>
                </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Location</label>
                        <input value="<?php echo $home[0]['location']; ?>" name="location" type="text" class="form-control" placeholder="Enter Location">
                    </div>
                </div>
                
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>State</label>
                        <select id="state" name="state_id" class="form-control select2 state_changer" style="width: 100%;">
                            <option value="" selected="selected"></option>
                            <?php foreach($states as $state){ ?>
                            <option <?php if($state['id']==$home[0]['state']){ echo "selected"; } ?> value="<?php echo $state['id']; ?>"><?php echo $state['name']; ?></option>
                            <?php } ?>
                            
                        </select>
                    </div>
                </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>City</label>
                        <select id="city" name="city_id" class="form-control select2 city_changer" style="width: 100%;">
                            <option value=""></option>
                            <?php foreach($cities as $city){ ?>
                            <option <?php if($city['id']==$home[0]['city']){ echo "selected"; } ?> value="<?php echo $city['id']; ?>"><?php echo $city['name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                   <div class="col-lg-6">
                    <div class="form-group">
                        <label>House Key</label>
                        <input disabled value="<?php echo $home[0]['house_key']; ?>" name="house_key" type="text" class="form-control" placeholder="Enter House Key">
                    </div>
                </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                        <label>Space</label>
                        <input value="<?php echo $home[0]['people_spaces']; ?>" name="people_spaces" type="text" class="form-control" placeholder="Enter Space">
                    </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea id="editor1" name="description" rows="10" cols="80"><?php echo $home[0]['description']; ?></textarea>
                    </div>
                </div>
                  
                  
                  
                  
                  
                  
                  
                  
                
                  
                  <div class="col-lg-12">
                     
        <table role="presentation" class="table table-striped imagestable">
            <tbody class="files">
                <?php if(isset($home[0]['images'])){
    $home[0]['images']=unserialize($home[0]['images']);
    if(empty($home[0]['images'])){ $home[0]['images']=array(); } }   ?>
                <?php foreach($home[0]['images'] as $image){ ?>
                <tr class="template-upload customimageslisting">
                    <td>
                        <img src="<?php echo $baseUrl; ?>uploads/<?php echo $image['name']; ?>">
                    </td>
                    <td><a id="" href="<?php echo $baseUrl; ?>admin/homes/delete_home_image/<?php echo $home[0]['id']; ?>/<?php echo $image['id']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-ban-circle"></i><span>Delete</span></a></td>
                </tr>
                <?php } ?>
                
            </tbody>
        </table>
                       <div class="row fileupload-buttonbar">
            <div class="col-lg-7">
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add files...</span>
                    <input id="imagefilechanger" type="file" value="files[]" name="files[]" multiple>
                    
                </span>
            </div>
        </div>
                  </div>
                  
                  
                <div class="col-lg-12">
                    <div class="form-group">
                        <a id="homeeditbtn"  class="btn bg-navy margin submitbtn">Submit</a>
                           </div>
                </div>
              </form>
                    </div>
            </div>
          </div>
        </section>
    </div>



