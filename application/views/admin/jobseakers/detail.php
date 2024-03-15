<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Job Seeker Detail
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $baseUrl; ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $baseUrl; ?>admin/job_seakers">Job Seekers</a></li>
        <li class="active">Job Seeker Detail</li>
      </ol>
    </section>

   
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-info-circle"></i> Personal Information
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
          
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Name: </strong><?php echo $jobseaker['first_name']." ".$jobseaker['middle_name']." ".$jobseaker['last_name']; ?><br>
            <strong>Email: </strong><?php echo $jobseaker['email']; ?><br>
            <strong>Address: </strong><?php echo $jobseaker['address']; ?><br>
            <strong>State: </strong><?php echo $jobseaker['state_name']; ?><br>
            <strong>City: </strong><?php echo $jobseaker['city_name']; ?><br>
            <strong>Social Security Number: </strong><?php echo $jobseaker['ssn']; ?><br>
          </address>
        </div>
          <div class="col-sm-4 invoice-col">
              <address>
                  <strong>Home Phone: </strong><?php echo $jobseaker['home_phone']; ?><br>
            <strong>Cell Phone: </strong><?php echo $jobseaker['cell_phone']; ?><br>
            <strong>Work Phone: </strong><?php echo $jobseaker['work_phone']; ?><br>
            <strong>Emergency Contact: </strong><?php echo $jobseaker['emergency_contact']; ?><br>
            <strong>Are You 18 Years Of Age? </strong><?php if($jobseaker['age_question']==1){ echo "Yes"; }else{ echo "No"; } ?><br>
            <strong>Date of Birth: </strong><?php echo date('d-M-Y',strtotime($jobseaker['dob'])); ?><br>
              </address>
          </div>
          <div class="col-sm-4 invoice-col">
              <address>
                  <strong>Languages Spoken: </strong><?php echo $jobseaker['languages']; ?><br>
            <strong>Are you currently employed? </strong><?php if($jobseaker['currently_employed']==1){ echo "Yes"; }else{ echo "No"; } ?><br>
            <strong>May we contact your employer? </strong><?php if($jobseaker['contact_employer']==1){ echo "Yes"; }else{ echo "No"; } ?><br>
            <strong>How did you find out about our company? </strong><?php echo $jobseaker['how_find_company']; ?><br> 
            <strong>Which cities would you prefer to work in? </strong><?php echo $jobseaker['work_city']; ?><br>  
              </address>
          </div>
        
        
      </div>
      
        <div class="row">
            <div class="col-xs-12 customdescriptionp">
                <strong>Are you currently able to perform the essential functions, with or without a reasonable accommodation, for the position for which you are applying?</strong>
                <p><?php echo $jobseaker['essential_functions']; ?></p>
            </div>
       
        </div>
          <div class="row">
            <div class="col-xs-12 customdescriptionp">
                <strong>Have you previously worked for our company?</strong>
                <p><?php echo $jobseaker['previously_worked']; ?></p>
            </div>
       
        </div>
        <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-book"></i> Eduacation
          </h2>
        </div>
      </div>
        <div class="row invoice-info">
          
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>High School: </strong><?php echo $jobseaker['high_school']; ?><br>
            <strong>Graduate: </strong><?php if($jobseaker['graduate']==1){ echo "Yes"; }else{ echo "No"; } ?><br>
            <strong>College: </strong><?php echo $jobseaker['college']; ?><br>
            <strong>Trade, Business or Other Schooling: </strong><?php echo $jobseaker['trade']; ?><br>
          </address>
        </div>
        </div>
        <div class="row">
            <div class="col-xs-12 customdescriptionp">
                <strong>Relevant Experience or Special Skills</strong>
                <p><?php echo $jobseaker['relevant_experience']; ?></p>
            </div>
       
        </div>
        
        <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-briefcase"></i> Employment History
          </h2>
        </div>
      </div>
        <div class="row invoice-info">
          
        <div class="col-sm-4 invoice-col">
          <address>
            <strong>Name and Address of Employer: </strong><?php echo $jobseaker['employer_name_address1']; ?><br>
            <strong>Name of Supervisor: </strong><?php echo $jobseaker['supervisor_name1']; ?><br>
              <strong>Start Date: </strong><?php echo date('d-M-Y',strtotime($jobseaker['start_date1'])); ?><br>
              <strong>End Date: </strong><?php echo date('d-M-Y',strtotime($jobseaker['end_date1'])); ?><br>
              <strong>Reasons for leaving: </strong><?php echo $jobseaker['job_title1']; ?><br>
              <strong>Description of Work Responsibilities: </strong><?php echo $jobseaker['work_description1']; ?><br>
          </address>
        </div>
            <div class="col-sm-4 invoice-col">
          <address>
            <strong>Name and Address of Employer: </strong><?php echo $jobseaker['employer_name_address2']; ?><br>
            <strong>Name of Supervisor: </strong><?php echo $jobseaker['supervisor_name2']; ?><br>
              <strong>Start Date: </strong><?php echo date('d-M-Y',strtotime($jobseaker['start_date2'])); ?><br>
              <strong>End Date: </strong><?php echo date('d-M-Y',strtotime($jobseaker['end_date2'])); ?><br>
              <strong>Reasons for leaving: </strong><?php echo $jobseaker['job_title2']; ?><br>
              <strong>Description of Work Responsibilities: </strong><?php echo $jobseaker['work_description2']; ?><br>
          </address>
        </div>
            <div class="col-sm-4 invoice-col">
          <address>
            <strong>Name and Address of Employer: </strong><?php echo $jobseaker['employer_name_address3']; ?><br>
            <strong>Name of Supervisor: </strong><?php echo $jobseaker['supervisor_name3']; ?><br>
              <strong>Start Date: </strong><?php echo date('d-M-Y',strtotime($jobseaker['start_date3'])); ?><br>
              <strong>End Date: </strong><?php echo date('d-M-Y',strtotime($jobseaker['end_date3'])); ?><br>
              <strong>Reasons for leaving: </strong><?php echo $jobseaker['job_title3']; ?><br>
              <strong>Description of Work Responsibilities: </strong><?php echo $jobseaker['work_description3']; ?><br>
          </address>
        </div>
        </div>
        <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-users"></i> List the names of three persons, not related to you, whom you have known for at least one year
          </h2>
        </div>
      </div>
        
        
        
        
        <div class="row invoice-info">
          
        <div class="col-sm-12 invoice-col">
          <address>
            <strong>Name, Address & Phone: </strong><?php echo $jobseaker['related_person_name_detail']; ?><br>
            <strong>Business/Occupation: </strong><?php echo $jobseaker['business_occupation']; ?><br>
            <strong>Years Acquainted: </strong><?php echo $jobseaker['years_acquainted']; ?><br>
          </address>
        </div>
        </div>
        <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-certificate"></i> Licenses and Certificates
          </h2>
        </div>
      </div>
        <div class="row invoice-info">
            <div class="col-sm-12 invoice-col">
                <address>
                    <strong>Certificates: </strong><?php echo $jobseaker['certificates']; ?><br>
                    <strong>Have you applied for any of these licenses? </strong><?php if($jobseaker['applied_licences']==1){ echo "Yes"; }else{ echo "No"; } ?><br>
                </address>
            </div>
        </div>
        
        
        <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-warning"></i> Notices
          </h2>
        </div>
      </div>
        <div class="row invoice-info">
            <div class="col-sm-12 invoice-col">
                <address>
                    <strong>New Employees are required to produce verification of their legal right to work in the United States. If you are offered employment, can you produce sufficient documentation of your identity and right to work in the United States, and attest under penalty of perjury that the documents you produce are genuine and relate to you? </strong><?php if($jobseaker['notices']==1){ echo "Yes"; }else{ echo "No"; } ?><br>
                </address>
            </div>
        </div>
        
        
        <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-info-circle"></i> Additional Information
          </h2>
        </div>
      </div>
        <div class="row invoice-info">
            <div class="col-sm-12 invoice-col">
                <address>
                    <strong>Have you ever been convicted of a felony or of any crime for which you served a jail or prison sentence? </strong><?php if($jobseaker['any_crime']==1){ echo "Yes"; }else{ echo "No"; } ?><br>
              <strong>Are you currently awaiting trial for any criminal offense? </strong><?php if($jobseaker['criminal_trial']==1){ echo "Yes"; }else{ echo "No"; } ?><br>
              <strong>Have you ever initiated an act of violence in the workplace? </strong><?php if($jobseaker['violence']==1){ echo "Yes"; }else{ echo "No"; } ?><br>
              <strong>Agree to the terms of service? </strong><?php if($jobseaker['agrred_terms']==1){ echo "Yes"; }else{ echo "No"; } ?><br>
                </address>
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
                  <th>Career Title</th>
                  <th>Career Price</th>
                  <th>Career Location</th>
                  <th>Application Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               
                    <?php foreach($applications as $application){ ?>
                <tr>
                  <td><?php echo $application['id']; ?></td>
                  <td><?php echo $application['title']; ?></td>
                  <td><?php echo $application['price']; ?></td>
                  <td><?php echo $application['location']; ?></td>
                  <td><?php echo date('d-M-Y',strtotime($application['application_createddate'])); ?></td>
                  <td>
                      <a href="<?php echo $baseUrl; ?>admin/careers/detail/<?php echo $application['career_id']; ?>"><button class="btn btn-info">Career Detail</button></a>
                    </td>
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