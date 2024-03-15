<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
$sitedata=getsitedata();
?>
	
<footer>

	<div class="footer_tp <?php if(isset($sectionid) && $sectionid==2){ echo 'footer_tp1'; } ?>">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
						<div class="f_social_media">
						
							<ul>
                                		<li ><a target="_blank" href="<?php echo $sitedata->facebook; ?>" class="fb1"></a></li> 
<li ><a target="_blank" href="<?php echo $sitedata->google_plus; ?>" class="gm1"></a></li>
<li><a target="_blank" href="<?php echo $sitedata->twitter; ?>"  class="tw1"></a></li>
<li ><a target="_blank" href="<?php echo $sitedata->linkedin; ?>" class="lnk1"></a></li>
<li ><a target="_blank" href="<?php echo $sitedata->youtube; ?>" class="youtube1"></a></li>
							
							</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="ft_box">
						<div class="footer_bx">
                            <?php if(isset($sectionid) && $sectionid==2){ ?>
                            <img src="<?php echo $baseUrl; ?>assets/frontend/images/home/footericon_1.png" alt=""/> </div>
                            <?php }else{ ?>
					    <img src="<?php echo $baseUrl; ?>assets/frontend/images/footericon_1.png" alt=""/> </div>
						<?php } ?>
						<div class="footer_info">
							
							<p>Ph: <a href="tel:<?php echo $sitedata->phone; ?>"><?php echo $sitedata->phone; ?></a>, <a href="tel:<?php echo $sitedata->phone2; ?>"><?php echo $sitedata->phone2; ?></a></p>
						
<p>Fax:  <?php echo $sitedata->fax; ?></p>
						</div>
						
					</div>
				</div><div class="col-md-3 col-sm-6">
					<div class="ft_box">
						<div class="footer_bx">
                            <?php if(isset($sectionid) && $sectionid==2){ ?>
                            <img src="<?php echo $baseUrl; ?>assets/frontend/images/home/footericon_2.png" alt=""/> </div>
                            <?php }else{ ?>
					    <img src="<?php echo $baseUrl; ?>assets/frontend/images/footericon_2.png" alt=""/> </div>
						<?php } ?>
                        <div class="footer_info">
							<a href="mailto:info@surewellnessreferrals.com">
							<div class="email_info"><?php echo $sitedata->email; ?></div></a>
							
						</div>
						
					</div>
				</div>
<!--
        <div class="col-md-3 col-sm-6">
					<div class="ft_box">
						<div class="footer_bx">
                             <?php if(isset($sectionid) && $sectionid==2){ ?>
                            <img src="<?php echo $baseUrl; ?>assets/frontend/images/home/footericon_3.png" alt=""/> </div>
                            <?php }else{ ?>
					    <img src="<?php echo $baseUrl; ?>assets/frontend/images/footericon_3.png" alt=""/> </div>
						<?php } ?>
						<div class="footer_info">
						<a href="<?php echo $baseUrl; ?>pages/contactus"><h3>Surewellness</h3>
							<p><?php echo $sitedata->address; ?></p></a>	
						</div>
						
					</div>
-->
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
								<li><a href="<?php echo $baseUrl; ?>">HOME</a></li>
								<li><a href="<?php echo $baseUrl; ?>pages/aboutus">ABOUT US</a></li>
<!--<li><a href="index.html">Why Choose Us</a></li>-->
							</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="links_footer">
						<h3>Useful Links</h3>
						<div class="line"></div>
							<ul>
<li><a href="<?php echo $baseUrl; ?>testimonials">Testimonials</a></li>
<li><a href="<?php echo $baseUrl; ?>careers">Career</a></li>
<!--<li><a href="register1.html">Register</a></li>-->
<li><a href="<?php echo $baseUrl; ?>homes/all_homes">SEARCH</a></li>
							</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="links_footer">
												<h3>Privacy Policy</h3>
						<div class="line"></div>
							<ul>
								<li><a href="<?php echo $baseUrl; ?>pages/aboutus">TERMS OF USE</a></li>
<li><a href="<?php echo $baseUrl; ?>pages/contactus">CONTACT US</a></li>
<li><a href="<?php echo $baseUrl; ?>pages/aboutus">Privacy Policy</a></li>
							</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer_copy_rights">
		<div class="container">
			<div class="row"><div class="col-sm-12"><div class="livechat"><a href="#"><img src="<?php echo $baseUrl; ?>assets/frontend/images/live_chat.png" alt=""/></a></div></div>
					<div class="col-md-8 col-sm-12">
					<div class="copy_rights">
					© Copyright 2018  Surewellness Adult Referral Services. All Rights Reserved</div></div>
                <div class="col-md-4 col-sm-12"><div class="copy_rights copy_rights1">Powered By: <a href="<?php echo $baseUrl; ?>" target="_blank">Sure Wellness</a></div></div>
			</div>
		</div>
		
	</div>
</footer>

</body>