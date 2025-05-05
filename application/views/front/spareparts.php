<?php
  include('inc/header.php');
?>

<script src="https://kit.fontawesome.com/7948284983.js" crossorigin="anonymous"></script> 


<style type="text/css">
   .spl_list ul li{
        padding-bottom: 10px; font-size: 16px; width: 48%; float: left;
   }
   .spl_list ul li::before{
       font-family: "Font Awesome 5 Free";
        content: "\f058"; margin-right: 10px; color: #c23200;
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

.button_group {
    position: absolute;
    /* top: 115px; */

    top: -16px;
    left: 47px;
    display: flex
;
    gap: 20px;

}

.span_font 
{
    color: #000000;
    background: #dfff04;
    padding: 0 10px;
    border-radius: 10px;
    font-weight: 600;
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
    padding: 5px 10px;
    background-color: #ffd247;
    color: #000000;
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

.last {
    position: absolute;
    top: 10px;
    right: 10px;
    width: auto;
    padding: 9px;
    z-index: 1;
}
</style>


    <main class="main__content_wrapper">
        
        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg"style="background-image: url('<?=base_url() ?>assets/img/carbg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title mb-25 text-white">Spare Parts</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a href="<?= base_url()?>" style="color:white;">Home</a></li>
                                <li class="breadcrumb__content--menu__items text-white"><span>Spare Parts</span></li>
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



           <div class="col-md-3" > 
           <div class="py-4 box_shodow border_top" style="border: 1px solid #ccc; padding: 20px;">
           <h2 class="widget__title h3">Choose Category</h2>

                          <?php
                            foreach ($x as $dd) {
                                echo "<div style='margin: 8px 0; font-weight: bold; font-size: 16px; color: #333;' class='widget_menu'>
                                        <input type='checkbox' name='categories[]' value='" . $dd->id . "' style='margin-right: 8px; accent-color: red;'> 
                                        " . $dd->name . "
                                      </div>"; // Parent category with red checkbox

                                if (!empty($dd->child)) {
                                    //echo "<ul style='margin-left: 17px; padding-left: 0; list-style: none;'>"; // Subcategories
                                    foreach ($dd->child as $sub) {
                                        echo "

                                            <div style='margin: 8px 0; font-size: 16px; color: #333;'>
                                                    <input type='checkbox' name='categories[]' value='" . $sub->id . "' style='margin-right: 8px; accent-color: red;'> 
                                                        " . $sub->name . "
                                            </div>

                                      ";
                                    }
                                    
                                }
                            }
                            ?>
                </div>



                <div class="group-form mt-4 py-4 box_shodow border_top"
                        style="border: 1px solid #ccc; padding: 20px;">
                        <h2 class="widget__title h3">Price Range</h2>
                    <!-- <input type="range" id="price-range" class="form-control-range" min="0" max="5000" step="50" value="0" oninput="updatePriceValue(this.value)">
                    <div class="d-flex justify-content-between">
                        <span id="min-price">0</span>
                        <span id="max-price">5000</span>
                    </div>
                    <div class="mt-2">
                        <p>Selected Price: <span id="selected-price">0</span></p>
                    </div> -->

 
 

                    <div class="range-slider">
                        <div class="slider-track"></div>
                        <div class="slider-range" id="sliderRange"></div>
                        <input type="range" id="minRange" min="0" max="100000" step="1000" value="0" oninput="updateSlider()">
                        <input type="range" id="maxRange" min="0" max="100000" step="1000" value="25000" oninput="updateSlider()">
                    </div>
                    <p>Range: ₹<span id="minValue">0</span> - ₹<span id="maxValue">25,000</span></p>



                </div>


                <div class="py-4 mt-4 box_shodow border_top" style="border: 1px solid #ccc; padding: 20px;">
                        <h2 class="widget__title h3">Choose By Brands</h2>
                        <ul class="widget__form--check">
                   <?php
                        foreach ($bb as $dd) {
                     ?>
                     
                     
                    <div class="form-check animated_form_check">
                      <input class="form-check-input animated_checkbox" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        <?=$dd->name ?>
                      </label>
                    </div>
                     
                      <?php
                        }
                     ?>
                    </ul>
                </div>






                <div class="py-4 mt-4 box_shodow border_top" style="border: 1px solid #ccc; padding: 20px;">
                <h2 class="widget__title h3">Choose By Cars</h2>
                   <ul class="widget__form--check">
                    <?php
                        foreach ($m as $dd) {
                     ?>
                     
                     
                     <div class="form-check animated_form_check">
                      <input class="form-check-input animated_checkbox" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        <?=$dd->name ?>
                      </label>
                    </div>
                     
                      <?php
                        }
                     ?>
                    </ul>
                </div>


                <div class="py-4 mt-4 box_shodow border_top" style="border: 1px solid #ccc; padding: 20px;">
                <h2 class="widget__title h3">Choose By Fuel Types</h2>
                   <ul class="widget__form--check">
                   <?php
                        foreach ($ff as $dd) {
                     ?>
                     
                     
                     <div class="form-check animated_form_check">
                      <input class="form-check-input animated_checkbox" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        <?=$dd->name ?>
                      </label>
                    </div>
                     
                      <?php
                        }
                     ?>
                    </ul>
                </div>








            </div>





            <div class="col-md-9">
                
                

                <div class="row mb--n30" id="productlist"></div>


 
                 

               

            </div>
        </div>
    </div>
</section>


 
    </main>


    <script type="text/javascript">
        var page_nm = 'spareparts';
        var incart = <?= isset($cur_cart_prod) ? json_encode($cur_cart_prod) : '[]'; ?>;
        if (!Array.isArray(incart)) {
            incart = []; // Ensure incart is always an array
        }
        console.log("Incart Data:", incart);
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

        load_spareparts_data();
    }

    // Initialize slider
    updateSlider();
</script>
 
 
