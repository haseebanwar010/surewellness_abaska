<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Banner</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo base_url('admin/banners') ?>"><i class="fa fa-circle-o"></i>Add Banner</a></li>
            <li><a href="<?php echo base_url('admin/showallbanners') ?>"><i class="fa fa-circle-o"></i>Show All</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Banner Sections</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo base_url('admin/bannersectionsenior') ?>"><i class="fa fa-circle-o"></i>Senior Home Search</a></li>
            <li><a href="<?php echo base_url('admin/bannersectionprovider') ?>"><i class="fa fa-circle-o"></i>Home Providers</a></li>
          </ul>
        </li>
                <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Sections</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="<?php echo base_url('admin/sections') ?>"><i class="fa fa-circle-o"></i>Add Section</a></li>
            <li><a href="<?php echo base_url('admin/showallsections') ?>"><i class="fa fa-circle-o"></i>Show All</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Services</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/services') ?>"><i class="fa fa-circle-o"></i>Add Service</a></li>
            <li><a href="<?php echo base_url('admin/showallservices') ?>"><i class="fa fa-circle-o"></i>Show All</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Careers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/careers') ?>"><i class="fa fa-circle-o"></i>Add Job</a></li>
            <li><a href="<?php echo base_url('admin/showalljobs') ?>"><i class="fa fa-circle-o"></i>Show All</a></li>
          </ul>
        </li>

        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>