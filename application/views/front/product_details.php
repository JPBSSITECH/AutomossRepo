<?php
include ('inc/header.php');
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

<script src="https://kit.fontawesome.com/7948284983.js" crossorigin="anonymous"></script>

<style>
.product__card--btn {
    position: fixed;
    bottom: 280px;
    right: 0;
    display: flex;
    align-items: center;
    background-color: #ff2700;
    color: white;
    padding: 10px 20px;
    border-radius: 30px 0 0 30px;
    font-size: 16px;
    text-decoration: none;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    transition: background-color 0.3s ease, transform 0.3s ease;
    z-index: 999;
    border: 2px solid white;
}

.product__card--btn:hover {
    background-color: #f39c12;
    transform: scale(1.05);
}

.product__card--btn .gif-container {
    margin-right: 10px;
}

.product__card--btn .gif-container img {
    width: 24px;
    height: auto;
}

.product__card--btn .text {
    font-weight: bold;
    font-size: 11px;
}

.ClientReview {
    margin-bottom: 20px;
}

#show-more-btn,
#hide-btn {
    padding: 5px 10px;
    border-radius: 10px;
    background-color: #ed1d24;
    color: white;
    border: none;
    cursor: pointer;
    font-size: 14px;
    width: 100px;
}

#show-more-btn:hover,
#hide-btn:hover {
    background-color: #ff686d;
}
</style>
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


.card-wrapper {
    max-width: 1100px;
    margin: 0 auto;
}


.img-display {
    overflow: hidden;
}

.img-showcase {
    display: flex;
    width: 100%;
    transition: all 0.5s ease;
}

.img-showcase img {
    min-width: 100%;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
}

.img-select {
    display: flex;
}

.img-item {
    margin: 0.3rem;
}

.img-item:nth-child(1),
.img-item:nth-child(2),
.img-item:nth-child(3) {
    margin-right: 0;
}

.img-item:hover {
    opacity: 0.8;
}

.product-content {
    padding: 2rem 1rem;
}

.product-title {
    font-size: 3rem;
    text-transform: capitalize;
    font-weight: 700;
    position: relative;
    color: #12263a;
    margin: 1rem 0;
    /* overflow: hidden; */
}

.product-title::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -6px;
    height: 2px;
    width: 30px;

    background: #12263a;
    transition: width 0.3s ease;
}

.product-link {
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 400;
    font-size: 0.9rem;
    display: inline-block;
    margin-bottom: 0.5rem;
    background: #256eff;
    color: #fff;
    padding: 0 0.3rem;
    transition: all 0.5s ease;
}

.product-link:hover {
    opacity: 0.9;
}

.product-rating {
    color: #ffc107;
}

.product-rating span {
    font-weight: 600;
    color: #252525;
}

.product-price {
    margin: 1rem 0;
    font-size: 1rem;
    font-weight: 700;
}

.product-price span {
    font-weight: 400;
}

.last-price span {
    color: #f64749;
    text-decoration: line-through;
}

.new-price span {
    color: #ffffff;
    background: #d21323;
    padding: 0 10px;
    border-radius: 10px;
    font-weight: 700;
    animation: beat 1s infinite;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

@keyframes beat {
    0% {
        transform: scale(1);

    }

    50% {
        transform: scale(1.05);

    }

    100% {
        transform: scale(1);

    }
}

.product-detail h2 {
    text-transform: capitalize;
    color: #c30000;
    padding-bottom: 0.6rem;
}

.product-detail p {
    font-size: 14px;
    margin-bottom: 0;
    padding: 0.3rem;
    opacity: 0.8;
}

.product-detail ul {
    margin: 1rem 0;
    font-size: 1.3rem;
}

.product-detail ul li {
    margin: 0;
    list-style: none;


    margin: 0.8rem 0;
    font-weight: 600;
    opacity: 0.9;
    color: #ff3131e8;
    display: flex;
    align-items: center;

}

.product-detail ul li i {
    color: green;
    margin-right: 10px;
}

.product-detail ul li span {
    font-weight: 400;
    color: #696969;
}

.purchase-info {
    margin: 0 0 1.5rem 0;
    display: flex;
    justify-content: space-around;
}

.purchase-info input,
.purchase-info .btn {
    border: 1.5px solid #ddd;
    border-radius: 25px;
    text-align: center;
    padding: 0.45rem 0.8rem;
    outline: 0;
    margin-right: 0.2rem;
    margin-bottom: 1rem;

}

.purchase-info input {
    width: 60px;
}

.purchase-info .btn {
    cursor: pointer;
    color: #fff;

    align-items: center;
    font-size: 15px;
    gap: 10px;
    padding: 5px 12px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    font-size: 12px;
    width: 90%;
    text-align: center;
}

.purchase-info .btn:first-of-type {
    background: #256eff;
}



.purchase-info .btn:last-of-type {
    background: #f64749;
}

.purchase-info .btn:hover {
    opacity: 0.9;
}

.purchase-info img {
    width: 30px;
}

.social-links {
    display: flex;
    align-items: center;
}

.social-links a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    background: red;
    color: #ffffff;
    margin: 0 0.2rem;
    border-radius: 50%;
    text-decoration: none;
    font-size: 0.8rem;
    transition: all 0.5s ease;
}

.social-links a:hover {
    background: #000;
    border-color: transparent;
    color: #fff;
}

@media screen and (min-width: 992px) {
    .left_card {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 1.5rem;
    }

    .card-wrapper {

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .product-imgs {
        display: flex;
        flex-direction: column;
        /* justify-content: center; */
    }

    .product-content {
        padding-top: 0;
    }
}

.product-content p {
    font-size: 14px;
    margin-bottom: 0;
}

.social-links i {
    font-size: 14px;
}

.left_card {
    padding: 10px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}



.right_card {
    height: 500px;
    /* border: 1px solid #ccc; */
    border-radius: 8px;
    padding: 20px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    border-top: 5px solid red;
    border-bottom: 5px solid red;
    position: sticky;
    top: 20px;

    z-index: 10;
}



.section__heading::after {
    display: none !important;
    border: 0;
}

.section__heading::before {
    display: none !important;
}

.product-title {
    position: relative;
    font-size: 2.5rem;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;

    display: inline-block;

    animation: fadeIn 1s ease-out forwards;
    color: rgb(255 0 0) !important;
    font-size: 22px !important;
    text-transform: uppercase !important;
    text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.4), 0px 7px 10px rgba(0, 0, 0, 0.1), 0px 8px 12px rgba(0, 0, 0, 0.1);
}

.pl_0 {
    padding-left: 0 !important;
}

.product-title::after {
    content: "";
    position: absolute;
    bottom: -10px;
    left: 0;
    width: 10%;
    /* Start width at 0 */
    height: 2px;
    background-color: rgb(255 0 0);
    transition: width 0.3s ease-in-out;
    /* Add transition */
}

.product-title:hover::after {
    width: 100%;
    /* Underline grows to full width on hover */
}

.cart_buttons {
    margin-top: 60px;
    /* text-align: right; */
    display: flex;
    justify-content: end;
}

.cart_button_clear {

    border: none;
    font-size: 18px;
    font-weight: 400;
    line-height: 48px;
    color: rgba(0, 0, 0, 0.5);
    background: #FFFFFF;
    border: solid 1px #b2b2b2;
    padding-left: 35px;
    padding-right: 35px;
    outline: none;
    cursor: pointer;
    margin-right: 26px;
    display: flex;
    align-items: center;
    font-size: 14px;
    border-radius: 15px;
    gap: 7px;
}

.cart_button_clear:hover {
    border-color: #0e8ce4;
    color: #0e8ce4
}

.cart_button_checkout {
    display: inline-block;
    border: none;
    font-size: 18px;
    font-weight: 400;
    line-height: 48px;
    color: #FFFFFF;
    padding-left: 35px;
    padding-right: 35px;
    outline: none;
    cursor: pointer;
    vertical-align: top;
    display: inline-block;
    background: #e40e0e;
    border-radius: 15px;
    height: 48px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
    gap: 7px;




    display: flex;
    align-items: center;
    font-size: 14px;
}

.cart_button_checkout a {
    display: block;
    font-size: 18px;
    font-weight: 400;
    line-height: 48px;
    color: #FFFFFF;
    padding-left: 35px;
    padding-right: 35px
}

.cart_button_checkout:hover {
    opacity: 0.8
}


.cart_button_checkout img {
    width: 24px;
    height: auto;
}


.cart_button_clear img {
    width: 24px;
    height: auto;
}




/*breadcrumb*/
.breadcrumb_section {
    display: flex;
    box-shadow: 0 8px 14px -2px rgba(0, 0, 0, 0.1),
        0 4px 6px -2px rgba(0, 0, 0, 0.05);
    padding: 0.75rem 1.25rem;
    border-radius: 35px;
    margin-bottom: 0;
}

.breadcrumb_section .breadcrumb-links {
    display: flex;
    column-gap: 1rem;
    align-items: center;
}

.breadcrumb_section .breadcrumb-links>li:nth-child(n + 4) {
    display: none;
}

.breadcrumb_section .breadcrumb-box {
    display: flex;
    align-items: center;
}

.breadcrumb_section .breadcrumb-link {
    color: #9ca3af;
}

.breadcrumb_section .breadcrumb-box:hover>*:not(.breadcrumb-icon) {
    color: #4f46e5;
}

.breadcrumb_section .breadcrumb-icon,
.breadcrumb_section .breadcrumb-icon-home {
    flex-shrink: 0;
    width: 2rem;
    height: 2rem;
    color: #9ca3af;
}

.breadcrumb_section .breadcrumb-links li:first-child .breadcrumb-text {
    display: none;
}

.breadcrumb_section .breadcrumb-text {
    margin-left: 1rem;
    font-size: 1.4rem;
    line-height: 1.25rem;
    font-weight: 600;
    color: #bfbfbf;
}

@media (min-width: 640px) {
    .breadcrumb_section .breadcrumb-links>li:nth-child(n + 4) {
        display: block;
    }

    .breadcrumb_section .breadcrumb-links li:first-child .breadcrumb-text {
        display: block;
    }
}
</style>

<style type="text/css">
.spl_list ul li {
    padding-bottom: 10px;
    font-size: 16px;
    width: 48%;
    float: left;
}

.spl_list ul li::before {
    font-family: "Font Awesome 5 Free";
    content: "\f058";
    margin-right: 10px;
    color: #c23200;
}
</style>
<style>
.form-control-range {
    -webkit-appearance: none;
    appearance: none;
    width: 100%;
    height: 8px;
    background: #e1c7c7;
    border-radius: 5px;
    outline: none;
    transition: background 0.3s ease;
}

.form-control-range::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 16px;
    height: 16px;
    background: #ED1D24;
    border-radius: 50%;
    cursor: pointer;
    transition: background 0.3s ease;
}

.form-control-range::-moz-range-thumb {
    width: 16px;
    height: 16px;
    background: #007bff;
    border-radius: 50%;
    cursor: pointer;
    transition: background 0.3s ease;
}

.form-control-range:active::-webkit-slider-thumb {
    background: #ED1D24;
}

.form-control-range:active::-moz-range-thumb {
    background: #ED1D24;
}
</style>
<style>
                                .Question_section {

                                    padding: 0 0 24px 0;
                                    font-size: 14px;
                                }

                                .Question_section_title {
                                    font-weight: 500;
                                    margin-bottom: 6px;
                                    font-size: 16px;
                                    padding: 20px 0;

                                }

                                .Question_section_Q {
                                    font-weight: 500;
                                    margin-right: 4px;
                                }

                                .Question_section_subtitle {
                                    line-height: 20px;
                                    margin-bottom: 8px;
                                    display: flex;
                                    gap: 10px;

                                }

                                .Question_section_Desc {
                                    margin-top: 12px;
                                    display: flex;
                                }

                                .buyer {
                                    -webkit-flex: 1;
                                    -ms-flex: 1;
                                    flex: 1;
                                    color: #878787;
                                }

                                .buyer div {
                                    display: inline-block;
                                }

                                .buyer div span {
                                    font-weight: 500;
                                    margin-right: 8px;
                                }

                                .certified {
                                    display: block;
                                    margin-top: 6px;
                                }

                                .certified svg {
                                    margin-right: 4px;
                                    width: 14px;
                                    height: 14px;
                                    vertical-align: sub;
                                }

                                .buyer_review {
                                    display: flex;
                                    vertical-align: sub;
                                    margin-left: 32px;
                                    margin-right: 20px;
                                }

                                .buyer_review_like {
                                    margin-right: 0;
                                    display: inline-block;
                                    color: #c2c2c2;
                                    text-align: center;
                                    margin-left: 24px;
                                    font-size: 12px;
                                    cursor: pointer;
                                }

                                .buyer_review_like svg {
                                    width: 18px;
                                    height: 16px;
                                }

                                .buyer_review_like svg path {
                                    fill: #c2c2c2;
                                }

                                .buyer_review_dislike {
                                    margin-right: 0;
                                    display: inline-block;
                                    color: #c2c2c2;
                                    text-align: center;
                                    margin-left: 24px;
                                    font-size: 12px;
                                    cursor: pointer;
                                }

                                .buyer_review_dislike svg {
                                    width: 18px;
                                    height: 16px;
                                }

                                .buyer_review_dislike svg path {
                                    fill: #c2c2c2;
                                }

                                .buyer_review_count {
                                    padding: 2px 0 0;
                                    color: #878787;
                                    margin-left: 4px;
                                    vertical-align: top;
                                }

                                .Question_inner_section:first-of-type {
                                    margin-top: 0;
                                    /* padding: 0 0 24px 0; */
                                }

                                .Question_inner_section {
                                    /* margin-top: 10px; */
                                    border-bottom: 2px solid #f0f0f0;
                                    padding: 20px 0;
                                }
                                </style>

<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg"
        style="background-image: url('<?= base_url() ?>assets/img/carbg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title mb-25 text-white">Product Details</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a href="<?= base_url() ?>"
                                    style="color:white;">Home</a></li>
                            <li class="breadcrumb__content--menu__items text-white"><span>Product Details</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->


    <!-- //////////////////////////////////////////////////////////// -->

    <!-- Start blog section -->
    <style>
    .img-select {
        width: 100%;
    }

    .img-item {
        width: 25%;
        height: 100%;
    }

    .img-item a {
        height: 100%;
    }

    .img-item a img {
        height: 100%;
    }
    .quantity-controls {
        display: flex;
        flex-direction: row;
        width: 50%;
    }
    .quantity-controls span.cart-quantity{
        color: #000000;
        background: #dfff04;
        padding: 0 10px;
        border-radius: 10px;
        font-weight: 600;
        margin-bottom: 10px;
    }
    </style>
    <section class="blog__section section--padding">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-9">
                    <div class="card-wrapper">
                        <div class="card left_card">

                            <div class="product-imgs">
                                <div class="img-display">
                                    <div class="img-showcase">
                                        <?php if (!empty($pdtl->thumb)) { ?>
                                        <img src="<?= $pdtl->thumb ?>" alt="shoe image" class="moving-container">
                                        <?php } else { ?>
                                        <img src="https://dev.automoss.in/nocar.png" alt="shoe image"
                                            class="moving-container">
                                        <?php } ?>
                                        <?php if (!empty($pdtl->pic1)) { ?>
                                        <img src="<?= $pdtl->pic1 ?>" alt="shoe image" class="moving-container">
                                        <?php } else { ?>
                                        <img src="https://dev.automoss.in/nocar.png" alt="shoe image"
                                            class="moving-container">
                                        <?php } ?>
                                        <?php if (!empty($pdtl->pic2)) { ?>
                                        <img src="<?= $pdtl->pic2 ?>" alt="shoe image" class="moving-container">
                                        <?php } else { ?>
                                        <img src="https://dev.automoss.in/nocar.png" alt="shoe image"
                                            class="moving-container">
                                        <?php } ?>
                                        <?php if (!empty($pdtl->pic3)) { ?>
                                        <img src="<?= $pdtl->pic3 ?>" alt="shoe image" class="moving-container">
                                        <?php } else { ?>
                                        <img src="https://dev.automoss.in/nocar.png" alt="shoe image"
                                            class="moving-container">
                                        <?php } ?>



                                        <?php if (!empty($pdtl->pic4)) { ?>
                                        <img src="<?= $pdtl->pic4 ?>" alt="shoe image" class="moving-container">
                                        <?php } else { ?>
                                        <img src="https://dev.automoss.in/nocar.png" alt="shoe image"
                                            class="moving-container">
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="img-select">
                                    <div class="img-item">
                                        <a href="#" data-id="1">
                                            <?php if (!empty($pdtl->thumb)) { ?>
                                            <img src="<?= $pdtl->thumb ?>" alt="product-media-img">
                                            <?php } else { ?>
                                            <img src="https://dev.automoss.in/nocar.png" alt="product-media-img">
                                            <?php } ?>


                                        </a>
                                    </div>
                                    <div class="img-item">
                                        <a href="#" data-id="2">
                                            <?php if (!empty($pdtl->pic1)) { ?>
                                            <img src="<?= $pdtl->pic1 ?>" alt="shoe image">
                                            <?php } else { ?>
                                            <img src="https://dev.automoss.in/nocar.png" alt="shoe image">
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="img-item">
                                        <a href="#" data-id="3">
                                            <?php if (!empty($pdtl->pic2)) { ?>
                                            <img src="<?= $pdtl->pic2 ?>" alt="shoe image">
                                            <?php } else { ?>
                                            <img src="https://dev.automoss.in/nocar.png" alt="shoe image">
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="img-item">
                                        <a href="#" data-id="4">
                                            <?php if (!empty($pdtl->pic3)) { ?>
                                            <img src="<?= $pdtl->pic3 ?>" alt="shoe image">
                                            <?php } else { ?>
                                            <img src="https://dev.automoss.in/nocar.png" alt="shoe image">
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="img-item">
                                        <a href="#" data-id="5">
                                            <?php if (!empty($pdtl->pic4)) { ?>
                                            <img src="<?= $pdtl->pic4 ?>" alt="shoe image" class="moving-container">
                                            <?php } else { ?>
                                            <img src="https://dev.automoss.in/nocar.png" alt="shoe image"
                                                class="moving-container">
                                            <?php } ?>
                                        </a>
                                    </div>
                                </div>


                                <div class="purchase-info my-4 button_group text-center" data-id="<?= $pdtl->id; ?>">



                                    <!---->
                                 
                                        <?php if (!empty($cart_quantities) && $cart_quantities > 0) { ?>
                                            <div class="quantity-controls">
                                              

                                                <a class="btn" href="javascript:void(0);" 
                                                onclick="updateCart('<?= spl_encode($pdtl->id) ?>', 'decrease', 'addtocart')" 
                                                style="background: #256eff;"> - </a>

                                                <span class="cart-quantity span_font" data-id="<?= $pdtl->id; ?>">
                                                    <?= $cart_quantities; ?>
                                                </span>

                                                <a class="btn" href="javascript:void(0);" 
                                                onclick="updateCart('<?= spl_encode($pdtl->id) ?>', 'increase', 'addtocart')" 
                                                style="background: #256eff;"> + </a>



                                                
                                            </div>
                                        <?php } else { ?>
                                            <a class="btn" href="javascript:void(0);" onclick="updateCart('<?= spl_encode($pdtl->id) ?>', 'increase', 'addtocart')" style="background: #256eff;"> Add to Cart </a>
                                        <?php } ?>

                                    
                                        <!-- <div class="quantity-controls">
                                            <button class="btn btn-light px-3 rounded-pill">-</button>
                                            <span class="cart-quantity span_font" data-id="${v.id}"></span>
                                            <button class="btn btn-light px-3 rounded-pill">+</button>
                                        </div> -->
                                        <a class="btn" href="<?= base_url('cart/' . spl_encode($pdtl->id)) ?>"
                                            style="background: #808080;">

                                            Buy Now
                                        </a>
                                        <!-- <button type="button" class="btn">Send inquiry<img
                                            src="http://localhost/automoss/assets/output-onlinegiftools (2).gif"></button> -->
                                  
                                </div>
                            </div>



                            <!-- card right -->
                            <div class="product-content">
                                <div class="section__heading mb-10">
                                    <h2 class="product-title section__heading--maintitle pl_0"><?= $pdtl->name ?></h2>
                                </div>

                                <!-- <a href="#" class="product-link">visit store</a> -->
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <span>4.7(21)</span>
                                </div>

                                <div class="product-price">
                                    <p class="last-price">Old Price: <span>₹<?= $pdtl->mrp_price ?></span></p>
                                    <p class="new-price">New Price: <span>₹<?= $pdtl->offer_price ?></span></p>
                                </div>
                                <style>
                                .product-detail ul li img {
                                    width: 20px;
                                    margin-right: 5px;
                                }

                                .product-detail ul li span {
                                    margin-left: 10px;
                                }

                                .wheel_count {
                                    margin-left: 10px;
                                    display: flex;

                                    align-items: center;

                                }

                                .ribbon {
                                    font-weight: 700;
                                    font-size: 25px;
                                    color: #002bff;
                                    text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0, 0, 0, .1), 0 1px 3px rgba(0, 0, 0, .3), 0 3px 5px rgba(0, 0, 0, .2), 0 5px 10px rgba(0, 0, 0, .25), 0 10px 10px rgba(0, 0, 0, .2), 0 20px 20px rgba(0, 0, 0, .15);
                                }

                                .wheel_img {
                                    margin-left: 5px;

                                    height: 30px;
                                    width: 30px;
                                }
                                </style>
                                <div class="d-flex align-items-center" style="    background: #dadad8;
                                    padding: 5px;
                                    margin: 20px 0;
                                    justify-content: center;border-radius: 10px;">
                                    <h5>You will get <span style="font-weight: 600;font-size:16px;">Wheels</span> on
                                        this Product : </h5>
                                    <span class="wheel_count">
                                        <span class="ribbon">20</span>
                                    </span>
                                    <img src="<?=base_url() ?>assets/output-onlinegiftools (4).gif"
                                        class="wheel_img">
                                </div>


                                <div class="product-detail mt-4">


                                    <ul>

                                        <li><img src="<?=base_url() ?>assets/img/double-check.gif"> Available
                                            : <span>In stock</span></li>
                                        <li><img src="<?=base_url() ?>assets/img/double-check.gif"> Sold By :
                                            <span><?= $pdtl->garage_name ?></span>
                                        </li>
                                        <!-- <li><img src="<?=base_url() ?>assets/img/double-check.gif"> Vendor :
                                            <span>Belo</span>
                                        </li>
                                        <li><img src="<?=base_url() ?>assets/img/double-check.gif"> Barcode :
                                            <span>565461</span>
                                        </li>
                                        <li><img src="<?=base_url() ?>assets/img/double-check.gif"> Shipping
                                            Area : <span>All over the
                                                world</span></li>
                                        <li><img src="<?=base_url() ?>assets/img/double-check.gif"> Shipping
                                            Fee : <span>Free</span></li> -->
                                    </ul>
                                </div>

                                <!-- <div class="purchase-info my-4">



                                        <button type="button" class="btn">
                                            Add to Cart <img src="grocery-unscreen.gif">
                                        </button>
                                        <button type="button" class="btn">Send inquiry<img
                                                src="output-onlinegiftools (2).gif"></button>
                                    </div> -->
                                <div class="product-detail">
                                    <h2>about this item: </h2>
                                    <p><?= $pdtl->product_info ?></p>

                                </div>
                                <div class="social-links">
                                    <p>Share At :&nbsp; </p>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-pinterest"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="mt-4">

                        <div class="ClientReview_Card" id="reviews-container">
                            <h4 class="mb-4">Seller</h4>
                            <style>
                            #sellerName {
                                font-weight: 500;
                                color: #2874f0;
                                position: relative;
                                display: inline;
                                cursor: pointer;
                            }

                            .sellername_div {
                                margin-left: 8px;
                                border-radius: 10px;
                                background: #2874f0;
                                font-size: 11px;
                                /* width: 100%; */
                                color: white;
                                line-height: normal;
                                display: flex;
                                gap: 10px;
                                color: #fff;
                                padding: 5px 10px;
                                border-radius: 3px;
                                font-weight: 500;
                                font-size: 12px;
                                vertical-align: middle;
                                align-items: center;
                            }

                            .policy_div_ul {
                                margin: 12px 0px -4px;
                            }

                            .policy_div_ul li {
                                color: rgb(33, 33, 33);
                                position: relative;
                                padding-bottom: 8px;
                            }

                            .policy_div::after {
                                content: "";
                                height: 6px;
                                width: 6px;
                                position: absolute;
                                top: 6px;
                                left: 0px;
                                border-radius: 50%;
                                background: rgb(194, 194, 194);
                            }

                            .help {
                                display: inline-block;
                                position: relative;
                            }

                            .questionModalIcon {
                                border-radius: 50%;
                              
                                font-weight: 500;
                                width: 23px;
                                height: 22px;
                                font-size: 11px;
                                line-height: 16px;
                                text-align: center;
                                display: inline-block;
                               
                                box-shadow: 0 0 1px 0 rgba(0, 0, 0, .2);
                                vertical-align: middle;
                                margin: 0 2px 0 8px;
                                cursor: pointer;
                            }

                          
                            .modal1 {
                                display: none;
                             
                                position: fixed;
                                z-index: 1;
                              
                                left: 0;
                                top: 0;
                                width: 100%;
                             
                                height: 100%;
                               
                                overflow: auto;
                             
                                background-color: rgb(0, 0, 0);
                              
                                background-color: rgba(0, 0, 0, 0.4);
                            
                                padding-top: 60px;
                            }

                           
                            .modal1 .modal-content {
                                background-color: #fefefe;
                                margin: 5% auto;
                                padding: 20px;
                                border: 1px solid #888;
                                width: 50%;
                              
                            }

                          
                            .close-btn {
                                color: #aaa;
                                float: right;
                                font-size: 28px;
                                font-weight: bold;
                            }

                            .close-btn:hover,
                            .close-btn:focus {
                                color: black;
                                text-decoration: none;
                                cursor: pointer;
                            }

                            .seller_modal p {
                                margin-bottom: 10px;
                                padding: 0;
                                line-height: 1.5;
                                font-size: 12px;
                            }

                            .seller_modal ul {
                                padding: 0;
                                margin: 0;
                                list-style: none;
                            }

                            .seller_modal ul li {
                                padding: 0 0 8px 20px;
                                position: relative;
                                line-height: 21px;
                                font-size: 12px;
                            }

                            .seller_modal li:after {
                                content: "";
                                height: 4px;
                                width: 4px;
                                position: absolute;
                                top: 8px;
                                left: 0;
                                border-radius: 50%;
                                background: #000;
                            }

                            .seller_table thead {
                                background: #d2d2d2;
                                text-align: center;
                            }

                            .seller_table tbody {
                                text-align: center;
                                font-size: 13px;
                            }
                            </style>
                            <div>
                                <div id="sellerName" class="sellername"><span
                                        class="d-flex"><span>Deals4youFootwear</span>
                                        <div class="sellername_div">

                                            <span>3.6</span>

                                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMyIgaGVpZ2h0PSIxMiI+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTYuNSA5LjQzOWwtMy42NzQgMi4yMy45NC00LjI2LTMuMjEtMi44ODMgNC4yNTQtLjQwNEw2LjUuMTEybDEuNjkgNC4wMSA0LjI1NC40MDQtMy4yMSAyLjg4Mi45NCA0LjI2eiIvPjwvc3ZnPg=="
                                                class="Rza2QY">

                                        </div>
                                    </span></div>
                                <div class="policy_div">
                                    <ul class="policy_div_ul">
                                        <li class="">
                                            <div class="" style="font-size: 13px;color: brown;">10 days return policy
                                                <div class="help"><span class="questionModalIcon" id="openModal"> <img
                                                            src="<?= base_url() ?>assets/img/qstn.gif"
                                                            alt="Live Booking Icon">
                                                    </span></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="modal1" class="modal1">
                                    <div class="modal-content seller_modal">
                                        <span class="close-btn" id="closeModal">&times;</span>
                                        <table class="table seller_table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Validity</th>
                                                    <th scope="col">Type Accepted</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">10 Days Returns</th>
                                                    <td>Refund/Replaement</td>

                                                </tr>


                                            </tbody>
                                        </table>

                                        <p>If there is any issues with your product, you can raise a refund, replacement
                                            or exchange request within 10 days of receiving the product.</p>

                                        <p>Successful pick-up of the product is subject to the following conditions
                                            being met:</p>
                                        <ul>
                                            <li>Correct and complete product (with the original brand, article number,
                                                undetached MRP tag, product's original packaging, freebies and
                                                accessories)</li>

                                        </ul>
                                    </div>
                                </div>
                              
                            </div>
                            <h4 class="mb-4">Rating & Reviews</h4>
                            <div class="ClientReview">
                                <div class="ClientReview_Top">
                                    <div class="ClientReview_Pfp">

                                        <img
                                            src="https://d2gwgwt9a7yxle.cloudfront.net/what_is_user_id_in_net_banking_mobile_871b681e52.jpg" />
                                    </div>
                                    <div class="ClientReview_Stars">
                                        ★★★★★
                                    </div>
                                </div>
                            </div>
                            <div class="ClientReview">
                                <div class="ClientReview_Body">
                                    "Krista and Clint are AMAZING. The have been handling an issue for us, and it is
                                    so nice not to have to worry about anything. Very professional and easy to reach
                                    with any questions or concerns. I highly recomend."
                                </div>
                                <div class="ClientReview_Name">
                                    —

                                    Chonya Alvarez
                                </div>
                                <!-- <div class="ClientReview_Img">
                                        <img src="https://edgelaw.kinsta.cloud/wp-content/uploads/white-logo.png" />
                                    </div> -->

                                <div>
                                </div>

                                <div class="ClientReview_Top">
                                    <div class="ClientReview_Pfp">

                                        <img
                                            src="https://d2gwgwt9a7yxle.cloudfront.net/what_is_user_id_in_net_banking_mobile_871b681e52.jpg" />
                                    </div>
                                    <div class="ClientReview_Stars">
                                        ★★★★★
                                    </div>
                                </div>
                                <div class="ClientReview_Body">
                                    "Krista and Clint are AMAZING. The have been handling an issue for us, and it is
                                    so nice not to have to worry about anything. Very professional and easy to reach
                                    with any questions or concerns. I highly recomend."
                                </div>
                                <div class="ClientReview_Name">
                                    —

                                    Chonya Alvarez
                                </div>
                                <!-- <div class="ClientReview_Img">
                                        <img src="New_logo_automoss-removebg-preview.png" />
                                    </div> -->
                            </div>

                            <div class="ClientReview">
                                <div class="ClientReview_Top">
                                    <div class="ClientReview_Pfp">

                                        <img
                                            src="https://d2gwgwt9a7yxle.cloudfront.net/what_is_user_id_in_net_banking_mobile_871b681e52.jpg" />
                                    </div>
                                    <div class="ClientReview_Stars">
                                        ★★★★★
                                    </div>
                                </div>
                            </div>
                            <div class="ClientReview">
                                <div class="ClientReview_Body">
                                    "Krista and Clint are AMAZING. The have been handling an issue for us, and it is
                                    so nice not to have to worry about anything. Very professional and easy to reach
                                    with any questions or concerns. I highly recomend."
                                </div>
                                <div class="ClientReview_Name">
                                    —

                                    Chonya Alvarez
                                </div>
                                <!-- <div class="ClientReview_Img">
                                        <img src="https://edgelaw.kinsta.cloud/wp-content/uploads/white-logo.png" />
                                    </div> -->

                                <div>
                                </div>

                                <div class="ClientReview_Top">
                                    <div class="ClientReview_Pfp">

                                        <img
                                            src="https://d2gwgwt9a7yxle.cloudfront.net/what_is_user_id_in_net_banking_mobile_871b681e52.jpg" />
                                    </div>
                                    <div class="ClientReview_Stars">
                                        ★★★★★
                                    </div>
                                </div>
                                <div class="ClientReview_Body">
                                    "Krista and Clint are AMAZING. The have been handling an issue for us, and it is
                                    so nice not to have to worry about anything. Very professional and easy to reach
                                    with any questions or concerns. I highly recomend."
                                </div>
                                <div class="ClientReview_Name">
                                    —

                                    Chonya Alvarez
                                </div>
                                <!-- <div class="ClientReview_Img">
                                        <img src="New_logo_automoss-removebg-preview.png" />
                                    </div> -->
                            </div>



                            <button id="show-more-btn" onclick="showMore()">Show More</button>
                            <button id="hide-btn" onclick="hideReviews()" style="display: none;">Hide</button>


                        </div>

                        <!-- <div class="question_Card" id="question-container">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="mb-4">Questions & Answers</h4>
                                <div class="search">
                                    <div class="icon"></div>

                                    <div class="input">
                                        <input type="text" placeholder="Search..." id="mysearch">
                                    </div>

                                    <span class="clear"
                                        onclick="document.getElementById('mysearch').value = ''">x</span>
                                </div>
                            </div>
                            <div class="question">
                             
                                <div class="Question_section">
                                    <div class="Question_inner_section">
                                        <div class="Question_section_title"><span
                                                class="Question_section_Q">Q:</span><span>14year boy
                                                size</span></div>
                                        <div>
                                            <div class="Question_section_subtitle"><span
                                                    class="Question_section_Q">A:</span><span>S is perfect
                                                    for 14 years boy but it's very according to the body to body
                                                    if the boys to fatty than it's the fits on Size M</span>
                                            </div>
                                            <div class="Question_section_Desc">
                                                <div class="buyer">
                                                    <div class="">
                                                        <span class="">Anonymous</span>
                                                    </div>
                                                    <span class="certified"><svg width="14" height="14"
                                                            viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg"
                                                            class="tdsVnH">
                                                            <g>
                                                                <circle cx="6" cy="6" r="6" fill="#878787">
                                                                </circle>
                                                                <path stroke="#FFF" stroke-width="1.5" d="M3 6l2 2 4-4"
                                                                    fill="#878787"></path>
                                                            </g>
                                                        </svg>Certified Buyer</span>
                                                </div>
                                                <div class="buyer_review">
                                                    <div class="buyer_review_like"><svg width="20" height="15"
                                                            xmlns="http://www.w3.org/2000/svg" class="U6FW-N">
                                                            <path fill="#fff" class="kX6HBt"
                                                                d="M9.58.006c-.41.043-.794.32-1.01.728-.277.557-2.334 4.693-2.74 5.1-.41.407-.944.6-1.544.6v8.572h7.5c.45 0 .835-.28 1.007-.665 0 0 2.207-6.234 2.207-6.834 0-.6-.47-1.072-1.07-1.072h-3.216c-.6 0-1.07-.535-1.07-1.07 0-.537.835-3.387 1.006-3.944.17-.557-.107-1.157-.664-1.35-.15-.043-.257-.086-.407-.064zM0 6.434v8.572h2.143V6.434H0z"
                                                                fill-rule="evenodd"></path>
                                                        </svg><span class="buyer_review_count">20</span></div>
                                                    <div class="buyer_review_dislike">
                                                        <svg width="20" height="15" xmlns="http://www.w3.org/2000/svg"
                                                            class="U6FW-N aQymJL">
                                                            <path fill="#fff" class="kX6HBt"
                                                                d="M10.42 14.994c.41-.043.794-.32 1.01-.728.277-.557 2.334-4.693 2.74-5.1.41-.407.944-.6 1.544-.6V1.728h-7.5c-.45 0-.835.28-1.007.665 0 0-2.207 6.234-2.207 6.834 0 .6.47 1.072 1.07 1.072h3.216c.6 0 1.07.535 1.07 1.07 0 .537-.835 3.387-1.006 3.944-.17.557.107 1.157.664 1.35.15.043.257.086.407.064zM20 8.566V0H17.857v8.572H20z"
                                                                fill-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="buyer_review_count">7</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="Question_inner_section">
                                        <div class="Question_section_title"><span
                                                class="Question_section_Q">Q:</span><span>14year boy
                                                size</span></div>
                                        <div>
                                            <div class="Question_section_subtitle"><span
                                                    class="Question_section_Q">A:</span><span>S is perfect
                                                    for 14 years boy but it's very according to the body to body
                                                    if the boys to fatty than it's the fits on Size M</span>
                                            </div>
                                            <div class="Question_section_Desc">
                                                <div class="buyer">
                                                    <div class="">
                                                        <span class="">Anonymous</span>
                                                    </div>
                                                    <span class="certified"><svg width="14" height="14"
                                                            viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg"
                                                            class="tdsVnH">
                                                            <g>
                                                                <circle cx="6" cy="6" r="6" fill="#878787">
                                                                </circle>
                                                                <path stroke="#FFF" stroke-width="1.5" d="M3 6l2 2 4-4"
                                                                    fill="#878787"></path>
                                                            </g>
                                                        </svg>Certified Buyer</span>
                                                </div>
                                                <div class="buyer_review">
                                                    <div class="buyer_review_like"><svg width="20" height="15"
                                                            xmlns="http://www.w3.org/2000/svg" class="U6FW-N">
                                                            <path fill="#fff" class="kX6HBt"
                                                                d="M9.58.006c-.41.043-.794.32-1.01.728-.277.557-2.334 4.693-2.74 5.1-.41.407-.944.6-1.544.6v8.572h7.5c.45 0 .835-.28 1.007-.665 0 0 2.207-6.234 2.207-6.834 0-.6-.47-1.072-1.07-1.072h-3.216c-.6 0-1.07-.535-1.07-1.07 0-.537.835-3.387 1.006-3.944.17-.557-.107-1.157-.664-1.35-.15-.043-.257-.086-.407-.064zM0 6.434v8.572h2.143V6.434H0z"
                                                                fill-rule="evenodd"></path>
                                                        </svg><span class="buyer_review_count">20</span></div>
                                                    <div class="buyer_review_dislike">
                                                        <svg width="20" height="15" xmlns="http://www.w3.org/2000/svg"
                                                            class="U6FW-N aQymJL">
                                                            <path fill="#fff" class="kX6HBt"
                                                                d="M10.42 14.994c.41-.043.794-.32 1.01-.728.277-.557 2.334-4.693 2.74-5.1.41-.407.944-.6 1.544-.6V1.728h-7.5c-.45 0-.835.28-1.007.665 0 0-2.207 6.234-2.207 6.834 0 .6.47 1.072 1.07 1.072h3.216c.6 0 1.07.535 1.07 1.07 0 .537-.835 3.387-1.006 3.944-.17.557.107 1.157.664 1.35.15.043.257.086.407.064zM20 8.566V0H17.857v8.572H20z"
                                                                fill-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="buyer_review_count">7</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="Question_inner_section">
                                        <div class="Question_section_title"><span
                                                class="Question_section_Q">Q:</span><span>14year boy
                                                size</span></div>
                                        <div>
                                            <div class="Question_section_subtitle"><span
                                                    class="Question_section_Q">A:</span><span>S is perfect
                                                    for 14 years boy but it's very according to the body to body
                                                    if the boys to fatty than it's the fits on Size M</span>
                                            </div>
                                            <div class="Question_section_Desc">
                                                <div class="buyer">
                                                    <div class="">
                                                        <span class="">Anonymous</span>
                                                    </div>
                                                    <span class="certified"><svg width="14" height="14"
                                                            viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg"
                                                            class="tdsVnH">
                                                            <g>
                                                                <circle cx="6" cy="6" r="6" fill="#878787">
                                                                </circle>
                                                                <path stroke="#FFF" stroke-width="1.5" d="M3 6l2 2 4-4"
                                                                    fill="#878787"></path>
                                                            </g>
                                                        </svg>Certified Buyer</span>
                                                </div>
                                                <div class="buyer_review">
                                                    <div class="buyer_review_like"><svg width="20" height="15"
                                                            xmlns="http://www.w3.org/2000/svg" class="U6FW-N">
                                                            <path fill="#fff" class="kX6HBt"
                                                                d="M9.58.006c-.41.043-.794.32-1.01.728-.277.557-2.334 4.693-2.74 5.1-.41.407-.944.6-1.544.6v8.572h7.5c.45 0 .835-.28 1.007-.665 0 0 2.207-6.234 2.207-6.834 0-.6-.47-1.072-1.07-1.072h-3.216c-.6 0-1.07-.535-1.07-1.07 0-.537.835-3.387 1.006-3.944.17-.557-.107-1.157-.664-1.35-.15-.043-.257-.086-.407-.064zM0 6.434v8.572h2.143V6.434H0z"
                                                                fill-rule="evenodd"></path>
                                                        </svg><span class="buyer_review_count">20</span></div>
                                                    <div class="buyer_review_dislike">
                                                        <svg width="20" height="15" xmlns="http://www.w3.org/2000/svg"
                                                            class="U6FW-N aQymJL">
                                                            <path fill="#fff" class="kX6HBt"
                                                                d="M10.42 14.994c.41-.043.794-.32 1.01-.728.277-.557 2.334-4.693 2.74-5.1.41-.407.944-.6 1.544-.6V1.728h-7.5c-.45 0-.835.28-1.007.665 0 0-2.207 6.234-2.207 6.834 0 .6.47 1.072 1.07 1.072h3.216c.6 0 1.07.535 1.07 1.07 0 .537-.835 3.387-1.006 3.944-.17.557.107 1.157.664 1.35.15.043.257.086.407.064zM20 8.566V0H17.857v8.572H20z"
                                                                fill-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="buyer_review_count">7</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="Question_inner_section">
                                        <div class="Question_section_title"><span
                                                class="Question_section_Q">Q:</span><span>14year boy
                                                size</span></div>
                                        <div>
                                            <div class="Question_section_subtitle"><span
                                                    class="Question_section_Q">A:</span><span>S is perfect
                                                    for 14 years boy but it's very according to the body to body
                                                    if the boys to fatty than it's the fits on Size M</span>
                                            </div>
                                            <div class="Question_section_Desc">
                                                <div class="buyer">
                                                    <div class="">
                                                        <span class="">Anonymous</span>
                                                    </div>
                                                    <span class="certified"><svg width="14" height="14"
                                                            viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg"
                                                            class="tdsVnH">
                                                            <g>
                                                                <circle cx="6" cy="6" r="6" fill="#878787">
                                                                </circle>
                                                                <path stroke="#FFF" stroke-width="1.5" d="M3 6l2 2 4-4"
                                                                    fill="#878787"></path>
                                                            </g>
                                                        </svg>Certified Buyer</span>
                                                </div>
                                                <div class="buyer_review">
                                                    <div class="buyer_review_like"><svg width="20" height="15"
                                                            xmlns="http://www.w3.org/2000/svg" class="U6FW-N">
                                                            <path fill="#fff" class="kX6HBt"
                                                                d="M9.58.006c-.41.043-.794.32-1.01.728-.277.557-2.334 4.693-2.74 5.1-.41.407-.944.6-1.544.6v8.572h7.5c.45 0 .835-.28 1.007-.665 0 0 2.207-6.234 2.207-6.834 0-.6-.47-1.072-1.07-1.072h-3.216c-.6 0-1.07-.535-1.07-1.07 0-.537.835-3.387 1.006-3.944.17-.557-.107-1.157-.664-1.35-.15-.043-.257-.086-.407-.064zM0 6.434v8.572h2.143V6.434H0z"
                                                                fill-rule="evenodd"></path>
                                                        </svg><span class="buyer_review_count">20</span></div>
                                                    <div class="buyer_review_dislike">
                                                        <svg width="20" height="15" xmlns="http://www.w3.org/2000/svg"
                                                            class="U6FW-N aQymJL">
                                                            <path fill="#fff" class="kX6HBt"
                                                                d="M10.42 14.994c.41-.043.794-.32 1.01-.728.277-.557 2.334-4.693 2.74-5.1.41-.407.944-.6 1.544-.6V1.728h-7.5c-.45 0-.835.28-1.007.665 0 0-2.207 6.234-2.207 6.834 0 .6.47 1.072 1.07 1.072h3.216c.6 0 1.07.535 1.07 1.07 0 .537-.835 3.387-1.006 3.944-.17.557.107 1.157.664 1.35.15.043.257.086.407.064zM20 8.566V0H17.857v8.572H20z"
                                                                fill-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="buyer_review_count">7</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="Question_inner_section">
                                        <div class="Question_section_title"><span
                                                class="Question_section_Q">Q:</span><span>14year boy
                                                size</span></div>
                                        <div>
                                            <div class="Question_section_subtitle"><span
                                                    class="Question_section_Q">A:</span><span>S is perfect
                                                    for 14 years boy but it's very according to the body to body
                                                    if the boys to fatty than it's the fits on Size M</span>
                                            </div>
                                            <div class="Question_section_Desc">
                                                <div class="buyer">
                                                    <div class="">
                                                        <span class="">Anonymous</span>
                                                    </div>
                                                    <span class="certified"><svg width="14" height="14"
                                                            viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg"
                                                            class="tdsVnH">
                                                            <g>
                                                                <circle cx="6" cy="6" r="6" fill="#878787">
                                                                </circle>
                                                                <path stroke="#FFF" stroke-width="1.5" d="M3 6l2 2 4-4"
                                                                    fill="#878787"></path>
                                                            </g>
                                                        </svg>Certified Buyer</span>
                                                </div>
                                                <div class="buyer_review">
                                                    <div class="buyer_review_like"><svg width="20" height="15"
                                                            xmlns="http://www.w3.org/2000/svg" class="U6FW-N">
                                                            <path fill="#fff" class="kX6HBt"
                                                                d="M9.58.006c-.41.043-.794.32-1.01.728-.277.557-2.334 4.693-2.74 5.1-.41.407-.944.6-1.544.6v8.572h7.5c.45 0 .835-.28 1.007-.665 0 0 2.207-6.234 2.207-6.834 0-.6-.47-1.072-1.07-1.072h-3.216c-.6 0-1.07-.535-1.07-1.07 0-.537.835-3.387 1.006-3.944.17-.557-.107-1.157-.664-1.35-.15-.043-.257-.086-.407-.064zM0 6.434v8.572h2.143V6.434H0z"
                                                                fill-rule="evenodd"></path>
                                                        </svg><span class="buyer_review_count">20</span></div>
                                                    <div class="buyer_review_dislike">
                                                        <svg width="20" height="15" xmlns="http://www.w3.org/2000/svg"
                                                            class="U6FW-N aQymJL">
                                                            <path fill="#fff" class="kX6HBt"
                                                                d="M10.42 14.994c.41-.043.794-.32 1.01-.728.277-.557 2.334-4.693 2.74-5.1.41-.407.944-.6 1.544-.6V1.728h-7.5c-.45 0-.835.28-1.007.665 0 0-2.207 6.234-2.207 6.834 0 .6.47 1.072 1.07 1.072h3.216c.6 0 1.07.535 1.07 1.07 0 .537-.835 3.387-1.006 3.944-.17.557.107 1.157.664 1.35.15.043.257.086.407.064zM20 8.566V0H17.857v8.572H20z"
                                                                fill-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="buyer_review_count">7</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="Question_inner_section">
                                        <div class="Question_section_title"><span
                                                class="Question_section_Q">Q:</span><span>14year boy
                                                size</span></div>
                                        <div>
                                            <div class="Question_section_subtitle"><span
                                                    class="Question_section_Q">A:</span><span>S is perfect
                                                    for 14 years boy but it's very according to the body to body
                                                    if the boys to fatty than it's the fits on Size M</span>
                                            </div>
                                            <div class="Question_section_Desc">
                                                <div class="buyer">
                                                    <div class="">
                                                        <span class="">Anonymous</span>
                                                    </div>
                                                    <span class="certified"><svg width="14" height="14"
                                                            viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg"
                                                            class="tdsVnH">
                                                            <g>
                                                                <circle cx="6" cy="6" r="6" fill="#878787">
                                                                </circle>
                                                                <path stroke="#FFF" stroke-width="1.5" d="M3 6l2 2 4-4"
                                                                    fill="#878787"></path>
                                                            </g>
                                                        </svg>Certified Buyer</span>
                                                </div>
                                                <div class="buyer_review">
                                                    <div class="buyer_review_like"><svg width="20" height="15"
                                                            xmlns="http://www.w3.org/2000/svg" class="U6FW-N">
                                                            <path fill="#fff" class="kX6HBt"
                                                                d="M9.58.006c-.41.043-.794.32-1.01.728-.277.557-2.334 4.693-2.74 5.1-.41.407-.944.6-1.544.6v8.572h7.5c.45 0 .835-.28 1.007-.665 0 0 2.207-6.234 2.207-6.834 0-.6-.47-1.072-1.07-1.072h-3.216c-.6 0-1.07-.535-1.07-1.07 0-.537.835-3.387 1.006-3.944.17-.557-.107-1.157-.664-1.35-.15-.043-.257-.086-.407-.064zM0 6.434v8.572h2.143V6.434H0z"
                                                                fill-rule="evenodd"></path>
                                                        </svg><span class="buyer_review_count">20</span></div>
                                                    <div class="buyer_review_dislike">
                                                        <svg width="20" height="15" xmlns="http://www.w3.org/2000/svg"
                                                            class="U6FW-N aQymJL">
                                                            <path fill="#fff" class="kX6HBt"
                                                                d="M10.42 14.994c.41-.043.794-.32 1.01-.728.277-.557 2.334-4.693 2.74-5.1.41-.407.944-.6 1.544-.6V1.728h-7.5c-.45 0-.835.28-1.007.665 0 0-2.207 6.234-2.207 6.834 0 .6.47 1.072 1.07 1.072h3.216c.6 0 1.07.535 1.07 1.07 0 .537-.835 3.387-1.006 3.944-.17.557.107 1.157.664 1.35.15.043.257.086.407.064zM20 8.566V0H17.857v8.572H20z"
                                                                fill-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="buyer_review_count">7</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <button id="show-more-btn-qstn" class="btn btn-sm show_hide_btn showMoreBtn"
                                        onclick="showMoreQuestions()">Show
                                        More</button>
                                    <button id="hide-btn-qstn" class="btn btn-sm show_hide_btn hide_more_qstn"
                                        onclick="hideQuestions()" style="display: none;">Hide</button>
                                </div>
                                <button class="btn btn-sm btn-primary post_qstn_btn" id="openModalBtn">Post Your
                                    Question</button>
                            </div>

                            <div class="modal questionModal" id="questionModal">
                                <div class="modal-content questionModal-content">
                                    <div class="modal-header">
                                        <span class="close-btn" id="closeModalBtn">&times;</span>
                                        <h2>Post Your Question</h2>
                                    </div>
                                    <form>
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <input type="text" id="questionInput"
                                                    placeholder="Ask your question here">
                                            </div>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                                        </div>

                                    </form>
                                </div>
                            </div>

                        </div> -->

                        <!-- CSS -->
                        <style>
                        .questionModal {
                            display: none;
                            position: fixed;
                            z-index: 999;

                            left: 0;
                            top: 0;
                            width: 100%;
                            height: 100%;
                            overflow: auto;
                            background-color: rgba(0, 0, 0, 0.4);

                            padding-top: 60px;
                        }


                        .questionModal-content {
                            background-color: #fefefe;

                            padding: 20px;
                            border: 1px solid #888;
                            width: 80%;
                            max-width: 500px;
                            border-radius: 10px;
                            position: relative;
                            height: auto !important;





                            margin: 10% auto;

                            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                        }


                        .questionModal-content .close-btn {
                            color: #aaa;
                            float: right;
                            font-size: 28px;
                            font-weight: bold;
                            position: absolute;
                            top: 15px;
                            right: 15px;
                        }

                        .close-btn:hover,
                        .close-btn:focus {
                            color: black;
                            text-decoration: none;
                            cursor: pointer;
                        }





                        /* Modal header (title and close button) */
                        .questionModal-content .modal-header {
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                        }

                        .questionModal-content .modal-header h2 {
                            margin: 0;
                            font-size: 1.5rem;
                        }

                        .close-btn {
                            font-size: 1.5rem;
                            cursor: pointer;
                            background: none;
                            border: none;
                            color: #333;
                            font-weight: bold;
                        }

                        /* Modal form */
                        .questionModal-content form {
                            display: flex;
                            flex-direction: column;
                            gap: 10px;
                        }

                        .questionModal-content form label {
                            font-size: 1rem;
                        }

                        .questionModal-content form input[type="text"] {
                            padding: 10px;
                            font-size: 14px;
                            border: 1px solid #ccc;
                            border-radius: 10px;
                            width: 100%;
                            box-shadow: rgba(100, 100, 111, 0.2)
                        }

                        .questionModal-content form button {
                            padding: 8px 16px;
                            font-size: 13px;
                            border: none;
                            background-color: #007bff;

                            color: white;
                            border-radius: 8px;
                            cursor: pointer;
                        }

                        .questionModal-content form button:hover {
                            background-color: #0056b3;

                        }


                        .questionModal-content .modal-footer {
                            display: flex;
                            justify-content: flex-end;
                            gap: 10px;
                            background: #f3f3f3;
                        }

                        .questionModal-content .modal-footer .btn-secondary {
                            background-color: #6c757d;
                            color: white;
                        }

                        .questionModal-content .modal-footer .btn-secondary:hover {
                            background-color: #5a6268;
                        }

                        .questionModal-content .modal-footer .btn-primary {
                            background-color: #007bff;
                            color: white;
                        }

                        .questionModal-content .modal-footer .btn-primary:hover {
                            background-color: #0056b3;
                        }

                        .questionModal-content .modal-body {
                            padding: 40px 0;
                        }


                        .post_qstn_btn {
                            padding: 8px 16px;
                            background-color: #2874f0;
                            color: #fff;
                            width: auto;
                            box-shadow: none;
                            font-size: 14px;
                            border-radius: 15px;
                        }

                        .Question_inner_section:last-child {
                            border-bottom: none;
                        }

                        .show_hide_btn {
                            width: 100px;
                            background-color: red;
                            padding: 5px 10px;
                            color: white;
                            font-size: 14px;
                            border-radius: 15px;

                        }

                        .search {
                            width: 39px;
                            line-height: 40px;
                            height: 40px;
                            transform: 0.5s;
                            background: #e6e6e6;

                            overflow: hidden;
                            position: relative;
                            border-radius: 60px;
                            box-shadow: 0 0 0 0 5px #7532d4;
                        }

                        .search.active {
                            width: 360px;
                        }

                        .search .icon {
                            top: 0;
                            left: 0;
                            width: 39px;
                            height: 40px;
                            display: flex;
                            z-index: 1000;
                            cursor: pointer;
                            position: absolute;
                            background: #b3b3b3;
                            border-radius: 60px;
                            align-items: center;
                            justify-content: center;
                        }

                        .search .icon:before {
                            content: "";
                            width: 15px;
                            height: 15px;
                            position: absolute;
                            border-radius: 50%;
                            border: 3px solid #ffffff;
                            transform: translate(-4px, -4px);
                        }

                        .search .icon:after {
                            content: "";
                            width: 3px;
                            height: 12px;
                            position: absolute;
                            background: #ffffff;
                            transform: translate(6px, 6px) rotate(315deg);
                        }

                        .search .input {
                            left: 60px;
                            width: 275px;
                            height: 40px;
                            display: flex;
                            position: relative;
                            align-items: center;
                            justify-content: center;
                        }

                        .search .input input {
                            top: 0;
                            width: 100%;
                            height: 100%;
                            border: none;
                            outline: none;
                            font-size: 18px;
                            padding: 10px 0;
                            position: absolute;
                            color: rgb(92, 92, 92);
                            background: #e6e6e6;
                        }

                        .clear {
                            top: 50%;
                            right: 15px;
                            width: 15px;
                            height: 15px;
                            display: flex;
                            cursor: pointer;
                            background: #ff0;
                            position: relative;
                            align-items: center;
                            justify-content: center;
                            transform: translateY(-50%);
                        }

                        .clear:before {
                            width: 1px;
                            height: 15px;
                            content: "";
                            position: absolute;
                            background: #999;
                            transform: rotate(45deg);
                        }

                        .clear:after {
                            width: 1px;
                            height: 15px;
                            content: "";
                            position: absolute;
                            background: #999;
                            transform: rotate(315deg);
                        }

                        .question_Card {
                            min-height: 355px;
                            border-top: 5px solid #13588F;
                            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                            font-weight: 700;
                            overflow: hidden;
                            padding: 60px 50px 60px 50px;
                            position: relative;
                            margin-top: 10px;
                        }

                        .ClientReview_Card {
                            min-height: 355px;
                            border-top: 5px solid #13588F;
                            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                            font-weight: 700;
                            overflow: hidden;
                            padding: 60px 50px 60px 50px;
                            position: relative;
                        }

                        .ClientReview_Top {
                            display: flex;
                            flex-wrap: wrap;
                            align-items: center;
                            padding-bottom: 15px;
                        }

                        .ClientReview_Pfp {
                            width: 70px;
                        }

                        .ClientReview_Stars {
                            font-size: 18px;
                            padding-left: 20px;
                            color: #ffbf00;
                        }

                        .ClientReview_Body {
                            padding-bottom: 10px;
                            text-align: justify;
                            font-size: 13px;
                        }

                        .ClientReview_Name {

                            color: #13588F;
                            font-size: 16px;
                            padding-bottom: 14px;
                        }

                        .ClientReview_Img img {
                            filter: brightness(0) invert(1) sepia(1) saturate(10000%) hue-rotate(180deg) brightness(1.1);
                            position: absolute;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);

                            z-index: -1;
                            height: 80%;
                            width: 80%;
                        }
                        </style>


                    </div>


                    <!-- <div class="car-detail" style="border: 1px solid #ccc; border-radius: 8px; padding: 20px;">

                            <section class="breadcrumb__section breadcrumb__bg"
                                style="background-image: url('https://dev.automoss.in/cb.jpeg'); height: 220px; position:relative;  
                                    background-size: cover; background-position: center; background-repeat: no-repeat; margin-bottom: 20px;">


                                <div style="position: absolute; bottom: -10px; left:20px; ">
                                    <img src="" alt="Car Image" class="img-fluid rounded"
                                        onerror="this.onerror=null; this.src='https://dev.automoss.in/nocar.png';"
                                        style="width: 190px; border-radius: 15px !important; border: 2px solid #ccc; box-shadow: 3px 3px 8px #484545;">

                                </div>
                            </section>

                        


                         
                            <div class="car-info mb-4">
                                <h2 class="car-name text-danger">car for sell</h2>
                                <p class="car-description">
                                    zddcas



                                </p>


                            </div>
                            <div class="row">
                                <a style="width: 50%; float:left;  margin-bottom:20px;"
                                    class="product__card--btn primary__btn"
                                    href="https://dev.automoss.in/carenq/aYDNh3Irpz8P7mXg">Send Inquiry</a>
                            </div>

                          
                            <div class="car-overview p-4 border rounded shadow-sm">
                                <h3 class="mb-4 fw-bold">Car Overview</h3>
                                <div class="row">
                                    <div class="col-md-6 mb-3 d-flex align-items-center">
                                        <i class="fas fa-calendar-alt me-3 text-muted"></i>
                                        <span><strong>Registration Year:</strong> 2010</span>
                                    </div>
                                    <div class="col-md-6 mb-3 d-flex align-items-center">
                                        <i class="fas fa-shield-alt me-3 text-muted"></i>
                                        <span><strong>Insurance:</strong> yes</span>
                                    </div>
                                    <div class="col-md-6 mb-3 d-flex align-items-center">
                                        <i class="fas fa-gas-pump me-3 text-muted"></i>
                                        <span><strong>Fuel Type:</strong> LPG</span>
                                    </div>
                                    <div class="col-md-6 mb-3 d-flex align-items-center">
                                        <i class="fas fa-chair me-3 text-muted"></i>
                                        <span><strong>Seats:</strong> 4</span>
                                    </div>
                                    <div class="col-md-6 mb-3 d-flex align-items-center">
                                        <i class="fas fa-tachometer-alt me-3 text-muted"></i>
                                        <span><strong>Kms Driven:</strong> 22 Kms</span>
                                    </div>
                                    <div class="col-md-6 mb-3 d-flex align-items-center">
                                        <i class="fas fa-map-marker-alt me-3 text-muted"></i>
                                        <span><strong>RTO:</strong> bbsr</span>
                                    </div>
                                    <div class="col-md-6 mb-3 d-flex align-items-center">
                                        <i class="fas fa-user-circle me-3 text-muted"></i>
                                        <span><strong>Ownership:</strong> 1st Owner</span>
                                    </div>
                                    <div class="col-md-6 mb-3 d-flex align-items-center">
                                        <i class="fas fa-cogs me-3 text-muted"></i>
                                        <span><strong>Transmission:</strong> Automatic</span>
                                    </div>
                                    <div class="col-md-6 mb-3 d-flex align-items-center">
                                        <i class="fas fa-car-side me-3 text-muted"></i>
                                        <span><strong>Engine Displacement:</strong> 0 cc</span>
                                    </div>
                                    <div class="col-md-6 mb-3 d-flex align-items-center">
                                        <i class="fas fa-clock me-3 text-muted"></i>
                                        <span><strong>Year of Manufacture:</strong> 2020</span>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 mt-4">
                                <div class="row border rounded shadow-sm">
                                    <div class="col-12">
                                        <h3 class="my-4 fw-bold">Car Gallery</h3>
                                    </div>
                                    <div id="slider" class="slider">
                                        <span class="close" onclick="closeSlider()">&times;</span>
                                        <img class="slider-content" id="slider-img" />
                                        <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
                                        <a class="next" onclick="changeSlide(1)">&#10095;</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                </div>
                <style>
                .post__article--thumbnail {
                    width: 110px;
                    border-radius: 5px;
                    overflow: hidden;
                    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
                }

                .text1 {
                    color: white;
                    font-size: 13px;
                    font-weight: 700;
                    letter-spacing: 1px;
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
                       
                        margin-bottom: 10px;
                    }

                    85% {
                        color: black;
                      
                        margin-bottom: 10px;
                    }

                    100% {
                        color: black;
                        margin-bottom: 10px;
                    }
                }
                </style>
                <?php
                if (mycount($r_prd) > 0) {
                    ?>
                <div class="col-md-3 ">
                    <div class="car-detail right_card">
                        <h2 class="widget__title h3">Related products</h2>

                        <?php

                    foreach ($r_prd as $pd) {
                        ?>

                        <div class="post__article--items d-flex align-items-center">
                            <div class="post__article--thumbnail">
                                <a class="display-block" href="https://dev.automoss.in/cardetails/ATMS-7AE3lXzqPdCW">
                                    <img class="post__article--thumbnail__img" src="<?= $pd->thumb ?>" alt="car-img"
                                        onerror="this.onerror=null; this.src='https://dev.automoss.in/nocar.png';">
                                </a>
                            </div>
                            <div class="post__article--content">
                                <h3 class="post__article--content__title"><a
                                        href="https://dev.automoss.in/cardetails/ATMS-7AE3lXzqPdCW"><span class="text1">
                                            <?= $pd->name ?> </span> </a></h3>

                                <span class="meta__deta">₹ <?= $pd->offer_price ?></span>
                            </div>
                        </div>

                        <?php
                    }
                }
                ?>




                    </div>
                </div>






            </div>
        </div>

    </section>
















    <!-- ////////////////////////////////////////////////////////////// -->











</main>




<script type="text/javascript">
var page_nm = 'servicedetails';
</script>

<?php
include ('inc/footer.php');
?>
<script>
let modal = document.getElementById("questionModal");
let openModalBtn = document.getElementById("openModalBtn");
let closeModalBtn = document.getElementById("closeModalBtn");

openModalBtn.onclick = function() {
    modal.style.display = "block";
}

closeModalBtn.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

let Questions = document.querySelectorAll(".Question_inner_section");
let showMoreBtnQuestion = document.getElementById("show-more-btn-qstn");
let hideBtnQuestion = document.getElementById("hide-btn-qstn");

let currentIndexqstn = 3;

function showMoreQuestions() {
    for (let i = currentIndexqstn; i < currentIndexqstn + 3 && i < Questions.length; i++) {
        Questions[i].style.display = "block";
    }

    currentIndexqstn += 3;
    if (currentIndexqstn >= Questions.length) {
        showMoreBtnQuestion.style.display = "none";
        hideBtnQuestion.style.display = "inline-block";
    }
}

function hideQuestions() {

    for (let i = 3; i < Questions.length; i++) {
        Questions[i].style.display = "none";
    }

    currentIndexqstn = 3;
    showMoreBtnQuestion.style.display = "inline-block";
    hideBtnQuestion.style.display = "none";
}

// Initially hide all questions except the first 3
for (let i = 3; i < Questions.length; i++) {
    Questions[i].style.display = "none";
}












const icon = document.querySelector(".icon");
const search = document.querySelector(".search");

icon.onclick = function() {
    search.classList.toggle("active");
};

let reviews = document.querySelectorAll(".ClientReview");
let reviewsContainer = document.getElementById("reviews-container");
let showMoreBtn = document.getElementById("show-more-btn");
let hideBtn = document.getElementById("hide-btn");

let currentIndex = 3;

function showMore() {
    for (let i = currentIndex; i < currentIndex + 3 && i < reviews.length; i++) {
        reviews[i].style.display = "block";
    }

    currentIndex += 3;

    if (currentIndex >= reviews.length) {
        showMoreBtn.style.display = "none";
        hideBtn.style.display = "inline-block";
    }
}

function hideReviews() {

    for (let i = 3; i < reviews.length; i++) {
        reviews[i].style.display = "none";
    }

    currentIndex = 3;
    showMoreBtn.style.display = "inline-block";
    hideBtn.style.display = "none";
}


for (let i = 3; i < reviews.length; i++) {
    reviews[i].style.display = "none";
}







const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id; // Get the id from data-id attribute
        slideImage(); // Slide the image to the correct position
    });
});

function slideImage() {
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    // Move the image showcase to the correct position based on imgId
    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage); // Adjust the slide on window resize
</script>
<script>
function updatePriceValue(value) {
    document.getElementById('selected-price').innerText = value;
}



// Get the modal
var modal1 = document.getElementById("modal1");

// Get the image that opens the modal
var img = document.getElementById("openModal");

// Get the <span> element that closes the modal
var closeModal = document.getElementById("closeModal");

// When the user clicks on the image, open the modal
img.onclick = function() {
    modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
closeModal.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>