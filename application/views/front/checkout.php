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

.p_0 {
    padding: 0 !important;
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

.main__content_wrapper {
    background: #E0E0E0;
}

.checkout__total--title {
    color: #ffffff;
}

.checkout__sidebar {
    border-bottom-right-radius: 15px;
    background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(255, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 100%, rgba(252, 164, 255, 1) 100%, rgba(0, 0, 0, 1) 100%);
}

.checkout_card {
    background-color: white;
    box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
    border-top-left-radius: 15px;
    border-bottom-right-radius: 15px;
    padding-right: 0;
}

.checkout__main {
    padding: 20px;
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
    transform: scale(1.4);
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

.text-white {
    color: white !important;
}

.total_span_animated {
    background: white;
    border-radius: 30px;
    padding: 5px 10px;
    font-size: 18px;
}

/* Basic styling for the title */

.cart_title {
    font-size: 25px;
    font-weight: bold;
    color: #fff;

    display: inline-block;
    position: relative;
    animation: embossTextShadow 2s ease-in-out infinite;

    text-transform: uppercase;

}

/* 3D Emboss Text Shadow Animation */
@keyframes embossTextShadow {
    0% {
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5),
            -1px -1px 3px rgba(255, 255, 255, 0.8),
            1px 1px 5px rgba(0, 0, 0, 0.4);
    }

    25% {
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6),
            -2px -2px 5px rgba(255, 255, 255, 0.7),
            2px 2px 8px rgba(0, 0, 0, 0.5);
    }

    50% {
        text-shadow: 4px 4px 10px rgba(0, 0, 0, 0.7),
            -4px -4px 10px rgba(255, 255, 255, 0.6),
            4px 4px 12px rgba(0, 0, 0, 0.6);
    }

    75% {
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6),
            -2px -2px 5px rgba(255, 255, 255, 0.7),
            2px 2px 8px rgba(0, 0, 0, 0.5);
    }

    100% {
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5),
            -1px -1px 3px rgba(255, 255, 255, 0.8),
            1px 1px 5px rgba(0, 0, 0, 0.4);
    }
}

.checkout_checkbox--input:checked~.checkout_checkbox--checkmark {
    background-color: #00469f;
    border: 1px solid var(--secondary-color);
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

.checkout__checkbox--input:checked ~ .checkout__checkbox--checkmark {
    background-color: #1d58ed;
    border: 1px solid var(--secondary-color);
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
                        <h1 class="breadcrumb__content--title mb-25 text-white">Checkout</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a href="<?= base_url()?>"
                                    style="color:white;">Home</a></li>
                            <li class="breadcrumb__content--menu__items text-white"><span>Checkout</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->



    <div class="checkout__page--area section--padding">
        <div class="container">




            <form method="post">
                <div class="row checkout_card">
                    <div class="col-lg-8 col-md-6 p_0">
                        <div class="main checkout__main">
                            <div class="account__login--inner">
                                <div class="row">
                                    <?php $nm = (isset($cust_info->fname))?$cust_info->fname.' '.$cust_info->lname:'' ; ?>


                                    <div class="col-md-12">
                                        <input type="text" class="account__login--input" id="searchTextField"
                                            name="shipping_address" placeholder="Enter Your location" required>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="account__login--input" id="cityLat" name="cust_lat"
                                            placeholder="Latitude" required>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="account__login--input" id="cityLng"
                                            placeholder="Longitude" name="cust_lon" required>
                                    </div>

                                    <div class="col-md-3">
                                        <select class="account__login--input" name="city_id" required>
                                            <option value="" disabled selected>Select City</option>
                                            <?php 
                                                                foreach ($city as $ct) {
                                                                    echo '<option value="'.$ct->id.'">'.$ct->name.'</option>';
                                                                }
                                                            ?>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <input type="number" class="account__login--input" placeholder="Zip Code"
                                            name="shipping_zip" required>
                                    </div>







                                    <div class="col-md-6">
                                        <input class="account__login--input" type="text" name="shipping_name"
                                            placeholder="Your Full Name" value="<?=$nm ?>" required>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="account__login--input" type="text"
                                            onkeyup="this.value = this.value.replace(/[^0-9]/g, '');" minlength="10"
                                            maxlength="10" pattern=".{10,10}" name="shipping_phone"
                                            placeholder="Phone Number" value="<?=$cust_info->phone ?>" required>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="account__login--input" type="email"
                                            oninput="this.value = this.value.toLowerCase()" name="shipping_email"
                                            placeholder="Email" value="<?=$cust_info->email ?>" required>
                                    </div>

                                </div>





                                <hr
                                    style="border: 0; height: 2px; background: #000; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);">

                                <!-- <div class="payment-option">
                                            <h3>Payment Option</h3>                                        
                                        </div>
                                        <div class="pay-at-garage">
                                            <label for="pay_at_garage">
                                                <input type="checkbox" checked >
                                                Pay On Delivery
                                            </label>
                                         </div> -->

                                <h5>By Submitting this form you are agreeing to our <a
                                        style="border-bottom: 1px dashed #f00; color:#f00;" target="_bank"
                                        href="<?=base_url() ?>terms">terms and conditions</a> &
                                    <a style="border-bottom: 1px dashed #f00; color:#f00;" target="_bank"
                                        href="<?=base_url() ?>cancellation">Cancelation Policy</a>

                                    .
                                </h5>
                                <br>




                                <div class="d-flex justify-content-center mt-4">

                                    <button type="submit" class="continue_btn"><span>Continue</span>

                                        <div class="liquid"></div>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 checkout__sidebar">
                        <aside class=" sidebar">

                            <div class="checkout__totals">
                                <table class="checkout__total--table">
                                    <tbody class="checkout__total--body">
                                        <tr class="checkout__total--items">
                                            <td class="checkout__total--title text-left">Subtotal </td>
                                            <td class="checkout__total--amount text-right text-white">₹
                                                <?=$cart_total ?></td>
                                        </tr>
                                        <tr class="checkout__total--items">
                                            <td class="checkout__total--title text-left">Platform Fee</td>
                                            <td class="checkout_total--calculated_text text-right text-white">₹
                                                <?=$platform_fee ?></td>
                                        </tr>




                                    </tbody>
                                    <tfoot class="checkout__total--footer">
                                        <tr class="checkout__total--footer__items">
                                            <td class="checkout_total--footertitle checkouttotal--footer_list text-left"
                                                style="color:yellow">
                                                Total </td>

                                            <td
                                                class="checkout_total--footeramount checkouttotal--footer_list text-right">
                                                <span class="total_span_animated">₹ <?=$m_tot ?></span>
                                            </td>
                                        </tr>
                                    </tfoot>








                                </table>
                            </div>
                            <div class="payment__history mb-30 d-flex" style="justify-content: space-between;
    border-top: 1px solid white;
    padding-top: 20px;
    margin-top: 13px;">

                                <div class="d-flex">
                                    <p class="d-flex text-white">Wheels : <span class="wheel_count">
                                            <span class="ribbon">20</span>
                                        </span></p>
                                    <img src="http://localhost/automoss/assets/output-onlinegiftools (4).gif"
                                        class="wheel_img">

                                </div>
                                <div class="checkout__checkbox">
                                    <input class="checkout__checkbox--input" id="checkbox2" type="checkbox"
                                        name="payment_method" value="1" checked="">
                                    <span class="checkout__checkbox--checkmark"></span>
                                    <label class="checkout__checkbox--label text-white" for="checkbox2">
                                        Apply 10 Wheels</label>
                                </div>
                                </div>
                                <div class="payment__history mb-30">
                                    <h3 class="payment__history--title mb-20 cart_title">Payment</h3>
                                    <div class="checkout__checkbox">
                                        <input class="checkout__checkbox--input" id="checkbox2" type="checkbox"
                                            name="payment_method" value="1" checked="">
                                        <span class="checkout__checkbox--checkmark"></span>
                                        <label class="checkout__checkbox--label text-white" for="checkbox2">
                                            Cash On Delivery</label>
                                    </div>
                                </div>
                           
                            <!-- <a href="<?=base_url('thankyou')?>"  type="submit">Proceed</a> -->
                        </aside>
                    </div>

                </div>
            </form>










        </div>
    </div>

























</main>





<?php
  include('inc/footer.php');
?>





<script src="<?= base_url() ?>lokscript.js?v=<?=rand() ?>"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?=g_map_api ?>&libraries=places">
</script>

<script type="text/javascript">
function initialize() {
    var input = document.getElementById('searchTextField');
    var autocomplete = new google.maps.places.Autocomplete(input);
    google.maps.event.addListener(autocomplete, 'place_changed', function() {
        var place = autocomplete.getPlace();
        ////document.getElementById('city2').value = place.name;
        document.getElementById('cityLat').value = place.geometry.location.lat();
        document.getElementById('cityLng').value = place.geometry.location.lng();
        /*alert("This function is working!");
        alert(place.name);
        alert(place.address_components[0].long_name);*/

    });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>