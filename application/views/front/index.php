<?php
  include('inc/header.php');
?>
<link rel="stylesheet" href="<?= base_url() ?>mycustom.css?v=<?=rand() ?>">

<style>
.section__heading::after {
    display: none !important;
    border: 0;
}

.section__heading::before {
    display: none !important;
}

.search__filter--inner {
    background: linear-gradient(to right, #FAEEF2, #F1F3FB);
    padding: 3rem 2rem;
    border-radius: 30px;
}

/* .ff {
    position: absolute;
    top: 0;
} */

.rr {
    background-color: red;
    border-radius: 50%;
    height: 190px;
    position: relative;
    top: -110px;
}

.gg {
    position: relative;
    top: -200px;
}

.text-danger {
    color: #ED1D24 !important;
}



/* Style for the title */
.section__heading--maintitle {
    position: relative;
    font-size: 2.5rem;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
    /* text-shadow: 0px 4px 3px rgba(0, 0, 0, 0.4), 0px 8px 13px rgba(0, 0, 0, 0.1), 0px 18px 23px rgba(0, 0, 0, 0.1); */
    display: inline-block;
    opacity: 0;
    animation: fadeIn 1s ease-out forwards;
    color: rgb(255 0 0) !important;
    font-size: 22px !important;
    text-transform: uppercase !important;
    text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.4), 0px 7px 10px rgba(0, 0, 0, 0.1), 0px 8px 12px rgba(0, 0, 0, 0.1);

}



.pl_0 {
    padding-left: 0 !important;
}

.border_bottom_0 {
    border-bottom: 0 !important;
}

.section__heading--maintitle::after {
    content: "";
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 3px;
    background-color: rgb(255 0 0);
    transition: width 0.3s ease-in-out;
    width: 5%;

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

.categories__content {
    margin-top: 10px;
}

.categories__content--title {
    transition: font-size 0.3s ease;
}

.categories__card--link:hover .categories__content--title {
    font-size: 1.2em;

}
</style>


<main class="main__content_wrapper">



    <!-- Start slider section -->
    <section class="hero__slider--section">
        <div class="slider__thumbnail--style5 position-relative">
            <img class="slider__thumbnail--img__style5" src="<?= base_url() ?>assets/img/0.jpg" alt="slider-img">
            <div class="hero__content--style5 text-center">
            </div>
            <div class="search__filter--section search__filter--style5">
                <div class="container" style="justify-items:center;">
                    <div class="section__heading style2 text-center mb-30">
                    </div>


                    <a href="<?=base_url() ?>customer/jobcard_add" style="text-align:center; 
    width: 390px;
    margin-bottom: 20px;
    border-radius: 25px;" class="search__filter--btn primary__btn" type="submit">Need a Customised Service? Book
                        Now!</a>




                    <div class="search__filter--inner style5">



                        <form class="search__filter--form__style2 d-flex" method="post">


                            <div class="search__filter--select select search__filter--width">
                                <input type="tact" name="city" value=" <?=$mycity_name; ?>" onclick="cityopenModal()"
                                    class="search__filter--select__field">
                            </div>
                            <div class="search__filter--select select search__filter--width">
                                <select id="manufacturer" name="car" class="search__filter--select__field" required>
                                    <option selected="" value="1">Select Cars</option>
                                    <?php 
                                            // foreach ($car_man as $cm) {
                                            //     echo '<option value="'.$cm->id.'">'.$cm->name.'</option>';
                                            // }
                                        ?>

                                </select>
                            </div>
                            <div class="search__filter--select select search__filter--width">
                                <select id="model" name="model" class="search__filter--select__field" required>
                                    <option selected="" value="1">Select Model</option>
                                    <?php 
                                            // foreach ($car_model as $com) {
                                            //     echo '<option value="'.$com->id.'">'.$com->name.'</option>';
                                            // }
                                        ?>

                                </select>
                            </div>
                            <div class="search__filter--select select search__filter--width">
                                <select class="search__filter--select__field" name="fuel" required>
                                    <option selected="" value="1">Select Fuel Type</option>
                                    <?php 
                                            foreach ($fuel_type as $cft) {
                                                echo '<option value="'.$cft->id.'">'.$cft->name.'</option>';
                                            }
                                        ?>
                                </select>
                            </div>

                            <div class="search__filter--select select search__filter--width">
                                <select class="search__filter--select__field" name="service">
                                    <option selected="" value="">Select Service</option>
                                    <?php 
                                            foreach ($cats as $cft) {
                                                echo '<option value="'.$cft->urlslug.'">'.$cft->name.'</option>';
                                            }
                                        ?>
                                </select>
                            </div>
                            <!-- <div class="search__filter--select search__filter--width">

                                    <input type="tel" id="phone" name="phone" class="search__filter--select__field" placeholder="Enter number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                                </div> -->

                            <div class="search__filter--width">
                                <button class="search__filter--btn primary__btn" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End search filter area -->
        </div>

    </section>
    <!-- End slider section -->



    <style>
    .categories__thumbnail--img {
        width: 100%;

        transition: transform 0.7s ease-in-out;

        border-radius: 50%;

        object-fit: cover;
        border: 5px solid #d3d3d3;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        will-change: transform, box-shadow;
    }

    .categories__card--link:hover .categories__thumbnail--img {
        transform: rotate(360deg);
        border: 5px solid #fe2f2f;

    }
    </style>
    <!-- Start categories section -->
    <section class="categories__section section--padding">
        <div class="container">
            <div class="section__heading mb-30 text-center ">
                <h2 class="section__heading--maintitle pl_0">Top Car Service in <?=$mycity_name; ?></h2>
            </div>
            <div class="categories__inner--style3 d-flex" id="catlist">




            </div>
        </div>
    </section>
    <!-- End categories section -->


    <style>
    .ff {
        border: 2px solid transparent !important;
        transition: .4s ease;
    }

    .ff:hover {
        border: 2px solid #ED1D24 !important;
    }
    </style>


    <!-- <section>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-6 col-md-3 mb-3">
                    <div class="card shadow_box ff swing swing_card">
                        <a href="<?=base_url() ?>service_details/<?=$mycity_url ?>/roadside-assistance"
                            class="card-body p-0">
                            <img src="assets/img/card.jpg" class="img-fluid card-img">
                            <button
                                class="btn btn-danger btn-lg position-absolute top-50 start-50 translate-middle">Road
                                side Assitance!</button>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <div class="card shadow_box ff swing swing_card">
                        <a href="<?=base_url() ?>service_details/<?=$mycity_url ?>/roadside-assistance"
                            class="card-body p-0">
                            <img src="assets/img/ser.jpg" class="img-fluid card-img">
                            <button
                                class="btn btn-danger btn-lg position-absolute top-50 start-50 translate-middle">Services!</button>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <div class="card shadow_box ff swing swing_card">
                        <a href="<?=base_url() ?>car" class="card-body p-0">
                            <img src="assets/img/buy.jpg" class="img-fluid card-img">
                            <button class="btn btn-danger btn-lg position-absolute top-50 start-50 translate-middle">Buy
                                Car!</button>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <div class="card shadow_box ff swing swing_card">
                        <a href="<?=base_url() ?>customer/carlists" class="card-body p-0">
                            <img src="assets/img/sell.jpg" class="img-fluid card-img">
                            <button
                                class="btn btn-danger btn-lg position-absolute top-50 start-50 translate-middle">Sell
                                Car!</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->








    <style>
    .card-custom {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
    }

    .card-custom:hover {
        transform: scale(1.05);
    }

    .card-custom .card-body {
        display: grid;
    }

    .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .price-badge {
        position: absolute;
        top: 15px;
        left: 15px;
        background-color: rgba(0, 0, 0, 0.7);
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        font-weight: bold;
    }

    .btn-custom {
        background-color: #007bff;
        color: #fff;
        border-radius: 20px;
        transition: background-color 0.3s ease;
    }

    .btn-custom:hover {
        background-color: #0056b3;
    }

    .ff {
        border: 2px solid transparent !important;
        transition: .4s ease;
    }

    .ff:hover {
        border: 2px solid #ED1D24 !important;
    }

    .swing {
        animation: swing ease-in-out 1s infinite alternate;
        transform-origin: center -20px;
        float: left;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
    }

    .swing img {
        border: 5px solid #f8f8f8;
        display: block;
    }

    .swing:after {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        border: 1px solid #999;
        top: -10px;
        left: 50%;
        z-index: 0;
        border-bottom: none;
        border-right: none;
        transform: rotate(45deg);
    }

    /* nail */
    .swing:before {
        content: '';
        position: absolute;
        width: 5px;
        height: 5px;
        top: -14px;
        left: 54%;
        z-index: 5;
        border-radius: 50% 50%;
        background: #000;
    }

    @keyframes swing {
        0% {
            transform: rotate(3deg);
        }

        100% {
            transform: rotate(-3deg);
        }
    }



    .swing_card .card-body {
        position: relative;
    }



    .swing_card button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #dc3545;
        /* Red color */
        color: #fff;
        border: none;
        font-size: 1.2em;
        font-weight: bold;
        padding: 1rem 2rem;
        border-radius: 30px;
        cursor: pointer;
        overflow: hidden;
        position: relative;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
    }

    .swing_card button .btn-text {
        display: inline-block;
        opacity: 0;
        transform: translateX(-100%);
        animation: revealText 1s ease-in-out forwards;
    }

    .swing_card button:hover .btn-text {
        animation: revealText 1s ease-in-out forwards;
    }

    @keyframes revealText {
        0% {
            transform: translateX(-100%);
            opacity: 0;
        }

        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .swing_card .card-img {
        opacity: 0;

        transform: scale(1.2);

        animation: imageAnimation 2s ease-out forwards;

    }

    .swing_card button:hover .btn-text {
        animation: revealText 1s ease-in-out forwards;
    }

    @keyframes imageAnimation {
        0% {
            opacity: 0;
            transform: scale(1.2);

        }

        100% {
            opacity: 1;
            transform: scale(1);

        }
    }

    .card-custom {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
    }

    .card-custom:hover {
        transform: scale(1.05);
    }

    .card-custom .card-body {
        display: grid;
    }

    .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .price-badge {
        position: absolute;
        top: 15px;
        left: 15px;
        background-color: rgba(0, 0, 0, 0.7);
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        font-weight: bold;
    }

    .btn-custom {
        background-color: #007bff;
        color: #fff;
        border-radius: 20px;
        transition: background-color 0.3s ease;
    }

    .btn-custom:hover {
        background-color: #0056b3;
    }

    .card-custom .card-body {
        padding: 30px 20px;
    }

    .blog_card {
        width: 100%;
        height: auto;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        background: #fff;
        transition: all 0.5s ease;
        cursor: pointer;
        user-select: none;
        z-index: 10;
        overflow: hidden
    }

    .blog_card .backgroundEffect {
        bottom: 0;
        height: 0px;
        width: 100%
    }

    .blog_card:hover {
        color: #fff;
        transform: scale(1.025);
        box-shadow: rgba(0, 0, 0, 0.24) 0px 5px 10px
    }

    .blog_card:hover .backgroundEffect {
        bottom: 0;
        height: 320px;
        width: 100%;
        position: absolute;
        z-index: -1;
        background: #1b9ce3;
        animation: popBackground 0.3s ease-in
    }

    @keyframes popBackground {
        0% {
            height: 20px;
            border-top-left-radius: 50%;
            border-top-right-radius: 50%
        }

        50% {
            height: 80px;
            border-top-left-radius: 75%;
            border-top-right-radius: 75%
        }

        75% {
            height: 160px;
            border-top-left-radius: 85%;
            border-top-right-radius: 85%
        }

        100% {
            height: 320px;
            border-top-left-radius: 100%;
            border-top-right-radius: 100%
        }
    }

    .blog_card .pic {
        position: relative
    }

    .blog_card .pic img {
        width: 100%;
        height: 200px;
        object-fit: cover
    }

    .blog_card .date {
        display: flex;

        align-items: center;
        justify-content: center;
        width: 50px;
        height: 70px;

        color: white;
        position: absolute;
        bottom: 0px;
        transition: all ease
    }

    .blog_card .date .price-badge {
        position: absolute;
        gap: 10px;
        display: flex;
        top: 15px;
        left: 15px;
        background-color: rgba(0, 0, 0, 0.7);
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        font-weight: bold;
    }



    .blog_card .text-muted {
        font-size: 12px
    }

    .blog_card:hover .text-muted {
        color: #fff !important
    }

    .blog_card .content {
        padding: 20px 20px
    }

    .blog_card .content .btn {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 5px 10px;
        background-color: #1b9ce3;
        border-radius: 25px;
        font-size: 12px;
        border: none
    }

    .blog_card:hover .content .btn {
        background: #fff;
        color: #1b9ce3;
        box-shadow: #0000001a 0px 3px 5px
    }

    .blog_card .content .btn .fas {
        font-size: 10px;
        padding-left: 5px
    }

    .blog_card .content .foot .admin {
        color: #1b9ce3;
        font-size: 12px
    }

    .blog_card:hover .content .foot .admin {
        color: #fff
    }

    .blog_card .content .foot .icon {
        font-size: 12px
    }


    .blog_card .content .admin .garage-name {
        display: inline-block;
        font-size: 15px;
        animation: colorChange 3s infinite alternate;

    }


    @keyframes colorChange {
        0% {
            color: #1b9ce3;

        }

        25% {
            color: #ff5733;

        }

        50% {
            color: #f1c40f;

        }

        75% {
            color: #2ecc71;

        }

        100% {
            color: #9b59b6;

        }
    }
    </style>




    <section class="product__section section--padding  pt-0">
        <div class="container">
            <div class="section__heading mb-30 text-center">
                <h2 class="section__heading--maintitle pl_0">Top Services in <?=$mycity_name; ?></h2>
            </div>
            <div class="row">

                <?php 
                    if(isset($topservice)){
                    foreach ($topservice as $tp) {
                    
                    ?>
                <div class="col-md-4">
                    <div class="container mt-5">




                        <div class="card blog_card  border-0 me-lg-4 mb-lg-0 mb-4">
                            <div class="backgroundEffect"></div>
                            <div class="pic">

                                <img src="<?=$tp->thumb ?>" class="" alt="Car Service">
                                <!-- <span class="price-badge">₹<?=$tp->offer_price ?></span> -->
                                <div class="date">
                                    <div class="price-badge">
                                        <span
                                            style="text-decoration: line-through; color: #ff0000; font-size: 14px;">₹<?=$tp->mrp_price ?></span>
                                        <span style="font-size: 16px; font-weight: bold; color: #00ff00;">
                                            ₹<?=$tp->offer_price ?></span>

                                    </div>
                                </div>

                            </div>
                            <div class="content">
                                <p class="h-1 mt-4 mb-0"><?=$tp->name ?></p>
                                <p class="text-muted mt-1">Basic info on this package goes here...Basic info on this
                                    package goes here...Basic info on this package goes here...</p>
                                <p class="admin"><span><strong> Garage : </strong></span> <span
                                        class="garage-name"><?=$tp->garage ?></span></p>

                                <div class="d-flex align-items-center justify-content-between mt-3 pb-3">

                                    <div class="btn btn-primary"><a
                                            href="<?=base_url('createbooking/'.spl_encode($tp->id)) ?>">Book Now<span
                                                class="fas fa-arrow-right"></span> </a>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-center foot">


                                    </div>


                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <?php 
                    }
                    }else{
                        echo 'No Services found for this city.';
                    }
                    
                    ?>






            </div>









        </div>
    </section>


    <style type="text/css">
    .categories__shop--card {
        display: flex;
        justify-content: ceneter;
        flex-direction: column;
    }


    .testimonial-slider .carousel-item {
        text-align: center;
    }

    .testimonial-slider img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #f00;
        margin: 0 auto;
    }

    .testimonial-slider .star-rating {
        color: #ffcc00;
    }

    .testimonial-slider .testimonial-text {
        font-style: italic;
        margin: 15px 0;
    }

    .testimonial-slider .customer-name {
        font-weight: bold;
    }


    .categories__shop--card {
        display: flex;
        justify-content: ceneter;
        flex-direction: column;
    }


    .testimonial-slider .carousel-item {
        text-align: center;
    }

    .testimonial-slider img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #f00;
        margin: 0 auto;
    }

    .testimonial-slider .star-rating {
        color: #ffcc00;
    }

    .testimonial-slider .testimonial-text {
        font-style: italic;
        margin: 15px 0;
    }

    .testimonial-slider .customer-name {
        font-weight: bold;
    }

    .categories__content--title {
        text-transform: capitalize;
    }

    .custom-btn {
        /* width: 130px;
                height: 40px; */
        color: #fff;
        border-radius: 5px;
        padding: 10px 25px;
        font-family: 'Lato', sans-serif;
        font-weight: 500;
        background: transparent;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        display: inline-block;
        box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
            7px 7px 20px 0px rgba(0, 0, 0, .1),
            4px 4px 5px 0px rgba(0, 0, 0, .1);
        outline: none;
        font-size: 12px;
    }

    .btn-11 {
        border: none;
        background: rgb(251, 33, 117);
        background: linear-gradient(0deg, rgba(251, 33, 117, 1) 0%, rgba(234, 76, 137, 1) 100%);
        color: #fff;
        overflow: hidden;
    }

    .btn-11:hover {
        text-decoration: none;
        color: #fff;
    }

    .btn-11:before {
        position: absolute;
        content: '';
        display: inline-block;
        top: -180px;
        left: 0;
        width: 30px;
        height: 100%;
        background-color: #fff;
        animation: shiny-btn1 3s ease-in-out infinite;
    }

    .btn-11:hover {
        opacity: .7;
    }

    .btn-11:active {
        box-shadow: 4px 4px 6px 0 rgba(255, 255, 255, .3),
            -4px -4px 6px 0 rgba(116, 125, 136, .2),
            inset -4px -4px 6px 0 rgba(255, 255, 255, .2),
            inset 4px 4px 6px 0 rgba(0, 0, 0, .2);
    }


    @-webkit-keyframes shiny-btn1 {
        0% {
            -webkit-transform: scale(0) rotate(45deg);
            opacity: 0;
        }

        80% {
            -webkit-transform: scale(0) rotate(45deg);
            opacity: 0.5;
        }

        81% {
            -webkit-transform: scale(4) rotate(45deg);
            opacity: 1;
        }

        100% {
            -webkit-transform: scale(50) rotate(45deg);
            opacity: 0;
        }
    }

    .categories__shop--inner {
        background: url(assets/img/whitecar.jpg);
        background-size: cover;
        background-position: center;
    }

    .categories__content__bg {
        background-color: #e1eaee;
        padding: 10px;
        border-radius: 40px;
    }

    .categories__shop--card:hover {
        background: rgb(205, 205, 205);
    }
    </style>


    <section>
        <div class="container">
            <div class="categories__shop mb-50">
                <div class="section__heading mb-30 text-center">
                    <h2 class="section__heading--maintitle pl_0">Top Products You May Like</h2>
                </div>
                <ul class="categories__shop--inner">


                    <?php 
                                    if(isset($prodz)){
                                        foreach ($prodz as $pd) {                                        
                                    ?>
                    <li class="categories__shop--card">
                        <span class="categories__shop--card__link">
                            <div class="categories__thumbnail mb-15">
                                <img class="categories__thumbnail--img" src="<?=$pd->thumb ?>" alt="categories-img">
                            </div>
                            <div class="categories__content categories__content__bg mt-4 mb-4">
                                <h2 class="categories__content--title"><?=$pd->name ?></h2>

                                <div class="categories__content--subtitle"
                                    style="width:100%; clear: both; overflow: hidden;">
                                    <span
                                        style="text-decoration: line-through; color: #919191; font-size: 14px;">₹<?=$pd->mrp_price ?></span>
                                    <span style="font-size: 16px; font-weight: bold; color: #dc3545;">
                                        ₹<?=$pd->offer_price ?></span>
                                </div>


                            </div>
                            <a href="<?=base_url('product_details/'.spl_encode($pd->id)) ?>"
                                class="custom-btn btn-11">View Details</a>
                        </span>
                    </li>
                    <?php 
                                        }
                                    }                            
                                    ?>







                </ul>
            </div>
        </div>
    </section>


    <section class="testimonial__section testimonial__bg section--padding pb-0">
        <div class="container">
            <div class="section__heading style2 text-center mb-40">
                <h2 class="section__heading--maintitle">Hear From Our Happy Customers</h2>
            </div>
            <div class="testimonial__section--inner">


                <div id="testimonialCarousel" class="carousel slide testimonial-slider" data-bs-ride="carousel">
                    <div class="carousel-inner">



                        <!-- First Slide -->

                        <?php 
                        if(isset($reviewz)){
                            $i=0;
                            foreach ($reviewz as $rv) {

                            
                        ?>
                        <div class="carousel-item <?=($i==0)?'active':'' ?>">
                            <img src="<?=$rv->cust_thumb ?>"
                                onerror="this.onerror=null; this.src='https://automoss.in/nopics.jpg'" alt="Customer 1">
                            <p class="testimonial-text"><?=$rv->review_text ?></p>
                            <div class="star-rating">★★★★★</div>
                            <p class="customer-name"><?=$rv->cust_name ?></p>
                        </div>
                        <?php 
                            $i++;
                            }
                        }                            
                        ?>




                    </div>
                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


            </div>


        </div>
    </section>



    <section class="section--padding">
        <div class="container">
            <div class="section__heading style2 text-center mb-40">
                <h2 class="section__heading--maintitle">How Automoss Works</h2>
            </div>
            <img src="https://ssdemo.in/frontend/img/services/how.png">
        </div>
    </section>
    <style>
    .parallax-section {
        background-image: url('http://localhost/automoss/assets/parallax.jpg');
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        color: #fff;
        position: relative;
    }

    .parallax-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }

    h1.display-5 {
        font-size: 3rem;
        font-weight: bold;
        color: #fff;
        border: 2px solid white;
        border-radius: 50%;
        padding: 30px;
        z-index: 999;
    }

    p.fs-5 {
        font-size: 1.25rem;
        margin-top: 10px;
        color: #00aaff;
        font-size: 1.25rem !important;
        font-weight: 700;
        z-index: 999;
        position: relative;
    }
    </style>
    <?php
          include('inc/counterup.php');
        ?>

<style>
    .services {
        font-family: 'Poppins', sans-serif;
        background-color: #1a1a1a;
        color: #fff;
        padding: 2rem;
        text-align: center;
    }

    .services__title {
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
        color: #ffa500;
        font-weight: 600;
        /* Bold title */
    }

    .services__grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }

    .service {
        background-color: #2a2a2a;
        padding: 1.5rem;
        border-radius: 10px;
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .service i.icon {
        font-size: 2rem;
        margin-bottom: 0.5rem;
        display: block;
    }

    .service h3 {
        font-size: 1.6rem;
        margin-bottom: 0.5rem;
        color: #ffa500;
        font-weight: 600;

    }

    .service p {
        font-size: 1.2rem;
        color: #ccc;
        font-weight: 400;

    }

    .service:hover {
        background-color: #ffa500;
        transform: translateY(-10px);
        color: #1a1a1a;
    }

    .service:hover h3,
    .service:hover p {
        color: #1a1a1a;
    }

    .service.active {
        background-color: #ffa500;
        color: #1a1a1a;
    }

    .service.active h3,
    .service.active p {
        color: #1a1a1a;
    }
    </style>


    <section class="shipping__section section--padding">
        <div class="container">
            <div class="section__heading style2 text-center mb-40">
                <h2 class="section__heading--maintitle pl_0">AUTOMOSS GUARANTEE</h2>
            </div>
            <div class="services__grid">
                <div class="service">
                    <i class="icon">🚚</i>

                    <h3>Best Service</h3>
                    <p>Best Service in the market </p>
                </div>

                <div class="service">
                    <i class="icon">🕒</i>
                    <h3>Support 24/7</h3>
                    <p>Contact us 24 hours a day</p>
                </div>

                <div class="service">
                    <i class="icon">💰</i>
                    <h3>Best Award Winner</h3>
                    <p>Best Award Winner </p>
                </div>

                <div class="service">
                    <i class="icon">🔒</i>
                    <h3>Payment Secure</h3>
                    <p>We ensure secure payment</p>

                </div>
            </div>
        </div>
    </section>


   


    <section class="banner__section section--padding">
        <div class="container">
            <div class="row  mb--n30">
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="banner__items position__relative">
                        <a class="banner__thumbnail display-block"
                            href="<?=base_url() ?>service_details/<?=$mycity_url ?>/denting-painting"><img
                                class="banner__thumbnail--img banner__max--height" src="assets/img/banner/banner1.webp"
                                alt="banner-img">
                            <div class="banner__content">
                                <!-- <span class="banner__content--subtitle text__secondary">Toyota Combo</span> -->
                                <h2 class="banner__content--title"><span class="banner__content--title__inner">CAR
                                        RUBBING &amp;</span> POLISHING</h2>
                                <!-- <span class="banner__content--price">₹1500</span> -->
                                <span class="banner__content--btn">Book Now
                                    <svg width="12" height="8" viewBox="0 0 12 8" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </div>
                            <!-- <span class="banner__badge">25% <br> off</span> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="banner__items position__relative">
                        <a class="banner__thumbnail display-block"
                            href="<?=base_url() ?>service_details/<?=$mycity_url ?>/tyers-wheel-care"><img
                                class="banner__thumbnail--img banner__max--height" src="assets/img/banner/banner2.webp"
                                alt="banner-img">
                            <div class="banner__content right">
                                <!-- <span class="banner__badge--style2">20% Off</span> -->
                                <h2 class="banner__content--title">WHEEL SERVICE <br> FOR ANY <span
                                        class="banner__content--title__inner"> VEHICLE </span></h2>
                                <span class="banner__content--btn mt-0">Book Now
                                    <svg width="12" height="8" viewBox="0 0 12 8" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>



        <div style="display:none;" class="pt-3 mt-3 container">
            <div class="section__heading border-bottom mb-30">
                <h2 class="section__heading--maintitle">Custom <span> Service in Bhubaneswar</span></h2>
            </div>
            <div
                class="blog__section--inner blog__swiper--activation swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                <div class="swiper-wrapper" id="swiper-wrapper-381ef181fec04e22" aria-live="polite"
                    style="transition-duration: 0ms;">
                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1">
                        <div class="blog__card" style="max-width: 250px; height: auto;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href=""><img class="blog__card--thumbnail__img"
                                        src="assets/img/product/55.png" alt="blog-img"
                                        style="max-width: 100%; height: auto;"></a>

                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate" style="margin-right: 5px;"
                        data-swiper-slide-index="2">
                        <div class="blog__card" style="max-width: 250px; height: auto; margin-bottom: 10px;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="">
                                    <img class="blog__card--thumbnail__img" src="assets/img/product/251.png"
                                        alt="blog-img" style="max-width: 100%; height: auto;">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                        style="margin-right: 50px;" data-swiper-slide-index="3">
                        <div class="blog__card" style="max-width: 250px; height: auto; margin-bottom: 10px;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="">
                                    <img class="blog__card--thumbnail__img" src="assets/img/product/262.png"
                                        alt="blog-img" style="max-width: 100%; height: auto;">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="0">
                        <div class="blog__card" style="max-width: 250px; height: auto;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="">
                                    <img class="blog__card--thumbnail__img" src="assets/img/product/44.png"
                                        alt="blog-img" style="max-width: 100%; height: auto;">
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="1">
                        <div class="blog__card" style="max-width: 250px; height: auto;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href=""><img class="blog__card--thumbnail__img"
                                        src="assets/img/product/55.png" alt="blog-img"
                                        style="max-width: 100%; height: auto;"></a>

                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide" style="margin-right: 5px;" data-swiper-slide-index="2">
                        <div class="blog__card" style="max-width: 250px; height: auto; margin-bottom: 10px;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="">
                                    <img class="blog__card--thumbnail__img" src="assets/img/product/251.png"
                                        alt="blog-img" style="max-width: 100%; height: auto;">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide" style="margin-right: 50px;" data-swiper-slide-index="3">
                        <div class="blog__card" style="max-width: 250px; height: auto; margin-bottom: 10px;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="">
                                    <img class="blog__card--thumbnail__img" src="assets/img/product/262.png"
                                        alt="blog-img" style="max-width: 100%; height: auto;">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                        data-swiper-slide-index="0">
                        <div class="blog__card" style="max-width: 250px; height: auto;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="">
                                    <img class="blog__card--thumbnail__img" src="assets/img/product/44.png"
                                        alt="blog-img" style="max-width: 100%; height: auto;">
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1">
                        <div class="blog__card" style="max-width: 250px; height: auto;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href=""><img class="blog__card--thumbnail__img"
                                        src="assets/img/product/55.png" alt="blog-img"
                                        style="max-width: 100%; height: auto;"></a>

                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-duplicate" style="margin-right: 5px;"
                        data-swiper-slide-index="2">
                        <div class="blog__card" style="max-width: 250px; height: auto; margin-bottom: 10px;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="">
                                    <img class="blog__card--thumbnail__img" src="assets/img/product/251.png"
                                        alt="blog-img" style="max-width: 100%; height: auto;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper__nav--btn swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                    aria-controls="swiper-wrapper-381ef181fec04e22">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class=" -chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
                <div class="swiper__nav--btn swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"
                    aria-controls="swiper-wrapper-381ef181fec04e22">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class=" -chevron-left">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>

        </div>
    </section>
















    <!-- Start banner section -->
    <section style="display:none;" class="banner__section section--padding pt-0">
        <div class="container">
            <div class="row  mb--n30">

                <div class="col-md-3 mb-30">
                    <div class="card" style="width: 18rem;">
                        <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title">Card Title</h5>
                            <p class="card-text">This is a simple card with an image, a heading, and some text. It
                                demonstrates the use of Bootstrap's card component.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-30">
                    <div class="card" style="width: 18rem;">
                        <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title">Card Title</h5>
                            <p class="card-text">This is a simple card with an image, a heading, and some text. It
                                demonstrates the use of Bootstrap's card component.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-30">
                    <div class="card" style="width: 18rem;">
                        <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title">Card Title</h5>
                            <p class="card-text">This is a simple card with an image, a heading, and some text. It
                                demonstrates the use of Bootstrap's card component.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-30">
                    <div class="card" style="width: 18rem;">
                        <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="Card Image">
                        <div class="card-body">
                            <h5 class="card-title">Card Title</h5>
                            <p class="card-text">This is a simple card with an image, a heading, and some text. It
                                demonstrates the use of Bootstrap's card component.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>






            </div>
        </div>





        </div>
    </section>
    <!-- End banner section -->

























































    <!-- Start product section -->
    <section style="display:none;" class="product__section deal__section--bg section--padding ">
        <div class="container">
            <div class="section__heading  border-bottom mb-30">
                <h2 class="section__heading--maintitle">Deal Of <span>The Day</span></h2>
            </div>
            <div class="product__section--inner">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="single__product--wrapper">
                            <div class="single__product--topbar d-flex align-items-center">
                                <div class="single__product--preview single__product--thumbnail__preview swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="single__product--thumbnail">
                                                <a class="single__product--thumbnail__link display-block" href="">
                                                    <img class="single__product--thumbnail__img"
                                                        src="assets/img/product/951.png" alt="product-img">
                                                </a>
                                                <span class="product__badge style__left">-14%</span>
                                                <span class="product__badge--new">New</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single__product--thumbnail">
                                                <a class="single__product--thumbnail__link display-block" href="">
                                                    <img class="single__product--thumbnail__img"
                                                        src="assets/img/product/753.png" alt="product-img">
                                                </a>
                                                <span class="product__badge style__left">-14%</span>
                                                <span class="product__badge--new">New</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single__product--thumbnail">
                                                <a class="single__product--thumbnail__link display-block" href="">
                                                    <img class="single__product--thumbnail__img"
                                                        src="assets/img/product/65.png" alt="product-img">
                                                </a>
                                                <span class="product__badge style__left">-14%</span>
                                                <span class="product__badge--new">New</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single__product--thumbnail">
                                                <a class="single__product--thumbnail__link display-block" href="">
                                                    <img class="single__product--thumbnail__img"
                                                        src="assets/img/product/9874.png" alt="product-img">
                                                </a>
                                                <span class="product__badge style__left">-14%</span>
                                                <span class="product__badge--new">New</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single__product--thumbnail">
                                                <a class="single__product--thumbnail__link display-block" href="">
                                                    <img class="single__product--thumbnail__img"
                                                        src="assets/img/product/big-product/product5.webp"
                                                        alt="product-img">
                                                </a>
                                                <span class="product__badge style__left">-14%</span>
                                                <span class="product__badge--new">New</span>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single__product--thumbnail">
                                                <a class="single__product--thumbnail__link display-block" href="">
                                                    <img class="single__product--thumbnail__img"
                                                        src="assets/img/product/big-product/product6.webp"
                                                        alt="product-img">
                                                </a>
                                                <span class="product__badge style__left">-14%</span>
                                                <span class="product__badge--new">New</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single__product--content">
                                    <ul class="rating product__card--rating d-flex">

                                        <li>
                                            <h3 class="single__product--title h2"><a href="">Car Rubbing and Polishing
                                                </a></h3>
                                        </li>
                                    </ul>
                                    <h5 class="single__product--title h2"><a href="">Every 6 Month(Recommended)</a></h5>
                                    <div class="product__card--price">
                                        <span class="additional__text">✔"Car rubbing tires, engine pulsing fast."</span>
                                        <span class="additional__text">✔ "Rubbing noises, engine pulsating with
                                            power."</span>
                                        <span class="additional__text">✔ "Car tires rubbing, engine pulsing
                                            rhythmically."</span>
                                        <span class="additional__text">✔ 30-day Return Policy</span>
                                    </div>


                                    <ul class="single__product--action d-flex align-items-end ">
                                        <li class="single__product--action__list">
                                            <a class="single__product--cart__btn" href="">
                                                Select
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="single__product--nav swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="single__product--nav__items">
                                            <img class="single__product--nav__thumbnail"
                                                src="assets/img/product/small-product/product1.webp"
                                                alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single__product--nav__items">
                                            <img class="single__product--nav__thumbnail"
                                                src="assets/img/product/small-product/product2.webp"
                                                alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single__product--nav__items">
                                            <img class="single__product--nav__thumbnail"
                                                src="assets/img/product/small-product/product3.webp"
                                                alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single__product--nav__items">
                                            <img class="single__product--nav__thumbnail"
                                                src="assets/img/product/small-product/product4.webp"
                                                alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single__product--nav__items">
                                            <img class="single__product--nav__thumbnail"
                                                src="assets/img/product/small-product/product5.webp"
                                                alt="product-nav-img">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="single__product--nav__items">
                                            <img class="single__product--nav__thumbnail"
                                                src="assets/img/product/small-product/product1.webp"
                                                alt="product-nav-img">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper__nav--btn swiper-button-next">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class=" -chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                                <div class="swiper__nav--btn swiper-button-prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class=" -chevron-left">
                                        <polyline points="15 18 9 12 15 6"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="banner__sidebar style5">
                            <div class="banner__items position__relative mb-30">
                                <a class="banner__thumbnail display-block" href=""><img class="banner__thumbnail--img"
                                        src="assets/img/banner/banner18.webp" alt="banner-img">
                                    <div class="banner__content--style5">
                                        <span class="banner__content--style5__subtitle text-white">From $540</span>
                                        <h2 class="banner__content--style5__title text-white">MEGA SALE</h2>
                                        <span class="banner__content--style5__btn">Shop now </span>
                                    </div>
                                </a>
                            </div>
                            <div class="banner__items position__relative">
                                <a class="banner__thumbnail display-block" href=""><img class="banner__thumbnail--img"
                                        src="assets/img/banner/banner19.webp" alt="banner-img">
                                    <div class="banner__content--style5 right">
                                        <span class="banner__content--style5__subtitle text__secondary">From $540</span>
                                        <h2 class="banner__content--style5__title text-white">MEGA SALE</h2>
                                        <span class="banner__content--style5__btn">Shop now </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End product section -->

    <!-- Start blog section -->
    <section style="display:none;" class="blog__section section--padding">

        <div class="container">
            <div
                class="section__heading section__heading--flex border-bottom d-flex justify-content-between align-items-end mb-30">
                <h2 class="section__heading--maintitle">Blog & article</h2>
                <a class="view__all--link" href="<?= base_url()?>blog">View all Blog</a>
            </div>
            <div class="blog__section--inner blog__swiper--activation swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="blog__card">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="<?= base_url()?>blog_details"><img
                                        class="blog__card--thumbnail__img" src="assets/img/blog/blog1.webp"
                                        alt="blog-img"></a>
                                <span class="blog__card--meta__date">20 <br> Oct</span>
                            </div>
                            <div class="blog__card--content">
                                <span class="blog__card--meta">By: Rasalina</span>
                                <h3 class="blog__card--title"><a href="<?= base_url()?>blog_details">Beauty Skin Care
                                        Product In Stock</a></h3>
                                <p class="blog__card--desc">Namkand sodales vel online best prices when
                                    an unknown printer took a galley of </p>
                                <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                    <a class="blog__card--btn__link" href="<?= base_url()?>blog_details">Read more
                                        <svg width="12" height="8" viewbox="0 0 12 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </a>
                                    <ul class="social__share blog__card--social d-flex">
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                                href="https://www.facebook.com">
                                                <svg width="9" height="15" viewbox="0 0 9 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank" href="https://twitter.com">
                                                <svg width="14" height="12" viewbox="0 0 14 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                                href="https://www.instagram.com">
                                                <svg width="14" height="13" viewbox="0 0 14 13" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                                href="https://www.youtube.com">
                                                <svg width="16" height="11" viewbox="0 0 16 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.0117 2.16797C14.8477 1.51172 14.3281 0.992188 13.6992 0.828125C12.5234 0.5 7.875 0.5 7.875 0.5C7.875 0.5 3.19922 0.5 2.02344 0.828125C1.39453 0.992188 0.875 1.51172 0.710938 2.16797C0.382812 3.31641 0.382812 5.77734 0.382812 5.77734C0.382812 5.77734 0.382812 8.21094 0.710938 9.38672C0.875 10.043 1.39453 10.5352 2.02344 10.6992C3.19922 11 7.875 11 7.875 11C7.875 11 12.5234 11 13.6992 10.6992C14.3281 10.5352 14.8477 10.043 15.0117 9.38672C15.3398 8.21094 15.3398 5.77734 15.3398 5.77734C15.3398 5.77734 15.3398 3.31641 15.0117 2.16797ZM6.34375 7.99219V3.5625L10.2266 5.77734L6.34375 7.99219Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog__card">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="<?= base_url()?>blog_details"><img
                                        class="blog__card--thumbnail__img" src="assets/img/blog/blog2.webp"
                                        alt="blog-img"></a>
                                <span class="blog__card--meta__date">24 <br> Oct</span>
                            </div>
                            <div class="blog__card--content">
                                <span class="blog__card--meta">By: Rasalina</span>
                                <h3 class="blog__card--title"><a href="<?= base_url()?>blog_details">Lorem ipsum dolor
                                        sit thre elit.</a></h3>
                                <p class="blog__card--desc">Namkand sodales vel online best prices when
                                    an unknown printer took a galley of </p>
                                <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                    <a class="blog__card--btn__link" href="<?= base_url()?>blog_details">Read more
                                        <svg width="12" height="8" viewbox="0 0 12 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </a>
                                    <ul class="social__share blog__card--social d-flex">
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                                href="https://www.facebook.com">
                                                <svg width="9" height="15" viewbox="0 0 9 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank" href="https://twitter.com">
                                                <svg width="14" height="12" viewbox="0 0 14 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                                href="https://www.instagram.com">
                                                <svg width="14" height="13" viewbox="0 0 14 13" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                                href="https://www.youtube.com">
                                                <svg width="16" height="11" viewbox="0 0 16 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.0117 2.16797C14.8477 1.51172 14.3281 0.992188 13.6992 0.828125C12.5234 0.5 7.875 0.5 7.875 0.5C7.875 0.5 3.19922 0.5 2.02344 0.828125C1.39453 0.992188 0.875 1.51172 0.710938 2.16797C0.382812 3.31641 0.382812 5.77734 0.382812 5.77734C0.382812 5.77734 0.382812 8.21094 0.710938 9.38672C0.875 10.043 1.39453 10.5352 2.02344 10.6992C3.19922 11 7.875 11 7.875 11C7.875 11 12.5234 11 13.6992 10.6992C14.3281 10.5352 14.8477 10.043 15.0117 9.38672C15.3398 8.21094 15.3398 5.77734 15.3398 5.77734C15.3398 5.77734 15.3398 3.31641 15.0117 2.16797ZM6.34375 7.99219V3.5625L10.2266 5.77734L6.34375 7.99219Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog__card">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="<?= base_url()?>blog_details"><img
                                        class="blog__card--thumbnail__img" src="assets/img/blog/blog3.webp"
                                        alt="blog-img"></a>
                                <span class="blog__card--meta__date">22 <br> Oct</span>
                            </div>
                            <div class="blog__card--content">
                                <span class="blog__card--meta">By: Rasalina</span>
                                <h3 class="blog__card--title"><a href="<?= base_url()?>blog_details">Possimus libero id
                                        moles cumqu.</a></h3>
                                <p class="blog__card--desc">Namkand sodales vel online best prices when
                                    an unknown printer took a galley of </p>
                                <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                    <a class="blog__card--btn__link" href="<?= base_url()?>blog_details">Read more
                                        <svg width="12" height="8" viewbox="0 0 12 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </a>
                                    <ul class="social__share blog__card--social d-flex">
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                                href="<?= $common->facebook?>">
                                                <svg width="9" height="15" viewbox="0 0 9 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                                href="<?= $common->twitter?>">
                                                <svg width="14" height="12" viewbox="0 0 14 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                                href="<?= $common->instagram?>">
                                                <svg width="14" height="13" viewbox="0 0 14 13" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                                href="<?= $common->youtube?>">
                                                <svg width="16" height="11" viewbox="0 0 16 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.0117 2.16797C14.8477 1.51172 14.3281 0.992188 13.6992 0.828125C12.5234 0.5 7.875 0.5 7.875 0.5C7.875 0.5 3.19922 0.5 2.02344 0.828125C1.39453 0.992188 0.875 1.51172 0.710938 2.16797C0.382812 3.31641 0.382812 5.77734 0.382812 5.77734C0.382812 5.77734 0.382812 8.21094 0.710938 9.38672C0.875 10.043 1.39453 10.5352 2.02344 10.6992C3.19922 11 7.875 11 7.875 11C7.875 11 12.5234 11 13.6992 10.6992C14.3281 10.5352 14.8477 10.043 15.0117 9.38672C15.3398 8.21094 15.3398 5.77734 15.3398 5.77734C15.3398 5.77734 15.3398 3.31641 15.0117 2.16797ZM6.34375 7.99219V3.5625L10.2266 5.77734L6.34375 7.99219Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="blog__card">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="<?= base_url()?>blog_details"><img
                                        class="blog__card--thumbnail__img" src="assets/img/blog/blog1.webp"
                                        alt="blog-img"></a>
                                <span class="blog__card--meta__date">18 <br> Oct</span>
                            </div>
                            <div class="blog__card--content">
                                <span class="blog__card--meta">By: Rasalina</span>
                                <h3 class="blog__card--title"><a href="<?= base_url()?>blog_details">Beauty Skin Care
                                        Product In Stock</a></h3>
                                <p class="blog__card--desc">Namkand sodales vel online best prices when
                                    an unknown printer took a galley of </p>
                                <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                    <a class="blog__card--btn__link" href="<?= base_url()?>blog_details">Read more
                                        <svg width="12" height="8" viewbox="0 0 12 8" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </a>
                                    <ul class="social__share blog__card--social d-flex">
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                                href="<?= $common->facebook?>">
                                                <svg width="9" height="15" viewbox="0 0 9 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                                href="<?= $common->twitter?>">
                                                <svg width="14" height="12" viewbox="0 0 14 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Twitter</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                                href="<?= $common->instagram?>">
                                                <svg width="14" height="13" viewbox="0 0 14 13" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                        <li class="social__share--list">
                                            <a class="social__share--icon" target="_blank"
                                                href="<?= $common->youtube?>">
                                                <svg width="16" height="11" viewbox="0 0 16 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.0117 2.16797C14.8477 1.51172 14.3281 0.992188 13.6992 0.828125C12.5234 0.5 7.875 0.5 7.875 0.5C7.875 0.5 3.19922 0.5 2.02344 0.828125C1.39453 0.992188 0.875 1.51172 0.710938 2.16797C0.382812 3.31641 0.382812 5.77734 0.382812 5.77734C0.382812 5.77734 0.382812 8.21094 0.710938 9.38672C0.875 10.043 1.39453 10.5352 2.02344 10.6992C3.19922 11 7.875 11 7.875 11C7.875 11 12.5234 11 13.6992 10.6992C14.3281 10.5352 14.8477 10.043 15.0117 9.38672C15.3398 8.21094 15.3398 5.77734 15.3398 5.77734C15.3398 5.77734 15.3398 3.31641 15.0117 2.16797ZM6.34375 7.99219V3.5625L10.2266 5.77734L6.34375 7.99219Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper__nav--btn swiper-button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class=" -chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
                <div class="swiper__nav--btn swiper-button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class=" -chevron-left">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog section -->

    <!-- Start shipping section -->
    <section style="display:none;" class="shipping__section">
        <div class="container">
            <div class="shipping__inner style2 d-flex">
                <div class="shipping__items style2 d-flex align-items-center">
                    <div class="shipping__icon">
                        <img src="<?= base_url() ?>assets/img/other/shipping1.webp" alt="icon-img">
                    </div>
                    <div class="shipping__content">
                        <h2 class="shipping__content--title h3">Free Pick Up</h2>
                        <p class="shipping__content--desc">Free Car Pick & Drop in 10km</p>
                    </div>
                </div>
                <div class="shipping__items style2 d-flex align-items-center">
                    <div class="shipping__icon">
                        <img src="<?= base_url() ?>assets/img/other/shipping2.webp" alt="icon-img">
                    </div>
                    <div class="shipping__content">
                        <h2 class="shipping__content--title h3">Support 24/7</h2>
                        <p class="shipping__content--desc">Contact us 24 hours a day</p>
                    </div>
                </div>
                <div class="shipping__items style2 d-flex align-items-center">
                    <div class="shipping__icon">
                        <img src="<?= base_url() ?>assets/img/other/shipping3.webp" alt="icon-img">
                    </div>
                    <div class="shipping__content">
                        <h2 class="shipping__content--title h3">Value For Money</h2>
                        <p class="shipping__content--desc">Get Competative Price</p>
                    </div>
                </div>
                <div class="shipping__items style2 d-flex align-items-center">
                    <div class="shipping__icon">
                        <img src="<?= base_url() ?>assets/img/other/shipping4.webp" alt="icon-img">
                    </div>
                    <div class="shipping__content">
                        <h2 class="shipping__content--title h3">Payment Secure</h2>
                        <p class="shipping__content--desc">We ensure secure payment</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End shipping section -->

</main>

<!-- Start footer section -->



<script type="text/javascript">
var page_nm = 'home';
var feature = 'd_drop';
</script>


<?php
  include('inc/footer.php');

?>