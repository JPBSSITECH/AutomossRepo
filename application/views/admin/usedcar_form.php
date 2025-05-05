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
 
 
    #mech_block {
        display: none; /* Mechanic block is hidden by default */
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
                            <a href="<?=base_url('admin/usedcar') ?>" class="btn btn-danger" style="float:right;">Back</a>
                           <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title"><?=$heading ?></h4>
                    </div>
                </div>
            </div>
        </div>


        

            


        <form method="post" role="form">
        <div class="card">
            
            <div class="card-body">
                <!-- Basic Information -->
                <div class="form-section">
                    <div class="form-section-title">Basic Information</div>
                    <div class="row">
                        <!-- <div class="col-md-3">


                            
                        </div> -->
                        <div class="col-md-12">

                        <div class="row">
                        
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name*</label>
                                <input type="text" name="name" required placeholder="Enter name" class="form-control" value="<?= @$info->name?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Customer  </label>
                            <select class="form-select" name="created_by">
                                <option value="">Select Customer</option>                             
                                    <?php
                                        foreach ($customers->data as $cc) {
                                            // $sel ='';
                                            // if($cc->id == $info->created_by){

                                            // }
                                            $sel = ($cc->id == $info->created_by) ? 'selected' : '';
                                    ?>
                                         <option <?=$sel ?> value="<?= $cc->id ?>"><?= $cc->fname ?></option>
                                    <?php
                                        }
                                    ?>
                                       
                                
                            </select>
                        </div>
                    </div>

                   <!--  <div class="col-md-12 mb-4">
                                    <label>Features </label>
                                    <select class="js-example-basic-multiple" id="r_mat" name="feature[]" multiple="multiple">                                        


                                        <?php 
                                        foreach ($raw_m as $rm) {
                                            $sel ='';
                                            if(isset($raw_m_info) && mycount($raw_m_info)>0){
                                                $sel ='';
                                                $chk = array_search_multidim($raw_m_info, 'raw_m_cat_id', $rm->id);
                                                if(mycount($chk)>0){
                                                    $sel = 'selected';
                                                }
                                            }
                                            echo '<option '.$sel.' value="'.$rm->id.'">'.$rm->name.'</option>';
                                        }
                                        ?>
                                        
                                         
                                    </select>
                                </div> -->


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Manufacturer  </label>
                                        <select class="form-select" id="manufacturer" name="car_manufacturer_id">
                                            <option value="">Select manufacturer</option>                             
                                                
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Model</label>
                                        <select class="form-select" id="model" name="car_model_id">
                                            <option value="">Select Model</option>                             
                                                <!-- <?php
                                                    foreach ($model->data as $cc) {
                                                        $sel = ($cc->id == $info->car_model_id) ? 'selected' : '';
                                                ?>
                                                     <option <?=$sel ?> value="<?= $cc->id ?>"><?= $cc->name ?></option>
                                                <?php
                                                    }
                                                ?> -->
                                                   
                                            
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Fuel Type</label>
                                        <select class="form-select" name="fuel_type_id">
                                            <option value="">Select Fuel Type</option>                             
                                                <?php
                                                    foreach ($fuel->data as $cc) {
                                                        $sel ='';
                                                        if(isset($info->fuel_type_id)){
                                                            $sel = ($cc->id == $info->fuel_type_id) ? 'selected' : '';
                                                        }
                                                        
                                                ?>
                                                     <option <?=$sel ?> value="<?= $cc->id ?>"><?= $cc->name ?></option>
                                                <?php
                                                    }
                                                ?>
                                                   
                                            
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label>Transmission</label>
                                     
                                    <select class="form-select" name="car_transmission">
                                        <option value="">Select</option>
                                        <option <?=(isset($info->car_transmission) && $info->car_transmission =='Manual')?'Selected':'' ?> value="Manual">Manual</option>
                                        <option <?=(isset($info->car_transmission) && $info->car_transmission =='Automatic')?'Selected':'' ?> value="Automatic">Automatic</option>
                                    </select>
                                </div>
                            </div>

                             <div class="col-md-4 mt-4"> 
                                    <div class="form-group">
                                        <label>City</label>
                                        <select class="form-select" name="city_id">
                                            <option value="">Select City</option>                             
                                                <?php
                                                    foreach ($city->data as $cc) {
                                                       $sel ='';
                                                        if(isset($info->city_id)){
                                                            $sel = ($cc->id == $info->city_id) ? 'selected' : '';
                                                        }
                                                ?>
                                                     <option <?=$sel ?> value="<?= $cc->id ?>"><?= $cc->name ?></option>
                                                <?php
                                                    }
                                                ?>
                                                   
                                            
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label>Owner Type</label>
                                    <!-- <input type="text" name="owner_type" placeholder="Owner Type" class="form-control" value="<?= @$info->owner_type ?>"> -->
                                    <select name="owner_type" class="form-select">
                                    <option value="">Select Owner Type</option>
                                    <option value="1st Owner" <?= @$info->owner_type == '1st Owner' ? 'selected' : '' ?>>1st Owner</option>
                                    <option value="2nd Owner" <?= @$info->owner_type == '2nd Owner' ? 'selected' : '' ?>>2nd Owner</option>
                                    <option value="3rd Owner" <?= @$info->owner_type == '3rd Owner' ? 'selected' : '' ?>>3rd Owner</option>
                                    <option value="4th Owner" <?= @$info->owner_type == '4th Owner' ? 'selected' : '' ?>>4th Owner</option>
                                </select>
                                </div>
                            </div>

                             <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label>Year OF Redg.</label>
                                     <input type="number" name="year_of_registration" placeholder="Enter Year (e.g., 2025)" class="form-control" value="<?= @$info->year_of_registration ?>" min="1900" max="<?= date('Y') ?>" 
                                    >
                                </div>
                            </div>


                             <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" name="price" onkeypress="return /[0-9]/i.test(event.key)" maxlength="8" placeholder="Enter Price" class="form-control" value="<?= @$info->price ?>">
                                </div>
                            </div>

                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label>Seat Count</label>
                                    <input type="number" name="seat_count" placeholder="Enter Seat" class="form-control" value="<?= @$info->seat_count ?>">
                                </div>
                            </div>

                            <div class="col-md-12 mt-4">
                                <div class="form-group">
                                    <label>Info</label>
                                    <textarea name="info" placeholder="Enter Description" class="form-control" rows="4" style="height: 100px;"><?= @$info->info ?></textarea>
                                </div>
                            </div>


                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label>Insurance</label>
                                    <input type="text" name="insurance" placeholder="Enter Insurance" class="form-control" value="<?= @$info->insurance ?>">
                                </div>
                            </div>

                             <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label>Kilometer</label>
                                    <input type="number" name="kms_driven" placeholder="Enter KM" class="form-control" value="<?= @$info->kms_driven ?>">
                                </div>
                            </div>

                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label>RTO</label>
                                    <input type="text" name="rto" placeholder="Enter rto" class="form-control" value="<?= @$info->rto ?>">
                                </div>
                            </div>

                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label>Engine Displacement</label>
                                    <input type="number" name="engine_displacement" placeholder="Engine displacement in CC" class="form-control" value="<?= @$info->engine_displacement ?>">
                                </div>
                            </div>


                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label>Year of Manufacture</label>
                                    <input type="number" name="year_of_manufacture" placeholder="Enter Year of manufacture" class="form-control" value="<?= @$info->year_of_manufacture ?>">
                                </div>
                            </div>

                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label>Milage</label>
                                    <input type="number" name="milage" placeholder="Enter milage" class="form-control" value="<?= @$info->milage ?>">
                                </div>
                            </div>

                            <div class="col-md-4 mt-4">
                                <div class="form-group">
                                    <label>Length</label>
                                    <input type="number" name="length" placeholder="Enter Length in MM" class="form-control" value="<?= @$info->length ?>">
                                </div>
                            </div>



                               


                            <div class="form-group row mt-2">
                                             

                                <div class="col-md-12 mt-4" style="float: left;">
                                    <label>Thumbnail (850X840)</label>

                                    <div class="slim" style="width:210px; height:140px;"
                                    data-meta-user-id="1230"
                                    data-ratio="840:840"
                                    data-size="840,840"
                                    >
                                    <?php
                                    if(isset($info->thumb) && $info->thumb!=""){
                                        $img_url = @$info->thumb;
                                        if(@getimagesize($img_url))
                                        {                                                                                      
                                            echo '<img src="'.$img_url.'" class="img-thumbnail" alt="avatar">';
                                        }
                                    }                                                      
                                    ?>


                                    <input type="file" name="thumb_img"  > 
                                </div>

                            </div>

                            <div class="col-md-3 mt-4" style="float: left;">
                                    <label>Pic1 (850X840)</label>

                                    <div class="slim" style="width:210px; height:140px;"
                                    data-meta-user-id="1230"
                                    data-ratio="840:840"
                                    data-size="840,840"
                                    >
                                    <?php
                                    if(isset($info->pic1)  && $info->pic1!="" ){
                                        $img_url1 = @$info->pic1;
                                        if(@getimagesize($img_url1))
                                        {                                                                                      
                                            echo '<img src="'.$img_url1.'" class="img-thumbnail" alt="avatar">';
                                        }
                                    }                                                      
                                    ?>


                                    <input type="file" name="thumb_img1"  > 
                                </div>

                            </div>

                            <div class="col-md-3 mt-4" style="float: left;">
                                    <label>Pic2 (850X840)</label>

                                    <div class="slim" style="width:210px; height:140px;"
                                    data-meta-user-id="1230"
                                    data-ratio="840:840"
                                    data-size="840,840"
                                    >
                                    <?php
                                    if(isset($info->pic2) && $info->pic2!=""){
                                        $img_url2 = @$info->pic2;
                                        if(@getimagesize($img_url2))
                                        {                                                                                      
                                            echo '<img src="'.$img_url2.'" class="img-thumbnail" alt="avatar">';
                                        }
                                    }                                                      
                                    ?>


                                    <input type="file" name="thumb_img2"  > 
                                </div>

                            </div>

                             <div class="col-md-3 mt-4" style="float: left;">
                                    <label>Pic3 (850X840)</label>

                                    <div class="slim" style="width:210px; height:140px;"
                                    data-meta-user-id="1230"
                                    data-ratio="840:840"
                                    data-size="840,840"
                                    >
                                    <?php
                                    if(isset($info->pic3) && $info->pic3!=""){
                                        $img_url3 = @$info->pic3;
                                        if(@getimagesize($img_url3))
                                        {                                                                                      
                                            echo '<img src="'.$img_url3.'" class="img-thumbnail" alt="avatar">';
                                        }
                                    }                                                      
                                    ?>


                                    <input type="file" name="thumb_img3"  > 
                                </div>

                            </div>

                            <div class="col-md-3 mt-4" style="float: left;">
                                    <label>Pic4 (850X840)</label>

                                    <div class="slim" style="width:210px; height:140px;"
                                    data-meta-user-id="1230"
                                    data-ratio="840:840"
                                    data-size="840,840"
                                    >
                                    <?php
                                    if(isset($info->pic4) && $info->pic4!=""){
                                        $img_url4 = @$info->pic4;
                                        if(@getimagesize($img_url4))
                                        {                                                                                      
                                            echo '<img src="'.$img_url4.'" class="img-thumbnail" alt="avatar">';
                                        }
                                    }                                                      
                                    ?>


                                    <input type="file" name="thumb_img4"  > 
                                </div>

                            </div>






                                            

                                            
                        </div>

                                        


                                            
                                            

                                        </div>

                                        <!-- <div id="multiline_box"> -->
                                            
                                        </div>

                                        <!-- <span class="btn btn-danger btn-sm" style="margin-bottom: 15px; margin-right:275px; margin-top:7px;"
                                            onclick="line_add(); ">Add                     
                                        </span>
 -->
                          
                        
                        
                         
                         
                       
                        
                    </div>
                        </div>
                    </div>
                </div>

          

                 

                <!-- Submit Button -->
                <div class="text-start">
                    <button type="submit" class="btn btn-primary"><?= $btn ?></button>
                </div>
            </div>
        </div>
    </form>










        


















 
<?php    
    include('inc/footer.php');

?>

<script type="text/javascript">
    var feature = 'd_drop';
    var d_drop_id = '<?=@$info->car_manufacturer_id ?>';
    var scnd_drop_id = '<?=@$info->car_model_id ?>';
</script>

<script src="<?=base_url('lokscript.js')?>?v=<?=rand() ?>"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#page_heading").keyup(function(){
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace('/\s/g','-');
            Text = Text.replace(/ /g,'-');
            Text = Text.replace(/[^\w-]+/g,'');
            Text = Text.replace(/-{2,}/g, '-');



            $("#page_url").val(Text);    
        });
    });
</script>

<script>
   ///// CKEDITOR.replace( 'editor1');


    var editor = CKEDITOR.replace( 'editor1',
    {
        allowedContent: true,
        height: 500,
        filebrowserBrowseUrl : "<?=base_url()?>ckfinder/ckfinder.html",
        filebrowserImageBrowseUrl : "<?=base_url()?>ckfinder/ckfinder.html?type=Images",
        filebrowserFlashBrowseUrl : "<?=base_url()?>ckfinder/ckfinder.html?type=Flash",
        filebrowserUploadUrl : "<?=base_url()?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files",
        filebrowserImageUploadUrl : "<?=base_url()?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images",
        filebrowserFlashUploadUrl : "<?=base_url()?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash"
       
    } );
  
    CKFinder.setupCKEditor( editor, { basePath : "<?=base_url()?>ckfinder/", rememberLastFolder : false } ) ;
</script> 

<script>
  new MultiSelectTag('r_mat') 
</script>


<script type="text/javascript">
    function line_add() {
        var ppp = "pp_" + Math.floor(100000 + Math.random() * 900000);
        
        var m = `
            <div class="row justify-content-evenly" id="${ppp}">
                <div class="col-12 border-bottom border-top py-3">
                    <div class="form-group row align-items-center">
                        <div class="col-md-3">
                            <label>Raw Materials*</label>
                            <select class="form-control form-select" name="raw_material_id[]">
                                <option value="">Select</option>
                                <?php foreach($rrm as $r): ?>
                                    <option value="<?=$r->id ?>"><?=$r->name?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Unit*</label>
                            <select class="form-control form-select" name="unit_id[]">
                                <option value="">Select Unit</option>

                                <?php foreach($um as $r): ?>
                                    <option value="<?=$r->id ?>"><?=$r->name?></option>
                                <?php endforeach; ?>
                                
                            </select>
                        </div>
                        <div class="col-md-3">
                        <label>Quantity*</label>
                        <input type="number" name="quantity[]" value="<?= @$info->quantity ?>" 
                        id="page_heading"  placeholder="Type Your Name" 
                        class="form-control" minlength="2" maxlength="50">
                        </div>
                        <div class="col-md-2 pt-4">
                            <span onclick="remove_line('${ppp}')" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </span>
                        </div>
                    </div> 
                </div>
            </div>
        `;
        $("#multiline_box").append(m);
    }

    function remove_line(vv) {
        $("#" + vv).remove();
    }
</script>

