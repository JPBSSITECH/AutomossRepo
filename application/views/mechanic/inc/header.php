<?php
    $this->load->view('front/inc/header.php');

    $u2 = $this->uri->segment(2);
?>
<link rel="stylesheet" href="<?= base_url() ?>mechanic.css?v=<?=rand(10000,99999) ?>"> 


<div class="container-fluied" style="min-height: 700px; position: relative;">
    <div class="sidebar" id="sidebar">
    <ul class="list-unstyled mt-5">
        <li><a class="<?=($u2=='' || $u2=='index' )?'active':''  ?>"  href="<?= base_url()?>mechanic/index" id="dashboard-link"><i class="fas fa-tachometer-alt"></i>&nbsp;Dashboard</a></li>
        <li><a class="<?=( $u2=='package_list')?'active':''  ?>" href="<?= base_url()?>mechanic/package_list" id="edit-profile-link"><i class="fas fa-box"></i>&nbsp;Services</a></li>
        <li><a class="<?=( $u2=='booking_list'  ||  $u2=='booking_details')?'active':''  ?>" href="<?= base_url()?>mechanic/booking_list" id="edit-profile-link"><i class="fas fa-clipboard-list"></i></i>&nbsp; Bookings</a></li>
         
        <li><a class="<?=( $u2=='jobcard' ||  $u2=='jobcard_add' ||  $u2=='jobcard_edit' ||  $u2=='jobcard_details')?'active':''  ?>" href="<?= base_url()?>mechanic/jobcard" id="transactions-link"><i class="fas fa-id-card"></i>&nbsp;Job Card</a></li>

        <li><a class="<?=( $u2=='editprofile')?'active':''  ?>" href="<?= base_url()?>mechanic/editprofile" id="list-car-link"><i class="fas fa-user-edit"></i>&nbsp;Edit Profile</a></li>
        <li><a href="<?= base_url()?>mechanic/logout" id="logout-link"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></li>
    </ul>
</div>
  



<div class="main-content" id="main-content">
        <button class="btn btn-danger toggle-btn" id="toggle-btn">☰</button>
        <div class="container-fluid harea" style="background: #ccc; min-height: 55px;margin-bottom: 20px; padding-top: 15px; border-radius: 5px; box-shadow: 2px 2px 2px #ccc; ">
            <h3 class="ms-5">Hii, <?= $myinfo->fname ?> <?= $myinfo->mname ?> <?= $myinfo->lname ?> Welcome!</h3>
            <p></p>
        </div>