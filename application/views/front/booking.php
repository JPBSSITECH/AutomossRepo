<?php
  include('inc/header.php');
?>

<style type="text/css">
.hidden_div {
    display: none;
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
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a href="<?= base_url() ?>"
                                    style="color: white;">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span style="color: white;">Pakeges</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->





    <style type="text/css">
    .spl_list ul li {
        padding-bottom: 10px;
        font-size: 16px;
    }

    .spl_list ul li::before {
        font-family: "Font Awesome 5 Free";
        content: "\f058";
        margin-right: 10px;
        color: #c23200;
    }

    .animated_btn {
        position: relative;
        overflow: hidden;
        padding: 10px 20px;
        font-size: 18px;
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


    .account__login {
        border-radius: 8px;

        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border-top: 5px solid red;
        border-bottom: 5px solid red;
    }

    .account__login--input {
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    }

    .account__login--label {
        font-weight: 600;
    }

    .text_3d {

        text-shadow: 0 13.36px 8.896px #d8d8d8, 0 -2px 1px #e0e0e0 !important;
        color: #424242 !important;
        text-transform: uppercase;
    }

    /* Style for the title */
    .sections__headings--maintitle {
        position: relative;
        font-size: 2.5rem;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        /* text-shadow: 0px 4px 3px rgba(0, 0, 0, 0.4), 0px 8px 13px rgba(0, 0, 0, 0.1), 0px 18px 23px rgba(0, 0, 0, 0.1); */
        display: inline-block;
        opacity: 0;
        animation: fadeIn 1s ease-out forwards;

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

    .sections__headings--maintitle::after {
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


    .sections__headings--maintitle:hover::after {
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

        height: 2px;
        background-color: rgb(255 0 0);
        transition: width 0.3s ease-in-out;

    }

    .product-title:hover::after {
        width: 100%;

    }

    .border-top-0 {
        border-top: 0 !important;
    }

    .border-bottom-0 {
        border-bottom: 0 !important;
    }

    .border-none {
        border: none !important;
    }

    .car-details h3 {
        font-size: 2rem;
        line-height: 3rem;
        margin-bottom: 10px;
    }

    .car-details p {
        color: grey;
    }

    .account__login--input {
        font-size: 1.3rem;
    }

    .account__login--textarea {
        font-size: 1.3rem;
        width: 100%;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        border: 1px solid var(--border-color);
        border-radius: 0.5rem;
        padding: 0 1.5rem;
        margin-bottom: 1.5rem;
    }

    .gradient_bg {
        border-bottom-right-radius: 15px;
        background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(255, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 100%, rgba(252, 164, 255, 1) 100%, rgba(0, 0, 0, 1) 100%);
    }

    .spl_list ul li {
        list-style: none;

        padding-left: 25px;

        background: url('http://localhost/automoss_web/assets/verified.gif') no-repeat left center;

        background-size: 20px 20px;
        margin-bottom: 10px;
        color: grey;
    }
    </style>




    <div class="login__section section--padding">
        <div class="container">

            <div class="login__section--inner">
                <div class="row row-cols-md-2 row-cols-1 d-flex justify-content-center">
                    <div class="col-md-8">
                        <div class="account__login">
                            <div class="account__login--header mb-25">
                                <h2 class="text_3d">Fill Below Information to continue:
                                </h2>
                            </div>
                            <form method="post">
                                <div class="account__login--inner">
                                    <div class="row">
                                        <?php $nm = (isset($cust_info->fname))?$cust_info->fname.' '.$cust_info->lname:'' ; ?>

                                        <div class="col-md-6">
                                            <input type="date" class="account__login--input" name="scedule_date"
                                                placeholder="Date" min="<?=date('Y-m-d') ?>" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="time" class="account__login--input" name="scedule_time"
                                                placeholder="Time" required>
                                        </div>







                                        <div class="col-md-6">
                                            <input type="text" class="account__login--input" id="searchTextField"
                                                name="cust_address" placeholder="Enter Your location" required>
                                        </div>
                                        <div class="col-md-3">

                                            <input type="text" class="account__login--input" id="cityLat"
                                                name="cust_lat" placeholder="Latitude" required>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="account__login--input" id="cityLng"
                                                placeholder="Longitude" name="cust_lon" required>
                                        </div>











                                        <div class="col-md-4">
                                            <select id="manufacturer" class="account__login--input"
                                                name="car_manufacturer_id" required>
                                                <option value="" disabled selected>Select Car</option>
                                                <?php 
                                                            // foreach ($car_man as $cm) {
                                                            //     echo '<option value="'.$cm->id.'">'.$cm->name.'</option>';
                                                            // }
                                                        ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <select id="model" class="account__login--input" name="car_model_id"
                                                required>
                                                <option value="" disabled selected>Car Model</option>
                                                <?php 
                                                            // foreach ($car_model as $com) {
                                                            //     echo '<option value="'.$com->id.'">'.$com->name.'</option>';
                                                            // }
                                                        ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="account__login--input" name="car_fuel_type_id" required>
                                                <option value="" disabled selected>Fuel Type</option>
                                                <?php 
                                                            foreach ($fuel_type as $cft) {
                                                                $msl = '';
                                                                if($cust_info->car_fuel_type_id==$cft->id){
                                                                    $msl = 'selected';
                                                                }
                                                                echo '<option '.$msl.'  value="'.$cft->id.'">'.$cft->name.'</option>';
                                                            }
                                                        ?>
                                            </select>
                                        </div>




                                        <div class="col-md-6">
                                            <input class="account__login--input" type="text" name="cust_name"
                                                placeholder="Your Full Name" value="<?=$nm ?>" required>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="account__login--input" type="text" minlength="10"
                                                maxlength="10" onkeyup="this.value = this.value.replace(/[^0-9]/g, '');"
                                                name="cust_phone" placeholder="Phone Number"
                                                value="<?=$cust_info->phone ?>" required>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="account__login--input" type="email"
                                                oninput="this.value = this.value.toLowerCase()" name="cust_email"
                                                placeholder="Email" value="<?=$cust_info->email ?>" required>
                                        </div>

                                    </div>




                                    <label for="description">
                                        <textarea class="account__login--input" name="description"
                                            placeholder="Enter a brief description" required></textarea>
                                    </label>

                                    <?php 
                                        if($pkg_info->is_homeservice==1){
                                    ?>
                                    <label for="hm_srv">
                                        <input type="checkbox" name="is_homeservice" value="1">
                                        Avail Home Service
                                    </label>
                                    <?php 
                                        }
                                    ?>






                                    <hr
                                        style="border: 0; height: 2px; background: #000; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);">

                                    <div class="payment-option">
                                        <h3>Payment Option</h3>
                                    </div>
                                    <!-- <div class="pay-at-garage">
                                        <label for="pay_at_garage">
                                            <input type="checkbox" checked name="payment_method" value="PAG" >
                                            Pay at Garage
                                        </label>
                                     </div> -->
                                    <div class="d-flex justify-content-center mt-4">
                                        <button type="submit"
                                            class="btn btn-danger btn-lg animated_btn">Continue</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">

                        <aside class="checkout__sidebar sidebar border-radius-10">

                            <div class="checkout__total account__login border-bottom-0 gradient_bg">
                                <table class="checkout__total--table">
                                    <tbody class="checkout__total--body">
                                        <tr class="checkout__total--items">
                                            <td class="checkout__total--title text-left text-white">Subtotal </td>
                                            <td class="checkout__total--amount text-right text-white">₹
                                                <?=@$cart_total ?></td>
                                        </tr>
                                        <tr class="checkout__total--items">
                                            <td class="checkout__total--title text-left text-white">Platform Fee</td>
                                            <td class="checkout__total--calculated__text text-right text-white">₹
                                                <?=@$platform_fee ?></td>
                                        </tr>
                                        <tr class="checkout__total--items">
                                            <td class="checkout__total--title text-left text-white">GST</td>
                                            <td class="checkout__total--calculated__text text-right text-white">₹
                                                <?=@$gst ?></td>
                                        </tr>




                                    </tbody>
                                    <tfoot class="checkout__total--footer">
                                        <tr class="checkout__total--footer__items">
                                            <td class="checkout__total--footer__title checkout__total--footer__list text-left"
                                                style="color: yellow;">
                                                Total </td>
                                            <td
                                                class="checkout__total--footer__amount checkout__total--footer__list text-right">
                                                <span style="background: white;padding: 0 10px;border-radius: 10px;"> ₹
                                                    <?=@$m_tot ?></span>
                                            </td>
                                        </tr>
                                    </tfoot>








                                </table>
                            </div>
                            <div class="account__login payment__history mb-30 border-none gradient_bg">
                                <div class="sections__headings mb-30 text-center ">
                                    <h3 class="sections__headings--maintitle pl_0 text-white">Payment</h3>
                                </div>
                                <div class="checkout__checkbox">
                                    <input class="checkout__checkbox--input" id="checkbox2" type="checkbox"
                                        name="payment_method" value="PAG" checked="">
                                        <span class="checkout__checkbox--checkmark" style="background: #2000a1;"></span>
                                    <label class="checkout__checkbox--label text-white" for="checkbox2">
                                        Pay at Garage</label>
                                </div>
                            </div>
                            <!-- <a href="<?=base_url('thankyou')?>"  type="submit">Proceed</a> -->



                            <div class="account__login payment__history mb-30 border-top-0">
                                <div class="sections__headings mb-30 text-center ">
                                    <h2 class="sections__headings--maintitle pl_0">Package Details</h2>
                                </div>
                            <img src="<?=$pkg_info->thumb ?>" alt="Right Side Image"
                            style="max-width: 100%; height: auto; border-radius: 10px;">
                            <div class="car-details mt-4 spl_list">
                                <h3><strong><?=$pkg_info->name ?></strong></h3>
                                <p style="line-height: 80%;text-align: justify;"><?=$pkg_info->short_info ?></p>

                                <?=$pkg_info->info ?>

                            </div>


                        </aside>






                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



<script type="text/javascript">
var feature = 'd_drop';

var d_drop_id = <?=$cust_info->car_manufacturer_id ? (int)$mydata->car_manufacturer_id : 0 ?>;
var scnd_drop_id = <?=$cust_info->car_model_id ? (int)$mydata->car_model_id : 0 ?>;
</script>

<?php
    include('inc/footer.php');
 ?>
<!-- <script src="<?= base_url() ?>lokscript.js?v=<?=rand() ?>"></script>  -->

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