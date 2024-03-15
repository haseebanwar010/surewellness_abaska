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

	<div class="video_header">
		<div class="container">
            	<?php if($this->session->flashdata('msg')){ ?>
        <div class="alert alert-success alert-dismissible successmessageslider">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?=$this->session->flashdata('msg')?>
              </div>          
    <?php } ?>
			<div class="container">
				<div class="row">
					
					<div class="vide_info">
						<div class="real_video"><iframe width="100%" height="315" src="<?php echo $slidersection['video']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
						<div class="video_txt">
							
								<h3><?php echo $slidersection['title']; ?></h3>
								<h4><?php echo $slidersection['sub_title']; ?></h4>
								<p><?php echo $slidersection['description']; ?></p>
						</div>
				  </div>
					<div class="concultacny concultacny1">
						<ul>
						<li>
								<a href="<?php echo $baseUrl; ?>homes/all_homes">
									
									<div class="contancty_info contancty_info2">
										<h2>Search for  Homes
</h2>
								<div class="read_more">Read More</div>
									</div>
								</a>
							</li>
							<li>
								<a href="#"  data-toggle="modal" data-target="#exampleModal12" data-whatever="@getbootstrap">
									
									<div class="contancty_info">
										<h2>Speak  With a  Case
Consultant
</h2>
								<div class="read_more">Read More</div>
									</div>
								</a>
							</li>
							<li>
								<a href="#"  data-toggle="modal" data-target="#exampleModal13" data-whatever="@getbootstrap">
									
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

</div>

	<div class="content_main_page">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
			<div class="how_its_work">
				<h2>Why choose us?</h2>
				<div class="lines_why"></div>
				
				<div class="lines_why1"></div>
				<p>With over 25years of combined experience in servicing seniors, our Care Consultants will support your family with extraordinary services. We offer top quality in home care and referrals to safe and reputable homes.</p>
				
				<ul>
					<?php foreach($sections as $section){ ?>
                    <li>
						<div class="how_its_work_icon"><img src="<?php echo $baseUrl; ?>uploads/<?php echo $section['image']; ?>" /></div>
					  <h3><?php echo $section['title']; ?></h3>
					  <?php if(strlen($section['description'])>95){ echo $section['description']; }else{ echo $section['description'];} ?>
					</li>
                    <?php } ?>
					
				</ul>
			</div>
		</div>

			</div>
		</div>
	</div>
	