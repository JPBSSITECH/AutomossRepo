<?php
    if(isset($super_title)) 
    {
        $t = $super_title;
    }else{
        if(isset($title))
        {
            $t = $title;
        }else{
            $t= $common->company_name; 
        }
    }
    /////////////////////////////////////
    if(isset($super_key))
    {
        $k = $super_key;
    }else{
        if(isset($key))
        {
            $k = $key;
        }else{
            $k= $common->company_name;
        }
    }
    ////////////////////////////////////////////////
    if(isset($super_desc))
    {
        $d = $super_desc;
    }else{
        if(isset($descp))
        {
            $d = $descp;
        }else{
            $d =  $common->company_name;
        } 
    }

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?=$t  ?></title>
  <?php
        if(isset($master_info->seo_code))
        {
            echo $master_info->seo_code;
        }
        ?>
        <?php
        if(isset($super_otherinfo))
        {
            echo $super_otherinfo;
        }
        ?>
        <?php
        if(isset($og))
        {
        ?> 
    <meta property="og:image" itemprop="image"  content="<?=$og  ?>" /> 
    <meta property="og:image:width" content="750" /> 
    <meta property="og:image:height" content="437" />
    <meta property="og:image:type" content="image/jpeg" /> 

    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?=@$og_url ?>" />    
    <meta property="og:title" content="<?=@$t  ?>" />
    <meta property="og:description" content="<?=@$d  ?>" />
     
    <meta property="twitter:card"  content="summary_large_image" />
    <meta name="twitter:site" content="@globalfocusedu">
    <meta name="twitter:creator" content="@globalfocusedu">
    <meta property="twitter:url"  content="<?=@$og_url ?>" />
    <meta property="twitter:title"  content="<?=@$t ?>" />
    <meta property="twitter:image"  content="<?=@$og ?>" />
    <meta property="twitter:description"  content="Read more on: <?=@$t ?>" /> 
        <?php
        }
      ?>
  <meta name="description" content="<?=$d  ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>fav.png">
    
   <!-- ======= All CSS Plugins here ======== -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/plugins/swiper-bundle.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/plugins/glightbox.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css?vf=<?=rand() ?>">
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

<style type="text/css">
.custom-modal-dialog {
    max-width: 1000px;
}

.modal-content {
    height: 65%; 
    overflow-y: auto; 
    padding: 20px;
    animation: slideDown 0.5s ease-out;
}


@keyframes slideDown {
    from {
        transform: translateY(-100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.modal-header {
    border-bottom: none;
    text-align: center;
}

.modal-title {
    font-size: 24px;
    font-weight: bold;
}

.close {
    border: none; /* Remove border */
    font-size: 28px; /* Increase size */
    outline: none;
    cursor: pointer;
}
.country-section {
    font-weight: bold;
    font-size: 18px;
    margin-bottom: 10px;
}

.country-label {
    display: flex;
    align-items: center;
}

.country-label i {
    margin-right: 5px;
}

.city-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 20px;
    padding: 20px 0;
}

.city-item {
    text-align: center;
    cursor: pointer;
}

.city-item:hover .city-name {
    color: #007bff;
}

.city-icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background-color: #f5f5f5;
    padding: 5px;
    margin-bottom: 10px; 

}

.city-name {
    font-size: 16px;
    font-weight: 500;
    margin-top: 10px;
    display: inline-block;
    text-align: left;
   width: 100%;
}

.modal-backdrop{
    z-index: 33 !important;
}
.dropdown-item{
    font-size: 14px;
}
.social__share--icon__style2{
    background:#ed1d24;
}




////////////////////////

 
.ff{
    position: absolute;
    top: 0;
}
.rr{
     background-color: red;
     border-radius: 50%;
     height: 190px;
     position: relative;
     top: -110px;
}
.gg{
    position: relative;
    top: -200px;
}
.text-danger{
    color: #ED1D24 !important;
}




////////////////////////


















</style>

</head>

<body>
    <!-- Start header area -->
    <header class="header__section">
       <div class="header__topbar bg__primary ff" style="height: 90px;">
            <div class="rr text-white"></div>
            <div class="gg">
                <nav class="navbar navbar-expand-lg bg-transparent">
                  <div class="container d-flex justify-content-evenly align-items-center" >
                    <ul class="header__topbar--info d-none d-lg-flex" style="margin-left: -127px;">
                        <li class="header__info--list">
                            <a class="header__info--link text-white" href="mailto:<?= $common->email?>" style="font-size: 14px;">
                                <i class="fas fa-envelope"></i> <?= $common->email?>
                            </a>
                        </li>
                        <li class="header__info--list">
                            <a class="header__info--link text-white" href="tel:<?= $common->phone ?>" style="font-size: 14px;">
                                <i class="fas fa-phone"></i> <?= $common->phone ?>
                            </a>
                        </li>

                    </ul>
                        <a class="navbar-brand d-flex justify-content-center" href="#" style="height: 60px; width: 60px; margin-top: 10px; border-radius: 10px;">
                            <!-- <img src="https://ssdemo.in/frontend/img/logo/automoss%20final%20demo%20(1).png" class="img-fluid" style="width: 50px"> -->
                            <img src="<?=base_url() ?>assets/whitelogo.png" class="img-fluid" style="width: 50px">
                        </a>
                        <ul class="social__share style5 d-flex d-none d-lg-flex" style="float: right;">
                            <li class="social__share--list">
                                <a class="social__share--icon text-white" target="_blank" href="<?= $common->facebook ?>">
                                    <i class="fab fa-facebook-f"></i>
                                    <span class="visually-hidden">Facebook</span>
                                </a>
                            </li>
                            <li class="social__share--list">
                             <a class="social__share--icon text-white" target="_blank" href="<?= $common->twitter ?>">
                                <i class="fab fa-twitter"></i>
                                <span class="visually-hidden">Twitter</span>
                            </a>
                            </li>
                            <li class="social__share--list">
                                <a class="social__share--icon text-white" target="_blank" href="<?= $common->instagram ?>">
                                    <i class="fab fa-instagram"></i>
                                    <span class="visually-hidden">Instagram</span>
                                </a>
                            </li>
                            <li class="social__share--list">
                                <a class="social__share--icon text-white" target="_blank" href="<?= $common->youtube ?>">
                                    <i class="fab fa-youtube"></i>
                                    <span class="visually-hidden">YouTube</span>
                                </a>
                            </li>
                            <li class="social__share--list">
                                <a class="social__share--icon text-white" target="_blank" href="<?= $common->pinterest ?>">
                                    <i class="fab fa-pinterest"></i>
                                    <span class="visually-hidden">Pinterest</span>
                                </a>

                            </li>
                        </ul>
                    </div>
                </nav>
              </div>
           
            </div>
        </div>
        <div class="main__header header__sticky"> 
            <div class="container">
                <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                    <div class="offcanvas__header--menu__open ">
                        <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg" viewbox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"></path></svg>
                            <span class="visually-hidden">Offcanvas Menu Open</span>
                        </a>
                    </div>
                    <!-- <div class="main__logo">
                        <h1 class="main__logo--title"><a class="main__logo--link" href="<?= base_url()?>">
                            <img class="main__logo--img" src="<?= base_url() ?>automosslogo.png" alt="logo-img"></a></h1>
                    </div> -->
                    <div class="header__menu style3 d-none d-lg-block">
                        <nav class="header__menu--navigation">
                            <ul class="header__menu--wrapper d-flex">
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="<?= base_url() ?>">Home </a> 
                                </li>
                                <!-- <li class="header__menu--items mega__menu--items">
                                    <a class="header__menu--link" href="<?= base_url() ?>car">Buy Cars </a>
                                </li> -->
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="<?= base_url() ?>spareparts">Spare Parts</a>  
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="<?= base_url() ?>about">About Us </a>  
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="<?= base_url() ?>contact">Contact </a>  
                                </li>    
                            </ul>                             
                        </nav>
                    </div>
                    <div class="header__account">
                        <ul class="header__account--wrapper d-flex align-items-center">
                            <li class="header__menu--items">                             
                               <div class="header__sub-menu">
                                <!-- Button trigger modal -->
                                <!-- Location Button -->


                                <div class="location-btn-container">
                                    <button type="button" class="btn no-border" onclick="cityopenModal()" style="font-size: 18px;"> 
                                        <i class="fas fa-map-marker-alt location-icon" style="font-size: 20px;"></i>
                                        <?=$mycity_name; ?>
                                    </button>
                                </div>







 
                                        <div class="modal fade" id="citymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered custom-modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Choose Your City</h5>
                                                        <button type="button" class="close"   data-bs-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>


                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- <p>This would help us in providing you quick service.</p> -->
                                                        
                                                        <div class="city-grid" id="city-grid">
                                                             
                                                             
                                                             
                                                        </div>
                                                        <div class="location-detect-section">
                                                             
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>













                      
 






                      </li>

                            <?php
                                if($this->session->userdata('loggedin')==1  && $this->session->userdata('user_type')=='Customer'){
                            ?>
                                <li class="nav-item position-relative">
                                    <a class="nav-link" href="<?=base_url('cart') ?>">
                                        <i class="bi bi-cart" style="font-size: 1.5rem;"></i>
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cart-count"></span>
                                        <?php   
                                        if($mycart_count>0){
                                        ?>
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cart-count">
                                            <?=$mycart_count ?> 
                                        </span>
                                        <?php   
                                        }
                                        ?>
                                    </a>
                                </li>
                                
                                <li class="header__account--items d-none d-lg-block">

                                    <ul class="navbar-nav">
                                              <!-- User Dropdown -->
                                              <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                  <img  src="<?=$myinfo->thumb ?>" onerror="this.onerror=null; this.src='https://automoss.in/nopics.jpg'" 
                                                  alt="User Avatar" class="rounded-circle me-2" style="border: 2px solid #ccc;" width="30" height="30">
                                                  
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                                  <li><a class="dropdown-item" href="<?=base_url('customer/index') ?>">My Dashboard</a></li>
                                                  <li><hr class="dropdown-divider"></li>
                                                  <li><a class="dropdown-item text-danger" href="<?=base_url('customer/logout') ?>">Logout</a></li>
                                                </ul>
                                              </li>
                                    </ul>
                                    

                                </li>

                            <?php
                                }elseif($this->session->userdata('loggedin')==1  && $this->session->userdata('user_type')=='Mechanic'){
                            ?>
                                
                                <li class="header__account--items d-none d-lg-block">

                                    <ul class="navbar-nav">
                                              <!-- User Dropdown -->
                                              <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                  <img src="<?=$myinfo->thumb ?>" onerror="this.onerror=null; this.src='https://automoss.in/nopics.jpg'" alt="User Avatar" class="rounded-circle me-2" width="30" height="30">

                                                  <!-- src="<?=base_url() ?>nouser.png" -->
                                                  
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                                  <li><a class="dropdown-item" href="<?=base_url('mechanic/index') ?>">My Dashboard</a></li>
                                                  <li><hr class="dropdown-divider"></li>
                                                  <li><a class="dropdown-item text-danger" href="<?=base_url('mechanic/logout') ?>">Logout</a></li>
                                                </ul>
                                              </li>
                                    </ul>
                                    

                                </li>

                            <?php
                                }else{

                            ?>

                            <div class="button-container d-none d-lg-block"style="display: inline-block; margin-right: 7px;">
                                <a href="<?= base_url() ?>login">
                                    <button class="contact__form--btn primary__btn bg-transparent" style="color: #ED1D24; border:1px solid #ED1D24;">
                                        <span>LogIn</span>
                                    </button>
                                </a>
                            </div>


                           <div class="button-container d-none d-lg-block"style="display: inline-block; ">
                                <a href="<?= base_url() ?>mechlogin">
                                    <button class="contact__form--btn primary__btn bg-transparent" style="color: #ED1D24; border:1px solid #ED1D24;">
                                        <span>Mechanic LogIn</span>
                                    </button>
                                </a>
                            </div>


                            <!-- <li class="header__account--items d-none d-lg-block">
                                <a class="header__account--btn" href="<?= base_url() ?>login">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <span class="visually-hidden">My account</span> 
                                </a>
                            </li> -->
                            <?php
                                }
                            ?>






                        </ul>
                    </div>
                    <div class="offcanvas__header">
                        <div class="offcanvas__inner">
                            <div class="offcanvas__logo">
                                <a class="offcanvas__logo_link" href="<?= base_url() ?>">
                                 <img class="main__logo--img" src="<?= base_url() ?>automosslogo.png" alt="logo-img">
                             </a>
                             <button class="offcanvas__close--btn" data-offcanvas="">close</button>
                         </div>
                         <nav class="offcanvas__menu">
                            <ul class="offcanvas__menu_ul">
                                <li class="offcanvas__menu_li">
                                    <a class="offcanvas__menu_item" href="<?= base_url() ?>">Home</a>
                                </li>
                                <li class="offcanvas__menu_li">
                                    <a class="offcanvas__menu_item" href="<?= base_url() ?>car">Cars</a>
                                </li>
                                 
                                <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="<?= base_url() ?>about">About</a></li>
                                <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="<?= base_url() ?>contact">Contact</a></li>

                            </ul>

                            <div class="offcanvas__account--items">
                             <?php
                                if($this->session->userdata('loggedin')==1  && $this->session->userdata('user_type')=='Customer'){
                            ?>
                                
                                <li class="header__account--items d-none d-lg-block">

                                    <ul class="navbar-nav">
                                              <!-- User Dropdown -->
                                              <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                  <img src="<?=base_url() ?>nouser.png" alt="User Avatar" class="rounded-circle me-2" style="border: 2px solid #ccc;" width="30" height="30">
                                                  
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                                  <li><a class="dropdown-item" href="<?=base_url('customer/index') ?>">My Dashboard</a></li>
                                                  <li><hr class="dropdown-divider"></li>
                                                  <li><a class="dropdown-item text-danger" href="<?=base_url('customer/logout') ?>">Logout</a></li>
                                                </ul>
                                              </li>
                                    </ul>
                                    

                                </li>

                            <?php
                                }elseif($this->session->userdata('loggedin')==1  && $this->session->userdata('user_type')=='Mechanic'){
                            ?>
                                
                                <li class="header__account--items d-none d-lg-block">

                                    <ul class="navbar-nav">
                                              <!-- User Dropdown -->
                                              <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                  <img src="https://via.placeholder.com/40" alt="User Avatar" class="rounded-circle me-2" width="30" height="30">
                                                  
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                                  <li><a class="dropdown-item" href="<?=base_url('mechanic/index') ?>">My Dashboard</a></li>
                                                  <li><hr class="dropdown-divider"></li>
                                                  <li><a class="dropdown-item text-danger" href="<?=base_url('mechanic/logout') ?>">Logout</a></li>
                                                </ul>
                                              </li>
                                    </ul>
                                    

                                </li>

                            <?php
                                }else{

                            ?>
                           <div class="button-container"style="display: inline-block; margin-right: 15px;"d-none>
                                <a href="<?= base_url() ?>mechlogin">
                                    <button class="contact__form--btn primary__btn">
                                        <span>Mechanic LogIn</span>
                                    </button>
                                </a>
                            </div>

                            <div class="button-container"style="display: inline-block;">
                                <a href="<?= base_url() ?>login">
                                    <button class="contact__form--btn primary__btn">
                                        <span>LogIn</span>
                                    </button>
                                </a>
                            </div>

                            <!-- <li class="header__account--items d-none d-lg-block">
                                <a class="header__account--btn" href="<?= base_url() ?>login">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <span class="visually-hidden">My account</span> 
                                </a>
                            </li> -->
                            <?php
                                }
                            ?>

                            </div>
                        </nav>
                    </div>
                </div>



        <!-- Start serch box area -->
        <div class="predictive__search--box ">
            <div class="predictive__search--box__inner">
                <h2 class="predictive__search--title">Search Products</h2>
                <form class="predictive__search--form" action="#">
                    <label>
                        <input class="predictive__search--input" placeholder="Search Here" type="text">
                    </label>
                    <button class="predictive__search--button text-white" aria-label="search button"><svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="30.51" height="25.443" viewbox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>  </button>
                </form>
            </div>
            <button class="predictive__search--close__btn" aria-label="search close" data-offcanvas="">
                <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51" height="30.443" viewbox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"></path></svg>
            </button>
        </div>
        <!-- End serch box area -->
        
    </header>





 
