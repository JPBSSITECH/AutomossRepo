<?php    
    
    $this->load->view('customer/inc/headerv3');
?>

<style type="text/css">
.price-highlight {
    font-size: 1.5rem;
    font-weight: bold;
    color: #ffffff;
    background: #d9ff05;
    padding: 5px 10px;
    border-radius: 15px;
    background: linear-gradient(to bottom, black, red);
}

.features li i {
    margin-right: 10px;
}

.spl_list ul li.gx::before {
    font-family: "Font Awesome 5 Free";
    content: "\f058";
    margin-right: 10px;
    color: #c23200;
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

.title_3d {
    text-shadow: 0 13.36px 8.896px #482c2c, 0 -2px 1px #ffffff;
    text-transform: uppercase;

    color: #6b4040;
}

.card_wrapper {
    width: 100%;
    background: #fff;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important;
    height: auto;
}


.card_wrapper .card-area {
    overflow: hidden;
}

.card_wrapper .card-area .cards {
    display: flex;
    width: 300%;
}





.card_wrapper .row .price-details {
    margin: 20px 0;
    /* text-align: center; */
    padding-bottom: 25px;
    border-bottom: 1px solid #e6e6e6;
}

.listing-details li {
    display: flex;
    gap: 10px;
    font-size: 12px;
    align-items: center;
}

.price-details .price {
    font-size: 65px;
    font-weight: 600;
    position: relative;
    font-family: 'Noto Sans', sans-serif;
}

.price-details .price::before,
.price-details .price::after {
    position: absolute;
    font-weight: 400;
    font-family: "Poppins", sans-serif;
}

.price-details .price::before {
    content: "$";
    left: -13px;
    top: 17px;
    font-size: 20px;
}

.price-details .price::after {
    content: "/mon";
    right: -33px;
    bottom: 17px;
    font-size: 13px;
}

.price-details p {
    font-size: 18px;
    margin-top: 5px;
}

.row .features li {
    display: flex;
    font-size: 15px;
    list-style: none;
    margin-bottom: 10px;
    align-items: center;
}

.features li i {
    background: linear-gradient(#D5A3FF 0%, #77A5F8 100%);
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.features li span {
    margin-left: 10px;
}

.wrapper button {
    width: 100%;
    border-radius: 25px;
    border: none;
    outline: none;
    height: 50px;
    font-size: 18px;
    color: #fff;
    cursor: pointer;
    margin-top: 20px;
    background: linear-gradient(145deg, #D5A3FF 0%, #77A5F8 100%);
    transition: transform 0.3s ease;
}

.wrapper button:hover {
    transform: scale(0.98);
}

section {
    text-align: justify !important;
    text-justify: distribute-all-lines;
    font-size: 0 !important;
}

section>* {
    text-align: left;
    font-size: medium;
}

section:after {
    content: '';
    display: inline-block;
    width: 100%;
}

section>div {
    vertical-align: top;
    display: inline-block;

    width: 100%;
    margin-bottom: 1.9%;
}

@media only screen and (max-width: 529px) {
    section>div {
        width: 100%;
        margin-bottom: 1.9%;
    }
}

section>div.all-plans {
    width: 100%;
    margin-bottom: 1.9%;
}

.price-package {
    background: rgb(255, 84, 84);
    color: #fff;
    padding-top: 25px;
    margin-bottom: 10px;
    text-align: center;
    -moz-border-radius-topleft: 10px;
    -moz-border-radius-topright: 10px;
    -webkit-border-top-left-radius: 10px;
    -webkit-border-top-right-radius: 10px;
    -moz-border-radius-bottomleft: 10px;
    -moz-border-radius-bottomright: 10px;
    -webkit-border-bottom-left-radius: 10px;
    -webkit-border-bottom-right-radius: 10px;
}

.price-package .package-name {
    font-size: 1.4rem;
}

@media only screen and (max-width: 529px) {
    .price-package {
        padding-top: 1rem;
    }
}

.price-package .package-price {
    -moz-border-radius-topleft: 10px;
    -moz-border-radius-topright: 10px;
    -webkit-border-top-left-radius: 10px;
    -webkit-border-top-right-radius: 10px;
    -moz-border-radius-bottomleft: 10px;
    -moz-border-radius-bottomright: 10px;
    -webkit-border-bottom-left-radius: 10px;
    -webkit-border-bottom-right-radius: 10px;
    margin-top: 25px;
}

@media only screen and (max-width: 529px) {
    .price-package .package-price {
        margin-top: 1rem;
    }
}

.price-package .package-price .price {
    position: relative;
    display: inline-block;
}

.price-package .package-price .price sup {
    font-size: 1.6rem;
    position: absolute;
    top: 6px;
    left: -12px;
}

.price-package .package-price .price span {
    font-size: 3.5rem;
}

.price-package .package-price .term {
    display: inline-block;
    vertical-align: top;
    text-align: left;
    padding-top: 6px;
}

.price-package .package-price .term sup {
    font-size: 1.7rem;
    display: block;
    padding: 0;
}

.price-package .package-price .term span {
    font-size: 1rem;
    display: block;
    margin-top: -3px;
}

.price-package .package-features {
    -moz-border-radius-topleft: 10px;
    -moz-border-radius-topright: 10px;
    -webkit-border-top-left-radius: 10px;
    -webkit-border-top-right-radius: 10px;
    -moz-border-radius-bottomleft: 10px;
    -moz-border-radius-bottomright: 10px;
    -webkit-border-bottom-left-radius: 10px;
    -webkit-border-bottom-right-radius: 10px;
    margin-top: 16.666666666667px;
}

.price-package .package-features ul {
    font-size: 1.6rem;
    margin: 0;
    padding: 0;
    list-style: none;
}

.price-package .package-features ul li {
    margin: 20px auto;
    padding: 0;
}

@media only screen and (max-width: 529px) {
    .price-package .package-features ul li {
        margin: 10px auto;
    }
}

.price-package .sign-up {
    -moz-border-radius-topleft: 10px;
    -moz-border-radius-topright: 10px;
    -webkit-border-top-left-radius: 10px;
    -webkit-border-top-right-radius: 10px;
    -moz-border-radius-bottomleft: 10px;
    -moz-border-radius-bottomright: 10px;
    -webkit-border-bottom-left-radius: 10px;
    -webkit-border-bottom-right-radius: 10px;
    padding: 16.666666666667px 0;
    margin-top: 16.666666666667px;
    width: 100%;
    outline: none;
    border: none;
    cursor: pointer;
}

.price-package .package-arrow {
    width: 0;
    height: 0;
    margin: 0 auto 12.5px;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-top: 8px solid;
}

.all-plans .all-plans-features {
    display: table;
    width: 100%;
}

.all-plans .all-plans-features text {
    display: table-cell;
    font-size: 1.6rem;
    vertical-align: middle;
    width: 33%;
}

@media only screen and (max-width: 529px) {
    .all-plans .all-plans-features text {
        display: block;
        margin: 10px auto;
    }
}

.special .price-package .package-price {
    background-color: rgb(255, 145, 145);
    color: white;
}

.special .price-package .package-features {
    background-color: #efe9fc;
    color: rgb(255, 84, 84);
}

.special .price-package .sign-up {
    background-color: rgb(255, 84, 84);
    color: white;
    transition: background-color 0.5s ease;
}

.special .price-package .sign-up:hover {
    background-color: rgb(255, 145, 145);
}

.special .price-package .sign-up:active {
    background-color: rgb(252, 233, 233);
}

.special .price-package .package-price .package-arrow {
    border-top-color: rgb(255, 84, 84);
}

.special .price-package .package-features .package-arrow {
    border-top-color: rgb(255, 145, 145);
}

.special .price-package .sign-up .package-arrow {
    border-top-color: rgb(252, 233, 233);
}

.column_price {
    display: flex;
    position: relative;
    min-width: 0;
    word-wrap: break-word;
    background-color: #e4e4e4cc;

    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: 12px;
    padding: 5px 10px;
    gap: 10px;
    justify-content: center;
    margin: 3px 0;
}

.column_price span:nth-of-type(1) {

    color: blue;
    font-size: 14px;
    font-weight: bold;
}

.column_price span:nth-of-type(2) {

    color: red;
    font-size: 11px;
    font-weight: bold;
}
</style>








<div class="row mb-5">
    <div class="col-12 p-3  d-flex justify-content-between align-items-center" style="background: #e2e2e2c2;
    border-radius: 10px;">
        <h2 class=" pl_0 title_3d">Package Plans</h2>
        <a class="btn btn-danger btn-lg animated_btn" href="<?= base_url('customer/index') ?>">Dashboard</a>
    </div>
</div>

<!-- ////////////////////////////// -->
<div class="alert alert-warning" role="alert">
    YOU ARE in <span class="fw-bold"><?=$mypackage->name ?></span> plan . You can add up to <span
        class="fw-bold"><?=$mypackage->listing_count ?></span> cars.
</div>

<div class="row mt-4">
    <?php
                                    foreach ($packs as $dp) {                                   
                                      $ggg = explode("\n", $dp->info);                                  
                                  ?>


    <div class="col-md-4 mb-4">
        <section>

            <div class="special">
                <div class="price-package">
                    <div class="package-name">
                        <h2><?= $dp->name ?></h2>
                    </div>
                    <div class="package-price">
                        <div class="package-arrow"></div>
                        <div class="price">

                            <span>₹<?= $dp->monthly_price ?></span>
                        </div>
                        <div class="term">

                            <span>/per month</span>
                        </div>




                        <div class="package-features">
                            <div class="package-arrow"></div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="column_price">
                                            <span>₹<?= $dp->quaterly_price ?></span>
                                            <span>/per Quarter</span>
                                        </div>

                                    </div>
                                    <div class="col-md-12">

                                        <div class="column_price">
                                            <span>₹<?= $dp->halfyearly_price ?></span>
                                            <span>/per Halfyear</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">

                                        <div class="column_price">
                                            <span>₹<?= $dp->yearly_price ?></span>
                                            <span>/per Year</span>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <ul>
                                <?php
                foreach ($ggg as $kx) {
                    echo '<li class="mb-3 gx"><i class="fas fa-check"></i>' . $kx . '</li>';
                }
                ?>
                                <button class="sign-up">
                                    <h3>Choose plan</h3>
                                </button>
                        </div>

                    </div>

                </div>

            </div>
        </section>
    </div>

    <?php
                                    }
                                  ?>
</div>



















<?php
    $this->load->view('customer/inc/footerv3');
?>