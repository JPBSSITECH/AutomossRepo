<?php
    $this->load->view('front/inc/header.php');
    $u2 = $this->uri->segment(2);
?> 
<link href="<?=base_url()  ?>/mech_srabani.css?v=<?=rand() ?>" rel="stylesheet">


    <div class="card dashboard_card">
      <div class="d-flex">
        <div id="sidebar" class="sidebar expanded">
          <div class="sidebar-logo">
            <img src="<?=base_url() ?>automoss-logo.svg" alt="Logo" class="logo-img" />
          </div>
          <div class="sidebar-content">
            <a href="<?=base_url()?>mechanic/index" class="sidebar-item <?=($u2=='' || $u2=='index' )?'active':''  ?>">
              <span class="icon"><i class="fas fa-home"></i></span>
              <span class="text">Dashboard</span>
            </a>


            
            <a href="<?=base_url()?>mechanic/jobcard" class="sidebar-item <?=($u2=='jobcard' )?'active':''  ?>">
              <span class="icon"><i class="fas fa-diamond"></i></span>
              <span class="text">Live Bookings</span>
            </a>

            <a href="<?=base_url()?>mechanic/booking_list/active" class="sidebar-item <?=($u2=='booking_list' )?'active':''  ?>">
              <span class="icon"><i class="fas fa-star"></i></span>
              <span class="text">Bookings</span>
            </a>


            <a href="<?=base_url()?>mechanic/product_orders" class="sidebar-item <?=($u2=='product_orders' )?'active':''  ?>">
              <span class="icon"><i class="fas fa-cart-plus"></i></span>
              <span class="text">Orders</span>
            </a>






            <a href="<?=base_url()?>mechanic/package_list" class="sidebar-item <?=($u2=='package_list' )?'active':''  ?>">
              <span class="icon"><i class="fas fa-car"></i></span>
              <span class="text">Service List</span>
            </a>

            <a href="<?=base_url()?>mechanic/product_list" class="sidebar-item <?=($u2=='product_list' )?'active':''  ?>">
              <span class="icon"><i class="fas fa-gift"></i></span>
              <span class="text">Product List</span>
            </a>




            <a href="<?=base_url()?>mechanic/editprofile" class="sidebar-item <?=($u2=='editprofile' )?'active':''  ?>">
              <span class="icon"><i class="fas fa-cogs"></i></span>
              <span class="text">Edit Profile</span>
            </a>

            <a href="<?=base_url()?>mechanic/logout" class="sidebar-item">
              <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
              <span class="text">Logout</span>
            </a>



          </div>
        </div>

        <div id="content" class="content">
          <div class="header">
            <span class="toggle-button mr-4" id="toggleSidebar">&#9776;</span>
            <div class="header_title mr-auto">
              <h5>Hey, <?= $myinfo->fname ?><?= $myinfo->mname ?><?= $myinfo->lname ?>!</h5>
            </div>
            <div class="profile_logo">
              <img src="<?=$myinfo->thumb ?>" onerror="this.onerror=null; this.src='https://automoss.in/nopics.jpg'" alt="Profile" />
            </div>
          </div>



          <div class="inner_content">
            <div class="container-fluid">