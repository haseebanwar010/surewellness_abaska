<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sections
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $baseUrl; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $baseUrl; ?>admin/sections/allsections/<?php echo $sectionid; ?>">Sections</a></li>
          <?php if($sectionid==1){ ?>
        <li class="active">All Sections(Search For Homes)</li>
          <?php } else{ ?>
          <li class="active">All Sections(Home Providers)</li>
          <?php } ?>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
<?php if($this->session->flashdata('msg')){ ?>
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?=$this->session->flashdata('msg')?>
              </div>          
    <?php } ?>
            
            
            
          <div class="box box-warning">
            <div class="box-header">
                <?php if($sectionid==1){ ?>
              <h3 class="box-title">All Sections(Search For Homes)</h3>
                <?php } else{ ?>
                <h3 class="box-title">All Sections(Home Providers)</h3>
                <?php } ?>
                <a href="<?php echo $baseUrl; ?>admin/sections/add/<?php echo $sectionid; ?>"><button type="button" class="btn bg-navy margin addbtn">Add New</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               
                    <?php foreach($sections as $section){ ?>
                <tr>
                  <td><?php echo $section['id']; ?></td>
                  <td><?php echo $section['title']; ?></td>
                  <td><img src="<?php echo $baseUrl; ?>uploads/thumb/<?php echo $section['image']; ?>"></td>
                  <td>
                      <a href="<?php echo $baseUrl; ?>admin/sections/edit/<?php echo $section['id']; ?>/<?php echo $sectionid; ?>"><button class="btn btn-info">Edit</button></a>
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default<?php echo $section['id']; ?>">Delete</button>
                      
                    </td>
                </tr>
                    
                    <div class="modal fade" id="modal-default<?php echo $section['id']; ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete Section</h4>
              </div>
              <div class="modal-body">
                <p>Are you sure you want to delete the section?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">No</button>
                  <a href="<?php echo $baseUrl; ?>admin/sections/delete/<?php echo $section['id']; ?>/<?php echo $sectionid; ?>"><button type="button" class="btn btn-primary">Yes</button></a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
                    <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        </div>
    </section>
</div>