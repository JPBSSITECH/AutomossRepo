<?php
    $this->load->view('front/inc/header.php');
?>
<style type="text/css">
    .primary__btn{
        border-radius: 0.5rem !important;
    }
    .sidebar ul li a {
        font-size: 16px;
    }
    .sidebar ul li {
        border-bottom: 1px dotted #eee;
    }
</style>
<link rel="stylesheet" href="<?= base_url() ?>mechanic.css?v=<?=rand(10000,99999) ?>"> 

<div class="container-fluied" style="min-height: 700px; position: relative;">
  
<div class="sidebar" id="sidebar">
    <ul class="list-unstyled mt-5 pt-4">
        <li><a href="<?= base_url()?>mechanic/index" id="dashboard-link"><i class="fas fa-tachometer-alt"></i>&nbsp;&nbsp;Dashboard</a></li>
        <li><a href="<?= base_url()?>mechanic/package_list" id="edit-profile-link"><i class="fas fa-box"></i>&nbsp;&nbsp;Package</a></li>
        <li><a href="<?= base_url()?>mechanic/booking_list" id="edit-profile-link"><i class="fas fa-clipboard-list"></i>&nbsp;&nbsp;Bookings</a></li>
        <li><a href="<?= base_url()?>mechanic/jobcard" id="edit-profile-link"><i class="fas fa-id-card"></i>&nbsp;&nbsp;Job Card</a></li>
        <li>
           <!--  <a href="#" class="menu-toggle" id="orders-toggle"><i class="fas fa-box"></i>&nbsp; Orders</a>
            <ul class="submenu" id="orders-submenu">
                <li><a href="#" id="view-orders-link"><i class="fas fa-eye"></i>&nbsp;View Orders</a></li>
                <li><a href="#" id="track-order-link"><i class="fas fa-truck"></i>&nbsp;Track Order</a></li>
            </ul>
        </li>
        <li><a href="#" id="transactions-link"><i class="fas fa-credit-card"></i>&nbsp;All Transaction</a></li>
        <li><a href="#" id="list-car-link"><i class="fas fa-car"></i>&nbsp;List Your Car</a></li> -->
        <li><a href="<?= base_url()?>mechanic/editprofile" id="edit-profile-link"><i class="fas fa-user-edit"></i>&nbsp;&nbsp;Edit Profile</a></li>
        <li><a href="<?= base_url()?>mechanic/logout" id="logout-link"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Logout</a></li>
    </ul>
</div>




<div class="main-content" id="main-content">
        <button class="btn btn-danger toggle-btn" id="toggle-btn">☰</button>
        <div class="container-fluid harea" style="background: #ccc; min-height: 55px;margin-bottom: 20px; padding-top: 15px; border-radius: 5px; box-shadow: 2px 2px 2px #ccc; ">
            <h3 class="ms-5">Hii, <?= $m_inf->fname ?> <?= $m_inf->mname ?> <?= $m_inf->lname ?> Welcome!</h3>
            <p></p>
        </div>