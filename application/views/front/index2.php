<?php
  include('inc/header.php');
?>
  <link rel="stylesheet" href="<?= base_url() ?>mycustom.css?v=<?=rand() ?>"> 

  <style>
      .section__heading::after{
        display: none !important;
        border:0;
      }
      .section__heading::before{
        display: none !important;
      }
  </style>
 

    <main class="main__content_wrapper">



        <!-- Start slider section -->
        <section class="hero__slider--section">
            <div class="slider__thumbnail--style5 position-relative">
                <img class="slider__thumbnail--img__style5" src="<?= base_url() ?>assets/img/0.jpg" alt="slider-img">
                <div class="hero__content--style5 text-center">
                </div>
                <div class="search__filter--section search__filter--style5">
                    <div class="container">
                        <div class="section__heading style2 text-center mb-30">
                        </div>



                        <div class="search__filter--inner style5">
                            


                            <form class="search__filter--form__style2 d-flex"  >


                                <div class="search__filter--select select search__filter--width">
                                      <input type="tact" name="city"  value=" <?=$mycity_name; ?>" onclick="cityopenModal()" class="search__filter--select__field">
                                </div>
                                <div class="search__filter--select select search__filter--width">
                                    <select id="manufacturer"   class="search__filter--select__field">
                                        <option selected="" value="1">Select Cars</option>
                                        <?php 
                                            // foreach ($car_man as $cm) {
                                            //     echo '<option value="'.$cm->id.'">'.$cm->name.'</option>';
                                            // }
                                        ?> 

                                    </select>
                                </div>
                                <div class="search__filter--select select search__filter--width">
                                    <select class="search__filter--select__field">
                                        <option selected="" value="1">Choose Model</option>
                                        <?php 
                                            foreach ($car_model as $com) {
                                                echo '<option value="'.$com->id.'">'.$com->name.'</option>';
                                            }
                                        ?>

                                    </select>
                                </div>
                                <div class="search__filter--select select search__filter--width">
                                    <select class="search__filter--select__field">
                                        <option selected="" value="1">Select Fuel Type</option>
                                        <?php 
                                            foreach ($fuel_type as $cft) {
                                                echo '<option value="'.$cft->id.'">'.$cft->name.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <!-- <div class="search__filter--select search__filter--width">

                                    <input type="tel" id="phone" name="phone" class="search__filter--select__field" placeholder="Enter number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                                </div> -->

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
            <div class="section__heading border-bottom mb-30 text-center">
                <h2 class="section__heading--maintitle">Top <span>Car Service in <?=$mycity_name; ?></span></h2>
            </div>
            <div class="categories__inner--style3 d-flex" id="catlist">
                


                <!-- <div class="categories__card--style3 text-center">
                    <a class="categories__card--link" href="<?= base_url() ?>service_details">
                        <div class="categories__thumbnail">
                            <img class="categories__thumbnail--img" src="<?= base_url() ?>assets/img/00.png" alt="categories-img">
                        </div>
                        <div class="categories__content style3">
                            <h2 class="categories__content--title">Car</h2>
                            <span class="categories__content--subtitle">Inspection</span>
                        </div>
                    </a>
                </div> -->
                

                

            </div>
        </div>
    </section>
    <!-- End categories section -->


<style>
    .ff{
        border:2px solid transparent !important;
        transition: .4s ease;
    }
    .ff:hover{
        border:2px solid #ED1D24 !important;
    }
</style>


    <section>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-6 col-md-3 mb-3">
                        <div class="card shadow_box ff">
                        <a href="<?=base_url() ?>service_details/<?=$mycity_url ?>/roadside-assistance" class="card-body p-0">
                            <img src="assets/img/card.jpg" class="img-fluid card-img">
                            <a href="" class="btn btn-danger btn-lg position-absolute top-50 start-50 translate-middle">Road side Assitance!</a>
                        </a>
                    </div>
                </div> 
                <div class="col-6 col-md-3 mb-3">
                        <div class="card shadow_box ff">
                          <a href="<?=base_url() ?>service_details/<?=$mycity_url ?>/roadside-assistance"  class="card-body p-0">
                            <img src="assets/img/ser.jpg" class="img-fluid card-img">
                            <button class="btn btn-danger btn-lg position-absolute top-50 start-50 translate-middle">Services!</button>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <div class="card shadow_box ff">
                        <a href="<?=base_url() ?>car"  class="card-body p-0">
                            <img src="assets/img/buy.jpg" class="img-fluid card-img">
                            <button class="btn btn-danger btn-lg position-absolute top-50 start-50 translate-middle">Buy Car!</button>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                        <div class="card shadow_box ff">
                          <a href="<?=base_url() ?>customer/sellyourcar"  class="card-body p-0">
                            <img src="assets/img/sell.jpg" class="img-fluid card-img">
                            <button class="btn btn-danger btn-lg position-absolute top-50 start-50 translate-middle">Sell Car!</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

   









        <!-- Start banner section -->
        <section class="banner__section section--padding pt-0 d-none">
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



            <div style="display:none;"   class="pt-3 mt-3 container">
                <div class="section__heading border-bottom mb-30">
                    <h2 class="section__heading--maintitle">Custom <span> Service in Bhubaneswar</span></h2>
                </div>
                <div class="blog__section--inner blog__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="blog__card" style="max-width: 250px; height: auto;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="">
                                    <img class="blog__card--thumbnail__img" src="assets/img/product/44.png" alt="blog-img" style="max-width: 100%; height: auto;">
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <div class="blog__card" style="max-width: 250px; height: auto;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href=""><img class="blog__card--thumbnail__img" src="assets/img/product/55.png" alt="blog-img" style="max-width: 100%; height: auto;"></a>

                            </div>
                            
                        </div>
                    </div>
                    <div class="swiper-slide" style="margin-right: 5px;">
                        <div class="blog__card" style="max-width: 250px; height: auto; margin-bottom: 10px;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="">
                                    <img class="blog__card--thumbnail__img" src="assets/img/product/251.png" alt="blog-img" style="max-width: 100%; height: auto;">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide" style="margin-right: 50px;">
                        <div class="blog__card" style="max-width: 250px; height: auto; margin-bottom: 10px;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="">
                                    <img class="blog__card--thumbnail__img" src="assets/img/product/262.png" alt="blog-img" style="max-width: 100%; height: auto;">
                                </a>
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
        <!-- End banner section -->


        <section class="product__section section--padding  pt-0">
            <div class="container">
                <div class="section__heading border-bottom mb-30 text-center">
                    <h2 class="section__heading--maintitle">Our <span>Services</span></h2>
                </div>
                <div class="product__section--inner pb-15 product__swiper--activation swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                    <div class="swiper-wrapper" id="swiper-wrapper-51bbd51caf590e2c" aria-live="polite" style="transform: translate3d(-2480px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="2 / 5" style="width: 280px; margin-right: 30px;">
                            <article class="product__card">
                                <div class="product__card--thumbnail">
                                    <a class="product__card--thumbnail__link display-block" href="product-details.html">
                                        <img class="product__card--thumbnail__img product__primary--img" src="assets/img/product/main-product/product2.webp" alt="product-img">
                                        <img class="product__card--thumbnail__img product__secondary--img" src="assets/img/product/main-product/product3.webp" alt="product-img">
                                    </a>
                                    <span class="product__badge">-11%</span>
                                    <ul class="product__card--action d-flex align-items-center justify-content-center">
                                        <li class="product__card--action__list">
                                            <a class="product__card--action__btn" title="Quick View" data-bs-toggle="modal" data-bs-target="#examplemodal" href="javascript:void(0)">
                                                <svg class="product__card--action__btn--svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.6952 14.4991L11.7663 10.5588C12.7765 9.4008 13.33 7.94381 13.33 6.42703C13.33 2.88322 10.34 0 6.66499 0C2.98997 0 0 2.88322 0 6.42703C0 9.97085 2.98997 12.8541 6.66499 12.8541C8.04464 12.8541 9.35938 12.4528 10.4834 11.6911L14.4422 15.6613C14.6076 15.827 14.8302 15.9184 15.0687 15.9184C15.2944 15.9184 15.5086 15.8354 15.6711 15.6845C16.0166 15.364 16.0276 14.8325 15.6952 14.4991ZM6.66499 1.67662C9.38141 1.67662 11.5913 3.8076 11.5913 6.42703C11.5913 9.04647 9.38141 11.1775 6.66499 11.1775C3.94857 11.1775 1.73869 9.04647 1.73869 6.42703C1.73869 3.8076 3.94857 1.67662 6.66499 1.67662Z" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Quick View</span>  
                                            </a>
                                        </li>
                                        <li class="product__card--action__list">
                                            <a class="product__card--action__btn" title="Compare" href="compare.html">
                                                <svg class="product__card--action__btn--svg" width="17" height="17" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.89137 6.09375C6.89137 6.47656 7.16481 6.75 7.54762 6.75H10.1453C10.7195 6.75 11.0203 6.06641 10.5828 5.65625L9.8445 4.89062L12.907 1.82812C13.0437 1.69141 13.0437 1.47266 12.907 1.36328L12.2781 0.734375C12.1687 0.597656 11.95 0.597656 11.8132 0.734375L8.75075 3.79688L7.98512 3.05859C7.57496 2.62109 6.89137 2.92188 6.89137 3.49609V6.09375ZM1.94215 12.793L5.00465 9.73047L5.77028 10.4688C6.18043 10.9062 6.89137 10.6055 6.89137 10.0312V7.40625C6.89137 7.05078 6.59059 6.75 6.23512 6.75H3.61012C3.0359 6.75 2.73512 7.46094 3.17262 7.87109L3.9109 8.63672L0.848402 11.6992C0.711683 11.8359 0.711683 12.0547 0.848402 12.1641L1.47731 12.793C1.58668 12.9297 1.80543 12.9297 1.94215 12.793Z" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Compare</span>    
                                            </a>
                                        </li>
                                        <li class="product__card--action__list">
                                            <a class="product__card--action__btn" title="Wishlist" href="wishlist.html">
                                                <svg class="product__card--action__btn--svg" width="18" height="18" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.5379 1.52734C11.9519 0.1875 9.51832 0.378906 8.01442 1.9375C6.48317 0.378906 4.04957 0.1875 2.46364 1.52734C0.412855 3.25 0.713636 6.06641 2.1902 7.57031L6.97536 12.4648C7.24879 12.7383 7.60426 12.9023 8.01442 12.9023C8.39723 12.9023 8.7527 12.7383 9.02614 12.4648L13.8386 7.57031C15.2879 6.06641 15.5886 3.25 13.5379 1.52734ZM12.8816 6.64062L8.09645 11.5352C8.04176 11.5898 7.98707 11.5898 7.90504 11.5352L3.11989 6.64062C2.10817 5.62891 1.91676 3.71484 3.31129 2.53906C4.3777 1.63672 6.01832 1.77344 7.05739 2.8125L8.01442 3.79688L8.97145 2.8125C9.98317 1.77344 11.6238 1.63672 12.6902 2.51172C14.0847 3.71484 13.8933 5.62891 12.8816 6.64062Z" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Wishlist</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product__card--content">
                                    <ul class="rating product__card--rating d-flex">
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon"> 
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z" fill="currentColor"></path>
                                                 </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon"> 
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z" fill="currentColor"></path>
                                                 </svg>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="rating__review--text">(106) Review</span>
                                        </li>
                                    </ul>
                                    <h3 class="product__card--title"><a href="product-details.html">Lorem ipsum dolor, sit amet adipisi elit. </a></h3>
                                    <div class="product__card--price">
                                        <span class="current__price">$220.52</span>
                                        <span class="old__price"> $315.00</span>
                                    </div>
                                    <div class="product__card--footer">
                                        <a class="product__card--btn primary__btn" href="cart.html">
                                            <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.2371 4H11.5261L8.5027 0.460938C8.29176 0.226562 7.9402 0.203125 7.70582 0.390625C7.47145 0.601562 7.44801 0.953125 7.63551 1.1875L10.0496 4H3.46364L5.8777 1.1875C6.0652 0.953125 6.04176 0.601562 5.80739 0.390625C5.57301 0.203125 5.22145 0.226562 5.01051 0.460938L1.98707 4H0.299574C0.135511 4 0.0183239 4.14062 0.0183239 4.28125V4.84375C0.0183239 5.00781 0.135511 5.125 0.299574 5.125H0.721449L1.3777 9.78906C1.44801 10.3516 1.91676 10.75 2.47926 10.75H11.0339C11.5964 10.75 12.0652 10.3516 12.1355 9.78906L12.7918 5.125H13.2371C13.3777 5.125 13.5183 5.00781 13.5183 4.84375V4.28125C13.5183 4.14062 13.3777 4 13.2371 4ZM11.0339 9.625H2.47926L1.86989 5.125H11.6433L11.0339 9.625ZM7.33082 6.4375C7.33082 6.13281 7.07301 5.875 6.76832 5.875C6.4402 5.875 6.20582 6.13281 6.20582 6.4375V8.3125C6.20582 8.64062 6.4402 8.875 6.76832 8.875C7.07301 8.875 7.33082 8.64062 7.33082 8.3125V6.4375ZM9.95582 6.4375C9.95582 6.13281 9.69801 5.875 9.39332 5.875C9.0652 5.875 8.83082 6.13281 8.83082 6.4375V8.3125C8.83082 8.64062 9.0652 8.875 9.39332 8.875C9.69801 8.875 9.95582 8.64062 9.95582 8.3125V6.4375ZM4.70582 6.4375C4.70582 6.13281 4.44801 5.875 4.14332 5.875C3.8152 5.875 3.58082 6.13281 3.58082 6.4375V8.3125C3.58082 8.64062 3.8152 8.875 4.14332 8.875C4.44801 8.875 4.70582 8.64062 4.70582 8.3125V6.4375Z" fill="currentColor"></path>
                                            </svg>
                                            Add to cart
                                        </a>
                                    </div>   
                                </div>
                            </article>
                        </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 5" style="width: 280px; margin-right: 30px;">
                            <article class="product__card">
                                <div class="product__card--thumbnail">
                                    <a class="product__card--thumbnail__link display-block" href="product-details.html">
                                        <img class="product__card--thumbnail__img product__primary--img" src="assets/img/product/main-product/product3.webp" alt="product-img">
                                        <img class="product__card--thumbnail__img product__secondary--img" src="assets/img/product/main-product/product1.webp" alt="product-img">
                                    </a>
                                    <span class="product__badge">-18%</span>
                                    <ul class="product__card--action d-flex align-items-center justify-content-center">
                                        <li class="product__card--action__list">
                                            <a class="product__card--action__btn" title="Quick View" data-bs-toggle="modal" data-bs-target="#examplemodal" href="javascript:void(0)">
                                                <svg class="product__card--action__btn--svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.6952 14.4991L11.7663 10.5588C12.7765 9.4008 13.33 7.94381 13.33 6.42703C13.33 2.88322 10.34 0 6.66499 0C2.98997 0 0 2.88322 0 6.42703C0 9.97085 2.98997 12.8541 6.66499 12.8541C8.04464 12.8541 9.35938 12.4528 10.4834 11.6911L14.4422 15.6613C14.6076 15.827 14.8302 15.9184 15.0687 15.9184C15.2944 15.9184 15.5086 15.8354 15.6711 15.6845C16.0166 15.364 16.0276 14.8325 15.6952 14.4991ZM6.66499 1.67662C9.38141 1.67662 11.5913 3.8076 11.5913 6.42703C11.5913 9.04647 9.38141 11.1775 6.66499 11.1775C3.94857 11.1775 1.73869 9.04647 1.73869 6.42703C1.73869 3.8076 3.94857 1.67662 6.66499 1.67662Z" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Quick View</span>  
                                            </a>
                                        </li>
                                        <li class="product__card--action__list">
                                            <a class="product__card--action__btn" title="Compare" href="compare.html">
                                                <svg class="product__card--action__btn--svg" width="17" height="17" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.89137 6.09375C6.89137 6.47656 7.16481 6.75 7.54762 6.75H10.1453C10.7195 6.75 11.0203 6.06641 10.5828 5.65625L9.8445 4.89062L12.907 1.82812C13.0437 1.69141 13.0437 1.47266 12.907 1.36328L12.2781 0.734375C12.1687 0.597656 11.95 0.597656 11.8132 0.734375L8.75075 3.79688L7.98512 3.05859C7.57496 2.62109 6.89137 2.92188 6.89137 3.49609V6.09375ZM1.94215 12.793L5.00465 9.73047L5.77028 10.4688C6.18043 10.9062 6.89137 10.6055 6.89137 10.0312V7.40625C6.89137 7.05078 6.59059 6.75 6.23512 6.75H3.61012C3.0359 6.75 2.73512 7.46094 3.17262 7.87109L3.9109 8.63672L0.848402 11.6992C0.711683 11.8359 0.711683 12.0547 0.848402 12.1641L1.47731 12.793C1.58668 12.9297 1.80543 12.9297 1.94215 12.793Z" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Compare</span>    
                                            </a>
                                        </li>
                                        <li class="product__card--action__list">
                                            <a class="product__card--action__btn" title="Wishlist" href="wishlist.html">
                                                <svg class="product__card--action__btn--svg" width="18" height="18" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.5379 1.52734C11.9519 0.1875 9.51832 0.378906 8.01442 1.9375C6.48317 0.378906 4.04957 0.1875 2.46364 1.52734C0.412855 3.25 0.713636 6.06641 2.1902 7.57031L6.97536 12.4648C7.24879 12.7383 7.60426 12.9023 8.01442 12.9023C8.39723 12.9023 8.7527 12.7383 9.02614 12.4648L13.8386 7.57031C15.2879 6.06641 15.5886 3.25 13.5379 1.52734ZM12.8816 6.64062L8.09645 11.5352C8.04176 11.5898 7.98707 11.5898 7.90504 11.5352L3.11989 6.64062C2.10817 5.62891 1.91676 3.71484 3.31129 2.53906C4.3777 1.63672 6.01832 1.77344 7.05739 2.8125L8.01442 3.79688L8.97145 2.8125C9.98317 1.77344 11.6238 1.63672 12.6902 2.51172C14.0847 3.71484 13.8933 5.62891 12.8816 6.64062Z" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Wishlist</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product__card--content">
                                    <ul class="rating product__card--rating d-flex">
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon"> 
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z" fill="currentColor"></path>
                                                 </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon"> 
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z" fill="currentColor"></path>
                                                 </svg>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="rating__review--text">(120) Review</span>
                                        </li>
                                    </ul>
                                    <h3 class="product__card--title"><a href="product-details.html">Taboriosam aenda et itaque expcabo.</a></h3>
                                    <div class="product__card--price">
                                        <span class="current__price">$215.52</span>
                                        <span class="old__price"> $345.00</span>
                                    </div>
                                    <div class="product__card--footer">
                                        <a class="product__card--btn primary__btn" href="cart.html">
                                            <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.2371 4H11.5261L8.5027 0.460938C8.29176 0.226562 7.9402 0.203125 7.70582 0.390625C7.47145 0.601562 7.44801 0.953125 7.63551 1.1875L10.0496 4H3.46364L5.8777 1.1875C6.0652 0.953125 6.04176 0.601562 5.80739 0.390625C5.57301 0.203125 5.22145 0.226562 5.01051 0.460938L1.98707 4H0.299574C0.135511 4 0.0183239 4.14062 0.0183239 4.28125V4.84375C0.0183239 5.00781 0.135511 5.125 0.299574 5.125H0.721449L1.3777 9.78906C1.44801 10.3516 1.91676 10.75 2.47926 10.75H11.0339C11.5964 10.75 12.0652 10.3516 12.1355 9.78906L12.7918 5.125H13.2371C13.3777 5.125 13.5183 5.00781 13.5183 4.84375V4.28125C13.5183 4.14062 13.3777 4 13.2371 4ZM11.0339 9.625H2.47926L1.86989 5.125H11.6433L11.0339 9.625ZM7.33082 6.4375C7.33082 6.13281 7.07301 5.875 6.76832 5.875C6.4402 5.875 6.20582 6.13281 6.20582 6.4375V8.3125C6.20582 8.64062 6.4402 8.875 6.76832 8.875C7.07301 8.875 7.33082 8.64062 7.33082 8.3125V6.4375ZM9.95582 6.4375C9.95582 6.13281 9.69801 5.875 9.39332 5.875C9.0652 5.875 8.83082 6.13281 8.83082 6.4375V8.3125C8.83082 8.64062 9.0652 8.875 9.39332 8.875C9.69801 8.875 9.95582 8.64062 9.95582 8.3125V6.4375ZM4.70582 6.4375C4.70582 6.13281 4.44801 5.875 4.14332 5.875C3.8152 5.875 3.58082 6.13281 3.58082 6.4375V8.3125C3.58082 8.64062 3.8152 8.875 4.14332 8.875C4.44801 8.875 4.70582 8.64062 4.70582 8.3125V6.4375Z" fill="currentColor"></path>
                                            </svg>
                                            Add to cart
                                        </a>
                                    </div>   
                                </div>
                            </article>
                        </div>




                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="3" role="group" aria-label="4 / 5" style="width: 280px; margin-right: 30px;">
                            <article class="product__card">
                                <div class="product__card--thumbnail">
                                    <a class="product__card--thumbnail__link display-block" href="product-details.html">
                                        <img class="product__card--thumbnail__img product__primary--img" src="assets/img/product/main-product/product4.webp" alt="product-img">
                                        <img class="product__card--thumbnail__img product__secondary--img" src="assets/img/product/main-product/product2.webp" alt="product-img">
                                    </a>
                                    <span class="product__badge">-20%</span>
                                    <ul class="product__card--action d-flex align-items-center justify-content-center">
                                        <li class="product__card--action__list">
                                            <a class="product__card--action__btn" title="Quick View" data-bs-toggle="modal" data-bs-target="#examplemodal" href="javascript:void(0)">
                                                <svg class="product__card--action__btn--svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.6952 14.4991L11.7663 10.5588C12.7765 9.4008 13.33 7.94381 13.33 6.42703C13.33 2.88322 10.34 0 6.66499 0C2.98997 0 0 2.88322 0 6.42703C0 9.97085 2.98997 12.8541 6.66499 12.8541C8.04464 12.8541 9.35938 12.4528 10.4834 11.6911L14.4422 15.6613C14.6076 15.827 14.8302 15.9184 15.0687 15.9184C15.2944 15.9184 15.5086 15.8354 15.6711 15.6845C16.0166 15.364 16.0276 14.8325 15.6952 14.4991ZM6.66499 1.67662C9.38141 1.67662 11.5913 3.8076 11.5913 6.42703C11.5913 9.04647 9.38141 11.1775 6.66499 11.1775C3.94857 11.1775 1.73869 9.04647 1.73869 6.42703C1.73869 3.8076 3.94857 1.67662 6.66499 1.67662Z" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Quick View</span>  
                                            </a>
                                        </li>
                                        <li class="product__card--action__list">
                                            <a class="product__card--action__btn" title="Compare" href="compare.html">
                                                <svg class="product__card--action__btn--svg" width="17" height="17" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.89137 6.09375C6.89137 6.47656 7.16481 6.75 7.54762 6.75H10.1453C10.7195 6.75 11.0203 6.06641 10.5828 5.65625L9.8445 4.89062L12.907 1.82812C13.0437 1.69141 13.0437 1.47266 12.907 1.36328L12.2781 0.734375C12.1687 0.597656 11.95 0.597656 11.8132 0.734375L8.75075 3.79688L7.98512 3.05859C7.57496 2.62109 6.89137 2.92188 6.89137 3.49609V6.09375ZM1.94215 12.793L5.00465 9.73047L5.77028 10.4688C6.18043 10.9062 6.89137 10.6055 6.89137 10.0312V7.40625C6.89137 7.05078 6.59059 6.75 6.23512 6.75H3.61012C3.0359 6.75 2.73512 7.46094 3.17262 7.87109L3.9109 8.63672L0.848402 11.6992C0.711683 11.8359 0.711683 12.0547 0.848402 12.1641L1.47731 12.793C1.58668 12.9297 1.80543 12.9297 1.94215 12.793Z" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Compare</span>    
                                            </a>
                                        </li>
                                        <li class="product__card--action__list">
                                            <a class="product__card--action__btn" title="Wishlist" href="wishlist.html">
                                                <svg class="product__card--action__btn--svg" width="18" height="18" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.5379 1.52734C11.9519 0.1875 9.51832 0.378906 8.01442 1.9375C6.48317 0.378906 4.04957 0.1875 2.46364 1.52734C0.412855 3.25 0.713636 6.06641 2.1902 7.57031L6.97536 12.4648C7.24879 12.7383 7.60426 12.9023 8.01442 12.9023C8.39723 12.9023 8.7527 12.7383 9.02614 12.4648L13.8386 7.57031C15.2879 6.06641 15.5886 3.25 13.5379 1.52734ZM12.8816 6.64062L8.09645 11.5352C8.04176 11.5898 7.98707 11.5898 7.90504 11.5352L3.11989 6.64062C2.10817 5.62891 1.91676 3.71484 3.31129 2.53906C4.3777 1.63672 6.01832 1.77344 7.05739 2.8125L8.01442 3.79688L8.97145 2.8125C9.98317 1.77344 11.6238 1.63672 12.6902 2.51172C14.0847 3.71484 13.8933 5.62891 12.8816 6.64062Z" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Wishlist</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product__card--content">
                                    <ul class="rating product__card--rating d-flex">
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon"> 
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z" fill="currentColor"></path>
                                                 </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon"> 
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z" fill="currentColor"></path>
                                                 </svg>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="rating__review--text">(106) Review</span>
                                        </li>
                                    </ul>
                                    <h3 class="product__card--title"><a href="product-details.html">Eius doloribus dicta labore magni nulla! </a></h3>
                                    <div class="product__card--price">
                                        <span class="current__price">$188.52</span>
                                        <span class="old__price"> $268.00</span>
                                    </div>
                                    <div class="product__card--footer">
                                        <a class="product__card--btn primary__btn" href="cart.html">
                                            <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.2371 4H11.5261L8.5027 0.460938C8.29176 0.226562 7.9402 0.203125 7.70582 0.390625C7.47145 0.601562 7.44801 0.953125 7.63551 1.1875L10.0496 4H3.46364L5.8777 1.1875C6.0652 0.953125 6.04176 0.601562 5.80739 0.390625C5.57301 0.203125 5.22145 0.226562 5.01051 0.460938L1.98707 4H0.299574C0.135511 4 0.0183239 4.14062 0.0183239 4.28125V4.84375C0.0183239 5.00781 0.135511 5.125 0.299574 5.125H0.721449L1.3777 9.78906C1.44801 10.3516 1.91676 10.75 2.47926 10.75H11.0339C11.5964 10.75 12.0652 10.3516 12.1355 9.78906L12.7918 5.125H13.2371C13.3777 5.125 13.5183 5.00781 13.5183 4.84375V4.28125C13.5183 4.14062 13.3777 4 13.2371 4ZM11.0339 9.625H2.47926L1.86989 5.125H11.6433L11.0339 9.625ZM7.33082 6.4375C7.33082 6.13281 7.07301 5.875 6.76832 5.875C6.4402 5.875 6.20582 6.13281 6.20582 6.4375V8.3125C6.20582 8.64062 6.4402 8.875 6.76832 8.875C7.07301 8.875 7.33082 8.64062 7.33082 8.3125V6.4375ZM9.95582 6.4375C9.95582 6.13281 9.69801 5.875 9.39332 5.875C9.0652 5.875 8.83082 6.13281 8.83082 6.4375V8.3125C8.83082 8.64062 9.0652 8.875 9.39332 8.875C9.69801 8.875 9.95582 8.64062 9.95582 8.3125V6.4375ZM4.70582 6.4375C4.70582 6.13281 4.44801 5.875 4.14332 5.875C3.8152 5.875 3.58082 6.13281 3.58082 6.4375V8.3125C3.58082 8.64062 3.8152 8.875 4.14332 8.875C4.44801 8.875 4.70582 8.64062 4.70582 8.3125V6.4375Z" fill="currentColor"></path>
                                            </svg>
                                            Add to cart
                                        </a>
                                    </div>   
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="4" role="group" aria-label="5 / 5" style="width: 280px; margin-right: 30px;">
                            <article class="product__card">
                                <div class="product__card--thumbnail">
                                    <a class="product__card--thumbnail__link display-block" href="product-details.html">
                                        <img class="product__card--thumbnail__img product__primary--img" src="assets/img/product/main-product/product1.webp" alt="product-img">
                                        <img class="product__card--thumbnail__img product__secondary--img" src="assets/img/product/main-product/product3.webp" alt="product-img">
                                    </a>
                                    <span class="product__badge">-17%</span>
                                    <ul class="product__card--action d-flex align-items-center justify-content-center">
                                        <li class="product__card--action__list">
                                            <a class="product__card--action__btn" title="Quick View" data-bs-toggle="modal" data-bs-target="#examplemodal" href="javascript:void(0)">
                                                <svg class="product__card--action__btn--svg" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.6952 14.4991L11.7663 10.5588C12.7765 9.4008 13.33 7.94381 13.33 6.42703C13.33 2.88322 10.34 0 6.66499 0C2.98997 0 0 2.88322 0 6.42703C0 9.97085 2.98997 12.8541 6.66499 12.8541C8.04464 12.8541 9.35938 12.4528 10.4834 11.6911L14.4422 15.6613C14.6076 15.827 14.8302 15.9184 15.0687 15.9184C15.2944 15.9184 15.5086 15.8354 15.6711 15.6845C16.0166 15.364 16.0276 14.8325 15.6952 14.4991ZM6.66499 1.67662C9.38141 1.67662 11.5913 3.8076 11.5913 6.42703C11.5913 9.04647 9.38141 11.1775 6.66499 11.1775C3.94857 11.1775 1.73869 9.04647 1.73869 6.42703C1.73869 3.8076 3.94857 1.67662 6.66499 1.67662Z" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Quick View</span>  
                                            </a>
                                        </li>
                                        <li class="product__card--action__list">
                                            <a class="product__card--action__btn" title="Compare" href="compare.html">
                                                <svg class="product__card--action__btn--svg" width="17" height="17" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.89137 6.09375C6.89137 6.47656 7.16481 6.75 7.54762 6.75H10.1453C10.7195 6.75 11.0203 6.06641 10.5828 5.65625L9.8445 4.89062L12.907 1.82812C13.0437 1.69141 13.0437 1.47266 12.907 1.36328L12.2781 0.734375C12.1687 0.597656 11.95 0.597656 11.8132 0.734375L8.75075 3.79688L7.98512 3.05859C7.57496 2.62109 6.89137 2.92188 6.89137 3.49609V6.09375ZM1.94215 12.793L5.00465 9.73047L5.77028 10.4688C6.18043 10.9062 6.89137 10.6055 6.89137 10.0312V7.40625C6.89137 7.05078 6.59059 6.75 6.23512 6.75H3.61012C3.0359 6.75 2.73512 7.46094 3.17262 7.87109L3.9109 8.63672L0.848402 11.6992C0.711683 11.8359 0.711683 12.0547 0.848402 12.1641L1.47731 12.793C1.58668 12.9297 1.80543 12.9297 1.94215 12.793Z" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Compare</span>    
                                            </a>
                                        </li>
                                        <li class="product__card--action__list">
                                            <a class="product__card--action__btn" title="Wishlist" href="wishlist.html">
                                                <svg class="product__card--action__btn--svg" width="18" height="18" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.5379 1.52734C11.9519 0.1875 9.51832 0.378906 8.01442 1.9375C6.48317 0.378906 4.04957 0.1875 2.46364 1.52734C0.412855 3.25 0.713636 6.06641 2.1902 7.57031L6.97536 12.4648C7.24879 12.7383 7.60426 12.9023 8.01442 12.9023C8.39723 12.9023 8.7527 12.7383 9.02614 12.4648L13.8386 7.57031C15.2879 6.06641 15.5886 3.25 13.5379 1.52734ZM12.8816 6.64062L8.09645 11.5352C8.04176 11.5898 7.98707 11.5898 7.90504 11.5352L3.11989 6.64062C2.10817 5.62891 1.91676 3.71484 3.31129 2.53906C4.3777 1.63672 6.01832 1.77344 7.05739 2.8125L8.01442 3.79688L8.97145 2.8125C9.98317 1.77344 11.6238 1.63672 12.6902 2.51172C14.0847 3.71484 13.8933 5.62891 12.8816 6.64062Z" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Wishlist</span> 
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product__card--content">
                                    <ul class="rating product__card--rating d-flex">
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon"> 
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z" fill="currentColor"></path>
                                                 </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon"> 
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.4141 4.53125L8.99219 4.03906L7.44531 0.921875C7.1875 0.382812 6.39062 0.359375 6.10938 0.921875L4.58594 4.03906L1.14062 4.53125C0.53125 4.625 0.296875 5.375 0.742188 5.82031L3.20312 8.23438L2.61719 11.6328C2.52344 12.2422 3.17969 12.7109 3.71875 12.4297L6.78906 10.8125L9.83594 12.4297C10.375 12.7109 11.0312 12.2422 10.9375 11.6328L10.3516 8.23438L12.8125 5.82031C13.2578 5.375 13.0234 4.625 12.4141 4.53125ZM9.53125 7.95312L10.1875 11.75L6.78906 9.96875L3.36719 11.75L4.02344 7.95312L1.25781 5.28125L5.07812 4.71875L6.78906 1.25L8.47656 4.71875L12.2969 5.28125L9.53125 7.95312Z" fill="currentColor"></path>
                                                 </svg>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="rating__review--text">(126) Review</span>
                                        </li>
                                    </ul>
                                    <h3 class="product__card--title"><a href="product-details.html">Amazon Cloud Cam Security
                                        Camera </a></h3>
                                    <div class="product__card--price">
                                        <span class="current__price">$239.52</span>
                                        <span class="old__price"> $362.00</span>
                                    </div>
                                    <div class="product__card--footer">
                                        <a class="product__card--btn primary__btn" href="cart.html">
                                            <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.2371 4H11.5261L8.5027 0.460938C8.29176 0.226562 7.9402 0.203125 7.70582 0.390625C7.47145 0.601562 7.44801 0.953125 7.63551 1.1875L10.0496 4H3.46364L5.8777 1.1875C6.0652 0.953125 6.04176 0.601562 5.80739 0.390625C5.57301 0.203125 5.22145 0.226562 5.01051 0.460938L1.98707 4H0.299574C0.135511 4 0.0183239 4.14062 0.0183239 4.28125V4.84375C0.0183239 5.00781 0.135511 5.125 0.299574 5.125H0.721449L1.3777 9.78906C1.44801 10.3516 1.91676 10.75 2.47926 10.75H11.0339C11.5964 10.75 12.0652 10.3516 12.1355 9.78906L12.7918 5.125H13.2371C13.3777 5.125 13.5183 5.00781 13.5183 4.84375V4.28125C13.5183 4.14062 13.3777 4 13.2371 4ZM11.0339 9.625H2.47926L1.86989 5.125H11.6433L11.0339 9.625ZM7.33082 6.4375C7.33082 6.13281 7.07301 5.875 6.76832 5.875C6.4402 5.875 6.20582 6.13281 6.20582 6.4375V8.3125C6.20582 8.64062 6.4402 8.875 6.76832 8.875C7.07301 8.875 7.33082 8.64062 7.33082 8.3125V6.4375ZM9.95582 6.4375C9.95582 6.13281 9.69801 5.875 9.39332 5.875C9.0652 5.875 8.83082 6.13281 8.83082 6.4375V8.3125C8.83082 8.64062 9.0652 8.875 9.39332 8.875C9.69801 8.875 9.95582 8.64062 9.95582 8.3125V6.4375ZM4.70582 6.4375C4.70582 6.13281 4.44801 5.875 4.14332 5.875C3.8152 5.875 3.58082 6.13281 3.58082 6.4375V8.3125C3.58082 8.64062 3.8152 8.875 4.14332 8.875C4.44801 8.875 4.70582 8.64062 4.70582 8.3125V6.4375Z" fill="currentColor"></path>
                                            </svg>
                                            Add to cart
                                        </a>
                                    </div>   
                                </div>
                            </article>
                        </div>


                        <!-- modified card  -->



                        <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" role="group" aria-label="1 / 5" style="width: 280px; margin-right: 30px;">
                            <article class="product__card">
                                <div class="product__card--thumbnail">
                                    <a class="product__card--thumbnail__link display-block" href="product-details.html">
                                        <img class="product__card--thumbnail__img product__primary--img" src="assets/img/product/main-product/product1.webp" alt="product-img">
                                        <img class="product__card--thumbnail__img product__secondary--img" src="assets/img/product/main-product/product4.webp" alt="product-img">
                                    </a>
                                    <!-- <span class="product__badge">-14%</span> -->
                                    
                                </div>
                                <div class="product__card--content">
                                     
                                    <h3 class="product__card--title"><a href="product-details.html">Amazon Cloud Cam Security
                                        Camera </a></h3>

                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                                         <a class="product__card--btn primary__btn" href="cart.html">Learn More </a>
                                     
                                      
                                </div>
                            </article>
                        </div>

                        <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" role="group" aria-label="1 / 5" style="width: 280px; margin-right: 30px;">
                            <article class="product__card">
                                <div class="product__card--thumbnail">
                                    <a class="product__card--thumbnail__link display-block" href="product-details.html">
                                        <img class="product__card--thumbnail__img product__primary--img" src="assets/img/product/main-product/product1.webp" alt="product-img">
                                        <img class="product__card--thumbnail__img product__secondary--img" src="assets/img/product/main-product/product4.webp" alt="product-img">
                                    </a>
                                    <!-- <span class="product__badge">-14%</span> -->
                                    
                                </div>
                                <div class="product__card--content">
                                     
                                    <h3 class="product__card--title"><a href="product-details.html">Amazon Cloud Cam Security
                                        Camera </a></h3>

                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                                         <a class="product__card--btn primary__btn" href="cart.html">Learn More </a>
                                     
                                      
                                </div>
                            </article>
                        </div>

                        <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" role="group" aria-label="1 / 5" style="width: 280px; margin-right: 30px;">
                            <article class="product__card">
                                <div class="product__card--thumbnail">
                                    <a class="product__card--thumbnail__link display-block" href="product-details.html">
                                        <img class="product__card--thumbnail__img product__primary--img" src="assets/img/product/main-product/product1.webp" alt="product-img">
                                        <img class="product__card--thumbnail__img product__secondary--img" src="assets/img/product/main-product/product4.webp" alt="product-img">
                                    </a>
                                    <!-- <span class="product__badge">-14%</span> -->
                                    
                                </div>
                                <div class="product__card--content">
                                     
                                    <h3 class="product__card--title"><a href="product-details.html">Amazon Cloud Cam Security
                                        Camera </a></h3>

                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                                         <a class="product__card--btn primary__btn" href="cart.html">Learn More </a>
                                     
                                      
                                </div>
                            </article>
                        </div>

                        <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" role="group" aria-label="1 / 5" style="width: 280px; margin-right: 30px;">
                            <article class="product__card">
                                <div class="product__card--thumbnail">
                                    <a class="product__card--thumbnail__link display-block" href="product-details.html">
                                        <img class="product__card--thumbnail__img product__primary--img" src="assets/img/product/main-product/product1.webp" alt="product-img">
                                        <img class="product__card--thumbnail__img product__secondary--img" src="assets/img/product/main-product/product4.webp" alt="product-img">
                                    </a>
                                    <!-- <span class="product__badge">-14%</span> -->
                                    
                                </div>
                                <div class="product__card--content">
                                     
                                    <h3 class="product__card--title"><a href="product-details.html">Amazon Cloud Cam Security
                                        Camera </a></h3>

                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                                         <a class="product__card--btn primary__btn" href="cart.html">Learn More </a>
                                     
                                      
                                </div>
                            </article>
                        </div>
                           <!-- modified card end -->
                         
                   
                         
                         
                    </div>
                    <div class="swiper__nav--btn swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-51bbd51caf590e2c">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                    <div class="swiper__nav--btn swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-51bbd51caf590e2c">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </section>


        <style type="text/css">
            .categories__shop--card{
                display: flex;
                justify-content: ceneter;
                flex-direction: column;
            }
        </style>


        <section>
            <div class="container">
                <div class="categories__shop mb-50">
                                <div class="section__heading border-bottom mb-30 text-center">
                                    <h2 class="section__heading--maintitle">You  <span>May Like</span></h2>
                                </div>
                                <ul class="categories__shop--inner">
                                    <li class="categories__shop--card">
                                        <a class="categories__shop--card__link" href="product-details.html">
                                            <div class="categories__thumbnail mb-15">
                                                <img class="categories__thumbnail--img" src="assets/img/product/main-product/product1.webp" alt="categories-img">
                                            </div>
                                            <div class="categories__content">
                                                <h2 class="categories__content--title">Auto Parts</h2>
                                                <span class="categories__content--subtitle">(20 Items)</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="categories__shop--card">
                                        <a class="categories__shop--card__link" href="product-details.html">
                                            <div class="categories__thumbnail mb-15">
                                                <img class="categories__thumbnail--img" src="assets/img/product/main-product/product2.webp" alt="categories-img">
                                            </div>
                                            <div class="categories__content">
                                                <h2 class="categories__content--title">TPMS Sensors</h2>
                                                <span class="categories__content--subtitle">(18 Items)</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="categories__shop--card">
                                        <a class="categories__shop--card__link" href="product-details.html">
                                            <div class="categories__thumbnail mb-15">
                                                <img class="categories__thumbnail--img" src="assets/img/product/main-product/product3.webp" alt="categories-img">
                                            </div>
                                            <div class="categories__content">
                                                <h2 class="categories__content--title">Parts Box</h2>
                                                <span class="categories__content--subtitle">(22 Items)</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="categories__shop--card">
                                        <a class="categories__shop--card__link" href="product-details.html">
                                            <div class="categories__thumbnail mb-15">
                                                <img class="categories__thumbnail--img" src="assets/img/product/main-product/product4.webp" alt="categories-img">
                                            </div>
                                            <div class="categories__content">
                                                <h2 class="categories__content--title">Tires Chains</h2>
                                                <span class="categories__content--subtitle">(16 Items)</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="categories__shop--card">
                                        <a class="categories__shop--card__link" href="product-details.html">
                                            <div class="categories__thumbnail mb-15">
                                                <img class="categories__thumbnail--img" src="assets/img/product/main-product/product5.webp" alt="categories-img">
                                            </div>
                                            <div class="categories__content">
                                                <h2 class="categories__content--title">Caliper Covers</h2>
                                                <span class="categories__content--subtitle">(25 Items)</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="categories__shop--card">
                                        <a class="categories__shop--card__link" href="product-details.html">
                                            <div class="categories__thumbnail mb-15">
                                                <img class="categories__thumbnail--img" src="assets/img/product/main-product/product6.webp" alt="categories-img">
                                            </div>
                                            <div class="categories__content">
                                                <h2 class="categories__content--title">Wheel Adapter</h2>
                                                <span class="categories__content--subtitle">(17 Items)</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="categories__shop--card">
                                        <a class="categories__shop--card__link" href="product-details.html">
                                            <div class="categories__thumbnail mb-15">
                                                <img class="categories__thumbnail--img" src="assets/img/product/main-product/product11.webp" alt="categories-img">
                                            </div>
                                            <div class="categories__content">
                                                <h2 class="categories__content--title">Engine Parts</h2>
                                                <span class="categories__content--subtitle">(22 Items)</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="categories__shop--card">
                                        <a class="categories__shop--card__link" href="product-details.html">
                                            <div class="categories__thumbnail mb-15">
                                                <img class="categories__thumbnail--img" src="assets/img/product/main-product/product12.webp" alt="categories-img">
                                            </div>
                                            <div class="categories__content">
                                                <h2 class="categories__content--title">Smart Devices</h2>
                                                <span class="categories__content--subtitle">(26 Items)</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
            </div>
        </section>


        <section class="testimonial__section testimonial__bg section--padding pb-0">
            <div class="container">
                <div class="section__heading style2 text-center mb-40">
                    <h2 class="section__heading--maintitle">Here From Our Happy Customers</h2>
                </div>
                <div class="testimonial__section--inner">
                    <div class="testimonial__active--one swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode swiper-thumbs">
                        <div class="swiper-wrapper" id="swiper-wrapper-d28292c5d0329fd3" aria-live="polite" style="transform: translate3d(-1230px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 6" style="width: 226px; margin-right: 20px;">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img" src="assets/img/other/testimonial-thumb2.webp" alt="testimonial-img">
                                </div>
                            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" role="group" aria-label="3 / 6" style="width: 226px; margin-right: 20px;">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img" src="assets/img/other/testimonial-thumb3.webp" alt="testimonial-img">
                                </div>
                            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="3" role="group" aria-label="4 / 6" style="width: 226px; margin-right: 20px;">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img" src="assets/img/other/testimonial-thumb4.webp" alt="testimonial-img">
                                </div>
                            </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 6" style="width: 226px; margin-right: 20px;">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img" src="assets/img/other/testimonial-thumb5.webp" alt="testimonial-img">
                                </div>
                            </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" role="group" aria-label="6 / 6" style="width: 226px; margin-right: 20px;">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img" src="assets/img/other/testimonial-thumb4.webp" alt="testimonial-img">
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-visible swiper-slide-thumb-active" data-swiper-slide-index="0" role="group" aria-label="1 / 6" style="width: 226px; margin-right: 20px;">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img" src="assets/img/other/testimonial-thumb1.webp" alt="testimonial-img">
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-visible swiper-slide-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 6" style="width: 226px; margin-right: 20px;">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img" src="assets/img/other/testimonial-thumb2.webp" alt="testimonial-img">
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-visible swiper-slide-active" data-swiper-slide-index="2" role="group" aria-label="3 / 6" style="width: 226px; margin-right: 20px;">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img" src="assets/img/other/testimonial-thumb3.webp" alt="testimonial-img">
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-visible swiper-slide-next" data-swiper-slide-index="3" role="group" aria-label="4 / 6" style="width: 226px; margin-right: 20px;">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img" src="assets/img/other/testimonial-thumb4.webp" alt="testimonial-img">
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-visible" data-swiper-slide-index="4" role="group" aria-label="5 / 6" style="width: 226px; margin-right: 20px;">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img" src="assets/img/other/testimonial-thumb5.webp" alt="testimonial-img">
                                </div>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="5" role="group" aria-label="6 / 6" style="width: 226px; margin-right: 20px;">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img" src="assets/img/other/testimonial-thumb4.webp" alt="testimonial-img">
                                </div>
                            </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-thumb-active" data-swiper-slide-index="0" role="group" aria-label="1 / 6" style="width: 226px; margin-right: 20px;">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img" src="assets/img/other/testimonial-thumb1.webp" alt="testimonial-img">
                                </div>
                            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 6" style="width: 226px; margin-right: 20px;">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img" src="assets/img/other/testimonial-thumb2.webp" alt="testimonial-img">
                                </div>
                            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" role="group" aria-label="3 / 6" style="width: 226px; margin-right: 20px;">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img" src="assets/img/other/testimonial-thumb3.webp" alt="testimonial-img">
                                </div>
                            </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="3" role="group" aria-label="4 / 6" style="width: 226px; margin-right: 20px;">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img" src="assets/img/other/testimonial-thumb4.webp" alt="testimonial-img">
                                </div>
                            </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 6" style="width: 226px; margin-right: 20px;">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img" src="assets/img/other/testimonial-thumb5.webp" alt="testimonial-img">
                                </div>
                            </div></div>
                        <div class="swiper__nav--btn swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-d28292c5d0329fd3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                        <div class="swiper__nav--btn swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-d28292c5d0329fd3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                        </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    <div class="testimonial__active--two swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                        <div class="swiper-wrapper" id="swiper-wrapper-65a6ec6ff8b0e10da" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(-3660px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 2" style="width: 1210px; margin-right: 10px;">
                                <div class="testimonial__items--content">
                                    <p class="testimonial__items--desc">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    <ul class="rating testimonial__rating d-flex justify-content-center">
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                    </ul>
                                    <span class="testimonial__items--subtitle">Calire copper</span>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="1 / 2" style="width: 1210px; margin-right: 10px;">
                                <div class="testimonial__items--content">
                                    <p class="testimonial__items--desc">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    <ul class="rating testimonial__rating d-flex justify-content-center">
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                    </ul>
                                    <span class="testimonial__items--subtitle">Calire copper</span>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="2 / 2" style="width: 1210px; margin-right: 10px;">
                                <div class="testimonial__items--content">
                                    <p class="testimonial__items--desc">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    <ul class="rating testimonial__rating d-flex justify-content-center">
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                    </ul>
                                    <span class="testimonial__items--subtitle">Calire copper</span>
                                </div>
                            </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="1 / 2" style="width: 1210px; margin-right: 10px;">
                                <div class="testimonial__items--content">
                                    <p class="testimonial__items--desc">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    <ul class="rating testimonial__rating d-flex justify-content-center">
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__icon">
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.08398 0.921875L4.56055 4.03906L1.11523 4.53125C0.505859 4.625 0.271484 5.375 0.716797 5.82031L3.17773 8.23438L2.5918 11.6328C2.49805 12.2422 3.1543 12.7109 3.69336 12.4297L6.76367 10.8125L9.81055 12.4297C10.3496 12.7109 11.0059 12.2422 10.9121 11.6328L10.3262 8.23438L12.7871 5.82031C13.2324 5.375 12.998 4.625 12.3887 4.53125L8.9668 4.03906L7.41992 0.921875C7.16211 0.382812 6.36523 0.359375 6.08398 0.921875Z" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                    </ul>
                                    <span class="testimonial__items--subtitle">Calire copper</span>
                                </div>
                            </div></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

                </div>
            </div>
        </section>



        <section class="section--padding">
            <div class="container">
               <div class="section__heading style2 text-center mb-40">
                    <h2 class="section__heading--maintitle">How Automoss Works</h2>
                </div>
                <img src="https://ssdemo.in/frontend/img/services/how.png">
            </div>
        </section>

        <section class="shipping__section">
            <div class="container">
                <div class="section__heading style2 text-center mb-40">
                    <h2 class="section__heading--maintitle">AUTOMOSS GUARANTEE</h2>
                </div>
                <div class="shipping__inner style2 d-flex">
                    <div class="shipping__items style2 d-flex align-items-center">
                        <div class="shipping__icon">  
                            <img src="assets/img/other/shipping1.webp" alt="icon-img">
                        </div>
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Best Service</h2>
                            <p class="shipping__content--desc">Best Service in the market   </p>
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
                            <h2 class="shipping__content--title h3">Best Award Winner</h2>
                            <p class="shipping__content--desc">Best Award Winner </p>
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



        <div class="counterup__banner--section counterup__banner__bg2" id="funfactId">
            <div class="container">
                <div class="row row-cols-1 align-items-center">
                    <div class="col">
                        <div class="counterup__banner--inner position__relative d-flex align-items-center justify-content-between">
                            <div class="counterup__items text-center">
                                <h2 class="counterup__title">YEARS OF <br>
                                    FOUNDATION</h2>
                                <span class="counterup__number js-counter" data-count="50">50</span>
                            </div>
                            <div class="counterup__items text-center">
                                <h2 class="counterup__title">SKILLED TEAM <br>
                                    MEMBERS </h2>
                                <span class="counterup__number js-counter" data-count="100">100</span>
                            </div>
                            <div class="counterup__items text-center">
                                <h2 class="counterup__title">HAPPY <br>
                                    CUSTOMERS</h2>
                                <span class="counterup__number js-counter" data-count="80">80</span>
                            </div>
                            <div class="counterup__items text-center">
                                <h2 class="counterup__title">MONTHLY <br>
                                    ORDERS</h2>
                                <span class="counterup__number js-counter" data-count="70">70</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="banner__section section--padding">
            <div class="container">
                <div class="row  mb--n30">
                    <div class="col-lg-6 col-md-6 mb-30">
                        <div class="banner__items position__relative">
                            <a class="banner__thumbnail display-block" href=""><img class="banner__thumbnail--img banner__max--height" src="assets/img/banner/banner1.webp" alt="banner-img">
                                <div class="banner__content">
                                    <span class="banner__content--subtitle text__secondary">Toyota Combo</span>
                                    <h2 class="banner__content--title"><span class="banner__content--title__inner">CAR RUBBING &amp;</span> POLISHING</h2>
                                    <span class="banner__content--price">₹1500</span>
                                    <span class="banner__content--btn">Book Now
                                        <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                        <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>



            <div style="display:none;" class="pt-3 mt-3 container">
                <div class="section__heading border-bottom mb-30">
                    <h2 class="section__heading--maintitle">Custom <span> Service in Bhubaneswar</span></h2>
                </div>
                <div class="blog__section--inner blog__swiper--activation swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                    <div class="swiper-wrapper" id="swiper-wrapper-381ef181fec04e22" aria-live="polite" style="transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1">
                        <div class="blog__card" style="max-width: 250px; height: auto;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href=""><img class="blog__card--thumbnail__img" src="assets/img/product/55.png" alt="blog-img" style="max-width: 100%; height: auto;"></a>

                            </div>
                            
                        </div>
                    </div><div class="swiper-slide swiper-slide-duplicate" style="margin-right: 5px;" data-swiper-slide-index="2">
                        <div class="blog__card" style="max-width: 250px; height: auto; margin-bottom: 10px;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="">
                                    <img class="blog__card--thumbnail__img" src="assets/img/product/251.png" alt="blog-img" style="max-width: 100%; height: auto;">
                                </a>
                            </div>
                        </div>
                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" style="margin-right: 50px;" data-swiper-slide-index="3">
                        <div class="blog__card" style="max-width: 250px; height: auto; margin-bottom: 10px;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="">
                                    <img class="blog__card--thumbnail__img" src="assets/img/product/262.png" alt="blog-img" style="max-width: 100%; height: auto;">
                                </a>
                            </div>
                        </div>
                    </div>
                        <div class="swiper-slide" data-swiper-slide-index="0">
                          <div class="blog__card" style="max-width: 250px; height: auto;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="">
                                    <img class="blog__card--thumbnail__img" src="assets/img/product/44.png" alt="blog-img" style="max-width: 100%; height: auto;">
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="1">
                        <div class="blog__card" style="max-width: 250px; height: auto;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href=""><img class="blog__card--thumbnail__img" src="assets/img/product/55.png" alt="blog-img" style="max-width: 100%; height: auto;"></a>

                            </div>
                            
                        </div>
                    </div>
                    <div class="swiper-slide" style="margin-right: 5px;" data-swiper-slide-index="2">
                        <div class="blog__card" style="max-width: 250px; height: auto; margin-bottom: 10px;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="">
                                    <img class="blog__card--thumbnail__img" src="assets/img/product/251.png" alt="blog-img" style="max-width: 100%; height: auto;">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide" style="margin-right: 50px;" data-swiper-slide-index="3">
                        <div class="blog__card" style="max-width: 250px; height: auto; margin-bottom: 10px;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="">
                                    <img class="blog__card--thumbnail__img" src="assets/img/product/262.png" alt="blog-img" style="max-width: 100%; height: auto;">
                                </a>
                            </div>
                        </div>
                    </div>

                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0">
                          <div class="blog__card" style="max-width: 250px; height: auto;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="">
                                    <img class="blog__card--thumbnail__img" src="assets/img/product/44.png" alt="blog-img" style="max-width: 100%; height: auto;">
                                </a>
                            </div>
                        </div>

                    </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1">
                        <div class="blog__card" style="max-width: 250px; height: auto;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href=""><img class="blog__card--thumbnail__img" src="assets/img/product/55.png" alt="blog-img" style="max-width: 100%; height: auto;"></a>

                            </div>
                            
                        </div>
                    </div><div class="swiper-slide swiper-slide-duplicate" style="margin-right: 5px;" data-swiper-slide-index="2">
                        <div class="blog__card" style="max-width: 250px; height: auto; margin-bottom: 10px;">
                            <div class="blog__card--thumbnail">
                                <a class="blog__card--thumbnail__link" href="">
                                    <img class="blog__card--thumbnail__img" src="assets/img/product/251.png" alt="blog-img" style="max-width: 100%; height: auto;">
                                </a>
                            </div>
                        </div>
                    </div></div>
                <div class="swiper__nav--btn swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-381ef181fec04e22">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
                <div class="swiper__nav--btn swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-381ef181fec04e22">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" -chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

            </div>
        </section>
















        <!-- Start banner section -->
        <section style="display:none;" class="banner__section section--padding pt-0">
            <div class="container">
                <div class="row  mb--n30">
                    
                    <div class="col-md-3 mb-30">
                        <div class="card" style="width: 18rem;">
                              <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="Card Image">
                              <div class="card-body">
                                <h5 class="card-title">Card Title</h5>
                                <p class="card-text">This is a simple card with an image, a heading, and some text. It demonstrates the use of Bootstrap's card component.</p>
                                <a href="#" class="btn btn-primary">Learn More</a>
                              </div>
                        </div>                        
                    </div>

                    <div class="col-md-3 mb-30">
                        <div class="card" style="width: 18rem;">
                              <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="Card Image">
                              <div class="card-body">
                                <h5 class="card-title">Card Title</h5>
                                <p class="card-text">This is a simple card with an image, a heading, and some text. It demonstrates the use of Bootstrap's card component.</p>
                                <a href="#" class="btn btn-primary">Learn More</a>
                              </div>
                        </div>                        
                    </div>

                    <div class="col-md-3 mb-30">
                        <div class="card" style="width: 18rem;">
                              <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="Card Image">
                              <div class="card-body">
                                <h5 class="card-title">Card Title</h5>
                                <p class="card-text">This is a simple card with an image, a heading, and some text. It demonstrates the use of Bootstrap's card component.</p>
                                <a href="#" class="btn btn-primary">Learn More</a>
                              </div>
                        </div>                        
                    </div>

                    <div class="col-md-3 mb-30">
                        <div class="card" style="width: 18rem;">
                              <img src="https://via.placeholder.com/286x180" class="card-img-top" alt="Card Image">
                              <div class="card-body">
                                <h5 class="card-title">Card Title</h5>
                                <p class="card-text">This is a simple card with an image, a heading, and some text. It demonstrates the use of Bootstrap's card component.</p>
                                <a href="#" class="btn btn-primary">Learn More</a>
                              </div>
                        </div>                        
                    </div>
                    





                </div>
            </div>



            

            </div>
        </section>
        <!-- End banner section -->

























































        <!-- Start product section -->
        <section style="display:none;" class="product__section deal__section--bg section--padding ">
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
                                    

                                        <ul class="single__product--action d-flex align-items-end ">
                                            <li class="single__product--action__list">
                                                <a class="single__product--cart__btn" href="">
                                                    Select
                                                </a>
                                            </li>
                                       
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
        <section style="display:none;" class="blog__section section--padding">
        
            <div class="container">
                <div class="section__heading section__heading--flex border-bottom d-flex justify-content-between align-items-end mb-30">
                    <h2 class="section__heading--maintitle">Blog & article</h2>
                    <a class="view__all--link" href="<?= base_url()?>blog">View all Blog</a>
                </div>
                <div class="blog__section--inner blog__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog__card">
                                <div class="blog__card--thumbnail">
                                    <a class="blog__card--thumbnail__link" href="<?= base_url()?>blog_details"><img class="blog__card--thumbnail__img" src="assets/img/blog/blog1.webp" alt="blog-img"></a>
                                    <span class="blog__card--meta__date">20 <br> Oct</span>  
                                </div>
                                <div class="blog__card--content">
                                    <span class="blog__card--meta">By: Rasalina</span>
                                    <h3 class="blog__card--title"><a href="<?= base_url()?>blog_details">Beauty Skin Care Product In Stock</a></h3>
                                    <p class="blog__card--desc">Namkand sodales vel online best prices when
                                        an unknown printer took a galley of  </p>
                                    <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                        <a class="blog__card--btn__link" href="<?= base_url()?>blog_details">Read more 
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
                                    <a class="blog__card--thumbnail__link" href="<?= base_url()?>blog_details"><img class="blog__card--thumbnail__img" src="assets/img/blog/blog2.webp" alt="blog-img"></a>
                                    <span class="blog__card--meta__date">24 <br> Oct</span>  
                                </div>
                                <div class="blog__card--content">
                                    <span class="blog__card--meta">By: Rasalina</span>
                                    <h3 class="blog__card--title"><a href="<?= base_url()?>blog_details">Lorem ipsum dolor sit thre elit.</a></h3>
                                    <p class="blog__card--desc">Namkand sodales vel online best prices when
                                        an unknown printer took a galley of  </p>
                                    <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                        <a class="blog__card--btn__link" href="<?= base_url()?>blog_details">Read more 
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
                                    <a class="blog__card--thumbnail__link" href="<?= base_url()?>blog_details"><img class="blog__card--thumbnail__img" src="assets/img/blog/blog3.webp" alt="blog-img"></a>
                                    <span class="blog__card--meta__date">22 <br> Oct</span>  
                                </div>
                                <div class="blog__card--content">
                                    <span class="blog__card--meta">By: Rasalina</span>
                                    <h3 class="blog__card--title"><a href="<?= base_url()?>blog_details">Possimus libero id moles cumqu.</a></h3>
                                    <p class="blog__card--desc">Namkand sodales vel online best prices when
                                        an unknown printer took a galley of  </p>
                                        <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                            <a class="blog__card--btn__link" href="<?= base_url()?>blog_details">Read more 
                                                <svg width="12" height="8" viewbox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z" fill="currentColor"></path>
                                                </svg>
                                            </a>
                                            <ul class="social__share blog__card--social d-flex">
                                                <li class="social__share--list">
                                                    <a class="social__share--icon" target="_blank" href="<?= $common->facebook?>">
                                                        <svg width="9" height="15" viewbox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Facebook</span>
                                                    </a>
                                                </li>
                                                <li class="social__share--list">
                                                    <a class="social__share--icon" target="_blank" href="<?= $common->twitter?>">
                                                        <svg width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Twitter</span>
                                                    </a>
                                                </li>
                                                <li class="social__share--list">
                                                    <a class="social__share--icon" target="_blank" href="<?= $common->instagram?>">
                                                        <svg width="14" height="13" viewbox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z" fill="currentColor"></path>
                                                        </svg>  
                                                        <span class="visually-hidden">Instagram</span>
                                                    </a>
                                                </li>
                                                <li class="social__share--list">
                                                    <a class="social__share--icon" target="_blank" href="<?= $common->youtube?>">
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
                                    <a class="blog__card--thumbnail__link" href="<?= base_url()?>blog_details"><img class="blog__card--thumbnail__img" src="assets/img/blog/blog1.webp" alt="blog-img"></a>
                                    <span class="blog__card--meta__date">18 <br> Oct</span>  
                                </div>
                                <div class="blog__card--content">
                                    <span class="blog__card--meta">By: Rasalina</span>
                                    <h3 class="blog__card--title"><a href="<?= base_url()?>blog_details">Beauty Skin Care Product In Stock</a></h3>
                                    <p class="blog__card--desc">Namkand sodales vel online best prices when
                                        an unknown printer took a galley of  </p>
                                        <div class="blog__card--footer d-flex justify-content-between align-items-center">
                                            <a class="blog__card--btn__link" href="<?= base_url()?>blog_details">Read more 
                                                <svg width="12" height="8" viewbox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.8335 3.6178L8.26381 0.157332C8.21395 0.107774 8.1532 0.0681771 8.08544 0.0410843C8.01768 0.0139915 7.94441 0 7.87032 0C7.79624 0 7.72297 0.0139915 7.65521 0.0410843C7.58746 0.0681771 7.5267 0.107774 7.47684 0.157332C7.37199 0.262044 7.31393 0.39827 7.31393 0.539537C7.31393 0.680805 7.37199 0.817024 7.47684 0.921736L10.0943 3.45837H0.55625C0.405122 3.46829 0.26375 3.52959 0.160556 3.62994C0.057363 3.73029 0 3.86225 0 3.99929C0 4.13633 0.057363 4.26829 0.160556 4.36864C0.26375 4.46899 0.405122 4.53029 0.55625 4.54021H10.0927L7.47527 7.07826C7.37042 7.18298 7.31235 7.3192 7.31235 7.46047C7.31235 7.60174 7.37042 7.73796 7.47527 7.84267C7.52513 7.89223 7.58588 7.93182 7.65364 7.95892C7.7214 7.98601 7.79467 8 7.86875 8C7.94284 8 8.0161 7.98601 8.08386 7.95892C8.15162 7.93182 8.21238 7.89223 8.26223 7.84267L11.8335 4.38932C11.9406 4.28419 12 4.14649 12 4.00356C12 3.86063 11.9406 3.72293 11.8335 3.6178Z" fill="currentColor"></path>
                                                </svg>
                                            </a>
                                            <ul class="social__share blog__card--social d-flex">
                                                <li class="social__share--list">
                                                    <a class="social__share--icon" target="_blank" href="<?= $common->facebook?>">
                                                        <svg width="9" height="15" viewbox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.62891 8.625L8.01172 6.10938H5.57812V4.46875C5.57812 3.75781 5.90625 3.10156 7 3.10156H8.12109V0.941406C8.12109 0.941406 7.10938 0.75 6.15234 0.75C4.15625 0.75 2.84375 1.98047 2.84375 4.16797V6.10938H0.601562V8.625H2.84375V14.75H5.57812V8.625H7.62891Z" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Facebook</span>
                                                    </a>
                                                </li>
                                                <li class="social__share--list">
                                                    <a class="social__share--icon" target="_blank" href="<?= $common->twitter?>">
                                                        <svg width="14" height="12" viewbox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.5508 2.90625C13.0977 2.49609 13.5898 2.00391 13.9727 1.42969C13.4805 1.64844 12.9062 1.8125 12.332 1.86719C12.9336 1.51172 13.3711 0.964844 13.5898 0.28125C13.043 0.609375 12.4141 0.855469 11.7852 0.992188C11.2383 0.417969 10.5 0.0898438 9.67969 0.0898438C8.09375 0.0898438 6.80859 1.375 6.80859 2.96094C6.80859 3.17969 6.83594 3.39844 6.89062 3.61719C4.51172 3.48047 2.37891 2.33203 0.957031 0.609375C0.710938 1.01953 0.574219 1.51172 0.574219 2.05859C0.574219 3.04297 1.06641 3.91797 1.85938 4.4375C1.39453 4.41016 0.929688 4.30078 0.546875 4.08203V4.10938C0.546875 5.50391 1.53125 6.65234 2.84375 6.92578C2.625 6.98047 2.35156 7.03516 2.10547 7.03516C1.91406 7.03516 1.75 7.00781 1.55859 6.98047C1.91406 8.12891 2.98047 8.94922 4.23828 8.97656C3.25391 9.74219 2.02344 10.207 0.683594 10.207C0.4375 10.207 0.21875 10.1797 0 10.1523C1.25781 10.9727 2.76172 11.4375 4.40234 11.4375C9.67969 11.4375 12.5508 7.08984 12.5508 3.28906C12.5508 3.15234 12.5508 3.04297 12.5508 2.90625Z" fill="currentColor"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Twitter</span>
                                                    </a>
                                                </li>
                                                <li class="social__share--list">
                                                    <a class="social__share--icon" target="_blank" href="<?= $common->instagram?>">
                                                        <svg width="14" height="13" viewbox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.125 3.60547C5.375 3.60547 3.98047 5.02734 3.98047 6.75C3.98047 8.5 5.375 9.89453 7.125 9.89453C8.84766 9.89453 10.2695 8.5 10.2695 6.75C10.2695 5.02734 8.84766 3.60547 7.125 3.60547ZM7.125 8.80078C6.00391 8.80078 5.07422 7.89844 5.07422 6.75C5.07422 5.62891 5.97656 4.72656 7.125 4.72656C8.24609 4.72656 9.14844 5.62891 9.14844 6.75C9.14844 7.89844 8.24609 8.80078 7.125 8.80078ZM11.1172 3.49609C11.1172 3.08594 10.7891 2.75781 10.3789 2.75781C9.96875 2.75781 9.64062 3.08594 9.64062 3.49609C9.64062 3.90625 9.96875 4.23438 10.3789 4.23438C10.7891 4.23438 11.1172 3.90625 11.1172 3.49609ZM13.1953 4.23438C13.1406 3.25 12.9219 2.375 12.2109 1.66406C11.5 0.953125 10.625 0.734375 9.64062 0.679688C8.62891 0.625 5.59375 0.625 4.58203 0.679688C3.59766 0.734375 2.75 0.953125 2.01172 1.66406C1.30078 2.375 1.08203 3.25 1.02734 4.23438C0.972656 5.24609 0.972656 8.28125 1.02734 9.29297C1.08203 10.2773 1.30078 11.125 2.01172 11.8633C2.75 12.5742 3.59766 12.793 4.58203 12.8477C5.59375 12.9023 8.62891 12.9023 9.64062 12.8477C10.625 12.793 11.5 12.5742 12.2109 11.8633C12.9219 11.125 13.1406 10.2773 13.1953 9.29297C13.25 8.28125 13.25 5.24609 13.1953 4.23438ZM11.8828 10.3594C11.6914 10.9062 11.2539 11.3164 10.7344 11.5352C9.91406 11.8633 8 11.7812 7.125 11.7812C6.22266 11.7812 4.30859 11.8633 3.51562 11.5352C2.96875 11.3164 2.55859 10.9062 2.33984 10.3594C2.01172 9.56641 2.09375 7.65234 2.09375 6.75C2.09375 5.875 2.01172 3.96094 2.33984 3.14062C2.55859 2.62109 2.96875 2.21094 3.51562 1.99219C4.30859 1.66406 6.22266 1.74609 7.125 1.74609C8 1.74609 9.91406 1.66406 10.7344 1.99219C11.2539 2.18359 11.6641 2.62109 11.8828 3.14062C12.2109 3.96094 12.1289 5.875 12.1289 6.75C12.1289 7.65234 12.2109 9.56641 11.8828 10.3594Z" fill="currentColor"></path>
                                                        </svg>  
                                                        <span class="visually-hidden">Instagram</span>
                                                    </a>
                                                </li>
                                                <li class="social__share--list">
                                                    <a class="social__share--icon" target="_blank" href="<?= $common->youtube?>">
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
        <section style="display:none;"  class="shipping__section">
            <div class="container">
                <div class="shipping__inner style2 d-flex">
                    <div class="shipping__items style2 d-flex align-items-center">
                        <div class="shipping__icon">  
                            <img src="<?= base_url() ?>assets/img/other/shipping1.webp" alt="icon-img">
                        </div>
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Free Pick Up</h2>
                            <p class="shipping__content--desc">Free Car Pick & Drop in 10km</p>
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">
                        <div class="shipping__icon">  
                            <img src="<?= base_url() ?>assets/img/other/shipping2.webp" alt="icon-img">
                        </div>
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Support 24/7</h2>
                            <p class="shipping__content--desc">Contact us 24 hours a day</p>
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">
                        <div class="shipping__icon">  
                            <img src="<?= base_url() ?>assets/img/other/shipping3.webp" alt="icon-img">
                        </div>
                        <div class="shipping__content">
                            <h2 class="shipping__content--title h3">Value For Money</h2>
                            <p class="shipping__content--desc">Get Competative Price</p>
                        </div>
                    </div>
                    <div class="shipping__items style2 d-flex align-items-center">
                        <div class="shipping__icon">  
                            <img src="<?= base_url() ?>assets/img/other/shipping4.webp" alt="icon-img">
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



<script type="text/javascript">
    var page_nm = 'home';
</script>
 

<?php
  include('inc/footer.php');

?>

