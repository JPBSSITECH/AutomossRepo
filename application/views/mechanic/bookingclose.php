<?php    
    
    $this->load->view('mechanic/inc/headerv3');
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
    background-color: #28a745; /* Green */
    color: white;
}

.status-badge.active {
    background-color: #ffc107; /* Yellow */
    color: #343a40; /* Dark Text */
}

    </style>

<div class="container">
	<div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card shadow-lg">
                    <div class="card-body d-flex justify-content-between align-items-center" style="padding: 8px 12px;">
                           <div class="d-flex" style="gap:10px;">
                               <h2 style="padding-top:0px; margin-bottom:0px;" class="card-title">Close Booking For <?=$book_info->booking_id ?></h2>

                             

                            

                           </div>

                             <!-- <span class="badge badge-pill status-badge completed">Completed</span> -->
                           
                           <div class="text-end">
                        <a href="<?= base_url() ?>mechanic/booking_list" class="contact__form--btn primary__btn" type="submit"> <span>Back</span></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="row justify-content-center">
        <div class="col-md-6 order-2">
             <div class="card mb-4 border-0" style="width: 100%">
            <!-- <h2 class="card-title mb-0 ps-3">Customer Details</h2> -->

            <div class="card-body">


 

                <form method="post">
                    <div class="row mt-4">
                         <div class="col-md-12">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label">OTP* <span class="contact__form--label__star"></span></label>
                                <input class="contact__form--input" required name="otp" placeholder="Enter Otp" type="number">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label">Payment Mode*</label>
                                <select class="contact__form--input" required name="payment_mode">
                                    <option value="" >Select payment method</option>
                                        <option value="Cash">Cash</option>
                                        <option value="UPI">UPI</option>
                                        <option value="Card">Card</option>
                                </select>
                            </div>
                        </div>                      
                     </div>
                     <button class="contact__form--btn primary__btn" type="submit">Submit</button>
                </form>
                 
            </div>
        </div>
        </div>
        <div class="col-md-6 order-1">
           <div class="card shadow-lg mb-4 border-0 rounded-3 p-2 bg-light" style="width: 100%">
            <h2 class="card-title mb-0 ps-3">Customer Details</h2>

            <div class="card-body">
                <table class="table" style="border-collapse: collapse; width: 100%;">
                    <thead class="table-primary">
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong><i class="fas fa-user"></i>&nbsp; Full Name</strong></td>
                            <td><?=$cust_info->fname ?> <?=$cust_info->mname ?> <?=$cust_info->lname ?></td>
                        </tr>
                        <tr>
                            <td><strong><i class="fas fa-phone"></i> &nbsp;Phone</strong></td>
                            <td><?=$cust_info->phone ?></td>
                        </tr>
                        <tr>
                            <td><strong><i class="fas fa-envelope"></i> &nbsp;Email</strong></td>
                            <td><?=$cust_info->email ?></td>
                        </tr>                                        
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card shadow-lg mb-4 border-0 rounded-3 p-2 bg-light" style="width: 100%">
            <h2 class="card-title mb-0 ps-3">Booking Details</h2>

            <div class="card-body " >
                <table class="table" style="border-collapse: collapse; width: 100%;">
                    <thead class="table-primary">

                    </thead>
                    <tbody>
                        <tr>
                            <td><strong><i class="fas fa-car"></i> &nbsp;Car Name</strong></td>
                            <td><?=$book_info->car_model_nm ?> <?=$book_info->m_nm ?></td>
                        </tr>

                        <tr>
                            <td><strong><i class="fas fa-gas-pump"></i> &nbsp;Fuel Type</strong></td>
                            <td><?=$book_info->fuel_nm ?></td>
                        </tr>

                        <tr>
                            <td><strong><i class="fas fa-clock"></i> &nbsp;Sceduled For</strong></td>
                            <td><?=$book_info->scedule_date ?> <?=$book_info->scedule_time ?></td>
                        </tr>

                        <tr>
                            <td><strong><i class="fas fa-file-alt"></i> &nbsp;Description</strong></td>
                            <td><?=$book_info->description ?></td>
                        </tr>                                     
                    </tbody>
                </table>
            </div>
        </div>

                                     
                                </div>
        
    </div>
</div>




 


<?php    
    
    $this->load->view('mechanic/inc/footerv3');
?>
 