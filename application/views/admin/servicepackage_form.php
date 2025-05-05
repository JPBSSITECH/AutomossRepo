<?php    
    include('inc/header.php');

?>


<link href="<?=base_url()  ?>/slimcrop/slim/slim.min.css" rel="stylesheet">
<script src="<?=base_url()  ?>/slimcrop/slim/slim.kickstart.min.js"></script>
<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>




<div class="page-content">
    <div class="container-fluid">

        
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body" style="padding: 8px 12px;">
                            <a href="<?=base_url('admin/servicepackage') ?>" class="btn btn-danger" style="float:right;">Back</a>
                           <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title"><?=(isset($ptyp) && $ptyp=='edit')?'Edit':'Add' ?> Category</h4>
                    </div>
                </div>
            </div>
        </div>


        

            


            <form  method="post" role="form">
                <div class="row" >
                    <div class="col-md-12">
                        <div class="card" >
                            <div class="card-body" style=" min-height: 500px;"> 
                                 
                                
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label>Category</label>
                                            <div class="col-md-12">
                                                <select name="category_id" required class="form-select form-control"> 
                                                    <option value="">Select Category* </option>
                                                    <?php 
                                                    foreach($parent_categories as $category): 
                                                        $sel = '';
                                                        if( isset($info->category_id) && $info->category_id== $category->id ){
                                                            $sel = 'selected';
                                                        }
                                                    ?>
                                                        <option <?=$sel ?> value="<?=$category->id; ?>"><?=$category->name; ?></option>
                                                        <?php 
                                                            $myl2 = array_search_multidim($l2_categories, 'parent_id', $category->id);
                                                            foreach ($myl2 as $kv) {

                                                                    $sel = '';
                                                                    if( isset($info->category_id) && $info->category_id== $kv->id ){
                                                                        $sel = 'selected';
                                                                    }
                                                               ?>
                                                                <option <?=$sel ?> value="<?=$kv->id; ?>">--<?=$kv->name; ?></option>
                                                               <?php  
                                                                    $myl3 = array_search_multidim($l2_categories, 'parent_id', $kv->id);
                                                                    foreach ($myl3 as $kv3) {
                                                                            $sel = '';
                                                                            if( isset($info->category_id) && $info->category_id== $kv3->id ){
                                                                                $sel = 'selected';
                                                                            }
                                                                        ?>
                                                                            <option <?=$sel ?> value="<?=$kv3->id; ?>">-- -- <?=$kv3->name; ?></option>
                                                                        <?php
                                                                    }

                                                            }
                                                        ?>

                                                    <?php 
                                                    endforeach; 
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>Name*</label>
                                            <div class="col-md-12">
                                                <input type="text" name="name" value="<?=@$info->name ?>" required placeholder="Type something" class="form-control">
                                            </div>
                                        </div> 

                                        <div class="form-group col-md-12">
                                            <label>Short Info*</label>
                                            <div class="col-md-12">
                                                <input type="text" name="short_info" value="<?=@$info->short_info ?>" required   placeholder="Short Description of service" class="form-control">
                                            </div>
                                        </div>
                                            


                                               
                                    </div>       
                 

                                    <div class="form-group row">
                                        <label>Info</label>
                                         
                                        <div class="col-md-12">
                                            <textarea id="editor1" required  style="height:100px;" name="info" class="form-control"><?=@$info->info ?></textarea>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                            <div class="col-md-12" style="float: left;">
                                                    <label>Thumbnail (840X560)</label>
                                                
                                                    <div class="slim" style="width:210px; height:140px;"
                                                         data-meta-user-id="1230"
                                                         data-ratio="840:560"
                                                         data-size="840,560"
                                                        >


                                                        <?php
                                                         if(isset($info->thumb)){
                                                             $img_url = $info->thumb;
                                                              if(@getimagesize($img_url))
                                                              {                                                                                      
                                                                   echo '<img src="'.$img_url.'" class="img-thumbnail" alt="avatar">';
                                                              } 
                                                          }                                                     
                                                         ?>




                                                        <input type="file" name="thumb" required>
                                                    </div>
                                               
                                            </div>
                                        </div>


                                        <div class="form-group row">                                         
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-success"><?=(isset($ptyp) && $ptyp=='edit')?'Update':'Submit' ?></button>
                                            <button class="btn btn-space btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                                      
                                
                            </div>
                        </div>
                    </div>
                     

            </form>










        


















 
<?php    
    include('inc/footer.php');

?>

<script>
   
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