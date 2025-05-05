<?php
  include('inc/header.php');
?>


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
                            <li class="breadcrumb__content--menu__items"><span style="color: white;">Shipping
                                    Policy</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start privacy policy section -->
    <div class="privacy__policy--section section--padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="privacy__policy--content">

                        <p class="privacy__policy--content__desc">At Automoss, we are committed to providing you with a
                            seamless shopping experience. Whether you are purchasing spare parts or a used car, we aim
                            to get your items to you as quickly and efficiently as possible. Below are the details
                            regarding our shipping policy:
                        </p>
                    </div>
                    <div class="privacy__policy--content section_2">
                        <h2 class="privacy__policy--content__title">Shipping for Spare Parts</h2>
                        <h3 class="privacy__policy--content__subtitle">Processing Time:</h3>
                        <p class="privacy__policy--content__desc">Orders for spare parts are typically processed and
                            shipped within 1–2 business days after payment is confirmed. Orders placed after 5 PM or on
                            weekends will be processed the following business day.</p>

                        <h3 class="privacy__policy--content__subtitle">Shipping Methods:</h3>

                        <p class="privacy__policy--content__desc">We offer several shipping methods depending on the
                            size, weight, and urgency of the order. Available options include:</p>

                        <!-- <p class="privacy__policy--content__desc"><strong>Standard Shipping : </strong> 3–5 business
                            days</p>
                        <p class="privacy__policy--content__desc"><strong>Expedited Shipping : </strong> 1-3 business
                            days</p> -->
                        <p class="privacy__policy--content__desc"><strong>Same Day Delivery (for select locations) :
                            </strong> if you order before 12 PM, we may be able to deliver your spare parts the same day.
                        </p>


                        <h3 class="privacy__policy--content__subtitle">Shipping Fees:</h3>
                        <p class="privacy__policy--content__desc">Shipping fees for spare parts are calculated at
                            checkout based on the delivery address and shipping method.</p>

                        <p class="privacy__policy--content__desc"><strong>Free Shipping : </strong> For orders over $100 within select local areas (e.g., within the same city or region).</p>
                        <p class="privacy__policy--content__desc"><strong>Standard Fees : </strong> For orders under $100, standard shipping rates apply based on the weight and size of the item.</p>
                       
                       
                        <h3 class="privacy__policy--content__subtitle">Delivery Locations:</h3>
                        <p class="privacy__policy--content__desc">We ship nationwide, with certain restrictions based on the location and type of product. Some large or heavy items may not be available for delivery to remote locations.</p>
                          
                        
                        <h3 class="privacy__policy--content__subtitle">Tracking Your Order:</h3>
                        <p class="privacy__policy--content__desc">Once your order has been shipped, you will receive a tracking number via email to monitor the progress of your delivery.</p>
                          

                    </div>
                    <div class="privacy__policy--content section_3">
                        <h2 class="privacy__policy--content__title">Shipping for Used Cars</h2>



                        <h3 class="privacy__policy--content__subtitle">Delivery Process:</h3>
                        <p class="privacy__policy--content__desc">For customers purchasing a used car, the delivery process will vary based on the location and condition of the vehicle.</p>


                        <p class="privacy__policy--content__desc"><strong>Local Deliveries : </strong> If the car is located within a reasonable driving distance, delivery will typically take 3–7 business days.
                        </p>

                        <p class="privacy__policy--content__desc"><strong>Long-Distance Deliveries : </strong> If the car needs to be transported over a long distance, the delivery may take 7–10 business days.
                        </p>


                        <h3 class="privacy__policy--content__subtitle">Delivery Fees:</h3>

                        <p class="privacy__policy--content__desc">The cost of delivery for used cars will vary depending on the distance and the vehicle. Delivery fees will be calculated and clearly outlined during the checkout process.
                        </p>
                        <p class="privacy__policy--content__desc"><strong>Free Delivery : </strong> For orders within a specified local region (for example, within the city or nearby areas).
                        </p>

                        <p class="privacy__policy--content__desc"><strong>Regional/Long-Distance Fees : </strong> For deliveries outside the local region, the shipping fee will be calculated based on the distance and vehicle size.
                        </p>

                        <h3 class="privacy__policy--content__subtitle">Inspection and Delivery Acceptance:</h3>
                    
                        <p class="privacy__policy--content__desc">Upon delivery, customers are encouraged to thoroughly inspect the vehicle before accepting it. If there are any issues with the car, please contact our customer service team immediately. All vehicles must be accepted within 24 hours of delivery.
                        </p>
                        
                    
                    </div>

                    <div class="privacy__policy--content section_3">
                        <h2 class="privacy__policy--content__title">Shipping Delays and Issues</h2>



                        <h3 class="privacy__policy--content__subtitle">Delays:</h3>
                        <p class="privacy__policy--content__desc">While we strive to deliver your order within the expected timeframe, Automoss cannot be held responsible for delays caused by shipping carriers, especially during peak seasons, holidays, or in the event of unforeseen circumstances such as weather disruptions or strikes.</p>

                        <h3 class="privacy__policy--content__subtitle">Lost or Damaged Items:</h3>
                        <p class="privacy__policy--content__desc">In the rare case that your item is lost or damaged during shipping, please contact us immediately. We will work with the shipping carrier to resolve the issue as quickly as possible. We may offer a replacement, or a refund, based on the situation.</p>

                       
                        
                    
                    </div>





                    <div class="privacy__policy--content section_3">
                        <h2 class="privacy__policy--content__title">How to Contact Us:</h2>




                        <p class="privacy__policy--content__desc">For any questions or concerns regarding returns or
                            refunds, please contact our customer service team at:</p>



                        <h3 class="privacy__policy--content__subtitle">Email : automossindia@gmail.com</h3>
                        <h3 class="privacy__policy--content__subtitle">Phone : +91-8908991983</h3>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End privacy policy section -->
    <style>
    .services {
        font-family: 'Poppins', sans-serif;
        background-color: #1a1a1a;
        color: #fff;
        padding: 2rem;
        text-align: center;
    }

    .services__title {
        font-size: 2.5rem;
        margin-bottom: 1.5rem;
        color: #ffa500;
        font-weight: 600;
        /* Bold title */
    }

    .services__grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }

    .service {
        background-color: #2a2a2a;
        padding: 1.5rem;
        border-radius: 10px;
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .service i.icon {
        font-size: 2rem;
        margin-bottom: 0.5rem;
        display: block;
    }

    .service h3 {
        font-size: 1.6rem;
        margin-bottom: 0.5rem;
        color: #ffa500;
        font-weight: 600;

    }

    .service p {
        font-size: 1.2rem;
        color: #ccc;
        font-weight: 400;

    }

    .service:hover {
        background-color: #ffa500;
        transform: translateY(-10px);
        color: #1a1a1a;
    }

    .service:hover h3,
    .service:hover p {
        color: #1a1a1a;
    }

    .service.active {
        background-color: #ffa500;
        color: #1a1a1a;
    }

    .service.active h3,
    .service.active p {
        color: #1a1a1a;
    }
    </style>
    <!-- Start shipping section -->
    <section class="shipping__section section--padding" style="padding-top: 0;">
        <div class="container">

            <div class="services__grid">
                <div class="service">
                    <i class="icon">🚚</i>

                    <h3>Best Service</h3>
                    <p>Best Service in the market </p>
                </div>

                <div class="service">
                    <i class="icon">🕒</i>
                    <h3>Support 24/7</h3>
                    <p>Contact us 24 hours a day</p>
                </div>

                <div class="service">
                    <i class="icon">💰</i>
                    <h3>Best Award Winner</h3>
                    <p>Best Award Winner </p>
                </div>

                <div class="service">
                    <i class="icon">🔒</i>
                    <h3>Payment Secure</h3>
                    <p>We ensure secure payment</p>

                </div>
            </div>
        </div>
    </section>
    <!-- End shipping section -->

</main>

<?php
      include('inc/footer.php');
  ?>