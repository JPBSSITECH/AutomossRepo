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
                                <li class="breadcrumb__content--menu__items"><span style="color: white;">From</span></li>
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
                                    <label for="description">
                                        <textarea class="account__login--input" name="description"  placeholder="Enter a brief description" required></textarea>
                                    </label>
                                    <div class="d-flex justify-content-center mt-4">
                                        <button type="submit" class="btn btn-danger btn-lg">Continue</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <h3>Car Details</h3>
                        <img src="assets/img/852.jpg" alt="Right Side Image" style="max-width: 100%; height: auto; border-radius: 10px;">
                         <div class="car-details mt-4">
                        <ul>
                            <li><strong>Model:</strong> Example Model X</li>
                            <li><strong>Year:</strong> 2024</li>
                            <li><strong>Engine:</strong> 3.5L V6</li>
                            <li><strong>Color:</strong> Midnight Blue</li>
                            <li><strong>Price:</strong>₹45,0000</li>
                            <li><strong>Fuel Efficiency:</strong> 25 MPG (city), 35 MPG (highway)</li>
                            <li><strong>Features:</strong> Leather seats, Navigation system, Sunroof, Bluetooth connectivity</li>
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


 