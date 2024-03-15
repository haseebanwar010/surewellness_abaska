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
		<div class="row">
			
		<div class="col-lg-3 col-md-4 col-sm-5">
			
			<div class="search_section">
					<h3>Search Homes By State</h3>
					<div class="line_inner">
					</div>
					<form action="" method="post" class="leftsearch_form">
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
		<div class="col-lg-9 col-md-8 col-sm-7">
				
			
				<div class="property_wrapper">
					<div class="heading_inr">
					<h4>Recent Homes</h4>
				</div>
					<ul>
                        <?php if(empty($homes)){ ?>
                        <p class="nohomefound">No Record Found!</p>
                        <?php } ?>
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
<!--
					
						<li>
							<a href="property_detail.html">
								<div class="property_pic" style="background-image: url(images/property_4.jpg)"></div>
								<div class="property_infos">
									<h4> Aliquam erat volutpat</h4>
									<div class="property_state">Alabama</div>
									<div class="property_state property_city">Abbeville</div>
								</div>
							</a>
						</li>
					
						<li>
							<a href="property_detail.html">
								<div class="property_pic" style="background-image: url(images/property_5.jpg)"></div>
								<div class="property_infos">
									<h4>Phasellus vitae leo </h4>
									<div class="property_state">Alabama</div>
									<div class="property_state property_city">Abbeville</div>
								</div>
							</a>
						</li>
					
						<li>
							<a href="property_detail.html">
								<div class="property_pic" style="background-image: url(images/property_2.jpg)"></div>
								<div class="property_infos">
									<h4> Aliquam erat volutpat</h4>
									<div class="property_state">Alabama</div>
									<div class="property_state property_city">Abbeville</div>
								</div>
							</a>
						</li>
							<li>
							<a href="property_detail.html">
								<div class="property_pic" style="background-image: url(images/property_1.jpg)"></div>
								<div class="property_infos">
									<h4>Phasellus vitae leo </h4>
									<div class="property_state">Alabama</div>
									<div class="property_state property_city">Abbeville</div>
								</div>
							</a>
						</li>
					
						<li>
							<a href="property_detail.html">
								<div class="property_pic" style="background-image: url(images/property_3.jpg)"></div>
								<div class="property_infos">
									<h4> Aliquam erat volutpat</h4>
									<div class="property_state">Alabama</div>
									<div class="property_state property_city">Abbeville</div>
								</div>
							</a>
						</li>
                        <li>
							<a href="property_detail.html">
								<div class="property_pic" style="background-image: url(images/property_6.jpg)"></div>
								<div class="property_infos">
									<h4>Phasellus vitae leo </h4>
									<div class="property_state">Alabama</div>
									<div class="property_state property_city">Abbeville</div>
								</div>
							</a>
						</li>
					
						<li>
							<a href="property_detail.html">
								<div class="property_pic" style="background-image: url(images/property_4.jpg)"></div>
								<div class="property_infos">
									<h4> Aliquam erat volutpat</h4>
									<div class="property_state">Alabama</div>
									<div class="property_state property_city">Abbeville</div>
								</div>
							</a>
						</li>
-->
					</ul>
					
					<div class="pagination_bx">
                        <ul class="pagination">
                        <?php echo $pagination; ?>
                        </ul>
<!--
						<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
-->
					</div>
				</div>
		</div>
		</div>
	</div>
	
	