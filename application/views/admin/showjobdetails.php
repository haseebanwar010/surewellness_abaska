<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div class="content-wrapper">

    <section class="content-header">

    </section> 
    
     
      
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-info-circle"></i>Job Detail
            <a href="<?php echo base_url('admin/showalljobs');?>" class="btn btn-primary pull-right">Back</a>
          </h2>

        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
          <address>
            <strong>Title:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->title; ?>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-6 invoice-col">
          <address>
            <strong>Pay:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->pay; ?>
          </address>
        </div>
        
        <div class="col-sm-6 invoice-col">
          <address>
            <strong>Location:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->location; ?>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-6 invoice-col">
          <address>
            <strong>Functional Area:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->functional_area; ?>
          </address>
        </div>
        
            <div class="col-sm-6 invoice-col">
          <address>
            <strong>Job Shift:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->job_shift; ?>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-6 invoice-col">
          <address>
            <strong>Job Type:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->job_type; ?>
          </address>
        </div>
        
            <div class="col-sm-6 invoice-col">
          <address>
            <strong>Position:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->positions; ?>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-6 invoice-col">
          <address>
            <strong>Document:</strong>&nbsp;&nbsp;&nbsp;
           <a href="<?php echo base_url('uploads/'.$result->document); ?>">Download Doc</a>
          </address>
        </div>
        


        <!-- /.col -->

        
      </div>
      <div class="row invoice-info">
         <div class="col-sm-12 invoice-col">
          <address>
            <strong>Description:</strong>
            <textarea id="editor1" name="description"  rows="10" cols="80" required><?php echo $result->description; ?></textarea>
          </address>
        </div>
    </div>

      
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
    
    
    
 <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Job | User's </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>First Name</th>
                <th>State</th>
                <th>City</th>
                <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                if($users)
                {
                    
                    foreach($users as $records){

                    
                    
                ?>
                
                <tr>
                <td><?php echo $records->fname;?></td>
                <td><?php echo $records->state;?></td>
                <td><?php echo $records->city;?></td>
                <td><a href="<?php echo base_url('admin/showalljobs/seekerdetail/'.$records->id); ?>" class="btn btn-info">Detials</a></td>
                
                </tr>
                
                <?php
                    }
                }      
                ?>
                
                </tbody>
<!--
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
-->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    
    
    
  
 
</div>