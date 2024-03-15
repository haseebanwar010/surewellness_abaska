<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li class="<?php if(isset($page) && $page=="dashboard"){echo 'active'; }?>">
          <a href="<?php echo site_url(); ?>admin">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
        </li>
          
         <li class="treeview <?php if(isset($page) && ($page=="banners" || $page=="addbanner" || $page=="editbanner") ){echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-image"></i>
            <span>Banners</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page) && $page=="banners"){echo 'active'; }?>"><a href="<?php echo site_url('admin/banners'); ?>"><i class="fa fa-circle-o"></i> All Banners</a></li>
            <li class="<?php if(isset($page) && $page=="addbanner"){echo 'active'; }?>"><a href="<?php echo site_url('admin/banners/add'); ?>"><i class="fa fa-circle-o"></i> Add New</a></li>
            
          </ul>
        </li>
          <li class="treeview <?php if(isset($page) && ($page=="slidersection" || $page=="searchslidersection" || $page=="providerslidersection") ){echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-image"></i>
            <span>Slider Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li class="<?php if(isset($page) && $page=="searchslidersection"){echo 'active'; }?>"><a href="<?php echo site_url('admin/slidersection/edit/1'); ?>"><i class="fa fa-circle-o"></i>Search For Homes</a></li>
              <li class="<?php if(isset($page) && $page=="providerslidersection"){echo 'active'; }?>"><a href="<?php echo site_url('admin/slidersection/edit/2'); ?>"><i class="fa fa-circle-o"></i>Home Providers</a></li>
          </ul>
        </li>
          <li class="treeview <?php if(isset($page) && ($page=="careers" || $page=="addcareer" || $page=="editcareer") ){echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-briefcase"></i>
            <span>Careers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page) && $page=="careers"){echo 'active'; }?>"><a href="<?php echo site_url('admin/careers'); ?>"><i class="fa fa-circle-o"></i> All Careers</a></li>
            <li class="<?php if(isset($page) && $page=="addcareer"){echo 'active'; }?>"><a href="<?php echo site_url('admin/careers/add'); ?>"><i class="fa fa-circle-o"></i> Add New</a></li>
            
          </ul>
        </li>
          <li class="treeview <?php if(isset($page) && ($page=="jobseakers" || $page=="jobseakerdetail") ){echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-user-md"></i>
            <span>Job Seekers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page) && $page=="jobseakers"){echo 'active'; }?>"><a href="<?php echo site_url('admin/job_seakers'); ?>"><i class="fa fa-circle-o"></i> All Job Seekers</a></li>
           
          </ul>
        </li>
          
           <li class="treeview <?php if(isset($page) && ($page=="homes" || $page=="addhome" || $page=="edithome") ){echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-home"></i>
            <span>Homes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page) && $page=="homes"){echo 'active'; }?>"><a href="<?php echo site_url('admin/homes'); ?>"><i class="fa fa-circle-o"></i> All Homes</a></li>
            <li class="<?php if(isset($page) && $page=="addhome"){echo 'active'; }?>"><a href="<?php echo site_url('admin/homes/add'); ?>"><i class="fa fa-circle-o"></i> Add New</a></li>
            
          </ul>
        </li>
          
          <li class="treeview <?php if(isset($page) && ($page=="homevideos" || $page=="addhomevideo" || $page=="edithomevideo") ){echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-video-camera"></i>
            <span>Home Videos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page) && $page=="homevideos"){echo 'active'; }?>"><a href="<?php echo site_url('admin/homevideos'); ?>"><i class="fa fa-circle-o"></i> All Home Videos</a></li>
            <li class="<?php if(isset($page) && $page=="addhomevideo"){echo 'active'; }?>"><a href="<?php echo site_url('admin/homevideos/add'); ?>"><i class="fa fa-circle-o"></i> Add New</a></li>
            
          </ul>
        </li>
          
          
          <li class="treeview <?php if(isset($page) && ($page=="services" || $page=="addservice" || $page=="editservice") ){echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-tasks"></i>
            <span>Services</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page) && $page=="services"){echo 'active'; }?>"><a href="<?php echo site_url('admin/services'); ?>"><i class="fa fa-circle-o"></i> All Services</a></li>
            <li class="<?php if(isset($page) && $page=="addservice"){echo 'active'; }?>"><a href="<?php echo site_url('admin/services/add'); ?>"><i class="fa fa-circle-o"></i> Add New</a></li>
            
          </ul>
        </li>
          <li class="treeview <?php if(isset($page) && ($page=="testimonials" || $page=="addtestimonial" || $page=="edittestimonial") ){echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Testimonials</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page) && $page=="testimonials"){echo 'active'; }?>"><a href="<?php echo site_url('admin/testimonials'); ?>"><i class="fa fa-circle-o"></i> All Testimonials</a></li>
            <li class="<?php if(isset($page) && $page=="addservice"){echo 'active'; }?>"><a href="<?php echo site_url('admin/testimonials/add'); ?>"><i class="fa fa-circle-o"></i> Add New</a></li>
            
          </ul>
        </li>
          <li class="treeview <?php if(isset($page) && ($page=="pages" || $page=="addpage" || $page=="editpage") ){echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-file"></i>
            <span>Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page) && $page=="pages"){echo 'active'; }?>"><a href="<?php echo site_url('admin/pages'); ?>"><i class="fa fa-circle-o"></i> All Pages</a></li>
<!--            <li class="<?php if(isset($page) && $page=="addpage"){echo 'active'; }?>"><a href="<?php echo site_url('admin/pages/add'); ?>"><i class="fa fa-circle-o"></i> Add New</a></li>-->
            
          </ul>
        </li>
        
          <li class="treeview <?php if(isset($page) && ($page=="search_section" || $page=="provider_section") ){echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-cubes"></i>
            <span>Sections</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page) && $page=="search_section"){echo 'active'; }?>"><a href="<?php echo site_url('admin/sections/allsections/1'); ?>"><i class="fa fa-circle-o"></i> Search For Homes</a></li>
              <li class="<?php if(isset($page) && $page=="provider_section"){echo 'active'; }?>"><a href="<?php echo site_url('admin/sections/allsections/2'); ?>"><i class="fa fa-circle-o"></i>Home Providers</a></li>
            
          </ul>
        </li>
          
          <li class="treeview <?php if(isset($page) && ($page=="settings" || $page=="addsetting" || $page=="editsetting") ){echo 'active'; }?>">
          <a href="#">
            <i class="fa fa-gears"></i>
            <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(isset($page) && $page=="settings"){echo 'active'; }?>"><a href="<?php echo site_url('admin/settings'); ?>"><i class="fa fa-circle-o"></i> Edit Site Settings</a></li>
            
          </ul>
        </li>
         
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
