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
</style>


    <main class="main__content_wrapper">
        
        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg"style="background-image: url('<?=base_url() ?>assets/img/carbg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title mb-25 text-white">Product Details</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a href="<?= base_url()?>" style="color:white;">Home</a></li>
                                <li class="breadcrumb__content--menu__items text-white"><span>Product Details</span></li>
                            </ul>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->


        <!-- //////////////////////////////////////////////////////////// -->





        <section class="product__details--section section--padding">
            <div class="container">
                <div class="row row-cols-lg-2 row-cols-md-2">
                    <div class="col">
                        <div class="product__details--media">
                            <div class="single__product--preview swiper mb-25 swiper-initialized swiper-horizontal swiper-pointer-events">
                                <div class="swiper-wrapper" id="swiper-wrapper-d10366b348b4a07b6" aria-live="polite" style="transform: translate3d(-600px, 0px, 0px); transition-duration: 0ms;">
                                    
                                    <!-- Replace <?=$pdtl->thumb?> with a fallback mechanism -->
                                    <?php
                                    $thumb = !empty($pdtl->thumb) ? $pdtl->thumb : 'https://automoss.in/default-p-image.jpg';
                                    ?>
                                    
                                    <!-- Swiper Slide 1 -->
                                    <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 5" style="width: 590px; margin-right: 10px;">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="#">
                                                <img    class="product__media--preview__items--img" src="<?= $thumb ?>" alt="product-media-img">
                                            </a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox" href="<?= $thumb ?>" data-gallery="product-media-zoom">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path>
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path>
                                                    </svg>
                                                    <!-- <span class="visually-hidden">Product view</span> -->
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Duplicate other Swiper Slides with the same fallback mechanism -->
                                    <div class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="2 / 5" style="width: 590px; margin-right: 10px;">
                                        <div class="product__media--preview__items">
                                            <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="#">
                                                <img style="border:4px solid #ED1D24; box-shadow:3px 3px 6px #ccc;" class="product__media--preview__items--img" src="<?= $thumb ?>" alt="product-media-img">
                                            </a>
                                            <div class="product__media--view__icon">
                                                <a class="product__media--view__icon--link glightbox" href="<?= $thumb ?>" data-gallery="product-media-zoom">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512">
                                                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path>
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path>
                                                    </svg>
                                                    <span class="visually-hidden">Product view</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Continue for remaining slides... -->
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>

                           
                        </div>
                    </div>   
                    <div class="col">
                        <div class="product__details--info">
                            <form action="#">
                                <h2 class="product__details--info__title mb-15"><?=$pdtl->name ?></h2>
                                <div class="product__details--info__price mb-12">
                                     <span class="old__price" style="font-size: 13px;text-decoration: line-through;">₹<?=$pdtl->mrp_price ?></span>
                                    <span class="current__price">₹<?=$pdtl->offer_price ?></span>
                                </div>

                                <div class="product__variant--list quantity d-flex align-items-center mb-20">                                        
                                        <a class="primary__btn quickview__cart--btn" href="<?=base_url('addcart/'.spl_encode($pdtl->id)) ?>">Add To Cart</a>  
                                    </div>


                                <h5 class="product__details--info__title mb-15">Sold By: <?=$pdtl->garage_name ?></h5>                                 
                                <p class="product__details--info__desc mb-15"><?=$pdtl->product_info ?></p>
                                <div class="product__variant">
                                     
                                     
                                    
                                     
                                    <div class="product__variant--list mb-15">
                                        <div class="product__details--info__meta">
                                            <p class="product__details--info__meta--list"><strong>Barcode:</strong>  <span> 565461</span> </p>
                                            <!-- <p class="product__details--info__meta--list"><strong>Sky:</strong>  <span>4420</span> </p> -->
                                            <p class="product__details--info__meta--list"><strong>Vendor:</strong>  <span>Belo</span> </p>
                                            <!-- <p class="product__details--info__meta--list"><strong>Type:</strong>  <span>Auto Parts</span> </p> -->
                                        </div>
                                    </div>
                                </div>
                                 
                                 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


         <section class="product__details--section section--padding">
            <div class="container">
                <div class="row row-cols-lg-2 row-cols-md-2">
                    <h3>Related Products</h3>
                </div>
                <div class="row row-cols-lg-2 row-cols-md-2">
                    


                     <?php
                        if(mycount($r_prd)>0){
                        foreach ($r_prd as $pd) {
                     ?>
                            <div class="col-md-4">
                                <div class="card mb-4">
                                  <img src="<?=$pd->thumb ?>" class="card-img-top" alt="Product Image" onerror="this.onerror=null; this.src='<?=base_url() ?>noprod.png';">

                                   
                                  <div class="card-body ">
                                    <small class="text-muted"><?=$pd->garage_name ?></small>
                                    <h5 class="card-title"><?=$pd->name ?></h5>
                                    <p class="card-text">
                                      <span class="old__price text-dark"><strong>₹<?=$pd->offer_price ?></strong></span> <br>
                                      <span class="text-muted text-decoration-line-through">₹<?=$pd->mrp_price ?></span>
                                    </p>

                                    <div class="d-flex"> 
                                            <a href="<?=base_url('product_details/'.spl_encode($pd->id)) ?>" style="padding: 2px 12px; font-size: 12px; margin-right:10px; " class="product__card--btn primary__btn">View Details</a>
                                            <a href="<?=base_url('addcart/'.spl_encode($pd->id)) ?>" class="product__card--btn primary__btn">Add to Cart</a>
                                    </div>
                                    
                                  </div>
                                </div>
                            </div>
                     <?php
                        }
                        }
                     ?>














                </div>
            </div>
        </section>


















        <!-- ////////////////////////////////////////////////////////////// -->







        


 
    </main>




<script type="text/javascript">
    var page_nm = 'servicedetails';
</script>

<?php
  include('inc/footer.php');
?>
 
 <script>
    function updatePriceValue(value) {
        document.getElementById('selected-price').innerText = value;
    }
</script>
