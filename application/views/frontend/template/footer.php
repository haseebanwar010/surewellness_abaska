<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<footer>

	<div class="footer_tp">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
						<div class="f_social_media">
						
							<ul>
								<li ><a href="#" class="fb1"></a></li> 
<li ><a href="#" class="gm1"></a></li>
<li><a href="#"  class="tw1"></a></li>
<li ><a href="#" class="lnk1"></a></li>
<li ><a href="#" class="youtube1"></a></li>
							</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="ft_box">
						<div class="footer_bx">
					    <img src="images/footericon_1.png" alt=""/> </div>
						<div class="footer_info">
							
							<p>Ph: <a href="tel:206-212-6439">206-212-6439</a>, <a href="tel:855-818-4848">855-818-4848</a></p>
						
<p>Fax:  +1 206 592 2559</p>
						</div>
						
					</div>
				</div><div class="col-md-3 col-sm-6">
					<div class="ft_box">
						<div class="footer_bx">
					    <img src="images/footericon_2.png" alt=""/> </div>
						<div class="footer_info">
							<a href="mailto:info@surewellnessreferrals.com">
							<div class="email_info">info@surewellnessreferrals.com</div></a>
							
						</div>
						
					</div>
				</div><div class="col-md-3 col-sm-6">
					<div class="ft_box">
						<div class="footer_bx">
					    <img src="images/footericon_3.png" alt=""/> </div>
						<div class="footer_info">
						<a href="contact_us.html"><h3>Surewellness</h3>
							<p>1720 South 341st Place, Suite C-2 Federal Way, WA 98003</p></a>	
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer_links">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="links_footer">
						<h3>Quick links</h3>
						<div class="line"></div>
							<ul>
								<li><a href="index.html">HOME</a></li>
								<li><a href="about.html">ABOUT US</a></li>
<li><a href="index.html">Why Choose Us</a></li>
							</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="links_footer">
						<h3>Useful Links</h3>
						<div class="line"></div>
							<ul>
<li><a href="testimonial.html">Testimonials</a></li>
<li><a href="job_listing1.html">Career</a></li>
<li><a href="register1.html">Register</a></li>
<li><a href="property.html">SEARCH</a></li>
							</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="links_footer">
												<h3>Privacy Policy</h3>
						<div class="line"></div>
							<ul>
								<li><a href="about.html">TERMS OF USE</a></li>
<li><a href="contact_us.html">CONTACT US</a></li>
<li><a href="about.html">Privacy Policy</a></li>
							</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer_copy_rights">
		<div class="container">
			<div class="row"><div class="col-sm-12"><div class="livechat"><a href="#"><img src="images/live_chat.png" alt=""/></a></div></div>
					<div class="col-md-8 col-sm-12">
					<div class="copy_rights">
					© Copyright 2018  Surewellness Adult Referral Services. All Rights Reserved</div></div>
		<div class="col-md-4 col-sm-12"><div class="copy_rights copy_rights1">Powered By: Abaska Technologies</div></div>
			</div>
		</div>
		
	</div>
</footer>

</body>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
 
<script src="<?php echo base_url('assets/jquery.min.js');?>"></script>

 
 
 
  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
     
    <script type="text/javascript">
		$(document).ready(function(){
			
				$('.mobile_menu a').click(function(){
				$('.menu').slideToggle();
				
				});
			
		});
	</script>

<script src="<?php echo base_url('assets/js/slider.js'); ?>"></script>
<script>
$(".slider-container").ikSlider({
  speed: 500
});
$(".slider-container").on('changeSlide.ikSlider', function (evt) { console.log(evt.currentSlide); });

</script>
     
    <script type="text/javascript">
		$(document).ready(function(){
			
				$('.mobile_menu a').click(function(){
				$('.menu').slideToggle();
				
				});
			
		});
	</script>

<script src="<?php echo base_url('assets/js/chosen.jquery.js');?>" type="text/javascript"></script>

  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>
  
<script>
 function change_city()
 {
  city=$('#state_id').val();
  $('#city_id').load('<?php echo base_url();?>registers/city/'+city);
 }
 
</script>
  




</html>