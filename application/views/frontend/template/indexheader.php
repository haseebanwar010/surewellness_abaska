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
</head>
<body>

<div class="modal fade" id="exampleModal122" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
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
        <h4 class="modal-title" id="exampleModalLabel">Speak With a Case Consultant</h4>
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

<div class="header_banner">
<div class="header">
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
		  <div class="col-sm-4">
				
				<div class="logo">
					<a href="surewellnes.html">
					<img src="<?php echo base_url('assets/images/logo.png');?>" width="326" height="146" alt=""/> </a>
			  </div>
				
		  </div>
			<div class="col-sm-8">
				
				


		<div class="menu_bx">
			
			
              	<div class="free_cons">
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
							<div class="menu">
								<ul>
									<li><a href="index.html">Home</a></li>
										<li><a href="about.html">About Us</a></li>
										<li><a href="property.html">Search</a></li>
										<li><a href="contact_us.html">Contact Us</a></li>
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


