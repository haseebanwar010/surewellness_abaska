<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>.:: Surewellness ::.</title>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="<?php echo $baseUrl; ?>assets/frontend/css/bootstrap.min.css" rel="stylesheet" />
 <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/frontend/css/slider.css">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Sanchez" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    
     <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/bower_components/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/frontend/css/chosen.css">
    
    <link href="<?php echo $baseUrl; ?>assets/frontend/css/css.css" rel="stylesheet" />
</head>
    
    
    
    
    
    
    
    <!--Popups Start-->
    
    <div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
   
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Speak with Case Consultant </h4>
      </div>
        <form method="post" action="<?php echo $baseUrl; ?>popup_emails/speak_consultant">
        <?php if(isset($page) && $page=="search_for_homes"){ ?>
            <input type="hidden" name="redirect" value="search_for_homes">
            <?php }else if(isset($page) && $page=="home_providers"){ ?>
            <input type="hidden" name="redirect" value="home_providers">
            <?php }else if(isset($page) && $page=="service"){ ?>
            <input type="hidden" name="redirect" value="home_providers/services/<?php echo $service['id']; ?>">
            <?php }else if(isset($page) && $page=="page_management"){ ?>
            <input type="hidden" name="redirect" value="pages/management">
            <?php }else if(isset($page) && $page=="page_consulting"){ ?>
            <input type="hidden" name="redirect" value="pages/consulting">
            <?php }else if(isset($page) && $page=="page_staffing"){ ?>
            <input type="hidden" name="redirect" value="pages/staffing">
            <?php }else{ ?>
            <input type="hidden" name="redirect" value="">
            <?php } ?>
      <div class="modal-body">
        
        <div class="row">
                 
         <div class="col-sm-6">
         	  <div class="form-group">
            <label for="recipient-name" class="control-label">Company/Individual Name:</label>
            <input required type="text" name="company_name" class="form-control" id="">
          </div>
         	
         </div>
        <div class="col-sm-6">
        	<div class="form-group">
            <label for="recipient-name" class="control-label">Phone Number:</label>
            <input required type="text" name="phone" class="form-control" id="">
          </div>  
        	
        </div>
        <div class="col-sm-6">
        	
        	 <div class="form-group">
            <label for="recipient-name" class="control-label">Fax Number:</label>
            <input required name="fax" type="text" class="form-control" id="">
          </div>
        	
        </div>  
        <div class="col-sm-6">
        	
        	  <div class="form-group">
            <label for="recipient-name" class="control-label">Email Address:</label>
            <input required name="email" type="text" class="form-control" id="">
          </div>
        	
        </div>
        <div class="col-sm-6">
        	
        	<div class="form-group">
            <label for="recipient-name" class="control-label">Website Address:</label>
            <input required name="website" type="text" class="form-control" id="">
          </div>
        	
        </div>
           
        <div class="col-sm-6">
        	
        	<div class="form-group">
            <label for="recipient-name" class="control-label">Years in Business:</label>
            <input required name="years" type="text" class="form-control" id="">
          </div>
        	
        </div>
          <div class="col-sm-6">
          	
          	<div class="form-group">
            
            <label for="message-text" class="control-label">Timeframe for Services:</label>
            
            <div class="services_check_box">
    <input type="radio" id="contactChoice1"
     name="services" required value="Immediate  30">
    <label for="contactChoice1">Immediate  30</label>

    <input type="radio" id="contactChoice2"
     name="services" value="60">
    <label for="contactChoice2">60</label>

    <input type="radio" id="contactChoice3"
     name="services" value="90">
    <label for="contactChoice3">90</label>
  </div>
            
          </div>
          	
          </div>
          <div class="col-sm-6">
          	
          	<div class="form-group">
            
            <label for="message-text" class="control-label">Are you the DM:</label>
            
            <div class="services_check_box">
    <input type="radio" id="contactChoice1"
     name="DM" value="Yes" required>
    <label for="contactChoice1">Yes</label>

    <input type="radio" id="contactChoice2"
     name="DM" value="No">
    <label for="contactChoice2">No</label>
  </div>
            
          </div>
          	
          </div>
          <div class="col-sm-12 form-group ">
          <label for="message-text" class="control-label">Services Need:</label>
          	<div class="services_check_box"><div >
    <input type="checkbox" id="coding" name="services_need[]" value="Facilities Mgmt">
    <label for="coding">Facilities Mgmt</label>
  </div>
  <div>
    <input type="checkbox" id="music" name="services_need[]" value="Personal Consultation">
    <label for="music">Personal Consultation</label>
  </div>
  <div>
    <input type="checkbox" id="Staffing" name="services_need[]" value="Staffing">
    <label for="Staffing">Staffing</label>
  </div>
  <div>
    <input type="checkbox" id="Services" name="services_need[]" value="All Services">
    <label for="Services">All Services</label>
  </div></div>
          </div> 
           <div class="col-sm-12">
           	
           	<div class="form-group">
            <label for="message-text" class="control-label">Details:</label>
            <textarea class="form-control" id="message-text" name="details"></textarea>
          </div>
           	
           </div>
          
          
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
            </form>
    </div>
  
  </div>
</div>

    <div class="modal fade" id="exampleModal13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">To have a Consultant Contact You</h4>
      </div>
        <form method="post" action="<?php echo $baseUrl; ?>popup_emails/consultant_contact">
           <?php if(isset($page) && $page=="search_for_homes"){ ?>
            <input type="hidden" name="redirect" value="search_for_homes">
            <?php }else if(isset($page) && $page=="home_providers"){ ?>
            <input type="hidden" name="redirect" value="home_providers">
            <?php }else if(isset($page) && $page=="service"){ ?>
            <input type="hidden" name="redirect" value="home_providers/services/<?php echo $service['id']; ?>">
            <?php }else if(isset($page) && $page=="page_management"){ ?>
            <input type="hidden" name="redirect" value="pages/management">
            <?php }else if(isset($page) && $page=="page_consulting"){ ?>
            <input type="hidden" name="redirect" value="pages/consulting">
            <?php }else if(isset($page) && $page=="page_staffing"){ ?>
            <input type="hidden" name="redirect" value="pages/staffing">
            <?php }else{ ?>
            <input type="hidden" name="redirect" value="">
            <?php } ?>
            
            
      <div class="modal-body">
        
          <div class="form-group">
            <label for="recipient-name" class="control-label">Name:</label>
            <input required name="name" type="text" class="form-control" id="">
          </div>
                 <div class="form-group">
            <label for="recipient-name" class="control-label">Email:</label>
            <input required name="email" type="email" class="form-control" id="">
          </div>  <div class="form-group">
            <label for="recipient-name" class="control-label">Phone Number:</label>
            <input required name="phone" type="text" class="form-control" id="">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Details:</label>
            <textarea required name="detail" class="form-control" id="message-text"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
            </form>
    </div>
  </div>
</div>
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Free Consultation</h4>
      </div>
        <form method="post" action="<?php echo $baseUrl; ?>popup_emails/free_consultation">
           
            <input type="hidden" name="redirect" value="">
            
            
      <div class="modal-body">
        
          <div class="form-group">
            <label for="recipient-name" class="control-label">Name:</label>
            <input required name="name" type="text" class="form-control" id="">
          </div>
                 <div class="form-group">
            <label for="recipient-name" class="control-label">Email:</label>
            <input required name="email" type="email" class="form-control" id="">
          </div>  <div class="form-group">
            <label for="recipient-name" class="control-label">Phone Number:</label>
            <input required name="phone" type="text" class="form-control" id="">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Details:</label>
            <textarea required name="detail" class="form-control" id="message-text"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
            </form>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-contents">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    
     <div class="card card-container">
          
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="<?php echo $baseUrl; ?>assets/frontend/images/avatar_2x.png" />
            <h2>Login</h2>
            <p id="profile-name" class="profile-name-card"></p>
         <?php if($this->session->flashdata('login_error_msg')){ ?>
        <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Error!</h4>
                <?=$this->session->flashdata('login_error_msg')?>
              </div>          
    <?php } ?>
            <form class="form-signin" method="post" action="<?php echo $baseUrl; ?>job_seaker/login">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                <?php if(isset($career) && !empty($career)){ ?>
                <input type="hidden" name="redirect" value="careers/detail/<?php echo $career['id']; ?>">
                <?php }else{ ?>
                <input type="hidden" name="redirect" value="careers">
                <?php } ?>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
            <a href="#" id="forgotmodal" class="forgot-password">
                Forgot the password?
            </a>
               <a href="<?php echo $baseUrl; ?>job_seaker/register" class="forgot-password forgot-password1">
                New Account?
            </a>
        </div><!-- /card-container -->
    </div>
  </div>
</div>
    
    
    
    
    <div class="modal fade" id="forgoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-contents">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    
     <div class="card card-container">
          
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="<?php echo $baseUrl; ?>assets/frontend/images/avatar_2x.png" />
            <h2>Forgot password</h2>
            <p id="profile-name" class="profile-name-card"></p>
         <?php if($this->session->flashdata('forgot_error_msg')){ ?>
        <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Error!</h4>
                <?=$this->session->flashdata('forgot_error_msg')?>
              </div>          
    <?php } ?>
            <form class="form-signin" method="post" action="<?php echo $baseUrl; ?>job_seaker/forgot_password">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required>
                <?php if(isset($career) && !empty($career)){ ?>
                <input type="hidden" name="redirect" value="careers/detail/<?php echo $career['id']; ?>">
                <?php }else{ ?>
                <input type="hidden" name="redirect" value="careers">
                <?php } ?>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Submit</button>
            </form>
    </div>
  </div>
</div>
    </div>
    
    
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Check Vacancy</h4>
      </div>
        <form method="post" action="<?php echo $baseUrl; ?>popup_emails/vacancy">
            <?php if(isset($home_detail) && !empty($home_detail)){ ?>
            <input type="hidden" name="redirect" value="homes/home_detail/<?php echo $home_detail[0]['id']; ?>">
            <?php }else{ ?>
            <input type="hidden" name="redirect" value="">
            <?php } ?>
      <div class="modal-body">
        
          <div class="form-group">
            <label for="recipient-name" class="control-label">Name:</label>
            <input type="text" name="name" required class="form-control">
          </div>
                 <div class="form-group">
            <label for="recipient-name" class="control-label">Email:</label>
            <input type="email" name="email" required class="form-control">
          </div>  <div class="form-group">
            <label for="recipient-name" class="control-label">Phone Number:</label>
            <input type="text" name="phone" required class="form-control">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Description:</label>
            <textarea class="form-control" name="description" required></textarea>
          </div>
           <div class="form-group">
            <label for="message-text" class="control-label">How Quickly you need:</label>
            
            <div>
    <input type="radio" id="contactChoice1"
     name="duration" value="30" required>
    <label for="contactChoice1">30</label>

    <input type="radio" id="contactChoice2"
     name="duration" value="60">
    <label for="contactChoice2">60</label>

    <input type="radio" id="contactChoice3"
     name="duration" value="90">
    <label for="contactChoice3">90</label>
  </div>
            
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Check Vacancy</button>
      </div>
            </form>
    </div>
  </div>
</div>

    <!--Popups End-->
