<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
$sitedata=getsitedata();

?>
<body >


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
            <input type="text" class="form-control" >
          </div>
         	
         </div>
        <div class="col-sm-6">
        	<div class="form-group">
            <label for="recipient-name" class="control-label">Phone Number:</label>
            <input type="text" class="form-control" >
          </div>  
        	
        </div>
        <div class="col-sm-6">
        	
        	 <div class="form-group">
            <label for="recipient-name" class="control-label">Fax Number:</label>
            <input type="text" class="form-control" >
          </div>
        	
        </div>  
        <div class="col-sm-6">
        	
        	  <div class="form-group">
            <label for="recipient-name" class="control-label">Email Address:</label>
            <input type="text" class="form-control" >
          </div>
        	
        </div>
        <div class="col-sm-6">
        	
        	<div class="form-group">
            <label for="recipient-name" class="control-label">Website Address:</label>
            <input type="text" class="form-control" >
          </div>
        	
        </div>
           
        <div class="col-sm-6">
        	
        	<div class="form-group">
            <label for="recipient-name" class="control-label">Years in Business:</label>
            <input type="text" class="form-control" >
          </div>
        	
        </div>
          <div class="col-sm-6">
          	
          	<div class="form-group">
            
            <label for="message-text" class="control-label">Timeframe for Services:</label>
            
            <div class="services_check_box">
    <input type="radio" 
     name="contact" value="email">
    <label for="contactChoice1">Immediate  30</label>

    <input type="radio" 
     name="contact" value="phone">
    <label for="contactChoice2">60</label>

    <input type="radio" 
     name="contact" value="mail">
    <label for="contactChoice3">90</label>
  </div>
            
          </div>
          	
          </div>
          <div class="col-sm-6">
          	
          	<div class="form-group">
            
            <label for="message-text" class="control-label">Are you the DM:</label>
            
            <div class="services_check_box">
    <input type="radio" 
     name="contact" value="email">
    <label for="contactChoice1">Yes</label>

    <input type="radio"
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
    <input type="checkbox"  name="interest" value="Staffing">
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
            <textarea class="form-control"></textarea>
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
            <input type="text" class="form-control" >
          </div>
                 <div class="form-group">
            <label for="recipient-name" class="control-label">Email:</label>
            <input type="text" class="form-control" >
          </div>  <div class="form-group">
            <label for="recipient-name" class="control-label">Phone Number:</label>
            <input type="text" class="form-control" >
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
            <input type="text" class="form-control" >
          </div>
         	
         </div>
        <div class="col-sm-6">
        	<div class="form-group">
            <label for="recipient-name" class="control-label">Phone Number:</label>
            <input type="text" class="form-control" >
          </div>  
        	
        </div>
        <div class="col-sm-6">
        	
        	 <div class="form-group">
            <label for="recipient-name" class="control-label">Fax Number:</label>
            <input type="text" class="form-control" >
          </div>
        	
        </div>  
        <div class="col-sm-6">
        	
        	  <div class="form-group">
            <label for="recipient-name" class="control-label">Email Address:</label>
            <input type="text" class="form-control" >
          </div>
        	
        </div>
        <div class="col-sm-6">
        	
        	<div class="form-group">
            <label for="recipient-name" class="control-label">Website Address:</label>
            <input type="text" class="form-control" >
          </div>
        	
        </div>
           
        <div class="col-sm-6">
        	
        	<div class="form-group">
            <label for="recipient-name" class="control-label">Years in Business:</label>
            <input type="text" class="form-control" >
          </div>
        	
        </div>
          <div class="col-sm-6">
          	
          	<div class="form-group">
            
            <label for="message-text" class="control-label">Timeframe for Services:</label>
            
            <div class="services_check_box">
    <input type="radio" 
     name="contact" value="email">
    <label for="contactChoice1">Immediate  30</label>

    <input type="radio" 
     name="contact" value="phone">
    <label for="contactChoice2">60</label>

    <input type="radio" 
     name="contact" value="mail">
    <label for="contactChoice3">90</label>
  </div>
            
          </div>
          	
          </div>
          <div class="col-sm-6">
          	
          	<div class="form-group">
            
            <label for="message-text" class="control-label">Are you the DM:</label>
            
            <div class="services_check_box">
    <input type="radio" 
     name="contact" value="email">
    <label for="contactChoice1">Yes</label>

    <input type="radio" 
     name="contact" value="phone">
    <label for="contactChoice2">Not</label>
  </div>
            
          </div>
          	
          </div>
          <div class="col-sm-12 form-group ">
          <label for="message-text" class="control-label">Services Neede:</label>
          	<div class="services_check_box"><div >
    <input type="checkbox"  name="interest" value="coding">
    <label for="coding">Facilities Mgmt</label>
  </div>
  <div>
    <input type="checkbox" name="interest" value="Personal">
    <label for="music">Personal Consultation</label>
  </div>
  <div>
    <input type="checkbox" id="Staffing" name="interest" value="Staffing">
    <label for="Staffing">Staffing</label>
  </div>
  <div>
    <input type="checkbox" name="interest" value="music">
    <label for="Services">All Services</label>
  </div></div>
          </div> 
           <div class="col-sm-12">
           	
           	<div class="form-group">
            <label for="message-text" class="control-label">Details:</label>
            <textarea class="form-control" ></textarea>
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
            <input type="text" class="form-control" >
          </div>
                 <div class="form-group">
            <label for="recipient-name" class="control-label">Email:</label>
            <input type="text" class="form-control" >
          </div>  <div class="form-group">
            <label for="recipient-name" class="control-label">Phone Number:</label>
            <input type="text" class="form-control" >
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Details:</label>
            <textarea class="form-control" ></textarea>
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
<div class="header header1">
<div class="header_top">
	<div class="container">
		<div class="row">
					
					<div class="col-sm-4">
					<div class="top_btns"><img src="<?php echo $baseUrl; ?>assets/frontend/images/t1.png" /></div>
			<div class="social_media">
						
							<ul>
							
                                	<li ><a href="<?php echo $sitedata->facebook; ?>" class="fb"></a></li> 
<li ><a href="<?php echo $sitedata->google_plus; ?>" class="gm"></a></li>
<li><a href="<?php echo $sitedata->twitter; ?>"  class="tw"></a></li>
<li ><a href="<?php echo $sitedata->linkedin; ?>" class="lnk"></a></li>
<li ><a href="<?php echo $sitedata->youtube; ?>" class="youtube"></a></li>
							</ul>
						</div>
		</div>
		
		<div class="col-sm-8">
			<div class="tp2"><img src="<?php echo $baseUrl; ?>assets/frontend/images/t2.png" alt=""/></div>
			<div class="cont_info">
					<div class="ph"><?php echo $sitedata->phone; ?>, <?php echo $sitedata->phone2; ?></div>
					<div class="email"><?php echo $sitedata->email; ?></div>
					<div class="clock"><?php echo $sitedata->availability; ?></div>
					
			</div>
			
		</div>
		
		</div>
	</div>
	
	</div>
<div class="container">
		<div class="row">
		  <div class="col-lg-4 col-md-12 col-sm-12">
				
				<div class="logo logo1">
					<a href="<?php echo $baseUrl; ?>">
					<img src="<?php echo $baseUrl; ?>assets/frontend/images/logo.png" width="326" height="146" alt=""/> </a>
			  </div>
				
		  </div>
			<div class="col-lg-8 col-md-12 col-sm-12">
				
				


		<div class="menu_bx">
			
			<div class="free_cons free_cons1">
				<a href="#" class="requestion_a_quote"  data-toggle="modal" data-target="#exampleModal1" data-whatever="@getbootstrap">FREE CONSULTATION</a>
			<a href="<?php echo $baseUrl; ?>careers" class="requestion_a_quote">Careers</a>
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
									<li><a href="<?php echo $baseUrl; ?>">Home</a></li>
                                    <li><a href="<?php echo $baseUrl; ?>">Search</a></li>
										<li><a href="<?php echo $baseUrl; ?>pages/management">facilities management</a></li>
								    
										<li><a href="<?php echo $baseUrl; ?>pages/consulting">Professional Consulting</a></li>
										<li><a href="<?php echo $baseUrl; ?>pages/staffing">Staffing</a></li>
										<li><a href="<?php echo $baseUrl; ?>pages/contactus">Contact Us</a></li>
								</ul>
							</div>
			
		</div>
		


									
			</div>
		</div>
</div>
</div>	

