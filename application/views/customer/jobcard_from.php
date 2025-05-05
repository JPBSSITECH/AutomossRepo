<?php    
    
    $this->load->view('customer/inc/header');
?>
<link href="<?=base_url()  ?>/slimcrop/slim/slim.min.css" rel="stylesheet">
<script src="<?=base_url()  ?>/slimcrop/slim/slim.kickstart.min.js"></script>
<div class="container">

    <!-- <div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body justify-content-between" style="padding: 8px 12px;">
                           <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title">CarList</h4>
                           <button class="btn btn-primary btn-lg">Back</button>
                    </div>
                </div>
            </div>
        </div> -->

    <div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card shadow-lg">
                    

                    <div class="card-body justify-content-between" style="padding: 8px 12px;">
                           <h2 style="padding-top:0px; margin-bottom:0px;" class="card-title">Create Job Cards</h2>
                            
                           <div class="text-start">
                                <a href="<?=base_url('customer/jobcard') ?>" class="contact__form--btn primary__btn" type="submit"> <span>Back</span></a>
                            </div>
                    </div>









                </div>
            </div>
    </div>






         

        <form method="post">
            <div class="card p-4" style="min-height: 300px;">
                  
                    <div class="row">
                        <div class="col-md-12">
                            <div class="contact__form--list mb-20">
                                <label class="contact_form--label" for="job_heading"> Heading (What is this service About) <span class="contactform--label_star">*</span></label>
                                <input class="contact__form--input"  name="job_heading" placeholder="Brief about the service you need" type="text">
                            </div>



                             <div class="col-md-4">                                        
                                        <select  id="manufacturer"   class="account__login--input" name="car_manufacturer_id" required>
                                            <option value="" disabled selected>Select Car</option>
                                            <?php 
                                                // foreach ($car_man as $cm) {
                                                //     echo '<option value="'.$cm->id.'">'.$cm->name.'</option>';
                                                // }
                                            ?> 
                                        </select>
                                </div>
                                <div class="col-md-4">                                        
                                        <select  id="model"   class="account__login--input" name="car_model_id" required>
                                            <option value="" disabled selected>Car Model</option>
                                            <?php 
                                                // foreach ($car_model as $com) {
                                                //     echo '<option value="'.$com->id.'">'.$com->name.'</option>';
                                                // }
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





                        </div>
                        <div class="col-md-12">
                            <div class="contact__form--list mb-20">
                                <label class="contact_form--label" for="job_info">Describe Your issue <span class="contactform--label_star">*</span></label>
                                <!-- <input  type="text"> -->
                                <textarea class="contact__form--input" style="height:220px;" name="job_info" placeholder="Explain all the issues need to be fixed in your car" ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                                <div class="row">
                                <div class="col-md-12">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="cat_id">Category</label>
                                    <select class="contact__form--input" id="cat_id" name="cat_id">
                                        <option value="" disabled selected>Select category</option>
                                        <?php
                                            foreach ($cc as $d){
                                        ?>
                                        <option value="<?=$d->id; ?>"><?=$d->name; ?></option>
                                         <?php
                                           }
                                        ?>
                                    </select>
                                </div>
                            </div>

                                <div class="col-md-12">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="cust_address">Address</label>
                                        <input class="contact__form--input" id="searchTextField"  name="cust_address" placeholder="Enter your address" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="cust_lat">cust_lat</label>
                                        <input class="contact__form--input" id="cityLat" name="cust_lat" placeholder="Enter cust_lat code" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact__form--list mb-20">
                                        <label class="contact__form--label" for="cust_lon">cust_lon</label>
                                        <input class="contact__form--input" id="cityLng" name="cust_lon" placeholder="Enter cust_lon code" type="text">
                                    </div>
                                </div>
                                </div>
                        </div>
                        <div class="col-md-6">



                            <div class="form-group">
                            <div class="col-md-6" style="float: left;">
                                    <label>Add Photo </label>
                                
                                    <div class="slim" style="width:160px; height:160px;"
                                         data-meta-user-id="1230"
                                         data-ratio="1:1"
                                         data-size="840,840"
                                        >

                                        <?php
                                         $img_url = base_url('uploads/jobcard').$myinfo->thumb;
                                          if(@getimagesize($img_url))
                                          {                                                                                      
                                               echo '<img src="'.$img_url.'" class="img-thumbnail" alt="avatar">';
                                          }                                                      
                                         ?>
                                        <input type="file" name="thumb_img" required>
                                    </div>
                            </div>
                            <div class="col-md-6" style="float: left;">
                                    <label>Add Another Photo </label>
                                
                                    <div class="slim" style="width:160px; height:160px;"
                                         data-meta-user-id="1230"
                                         data-ratio="1:1"
                                         data-size="840,840"
                                        >

                                        <?php
                                         $img_url2 = base_url('uploads/jobcard').$myinfo->thumb2;
                                          if(@getimagesize($img_url2))
                                          {                                                                                      
                                               echo '<img src="'.$img_url2.'" class="img-thumbnail" alt="avatar">';
                                          }                                                      
                                         ?>
                                        <input type="file" name="thumb_img2" required>
                                    </div>
                            </div>
                        </div>





                        </div>
                    </div>
                         
            </div>

                    <hr class="my-4">

                    <div class="text-start">
                        <button class="contact__form--btn primary__btn" type="submit"> <span>Submit Now</span></button>
                   </div>
        </form>
   
</div>




<script type="text/javascript">
    var feature = 'd_drop';
</script>
<?php    
    
    $this->load->view('customer/inc/footer');
?>

<script src="<?= base_url() ?>lokscript.js?v=<?=rand() ?>"></script> 


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?=g_map_api ?>&libraries=places"></script>

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