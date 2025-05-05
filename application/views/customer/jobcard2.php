 <?php    
    
    $this->load->view('customer/inc/headerv3');
?>


 

                            <!-- ////////////////////////////// -->


                           <!--  <div class="row mb-5">
                                <div class="col-12 p-3 shadow d-flex justify-content-between align-items-center">
                                     <h2>Seach List</h2>
                                     <a class="wishlist__cart--btn primary__btn" href="<?=base_url('customer/jobcard_add') ?>">Add</a>
                                </div>
                            </div> -->


<div class="container">

            <div class="row" style="margin-bottom: 20px;">
                <div class="col-xl-12">
                    <div class="card shadow-lg">
                        <div class="card-body d-flex justify-content-between align-items-center" style="padding: 8px 12px;">
                            <h2 style="padding-top:0px; margin-bottom:0px;" class="card-title">Live Booking List</h2>
                            <div class="text-end"> 
                                <a href="<?=base_url('customer/jobcard_add') ?>" class="contact__form--btn primary__btn" type="submit"> <span>Add</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-lg" >

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                    <!-- Search Form -->
                                   <div class="col-xl-12"> 
                                
                                   <form method="post">
                                            <div class="hstack d-flex gap-3" style="margin-bottom: 10px;">    
                                                    <input class="contact__form--input" value="<?=@$_SESSION['jc_search']['searches'] ?>" name="searches"   
                                                    placeholder="Search "
                                                    type="text" style="height: 40px;">
                                                     
                                                     <div class="text-start">
                                                        <button class="contact__form--btn primary__btn" type="submit" style="height: 4rem;"> <span>Search</span></button>
                                                         


                                                     </div> 

                                                     <div class="text-start">
                                                         
                                                        <a href="?reset=Y" class="contact__form--btn primary__btn">Reset</a>


                                                     </div>                             
                                            </div>

                                    </form>
                                  
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="card-body mt-0 pt-2">
                                <table class="cart__table--inner mb-5">
                                    <thead class="cart__table--header">
                                        <tr class="cart__table--header__items">
                                            <th class="cart__table--header__list">Heading</th>
                                            <th class="cart__table--header__list">Bids</th>
                                            <th class="cart__table--header__list text-center">Status</th>
                                            <th class="cart__table--header__list text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="cart__table--body">

                                        <?php if (!empty($job) && mycount($job) > 0): ?>
                                        <?php
                                            $i = 0;
                                            foreach ($job as $r) {
                                                $i++;
                                        ?>
                                            <tr class="cart__table--body__items">
                                                <td class="cart__table--body__list">
                                                    <div class="cart__product d-flex align-items-center">
                                                        <div class="cart__thumbnail">
                                                            <a href="#"><img class="border-radius-5" src="<?= $r->thumb; ?>" onerror="this.onerror=null; this.src='https://automoss.in/nocar.png';" alt="cart-product" style="width: 60px"></a>
                                                        </div>
                                                        <div class="cart__content">
                                                            <h3 class="cart__content--title h4"><a href="product-details.html"><?= $r->job_heading; ?></a></h3>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="cart__table--body__list">
                                                    <span class="cart__price"><?= $r->bid_oount; ?></span>
                                                </td>
                                                <td class="cart__table--body__list text-center">
                                                    <span class="in__stock <?= ($r->status == 1) ? 'text-success' : 'text-danger'; ?>">
                                                        
                                                        <?php 
                                                            if($r->award_count>0){
                                                                echo '<span  >(AWARDED)</span>';
                                                            }else{
                                                                ?>
                                                                    <?= ($r->status == 1) ? 'Active' : 'Completed'; ?>
                                                                <?php
                                                            }


                                                        ?>
                                                    </span>
                                                </td>
                                                <td class="cart__table--body__list text-right">
                                                    <a class="wishlist__cart--btn primary__btn" href="<?= base_url() ?>customer/jobcard_details/<?= $r->transaction_id ?>"><i class="fas fa-eye"></i></a>
                                                    <a class="wishlist__cart--btn primary__btn" onclick="return confirm('Are you sure to  delete?')" href="<?= base_url() ?>customer/jobcard_del/<?= $r->transaction_id ?>"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    <?php else: ?>
                                    <div class="col-12">
                                    <table class="table text-start" style="border: 2px dashed #ccc;  ">
                                        <tbody>
                                            <tr class="py-4 px-3">
                                                <td   colspan="4" style="position:relative;  height: 220px;">
                                                    <!-- Lottie Animation -->
                                                    <div class="lottie-container mb-3" style="max-width: 150px;  position: absolute; right: 0;">
                                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js"></script>
                                                        <div id="lottie-no-cars"></div>
                                                    </div>
                                                    <h4 class="ml-2">Opps! No Data found.</h4>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>

                                    <script>
                                    // Load Lottie Animation
                                    lottie.loadAnimation({
                                        container: document.getElementById('lottie-no-cars'),
                                        renderer: 'svg',
                                        loop: true,
                                        autoplay: true,
                                        path: 'https://automoss.in/Animation - 1734960613567.json'
                                    });
                                    </script>
                                    <?php endif; ?>

                                         
                                    </tbody>
                                </table> 
                            </div>

                    </div>
                </div>
            </div>


</div>











 
 






  

 
 


 


<?php
    $this->load->view('customer/inc/footerv3');
?>
 