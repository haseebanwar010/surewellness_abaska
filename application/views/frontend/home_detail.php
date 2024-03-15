	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$baseUrl = $this->config->item('base_url');
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
  <li class="breadcrumb-item active">Search</li>
</ol>

				</div>
			</div>
		</div>
</div>

<div class="container">
		<div class="row ">
			     <?php if($this->session->flashdata('msg')){ ?>
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?=$this->session->flashdata('msg')?>
              </div>          
    <?php } ?>
		<div class="col-lg-3 col-md-4 col-sm-5 ">
			
			<div class="search_section">
					<h3>Search Homes By State</h3>
					<div class="line_inner">
					</div>
					<form action="<?php echo $baseUrl; ?>homes/all_homes" method="post" class="leftsearch_form">
						<div class="form_box">
						
							<label>State</label>
						<div class="search_input">
								<div class="search_type">
									<select name="state" data-placeholder="Select State" class="select2 state_changer" style="width:100%;" tabindex="2">
            <option value=""></option>
            
       <?php foreach($states as $state){ ?>
                                        <option <?php if(isset($_POST['state']) && $_POST['state']==$state['id']){ echo "selected"; }?> value="<?php echo $state['id']; ?>"><?php echo $state['name']; ?></option>
                                        <?php } ?>
          </select>
								</div>
						</div></div>
					
						<div class="form_box">
						
							<label>City</label>
						<div class="search_input">
								<div class="search_type">
									<select name="city" data-placeholder="Select City" class="city_changer select2" style="width:100%;" tabindex="2">
          <?php if(isset($cities) && !empty($cities)){ ?>
                                        <?php foreach($cities as $city){ ?>
                                        <option <?php if(isset($_POST['city']) && $_POST['city']==$city['id']){ echo "selected"; }?> value="<?php echo $city['id']; ?>"><?php echo $city['name']; ?></option>
                                        <?php } ?>
        <?php } ?>
         
          </select>
								</div>
						</div></div>
					
						<div class="form_box">
						
							<label>Key Number</label>
						<div class="search_input">
							<input value="<?php if(isset($_POST['house_key'])){ echo $_POST['house_key']; }?>" type="text" name="house_key" placeholder="Enter Number">
						</div></div>
						<button>
							Search
						</button>
					</form>
					
					
			</div>
			
		</div>
		<div class="col-lg-9 col-md-8 col-sm-7 ">
				<div class="inner_contents">
				<div class="heading_inr">
                    <?php $images=array(); if(!empty($home_detail[0]['images'])){ $images=unserialize($home_detail[0]['images']); } ?>
					<h4><?php echo $home_detail[0]['title']; ?></h4>
				</div>
				<div class="property_detail">
					<div class="preoty_pic">
                        
                        
                        
                        <div class="banners1">
	 <div class="slider-container">
  <div class="slider">
   	<div class="abs"></div>
   		<div class="abs1"></div>
      <?php foreach($images as $image){ ?>
    <div class="slider__item">
     <a href="#" style="background-image: url(<?php echo $baseUrl; ?>uploads/<?php echo $image['name']; ?>);"></a>
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
					<div class="property_information">
						<h2><?php echo $home_detail[0]['title']; ?></h2>
						<div class="iformation_icon1 iformation_icon150">
							<?php echo $home_detail[0]['state_name']; ?>
						</div>
						<div class="iformation_icon1 iformation_icon2 iformation_icon150">
							<?php echo $home_detail[0]['city_name']; ?>
						</div>
						
						<div class="iformation_icon1 iformation_icon3">
							<?php echo $home_detail[0]['house_key']; ?>
						</div>
						<div class="iformation_icon1 iformation_icon4">
							<?php echo $home_detail[0]['people_spaces']; ?>
						</div>
						<button   data-toggle="modal" data-target="#exampleModal2" data-whatever="@getbootstrap">Check Vacancy </button>
						<?php echo $home_detail[0]['description']; ?>
					</div>
				</div>
			</div>
			
				<div class="property_wrapper videowrapper">
					<div class="heading_inr">
					<h4>Videos</h4>
				</div>
					<ul>
                        <?php foreach($home_videos as $video){ ?>
                        <li>
                                <video width="400" controls><source src="<?php echo $baseUrl; ?>uploads/<?php echo $video['video']; ?>" type="video/mp4"></video>
                            <div class="property_infos">
									<h4><?php echo $video['title']; ?></h4>
								</div>
                        </li>
                        <?php } ?>
					</ul>
					
					
				</div>
            
            <div class="property_wrapper">
					<div class="heading_inr">
					<h4>Recent Homes</h4>
				</div>
					<ul>
						<?php foreach($homes as $home){ $images=array(); if(!empty($home['images'])){ $images=unserialize($home['images']); } ?>
						<li>
							<a href="<?php echo $baseUrl; ?>homes/home_detail/<?php echo $home['id']; ?>">
								<div class="property_pic" <?php if(!empty($images)){ ?>style="background-image: url(<?php echo $baseUrl; ?>uploads/<?php echo $images[0]['name']; ?>)"<?php } ?>></div>
								<div class="property_infos">
									<h4><?php echo $home['title']; ?> </h4>
									<div class="property_state"><?php echo $home['state_name']; ?></div>
									<div class="property_state property_city"><?php echo $home['city_name']; ?></div>
								</div>
							</a>
						</li>
                        <?php } ?>
					</ul>
					
					<div class="pagination_bx">
						<nav aria-label="Page navigation example">
  <ul class="pagination">
    <?php echo $pagination; ?>
  </ul>
</nav>
					</div>
				</div>
		</div>
		</div>
	</div>
	
	