<?php    
    include('inc/header.php');
?>

<style>
    .form-section {
        margin-bottom: 1.5rem;
        padding: 1rem;
        background-color: #f8f9fa;
        border-radius: 8px;
        border: 1px solid #e3e3e3;
    }
    .form-section-title {
        font-size: 1.2rem;
        font-weight: bold;
        color: #343a40;
        margin-bottom: 1rem;
    }
    .form-group label {
        font-weight: 600;
    }
</style>

<link href="<?=base_url()  ?>slimcrop/slim/slim.min.css" rel="stylesheet">
<script src="<?=base_url()  ?>slimcrop/slim/slim.kickstart.min.js"></script>
<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>  

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.1.0/dist/css/multi-select-tag.css">
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.1.0/dist/js/multi-select-tag.js"></script>




<div class="page-content">
    <div class="container-fluid">

        
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body" style="padding: 8px 12px;">
                            <a href="<?=base_url('admin/garage') ?>" class="btn btn-danger" style="float:right;">Back</a>
                           <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title"><?=$heading ?></h4>
                    </div>
                </div>
            </div>
        </div>


        

            
        <div class="card">            
            <div class="card-body" style="min-height:500px;">



                <form method="post">                    
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="fname">Your Name <span class="contact__form--label__star">*</span></label>
                                <input class="form-control" name="fname" required placeholder="Enter your first name" type="text" value="<?= @$info->fname ?>">
                            </div>
                        </div>                        

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="email">Email <span class="contact__form--label__star">*</span></label>
                                <input class="form-control" name="email" oninput="this.value = this.value.toLowerCase()" required placeholder="Enter your email" type="email" value="<?= @$info->email ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="phone">Phone <span class="contact__form--label__star">*</span></label>
                                <input class="form-control" name="phone" minlength="10" maxlength="10"  onkeyup="this.value = this.value.replace(/[^0-9]/g, '');" placeholder="Enter your phone number" type="text" required value="<?= @$info->phone ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="city_id">City</label>
                                <select class="form-control form-select" id="city_id" name="city_id">
                                    <option value="" selected disabled>Select City</option>
                                    <?php
                                     foreach ($city as $dd) {
                                    ?>
                                    <option value="<?= $dd->id ?>"><?= $dd->name ?></option>
                                    <?php
                                     }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="garage_address">Address</label>
                                <input class="form-control"name="garage_address" id="searchTextField" placeholder="Enter garage address" type="text" value="<?= @$info->garage_address ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="garage_lat">Latitude</label>
                                <input class="form-control"name="garage_lat" placeholder="Enter latitude" id="cityLat" type="text" value="<?= @$info->garage_lat ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="garage_lon">Longitude</label>
                                <input class="form-control"name="garage_lon" id="cityLng" placeholder="Enter longitude" type="text" value="<?= @$info->garage_lon ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pan_number">Pan Card Number*</label>
                                <input class="form-control"name="pan_number"  required placeholder="Ex: XXXXX1234X" type="text" maxlength="10" minlength="10"  value="<?= @$info->pan_number ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="aadhar_number">AADHAR Number*</label>
                                <input class="form-control"name="aadhar_number" onkeyup="this.value = this.value.replace(/[^0-9]/g, '');" required placeholder="Aadhar Number" type="text" maxlength="12" minlength="12"   value="<?= @$info->aadhar_number ?>">
                            </div>
                        </div>


                        <div class="col-md-12 d-flex">
                             <h4 style="margin-right: 10px;">Are you: </h4>
                             <label style="margin-right: 10px;" >
                                <input type="radio" name="user_typ" id="garage_radio" value="Garage" checked> Garage
                            </label>
                            <label>
                                <input type="radio" name="user_typ" id="mech_radio" value="Mechanic"> Mechanic
                            </label>
                        </div>
                    </div>                      
                    <div id="garage_block">
                        <hr class="my-4"> 
                        <h2 class="mb-3 ps-3 pt-2" style="border-left: 4px solid red;">Garage Information.</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="garage_name">Garage Name</label>
                                    <input class="form-control" name="garage_name" placeholder="Enter garage name" type="text" value="<?= @$info->garage_name ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="garage_phone">Garage Phone</label>
                                    <input class="form-control" name="garage_phone" minlength="10" maxlength="10"  onkeyup="this.value = this.value.replace(/[^0-9]/g, '');" placeholder="Enter garage phone" type="text" value="<?= @$info->garage_phone ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="garage_email">Garage Email</label>
                                    <input class="form-control" name="garage_email" placeholder="Enter garage email" type="email" value="<?= @$info->garage_email ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="garage_est_date">Date of Establishment</label>
                                    <input class="form-control" name="garage_est_date"   type="date" value="<?= @$info->garage_est_date ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="garage_gst">GST Number</label>
                                    <input class="form-control" name="garage_gst" onkeyup="this.value = this.value.replace(/[^0-9]/g, '');" placeholder="Aadhar Number" type="text" maxlength="12" minlength="12"   value="<?= @$info->garage_gst ?>">
                                </div>
                            </div>


                        </div>    
                    </div>
                    <div id="mech_block">
                        <hr class="my-4"> 
                        <h2 class="mb-3 ps-3 pt-2" style="border-left: 4px solid red;">Mechanic Information.</h2>
                        <div class="row">
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="mech_exp">Experience (In Years)</label>
                                    <input class="form-control" name="mech_exp" placeholder="Enter garage name" type="number" min="1"  value="<?= @$info->mech_exp ?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="mech_first_workplace">First Workplace Name</label>
                                    <input class="form-control" name="mech_first_workplace" placeholder="Provide Name"  type="text"   value="<?= @$info->mech_first_workplace ?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="mech_cur_workplace">Current Workplace Name</label>
                                    <input class="form-control" name="mech_cur_workplace" placeholder="Provide Name"   type="text"   value="<?= @$info->mech_cur_workplace ?>">
                                </div>
                            </div>


                            

                        </div>    
                    </div>                         
                    <div class="row">                    
                        <div class="col-md-12 pb-4">
                              <h2 class="mb-3 ps-3 py-2" style="border-left: 4px solid red;">Select Your Services - </h2>
                            <div class="checkbox-group">

                                <div class="row">

                                    <?php
                                    foreach ($cc as $d) {
                                        $isChecked = in_array($d->id, $selected_categories) ? 'checked' : '';
                                    ?>
                                        <div class="col-3">
                                            <div class="form-check">
                                                <input class="form-check-input service-checkbox" type="checkbox" id="service<?=$d->id?>" name="categories[]" value="<?=$d->id?>"<?=$isChecked?>>
                                                <label class="form-check-label" for="service<?=$d->id?>"><?=$d->name?></label>
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
                                
                                    <div class="slim" style="width:210px; height:210px;"
                                         data-meta-user-id="1230"
                                         data-ratio="560:560"
                                         data-size="560,560"
                                        >

                                        <?php
                                        if(isset($info->thumb)){


                                         $img_url =  $info->thumb;
                                          if(@getimagesize($img_url))
                                          {                                                                                      
                                               echo '<img src="'.$img_url.'" class="img-thumbnail" alt="avatar">';
                                          }   

                                          }                                                   
                                         ?>
                                        <input type="file" name="thumb_img"  >
                                    </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="text-start">                        
                        <button type="submit" class="btn btn-primary"><?= $btn ?></button>                         
                    </div>
                </form>












            </div>
        </div>




        










        


















 
<?php    
    include('inc/footer.php');

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
    </script>

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
 


<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.1.0/dist/js/multi-select-tag.js"></script>
<script>
    // Initialize MultiSelectTag
    const multiSelect = new MultiSelectTag('category');

    // Wait for DOM content to load
    document.addEventListener('DOMContentLoaded', function () {
        // Target the custom container generated by multi-select-tag
        const multiSelectContainer = document.querySelector('.multi-select-tag');

        // Add event listener to monitor selections
        multiSelectContainer.addEventListener('click', function () {
            const selectedItems = multiSelectContainer.querySelectorAll('.selected-item');

            // Restrict selection to a maximum of 3 items
            if (selectedItems.length > 3) {
                alert('You can select a maximum of 3 categories.');

                // Remove the last selected item
                const lastSelectedItem = selectedItems[selectedItems.length - 1];
                lastSelectedItem.querySelector('.deselect-item').click(); // Trigger "deselect" programmatically
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
    </script>
