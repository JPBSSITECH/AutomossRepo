<?php    
    
    $this->load->view('customer/inc/header2');
?>

<style type="text/css">
.price-highlight {
    font-size: 2.0rem;
    /* Larger font size */
    font-weight: bold;
    /* Bold text for emphasis */
    color: #ED1D24;
    /* Red color to highlight prices */
}

.spl_list ul li.gx::before {
    font-family: "Font Awesome 5 Free";
    content: "\f058";
    margin-right: 10px;
    color: #c23200;
}
</style>







<div class="account__wrapper">
    <div class="account__content">

        <div class="row mb-5">
            <div class="col-12 p-3 shadow d-flex justify-content-between align-items-center">
                <h2>Package Plans</h2>
                <!-- <a class="wishlist__cart--btn primary__btn" href="<?=base_url('customer/index') ?>">Dashboard</a> -->
            </div>
        </div>

        <!-- ////////////////////////////// -->





        <div class="alert alert-warning" role="alert">
            YOU ARE in <span class="fw-bold"><?=$mypackage->name ?></span> plan . You can add up to <span
                class="fw-bold"><?=$mypackage->listing_count ?></span> cars.

        </div>





        <div class="row">
            <?php
                                    foreach ($packs as $dp) {                                   
                                      $ggg = explode("\n", $dp->info);                                  
                                  ?>


            <div class="col-md-4 mb-4">
                <div class="card shadow-lg border-0 rounded-lg" style="height: 400px;">
                    <div class="card-header text-white text-center py-4" style="background-color: #ED1D24;">
                        <h4><?=$dp->name ?></h4>
                    </div>
                    <div class="card-body   spl_list">
                        <ul class="list-unstyled ">
                            <li class="mb-3"><strong>Listings:</strong> <?=$dp->listing_count ?></li>

                            <?php 
                                                          foreach ($ggg as $kx) {
                                                             echo  '<li class="mb-3 gx">'.$kx.'</li>';
                                                          }
                                                        ?>


                            <!-- Highlighted and Big Prices -->
                            <li class="mb-3">
                                <strong>Monthly Price:</strong>
                                <span class="price-highlight">₹<?=$dp->monthly_price ?></span>
                            </li>
                            <li class="mb-3">
                                <strong>Quarterly Price:</strong>
                                <span class="price-highlight">₹<?=$dp->quaterly_price ?></span>
                            </li>
                            <li class="mb-3">
                                <strong>Half-Yearly Price:</strong>
                                <span class="price-highlight">₹<?=$dp->halfyearly_price ?></span>
                            </li>
                            <li>
                                <strong>Yearly Price:</strong>
                                <span class="price-highlight">₹<?=$dp->yearly_price ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <a class="wishlist__cart--btn primary__btn" href="#">Choose Plan</a>
                    </div>
                </div>
            </div>

            <?php
                                    }
                                  ?>
        </div>














        <!-- ////////////////////////////// -->







    </div>
</div>
</div>
</div>
</section>





















<?php    
    
    $this->load->view('front/inc/footer');
?>