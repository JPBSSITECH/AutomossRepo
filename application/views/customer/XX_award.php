<?php    
    
    $this->load->view('customer/inc/header');
?>

<link href="<?=base_url()  ?>/slimcrop/slim/slim.min.css" rel="stylesheet">
<script src="<?=base_url()  ?>/slimcrop/slim/slim.kickstart.min.js"></script>
  
<style>
        #map {
            height: 400px;
            width: 890px;
        }
    </style>

<div class="container">
    <div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card shadow-lg">
                    <div class="card-body justify-content-between" style="padding: 8px 12px; ">
                           <h2 style="padding-top:0px; margin-bottom:0px;" class="card-title">Complete Booking : <?=$this->uri->segment(3) ?></h2>
                           <!-- <button class="btn btn-primary btn-lg">ADD</button> -->
                           <div class="text-start">
                        <a href="<?= base_url() ?>customer/jobcard" class="contact__form--btn primary__btn" type="submit"> <span>Back</span></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card shadow-lg mb-4 border-0 rounded-3 p-4 pt-0 bg-light w-100">
                <div class="card-body" style="flex-direction: column;">
                    <div class="row map pt-0 mt-0">




                        <div class="account__login">
                            <div class="account__login--header mb-25">
                                <h2 class="account__login--header__title mb-10">Fill Below Information to continue: </h2>                                       
                            </div>
                            <form method="post">
                                <div class="account__login--inner">
                                    <div class="row">  
                                            <?php $nm = (isset($cust_info->fname))?$cust_info->fname.' '.$cust_info->lname:'' ; ?>                                      
                                            
                                            <div class="col-md-6">                                                
                                                <input type="date" class="account__login--input" name="scedule_date" placeholder="Date" min="<?=date('Y-m-d') ?>"  required>
                                            </div>
                                            <div class="col-md-6">                                                
                                                <input type="time" class="account__login--input" name="scedule_time" placeholder="Time"  required>
                                            </div>





                                           

                                            <div class="col-md-6">                                                
                                                <input type="text" class="account__login--input" id="searchTextField"  name="cust_address" placeholder="Enter Your location"  required>
                                            </div>
                                            <div class="col-md-3">
                                                 
                                                <input type="text" class="account__login--input" id="cityLat"   name="cust_lat" placeholder="Latitude"  required>
                                            </div>
                                            <div class="col-md-3">                                                 
                                                <input type="text" class="account__login--input" id="cityLng"  placeholder="Longitude"  name="cust_lon"  required>
                                            </div>







                                            



                                            <div class="col-md-4">                                        
                                                    <select class="account__login--input" name="car_manufacturer_id" required>
                                                        <option value="" disabled selected>Select Car</option>
                                                        <?php 
                                                            foreach ($car_man as $cm) {
                                                                echo '<option value="'.$cm->id.'">'.$cm->name.'</option>';
                                                            }
                                                        ?> 
                                                    </select>
                                            </div>
                                            <div class="col-md-4">                                        
                                                    <select class="account__login--input" name="car_model_id" required>
                                                        <option value="" disabled selected>Car Model</option>
                                                        <?php 
                                                            foreach ($car_model as $com) {
                                                                echo '<option value="'.$com->id.'">'.$com->name.'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                            </div>
                                            <div class="col-md-4">                                        
                                                    <select class="account__login--input" name="car_fuel_type_id" required>
                                                        <option value="" disabled selected>Fuel Type</option>
                                                        <?php 
                                                            foreach ($fuel_type as $cft) {
                                                                echo '<option value="'.$cft->id.'">'.$cft->name.'</option>';
                                                            }
                                                        ?> 
                                                    </select>
                                            </div>




                                            <div class="col-md-6">                                        
                                                    <input class="account__login--input" type="text" name="cust_name" placeholder="Your Full Name" 
                                                    value="<?=$nm ?>"  required>
                                            </div>
                                            <div class="col-md-3">                                        
                                                    <input class="account__login--input" type="text" minlength="10" maxlength="10"  onkeyup="this.value = this.value.replace(/[^0-9]/g, '');"  name="cust_phone" placeholder="Phone Number" value="<?=$cust_info->phone ?>"   required> 
                                            </div>
                                            <div class="col-md-3">                                        
                                                    <input class="account__login--input" type="email" name="cust_email" placeholder="Email" value="<?=$cust_info->email ?>" required>
                                            </div>

                                    </div>



             
                                    <label for="description">
                                        <textarea class="account__login--input" name="description"  placeholder="Enter a brief description" required></textarea>
                                    </label>
                                   <hr style="border: 0; height: 2px; background: #000; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);">

                                    <div class="payment-option">
                                        <h3>Payment Option</h3>                                        
                                    </div>
                                    <div class="pay-at-garage">
                                        <label for="pay_at_garage">
                                            <input type="checkbox" checked name="payment_method" value="PAG" >
                                            Pay at Garage
                                        </label>
                                     </div>
                                    <div class="d-flex justify-content-center mt-4">
                                        <button type="submit" class="btn btn-danger btn-lg">Continue</button>
                                    </div>
                                </div>
                            </form>
                        </div>




 






                    </div> 
                </div>
            </div>










 

        </div>
        
    </div>
</div>




 


<?php    
    
    $this->load->view('customer/inc/footer');
?>



<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQyTl-C2jsDh8ITfemoZUH_jqR94-yT0I&libraries=places"></script>

<script type="text/javascript">
    function initialize() {
        var input = document.getElementById('searchTextField');
        var autocomplete = new google.maps.places.Autocomplete(input);
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();
            ////document.getElementById('city2').value = place.name;
            document.getElementById('cityLat').value = place.geometry.location.lat();
            document.getElementById('cityLng').value = place.geometry.location.lng();
            /*alert("This function is working!");
            alert(place.name);
            alert(place.address_components[0].long_name);*/

        });
    }
    google.maps.event.addDomListener(window, 'load', initialize); 
</script>