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
        .form-check-input:checked {
    background-color: #ED1D24;
    border-color: #ED1D24;
  }
  .form-check-input {
    accent-color: #ED1D24;  
  }
   .form-check-input:focus {
    outline: 2px solid #ED1D24;  
    box-shadow: 0 0 4px #ED1D24;  
  }
    </style>

<div class="container">
     <div class="row" style="margin-bottom: 20px;">
    <div class="col-xl-12">
        <div class="card shadow-lg">
            <div class="card-body d-flex justify-content-between align-items-center" style="padding: 8px 12px;">
                <h2 style="padding-top:0px; margin-bottom:0px;" class="card-title"><?=$heading ?></h2>
               <div class="text-end"> 
                    <a href="<?=base_url('mechanic/package_list') ?>" class="contact__form--btn primary__btn" type="submit"> <span>back</span></a>
                </div> 
            </div>
        </div>
    </div>
</div>

    <div class="row justify-content-center">
        <div class="col-md-12">

            <form method="post">
            <div class="card shadow-lg mb-4 border-0 rounded-3 p-4 pt-0 bg-light w-100">
                <div class="card-body" style="flex-direction: column;">
                    <div class="row map pt-0 mt-0">


                        <h3>Package Name: <?=$info->name ?></h3>
                        <p><?=$info->short_info ?></p>
                        <p><?=$info->info ?></p>
                        <hr>
 
                          
                    <div class="row mt-4">
                         <div class="col-md-4">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="fname">Price <span class="contact__form--label__star"></span></label>
                                <input class="contact__form--input"  name="mrp_price" value="<?=@$info->mrp_price ?>" placeholder="Enter Price" type="number">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="mname">Offer Price</label>
                                <input class="contact__form--input" name="offer_price" value="<?=@$info->offer_price ?>" placeholder="Enter Offer price" type="number">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="mname">Service Duration</label>
                                <input class="contact__form--input" name="service_duration" value="<?=@$info->service_duration ?>" placeholder="Service Duration in Hour" type="number">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="message">Info</label>
                                <textarea class="contact__form--input" name="offer_text" placeholder="Enter your message" 
                                rows="4" style="height: 100px;"><?=@$info->offer_text ?></textarea>
                            </div>
                        </div>
                         <div class="col-md-12 mb-3">
                            <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="1" name="is_homeservice" 
                                    <?=($info->is_homeservice==1)?'checked':'' ?> >
                          <label class="form-check-label" for="flexCheckChecked">
                            Home Service
                          </label>
                        </div>
                        </div>
                     </div>
                      <div class="text-start">
                        <button class="contact__form--btn primary__btn" type="submit"> <span>Update</span></button>
                    </div>
                


                 
            </div>
        </div>


        
                    








                    </div> 
                </div>
            </div>
</form>









 

        </div>
        
    


 


<?php    
    
    $this->load->view('mechanic/inc/footerv3');
?>


<script>
    $(document).ready(function () {
        $('#package').on('change', function () {
            let packageId = $(this).val(); // Get selected package ID

            if (packageId) {
                $.ajax({
                    url: '<?= base_url("mechanic/get_package_details") ?>',
                    type: 'POST',
                    data: { package_id: packageId },
                    dataType: 'json',
                    success: function (response) {
                        if (response.status === 'success') {
                            // Populate the package details in the card
                            let details = `
                                <h2 class="text-danger mb-3">Package Details</h2>
                                <h2><strong>Package Name:</strong> ${response.data.name}</p>
                                <p><strong>Info:</strong> ${response.data.info}</p>
                            `;
                            $('#package-details').html(details);
                        } else {
                            $('#package-details').html('<p>No details found for the selected package.</p>');
                        }
                    },
                    error: function () {
                        $('#package-details').html('<p>Error fetching package details. Please try again later.</p>');
                    }
                });
            } else {
                $('#package-details').html('<p>Select a package to see details here...</p>');
            }
        });
    });
</script>