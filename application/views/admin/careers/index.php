<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Careers
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $baseUrl; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $baseUrl; ?>admin/Careers">Careers</a></li>
        <li class="active">All Careers</li>
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
               <?php if($this->session->flashdata('error_msg')){ ?>
        <section class="content alertcontent">    
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <?php echo $this->session->flashdata('error_msg'); ?>
            </div>
        </section>
    <?php } ?>
            
            
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">All Careers</h3>
                <a href="<?php echo $baseUrl; ?>admin/careers/add"><button type="button" class="btn bg-navy margin addbtn">Add New</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Date</th>
                  <th>Price</th>
                  <th>Functional Area</th>
                  <th>Job Shift</th>
                  <th>Job Type</th>
                  <th>Total Positions</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               
                    <?php foreach($careers as $career){ ?>
                <tr>
                  <td><?php echo $career['id']; ?></td>
                  <td><?php echo $career['title']; ?></td>
                  <td><?php echo $career['price']; ?></td>
                  <td><?php echo $career['functional_area']; ?></td>
                  <td><?php echo $career['job_shift']; ?></td>
                  <td><?php echo $career['job_type']; ?></td>
                  <td><?php echo $career['positions']; ?></td>
                  <td>
                      <a href="<?php echo $baseUrl; ?>admin/careers/edit/<?php echo $career['id']; ?>"><button class="btn btn-info">Edit</button></a>
                      <a href="<?php echo $baseUrl; ?>admin/careers/detail/<?php echo $career['id']; ?>"><button class="btn btn-info">Detail</button></a>
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default<?php echo $career['id']; ?>">Delete</button>
                    </td>
                </tr>
                    <div class="modal fade" id="modal-default<?php echo $career['id']; ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete Career</h4>
              </div>
              <div class="modal-body">
                <p>Are you sure you want to delete the career?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">No</button>
                  <a href="<?php echo $baseUrl; ?>admin/careers/delete/<?php echo $career['id']; ?>"><button type="button" class="btn btn-primary">Yes</button></a>
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
                  <th>Date</th>
                  <th>Price</th>
                  <th>Functional Area</th>
                  <th>Job Shift</th>
                  <th>Job Type</th>
                  <th>Total Positions</th>
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