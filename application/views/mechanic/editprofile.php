<?php    
    
    $this->load->view('mechanic/inc/headerv3');
?>

<link href="<?=base_url()  ?>/slimcrop/slim/slim.min.css" rel="stylesheet">
<script src="<?=base_url()  ?>/slimcrop/slim/slim.kickstart.min.js"></script>
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.1.0/dist/css/multi-select-tag.css">
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.1.0/dist/js/multi-select-tag.js"></script>

<style>
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
</style>

<div class="container">

    <div class="row mb-5">
        <div class="col-12 p-3  d-flex justify-content-between align-items-center" style="background: #e2e2e2c2;
    border-radius: 10px;">
            <h2 class=" pl_0 title_3d">Edit Your Profile</h2>


            <div class="alert alert-warning" role="alert"
                style="margin-bottom:0;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                Now you are in forever Free Plan.<a href="<?=base_url('mechanic/upgradepack')?>"
                    class="alert-link text-decoration-underline">Upgrade Now</a>.
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12" style="padding:0;">
            <div class="p-4">


                <form method="post" class="profile_form">
                    <!-- Personal Information Section -->
                    <!--   <h5 class="mb-3">Personal Information</h5> -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="fname">Your Name <span
                                        class="contact__form--label__star">*</span></label>
                                <input class="contact__form--input" name="fname" required
                                    placeholder="Enter your first name" type="text" value="<?= @$info->fname ?>">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="email">Email <span
                                        class="contact__form--label__star">*</span></label>
                                <input class="contact__form--input" name="email"
                                    oninput="this.value = this.value.toLowerCase()" required
                                    placeholder="Enter your email" type="email" value="<?= @$info->email ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="phone">Phone <span
                                        class="contact__form--label__star">*</span></label>
                                <input class="contact__form--input" name="phone" minlength="10" maxlength="10"
                                    onkeyup="this.value = this.value.replace(/[^0-9]/g, '');"
                                    placeholder="Enter your phone number" type="text" required
                                    value="<?= @$info->phone ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="city_id">City</label>
                                <select disabled class="contact__form--input" id="city_id" name="city_id">
                                    <option value="" selected disabled>Select City</option>
                                    <?php
                                     foreach ($city as $dd) {
                                        $dp='';
                                        if(isset($info->city_id) && $info->city_id == $dd->id){
                                            $dp='selected';
                                        }
                                    ?>
                                    <option <?= $dp ?> value="<?= $dd->id ?>"><?= $dd->name ?></option>
                                    <?php
                                     }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="garage_address">Address</label>
                                <input class="contact__form--input" name="garage_address" id="searchTextField"
                                    placeholder="Enter garage address" type="text"
                                    value="<?= @$info->garage_address ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="garage_lat">Latitude</label>
                                <input class="contact__form--input" name="garage_lat" placeholder="Enter latitude"
                                    id="cityLat" type="text" value="<?= @$info->garage_lat ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="garage_lon">Longitude</label>
                                <input class="contact__form--input" name="garage_lon" id="cityLng"
                                    placeholder="Enter longitude" type="text" value="<?= @$info->garage_lon ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="pan_number">Pan Card Number*</label>
                                <input class="contact__form--input" id="panNumber" onchange="validatePAN()"
                                    name="pan_number" required placeholder="Ex: XXXXX1234X" type="text" maxlength="10"
                                    minlength="10" value="<?= @$info->pan_number ?>">
                                <span id="pan_msg"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact__form--list mb-20">
                                <label class="contact__form--label" for="aadhar_number">AADHAR Number*</label>
                                <input class="contact__form--input" name="aadhar_number"
                                    onkeyup="this.value = this.value.replace(/[^0-9]/g, '');" required
                                    placeholder="Aadhar Number" type="text" maxlength="12" minlength="12"
                                    value="<?= @$info->aadhar_number ?>">
                            </div>
                        </div>


                        <div class="col-md-12 d-flex">
                            <h4 style="margin-right: 10px;">Are you: </h4>
                            <label style="margin-right: 10px;">
                                <input type="radio" name="user_typ" id="garage_radio" value="Garage" checked> Garage
                            </label>
                            <label>
                                <input type="radio" name="user_typ" id="mech_radio" value="Mechanic"> Mechanic
                            </label>
                        </div>
                    </div>




                    <div id="garage_block">

                        <h2 class="mb-6 ps-3" style="border-left: 4px solid red;">Shop Information</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="garage_name">Garage Name</label>
                                    <input class="contact__form--input" name="garage_name"
                                        placeholder="Enter garage name" type="text" value="<?= @$info->garage_name ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="garage_phone">Garage Phone</label>
                                    <input class="contact__form--input" name="garage_phone" minlength="10"
                                        maxlength="10" onkeyup="this.value = this.value.replace(/[^0-9]/g, '');"
                                        placeholder="Enter garage phone" type="text"
                                        value="<?= @$info->garage_phone ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="garage_email">Garage Email</label>
                                    <input class="contact__form--input" name="garage_email"
                                        placeholder="Enter garage email" type="email"
                                        value="<?= @$info->garage_email ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="garage_est_date">Date of
                                        Establishment</label>
                                    <input class="contact__form--input" name="garage_est_date" type="date"
                                        value="<?= @$info->garage_est_date ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="garage_gst">GST Number</label>
                                    <input class="contact__form--input" name="garage_gst"
                                        onkeyup="this.value = this.value.replace(/[^0-9]/g, '');"
                                        placeholder="GST Number" type="text" maxlength="12" minlength="12"
                                        value="<?= @$info->garage_gst ?>">
                                </div>
                            </div>


                        </div>
                    </div>


                    <div id="mech_block">

                        <h2 class="mb-6 ps-3" style="border-left: 4px solid red;">Mechanic Information</h2>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="mech_exp">Experience (In Years)</label>
                                    <input class="contact__form--input" name="mech_exp" placeholder="Enter garage name"
                                        type="number" min="1" value="<?= @$info->mech_exp ?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="mech_first_workplace">First Workplace
                                        Name</label>
                                    <input class="contact__form--input" name="mech_first_workplace"
                                        placeholder="Provide Name" type="text"
                                        value="<?= @$info->mech_first_workplace ?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="contact__form--list mb-20">
                                    <label class="contact__form--label" for="mech_cur_workplace">Current Workplace
                                        Name</label>
                                    <input class="contact__form--input" name="mech_cur_workplace"
                                        placeholder="Provide Name" type="text"
                                        value="<?= @$info->mech_cur_workplace ?>">
                                </div>
                            </div>




                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 pb-4">
                            <h2 class="mb-6 ps-3 py-2" style="border-left: 4px solid red;">Select Your Services
                            </h2>
                            <div class="checkbox-group">

                                <div class="row">

                                    <?php
                                    if(count($services) > 0) {
                                        foreach ($services as $d) {
                                            $isChecked = in_array($d->id, $selected_categories) ? 'checked' : '';
                                        ?>
                                        <div class="col-3">
                                            <div class="form-check">
                                                <input class="form-check-input service-checkbox" type="checkbox"
                                                    id="service<?=$d->id?>" name="categories[]" value="<?=$d->id?>"
                                                    <?=$isChecked?>>
                                                <label class="form-check-label"
                                                    for="service<?=$d->id?>"><?=$d->name?></label>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                    }else{
                                        echo '<div class="col-3"><span>No services available</span></div>';
                                    }
                                    ?>


                                </div>





                            </div>
                        </div>


                        <div class="col-md-12 pb-4">
                            <h2 class="mb-6 ps-3 py-2" style="border-left: 4px solid red;">Select Product Category
                            </h2>
                            <div class="checkbox-group">

                                <div class="row">

                                    <?php
                                    foreach ($pp_cc as $pp_d) {
                                        $isChecked_p =  in_array($pp_d->id, $selected_pp_categories) ? 'checked' : '';
                                    ?>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input pp_service-checkbox" type="checkbox"
                                                id="pp_<?=$pp_d->id?>" name="pp_categories[]" value="<?=$pp_d->id?>"
                                                <?=$isChecked_p?>>
                                            <label class="form-check-label"
                                                for="pp_<?=$pp_d->id?>"><?=$pp_d->name?></label>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>





                            </div>
                        </div>








                        <div class="form-group">
                            <div class="col-md-12" style="float: left;">
                                <label>Garage Image (560X560)</label>

                                <div class="slim" style="width:210px; height:210px;" data-meta-user-id="1230"
                                    data-ratio="560:560" data-size="560,560">

                                    <?php
                                        if(isset($info->thumb)  && $info->thumb!="" ){


                                         $img_url =  $info->thumb;
                                          if(@getimagesize($img_url))
                                          {                                                                                      
                                               echo '<img src="'.$img_url.'" class="img-thumbnail" alt="avatar">';
                                          }   

                                          }                                                   
                                         ?>
                                    <input type="file" name="thumb_img">
                                </div>
                            </div>
                        </div>




                    </div>

                    <hr class="my-4">

                    <div class="text-start">

                        <h5><input type="checkbox" name="is_notification" value="1"> Receive peridoc updates on Automoss
                            Offers & services on whatsapp and email!</h5><br>
                        <h5>By Submitting this form you are agreeing to our <a style="border-bottom: 1px dashed #ccc;"
                                target="_bank" href="<?=base_url() ?>terms">terms and conditions</a>.</h5>
                        <br>

                        <div class="text-center mt-4 pb-4">
                            <button class="btn btn-danger btn-lg animated_btn" type="submit"> <span>Submit
                                    Now</span></button>
                        </div>
                    </div>
                </form>




            </div>
        </div>
    </div>
</div>







<?php    
    
    $this->load->view('mechanic/inc/footerv3');
?>

<script>
const garageRadio = document.getElementById("garage_radio");
const mechRadio = document.getElementById("mech_radio");
const garageBlock = document.getElementById("garage_block");
const mechBlock = document.getElementById("mech_block");

// Add event listeners for the radio buttons
garageRadio.addEventListener("change", () => {
    if (garageRadio.checked) {
        garageBlock.style.display = "block";
        mechBlock.style.display = "none";
    }
});

mechRadio.addEventListener("change", () => {
    if (mechRadio.checked) {
        mechBlock.style.display = "block";
        garageBlock.style.display = "none";
    }
});



function validatePAN() {
    var panNumber = document.getElementById("panNumber").value;
    var panPattern = /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/;

    if (panPattern.test(panNumber)) {
        document.getElementById("pan_msg").textContent = "Valid PAN Number.";
        document.getElementById("pan_msg").style.color = "green";
    } else {
        document.getElementById("pan_msg").textContent = "Invalid PAN Number. Format should be XXXXX9999X.";
        document.getElementById("pan_msg").style.color = "red";
    }
}
</script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?=g_map_api ?>&libraries=places">
</script>

<script type="text/javascript">
function initialize() {
    var input = document.getElementById('searchTextField');
    var autocomplete = new google.maps.places.Autocomplete(input);
    google.maps.event.addListener(autocomplete, 'place_changed', function() {
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



<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.1.0/dist/js/multi-select-tag.js"></script>
<script>
// Initialize MultiSelectTag
const multiSelect = new MultiSelectTag('category');

// Wait for DOM content to load
document.addEventListener('DOMContentLoaded', function() {
    // Target the custom container generated by multi-select-tag
    const multiSelectContainer = document.querySelector('.multi-select-tag');

    // Add event listener to monitor selections
    multiSelectContainer.addEventListener('click', function() {
        const selectedItems = multiSelectContainer.querySelectorAll('.selected-item');

        // Restrict selection to a maximum of 3 items
        if (selectedItems.length > 3) {
            alert('You can select a maximum of 3 categories.');

            // Remove the last selected item
            const lastSelectedItem = selectedItems[selectedItems.length - 1];
            lastSelectedItem.querySelector('.deselect-item')
                .click(); // Trigger "deselect" programmatically
        }
    });
});
</script>



<script>
const checkboxes = document.querySelectorAll('.service-checkbox');
checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', () => {
        const checkedCount = document.querySelectorAll('.service-checkbox:checked').length;
        if (checkedCount > 3) {
            alert('You can select up to 3 services only. To add more Upgrade Plan.');
            checkbox.checked = false;
        }
    });
});







const pp_checkboxes = document.querySelectorAll('.pp_service-checkbox');
pp_checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', () => {
        const checkedCount = document.querySelectorAll('.pp_service-checkbox:checked').length;
        if (checkedCount > <?=$pack->ecom_category_count ?>) {
            alert('You have selected max product category. To add more Upgrade Plan.');
            checkbox.checked = false;
        }
    });
});
</script>