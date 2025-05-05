<?php    
    
    $this->load->view('customer/inc/header');
?>
<link href="<?=base_url()  ?>/slimcrop/slim/slim.min.css" rel="stylesheet">
<script src="<?=base_url()  ?>/slimcrop/slim/slim.kickstart.min.js"></script>




<style>
    .harea{
        display: none;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
           <div class="card p-4" style="min-height: 300px;">
                <h3>Personal Information :</h3>
                <form method="post">
                    <!-- Personal Information Section -->
                  <!--   <h5 class="mb-3">Personal Information</h5> -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact__form--list mb-20">
                                <label class="contact_form--label" for="fname">First Name <span class="contactform--label_star">*</span></label>
                                <input class="contact__form--input"  name="fname" value="<?=$info->fname ?>" placeholder="Enter your first name" type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="mname">Middle Name</label>
                                <input class="contact__form--input" name="mname" value="<?=$info->mname ?>" placeholder="Enter your middle name" type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="lname">Last Name</label>
                                <input class="contact__form--input" name="lname" value="<?=$info->lname ?>" placeholder="Enter your last name" type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact__form--list mb-20">
                                <label class="contact_form--label" for="email">Email <span class="contactform--label_star">*</span></label>
                                <input class="contact__form--input" name="email" value="<?=$info->email ?>" placeholder="Enter your email" type="email">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="phone">Phone</label>
                                <input class="contact__form--input" name="phone" value="<?=$info->phone ?>" placeholder="Enter your phone number" type="text">
                            </div>
                        </div>
                         
                    </div>

                    <hr class="my-4">

                    <!-- Address Information Section -->
                    <h5 class="mb-3">Address Information</h5>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="address">Address</label>
                                <input class="contact__form--input" id="address" name="address" value="<?=$info->address ?>"  placeholder="Enter your address" type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="zip">ZIP Code*</label>
                                <input class="contact__form--input" id="zip" name="zip" value="<?=$info->zip ?>"  required placeholder="Enter ZIP code" type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="city_id">City</label>
                                <select class="contact__form--input" id="city_id" required name="city_id">
                                    <option value="" selected disabled>Select City</option> 
                                    <?php
                                     foreach ($city as $dd) {
                                        $sel ='';
                                        if(isset($info->city_id) && $info->city_id ==  $dd->id ){
                                            $sel ='selected';
                                        }
                                    ?>
                                    <option <?=$sel ?> value="<?= $dd->id ?>"><?= $dd->name ?></option>
                                    <?php
                                     }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">
                     
                         <div class="form-group">
                            <div class="col-md-12" style="float: left;">
                                    <label>Thumbnail (600X600)</label>
                                
                                    <div class="slim" style="width:210px; height:210px;"
                                         data-meta-user-id="1230"
                                         data-ratio="1:1"
                                         data-size="600,600"
                                        >

                                        <?php
                                         $img_url = base_url('uploads/customer/thumb/').$info->thumb;
                                          if(@getimagesize($img_url))
                                          {                                                                                      
                                               echo '<img src="'.$img_url.'" class="img-thumbnail" alt="avatar">';
                                          }                                                      
                                         ?>
                                        <input type="file" name="thumb_img" required>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="text-start">
                        <button class="contact__form--btn primary__btn" type="submit"> <span>Update Profile</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





 


<?php    
    
    $this->load->view('customer/inc/footer');
?>
