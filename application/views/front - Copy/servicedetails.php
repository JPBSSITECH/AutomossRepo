<?php
  include('inc/header.php');
?>




<style type="text/css">
   

</style>

    <main class="main__content_wrapper">
        
        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg"style="background-image: url('assets/img/carbg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title mb-25 text-white">Service Details</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a href="<?= base_url()?>" style="color:white;">Home</a></li>
                                <li class="breadcrumb__content--menu__items text-white"><span>Service Details</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start blog section -->
        <section class="blog__section section--padding">
      <!--     <div class="container">
            <div class="row mt-5">
                <div class="col-md-3">
                  <div class="group-form pb-4" style="border-bottom: 2px solid #eee;">
                    <div class="d-flex align-items-center justify-content-between">
                      <label class="title">Budget</label>
                      <button type="button" id="toggleButton2" class="p-0 border-0 text-dark mb-2" style="width: 10%; background-color: transparent; font-size: 20px">
                        <span id="toggleIcon2" class="icon-keyboard_arrow_down"></span>
                      </button>
                    </div>
                     <div id="collapsibleChecks5" class="checks mt-0" style="display: block;">
                      
                     
                      <div class="form-group">
                        <input type="range" class="form-range" id="salaryRange" min="1000" max="100000" step="5000000" oninput="updateRangeValue(this.value)">
                        <span id="rangeValue" style="font-size: 16px;">₹100000</span>
                      </div>

                    </div>

                   
                    <div id="collapsibleChecks2" class="checks mt-0" style="display: block;">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="salaryRange" id="salaryRange1" value="1-5Lakh">
                            <label class="form-check-label" for="salaryRange1">
                                ₹1 Lakh - ₹5 Lakh
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="salaryRange" id="salaryRange2" value="5-15Lakh">
                            <label class="form-check-label" for="salaryRange2">
                                ₹5 Lakh - ₹15 Lakh
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="salaryRange" id="salaryRange3" value="15-50Lakh">
                            <label class="form-check-label" for="salaryRange3">
                                ₹15 Lakh - ₹50 Lakh
                            </label>
                        </div>
                    </div>
                  </div>
                <div class="group-form pb-4" style="border-bottom: 2px solid #eee;">
                    <div class="d-flex align-items-center justify-content-between">
                      <label class="title">Brand</label>
                      <button type="button" id="toggleButton2" class="p-0 border-0 text-dark mb-2" style="width: 10%; background-color: transparent; font-size: 20px">
                        <span id="toggleIcon2" class="icon-keyboard_arrow_down"></span>
                      </button>
                    </div>
                    <div class="form-group" style="position: relative;">
                      <input type="text" class="form-control" id="searchBar" placeholder="Search..." style="width: 100%; padding: 10px; font-size: 16px; padding-left: 30px;">
                    
                      <i class="fas fa-search" style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); font-size: 18px; color: #888;"></i>
                  </div>
                   
                    <div id="collapsibleChecks2" class="checks mt-0" style="display: block;">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="carBrand" id="carBrand1" value="Toyota">
                            <label class="form-check-label" for="carBrand1">
                                Toyota
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="carBrand" id="carBrand2" value="Honda">
                            <label class="form-check-label" for="carBrand2">
                                Honda
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="carBrand" id="carBrand3" value="BMW">
                            <label class="form-check-label" for="carBrand3">
                                BMW
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="carBrand" id="carBrand4" value="Mercedes">
                            <label class="form-check-label" for="carBrand4">
                                Mercedes-Benz
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="carBrand" id="carBrand5" value="Audi">
                            <label class="form-check-label" for="carBrand5">
                                Audi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="carBrand" id="carBrand6" value="Ford">
                            <label class="form-check-label" for="carBrand6">
                                Ford
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="carBrand" id="carBrand7" value="Tesla">
                            <label class="form-check-label" for="carBrand7">
                                Tesla
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="carBrand" id="carBrand8" value="Chevrolet">
                            <label class="form-check-label" for="carBrand8">
                                Chevrolet
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="carBrand" id="carBrand9" value="Hyundai">
                            <label class="form-check-label" for="carBrand9">
                                Hyundai
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="carBrand" id="carBrand10" value="Nissan">
                            <label class="form-check-label" for="carBrand10">
                                Nissan
                            </label>
                        </div>
                    </div>

                  </div>
                     <div class="group-form pb-4" style="border-bottom: 2px solid #eee;">
                    <div class="d-flex align-items-center justify-content-between">
                      <label class="title"></label>
                      <button type="button" id="toggleButton2" class="p-0 border-0 text-dark mb-2" style="width: 10%; background-color: transparent; font-size: 20px">
                        <span id="toggleIcon2" class="icon-keyboard_arrow_down"></span>
                      </button>
                    </div>
                     <div id="collapsibleChecks5" class="checks mt-0" style="display: block;">
                      
                      
                      <div class="form-group">
                        <input type="range" class="form-range" id="salaryRange" min="1000" max="100000" step="5000000" oninput="updateRangeValue(this.value)">
                        <span id="rangeValue" style="font-size: 16px;">₹100000</span>
                      </div>

                    </div>

                    
                    <div id="collapsibleChecks2" class="checks mt-0" style="display: block;">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="salaryRange" id="salaryRange1" value="1-5Lakh">
                            <label class="form-check-label" for="salaryRange1">
                                ₹1 Lakh - ₹5 Lakh
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="salaryRange" id="salaryRange2" value="5-15Lakh">
                            <label class="form-check-label" for="salaryRange2">
                                ₹5 Lakh - ₹15 Lakh
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="salaryRange" id="salaryRange3" value="15-50Lakh">
                            <label class="form-check-label" for="salaryRange3">
                                ₹15 Lakh - ₹50 Lakh
                            </label>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-9">
                    <div class="row">
                    
                      <div class="">
                        <p class="nofi-job" style="font-size: 20px; font-weight: bold;">263 Cars  <span>in India</span>  With Search Options</p>

                    </div>


                        
                    
                        <div class="col-md-6 mt-3">
                        <img src="assets/img/852.jpg" alt="Maruti Dzire" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                           <h2>Maruti Dzire</h2>
                   
                    <h3>₹ 6.79 - 10.14 Lakh*<a href="#" class="btn btn-primary">Get On-Road Price</a></h3>
                   
                    <small class="text-muted">*Ex-Showroom Price in Bhubaneswar</small>
                    <p>
                        25.71 kmpl · 1197 cc · 5 seater
                    </p>
                    <button class="btn btn-danger btn-block">Check December Offers</button>  
                        </div>
                     
                   
                </div>
            </div>
            </div>
        </div> -->
              
        </section>
        

         <!-- Start shipping section -->
        <section class="shipping__section">
            <div class="container">
                <div class="shipping__inner style2 d-flex">
                    <div class="shipping__items style2 d-flex align-items-center">
                        <div class="shipping__icon">  
                            <img src="assets/img/other/shipping1.webp" alt="icon-img">
                        </div>
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Free Shipping</h2>
                            <p class="shipping__content--desc">Free shipping over $100</p>
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">
                        <div class="shipping__icon">  
                            <img src="assets/img/other/shipping2.webp" alt="icon-img">
                        </div>
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Support 24/7</h2>
                            <p class="shipping__content--desc">Contact us 24 hours a day</p>
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">
                        <div class="shipping__icon">  
                            <img src="assets/img/other/shipping3.webp" alt="icon-img">
                        </div>
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">100% Money Back</h2>
                            <p class="shipping__content--desc">You have 30 days to Return</p>
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">
                        <div class="shipping__icon">  
                            <img src="assets/img/other/shipping4.webp" alt="icon-img">
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

     <?php
  include('inc/footer.php');
?>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16