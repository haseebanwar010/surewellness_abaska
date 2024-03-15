	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
?>
	<div class="banners">
	 <div class="slider-container">
  <div class="slider">
   	<div class="abs"></div>
   		<div class="abs1"></div>
      <?php foreach($banners as $banner){ ?>
    <div class="slider__item">
     <a href="#" style="background-image: url(<?php echo $baseUrl; ?>uploads/<?php echo $banner['image']; ?>);"></a>
    </div>
<?php } ?>
  </div>
    <div class="slider__switch slider__switch--prev" data-ikslider-dir="prev">
      <span><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20"><path d="M13.89 17.418c.27.272.27.71 0 .98s-.7.27-.968 0l-7.83-7.91c-.268-.27-.268-.706 0-.978l7.83-7.908c.268-.27.7-.27.97 0s.267.71 0 .98L6.75 10l7.14 7.418z"/></svg></span>
    </div>
    <div class="slider__switch slider__switch--next" data-ikslider-dir="next">
      <span><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20"><path d="M13.25 10L6.11 2.58c-.27-.27-.27-.707 0-.98.267-.27.7-.27.968 0l7.83 7.91c.268.27.268.708 0 .978l-7.83 7.908c-.268.27-.7.27-.97 0s-.267-.707 0-.98L13.25 10z"/></svg></span>
    </div>
</div>

</div>

</div>

<div class="splash_screen_main_content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="splash_screen_box">
					<?php if($this->session->flashdata('msg')){ ?>
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?=$this->session->flashdata('msg')?>
              </div>          
    <?php } ?>
					
	  <div class="splash_screen">
   			<a href="<?php echo $baseUrl; ?>search_for_homes">
    			<div class="splash_pic"><img src="<?php echo $baseUrl; ?>assets/frontend/images/splash_1.png" /></div>
    			<div class="btn_splash">
    				<div class="splashbtns">Senior Home Search</div>
    			</div>
    			</a>
	  </div>
   			  <div class="splash_screen splash_screen1">
   			  <a href="<?php echo $baseUrl; ?>home_providers">
    			<div class="splash_pic"><img src="<?php echo $baseUrl; ?>assets/frontend/images/splash_2.png" /></div>
    			<div class="btn_splash">
    				<div class="splashbtns">Home Providers</div>

    			</div>
    			</a>
	  </div>
	  </div>
	  <div class="free_cons free_cons_11">
				
			<a href="<?php echo $baseUrl; ?>careers" class="requestion_a_quote">Careers</a>
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
	
	

</body>