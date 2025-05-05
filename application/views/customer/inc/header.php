<?php
    $this->load->view('front/inc/header.php');

    $u2 = $this->uri->segment(2);
?>
<link rel="stylesheet" href="<?= base_url() ?>mycustom.css?v=<?=rand(10000,99999) ?>"> 


<div class="container-fluied" style="min-height: 700px; position: relative;">
  
<div class="sidebar" id="sidebar">
    <ul class="list-unstyled mt-5">
        <li><a class="<?=($u2=='' || $u2=='index' )?'active':''  ?>"  href="<?= base_url()?>customer/index" id="dashboard-link"><i class="fas fa-tachometer-alt"></i>&nbsp;Dashboard</a></li>
        <li><a class="<?=( $u2=='editprofile')?'active':''  ?>" href="<?= base_url()?>customer/editprofile" id="edit-profile-link"><i class="fas fa-user-edit"></i>&nbsp;Edit Profile</a></li>
        <li><a class="<?=( $u2=='booking_list'  ||  $u2=='booking_details')?'active':''  ?>" href="<?= base_url()?>customer/booking_list" id="edit-profile-link"><i class="fas fa-user-edit"></i>&nbsp;My Bookings</a></li>
         
        <li><a class="<?=( $u2=='jobcard' ||  $u2=='jobcard_add' ||  $u2=='jobcard_edit' ||  $u2=='jobcard_detail')?'active':''  ?>" href="<?= base_url()?>customer/jobcard" id="transactions-link"><i class="fas fa-credit-card"></i>&nbsp;Job Card</a></li>

        <li><a class="<?=( $u2=='sellyourcar')?'active':''  ?>" href="<?= base_url()?>customer/sellyourcar" id="list-car-link"><i class="fas fa-car"></i>&nbsp;List Your Car</a></li>
        <li><a href="<?= base_url()?>customer/logout" id="logout-link"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></li>
    </ul>
</div>




<div class="main-content" id="main-content">
        <button class="btn btn-danger toggle-btn" id="toggle-btn">☰</button>
        <div class="container-fluid harea" style="background: #ccc; min-height: 55px;margin-bottom: 20px; padding-top: 15px; border-radius: 5px; box-shadow: 2px 2px 2px #ccc; ">
            <h3 class="ms-5">Hii, <?= $myinfo->fname ?> <?= $myinfo->mname ?> <?= $myinfo->lname ?> Welcome!</h3>
            <p></p>
        </div>