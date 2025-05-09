<?php
  include('inc/header.php');
?>

 <style>
       .product__card--price {
    display: flex;
    flex-direction: column;
}

.product__card--price span {
    margin: 5px 0;
}

.product__card--price .current__price,
.product__card--price .old__price {
    font-weight: bold;
}
.single__product--action {
    display: flex;
    flex-direction: column; /* Make sure the flex items are aligned vertically */
    justify-content: flex-end; /* Align the content to the bottom */
    height: 100%; /* Ensure the container takes up the full height */
}
    </style>

    <main class="main__content_wrapper">



        <!-- Start slider section -->
        <section class="hero__slider--section">
            <div class="slider__thumbnail--style5 position-relative">
                <img class="slider__thumbnail--img__style5" src="assets/img/0.jpg" alt="slider-img">
                <div class="hero__content--style5 text-center">
                   <!--  <h2 class="hero__content--style5__title h1"> <span style="color: pink;">Comes Width The</span> 
    <br> <span class="text__secondary">Ultimate Protection</span></h2> -->
                </div>
                <!-- Start search filter area -->
                <div class="search__filter--section search__filter--style5">
                    <div class="container">
                        <div class="section__heading style2 text-center mb-30">
                           <!--  <h2 class="section__heading--maintitle" style="color:pink;">Search by Vehicle</h2>
                            <p class="section__heading--desc" style="color:palegoldenrod;">Filter your results by entering your Vehicle to
                                ensure you find the parts that fit.</p> -->
                        </div>
                        <div class="search__filter--inner style5">
                            <form class="search__filter--form__style2 d-flex" action="#">
                                <div class="search__filter--select select search__filter--width">
                                    <select class="search__filter--select__field">
                                        <option selected="" value="1"> Your Location</option>
                                        <option value="2">Bhubaneswar </option>
                                        <option value="3">Balasore </option>
                                        <option value="4">Cuttack </option>
                                        <option value="5">Puri </option>
                                    </select>
                                </div>
                                <div class="search__filter--select select search__filter--width">
                                    <select class="search__filter--select__field">
                                        <option selected="" value="1">Select Cars</option>
                                        <option value="2">Toyota  </option>
                                        <option value="3">Suzuki </option>
                                        <option value="4">Tata  </option>
                                        <option value="5">Honda  </option>

                                    </select>
                                </div>
                                <div class="search__filter--select select search__filter--width">
                                    <select class="search__filter--select__field">
                                        <option selected="" value="1">Choose Model</option>
                                        <option value="2">Swift </option>
                                        <option value="3">WagNor </option>
                                        <option value="4">Harrier</option>
                                        <option value="5">Fortuner </option>
                                        <option value="6">Nexon </option>

                                    </select>
                                </div>
                                <div class="search__filter--select select search__filter--width">
                                    <select class="search__filter--select__field">
                                        <option selected="" value="1">Select Fuel Type</option>
                                        <option value="2">Petrol </option>
                                        <option value="3">Cng </option>
                                        <option value="4">Disel </option>
                                    </select>
                                </div>
                                <div class="search__filter--select search__filter--width">

                                    <input type="tel" id="phone" name="phone" class="search__filter--select__field" placeholder="Enter number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                                </div>

                                <div class="search__filter--width">
                                    <button class="search__filter--btn primary__btn" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End search filter area -->
            </div>  
                
        </section>
        <!-- End slider section -->

         <!-- Start categories section -->
         <section class="categories__section section--padding">
            <div class="container">
                <div class="section__heading border-bottom mb-30">
                    <h2 class="section__heading--maintitle">Top <span>Car Service in Bhubaneswar</span></h2>
                </div>
                <div class="categories__inner--style3 d-flex">
                    <div class="categories__card--style3 text-center">
                        <a class="categories__card--link" href="">
                            <div class="categories__thumbnail">
                                <img class="categories__thumbnail--img" src="assets/img/00.png" alt="categories-img">
                            </div>
                            <div class="categories__content style3">
                                <h2 class="categories__content--title">Car</h2>
                                <span class="categories__content--subtitle">Inspection</span>
                            </div>
                        </a>
                    </div>
                    <div class="categories__card--style3 text-center">
                        <a class="categories__card--link" href="">
                            <div class="categories__thumbnail">
                                <img class="categories__thumbnail--img" src="assets/img/10.png" alt="categories-img">
                            </div>
                            <div class="categories__content style3">
                                <h2 class="categories__content--title">Windshildes &</h2>
                                <span class="categories__content--subtitle">Lights</span>
                            </div>
                        </a>
                    </div>
                    <div class="categories__card--style3 text-center">
                        <a class="categories__card--link" href="">
                            <div class="categories__thumbnail">
                                <img class="categories__thumbnail--img" src="assets/img/12.png" alt="categories-img">
                            </div>
                            <div class="categories__content style3">
                                <h2 class="categories__content--title">Suspension &</h2>
                                <span class="categories__content--subtitle">Fitments</span>
                            </div>
                        </a>
                    </div>
                    <div class="categories__card--style3 text-center">
                        <a class="categories__card--link" href="">
                            <div class="categories__thumbnail">
                                <img class="categories__thumbnail--img" src="assets/img/88.png" alt="categories-img"style="width: 250px; height: auto;">
                            </div>
                            <div class="categories__content style3">
                                <h2 class="categories__content--title">Cars</h2>
                                <span class="categories__content--subtitle">Batteries</span>
                            </div>
                        </a>
                    </div>
                    <div class="categories__card--style3 text-center">
                        <a class="categories__card--link" href="">
                            <div class="categories__thumbnail">
                                <img class="categories__thumbnail--img" src="assets/img/4.png" alt="categories-img">
                            </div>
                            <div class="categories__content style3">
                                <h2 class="categories__content--title">Car Spa &</h2>
                                <span class="categories__content--subtitle">Cleaning</span>
                            </div>
                        </a>
                    </div>
                    <div class="categories__card--style3 text-center">
                        <a class="categories__card--link" href="">
                            <div class="categories__thumbnail">
                                <img class="categories__thumbnail--img" src="assets/img/5.png" alt="categories-img">
                            </div>
                            <div class="categories__content style3">
                                <h2 class="categories__content--title">AC Service &</h2>
                                <span class="categories__content--subtitle">Repair</span>
                            </div>
                        </a>
                    </div>
                    <div class="categories__card--style3 text-center">
                        <a class="categories__card--link" href="">
                            <div class="categories__thumbnail">
                                <img class="categories__thumbnail--img" src="assets/img/52.png" alt="categories-img"style="width: 250px; height: auto;">
                            </div>
                            <div class="categories__content style3">
                                <h2 class="categories__content--title">Denting &</h2>
                                <span class="categories__content--subtitle">Painting</span>
                            </div>
                        </a>
                    </div>
                    <div class="categories__card--style3 text-center">
                        <a class="categories__card--link" href="">
                            <div class="categories__thumbnail">
                                <img class="categories__thumbnail--img" src="assets/img/56.png" alt="categories-img">
                            </div>
                            <div class="categories__content style3">
                                <h2 class="categories__content--title">Clutch &</h2>
                                <span class="categories__content--subtitle">Body Parts</span>
                            </div>
                        </a>
                    </div>
                    <div class="categories__card--style3 text-center">
                        <a class="categories__card--link" href="">
                            <div class="categories__thumbnail">
                               <img class="categories__thumbnail--img" src="assets/img/785.png" alt="categories-img" style="width: 250px; height: auto;">

                            </div>
                            <div class="categories__content style3">
                                <h2 class="categories__content--title">Tyers &</h2>
                                <span class="categories__content--subtitle">Wheel Care</span>
                            </div>
                        </a>
                    </div>
                    <div class="categories__card--style3 text-center">
                        <a class="categories__card--link" href="">
                            <div class="categories__thumbnail">
                                <img class="categories__thumbnail--img" src="assets/img/8.png" alt="categories-img">
                            </div>
                            <div class="categories__content style3">
                                <h2 class="categories__content--title">Detailing</h2>
                                <span class="categories__content--subtitle">Services</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End categories section -->


         <!-- Start banner section -->
         <section class="banner__section section--padding pt-0">
            <div class="container">
                <div class="row  mb--n30">
                    <div class="col-lg-6 col-md-6 mb-30">
                        <div class="banner__items position__relative">
                            <a class="banner__thumbnail display-block" href=""><img class="banner__thumbnail--img banner__max--height" src="assets/img/banner/banner1.webp" alt="banner-img">
                                <div class="banner__content">
                                    <span class="banner__content--subtitle text__secondary">Toyota Combo</span>
                                    <h2 class="banner__content--title"><span class="banner__content--title__inner">CAR RUBBING &</span> POLISHING</h2>
                                    <span class="banner__content--price">₹1500</span>
                                    <span class="banner__content--btn">Book Now
                                        <svg width="12" height="8" viewbox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </div>
                                <span class="banner__badge">25% <br> off</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-30">
                        <div class="banner__items position__relative">
                            <a class="banner__thumbnail display-block" href=""><img class="banner__thumbnail--img banner__max--height" src="assets/img/banner/banner2.webp" alt="banner-img">
                                <div class="banner__content right">
                                    <span class="banner__badge--style2">20% Off</span>
                                    <h2 class="banner__content--title">WHEEL SERVICE <br> FOR ANY <span class="banner__content--title__inner"> VEHICLE </span></h2>
                                    <span class="banner__content--btn mt-0">Book Now 
                                        <svg width="12" height="8" viewbox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>



           <div class="pt-3 mt-3 container">
                <div class="section__heading border-bottom mb-30">
                    <h2 class="section__heading--maintitle">Custom <span> Service in Bhubaneswar</span></h2>
                </div>
                  <div class="blog__section--inner blog__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog__card">
                                <div class="blog__card--thumbnail">
                                    <a class="blog__card--thumbnail__link" href=""><img class="blog__card--thumbnail__img" src="assets/img/product/44.png" alt="blog-img"></a>
                                    
                                </div>
                            
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog__card">
                                <div class="blog__card--thumbnail">
                                    <a class="blog__card--thumbnail__link" href=""><img class="blog__card--thumbnail__img" src="assets/img/product/55.png" alt="blog-img"></a>
                                      
                                </div>
                            
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog__card">
                                <div class="blog__card--thumbnail">
                                    <a class="blog__card--thumbnail__link" href=""><img class="blog__card--thumbnail__img" src="assets/img/product/251.png" alt="blog-img"></a>
                                   
                                </div>
                              
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog__card">
                                <div class="blog__card--thumbnail">
                                    <a class="blog__card--thumbnail__link" href=""><img class="blog__card--thumbnail__img" src="assets/img/product/262.png" alt="blog-img"></a>
                                    
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="swiper__nav--btn swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                    <div class="swiper__nav--btn swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </div>
                </div>
                  <!--   <div class="single__product--nav swiper mt-3" >
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="single__product--nav__items">
                                    <img class="single__product--nav__thumbnail" src="assets/img/product/123.png" alt="product-nav-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single__product--nav__items">
                                    <img class="single__product--nav__thumbnail" src="assets/img/product/222.png" alt="product-nav-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single__product--nav__items">
                                    <img class="single__product--nav__thumbnail" src="assets/img/product/251.png" alt="product-nav-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single__product--nav__items">
                                    <img class="single__product--nav__thumbnail" src="assets/img/product/262.png" alt="product-nav-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single__product--nav__items">
                                    <img class="single__product--nav__thumbnail" src="assets/img/product/44.png" alt="product-nav-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single__product--nav__items">
                                    <img class="single__product--nav__thumbnail" src="assets/img/product/55.png" alt="product-nav-img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper__nav--btn swiper-button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                        <div class="swiper__nav--btn swiper-button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                        </div>
                    </div>   -->  
            </div>

        </section>
        <!-- End banner section -->

        <!-- Start product section -->
        <section class="product__section deal__section--bg section--padding ">
            <div class="container">
                <div class="section__heading  border-bottom mb-30">
                    <h2 class="section__heading--maintitle">Deal Of <span>The Day</span></h2>
                </div>
                <div class="product__section--inner">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="single__product--wrapper">
                                <div class="single__product--topbar d-flex align-items-center">
                                    <div class="single__product--preview single__product--thumbnail__preview swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single__product--thumbnail">
                                                    <a class="single__product--thumbnail__link display-block" href="">
                                                        <img class="single__product--thumbnail__img" src="assets/img/product/951.png" alt="product-img">
                                                    </a>
                                                    <span class="product__badge style__left">-14%</span>
                                                    <span class="product__badge--new">New</span>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single__product--thumbnail">
                                                    <a class="single__product--thumbnail__link display-block" href="">
                                                        <img class="single__product--thumbnail__img" src="assets/img/product/753.png" alt="product-img">
                                                    </a>
                                                    <span class="product__badge style__left">-14%</span>
                                                    <span class="product__badge--new">New</span>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single__product--thumbnail">
                                                    <a class="single__product--thumbnail__link display-block" href="">
                                                        <img class="single__product--thumbnail__img" src="assets/img/product/65.png" alt="product-img">
                                                    </a>
                                                    <span class="product__badge style__left">-14%</span>
                                                    <span class="product__badge--new">New</span>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single__product--thumbnail">
                                                    <a class="single__product--thumbnail__link display-block" href="">
                                                        <img class="single__product--thumbnail__img" src="assets/img/product/9874.png" alt="product-img">
                                                    </a>
                                                    <span class="product__badge style__left">-14%</span>
                                                    <span class="product__badge--new">New</span>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single__product--thumbnail">
                                                    <a class="single__product--thumbnail__link display-block" href="">
                                                        <img class="single__product--thumbnail__img" src="assets/img/product/big-product/product5.webp" alt="product-img">
                                                    </a>
                                                    <span class="product__badge style__left">-14%</span>
                                                    <span class="product__badge--new">New</span>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single__product--thumbnail">
                                                    <a class="single__product--thumbnail__link display-block" href="">
                                                        <img class="single__product--thumbnail__img" src="assets/img/product/big-product/product6.webp" alt="product-img">
                                                    </a>
                                                    <span class="product__badge style__left">-14%</span>
                                                    <span class="product__badge--new">New</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single__product--content">
                                        <ul class="rating product__card--rating d-flex">
    
                                            <li>
                                                 <h3 class="single__product--title h2"><a href="">Car Rubbing and Polishing </a></h3>
                                            </li>
                                        </ul>
                                        <h5 class="single__product--title h2"><a href="">Every 6 Month(Recommended)</a></h5>
                                        <div class="product__card--price">
                                            <span class="additional__text">✔"Car rubbing tires, engine pulsing fast."</span>
                                            <span class="additional__text">✔ "Rubbing noises, engine pulsating with power."</span>
                                            <span class="additional__text">✔ "Car tires rubbing, engine pulsing rhythmically."</span>
                                            <span class="additional__text">✔ 30-day Return Policy</span>
                                        </div>
                                      <!--   <div class="product__sold">
                                            <span class="product__sold--text">Available: <span class="product__sold--text__number">334</span></span>
                                            <span class="product__sold--text">Units Sold: <span class="product__sold--text__number">1</span></span>
                                        </div> -->
                                        <!-- <div class="single__product--countdown d-flex" data-countdown="Sep 30, 2023 00:00:00"></div> -->

                                        <ul class="single__product--action d-flex align-items-end ">
                                            <li class="single__product--action__list">
                                                <a class="single__product--cart__btn" href="">
                                                    Select
                                                </a>
                                            </li>
                                           <!--  <li class="single__product--action__list">
                                                <a class="single__product--action__btn" title="Wishlist" href="wishl">
                                                    <svg width="15" height="14" viewbox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.8683 12.9208C7.76786 13.0212 7.64509 13.0714 7.5 13.0714C7.35491 13.0714 7.23214 13.0212 7.1317 12.9208L1.90848 7.8817C1.85268 7.83705 1.77455 7.76451 1.67411 7.66406C1.57924 7.56362 1.42578 7.38225 1.21373 7.11998C1.00167 6.85212 0.811942 6.57868 0.644531 6.29966C0.477121 6.02065 0.326451 5.68304 0.192522 5.28683C0.0641741 4.89062 0 4.50558 0 4.1317C0 2.90402 0.354353 1.9442 1.06306 1.25223C1.77176 0.560267 2.75112 0.214285 4.00112 0.214285C4.3471 0.214285 4.69866 0.275669 5.0558 0.398437C5.41853 0.515624 5.75335 0.677455 6.06027 0.883928C6.37277 1.08482 6.64063 1.27455 6.86384 1.45312C7.08705 1.6317 7.29911 1.82143 7.5 2.02232C7.70089 1.82143 7.91295 1.6317 8.13616 1.45312C8.35938 1.27455 8.62444 1.08482 8.93136 0.883928C9.24386 0.677455 9.57868 0.515624 9.93583 0.398437C10.2985 0.275669 10.6529 0.214285 10.9989 0.214285C12.2489 0.214285 13.2282 0.560267 13.9369 1.25223C14.6456 1.9442 15 2.90402 15 4.1317C15 5.36496 14.361 6.62054 13.0831 7.89844L7.8683 12.9208Z" fill="currentColor"></path>
                                                        </svg>
                                                    <span class="visually-hidden">Wishlist</span> 
                                                </a>
                                            </li> -->
                                         <!--    <li class="single__product--action__list">
                                                <a class="single__product--action__btn" title="Compare" href="compare.html">
                                                    <svg width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.58273 3.34654C5.29255 3.79148 4.96126 4.45164 4.58886 5.32701C4.48247 5.10937 4.39299 4.93527 4.32045 4.80469C4.2479 4.66927 4.14876 4.51451 4.02302 4.3404C3.90211 4.16629 3.77878 4.03088 3.65304 3.93415C3.53213 3.83259 3.37979 3.74795 3.19601 3.68024C3.01706 3.6077 2.82119 3.57143 2.6084 3.57143H0.983395C0.915687 3.57143 0.860069 3.54966 0.816542 3.50614C0.773016 3.46261 0.751252 3.40699 0.751252 3.33929V1.94643C0.751252 1.87872 0.773016 1.8231 0.816542 1.77958C0.860069 1.73605 0.915687 1.71429 0.983395 1.71429H2.6084C3.81747 1.71429 4.80892 2.25837 5.58273 3.34654ZM13.686 8.976C13.7295 9.01953 13.7513 9.07515 13.7513 9.14286C13.7513 9.21057 13.7295 9.26618 13.686 9.30971L11.3645 11.6311C11.321 11.6747 11.2654 11.6964 11.1977 11.6964C11.1348 11.6964 11.0792 11.6722 11.0308 11.6239C10.9873 11.5804 10.9655 11.5272 10.9655 11.4643V10.0714C10.8108 10.0714 10.6052 10.0738 10.3489 10.0787C10.0926 10.0787 9.89671 10.0811 9.7613 10.0859C9.62588 10.0859 9.44935 10.0835 9.23172 10.0787C9.01409 10.069 8.8424 10.0569 8.71665 10.0424C8.59091 10.0231 8.43615 9.99647 8.25237 9.96261C8.06859 9.92876 7.91625 9.88523 7.79534 9.83203C7.67443 9.774 7.53418 9.70387 7.37458 9.62165C7.21498 9.53943 7.07231 9.44271 6.94657 9.33147C6.82082 9.22024 6.68782 9.09208 6.54757 8.94699C6.40732 8.79706 6.2719 8.62779 6.14132 8.43917C6.42666 7.9894 6.75553 7.32924 7.12793 6.45871C7.23433 6.67634 7.3238 6.85286 7.39634 6.98828C7.46889 7.11886 7.56561 7.27121 7.68652 7.44531C7.81226 7.61942 7.93559 7.75725 8.0565 7.85882C8.18224 7.95554 8.33459 8.04018 8.51353 8.11272C8.69731 8.18043 8.8956 8.21429 9.1084 8.21429H10.9655V6.82143C10.9655 6.75372 10.9873 6.6981 11.0308 6.65458C11.0744 6.61105 11.13 6.58929 11.1977 6.58929C11.2557 6.58929 11.3138 6.61347 11.3718 6.66183L13.686 8.976ZM13.686 2.476C13.7295 2.51953 13.7513 2.57515 13.7513 2.64286C13.7513 2.71056 13.7295 2.76618 13.686 2.80971L11.3645 5.13114C11.321 5.17466 11.2654 5.19643 11.1977 5.19643C11.1348 5.19643 11.0792 5.17466 11.0308 5.13114C10.9873 5.08277 10.9655 5.02716 10.9655 4.96429V3.57143H9.1084C8.87625 3.57143 8.66587 3.6077 8.47726 3.68024C8.28864 3.75279 8.12179 3.86161 7.9767 4.0067C7.83161 4.15179 7.70828 4.30171 7.60672 4.45647C7.50516 4.6064 7.39634 4.7926 7.28027 5.01507C7.12551 5.31492 6.93689 5.72842 6.71442 6.25558C6.57417 6.57478 6.45326 6.84319 6.3517 7.06083C6.25497 7.27846 6.12439 7.53237 5.95996 7.82254C5.80036 8.11272 5.6456 8.35454 5.49567 8.54799C5.35058 8.74144 5.17164 8.94215 4.95884 9.15011C4.75088 9.35807 4.53325 9.52493 4.30594 9.65067C4.08347 9.77158 3.82715 9.87314 3.53697 9.95536C3.24679 10.0327 2.93726 10.0714 2.6084 10.0714H0.983395C0.915687 10.0714 0.860069 10.0497 0.816542 10.0061C0.773016 9.96261 0.751252 9.90699 0.751252 9.83929V8.44643C0.751252 8.37872 0.773016 8.3231 0.816542 8.27958C0.860069 8.23605 0.915687 8.21429 0.983395 8.21429H2.6084C2.84054 8.21429 3.05092 8.17801 3.23953 8.10547C3.42815 8.03292 3.595 7.92411 3.74009 7.77902C3.88518 7.63393 4.00851 7.48642 4.11007 7.3365C4.21163 7.18173 4.32045 6.99312 4.43652 6.77065C4.59128 6.4708 4.7799 6.05729 5.00237 5.53013C5.14262 5.21094 5.26111 4.94252 5.35784 4.72489C5.4594 4.50725 5.58998 4.25335 5.74958 3.96317C5.91401 3.67299 6.06877 3.43118 6.21386 3.23772C6.36379 3.04427 6.54273 2.84356 6.75069 2.6356C6.96349 2.42764 7.18113 2.26321 7.4036 2.1423C7.6309 2.01655 7.88965 1.91499 8.17982 1.83761C8.47 1.75539 8.77953 1.71429 9.1084 1.71429H10.9655V0.321428C10.9655 0.25372 10.9873 0.198102 11.0308 0.154575C11.0744 0.111049 11.13 0.0892855 11.1977 0.0892855C11.2557 0.0892855 11.3138 0.113467 11.3718 0.16183L13.686 2.476Z" fill="currentColor"></path>
                                                        </svg>
                                                    <span class="visually-hidden">Compare</span>    
                                                </a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="single__product--nav swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="single__product--nav__items">
                                                <img class="single__product--nav__thumbnail" src="assets/img/product/small-product/product1.webp" alt="product-nav-img">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single__product--nav__items">
                                                <img class="single__product--nav__thumbnail" src="assets/img/product/small-product/product2.webp" alt="product-nav-img">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single__product--nav__items">
                                                <img class="single__product--nav__thumbnail" src="assets/img/product/small-product/product3.webp" alt="product-nav-img">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single__product--nav__items">
                                                <img class="single__product--nav__thumbnail" src="assets/img/product/small-product/product4.webp" alt="product-nav-img">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single__product--nav__items">
                                                <img class="single__product--nav__thumbnail" src="assets/img/product/small-product/product5.webp" alt="product-nav-img">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single__product--nav__items">
                                                <img class="single__product--nav__thumbnail" src="assets/img/product/small-product/product1.webp" alt="product-nav-img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper__nav--btn swiper-button-next">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </div>
                                    <div class="swiper__nav--btn swiper-button-prev">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="banner__sidebar style5">
                                <div class="banner__items position__relative mb-30">
                                    <a class="banner__thumbnail display-block" href=""><img class="banner__thumbnail--img" src="assets/img/banner/banner18.webp" alt="banner-img">
                                        <div class="banner__content--style5">
                                            <span class="banner__content--style5__subtitle text-white">From $540</span>
                                            <h2 class="banner__content--style5__title text-white">MEGA SALE</h2>
                                            <span class="banner__content--style5__btn">Shop now </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="banner__items position__relative">
                                    <a class="banner__thumbnail display-block" href=""><img class="banner__thumbnail--img" src="assets/img/banner/banner19.webp" alt="banner-img">
                                        <div class="banner__content--style5 right">
                                            <span class="banner__content--style5__subtitle text__secondary">From $540</span>
                                            <h2 class="banner__content--style5__title text-white">MEGA SALE</h2>
                                            <span class="banner__content--style5__btn">Shop now </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End product section -->
        
        <!-- Start blog section -->
        <section class="blog__section section--padding">
            <div class="container">
                <div class="section__heading section__heading--flex border-bottom d-flex justify-content-between align-items-end mb-30">
                    <h2 class="section__heading--maintitle">Blog & article</h2>
                    <a class="view__all--link" href="blog.php">View all Blog</a>
                </div>
                <div class="blog__section--inner blog__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog__card">
                                <div class="blog__card--thumbnail">
                                    <a class="blog__card--thumbnail__link" href="blog-details.php"><img class="blog__card--thumbnail__img" src="assets/img/blog/blog1.webp" alt="blog-img"></a>
                                    <span class="blog__card--meta__date">20 <br> Oct</span>  
                                </div>
                                <div class="blog__card--content">
                                    <span class="blog__card--meta">By: Rasalina</span>
                                    <h3 class="blog__card--title"><a href="blog-details.php">Beauty Skin Care Product In Stock</a></h3>
                                    <p class="blog__card--desc">Namkand sodales vel online best prices when
                                        an unknown printer took a galley of  </p>
                                    <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                        <a class="blog__card--btn__link" href="blog-details.php">Read more 
                                            <svg width="12" height="8" viewbox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z" fill="currentColor"></path>
                                            </svg>
                                        </a>
                                        <ul class="social__share blog__card--social d-flex">
                                            <li class="social__share--list">
                                                <a class="social__share--icon" target="_blank" href="https://www.facebook.com">
                                                    <svg width="9" height="15" viewbox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z" fill="currentColor"></path>
                                                    </svg>
                                                    <span class="visually-hidden">Facebook</span>
                                                </a>
                                            </li>
                                            <li class="social__share--list">
                                                <a class="social__share--icon" target="_blank" href="https://twitter.com">
                                                    <svg width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z" fill="currentColor"></path>
                                                    </svg>
                                                    <span class="visually-hidden">Twitter</span>
                                                </a>
                                            </li>
                                            <li class="social__share--list">
                                                <a class="social__share--icon" target="_blank" href="https://www.instagram.com">
                                                    <svg width="14" height="13" viewbox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z" fill="currentColor"></path>
                                                    </svg>  
                                                    <span class="visually-hidden">Instagram</span>
                                                </a>
                                            </li>
                                            <li class="social__share--list">
                                                <a class="social__share--icon" target="_blank" href="https://www.youtube.com">
                                                    <svg width="16" height="11" viewbox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.0117 2.16797C14.8477 1.51172 14.3281 0.992188 13.6992 0.828125C12.5234 0.5 7.875 0.5 7.875 0.5C7.875 0.5 3.19922 0.5 2.02344 0.828125C1.39453 0.992188 0.875 1.51172 0.710938 2.16797C0.382812 3.31641 0.382812 5.77734 0.382812 5.77734C0.382812 5.77734 0.382812 8.21094 0.710938 9.38672C0.875 10.043 1.39453 10.5352 2.02344 10.6992C3.19922 11 7.875 11 7.875 11C7.875 11 12.5234 11 13.6992 10.6992C14.3281 10.5352 14.8477 10.043 15.0117 9.38672C15.3398 8.21094 15.3398 5.77734 15.3398 5.77734C15.3398 5.77734 15.3398 3.31641 15.0117 2.16797ZM6.34375 7.99219V3.5625L10.2266 5.77734L6.34375 7.99219Z" fill="currentColor"></path>
                                                    </svg>
                                                    <span class="visually-hidden">Youtube</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog__card">
                                <div class="blog__card--thumbnail">
                                    <a class="blog__card--thumbnail__link" href="blog-details.php"><img class="blog__card--thumbnail__img" src="assets/img/blog/blog2.webp" alt="blog-img"></a>
                                    <span class="blog__card--meta__date">24 <br> Oct</span>  
                                </div>
                                <div class="blog__card--content">
                                    <span class="blog__card--meta">By: Rasalina</span>
                                    <h3 class="blog__card--title"><a href="blog-details.php">Lorem ipsum dolor sit thre elit.</a></h3>
                                    <p class="blog__card--desc">Namkand sodales vel online best prices when
                                        an unknown printer took a galley of  </p>
                                    <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                        <a class="blog__card--btn__link" href="blog-details.php">Read more 
                                            <svg width="12" height="8" viewbox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z" fill="currentColor"></path>
                                            </svg>
                                        </a>
                                        <ul class="social__share blog__card--social d-flex">
                                            <li class="social__share--list">
                                                <a class="social__share--icon" target="_blank" href="https://www.facebook.com">
                                                    <svg width="9" height="15" viewbox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z" fill="currentColor"></path>
                                                    </svg>
                                                    <span class="visually-hidden">Facebook</span>
                                                </a>
                                            </li>
                                            <li class="social__share--list">
                                                <a class="social__share--icon" target="_blank" href="https://twitter.com">
                                                    <svg width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z" fill="currentColor"></path>
                                                    </svg>
                                                    <span class="visually-hidden">Twitter</span>
                                                </a>
                                            </li>
                                            <li class="social__share--list">
                                                <a class="social__share--icon" target="_blank" href="https://www.instagram.com">
                                                    <svg width="14" height="13" viewbox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z" fill="currentColor"></path>
                                                    </svg>  
                                                    <span class="visually-hidden">Instagram</span>
                                                </a>
                                            </li>
                                            <li class="social__share--list">
                                                <a class="social__share--icon" target="_blank" href="https://www.youtube.com">
                                                    <svg width="16" height="11" viewbox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.0117 2.16797C14.8477 1.51172 14.3281 0.992188 13.6992 0.828125C12.5234 0.5 7.875 0.5 7.875 0.5C7.875 0.5 3.19922 0.5 2.02344 0.828125C1.39453 0.992188 0.875 1.51172 0.710938 2.16797C0.382812 3.31641 0.382812 5.77734 0.382812 5.77734C0.382812 5.77734 0.382812 8.21094 0.710938 9.38672C0.875 10.043 1.39453 10.5352 2.02344 10.6992C3.19922 11 7.875 11 7.875 11C7.875 11 12.5234 11 13.6992 10.6992C14.3281 10.5352 14.8477 10.043 15.0117 9.38672C15.3398 8.21094 15.3398 5.77734 15.3398 5.77734C15.3398 5.77734 15.3398 3.31641 15.0117 2.16797ZM6.34375 7.99219V3.5625L10.2266 5.77734L6.34375 7.99219Z" fill="currentColor"></path>
                                                    </svg>
                                                    <span class="visually-hidden">Youtube</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog__card">
                                <div class="blog__card--thumbnail">
                                    <a class="blog__card--thumbnail__link" href="blog-details.php"><img class="blog__card--thumbnail__img" src="assets/img/blog/blog3.webp" alt="blog-img"></a>
                                    <span class="blog__card--meta__date">22 <br> Oct</span>  
                                </div>
                                <div class="blog__card--content">
                                    <span class="blog__card--meta">By: Rasalina</span>
                                    <h3 class="blog__card--title"><a href="blog-details.php">Possimus libero id moles cumqu.</a></h3>
                                    <p class="blog__card--desc">Namkand sodales vel online best prices when
                                        an unknown printer took a galley of  </p>
                                        <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                            <a class="blog__card--btn__link" href="blog-details.php">Read more 
                                                <svg width="12" height="8" viewbox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z" fill="currentColor"></path>
                                                </svg>
                                            </a>
                                            <ul class="social__share blog__card--social d-flex">
                                                <li class="social__share--list">
                                                    <a class="social__share--icon" target="_blank" href="https://www.facebook.com">
                                                        <svg width="9" height="15" viewbox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Facebook</span>
                                                    </a>
                                                </li>
                                                <li class="social__share--list">
                                                    <a class="social__share--icon" target="_blank" href="https://twitter.com">
                                                        <svg width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Twitter</span>
                                                    </a>
                                                </li>
                                                <li class="social__share--list">
                                                    <a class="social__share--icon" target="_blank" href="https://www.instagram.com">
                                                        <svg width="14" height="13" viewbox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z" fill="currentColor"></path>
                                                        </svg>  
                                                        <span class="visually-hidden">Instagram</span>
                                                    </a>
                                                </li>
                                                <li class="social__share--list">
                                                    <a class="social__share--icon" target="_blank" href="https://www.youtube.com">
                                                        <svg width="16" height="11" viewbox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.0117 2.16797C14.8477 1.51172 14.3281 0.992188 13.6992 0.828125C12.5234 0.5 7.875 0.5 7.875 0.5C7.875 0.5 3.19922 0.5 2.02344 0.828125C1.39453 0.992188 0.875 1.51172 0.710938 2.16797C0.382812 3.31641 0.382812 5.77734 0.382812 5.77734C0.382812 5.77734 0.382812 8.21094 0.710938 9.38672C0.875 10.043 1.39453 10.5352 2.02344 10.6992C3.19922 11 7.875 11 7.875 11C7.875 11 12.5234 11 13.6992 10.6992C14.3281 10.5352 14.8477 10.043 15.0117 9.38672C15.3398 8.21094 15.3398 5.77734 15.3398 5.77734C15.3398 5.77734 15.3398 3.31641 15.0117 2.16797ZM6.34375 7.99219V3.5625L10.2266 5.77734L6.34375 7.99219Z" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Youtube</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> 
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog__card">
                                <div class="blog__card--thumbnail">
                                    <a class="blog__card--thumbnail__link" href="blog-details.php"><img class="blog__card--thumbnail__img" src="assets/img/blog/blog1.webp" alt="blog-img"></a>
                                    <span class="blog__card--meta__date">18 <br> Oct</span>  
                                </div>
                                <div class="blog__card--content">
                                    <span class="blog__card--meta">By: Rasalina</span>
                                    <h3 class="blog__card--title"><a href="blog-details.php">Beauty Skin Care Product In Stock</a></h3>
                                    <p class="blog__card--desc">Namkand sodales vel online best prices when
                                        an unknown printer took a galley of  </p>
                                        <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                            <a class="blog__card--btn__link" href="blog-details.php">Read more 
                                                <svg width="12" height="8" viewbox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z" fill="currentColor"></path>
                                                </svg>
                                            </a>
                                            <ul class="social__share blog__card--social d-flex">
                                                <li class="social__share--list">
                                                    <a class="social__share--icon" target="_blank" href="https://www.facebook.com">
                                                        <svg width="9" height="15" viewbox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Facebook</span>
                                                    </a>
                                                </li>
                                                <li class="social__share--list">
                                                    <a class="social__share--icon" target="_blank" href="https://twitter.com">
                                                        <svg width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Twitter</span>
                                                    </a>
                                                </li>
                                                <li class="social__share--list">
                                                    <a class="social__share--icon" target="_blank" href="https://www.instagram.com">
                                                        <svg width="14" height="13" viewbox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z" fill="currentColor"></path>
                                                        </svg>  
                                                        <span class="visually-hidden">Instagram</span>
                                                    </a>
                                                </li>
                                                <li class="social__share--list">
                                                    <a class="social__share--icon" target="_blank" href="https://www.youtube.com">
                                                        <svg width="16" height="11" viewbox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.0117 2.16797C14.8477 1.51172 14.3281 0.992188 13.6992 0.828125C12.5234 0.5 7.875 0.5 7.875 0.5C7.875 0.5 3.19922 0.5 2.02344 0.828125C1.39453 0.992188 0.875 1.51172 0.710938 2.16797C0.382812 3.31641 0.382812 5.77734 0.382812 5.77734C0.382812 5.77734 0.382812 8.21094 0.710938 9.38672C0.875 10.043 1.39453 10.5352 2.02344 10.6992C3.19922 11 7.875 11 7.875 11C7.875 11 12.5234 11 13.6992 10.6992C14.3281 10.5352 14.8477 10.043 15.0117 9.38672C15.3398 8.21094 15.3398 5.77734 15.3398 5.77734C15.3398 5.77734 15.3398 3.31641 15.0117 2.16797ZM6.34375 7.99219V3.5625L10.2266 5.77734L6.34375 7.99219Z" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Youtube</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper__nav--btn swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                    <div class="swiper__nav--btn swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </div>
                </div>
            </div>
        </section>
        <!-- End blog section -->

        <!-- Start shipping section -->
        <section class="shipping__section">
            <div class="container">
                <div class="shipping__inner style2 d-flex">
                    <div class="shipping__items style2 d-flex align-items-center">
                        <div class="shipping__icon">  
                            <img src="assets/img/other/shipping1.webp" alt="icon-img">
                        </div>
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Free Pick Up</h2>
                            <p class="shipping__content--desc">Free Delivery in 10km</p>
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

    <!-- Start footer section -->
 <?php
  include('inc/footer.php');
?>