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
 <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
 <link rel="stylesheet" href="<?php echo base_url('assets/css/slider.css');?>">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Sanchez" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/css.css'); ?>" rel="stylesheet" />
</head>
<body >



	
	
	
	
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




<div class="splash_screen_main_content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="splash_screen_box">
					
					
	  <div class="splash_screen">
   			<a href="<?php echo base_url('homes'); ?>">
    			<div class="splash_pic"><img src="<?php echo base_url('assets/images/splash_1.png'); ?>" /></div>
    			<div class="btn_splash">
    				<div class="splashbtns">Searching for homes</div>
    			</div>
    			</a>
	  </div>
   			  <div class="splash_screen splash_screen1">
   			  <a href="<?php echo base_url('home'); ?>">
    			<div class="splash_pic"><img src="<?php echo base_url('assets/images/splash_2.png');?>" /></div>
    			<div class="btn_splash">
    				<div class="splashbtns">Home Providers</div>

    			</div>
    			</a>
	  </div>
	  </div>
	  <div class="free_cons free_cons_11">
				
			<a href="<?php echo base_url('Careers'); ?>" class="requestion_a_quote">Careers</a>
			</div>
	  <div class="concultacny concultacny_11">
						<ul>
							<li>
								<a href="#" data-toggle="modal" data-target="#exampleModal12" data-whatever="@getbootstrap">
									
									<div class="contancty_info">
										<h2>Speak  With a  Case
Consultant
</h2>
								<div class="read_more">Read More</div>
									</div>
								</a>
							</li>
							<li>
								<a href="#" data-toggle="modal" data-target="#exampleModal13" data-whatever="@getbootstrap">
									
									<div class="contancty_info contancty_info1">
										<h2>To have a Consultant
Contact You
</h2>
								<div class="read_more">Read More</div>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	
</div>
<div class="header_banner header_banner_11">
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
					<a href="index.html">
					<img src="<?php echo base_url('assets/images/logo.png');?>" width="326" height="146" alt=""/> </a>
			  </div>
				
		  </div>
			<div class="col-sm-8">
				
				


		<div class="menu_bx">
			
			
              	<div class="free_cons">
				<a href="#" class="requestion_a_quote">FREE CONSULTATION</a>
			<a href="<?php echo base_url('Careers');?>" class="requestion_a_quote">Careers</a>
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
										<li><a href="#">About Us</a></li>
										<li><a href="property.html">Search</a></li>
										<li><a href="contact_us.html">Contact Us</a></li>
								</ul>
							</div>
			
		</div>
		


									
			</div>
		</div>
</div>
</div>


	
	
	<div class="banners">
	 <div class="slider-container">
  <div class="slider">
   	<div class="abs"></div>
   		<div class="abs1"></div>
    <div class="slider__item">
     <a href="#" style="background-image: url(images/banner_1.png);">
    
    
      
      
      	 </a>
    </div>
  <div class="slider__item">
     <a href="#" style="background-image: url(images/banner_2.png);">
    
    
      
      		
      	 </a>
    </div>
  <div class="slider__item">
     <a href="#" style="background-image: url(images/banner_3.png);">
    
    
      
      		
      	 </a>
    </div>
  <div class="slider__item">
     <a href="#" style="background-image: url(images/banner_4.png);">
    
    
      
      		
      	 </a>
    </div>
      <div class="slider__item">
     <a href="#" style="background-image: url(images/banner_5.png);">
    
    
      
      		
      	 </a>
    </div>
      <div class="slider__item">
     <a href="#" style="background-image: url(images/banner_6.png);">
    
    
      
      		
      	 </a>
    </div>
      <div class="slider__item">
     <a href="#" style="background-image: url(images/banner_7.png);">
    
    
      
      		
      	 </a>
    </div>   
    <div class="slider__item">
     <a href="#" style="background-image: url(images/banner_8.png);">
    
    
      
      		
      	 </a>
    </div>

  </div>
    <div class="slider__switch slider__switch--prev" data-ikslider-dir="prev">
      <span><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20"><path d="M13.89 17.418c.27.272.27.71 0 .98s-.7.27-.968 0l-7.83-7.91c-.268-.27-.268-.706 0-.978l7.83-7.908c.268-.27.7-.27.97 0s.267.71 0 .98L6.75 10l7.14 7.418z"/></svg></span>
    </div>
    <div class="slider__switch slider__switch--next" data-ikslider-dir="next">
      <span><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20"><path d="M13.25 10L6.11 2.58c-.27-.27-.27-.707 0-.98.267-.27.7-.27.968 0l7.83 7.91c.268.27.268.708 0 .978l-7.83 7.908c-.268.27-.7.27-.97 0s-.267-.707 0-.98L13.25 10z"/></svg></span>
    </div>
</div>

</div>
<!--
	<div class="video_header">
		<div class="container">
			<div class="container">
				<div class="row">
					
					
					<div class="concultacny">
						<ul>
							<li>
								<a href="#" data-toggle="modal" data-target="#exampleModal12" data-whatever="@getbootstrap">
									
									<div class="contancty_info">
										<h2>Speak  With a  Case
Consultant
</h2>
								<div class="read_more">Read More</div>
									</div>
								</a>
							</li>
							<li>
								<a href="#" data-toggle="modal" data-target="#exampleModal13" data-whatever="@getbootstrap">
									
									<div class="contancty_info contancty_info1">
										<h2>To have a Consultant
Contact You
</h2>
								<div class="read_more">Read More</div>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
-->
</div>

	
	

</body>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

 
 
 
  <script src="js/bootstrap.min.js"></script>
     
    <script type="text/javascript">
		$(document).ready(function(){
			
				$('.mobile_menu a').click(function(){
				$('.menu').slideToggle();
				
				});
			
		});
	</script>

<script src="js/slider.js"></script>
<script>
$(".slider-container").ikSlider({
  speed: 500
});
$(".slider-container").on('changeSlide.ikSlider', function (evt) { console.log(evt.currentSlide); });

</script>

</html>

