<?php    
    
    $this->load->view('mechanic/inc/headerv3');
?>

<link href="<?=base_url()  ?>/slimcrop/slim/slim.min.css" rel="stylesheet">
<script src="<?=base_url()  ?>/slimcrop/slim/slim.kickstart.min.js"></script>
  
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
                    <a href="<?=base_url('mechanic/product_list') ?>" class="contact__form--btn primary__btn" type="submit"> <span>Back</span></a>
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
                    <div class="row mt-4">
                         <div class="col-md-6">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="fname">Price <span class="contact__form--label__star"></span></label>
                                <input class="contact__form--input"  name="mrp_price" placeholder="Enter Price" type="number" value="<?=$info->mrp_price ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="mname">Offer Price</label>
                                <input class="contact__form--input" name="offer_price" placeholder="Enter Offer price" type="number" value="<?=$info->offer_price ?>">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="1" name="is_homedelivery" <?=($info->is_homedelivery==1)?'checked':'' ?> >
                          <label class="form-check-label" for="flexCheckChecked">
                            Home Delivery
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


 


