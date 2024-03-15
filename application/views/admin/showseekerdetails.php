<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	

    
<div class="content-wrapper">
    
    
    <section class="content-header"></section>

    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-info-circle"></i>Personal Information
          </h2>

        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->

      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>First Name:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->fname; ?>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Middle Name:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->mname; ?>
          </address>
        </div>
        
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Last Name:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->lname; ?>
          </address>
        </div>
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Email:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->email; ?>
          </address>
        </div>
        <!-- /.col -->
        
            <div class="col-sm-4 invoice-col">
          <address>
            <strong>State:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->sname;
//              $query='select name from states where id=$result->state';
//              echo $query;
////            $this->db->where('id',$result->state);
////            $query=$this->db->select('states');
////              $rec=$query->row();
////              echo $rec;
            ?>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>City:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->cname; ?>
          </address>
        </div>
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Social Security No:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->social_sec_num; ?>
          </address>
        </div>
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Home Phone:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->home_phone; ?>
          </address>
        </div>
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Cell Phone:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->cell_phone; ?>
          </address>
        </div>
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Work Phone:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->work_phone; ?>
          </address>
        </div>
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Emergency Contect No:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->emergency_contact; ?>
          </address>
        </div>
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Age:</strong>&nbsp;&nbsp;&nbsp;
            <?php
              if($result->age!=0){
                  echo 'Yes';
              }
              else
              {
                  echo'No';
              } ?>
          </address>
        </div>
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Date Of Birth:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->date_of_birth; ?>
          </address>
        </div>
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Language:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->language; ?>
          </address>
        </div>
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Currently Employee:</strong>&nbsp;&nbsp;&nbsp;
            <?php
              if($result->currently_employee!=0){
                  echo 'Yes';
              }
              else
              {
                  echo'No';
              } ?>
          </address>
        </div>
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Contact Employee:</strong>&nbsp;&nbsp;&nbsp;
            <?php
              if($result->contact_employee!=0){
                  echo 'Yes';
              }
              else
              {
                  echo'No';
              } ?>
          </address>
        </div>
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>How u find Company:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->how_find_company; ?>
          </address>
        </div>
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Work City:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->work_city; ?>
          </address>
        </div>

        
      </div>
        
        <div class="row invoice-info">
        <div class="col-md-6 invoice-col">
          <address>
            <strong>Address:</strong>&nbsp;&nbsp;&nbsp;<br>
            <textarea  name="description" rows="5" cols="80"><?php echo $result->address; ?></textarea>
          </address>
        </div>
        <div class="col-md-6 invoice-col">
          <address>
            <strong>Essential Functions:</strong>&nbsp;&nbsp;&nbsp;<br>
            <textarea name="description" rows="5" cols="80"><?php echo $result->essential_function; ?></textarea>
          </address>
        </div>
        <div class="col-md-6 invoice-col">
          <address>
            <strong>previously Worked:</strong>&nbsp;&nbsp;&nbsp;<br>
            <textarea name="description" rows="5" cols="80"><?php echo $result->previously_worked; ?></textarea>
          </address>
        </div>

        
        </div>
        
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-info-circle"></i>Licenses and Certificates
          </h2>

        </div>
        <!-- /.col -->
      </div>
        <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
          <address>
            <strong>License Applied for:</strong>&nbsp;&nbsp;&nbsp;
            <?php
              if($result->applied_for_license!=0){
                  echo 'Yes';
              }
              else
              {
                  echo'No';
              } ?>
          </address>
        </div>
        <div class="col-sm-6 invoice-col">
          <address>
            <strong>Agrred Terms & Condiition:</strong>&nbsp;&nbsp;&nbsp;
            <?php
              if($result->agrred_terms!=0){
                  echo 'Yes';
              }
              else
              {
                  echo'No';
              } ?>
          </address>
        </div>
        </div>
        <div class="row invoice-info">
        <div class="col-sm-12 invoice-col">
          <address>
            <strong>Certificates:</strong>&nbsp;&nbsp;&nbsp;
            <?php echo $result->certificates; ?>
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
                <th>Id</th>
                <th>Title</th>
                <th>Pay</th>
                <th>Location</th>
                <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                if($job)
                {

                    foreach($job as $jobs){
                        
                    
                    
                ?>
                
                <tr>
                <td><?php echo $jobs->id;?></td>
                <td><?php echo $jobs->title;?></td>
                <td><?php echo $jobs->pay;?></td>
                <td><?php echo $jobs->location;?></td>
                
                <td><a href="<?php echo base_url('admin/Showalljobs/details/'.$jobs->id); ?>" class="btn btn-primary">Details</a></td>
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