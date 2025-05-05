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
:root {
    --box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
    --border-radius-small: 5px;
    --red: rgba(229, 62, 62, 0.75);
    --green: rgba(72, 187, 120, 0.8);
    --body-bg: rgba(237, 242, 247, 1)
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
    margin: 10px;
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

.product-card__promotion {
    display: flex;
    justify-content: center;
    align-items: center;
    text-transform: uppercase;
    font-weight: bold;
    color: #ffffff;
    width: auto;
    height: auto;
    font-size: 19px;
    padding: 10px 10px;
    background: var(--red);
    border-radius: 15px;
    position: absolute;
    left: -1rem;
    top: 0.5rem;
    transform: rotate(-15deg);
    transition: transform 0.25s cubic-bezier(.29, -0.54, .81, .95);
    line-height: 1;
    box-shadow: var(--box-shadow);
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

.animated_btn {
    position: relative;
    overflow: hidden;
    padding: 5px 20px;
    font-size: 12px;
    text-transform: uppercase;
    border-radius: 5px;
    border: none;
    background-color: #dc3545;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Wave Animation */
.animated_btn::before {
    content: '';
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.6);

    transform: scale(0);
    animation: wave 3s infinite;

    pointer-events: none;

    top: 50%;
    left: 50%;
    width: 100px;

    height: 100px;


}


@keyframes wave {
    0% {
        transform: scale(0);
        opacity: 1;
    }

    50% {
        transform: scale(2);

        opacity: 0.3;

    }

    100% {
        transform: scale(4);

        opacity: 0;

    }
}

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
.main__content_wrapper {
        background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgb(255 242 255) 0%, rgb(237 29 29 / 12%) 100%, rgb(110 255 212) 100%);
    }

    .box_shodow {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        background: white;
    }

    .border_top {
        border-top: 5px solid red !important;
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
</style>
<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg"
        style="background-image: url('assets/img/carbg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title mb-25 text-white">Buy Cars</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a href="<?= base_url()?>"
                                    style="color:white;">Home</a></li>
                            <li class="breadcrumb__content--menu__items text-white"><span>Cars</span></li>
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

                <?php include('inc/car-sidebar.php'); ?>




                <div class="col-md-9">
                    <!-- /////////////////////////// -->

                    <div class="row row-cols-1 mb--n30" id="carlist"> </div>
















                    <!-- ////////////////////////////////// -->


                </div>
            </div>
        </div>

    </section>
    <!-- End blog section -->

    <!-- Start shipping section -->
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
    <!-- End shipping section -->
</main>



<script type="text/javascript">
var page_nm = 'carlist';
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



const debouncedload_car_data = debounce(load_car_data, 1000);

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

    debouncedload_car_data();
}

// Initialize slider
updateSlider();
</script>