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
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/img/1.png">
    
   <!-- ======= All CSS Plugins here ======== -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/plugins/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/plugins/glightbox.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css?v=64">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style type="text/css">
 
 /* Customize modal dimensions */
.custom-modal-dialog {
    max-width: 1000px; /* Increase the modal width */
    height: auto; /* Allow content to determine height */
}

.modal-content {
    height: 65%; /* Reduce the modal height */
    overflow-y: auto; /* Add scrolling if content overflows */
    padding: 20px;
    animation: slideDown 0.5s ease-out;
}

/* Modal Animation */
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

/* Modal Header */
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

/* Country section */
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

/* City grid */
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
    display: block; 
    font-size: 16px;
    font-weight: 500;
    margin-top: 10px;
    margin-left: :-75px !important;
}

/* Detect location button */
.location-detect-section {
    text-align: center;
    margin-top: 20px;
}

.detect-btn {
    font-size: 16px;
    padding: 10px 20px;
    border-radius: 5px;
}
</style>

</head>

<body>
    <!-- Start header area -->
    <header class="header__section">
        <div class="header__topbar bg__primary">
            <div class="container-fluid">
                <div class="header__topbar--inner d-flex align-items-center justify-content-between">
                    <ul class="header__topbar--info d-none d-lg-flex">
                        <li class="header__info--list">
                            <a class="header__info--link text-white" href="mailto:info@example.com">
                                <svg width="15" height="13" viewbox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.368 9.104C7.26133 9.17867 7.13867 9.216 7 9.216C6.86133 9.216 6.744 9.17867 6.648 9.104L0.36 4.624C0.264 4.56 0.178667 4.54933 0.104 4.592C0.04 4.624 0.00800002 4.69867 0.00800002 4.816V11.984C0.00800002 12.112 0.0506667 12.2187 0.136 12.304C0.221333 12.3893 0.322667 12.432 0.44 12.432H13.56C13.6773 12.432 13.7787 12.3893 13.864 12.304C13.96 12.2187 14.008 12.112 14.008 11.984V4.816C14.008 4.69867 13.9707 4.624 13.896 4.592C13.8213 4.54933 13.736 4.56 13.64 4.624L7.368 9.104ZM6.76 8.32C6.84533 8.37333 6.92533 8.4 7 8.4C7.08533 8.4 7.16533 8.37333 7.24 8.32L12.52 4.56C12.6373 4.464 12.696 4.352 12.696 4.224V0.783999C12.696 0.666666 12.6533 0.570666 12.568 0.495999C12.4933 0.410666 12.3973 0.367999 12.28 0.367999H1.72C1.60267 0.367999 1.50667 0.410666 1.432 0.495999C1.35733 0.570666 1.32 0.666666 1.32 0.783999V4.224C1.32 4.37333 1.37333 4.48533 1.48 4.56L6.76 8.32ZM3.784 2.064H9.96C10.088 2.064 10.1947 2.112 10.28 2.208C10.3653 2.29333 10.408 2.4 10.408 2.528C10.408 2.64533 10.3653 2.74667 10.28 2.832C10.1947 2.91733 10.088 2.96 9.96 2.96H3.784C3.656 2.96 3.54933 2.91733 3.464 2.832C3.37867 2.74667 3.336 2.64533 3.336 2.528C3.336 2.4 3.37867 2.29333 3.464 2.208C3.54933 2.112 3.656 2.064 3.784 2.064ZM3.784 3.632H9.96C10.088 3.632 10.1947 3.68 10.28 3.776C10.3653 3.86133 10.408 3.96267 10.408 4.08C10.408 4.19733 10.3653 4.304 10.28 4.4C10.1947 4.48533 10.088 4.528 9.96 4.528H3.784C3.656 4.528 3.54933 4.48533 3.464 4.4C3.37867 4.31467 3.336 4.21333 3.336 4.096C3.336 3.968 3.37867 3.86133 3.464 3.776C3.54933 3.68 3.656 3.632 3.784 3.632Z" fill="#FF2D37"></path>
                                </svg>
                                <?= $common->email?></a>
                        </li>
                        <li class="header__info--list">
                            <a class="header__info--link text-white" href="tel:<?= $common->phone?>">
                                <svg width="15" height="15" viewbox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.71 9.29a1 1 0 0 1 0 1.41l-1.14 1.14a1 1 0 0 1-1.41 0l-1.13-1.13a1 1 0 0 1-.24-.41l-.49-1.17a1 1 0 0 1 .41-1.17l1.53-.76a1 1 0 0 1 1.37.44l.65 1.88a1 1 0 0 1-.44 1.37l-.44.22a1 1 0 0 1-.22.24zM7.83 5.68l-2.2-.56a1 1 0 0 1-.76-1.17l.42-1.68a1 1 0 0 1 1.18-.76l2.2.56a1 1 0 0 1 .76 1.17l-.42 1.68a1 1 0 0 1-1.18.76z" fill="#FF2D37"/>
                                </svg>
                                <?= $common->phone?>
                            </a>
                        </li>

                    </ul>
                    <div class="header__top--right d-flex align-items-center">
                        <ul class="social__share style5 d-flex">
                            <li class="social__share--list">
                                <a class="social__share--icon text-white" target="_blank" href="<?= $common->facebook?>">
                                    <svg width="9" height="15" viewbox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z" fill="currentColor"></path>
                                    </svg>
                                    <span class="visually-hidden">Facebook</span>
                                </a>
                            </li>
                            <li class="social__share--list">
                                <a class="social__share--icon text-white" target="_blank" href="<?= $common->twitter?>">
                                    <svg width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z" fill="currentColor"></path>
                                    </svg>
                                    <span class="visually-hidden">Twitter</span>
                                </a>
                            </li>
                            <li class="social__share--list">
                                <a class="social__share--icon text-white" target="_blank" href="<?= $common->instagram ?>">
                                    <svg width="14" height="13" viewbox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z" fill="currentColor"></path>
                                    </svg>  
                                    <span class="visually-hidden">Instagram</span>
                                </a>
                            </li>
                            <li class="social__share--list">
                                <a class="social__share--icon text-white" target="_blank" href="<?= $common->youtube?>">
                                    <svg width="16" height="11" viewbox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.0117 2.16797C14.8477 1.51172 14.3281 0.992188 13.6992 0.828125C12.5234 0.5 7.875 0.5 7.875 0.5C7.875 0.5 3.19922 0.5 2.02344 0.828125C1.39453 0.992188 0.875 1.51172 0.710938 2.16797C0.382812 3.31641 0.382812 5.77734 0.382812 5.77734C0.382812 5.77734 0.382812 8.21094 0.710938 9.38672C0.875 10.043 1.39453 10.5352 2.02344 10.6992C3.19922 11 7.875 11 7.875 11C7.875 11 12.5234 11 13.6992 10.6992C14.3281 10.5352 14.8477 10.043 15.0117 9.38672C15.3398 8.21094 15.3398 5.77734 15.3398 5.77734C15.3398 5.77734 15.3398 3.31641 15.0117 2.16797ZM6.34375 7.99219V3.5625L10.2266 5.77734L6.34375 7.99219Z" fill="currentColor"></path>
                                    </svg>
                                    <span class="visually-hidden">Youtube</span>
                                </a>
                            </li>
                            <li class="social__share--list">
                                <a class="social__share--icon text-white" target="_blank" href="<?= $common->pinterest?>">
                                    <svg width="14" height="15" viewbox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.5625 7.75C13.5625 4.00391 10.5273 0.96875 6.78125 0.96875C3.03516 0.96875 0 4.00391 0 7.75C0 10.6484 1.77734 13.082 4.29297 14.0664C4.23828 13.5469 4.18359 12.7266 4.32031 12.125C4.45703 11.6055 5.11328 8.76172 5.11328 8.76172C5.11328 8.76172 4.92188 8.35156 4.92188 7.75C4.92188 6.82031 5.46875 6.10938 6.15234 6.10938C6.72656 6.10938 7 6.54688 7 7.06641C7 7.64062 6.61719 8.51562 6.42578 9.33594C6.28906 9.99219 6.78125 10.5391 7.4375 10.5391C8.64062 10.5391 9.57031 9.28125 9.57031 7.44922C9.57031 5.80859 8.39453 4.6875 6.75391 4.6875C4.8125 4.6875 3.69141 6.13672 3.69141 7.61328C3.69141 8.21484 3.91016 8.84375 4.18359 9.17188C4.23828 9.22656 4.23828 9.30859 4.23828 9.36328C4.18359 9.58203 4.04688 10.0469 4.04688 10.1289C4.01953 10.2656 3.9375 10.293 3.80078 10.2383C2.95312 9.82812 2.43359 8.59766 2.43359 7.58594C2.43359 5.45312 3.99219 3.48438 6.91797 3.48438C9.26953 3.48438 11.1016 5.17969 11.1016 7.42188C11.1016 9.74609 9.625 11.6328 7.57422 11.6328C6.89062 11.6328 6.23438 11.2773 6.01562 10.8398C6.01562 10.8398 5.6875 12.1523 5.60547 12.4531C5.44141 13.0547 5.03125 13.793 4.75781 14.2305C5.38672 14.4492 6.07031 14.5312 6.78125 14.5312C10.5273 14.5312 13.5625 11.4961 13.5625 7.75Z" fill="currentColor"></path>
                                    </svg>
                                    <span class="visually-hidden">Pinterest</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main__header header__sticky">
            <div class="container-fluid">
                <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                    <div class="offcanvas__header--menu__open ">
                        <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg" viewbox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"></path></svg>
                            <span class="visually-hidden">Offcanvas Menu Open</span>
                        </a>
                    </div>
                    <div class="main__logo">
                        <h1 class="main__logo--title"><a class="main__logo--link" href="<?= base_url()?>"><img class="main__logo--img" src="<?= base_url() ?>assets/img/1.png" alt="logo-img"></a></h1>
                    </div>
                    <div class="header__menu style3 d-none d-lg-block">
                        <nav class="header__menu--navigation">
                            <ul class="header__menu--wrapper d-flex">
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="<?= base_url() ?>">Home </a>
                                </li>
                                <li class="header__menu--items mega__menu--items">
                                    <a class="header__menu--link" href="<?= base_url() ?>car">Cars </a>
                                </li>
                                <li class="header__menu--items">
                                    <a class="header__menu--link" href="<?= base_url() ?>blog">Blog </a>  
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
    <button type="button" class="btn no-border" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-map-marker-alt location-icon"></i>
        <span class="location-text" id="selectedLocation">Location</span>
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered custom-modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Choose Your City</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>This would help us in providing you quick service.</p>
                <div class="country-section">
                    <span class="country-label"><i class="fas fa-flag"></i> India</span>
                    <hr>
                </div>
                <div class="city-grid">
                    <!-- Example city items -->
                    <div class="city-item">
                        <img src="assets/img/city_logo.png" alt="Delhi" class="city-icon">
                        <span class="city-name">Delhi</span>
                    </div>
                    <div class="city-item">
                        <img src="https://via.placeholder.com/50" alt="Gurgaon" class="city-icon">
                        <span class="city-name">Gurgaon</span>
                    </div>
                    <div class="city-item">
                        <img src="https://via.placeholder.com/50" alt="Noida" class="city-icon">
                        <span class="city-name">Noida</span>
                    </div>
                    <div class="city-item">
                        <img src="https://via.placeholder.com/50" alt="Mumbai" class="city-icon">
                        <span class="city-name">Mumbai</span>
                    </div>
                    <!-- Add more cities as needed -->
                </div>
                <div class="location-detect-section">
                    <button class="btn btn-outline-primary detect-btn">
                        <i class="fas fa-crosshairs"></i> Detect my location
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
                      </li>
                            <li class="header__account--items d-none d-lg-block">
                                <a class="header__account--btn" href="<?= base_url() ?>login">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <span class="visually-hidden">My account</span> 
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Offcanvas header menu -->
        <div class="offcanvas__header">
            <div class="offcanvas__inner">
                <div class="offcanvas__logo">
                    <a class="offcanvas__logo_link" href="<?= base_url() ?>">
                        <img src="<?= base_url() ?>assets/img/logo/nav-log.webp" alt="Grocee Logo" width="158" height="36">
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
                        <li class="offcanvas__menu_li">
                            <a class="offcanvas__menu_item" href="<?= base_url() ?>blog">Blog</a>
                        </li>
                        <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="<?= base_url() ?>about">About</a></li>
                        <li class="offcanvas__menu_li"><a class="offcanvas__menu_item" href="<?= base_url() ?>contact">Contact</a></li>
                    </ul>
                    <div class="offcanvas__account--items">
                        <a class="offcanvas__account--items__btn d-flex align-items-center" href="<?= base_url() ?>login">
                            <span class="offcanvas__account--items__icon"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.51" height="19.443" viewbox="0 0 512 512"><path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path><path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path></svg> 
                            </span>
                            <span class="offcanvas__account--items__label">Login / Register</span>
                        </a>
                    </div>
                </nav>
            </div>
        </div>




        
        <div class="offCanvas__minicart">
            <div class="minicart__header ">
                <div class="minicart__header--top d-flex justify-content-between align-items-center">
                    <h3 class="minicart__title"> Shopping Cart</h3>
                    <button class="minicart__close--btn" aria-label="minicart close btn" data-offcanvas="">
                        <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"></path></svg>
                    </button>
                </div>
                <p class="minicart__header--desc">The organic foods products are limited</p>
            </div>
            <div class="minicart__product">
                <div class="minicart__product--items d-flex">
                    <div class="minicart__thumb">
                        <a href="product-details.html"><img src="assets/img/product/small-product/product1.webp" alt="prduct-img"></a>
                    </div>
                    <div class="minicart__text">
                        <h4 class="minicart__subtitle"><a href="product-details.html">Car & Motorbike Care.</a></h4>
                        <span class="color__variant"><b>Color:</b> Beige</span>
                        <div class="minicart__price">
                            <span class="minicart__current--price">$125.00</span>
                            <span class="minicart__old--price">$140.00</span>
                        </div>
                        <div class="minicart__text--footer d-flex align-items-center">
                            <div class="quantity__box minicart__quantity">
                                <button type="button" class="quantity__value decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                <label>
                                    <input type="number" class="quantity__number" value="1" data-counter="">
                                </label>
                                <button type="button" class="quantity__value increase" aria-label="quantity value" value="Increase Value">+</button>
                            </div>
                            <button class="minicart__product--remove" type="button">Remove</button>
                        </div>
                    </div>
                </div>
                <div class="minicart__product--items d-flex">
                    <div class="minicart__thumb">
                        <a href="product-details.html"><img src="assets/img/product/small-product/product2.webp" alt="prduct-img"></a>
                    </div>
                    <div class="minicart__text">
                        <h4 class="minicart__subtitle"><a href="product-details.html">Engine And Drivetrain.</a></h4>
                        <span class="color__variant"><b>Color:</b> Green</span>
                        <div class="minicart__price">
                            <span class="minicart__current--price">$115.00</span>
                            <span class="minicart__old--price">$130.00</span>
                        </div>
                        <div class="minicart__text--footer d-flex align-items-center">
                            <div class="quantity__box minicart__quantity">
                                <button type="button" class="quantity__value decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                <label>
                                    <input type="number" class="quantity__number" value="1" data-counter="">
                                </label>
                                <button type="button" class="quantity__value increase" aria-label="quantity value" value="Increase Value">+</button>
                            </div>
                            <button class="minicart__product--remove" type="button">Remove</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="minicart__amount">
                <div class="minicart__amount_list d-flex justify-content-between">
                    <span>Sub Total:</span>
                    <span><b>$240.00</b></span>
                </div>
                <div class="minicart__amount_list d-flex justify-content-between">
                    <span>Total:</span>
                    <span><b>$240.00</b></span>
                </div>
            </div>
            <div class="minicart__conditions text-center">
                <input class="minicart__conditions--input" id="accept" type="checkbox">
                <label class="minicart__conditions--label" for="accept">I agree with the <a class="minicart__conditions--link" href="privacy-policy.html">Privacy Policy</a></label>
            </div>
            <div class="minicart__button d-flex justify-content-center">
                <a class="primary__btn minicart__button--link" href="cart.html">View cart</a>
                <a class="primary__btn minicart__button--link" href="checkout.html">Checkout</a>
            </div>
        </div>
        <!-- End offCanvas minicart -->

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






<script>
document.querySelectorAll(".city-item").forEach((item) => {
    item.addEventListener("click", function () {
        const cityName = this.querySelector(".city-name").textContent;
        document.getElementById("selectedLocation").textContent = cityName;
        $("#exampleModal").modal("hide");
    });
});
</script>
