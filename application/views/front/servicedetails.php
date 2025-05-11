<?php
  include('inc/header.php');
?>

<script src="https://kit.fontawesome.com/7948284983.js" crossorigin="anonymous"></script>


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

    .flex_justify {
        align-items: center;
        gap: 20px;
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

    .button_group .btn {
        background: #ed1d24;
        color: white;
        border: none;
        padding: 5px 25px;
        font-size: 12px;

        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .button_group .btn:hover {
        background-color: #26A69A;
        color: #fff;
    }

    .price-badge {
        display: inline-block;

        background-color: #ffd247;
        color: #000000;
        border-radius: 10px;
        font-size: 16px;
        font-weight: bold;
        animation: beat 1.5s infinite;
        margin-right: 10px;
    }

    .price-badges {
        display: inline-block;
        padding: 5px 10px;
        background: rgb(255, 255, 255);
        background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(255, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 100%, rgba(252, 164, 255, 1) 100%, rgba(0, 0, 0, 1) 100%);
        color: #f9f9f9;
        border-radius: 10px;
        font-size: 16px;
        font-weight: bold;
        animation: beat 1.5s infinite;
        margin-right: 10px;
    }

    @keyframes beat {
        0% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.1);

            opacity: 1.2;

        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    .border_top {
        border-top: 5px solid red !important;
    }

    .display_flex {
        display: flex;
        justify-content: space-evenly;
    }

    .mt_4 {
        margin-top: 20px;
    }

    .card-title {
        font-weight: 600;
        font-size: 14px;
    }

    .animated_img {
        transition: transform 0.3s ease;
        position: relative;
    }

    .animated_card:hover .animated_img {
        transform: scale(1.1);
        /* Zoom in on hover */
    }

    .wishlist {
        height: 25px;
        width: 25px;
        background-color: #eee;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        z-index: 2;

    }


    .first {
        position: absolute;
        top: 10px;

        left: 10px;

        width: auto;

        padding: 9px;
        z-index: 1;

    }

    .animated_card:hover .first .wishlist {
        opacity: 1;

        transition: opacity 0.3s ease;

    }

    .cart-icon {
        font-size: 1.5rem;
        color: #fff;
        margin-left: 10px;
        transition: transform 0.3s ease, color 0.3s ease;
        animation: pulseCart 1.5s infinite ease-in-out, swing 2s infinite ease-in-out, colorChange 3s infinite ease-in-out;
        /* Animation name and duration */
    }

    .cart-icon:hover {
        transform: scale(1.2);
        color: #f39c12;
    }

    @keyframes pulseCart {
        0% {
            transform: scale(1);
            /* Start at normal size */
            opacity: 1;
            /* Full opacity */
        }

        50% {
            transform: scale(1.2);
            /* Scale up to 120% */
            opacity: 0.7;
            /* Slightly fade out */
        }

        100% {
            transform: scale(1);
            /* Return to normal size */
            opacity: 1;
            /* Full opacity */
        }
    }

    @keyframes swing {
        0% {
            transform: rotate(-15deg);
            /* Swing left */
        }

        50% {
            transform: rotate(15deg);
            /* Swing right */
        }

        100% {
            transform: rotate(-15deg);
            /* Return to left */
        }
    }

    @keyframes colorChange {
        0% {
            color: #fff;
            /* Starting color (white) */
        }

        50% {
            color: #e74c3c;
            /* Midway color (red) */
        }

        100% {
            color: #fff;
            /* Ending color (back to white) */
        }
    }
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
        border: none;
        /* Remove border */
        font-size: 28px;
        /* Increase size */
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

    .modal-backdrop {
        z-index: 33 !important;
    }

    .dropdown-item {
        font-size: 14px;
    }

    .social__share--icon__style2 {
        background: #ed1d24;
    }




////////////////////////


    .ff {
        position: absolute;
        top: 0;
    }

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

    .product__card--btn {
        border-radius: 30px;
    }

    .blog__section {
        background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgb(255 242 255) 0%, rgb(237 29 29 / 12%) 100%, rgb(110 255 212) 100%);
    }

    .box_shodow {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        background: white;
    }

    .card_body {
        position: relative;
        padding: 30px 10px 20px 10px;
    }

    .widget_menu {
        transition: border 0.3s ease,
            border-radius 0.3s ease,
            padding 0.3s ease,
            box-shadow 0.3s ease;
    }

    .widget_menu:hover {
        border-bottom: 3px solid rgb(255, 0, 0);
        border-radius: 10px;
        padding: 5px 5px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    .animated_checkbox {
        transition: transform 0.3s ease, background-color 0.3s ease, border 0.3s ease;
    }


    .animated_form_check:hover .animated_checkbox {
        transform: scale(1.2);
        background-color: rgba(0, 150, 136, 0.2);
        border: 2px solid rgb(0, 150, 136);
    }


    .animated_form_check:hover .form-check-label {
        color: rgb(0, 150, 136);
    }

    .animated_card {
        border-radius: 20px;
    }

    @media (max-width: 768px) {
        .button_group a:last-child {
            margin-left: 20px;
        }

        .button_group .btn {
            background: #ed1d24;
            color: white;
            border: none;
            padding: 5px 25px;
            font-size: 14px;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .button_group {
            position: absolute;
            /* top: 115px; */
            z-index: 999;
            top: -16px;
            left: 75px;
            z-index: 999;
        }

        .animated_card {
            margin-top: 20px;
        }
    }
    .product__card {
        background-color: white;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        position: relative;
        padding: 0;
        border-radius: 20px;
    }


    figure.snip1170 {
        font-family: 'Raleway', Arial, sans-serif;
        color: #fff;
        position: relative;
        /* margin: 10px; */
        min-width: 210px;
        max-width: 300px;
        width: 100%;
        /* background: #000000; */
        color: #000000;
        text-align: left;
    }

    figure.snip1170 * {
        -webkit-box-sizing: padding-box;
        box-sizing: padding-box;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    figure.snip1170 img {
        opacity: 1;
        width: 300px;
        vertical-align: top;
        border-radius: 20px;
    }

    figure.snip1170 span {
        position: absolute;
        padding: 0 30px 0 15px;
        color: #ffffff;
        background-color: #000000;
        font-weight: 800;
        font-size: 0.9em;
        line-height: 36px;
        text-transform: uppercase;
        bottom: 20px;
        right: 0px;
        z-index: 1;
    }

    figure.snip1170 span:after {
        border-bottom: 18px solid transparent;
        border-left: 12px solid #20638f;
        border-top: 18px solid transparent;
        content: '';
        position: absolute;
        left: 100%;
        top: 0;
    }

    figure.snip1170 a {
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        position: absolute;
        z-index: 1;
    }

    figure.snip1170.blue span {
        background-color: #20638f;
    }



    .spl_listss ul li {
        list-style: none;

        padding-left: 25px;

        background: url('http://localhost/automoss/assets/double-check.gif') no-repeat left center;

        background-size: 20px 20px;
        margin-bottom: 10px;
        color: red;
    }

    .product-card__promotion {
        display: flex;
        justify-content: center;
        align-items: center;
        text-transform: uppercase;
        font-weight: bold;
        color: #ffffff;
        width: auto;
        height: auto;
        padding: 10px 20px;
        background: url('http://localhost/automoss/Header-Blue-Ribbon-Transparent-File.png');

        /* Make sure the path is correct */
        background-size: cover;
        /* Ensures the background covers the entire element */
        background-position: center;
        /* Centers the background image */
        border-radius: var(--border-radius-small);
        position: absolute;
        left: -2rem;
        top: 0.3rem;
        transform: rotate(-15deg);
        transition: transform 0.25s cubic-bezier(.29, -0.54, .81, .95);
        line-height: 1;
        font-size: 18px;
        z-index: 1;
        /* Make sure it appears above any other elements */

    }

    .product__card:hover .product-card__promotion {
        transform: rotate(0deg);
    }

    .button_group .btn {
        background: #ed1d24;
        color: white;
        border: none;
        padding: 5px 25px;
        font-size: 14px;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .button_group a {
        position: relative;
        display: inline-block;
        text-decoration: none;
        padding: 0.75em 2em;
        font-size: 1em;
        font-weight: bold;
        text-align: center;
        border-radius: 30px;

        background-color: #f8f9fa;

        color: #333;

        transition: all 0.3s ease-in-out;

    }

    .button_group a:hover {
        transform: scale(1.1);

        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);

        background-color: #ff3f40;

        color: white;

    }


    .button_group a:focus {
        outline: none;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
    }

    .shipping__inner {

        margin-bottom: 0;

    }

    .shipping__section {
        padding-bottom: 30px;
    }
    .product__list--thumbnail {
        height: 100%;
        width: 100%;
    }

    .snip1170 {
        height: 100%;
        margin: 0;
    }


    .snip1170 img {
        height: 100%;
    }

    .Service_Title {
        text-transform: capitalize;
        margin-bottom: 5px;
    }

    .continue_btn {
        /* font: 700 30px consolas; */
        color: #fff;
        text-decoration: none;
        text-transform: uppercase;
        /* padding: 10px 20px; */
        position: relative;
        overflow: hidden;
        border-radius: 5px;
        transition: 0.2s;
        transform: scale(1.25);
        font-size: 12px;
        border: none;
    }

    .continue_btn span {
        position: relative;
        z-index: 0;
        color: #fff;
        font-size: 12px;
    }

    .continue_btn .liquid {
        position: absolute;
        top: -60px;
        left: 0;
        width: 100%;
        height: 200px;
        background: #ed1d24;
        box-shadow: inset 0 0 50px rgba(0, 0, 0, 0.7);
        z-index: -1;
        transition: 0.6s;
    }

    .continue_btn .liquid::after,
    .continue_btn .liquid::before {
        position: absolute;
        content: "";
        width: 200%;
        height: 200%;
        top: 0;
        left: 0;
        transform: translate(-25%, -75%);
    }

    .continue_btn .liquid::after {
        border-radius: 45%;
        background: rgba(20, 20, 20, 1);
        box-shadow: 0 0 10px 5px #d1060d, inset 0 0 5px #ed1d24;
        animation: animate 5s linear infinite;
        opacity: 0.8;
    }

    .continue_btn .liquid::before {
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

    .continue_btn:hover .liquid {
        top: -120px;
    }

    .continue_btn:hover {
        box-shadow: 0 0 5px #7293ff, inset 0 0 5px #7293ff;
        transition-delay: 0.2s;
    }

    .button_group {
        justify-content: space-between;
    }

    .details span {
        color: #ff0000;
        text-transform: capitalize;
        font-size: 14px;

    }

    ul li {
        list-style: none;
        /* Remove default bullet points */
        padding: 5px;
        /* Space for tick icon */
        position: relative;
    }

    .service_content .icon {
        padding: 5px;
    }

    .button_group a {
        padding: 0px;
        border-radius: 0px;
    }
    .lebel_second, .third_level {
        background: #efe5e5;
        padding-left: 15px;
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
                        <h1 class="breadcrumb__content--title mb-25 text-white">Services</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a href="<?= base_url()?>"
                                    style="color:white;">Home</a></li>
                            <li class="breadcrumb__content--menu__items text-white"><span>Services</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start blog section -->
    <section class="blog__section section--padding">
        <div class="container mt-3">
            <div class="row">



                <div class="col-md-3">
                    <div class="py-4 box_shodow border_top" style="border: 1px solid #ccc; padding: 20px">
                        <h2 class="widget__title h3">Selected City</h2>


                        <div class="row">
                            <div class="col-12">
                                <button type="button" class="product__card--btn primary__btn w-100"
                                    onclick="cityopenModal()" style="font-size: 18px;">
                                    <i class="fas fa-map-marker-alt location-icon" style="font-size: 20px;"></i>
                                    <?=$mycity_name; ?>
                                </button>
                            </div>
                        </div>

                    </div>



                    <div class="group-form mt-4 py-4 box_shodow border_top"
                        style="border: 1px solid #ccc; padding: 20px">
                        <h2 class="widget__title h3">Price Range</h2>




                        <div class="range-slider">
                            <div class="slider-track"></div>
                            <div class="slider-range" id="sliderRange"></div>
                            <input type="range" id="minRange" min="0" max="100000" step="1000" value="0"
                                oninput="updateSlider()">
                            <input type="range" id="maxRange" min="0" max="100000" step="1000" value="25000"
                                oninput="updateSlider()">
                        </div>
                        <p>Range: ₹<span id="minValue">0</span> - ₹<span id="maxValue">25,000</span></p>



                    </div>




                    <div class="group-form mt-4 py-4 box_shodow border_top"
                        style="border: 1px solid #ccc; padding: 20px">
                        <h2 class="widget__title h3">Choose Category</h2>

                        <?php
                        foreach ($x as $dd) {
                            $chkd = ($cat->id==$dd->id)?'checked':'';
                            echo "<div style='margin: 8px 0; font-weight: bold; font-size: 16px; color: #333;'>
                                    <input type='checkbox' name='categories[]' value='" . $dd->id . "'     ".$chkd."   style='margin-right: 8px; accent-color: red;'> 
                                    " . $dd->name . "
                                  </div>"; // Parent category with red checkbox

                            if (!empty($dd->child)) {
                                echo "<div class='lebel_second'>";
                                foreach ($dd->child as $sub) {
                                    echo "<div class='widget_menu' style='margin: 8px 0; font-size: 16px; color: #333;'>
                                            <input type='checkbox' name='categories[]' value='" . $sub->id . "' style='margin-right: 8px; accent-color: red;'> 
                                            " . $sub->name . "
                                          </div>";

                                    if (!empty($sub->child)) { 
                                        echo "<div class='lebel_third'>";
                                        foreach ($sub->child as $ss) {
                                            echo "<div class='widget_menu' style='margin: 8px 0; font-size: 16px; color: #333;'>
                                                    <input type='checkbox' name='categories[]' value='" . $ss->id . "' style='margin-right: 8px; accent-color: red;'> 
                                                    " . $ss->name . "
                                                  </div>";
                                        }
                                        echo "</div>";
                                    }
                                }
                                echo "</div>";
                            }
                        }
                        ?>

                    </div>




                </div>





                <div class="col-md-9">
                    <div class="row">
                        <a href="<?=base_url() ?>customer/jobcard_add?sc=<?=spl_encode($cat->id) ?>" style="text-align:center; width: 390px;margin-bottom: 20px;border-radius: 25px; margin-left:35%;"
                        class="search__filter--btn primary__btn price-badge" type="submit">Need a Customised
                            Service? Book Now!</a>
                    </div>

                    <div class="row">
                        <div class="row row-cols-1 mb--n30" id="itemlist">

                        </div>
                    </div>










                </div>
            </div>
        </div>
    </section>


    <!-- Start shipping section -->
    <section class="shipping__section">
        <div class="container">
            <div class="shipping__inner style2 d-flex">
                <div class="shipping__items style2 d-flex align-items-center">
                    <div class="shipping__icon">
                        <img src="<?=base_url() ?>assets/img/other/shipping1.webp" alt="icon-img">
                    </div>
                    <div class="shipping__content">
                        <h2 class="shipping__content--title h3">Free Shipping</h2>
                        <p class="shipping__content--desc">Free shipping over $100</p>
                    </div>
                </div>
                <div class="shipping__items style2 d-flex align-items-center">
                    <div class="shipping__icon">
                        <img src="<?=base_url() ?>assets/img/other/shipping2.webp" alt="icon-img">
                    </div>
                    <div class="shipping__content">
                        <h2 class="shipping__content--title h3">Support 24/7</h2>
                        <p class="shipping__content--desc">Contact us 24 hours a day</p>
                    </div>
                </div>
                <div class="shipping__items style2 d-flex align-items-center">
                    <div class="shipping__icon">
                        <img src="<?=base_url() ?>assets/img/other/shipping3.webp" alt="icon-img">
                    </div>
                    <div class="shipping__content">
                        <h2 class="shipping__content--title h3">100% Money Back</h2>
                        <p class="shipping__content--desc">You have 30 days to Return</p>
                    </div>
                </div>
                <div class="shipping__items style2 d-flex align-items-center">
                    <div class="shipping__icon">
                        <img src="<?=base_url() ?>assets/img/other/shipping4.webp" alt="icon-img">
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




<script type="text/javascript">
var page_nm = 'servicedetails';
var ct_id = <?=$ct->id ?>;
var cat_id = '<?=@$cat->id ?>';
</script>

<?php
  include('inc/footer.php');
?>


<script>
const minRange = document.getElementById("minRange");
const maxRange = document.getElementById("maxRange");
const sliderRange = document.getElementById("sliderRange");
const minValue = document.getElementById("minValue");
const maxValue = document.getElementById("maxValue");

// Function to format numbers as currency with commas
function formatCurrency(value) {
    return value.toLocaleString("en-IN");
}





const debouncedLoadServiceData = debounce(load_servicedata, 1000);

function updateSlider() {
    const min = parseInt(minRange.value);
    const max = parseInt(maxRange.value);

    // Prevent overlap
    if (min >= max) {
        minRange.value = max - 1;
    }
    if (max <= min) {
        maxRange.value = min + 1;
    }

    // Update range display
    sliderRange.style.left = `${(minRange.value / minRange.max) * 100}%`;
    sliderRange.style.width = `${((maxRange.value - minRange.value) / minRange.max) * 100}%`;

    // Update displayed values with ₹ sign and formatted numbers
    minValue.textContent = formatCurrency(parseInt(minRange.value));
    maxValue.textContent = formatCurrency(parseInt(maxRange.value));

    // load_servicedata(); 
    debouncedLoadServiceData();
}

// Initialize slider
updateSlider();
</script>