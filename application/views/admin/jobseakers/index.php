<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Job Seekers
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $baseUrl; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $baseUrl; ?>admin/job_seakers">Job Seekers</a></li>
        <li class="active">All Job Seekers</li>
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
              <h3 class="box-title">All Job Seekers</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Languages</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               
                    <?php foreach($jobseakers as $jobseaker){ ?>
                <tr>
                  <td><?php echo $jobseaker['id']; ?></td>
                  <td><?php echo $jobseaker['first_name']." ".$jobseaker['middle_name']." ".$jobseaker['last_name']; ?></td>
                  <td><?php echo $jobseaker['email']; ?></td>
                  <td><?php echo $jobseaker['home_phone']; ?></td>
                  <td><?php echo $jobseaker['address']; ?></td>
                  <td><?php echo $jobseaker['languages']; ?></td>
                  <td>
                      <a href="<?php echo $baseUrl; ?>admin/job_seakers/detail/<?php echo $jobseaker['id']; ?>"><button class="btn btn-info">Detail</button></a>
                    </td>
                </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Languages</th>
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