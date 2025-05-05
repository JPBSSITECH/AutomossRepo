<?php
    $this->load->view('front/inc/header.php');

    $u2 = $this->uri->segment(2);
?>

<style> 
  .my__account--section__inner::-webkit-scrollbar {
    width: 12px; /* Width of the scrollbar */
  }

  .my__account--section__inner::-webkit-scrollbar-thumb {
    background-color: #ED1D24; /* Color of the scrollbar thumb */
    border-radius: 6px; /* Rounded corners for the scrollbar thumb */
  }

  .my__account--section__inner::-webkit-scrollbar-track {
    background-color: #f0f0f0; /* Track background */
  }

  /* Firefox (Fallback Styling) */
  .my__account--section__inner {
    scrollbar-color: red #f0f0f0; 
    scrollbar-width: thin;  
  }
</style>

 



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link href="<?=base_url()  ?>/slimcrop/slim/slim.min.css" rel="stylesheet">
<script src="<?=base_url()  ?>/slimcrop/slim/slim.kickstart.min.js"></script>


<section class="breadcrumb__section breadcrumb__bg"> 
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items fs-1 fw-bold">Hii, <?= $myinfo->fname ?>! Welcome To Dashboard.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


          <section class="my__account--section section--padding pt-0">
            <div class="container">
                 <!-- style="height: 600px; overflow-y: auto;" -->
                <div class="my__account--section__inner border-radius-10 d-flex" >
                    <div class="account__left--sidebar">

                        <div class="text-center mb-4" style="border-bottom: 1px solid #eee; display: grid; place-items:center;">
                            <div>
                                <img src="<?=$myinfo->thumb ?>" onerror="this.onerror=null; this.src='https://automoss.in/nopics.jpg'"  alt="Profile Picture" 
                                        class="rounded-circle border" width="80"  >  
                                
                            </div>
                            <h3 class="account__content--title mb-20 ms-1 mt-2"><?= $myinfo->fname ?><?= $myinfo->mname ?><?= $myinfo->lname ?></h3> 
                        </div>
                         
                        <ul class="account__menu text-start">
                            <li class="account__menu--list <?=($u2=='' || $u2=='index' )?'active':''  ?>"><a href="<?=base_url()?>customer/index"> <i class="fas fa-tachometer-alt"></i> Dashboard</a></li>

                            <li class="account__menu--list <?=($u2=='jobcard'  || $u2=='jobcard_details'  || $u2=='jobcard_add' )?'active':''  ?>"><a href="<?=base_url()?>customer/jobcard"> <i class="fas fa-credit-card"></i> Searching Model</a></li>






                            <li class="account__menu--list <?=($u2=='booking_list' )?'active':''  ?>"><a href="<?=base_url()?>customer/booking_list"> <i class="fas fa-clipboard-list"></i> My bookings</a></li>


                            <li class="account__menu--list <?=($u2=='product_orders' )?'active':''  ?>"><a href="<?=base_url()?>customer/product_orders"> <i class="fas fa-clipboard-list"></i> My Orders</a></li>





                            <li class="account__menu--list <?=($u2=='carlists' )?'active':''  ?>"><a href="<?=base_url()?>customer/carlists"> <i class="fas fa-car"></i> Sell Car</a></li>
                            <li class="account__menu--list <?=($u2=='mychat' )?'active':''  ?>"><a href="<?=base_url()?>customer/mychat"> <i class="fas fa-car"></i> My query</a></li>
                            <li class="account__menu--list <?=($u2=='reviews' )?'active':''  ?>"><a href="<?=base_url()?>customer/reviews"> <i class="fas fa-star"></i> Reviews & Rating</a></li>
                            <li class="account__menu--list <?=($u2=='upgradepack' )?'active':''  ?>"><a href="<?=base_url()?>customer/upgradepack"> <i class="fas fa-star"></i> Membership</a></li>
                            


                            <li class="account__menu--list <?=($u2=='editprofile' )?'active':''  ?>"><a href="<?=base_url()?>customer/editprofile"> <i class="fas fa-user-edit"></i> Edit Profile</a></li>
                            <li class="account__menu--list <?=($u2=='logout' )?'active':''  ?>"><a href="<?=base_url()?>customer/logout"> <i class="fas fa-sign-out-alt"></i> Log Out</a></li>
                        </ul>
                    </div>