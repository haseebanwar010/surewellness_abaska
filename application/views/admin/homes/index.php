<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Homes
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $baseUrl; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $baseUrl; ?>homes">Homes</a></li>
        <li class="active">All Homes</li>
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
              <h3 class="box-title">All Homes</h3>
                <a href="<?php echo $baseUrl; ?>admin/homes/add"><button type="button" class="btn bg-navy margin addbtn">Add New</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  
                  <th>Title</th>
                  <th>Location</th>
                  <th>Total Spaces</th>
                  <th>House Key</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               
                    <?php foreach($homes as $home){
                    ?>
                <tr>
                  <td><?php echo $home['id']; ?></td>
                  
                  <td><?php echo $home['title']; ?></td>
                  <td><?php echo $home['location']; ?></td>
                  <td><?php echo $home['people_spaces']; ?></td>
                  <td><?php echo $home['house_key']; ?></td>
                  
                  <td>
                      <a href="<?php echo $baseUrl; ?>admin/homes/edit/<?php echo $home['id']; ?>"><button class="btn btn-info">Edit</button></a>
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default<?php echo $home['id']; ?>">Delete</button>
                      <a href="<?php echo $baseUrl; ?>admin/homes/detail/<?php echo $home['id']; ?>"><button class="btn btn-info">Detail</button></a>
                    </td>
                </tr>
                    
                    <div class="modal fade" id="modal-default<?php echo $home['id']; ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete Home</h4>
              </div>
              <div class="modal-body">
                <p>Are you sure you want to delete the home.?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">No</button>
                  <a href="<?php echo $baseUrl; ?>admin/homes/delete/<?php echo $home['id']; ?>"><button type="button" class="btn btn-primary">Yes</button></a>
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
                  <th>Location</th>
                  <th>Total Spaces</th>
                  <th>House Key</th>
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