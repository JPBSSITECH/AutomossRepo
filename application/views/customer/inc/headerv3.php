<?php
    $this->load->view('front/inc/header.php');
    $u2 = $this->uri->segment(2);
?>
<link href="<?=base_url()  ?>/srabani.css?v=<?=rand() ?>" rel="stylesheet">



<div class="card dashboard_card">
    <div class="d-flex">
        <div id="sidebar" class="sidebar expanded">
            <div class="sidebar-logo">
                <img src="<?=base_url() ?>automoss-logo.svg" alt="Logo" class="logo-img" />
            </div>
            <div class="sidebar-content">
                <a href="<?=base_url()?>customer/index"
                    class="sidebar-item <?=($u2=='' || $u2=='index' )?'active':''  ?>">
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <span class="text">Dashboard</span>
                </a>


                <a href="<?=base_url()?>customer/booking_list"
                    class="sidebar-item <?=($u2=='booking_list' )?'active':''  ?>">
                    <span class="icon"><i class="fas fa-car"></i></span>
                    <span class="text"> Bookings</span>
                </a>


                <!-- <a href="<?=base_url()?>customer/jobcard"
                    class="sidebar-item <?=($u2=='jobcard'  || $u2=='jobcard_details'  || $u2=='jobcard_add' )?'active':''  ?>">
                    <span class="icon"><i class="fas fa-car"></i></span>
                    <span class="text">Live Booking</span>
                </a>

                <a href="<?=base_url()?>customer/booking_list"
                    class="sidebar-item <?=($u2=='booking_list' )?'active':''  ?>">
                    <span class="icon"><i class="fas fa-car"></i></span>
                    <span class="text">My Bookings</span>
                </a> -->











                <a href="<?=base_url()?>customer/product_orders"
                    class="sidebar-item <?=($u2=='product_orders' )?'active':''  ?>">
                    <span class="icon">&#128202;</span>
                    <span class="text">Orders</span>
                </a>
                <a href="<?=base_url()?>customer/reviews" class="sidebar-item <?=($u2=='reviews' )?'active':''  ?>">
                    <span class="icon">&#128172;</span>
                    <span class="text">Reviews</span>
                </a>

                <a href="<?=base_url()?>customer/carlists" class="sidebar-item <?=($u2=='carlists' )?'active':''  ?>">
                    <span class="icon"><i class="fas fa-car"></i></span>
                    <span class="text">Sell Car</span>
                </a>

                <a href="<?=base_url()?>customer/upgradepack"
                    class="sidebar-item <?=($u2=='upgradepack' )?'active':''  ?>">
                    <span class="icon"><i class="fas fa-star"></i></span>
                    <span class="text">Membership</span>
                </a>

                <a href="<?=base_url()?>customer/mychat" class="sidebar-item <?=($u2=='mychat' )?'active':''  ?>">
                    <span class="icon"><i class="fas fa-envelope"></i></span>
                    <span class="text">Inbox</span>
                </a>

                <a href="<?=base_url()?>customer/editprofile"
                    class="sidebar-item <?=($u2=='editprofile' )?'active':''  ?>">
                    <span class="icon"><i class="fas fa-cogs"></i></span>
                    <span class="text">Edit Profile</span>
                </a>

                <a href="<?=base_url()?>customer/logout" class="sidebar-item">
                    <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                    <span class="text">Logout</span>
                </a>



            </div>
        </div>

        <div id="content" class="content">
            <div class="header">
                <!-- <img src="pattern.png" alt="Header Shape" class="shape-image" /> -->
                <span class="toggle-button" id="toggleSidebar">&#9776;</span>

                <div class="profile">
                    <div class="profile_logo">
                        <img src="<?=$myinfo->thumb ?>"
                            onerror="this.onerror=null; this.src='https://automoss.in/nopics.jpg'" alt="Profile" />
                    </div>

                    <span><?= $myinfo->fname ?><?= $myinfo->mname ?><?= $myinfo->lname ?></span>
                    <span class="badge-star ml-4 badge bg-warning">
                        <i class="fas fa-star"></i> Pro user
                    </span>
                </div>
            </div>












            <div class="inner_content">
                <div class="container-fluid">