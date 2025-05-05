<?php    
    
    $this->load->view('customer/inc/headerv3');
?>

<link href="<?=base_url()  ?>/slimcrop/slim/slim.min.css" rel="stylesheet">
<script src="<?=base_url()  ?>/slimcrop/slim/slim.kickstart.min.js"></script>

<style>
#map {
    height: 400px;
    width: 890px;
}

.status-badge {
    font-size: 1rem;
    padding: 0.5rem 1rem;
    font-weight: 600;
    text-transform: capitalize;
}

.status-badge.completed {
    background-color: #28a745;
    /* Green */
    color: white;
}

.status-badge.active {
    background-color: #ffc107;
    /* Yellow */
    color: #343a40;
    /* Dark Text */
}



.star-rating {
    display: flex;
    flex-direction: row-reverse;
    justify-content: left;
}

.star-rating input {
    display: none;
}

.star-rating label {
    font-size: 5rem;
    color: #ddd;
    cursor: pointer;
    transition: color 0.2s ease-in-out;
}

.star-rating input:checked~label,
.star-rating input:hover~label,
.star-rating label:hover~label {
    color: #ed1d24;
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

.card_border {
    width: 100%;
    /* border: 4px solid red; */
    border: 10px solid;
    border-image-slice: 1;
    border-width: 5px;
    border-image-source: linear-gradient(to left, #080808, #ff0000);
}

.card_border .card-title {
    background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(255, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 100%, rgba(252, 164, 255, 1) 100%, rgba(0, 0, 0, 1) 100%);
    color: white;
}
</style>

<div class="container">
    <div class="row mb-5">



        <div class="col-12 p-3  d-flex justify-content-between align-items-center" style="background: #e2e2e2c2;border-radius: 10px;">
            <h2 class="pl_0 title_3d">Product Order Details</h2>



            <!-- <span class="badge badge-pill status-badge completed">Completed</span> -->


            <a href="<?= base_url() ?>customer/product_orders" class="btn btn-danger btn-lg animated_btn" type="submit">
                <span>Back</span></a>

        </div>


    </div>

    <div class="row justify-content-center">

        <div class="col-md-6 order-1">
        <div class="card shadow-lg mb-4 card_border rounded-3 p-2 bg-light" style="width: 100%">
        <h2 class="card-title mb-0 ps-3">Customer Details</h2>



                <div class="card-body">
                    <table class="table" style="border-collapse: collapse; width: 100%;">
                        <thead class="table-primary">
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong><i class="fas fa-user"></i>&nbsp; Full Name</strong></td>
                                <td><?=$orderdtl->shipping_name ?></td>
                            </tr>
                            <tr>
                                <td><strong><i class="fas fa-phone"></i> &nbsp;Phone</strong></td>
                                <td><?=$orderdtl->shipping_phone ?></td>
                            </tr>
                            <tr>
                                <td><strong><i class="fas fa-envelope"></i> &nbsp;Email</strong></td>
                                <td><?=$orderdtl->shipping_email ?></td>
                            </tr>
                            <tr>
                                <td><strong><i class="fas fa-map-marker-alt"></i> &nbsp;Address</strong></td>
                                <td><?=$orderdtl->shipping_address ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>






            </div>

        </div>

        <div class="col-md-6 order-1">
            <div class="card shadow-lg mb-4 card_border rounded-3 p-2 bg-light" style="width: 100%">


                <h2 class="card-title mb-0 ps-3">Product Details</h2>

                <div class="card-body">
                    <table class="table" style="border-collapse: collapse; width: 100%;">
                        <thead class="table-primary">
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong><i class="fas fa-cogs"></i>&nbsp; Product Name</strong></td>
                                <td><?=$orderdtl->product_name ?></td>
                            </tr>
                            <tr>
                                <td><strong><i class="fas fa-cogs"></i> &nbsp;qty</strong></td>
                                <td><?=$orderdtl->qty ?></td>
                            </tr>
                            <tr>
                                <td><strong><i class="fas fa-cogs"></i> &nbsp;Price</strong></td>
                                <td><?=$orderdtl->price ?></td>
                            </tr>
                            <tr>
                                <td><strong><i class="fas fa-cogs"></i> &nbsp;Home Delivery</strong></td>
                                <td><?=($orderdtl->is_homedelivery==0)?'No':'Yes' ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>







            </div>

        </div>


        <div class="col-md-12 order-3">
            <div class="card shadow-lg mb-4 border-0 rounded-3 p-2 bg-light" style="width: 100%">


                <h2 class="card-title mb-0 ps-3">Status</h2>
                <div class="card-body">

                    <?php 
                        //print_result($orderdtl);
                        if ($orderdtl->delivery_status == 1) {
                            ?>

                    <div class="row">
                        <div class="col-md-6">
                            <h2>Order Delivered</h2>
                            <p>on: <?=date('d M Y',strtotime($orderdtl->delivered_on)) ?></p>
                            <p>Cancelation OTP: <?=$orderdtl->cancelation_otp ?></p>
                        </div>
                        <div class="col-md-6">
                            <h2>Give Review</h2>


                            <form method="post" class="mt-4">

                                <div class="star-rating">
                                    <input type="radio" name="rating"
                                        <?=(isset($rvw_info->rating) && $rvw_info->rating==5)?"checked":"" ?> id="star5"
                                        value="5">
                                    <label for="star5" title="5 stars">&#9733;</label>
                                    <input type="radio" name="rating" id="star4"
                                        <?=(isset($rvw_info->rating) && $rvw_info->rating==4)?"checked":"" ?> value="4">
                                    <label for="star4" title="4 stars">&#9733;</label>
                                    <input type="radio" name="rating" id="star3"
                                        <?=(isset($rvw_info->rating) && $rvw_info->rating==3)?"checked":"" ?> value="3">
                                    <label for="star3" title="3 stars">&#9733;</label>
                                    <input type="radio" name="rating" id="star2"
                                        <?=(isset($rvw_info->rating) && $rvw_info->rating==2)?"checked":"" ?> value="2">
                                    <label for="star2" title="2 stars">&#9733;</label>
                                    <input type="radio" name="rating" id="star1"
                                        <?=(isset($rvw_info->rating) && $rvw_info->rating==1)?"checked":"" ?> value="1">
                                    <label for="star1" title="1 star">&#9733;</label>
                                </div>
                                <div class="mb-3">
                                    <label for="feedbackText" class="form-label">Your Feedback</label>
                                    <textarea class="form-control" id="feedbackText" name="review_text" rows="4"
                                        placeholder="Write your feedback here..."><?=@$rvw_info->review_text ?></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>





                        </div>
                    </div>




                    <?php                         
                        }else if($orderdtl->is_cancelled == 1){
                            ?>
                    <h2>Order Cancelled</h2>
                    <p>on: <?=date('d M Y',strtotime($orderdtl->cancelled_on)) ?></p>

                    <?php
                       } 
                        ?>








                </div>
            </div>
        </div>










    </div>
</div>







<?php    
    
    $this->load->view('customer/inc/footerv3');
?>