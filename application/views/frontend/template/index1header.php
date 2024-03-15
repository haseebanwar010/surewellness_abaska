<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" />
 <link rel="stylesheet" href="<?php echo base_url('assets/css/slider.css');?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Sanchez" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/css.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/bootstrap.min.cs'); ?>" rel="stylesheet" />
</head>
<body>

<div class="modal fade" id="exampleModal16" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
   
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Request A Quote</h4>
      </div>
      <div class="modal-body">
        <form>
        <div class="row">
                 
         <div class="col-sm-6">
         	  <div class="form-group">
            <label for="recipient-name" class="control-label">Company Name:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
         	
         </div>
        <div class="col-sm-6">
        	<div class="form-group">
            <label for="recipient-name" class="control-label">Phone Number:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>  
        	
        </div>
        <div class="col-sm-6">
        	
        	 <div class="form-group">
            <label for="recipient-name" class="control-label">Fax Number:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        	
        </div>  
        <div class="col-sm-6">
        	
        	  <div class="form-group">
            <label for="recipient-name" class="control-label">Email Address:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        	
        </div>
        <div class="col-sm-6">
        	
        	<div class="form-group">
            <label for="recipient-name" class="control-label">Website Address:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        	
        </div>
           
        <div class="col-sm-6">
        	
        	<div class="form-group">
            <label for="recipient-name" class="control-label">Years in Business:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        	
        </div>
          <div class="col-sm-6">
          	
          	<div class="form-group">
            
            <label for="message-text" class="control-label">Timeframe for Services:</label>
            
            <div class="services_check_box">
    <input type="radio" id="contactChoice1"
     name="contact" value="email">
    <label for="contactChoice1">Immediate  30</label>

    <input type="radio" id="contactChoice2"
     name="contact" value="phone">
    <label for="contactChoice2">60</label>

    <input type="radio" id="contactChoice3"
     name="contact" value="mail">
    <label for="contactChoice3">90</label>
  </div>
            
          </div>
          	
          </div>
          <div class="col-sm-6">
          	
          	<div class="form-group">
            
            <label for="message-text" class="control-label">Are you the DM:</label>
            
            <div class="services_check_box">
    <input type="radio" id="contactChoice1"
     name="contact" value="email">
    <label for="contactChoice1">Yes</label>

    <input type="radio" id="contactChoice2"
     name="contact" value="phone">
    <label for="contactChoice2">Not</label>
  </div>
            
          </div>
          	
          </div>
          <div class="col-sm-12 form-group ">
          <label for="message-text" class="control-label">Services Neede:</label>
          	<div class="services_check_box"><div >
    <input type="checkbox" id="coding" name="interest" value="coding">
    <label for="coding">Facilities Mgmt</label>
  </div>
  <div>
    <input type="checkbox" id="music" name="interest" value="Personal">
    <label for="music">Personal Consultation</label>
  </div>
  <div>
    <input type="checkbox" id="Staffing" name="interest" value="Staffing">
    <label for="Staffing">Staffing</label>
  </div>
  <div>
    <input type="checkbox" id="Services" name="interest" value="music">
    <label for="Services">All Services</label>
  </div></div>
          </div> 
           <div class="col-sm-12">
           	
           	<div class="form-group">
            <label for="message-text" class="control-label">Details:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
           	
           </div>
          
          
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
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
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Name:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
                 <div class="form-group">
            <label for="recipient-name" class="control-label">Email:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>  <div class="form-group">
            <label for="recipient-name" class="control-label">Phone Number:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Details:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
     
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Speak with Case Consultant </h4>
      </div>
      <div class="modal-body">
        <form>
        <div class="row">
                 
         <div class="col-sm-6">
         	  <div class="form-group">
            <label for="recipient-name" class="control-label">Company Name:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
         	
         </div>
        <div class="col-sm-6">
        	<div class="form-group">
            <label for="recipient-name" class="control-label">Phone Number:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>  
        	
        </div>
        <div class="col-sm-6">
        	
        	 <div class="form-group">
            <label for="recipient-name" class="control-label">Fax Number:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        	
        </div>  
        <div class="col-sm-6">
        	
        	  <div class="form-group">
            <label for="recipient-name" class="control-label">Email Address:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        	
        </div>
        <div class="col-sm-6">
        	
        	<div class="form-group">
            <label for="recipient-name" class="control-label">Website Address:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        	
        </div>
           
        <div class="col-sm-6">
        	
        	<div class="form-group">
            <label for="recipient-name" class="control-label">Years in Business:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        	
        </div>
          <div class="col-sm-6">
          	
          	<div class="form-group">
            
            <label for="message-text" class="control-label">Timeframe for Services:</label>
            
            <div class="services_check_box">
    <input type="radio" id="contactChoice1"
     name="contact" value="email">
    <label for="contactChoice1">Immediate  30</label>

    <input type="radio" id="contactChoice2"
     name="contact" value="phone">
    <label for="contactChoice2">60</label>

    <input type="radio" id="contactChoice3"
     name="contact" value="mail">
    <label for="contactChoice3">90</label>
  </div>
            
          </div>
          	
          </div>
          <div class="col-sm-6">
          	
          	<div class="form-group">
            
            <label for="message-text" class="control-label">Are you the DM:</label>
            
            <div class="services_check_box">
    <input type="radio" id="contactChoice1"
     name="contact" value="email">
    <label for="contactChoice1">Yes</label>

    <input type="radio" id="contactChoice2"
     name="contact" value="phone">
    <label for="contactChoice2">Not</label>
  </div>
            
          </div>
          	
          </div>
          <div class="col-sm-12 form-group ">
          <label for="message-text" class="control-label">Services Neede:</label>
          	<div class="services_check_box"><div >
    <input type="checkbox" id="coding" name="interest" value="coding">
    <label for="coding">Facilities Mgmt</label>
  </div>
  <div>
    <input type="checkbox" id="music" name="interest" value="Personal">
    <label for="music">Personal Consultation</label>
  </div>
  <div>
    <input type="checkbox" id="Staffing" name="interest" value="Staffing">
    <label for="Staffing">Staffing</label>
  </div>
  <div>
    <input type="checkbox" id="Services" name="interest" value="music">
    <label for="Services">All Services</label>
  </div></div>
          </div> 
           <div class="col-sm-12">
           	
           	<div class="form-group">
            <label for="message-text" class="control-label">Details:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
           	
           </div>
          
          
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
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
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Name:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
                 <div class="form-group">
            <label for="recipient-name" class="control-label">Email:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>  <div class="form-group">
            <label for="recipient-name" class="control-label">Phone Number:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Details:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
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
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Name:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
                 <div class="form-group">
            <label for="recipient-name" class="control-label">Email:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>  <div class="form-group">
            <label for="recipient-name" class="control-label">Phone Number:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Details:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-contents">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    
     <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="<?php echo base_url('assets/images/avatar_2x.png'); ?>" />
            <h2>Login</h2>
            <p id="profile-name" class="profile-name-card"></p>
            <form method="post" action="<?php echo base_url('seekerlogin/check'); ?>" class="form-signin">
<!--                <span id="reauth-email" class="reauth-email"></span>-->
                <input type="email" name="email"  class="form-control" placeholder="Email address" required autofocus>
                <input type="password" name="password"  class="form-control" placeholder="Password" required>

            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="seekersubmit">Sign in</button>
            </form><!-- /form -->
            <a href="" class="forgot-password">
                Forgot the password?
            </a>
               <a href="<?php echo base_url('Registers'); ?>" class="forgot-password forgot-password1">
                New Account?
            </a>
        </div><!-- /card-container -->
    </div>
  </div>
</div>

<div class="header_banner">
<div class="header header1">
<div class="header_top">
	<div class="container">
		<div class="row">
					
					<div class="col-sm-4">
					<div class="top_btns"><img src="images/t1.png" /></div>
			<div class="social_media">
						
							<ul>
								<li ><a href="#" class="fb"></a></li> 
<li ><a href="#" class="gm"></a></li>
<li><a href="#"  class="tw"></a></li>
<li ><a href="#" class="lnk"></a></li>
<li ><a href="#" class="youtube"></a></li>
							</ul>
						</div>
		</div>
		<div class="col-sm-8">
			<div class="tp2"><img src="images/t2.png" alt=""/></div>
			<div class="cont_info">
					<div class="ph">206-212-6439, 855-818-4848</div>
					<div class="email">info@surewellnessreferrals.com</div>
					<div class="clock">24/7</div>
					
			</div>
			
		</div>
		
		
		</div>
	</div>
	
	</div>
<div class="container">
		<div class="row">
		  <div class="col-lg-4 col-md-12 col-sm-12">
				
				<div class="logo logo1">
					<a href="surewellnes.html">
					<img src="<?php echo base_url('assets/images/logo.png');?>" width="326" height="146" alt=""/> </a>
			  </div>
				
		  </div>
			<div class="col-lg-8 col-md-12 col-sm-12">
				
				


		<div class="menu_bx">
			
			<div class="free_cons free_cons1">
				<a href="#" class="requestion_a_quote"  data-toggle="modal" data-target="#exampleModal1" data-whatever="@getbootstrap">FREE CONSULTATION</a>
			<a href="<?php echo base_url('Careers'); ?>" class="requestion_a_quote">Careers</a>
			</div>
			
			<div class="mobile_menu">
             
              	<a href="javascript:void(0);">
                	<span></span>
                	<span></span>
                	<span></span>
                </a>
              </div>
			
					<div class="menu menu_home">
								<ul>
									<li><a href="index1.html">Home</a></li>
										<li><a href="Management.html">facilities management</a></li>
										<li><a href="consulting.html">Professional Consulting</a></li>
										<li><a href="staffing.html">Staffing</a></li>
										<li><a href="contact_us1.html">Contact Us</a></li>
					
<!--
                   //                if($this->session->userdata('validated')){}
//                    
//                    echo $session_data['email'];
-->
                   
                    <?php
                    if($this->session->userdata('validated')){
                    ?> 
                					
				<li style="color:white;"><a href="<?php echo base_url('signout'); ?>">LogOut</a></li>
				<?php
                }
                ?>
<!--        <?php echo $_SESSION['email']; ?>-->
                   
                   


                  
								</ul>
							</div>
			
		</div>
		


									
			</div>
		</div>
</div>
</div>	


<div class="banner_inner" style="background-image: url(<?php echo base_url('assets/images/home/banner_innber.jpg'); ?>);">
</div>
</div>

