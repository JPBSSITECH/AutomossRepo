  <?php    
    
    $this->load->view('customer/inc/headerv3');
?>
  <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.1.0/dist/css/multi-select-tag.css">
  <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.1.0/dist/js/multi-select-tag.js"></script>


  <link href="<?=base_url()  ?>/slimcrop/slim/slim.min.css" rel="stylesheet">
  <script src="<?=base_url()  ?>/slimcrop/slim/slim.kickstart.min.js"></script>

  <style>
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


.account__login {
    border-radius: 8px;

    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    border-top: 5px solid red;
    border-bottom: 5px solid red;
}

.account__login--input {
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
}

.account__login--label {
    font-weight: 600;
}

.title_3d {
    text-shadow: 0 13.36px 8.896px #482c2c, 0 -2px 1px #ffffff;
    text-transform: uppercase;

    color: #6b4040;
}

.profile_form input,
select {
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
}

.profile_form label {
    font-weight: 600;
}

.mb-6 {
    margin-bottom: 30px !important;
    margin-top: 20px !important;
    border-left: 4px solid red;
    /* background: red; */
    border-radius: 10px;
    background: rgb(255, 0, 0);
    padding: 10px 0;
    background: rgb(0, 0, 0);
    background: linear-gradient(90deg, rgba(0, 0, 0, 1) 0%, rgba(125, 0, 0, 1) 35%, rgba(255, 0, 0, 1) 100%);
    /* background: linear-gradient(90deg, rgba(255, 0, 0, 0.6560749299719888) 0%, rgba(213, 20, 20, 0.8521533613445378) 35%, rgba(0, 0, 0, 1) 100%); */
    color: white;
}

/* Style for the title */
.sections__headings--maintitle {
    position: relative;
    font-size: 2.5rem;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
    /* text-shadow: 0px 4px 3px rgba(0, 0, 0, 0.4), 0px 8px 13px rgba(0, 0, 0, 0.1), 0px 18px 23px rgba(0, 0, 0, 0.1); */
    display: inline-block;
    opacity: 0;
    animation: fadeIn 1s ease-out forwards;

    font-size: 22px !important;
    text-transform: uppercase !important;
    text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.4), 0px 7px 10px rgba(0, 0, 0, 0.1), 0px 8px 12px rgba(0, 0, 0, 0.1);

}



.pl_0 {
    padding-left: 0 !important;
}

.border_bottom_0 {
    border-bottom: 0 !important;
}

.sections__headings--maintitle::after {
    content: "";
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 3px;
    background-color: rgb(255 0 0);
    transition: width 0.3s ease-in-out;
    width: 5%;

}


.sections__headings--maintitle:hover::after {
    width: 100%;
}


@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(-30px);
    }

    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.checkout__sidebar {
    border-bottom-right-radius: 15px;
    background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(255, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 100%, rgba(252, 164, 255, 1) 100%, rgba(0, 0, 0, 1) 100%);
}

.col_md_3 {
    flex: 0 0 auto;
    width: 20%;
}

.col_md_3 label {
    font-size: 13px;
}

.contact__form--input {
    width: 100%;
    height: 50px;
    padding: 5px 15px;
    font-size: 1.3rem;
    border-radius: 8px;
    border: 1px solid var(--border-color);
}

.slim {
    font-size: 12px;
}

.account__login--label {
    font-weight: 600;
    /* color: #ff2700; */
    letter-spacing: 1px;
    font-size: 14px;
}

/*animated button*/
  </style>



  <div class="inner_content">
      <div class="account__content">

          <div class="row mb-5">
              <div class="col-12 p-3  d-flex justify-content-between align-items-center" style="background: #e2e2e2c2;
    border-radius: 10px;">
                  <h2 class=" pl_0 title_3d">Add Car</h2>
                  <a class="btn btn-danger btn-lg animated_btn" href="<?=base_url('customer/carlists') ?>">Back</a>
              </div>
          </div>



          <?php  

if($planerror!=''){
    echo $planerror;
}else{
?>

          <form method="post" role="form">

              <div class="sections__headings mb-30 ">
                  <h2 class="mb-6 ps-3" style="border-left: 4px solid red;">Basic Information</h2>
              </div>
              <div class="account__login--inner">
                  <div class="row">

                      <div class="col-md-12">

                          <div class="row">


                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label class="account__login--label">Name*</label>
                                      <input type="text" name="name" required placeholder="Enter name"
                                          class="contact__form--input account__login--input" value="<?= @$info->name?>">
                                  </div>
                              </div>

                          </div>

                          <div class="row mt-4">

                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label>Manufacturer*</label>
                                      <select class="contact__form--input account__login--input"
                                          name="car_manufacturer_id" id="manufacturer" required>
                                          <option value="">Select Manufacturer</option>

                                      </select>

                                  </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label>Model*</label>
                                      <select class="contact__form--input account__login--input" name="car_model_id"
                                          id="model" required>
                                          <option value="">Select Model</option>

                                      </select>

                                  </div>
                              </div>


                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label>Fuel Type</label>
                                      <select class="contact__form--input account__login--input" name="fuel_type_id">
                                          <option value="">Select Fuel Type</option>
                                          <?php
                                            foreach ($fuel->data as $cc) {
                                                $sel = (isset($info->fuel_type_id) && $info->fuel_type_id == $cc->id) ? 'selected' : '';
                                        ?>
                                          <option value="<?= $cc->id ?>" <?= $sel ?>><?= $cc->name ?></option>
                                          <?php
                                            }
                                        ?>
                                      </select>
                                  </div>
                              </div>

                          </div>
                          <div class="row mt-4">
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label>Transmission</label>

                                      <select class="contact__form--input account__login--input"
                                          name="car_transmission">
                                          <option value="">Select</option>
                                          <option
                                              <?=(isset($info->car_transmission) && $info->car_transmission =='Manual')?'Selected':'' ?>
                                              value="Manual">Manual</option>
                                          <option
                                              <?=(isset($info->car_transmission) && $info->car_transmission =='Automatic')?'Selected':'' ?>
                                              value="Automatic">Automatic</option>
                                      </select>
                                  </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label>City</label>
                                      <select class="contact__form--input account__login--input" name="city_id">
                                          <option value="">Select City</option>
                                          <?php
                                            foreach ($city->data as $cc) {
                                                $sel = (isset($info->city_id) && $info->city_id == $cc->id) ? 'selected' : '';
                                        ?>
                                          <option value="<?= $cc->id ?>" <?= $sel ?>><?= $cc->name ?></option>
                                          <?php
                                            }
                                        ?>
                                      </select>
                                  </div>
                              </div>


                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label>Owner Type</label>
                                      <!-- <input type="text" name="owner_type" placeholder="Owner Type" class="contact__form--input" value="<?= @$info->owner_type ?>"> -->


                                      <select class="contact__form--input account__login--input" name="owner_type">
                                          <option value="">Select</option>
                                          <option
                                              <?=(isset($info->owner_type) && $info->owner_type =='1st Owner')?'Selected':'' ?>
                                              value="1st Owner">1st Owner</option>
                                          <option
                                              <?=(isset($info->owner_type) && $info->owner_type =='2nd Owner')?'Selected':'' ?>
                                              value="2nd Owner">2nd Owner</option>
                                          <option
                                              <?=(isset($info->owner_type) && $info->owner_type =='3rd Owner')?'Selected':'' ?>
                                              value="3rd Owner">3rd Owner</option>
                                          <option
                                              <?=(isset($info->owner_type) && $info->owner_type =='4th Owner')?'Selected':'' ?>
                                              value="4th Owner">4th Owner</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class="row mt-4">
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label>Year OF Redg.</label>

                                      <input type="text" onkeypress="return /[0-9]/i.test(event.key)" minlength="4"
                                          maxlength="4" name="year_of_registration"
                                          placeholder="Enter Year (e.g., 2025)"
                                          class="contact__form--input account__login--input"
                                          value="<?= @$info->year_of_registration ?>" />
                                  </div>
                              </div>


                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label>Price</label>
                                      <input type="text" name="price" onkeypress="return /[0-9]/i.test(event.key)"
                                          maxlength="8" placeholder="Enter Price"
                                          class="contact__form--input account__login--input"
                                          value="<?= @$info->owner_type ?>">
                                  </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label>Seat Count</label>
                                      <input type="number" name="seat_count" placeholder="Ex 6 Seater"
                                          class="contact__form--input account__login--input"
                                          value="<?= @$info->seat_count ?>">
                                  </div>
                              </div>
                          </div>
                          <div class="row mt-4">
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label>Engine (in CC)</label>
                                      <input type="number" name="engine" placeholder="Ex 1200 CC"
                                          class="contact__form--input account__login--input"
                                          value="<?= @$info->engine ?>">
                                  </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label>Length (in mm)</label>
                                      <input type="number" name="length" placeholder="Ex 3840 mm"
                                          class="contact__form--input account__login--input"
                                          value="<?= @$info->length ?>">
                                  </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label>Power (in bhp)</label>
                                      <input type="number" name="power" placeholder="Ex 80 bhp"
                                          class="contact__form--input account__login--input"
                                          value="<?= @$info->power ?>">
                                  </div>
                              </div>
                          </div>
                          <div class="row mt-4">

                              <div class="col-md-12 ">
                                  <div class="form-group">
                                      <label>Info</label>
                                      <textarea name="info" placeholder="Enter Description"
                                          class="contact__form--input account__login--input" rows="4"
                                          style="height: 100px;"><?= @$info->info ?></textarea>
                                  </div>
                              </div>
                          </div>
                          <div class="row mt-4">

                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label>Insurance</label>
                                      <input type="text" name="insurance" placeholder="Enter Insurance"
                                          class="contact__form--input account__login--input"
                                          value="<?= @$info->insurance ?>">
                                  </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label>Kilometer</label>
                                      <input type="number" name="kms_driven" placeholder="Enter KM"
                                          class="contact__form--input account__login--input"
                                          value="<?= @$info->kms_driven ?>">
                                  </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label>RTO</label>
                                      <input type="text" name="rto" placeholder="Enter rto"
                                          class="contact__form--input account__login--input" value="<?= @$info->rto ?>">
                                  </div>
                              </div>
                          </div>
                          <!-- <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label>Engine Displacement</label>
                                    <input type="text" name="engine_displacement" placeholder="Enter engine displacement" class="contact__form--input" value="<?= @$info->engine_displacement ?>">
                                </div>
                            </div> -->

                          <div class="row mt-4">
                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label>Year of Manufacture</label>
                                      <input type="text" onkeypress="return /[0-9]/i.test(event.key)" minlength="4"
                                          maxlength="4" name="year_of_manufacture" placeholder="Enter Year"
                                          class="contact__form--input account__login--input"
                                          value="<?= @$info->year_of_manufacture ?>">
                                  </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="form-group">
                                      <label>Milage</label>
                                      <input type="number" name="milage" placeholder="Enter milage"
                                          class="contact__form--input account__login--input"
                                          value="<?= @$info->milage ?>">
                                  </div>
                              </div>
                          </div>
                          <div class="row mt-4">
                              <div class="col-md-3" style="float: left;">
                                  <label>Pic1 (850X840)</label>
                                  <div class="slim" style="width:210px; height:140px;" data-meta-user-id="1230"
                                      data-ratio="840:840" data-size="840,840">
                                      <?php
                                    if(isset($info->pic1)){
                                        $img_url = @$info->pic1;
                                        if(@getimagesize($img_url))
                                        {                                                                                      
                                            echo '<img src="'.$img_url.'" class="img-thumbnail" alt="avatar">';
                                        }
                                    }                                                      
                                    ?>


                                      <input type="file" name="thumb_img1">
                                  </div>

                              </div>

                              <div class="col-md-3" style="float: left;">
                                  <label>Pic2 (850X840)</label>

                                  <div class="slim" style="width:210px; height:140px;" data-meta-user-id="1230"
                                      data-ratio="840:840" data-size="840,840">
                                      <?php
                                    if(isset($info->pic2)){
                                        $img_url = @$info->pic2;
                                        if(@getimagesize($img_url))
                                        {                                                                                      
                                            echo '<img src="'.$img_url.'" class="img-thumbnail" alt="avatar">';
                                        }
                                    }                                                      
                                    ?>


                                      <input type="file" name="thumb_img2">
                                  </div>

                              </div>

                              <div class="col-md-3" style="float: left;">
                                  <label>Pic3 (850X840)</label>

                                  <div class="slim" style="width:210px; height:140px;" data-meta-user-id="1230"
                                      data-ratio="840:840" data-size="840,840">
                                      <?php
                                    if(isset($info->pic3)){
                                        $img_url = @$info->pic3;
                                        if(@getimagesize($img_url))
                                        {                                                                                      
                                            echo '<img src="'.$img_url.'" class="img-thumbnail" alt="avatar">';
                                        }
                                    }                                                      
                                    ?>


                                      <input type="file" name="thumb_img3">
                                  </div>

                              </div>

                              <div class="col-md-3" style="float: left;">
                                  <label>Pic4 (850X840)</label>

                                  <div class="slim" style="width:210px; height:140px;" data-meta-user-id="1230"
                                      data-ratio="840:840" data-size="840,840">
                                      <?php
                                    if(isset($info->pic4)){
                                        $img_url = @$info->pic4;
                                        if(@getimagesize($img_url))
                                        {                                                                                      
                                            echo '<img src="'.$img_url.'" class="img-thumbnail" alt="avatar">';
                                        }
                                    }                                                      
                                    ?>


                                      <input type="file" name="thumb_img4">
                                  </div>

                              </div>

                              <div class="col-md-12" style="float: left;">
                                  <label>Thumbnail (850X840)*</label>

                                  <div class="slim" style="width:210px; height:140px;" data-meta-user-id="1230"
                                      data-ratio="1:1" data-size="840,840">
                                      <?php
                                    $img_url = @$info->thumb;
                                    if(isset($img_url) && @getimagesize($img_url))
                                    {                                                                                      
                                        echo '<img src="'.$img_url.'" class="img-thumbnail" alt="avatar">';
                                    }                                                      
                                    ?>


                                      <input type="file" name="thumb_img">
                                  </div>

                              </div>

                          </div>

                      </div>

                  </div>




                  <!-- Submit Button -->
                  <div class="text-start mt-4 pb-4">
                      <button type="submit" class="wishlist__cart--btn primary__btn"><?=$btn?></button>

                  </div>
              </div>
      </div>
      </form>

      <?php 
} 
?>













      <!-- ///////////////////////////// -->
  </div>
  </div>
  </div>
  </div>
  </section>












  <script type="text/javascript">
var feature = 'd_drop';
  </script>











  <?php    
    
    $this->load->view('customer/inc/footerv3');
?>



  <script>
new MultiSelectTag('r_mat')
  </script>