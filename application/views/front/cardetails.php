<?php
  include('inc/header.php');
?>
<!-- Add this in the <head> section of your HTML file -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">



<style type="text/css">
.form-check {
    margin-bottom: 10px;
}

.form-check-label {
    font-weight: bold;
}

#searchBar {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    padding-left: 30px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

#searchBarIcon {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 18px;
    color: #888;
}
</style>
<style>
.slider {
    display: none;
    position: fixed;
    z-index: 9999;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
}

.slider-content {
    display: block;
    margin: auto;
    max-width: 90%;
    max-height: 90%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    border-radius: 10px;
}

.slider .close {
    position: absolute;
    top: 10px;
    right: 25px;
    color: #fff;
    font-size: 30px;
    font-weight: bold;
    cursor: pointer;
    text-shadow: 0 1px 5px rgba(0, 0, 0, 0.7);
}

.slider .prev,
.slider .next {
    position: absolute;
    top: 50%;
    width: auto;
    padding: 10px;
    margin-top: -22px;
    color: #fff;
    font-weight: bold;
    font-size: 20px;
    cursor: pointer;
    user-select: none;
    text-shadow: 0 1px 5px rgba(0, 0, 0, 0.7);
}

.slider .prev {
    left: 10px;
}

.slider .next {
    right: 10px;
}

#profile-upper {
    position: relative;
}

#profile-d {
    position: absolute;
    left: 59px;
    bottom: 0px;
    right: 0px;
    height: 180px;
    z-index: 2;
}

#profile-banner-image {
    height: 360px;
    overflow: hidden;
    z-index: 1;
}

#profile-banner-image img {
    width: 100%;
    /* margin-top: -20%; */
    height: 100%;
}

#profile-pic {
    width: 180px;
    height: 180px;
    border-radius: 3px;
    margin-top: 28px;
    overflow: hidden;
    /* box-shadow: 0 0 0 5px #fff; */
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

#profile-pic img {
    width: 100%;
    height: 100%;
}

#u-name {
    position: absolute;
    top: 120px;
    left: 208px;
    color: #fff;
    font-size: 30px;
    font-weight: bold;
    text-transform: capitalize;
    /* text-shadow: 0px 3px 2px #ff0000, 0px 8px 10px rgba(0, 0, 0, 0.15), 0px 12px 2px rgba(0, 0, 0, 0.7); */
}



#edit-profile {
    position: absolute;
    right: 20px;
    bottom: 21px;
    line-height: 1;
    cursor: pointer;
}

#edit-profile i {
    display: block;
    color: rgba(255, 255, 255, 0.7);
}

#black-grd {
    position: absolute;
    left: 0px;
    bottom: 0px;
    right: 0px;
    height: 300px;
    background: linear-gradient(rgba(0, 0, 0, 0) 71%, rgba(0, 0, 0, 0.53));
    z-index: 1;
}

.button_group {
    position: absolute;
    position: absolute;
    right: 40px;
    bottom: 10px;
}

.animated_btn {
    text-transform: uppercase;
    padding: 10px 20px;
    position: relative;
    overflow: hidden;
    border-radius: 5px;
    transition: 0.2s;
}

.animated_btn span {
    position: relative;
    z-index: 0;
    color: #fff;
}

.animated_btn .liquid {
    position: absolute;
    top: -60px;
    left: 0;
    width: 100%;
    height: 200px;
    /* background: #7293ff; */
    background: #d30000;
    box-shadow: inset 0 0 50px rgba(0, 0, 0, 0.7);
    z-index: -1;
    transition: 0.6s;
}

.animated_btn .liquid::after,
.animated_btn .liquid::before {
    position: absolute;
    content: "";
    width: 200%;
    height: 200%;
    top: 0;
    left: 0;
    transform: translate(-25%, -75%);
}

.animated_btn .liquid::after {
    border-radius: 45%;
    background: rgba(20, 20, 20, 1);
    /* box-shadow: 0 0 10px 5px #7293ff, inset 0 0 5px #7293ff; */
    box-shadow: 0 0 10px 5px #ff1c1c, inset 0 0 5px #ff4343;
    animation: animate 5s linear infinite;
    opacity: 0.8;
}

.animated_btn .liquid::before {
    border-radius: 40%;
    box-shadow: 0 0 10px rgba(26, 26, 26, 0.5),
        inset 0 0 5px rgba(26, 26, 26, 0.5);
    background: rgba(26, 26, 26, 0.5);

    animation: animate 7s linear infinite;
}

@keyframes animate {
    0% {
        transform: translate(-25%, -75%) rotate(0);
    }

    100% {
        transform: translate(-25%, -75%) rotate(360deg);
    }
}

.animated_btn :hover .liquid {
    top: -120px;
}

.animated_btn :hover {
    box-shadow: 0 0 5px #7293ff, inset 0 0 5px #7293ff;
    transition-delay: 0.2s;
}

.left_card {
    background-color: #e9ebee;
}

.main_content {
    padding: 55px 0px 0px 0;
}

.main_content .card {
    padding: 20px;
    /* background: url('car.jpg') no-repeat center center; */
    background-size: cover;
    box-shadow: 0px 3px 3px #ddd;
    border-radius: 30px;
    /* color: white; */
    animation: moveBackground 30s infinite alternate;
}

@keyframes moveBackground {
    0% {
        background-position: 0% 0%;
    }

    50% {
        background-position: 80% 80%;
    }

    100% {
        background-position: 0% 0%;
    }
}

.car-name {
    text-transform: capitalize;
    color: red;
    font-weight: 600;
    font-size: 20px;
    margin-bottom: 10px;
}

.leaf_border {
    border-top-left-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
}

.border_rounded {
    border-radius: 30px;
}

/* Style for the title */
.section__heading--maintitle {
    position: relative;
    font-size: 2.5rem;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;

    display: inline-block;
    opacity: 0;
    animation: fadeIn 1s ease-out forwards;
    color: rgb(255 0 0) !important;
    font-size: 22px !important;
    text-transform: uppercase !important;
    text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.4), 0px 7px 10px rgba(0, 0, 0, 0.1), 0px 8px 12px rgba(0, 0, 0, 0.1);
    margin: 1rem 0;
}



.pl_0 {
    padding-left: 0 !important;
}

.border_bottom_0 {
    border-bottom: 0 !important;
}


.product-title::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -6px;
    height: 2px;
    width: 30px;

    background: rgb(255 0 0);
    transition: width 0.3s ease;
}



.section__heading--maintitle:hover::after {
    width: 100%;
}


@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(-30px);
    }

    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.section__heading::after {
    display: none !important;
    border: 0;
}

.section__heading::before {
    display: none !important;
}

.car-overview i {
    color: rgb(255 0 0) !important;
}

.car-overview strong {
    color: #868686;
    margin-right: 5px;
}

.post__article--thumbnail {
    width: 110px;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

.text1 {
    color: white;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 8px;
    margin-bottom: 10px;

    position: relative;

    animation-name: text;
    animation-duration: 2s;
    animation-iteration-count: infinite;
}

@keyframes text {
    0% {
        color: black;
        margin-bottom: 10px;
    }

    30% {
        color: black;
        letter-spacing: 5px;
        margin-bottom: 10px;
    }

    85% {
        color: black;
        letter-spacing: 3px;
        margin-bottom: 10px;
    }

    100% {
        color: black;
        margin-bottom: 10px;
    }
}
</style>

<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg"
        style="background-image: url('<?=base_url() ?>assets/img/carbg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title mb-25 text-white">Car Details</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a href="<?= base_url()?>"
                                    style="color:white;">Home</a></li>
                            <li class="breadcrumb__content--menu__items text-white"><span>Car Details</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start blog section -->
    <section class="blog__section section--padding">
        <div class="container">
            <div class="row mt-5">






                <div class="col-md-9">
                    <!-- Car Detail Section -->
                    <div class="car-detail left_card"
                        style="border: 1px solid #ccc; border-radius: 8px; padding: 20px;">

                        <!-- <section class="breadcrumb__section breadcrumb__bg"
                            style="background-image: url('<?=base_url() ?>cb.jpeg'); height: 220px; position:relative;  
                                    background-size: cover; background-position: center; background-repeat: no-repeat; margin-bottom: 20px;">


                            <div style="position: absolute; bottom: -10px; left:20px; ">
                                <img src="<?=$carinfo->thumb ?>" alt="Car Image" class="img-fluid rounded"
                                    onerror="this.onerror=null; this.src='<?=base_url('nocar.png')?>';"
                                    style="width: 190px; border-radius: 15px !important; border: 2px solid #ccc; box-shadow: 3px 3px 8px #484545;">

                            </div>
                        </section> -->



                        <div id="profile-upper">
                            <div id="profile-banner-image">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                        </li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">

                                        <div class="carousel-item active">

                                            <img src="<?= base_url() ?>cb.jpeg" alt="First slide" class="d-block w-100">
                                        </div>


                                        <div class="carousel-item">
                                            <?php if (!empty($pdtl->pic1)) { ?>
                                            <img src="<?=$pdtl->pic1?>" alt="First slide" class="d-block w-100">
                                            <?php } else { ?>
                                            <img src="https://dev.automoss.in/nocar.png" alt="First slide"
                                                class="d-block w-100">
                                            <?php } ?>



                                        </div>
                                        <div class="carousel-item">
                                            <?php if (!empty($pdtl->pic2)) { ?>
                                            <img src="<?=$pdtl->pic2?>" alt="Second slide" class="d-block w-100">
                                            <?php } else { ?>
                                            <img src="https://dev.automoss.in/nocar.png" alt="Second slide"
                                                class="d-block w-100">
                                            <?php } ?>

                                        </div>
                                        <div class="carousel-item">
                                            <?php if (!empty($pdtl->pic3)) { ?>
                                            <img src="<?=$pdtl->pic3?>" alt="Third slide" class="d-block w-100">
                                            <?php } else { ?>
                                            <img src="https://dev.automoss.in/nocar.png" alt="Third slide"
                                                class="d-block w-100">
                                            <?php } ?>

                                        </div>
                                        <div class="carousel-item">
                                            <?php if (!empty($pdtl->pic4)) { ?>
                                            <img src="<?=$pdtl->pic4?>" alt="fourth slide" class="d-block w-100">
                                            <?php } else { ?>
                                            <img src="https://dev.automoss.in/nocar.png" alt="fourth slide"
                                                class="d-block w-100">
                                            <?php } ?>

                                        </div>
                                    </div>
                                    <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a> -->
                                </div>
                            </div>

                            
                            <div id="profile-d">
                                <div id="profile-pic">
                                    <img src="<?= $carinfo?->thumb ?>"
                                        onerror="this.onerror=null; this.src='https://dev.automoss.in/nocar.png';">
                                </div>
                                <div id="u-name"><?=$carinfo->price ?> /-</div>
                                <div class="button_group">

                                    <a class="animated_btn" href="<?=base_url('carenq/'.$bid) ?>" target="_blank">
                                        <span>Send Enquiry</span>
                                        <div class="liquid"></div>
                                    </a>
                                </div>


                            </div>
                            <div id="black-grd"></div>
                        </div>

   
                        <div class="main_content">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-12" id="l-col">
                                    <div class="card leaf_border">


                                        <div class="l-cnt">
                                            <div class="cnt-label">
                                                <div class="car-name text-danger"> <i class="l-i fas fa-spinner fa-spin"
                                                        style="margin-right: 10px;"></i><?=$carinfo->name ?></div>


                                            </div>
                                            <div id="i-box">
                                                <div id="u-occ"><?=$carinfo->info ?></div>
                                            </div>
                                        </div>


                                    </div>


                                </div>


                            </div>


                        </div>




                        <!-- Car Image -->


                     

                        <!-- Car Features -->


                        <div class="card mt-4 border_rounded car-overview p-4 border shadow-sm">
                            <div class="section__heading mb-10">
                                <h2 class="product-title section__heading--maintitle pl_0">Car Overview</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <i class="fas fa-calendar-alt me-3 text-muted"></i>
                                    <span><strong>Registration Year:</strong>
                                        <?=$carinfo->year_of_registration ?></span>
                                </div>
                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <i class="fas fa-shield-alt me-3 text-muted"></i>
                                    <span><strong>Insurance:</strong> <?=$carinfo->insurance ?></span>
                                </div>
                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <i class="fas fa-gas-pump me-3 text-muted"></i>
                                    <span><strong>Fuel Type:</strong> <?=$carinfo->fuel_nm ?></span>
                                </div>
                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <i class="fas fa-chair me-3 text-muted"></i>
                                    <span><strong>Seats:</strong> <?=$carinfo->seat_count ?></span>
                                </div>
                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <i class="fas fa-tachometer-alt me-3 text-muted"></i>
                                    <span><strong>Kms Driven:</strong> <?=$carinfo->kms_driven ?> Kms</span>
                                </div>
                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt me-3 text-muted"></i>
                                    <span><strong>RTO:</strong> <?=$carinfo->rto ?></span>
                                </div>
                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <i class="fas fa-user-circle me-3 text-muted"></i>
                                    <span><strong>Ownership:</strong> <?=$carinfo->owner_type ?></span>
                                </div>
                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <i class="fas fa-cogs me-3 text-muted"></i>
                                    <span><strong>Transmission:</strong> <?=$carinfo->car_transmission ?></span>
                                </div>
                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <i class="fas fa-car-side me-3 text-muted"></i>
                                    <span><strong>Engine:</strong>
                                        <?=$carinfo->engine ?>
                                        cc</span>
                                </div>
                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <i class="fas fa-clock me-3 text-muted"></i>
                                    <span><strong>Year of Manufacture:</strong>
                                        <?=$carinfo->year_of_manufacture ?></span>
                                </div>
                            </div>


                        </div>





                        <!-- <div class="car-overview p-4 border rounded shadow-sm">
                            <h3 class="mb-4 fw-bold">Car Overview</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <i class="fas fa-calendar-alt me-3 text-muted"></i>
                                    <span><strong>Registration Year:</strong>
                                        <?=$carinfo->year_of_registration ?></span>
                                </div>
                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <i class="fas fa-shield-alt me-3 text-muted"></i>
                                    <span><strong>Insurance:</strong> <?=$carinfo->insurance ?></span>
                                </div>
                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <i class="fas fa-gas-pump me-3 text-muted"></i>
                                    <span><strong>Fuel Type:</strong> <?=$carinfo->fuel_nm ?></span>
                                </div>
                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <i class="fas fa-chair me-3 text-muted"></i>
                                    <span><strong>Seats:</strong> <?=$carinfo->seat_count ?></span>
                                </div>
                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <i class="fas fa-tachometer-alt me-3 text-muted"></i>
                                    <span><strong>Kms Driven:</strong> <?=$carinfo->kms_driven ?> Kms</span>
                                </div>
                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt me-3 text-muted"></i>
                                    <span><strong>RTO:</strong> <?=$carinfo->rto ?></span>
                                </div>
                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <i class="fas fa-user-circle me-3 text-muted"></i>
                                    <span><strong>Ownership:</strong> <?=$carinfo->owner_type ?></span>
                                </div>
                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <i class="fas fa-cogs me-3 text-muted"></i>
                                    <span><strong>Transmission:</strong> <?=$carinfo->car_transmission ?></span>
                                </div>
                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <i class="fas fa-car-side me-3 text-muted"></i>
                                    <span><strong>Engine Displacement:</strong> <?=$carinfo->engine_displacement ?>
                                        cc</span>
                                </div>
                                <div class="col-md-6 mb-3 d-flex align-items-center">
                                    <i class="fas fa-clock me-3 text-muted"></i>
                                    <span><strong>Year of Manufacture:</strong>
                                        <?=$carinfo->year_of_manufacture ?></span>
                                </div>
                            </div>
                        </div> -->

                        <!-- Car Gallery -->
                        <div class="card mt-4 border_rounded car-overview p-4 border shadow-sm">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="product-title section__heading--maintitle pl_0">Car Gallery</h3>
                                </div>

                                <!-- ////////////////// -->

                                <!-- Image 1 -->
                                <?php 
                                if(isset($carinfo->pic1) && $carinfo->pic1!=''){
                            ?>
                                <div class="col-md-3 mb-3">
                                    <img src="<?= $carinfo->pic1 ?>" alt="Car Image 1" class="img-fluid rounded"
                                        onclick="openSlider(0)"
                                        onerror="this.onerror=null; this.src='<?=base_url('nocar.png')?>';" />
                                </div>
                                <?php 
                                }                             
                                if(isset($carinfo->pic2) && $carinfo->pic2!=''){
                            ?>
                                <div class="col-md-3 mb-3">
                                    <img src="<?= $carinfo->pic2 ?>" alt="Car Image 2" class="img-fluid rounded"
                                        onclick="openSlider(1)"
                                        onerror="this.onerror=null; this.src='<?=base_url('nocar.png')?>';" />
                                </div>
                                <?php 
                                }                             
                                if(isset($carinfo->pic3) && $carinfo->pic3!=''){
                            ?>
                                <div class="col-md-3 mb-3">
                                    <img src="<?= $carinfo->pic3 ?>" alt="Car Image 3" class="img-fluid rounded"
                                        onclick="openSlider(2)"
                                        onerror="this.onerror=null; this.src='<?=base_url('nocar.png')?>';" />
                                </div>
                                <?php 
                                }                             
                                if(isset($carinfo->pic4) && $carinfo->pic4!=''){
                            ?>

                                <!-- Image 4 -->
                                <div class="col-md-3 mb-3">
                                    <img src="<?= $carinfo->pic4 ?>" alt="Car Image 4" class="img-fluid rounded"
                                        onclick="openSlider(3)"
                                        onerror="this.onerror=null; this.src='<?=base_url('nocar.png')?>';" />
                                </div>
                                <?php 
                                }                             
                            ?>

                                <!-- ////////////////////////// -->

                                <!-- Fullscreen Slider -->
                                <div id="slider" class="slider">
                                    <span class="close" onclick="closeSlider()">&times;</span>
                                    <img class="slider-content" id="slider-img" />
                                    <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
                                    <a class="next" onclick="changeSlide(1)">&#10095;</a>
                                </div>





                            </div>
                        </div>











                        <!-- End -->



                    </div>
                </div>



                <div class="col-md-3">
                    <div class="car-detail right_card">
                        <h2 class="widget__title h3">Related Cars</h2>

                        <?php
                        foreach ($othercar as $dp) {
                    ?>

                        <!--  <div class="blog__card">
                                <div class="blog__card--thumbnail">
                                    <a class="blog__card--thumbnail__link" href="blog-details.html"><img class="blog__card--thumbnail__img" src="<?=$dp->thumb ?>" alt="car-img"></a>
                                </div>
                                <div class="blog__card--content">
                                    <h3 class="blog__card--title"><a href="#"><?=$dp->name ?></a></h3>
                                    <p class="blog__card--desc"><?=$dp->info ?> </p>
                                    
                                </div>
                            </div> -->


                        <div class="post__article--items d-flex align-items-center">
                            <div class="post__article--thumbnail">
                                <a class="display-block" href="<?=base_url()?>cardetails/<?=$dp->car_slno ?>">
                                    <img class="post__article--thumbnail__img" src="<?=$dp->thumb ?>" alt="car-img"
                                        onerror="this.onerror=null; this.src='<?=base_url('nocar.png')?>';">
                                </a>
                            </div>
                            <div class="post__article--content">
                                <h3 class="post__article--content__title"><a
                                        href="<?=base_url()?>cardetails/<?=$dp->car_slno ?>"><span
                                            class="text1"><?=$dp->name ?></span> </a></h3>
                                <span class="meta__deta">₹ <?=$dp->price ?> </span>
                            </div>
                        </div>




                        <?php
                        }

                    ?>


                    </div>
                </div>






            </div>
        </div>

    </section>
    <!-- End blog section -->







</main>

<?php
  include('inc/footer.php');
?>


<!-- JavaScript for Lightbox -->
<script>
const images = [
    "<?= $carinfo->pic1 ?>",
    "<?= $carinfo->pic2 ?>",
    "<?= $carinfo->pic3 ?>",
    "<?= $carinfo->pic4 ?>"
];

let currentSlide = 0;

function openSlider(index) {
    currentSlide = index;
    const slider = document.getElementById("slider");
    const sliderImg = document.getElementById("slider-img");
    slider.style.display = "block";
    sliderImg.src = images[currentSlide];
}

function closeSlider() {
    const slider = document.getElementById("slider");
    slider.style.display = "none";
}

function changeSlide(direction) {
    currentSlide += direction;
    if (currentSlide < 0) {
        currentSlide = images.length - 1; // Loop to last image
    } else if (currentSlide >= images.length) {
        currentSlide = 0; // Loop to first image
    }
    const sliderImg = document.getElementById("slider-img");
    sliderImg.src = images[currentSlide];
}
</script>