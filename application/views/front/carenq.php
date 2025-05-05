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

    .left_card {
        padding: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }



    .right_card {

        border-radius: 8px;
        /* padding: 20px; */
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border-top: 5px solid red;
        border-bottom: 5px solid red;
        position: sticky;
        top: 20px;

        z-index: 10;
    }

    .car-overview i {
        color: rgb(255 0 0) !important;
    }

    .car-overview strong {
        color: #868686;
        margin-right: 5px;
    }

    .right_card .widget__title {
        padding: 20px 20px;
        font-size: 20px;
    }

    .right_card img {
        padding: 0 20px;
    }

    .right_card .car_name {
        padding: 20px 20px 0 20px;
        text-transform: capitalize;
    }

    .car-overview {
        padding: 0 20px 20px 20px;
    }

    .old__price {
        font-size: 20px;
        padding: 20px 0;
        color: #e60000 !important;
        text-shadow: 0px 4px 3px rgba(0, 0, 0, 0.4), 0px 8px 13px rgba(0, 0, 0, 0.1), 0px 18px 23px rgba(0, 0, 0, 0.1);
    }



    .car-detail {
        position: relative;
        top: 0;
        left: 0;
    }

    .account__login {
        border-radius: 8px;

        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border-top: 5px solid red;
        border-bottom: 5px solid red;
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

    .account__login--input {
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    }

    .text_3d {

        text-shadow: 0 13.36px 8.896px #d8d8d8, 0 -2px 1px #e0e0e0 !important;
        color: #424242 !important;
        text-transform: uppercase;
    }

    .left_card {
        padding: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }



    .right_card {

        border-radius: 8px;
        /* padding: 20px; */
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border-top: 5px solid red;
        border-bottom: 5px solid red;
        position: sticky;
        top: 20px;

        z-index: 10;
    }

    .car-overview i {
        color: rgb(255 0 0) !important;
    }

    .car-overview strong {
        color: #868686;
        margin-right: 5px;
    }

    .right_card .widget__title {
        padding: 20px 20px;
        font-size: 20px;
    }

    .right_card img {
        padding: 0 20px;
    }

    .right_card .car_name {
        padding: 20px 20px 0 20px;
    }

    .car-overview {
        padding: 0 20px 20px 20px;
    }

    .old__price {
        font-size: 20px;
        padding: 20px 0;
        color: #e60000 !important;
        text-shadow: 0px 4px 3px rgba(0, 0, 0, 0.4), 0px 8px 13px rgba(0, 0, 0, 0.1), 0px 18px 23px rgba(0, 0, 0, 0.1);
    }

    .sticky-col {
        position: -webkit-sticky;
        position: sticky;
        top: 20px;

        max-height: 500px;


    }

    .car-detail {
        position: relative;
        top: 0;
        left: 0;
    }

    .account__login {
        border-radius: 8px;

        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        border-top: 5px solid red;
        border-bottom: 5px solid red;
    }
    </style>




    <div class="login__section section--padding">
        <div class="container">

            <div class="login__section--inner">
                <div class="row row-cols-md-2 row-cols-1 d-flex justify-content-center">
                    <div class="col-md-8 sticky-col">
                        <div class="account__login">
                            <div class="account__login--header mb-25">
                                <h2 class="account__login--header__title mb-10">Fill Below Information to continue:
                                </h2>
                            </div>
                            <form method="post">
                                <div class="account__login--inner">
                                    <div class="row">
                                        <?php $nm = (isset($cust_info->fname))?$cust_info->fname.' '.$cust_info->lname:'' ; ?>
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
                                        <textarea style="height:220px;" class="account__login--input" name="description"
                                            placeholder="Enter a brief description" required></textarea>
                                    </label>
                                    <hr
                                        style="border: 0; height: 2px; background: #000; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);">


                                    <div class="d-flex justify-content-center mt-4">
                                        <button type="submit"
                                            class="btn btn-danger btn-lg animated_btn">Continue</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="car-detail right_card">
                            <h2 class="widget__title h3" style="padding: 20px 20px;">Car Details</h2>

                            <img src="<?= !empty($carinfo->thumb) ? $carinfo->thumb : 'https://dev.automoss.in/nocar.png' ?>"
                                alt="Right Side Image" style="max-width: 100%; height: auto; border-radius: 10px;">

                            <h2 class="mt-3 mb-3 car_name"><?=$carinfo->name ?></h2>

                            <div class="row car-overview">
                                <div class="col-md-12 mb-3 d-flex align-items-center">
                                    <i class="fas fa-calendar-alt me-3 text-muted"></i>
                                    <span><strong>Redg. On :&nbsp;</strong> <span
                                            class="product_badge"><?=$carinfo->year_of_registration ?></span></span>
                                </div>
                                <div class="col-md-12 mb-3 d-flex align-items-center">
                                    <i class="fas fa-shield-alt me-3 text-muted"></i>
                                    <span><strong>Insurance:</strong> <span class="product_badge">
                                            <?=$carinfo->insurance ?></span></span>
                                </div>
                                <div class="col-md-12 mb-3 d-flex align-items-center">
                                    <i class="fas fa-tachometer-alt me-3 text-muted"></i>
                                    <span><strong>Km Driven:</strong> <span
                                            class="product_badge"><?=$carinfo->kms_driven ?> </span></span>
                                </div>
                                <div class="col-md-12 mb-3 d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt me-3 text-muted"></i>
                                    <span><strong>RTO:</strong> <span class="product_badge"> <?=$carinfo->rto ?>
                                        </span></span>
                                </div>
                                <div class="col-md-12 mb-3 d-flex align-items-center">
                                    <i class="fas fa-user me-3 text-muted"></i>
                                    <span><strong>Ownership:</strong> <span class="product_badge">
                                            <?=$carinfo->owner_type ?> </span></span>
                                </div>


                              
                              
                              






                            </div>

                            <div class="card-footer">
                                <div class="">
                                    <span class="old__price text-dark"><strong>₹<?=$carinfo->price ?> </strong></span>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>



<script type="text/javascript">
var feature = 'd_drop';
</script>


<?php
    include('inc/footer.php');
 ?>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script type="text/javascript">
<?php
  ///////////////////////////////////////////////////////////
  $err = $this->session->flashdata('error');
  if(!empty($err))
  {
        ?>
$(document).ready(function() {
    Swal.fire("Ohh!", "<?=$err ?>", "warning");
});
<?php
        unset($_SESSION['error']);
   }
  $scs = $this->session->flashdata('success');
  if(!empty($scs))
  {
     ?>
$(document).ready(function() {
    Swal.fire("Great!", "<?=$scs ?>", "success")
        .then((result) => {
            if (result.isConfirmed) {

                window.location.href = "<?=base_url('car') ?>";
            }
        });
});
<?php
    unset($_SESSION['success']); 
  }
  ////////////////////////////////////////////////////////
  ?>
</script>


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