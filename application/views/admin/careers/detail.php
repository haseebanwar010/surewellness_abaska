<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Career Detail
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $baseUrl; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $baseUrl; ?>admin/Careers">Careers</a></li>
        <li class="active">Career Detail</li>
      </ol>
    </section>

   
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> <?php echo $career['title']; ?>
            <small class="pull-right">Created Date: <?php echo date('d-M-Y',strtotime($career['created_date'])); ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
          <address>
            <strong>Location: </strong><?php echo $career['location']; ?><br>
            <strong>Price: </strong><?php echo $career['price']; ?><br>
            <strong>Date: </strong><?php echo date('d-M-Y',strtotime($career['date'])); ?><br>
              <strong>Document: </strong><a href="<?php echo $baseUrl; ?>uploads/<?php echo $career['document']; ?>">Download File</a>
          </address>
        </div>
        <div class="col-sm-6 invoice-col">
          <address>
            <strong>Functional Area: </strong><?php echo $career['functional_area']; ?><br>
            <strong>Job Shift: </strong><?php echo $career['job_shift']; ?><br>
            <strong>Job Type: </strong><?php echo $career['job_type']; ?><br>
            <strong>Total Positions: </strong><?php echo $career['positions']; ?>
          </address>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-12 customdescriptionp">
          <strong>Description: </strong>
          
            <?php echo $career['description']; ?>
        </div>
       
      </div>
        
    </section>
    <section class="content">
        
        
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Career Applications</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Application Id</th>
                  <th>Job Seeker Name</th>
                  <th>Job Seeker Email</th>
                  <th>Job Seeker Phone</th>
                  <th>Job Seeker Address</th>
                  <th>Job Seeker Languages</th>
                  <th>Application Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               
                    <?php foreach($applications as $application){ ?>
                <tr>
                  <td><?php echo $application['id']; ?></td>
                  <td><?php echo $application['first_name']." ".$application['last_name']; ?></td>
                  <td><?php echo $application['email']; ?></td>
                  <td><?php echo $application['home_phone']; ?></td>
                  <td><?php echo $application['address']; ?></td>
                  <td><?php echo $application['languages']; ?></td>
                  <td><?php echo date('d-M-Y',strtotime($application['application_createddate'])); ?></td>
                  <td><a href="<?php echo $baseUrl; ?>admin/job_seakers/detail/<?php echo $application['jobseaker_id']; ?>"><button class="btn btn-info">Job Seeker Detail</button></a></td>
                </tr>
                    <?php } ?>
                </tbody>
<!--
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
-->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </section>
</div>