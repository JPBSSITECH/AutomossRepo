<?php
  include('inc/header.php');
?>


    <main class="main__content_wrapper">
        
        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg"style="background-image: url('<?= base_url() ?>assets/img/carbg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a href="<?= base_url() ?>" style="color: white;">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span style="color: white;">Account</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start login section  -->
        <div class="login__section section--padding">
            <div class="container">
                <form action="#">
                    <div class="login__section--inner d-flex align-items-center justify-content-center">
                        <div class="row">
                             <div class="col">
                                <div class="account__login register">
                                    <div class="account__login--header mb-25">
                                        <h2 class="account__login--header__title mb-10">Create an Account</h2>
                                        <p class="account__login--header__desc">Register here if you are a new customer</p>
                                    </div>
                                    <div class="account__login--inner">
                                        <label>
                                            <input class="account__login--input" placeholder="Username" type="text">
                                        </label>
                                        <label>
                                            <input class="account__login--input" placeholder="Email Addres" type="email">
                                        </label>
                                        <label>
                                            <input class="account__login--input" placeholder="Password" type="password">
                                        </label>
                                        <label>
                                            <input class="account__login--input" placeholder="Confirm Password" type="password">
                                        </label>
                                        <button class="account__login--btn primary__btn mb-10" type="submit">Submit & Register</button>
                                        <div class="account__login--remember position__relative">
                                            <input class="checkout__checkbox--input" id="check2" type="checkbox">
                                            <span class="checkout__checkbox--checkmark"></span>
                                            <label class="checkout__checkbox--label login__remember--label" for="check2">
                                                I have read and agree to the terms & conditions</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </form>
            </div>     
        </div>
    </main>
 <?php
    include('inc/footer.php');
 ?>