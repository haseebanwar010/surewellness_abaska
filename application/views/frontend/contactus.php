	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
$sitedata=getsitedata();
?>
<?php if(isset($sectionid) && $sectionid==1){ ?><div class="banner_inner" style="background-image: url(<?php echo $baseUrl; ?>assets/frontend/images/banner_innber.jpg);"></div><?php }else{ ?>
<div class="banner_inner" style="background-image: url(<?php echo $baseUrl; ?>assets/frontend/images/home/banner_innber.jpg);"></div><?php } ?>

	

</div>
<div class="breadcrumb_container">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?php echo $baseUrl; ?>">Home</a></li>
  <li class="breadcrumb-item active">Staffing</li>
</ol>

				</div>
			</div>
		</div>
</div>
<div class="job_container job_container1">
		<div class="container">
              <?php if(validation_errors()){ ?>
        <section class="content alertcontent">    
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <?php echo validation_errors(); ?>
            </div>
        </section>
    <?php } ?>
            <?php if($this->session->flashdata('error_msg')){ ?>
        <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Error!</h4>
                <?=$this->session->flashdata('error_msg')?>
              </div>          
    <?php } ?>
            <?php if($this->session->flashdata('msg')){ ?>
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?=$this->session->flashdata('msg')?>
              </div>          
    <?php } ?>
		<div class="row">
			<div class="col-sm-12">
				<div class="inner_page_heading">
				<h3>Contact Us</h3>
				
			</div>
			<div class="inner_page_heading_line"></div>
			
				<div class="cont_tpl">
					<div class="col-sm-4">
				<div class="footer_info1">
					<div class="ft_icon1"></div>
					<p><?php echo $sitedata->email; ?></p>
				</div>
			</div>
<!--
			<div class="col-sm-3">
				<div class="footer_info1">
					<div class="ft_icon2"></div>
					<p><?php echo $sitedata->address; ?></p>
				</div>
			</div>
-->
			<div class="col-sm-4">
				<div class="footer_info1">
					<div class="ft_icon3"></div>
					<p>T: <?php echo $sitedata->phone; ?><br>
F: <?php echo $sitedata->fax; ?></p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="footer_info1">
					<div class="ft_icon4"></div>
					<p><?php echo $sitedata->availability; ?></p>
				</div>
			</div>
				</div>
					
		<div class="contact_us_page">
			
					<h3>Let’s Get In Touch</h3>
				<div class="social_media_cont">
					
					<div class="f_social_media">
						
							<ul>
								<li><a href="<?php echo $sitedata->facebook; ?>" class="fb1"></a></li> 
<li><a href="<?php echo $sitedata->google_plus; ?>" class="gm1"></a></li>
<li><a href="<?php echo $sitedata->twitter; ?>" class="tw1"></a></li>
<li><a href="<?php echo $sitedata->linkedin; ?>" class="lnk1"></a></li>
<li><a href="<?php echo $sitedata->youtube; ?>" class="youtube1"></a></li>
							</ul>
					</div>
					
				</div>
				<h4>Contact Us</h4>
            <form method="post" action="">
				<div class="col-sm-6">
						<div class="input_types">
							<input type="text" placeholder="Name" class="cont_if" name="name" value="<?php if(isset($_POST['name'])){ echo $_POST['name']; } ?>"> 
						</div>
				</div>
				
				<div class="col-sm-6">
					<div class="input_types">
							<input type="text" placeholder="Phone Number" class="cont_if" name="phone" value="<?php if(isset($_POST['phone'])){ echo $_POST['phone']; } ?>"> 
						</div>
				</div>
				<div class="col-sm-6">
					<div class="input_types">
							<input type="email" placeholder="Email Address" class="cont_if" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>"> 
						</div>
				</div>
				<div class="col-sm-6">
					<div class="input_types">
							<input type="text" placeholder="Subject" class="cont_if" name="subject" value="<?php if(isset($_POST['subject'])){ echo $_POST['subject']; } ?>"> 
						</div>
				</div>
				<div class="col-sm-12">
					<div class="input_types">
							<textarea class="cont_if1" placeholder="Message" name="message"><?php if(isset($_POST['message'])){ echo $_POST['message']; } ?></textarea> 
						</div>
				</div>
				<button class="btnscont">send</button>
            </form>
		</div>
	
	
				
			
			
			</div>
			
			
		</div>
	</div>
	</div>
<div id="map" class="contactusmap"></div>
    <script>
      var map;
      function initMap() {
          var uluru = {lat: 47.296160, lng: -122.311215};
          var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxMeZhnLJfK4ax7_GOGDd00OS5-jBFc4M&callback=initMap"
    async defer></script>

	
<!--
	<div class="googlemap">
		<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:400px;width:100%;'><div id='gmap_canvas' style='height:400px;width:100%;'></div><div><small><a href="http://www.googlemapsgenerator.com">google maps html</a></small></div><div><small><a href="googlemapsgenerator.com">http://www.googlemapsgenerator.com									http://www.googlemapsgenerator.com									http://www.googlemapsgenerator.com/es/									http://www.googlemapsgenerator.com									http://www.googlemapsgenerator.com									http://www.googlemapsgenerator.com</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(46.6849133,7.856176199999936),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(46.6849133,7.856176199999936)});infowindow = new google.maps.InfoWindow({content:'<strong>Surewellness Adult Referral</strong><br>Lorem ipsum dolor sit amet<br> Tel: +1 123 456 7890'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
	</div>
-->
	
	