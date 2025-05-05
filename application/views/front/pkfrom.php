<?php
  include('inc/header.php');
?>

<style type="text/css">
    .hidden_div{
        display: none;
    }
</style>

    <main class="main__content_wrapper">
        
        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg"style="background-image: url('<?= base_url() ?>assets/img/carbg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a href="<?= base_url() ?>" style="color: white;">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span style="color: white;">Pakeges</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <div class="login__section section--padding">
            <div class="container">
                
             <div class="login__section--inner">
                <div class="row row-cols-md-2 row-cols-1 d-flex justify-content-center">
                    <div class="col-md-8">
                        <div class="account__login">
                            <div class="account__login--header mb-25">
                                <h2 class="account__login--header__title mb-10">Personal Information</h2>                                       
                            </div>
                            <form method="post">
                                <div class="account__login--inner">
                                    <label for="name">
                                        <input class="account__login--input" type="text" name="Name" placeholder="Enter Your Full Name" required>
                                    </label>
                                    <label for="email">
                                        <input class="account__login--input" name="email"  placeholder="Enter Your Email Address" type="email" required>
                                    </label>
                                    <label for="phone">
                                        <input class="account__login--input" type="tel" name="phone"  placeholder="Enter Your Phone Number" required>
                                    </label>
                                    <div class="d-flex justify-content-between mt-4">
                                        <label for="car">
                                            <select class="account__login--input" name="car" required>
                                                <option value="" disabled selected>Select Your Car</option>
                                                <option value="car1">Suzuki</option>
                                                <option value="car2">TATA</option>
                                                <option value="car3">Tesla Model S</option>
                                            </select>
                                        </label>
                                        <label for="car_model">
                                            <select class="account__login--input" name="car_model" required>
                                                <option value="" disabled selected>Select Car Model</option>
                                                <option value="model1">Tata Harrier</option>
                                                <option value="model2">Suzuki Swift</option>
                                                <option value="model3">Tesla Model X</option>
                                            </select>
                                        </label>
                                        <label for="car_fuel">
                                            <select class="account__login--input" name="car_fuel" required>
                                                <option value="" disabled selected>Select Car Fuel Type</option>
                                                <option value="petrol">Petrol</option>
                                                <option value="diesel">Diesel</option>
                                                <option value="electric">Electric</option>
                                                <option value="hybrid">Hybrid</option>
                                            </select>
                                        </label>
                                    </div>
                                    <label for="description">
                                        <textarea class="account__login--input" name="description"  placeholder="Enter a brief description" required></textarea>
                                    </label>
                                   <hr style="border: 0; height: 2px; background: #000; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);">

                                    <div class="payment-option">
                                        <h3>Payment Option</h3>
                                        
                                    </div>
                                    <div class="pay-at-garage">
                                        <label for="pay_at_garage">
                                            <input type="checkbox" name="pay_at_garage" id="pay_at_garage">
                                            Pay at Garage
                                        </label>
                                     </div>
                                    <div class="d-flex justify-content-center mt-4">
                                        <button type="submit" class="btn btn-danger btn-lg">Continue</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <h3>Pakeges Details</h3>
                        <img src="assets/img/new.jpg" alt="Right Side Image" style="max-width: 100%; height: auto; border-radius: 10px;">
                        <div class="car-details mt-4">
                         <ul>
                            <li><strong>Basic Service Package</strong>
                                <ul>
                                    <li><strong>Price:</strong> ₹5,000</li>
                                    <li><strong>Service Duration:</strong> 6 Months / 10,000 km</li>
                                    <li><strong>Includes:</strong>
                                        <ul>
                                            <li>Engine Oil Change</li>
                                            <li>Filter Replacement (Oil, Air, Cabin)</li>
                                            <li>Tire Check and Rotation</li>
                                            <li>Brake Inspection</li>
                                            <li>Battery Health Check</li>
                                            <li>Fluid Top-up (Coolant, Brake Fluid)</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                          </ul>
                        </div>
                    </div>
               </div>
            </div>              
        </div>     
    </div>
</main>

 <?php
    include('inc/footer.php');
 ?>



 