<?php    
    include('inc/header.php');

?>




<link href="<?=base_url()  ?>/slimcrop/slim/slim.min.css" rel="stylesheet">
<script src="<?=base_url()  ?>/slimcrop/slim/slim.kickstart.min.js"></script>
<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>

<style type="text/css">
    .form-group{
        margin-bottom: 10px;
    }
</style>


<div class="page-content">
    <div class="container-fluid">

        
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body" style="padding: 8px 12px;">
                            <a href="<?=base_url('admin/garage_package') ?>" class="btn btn-danger" style="float:right;">Back</a>
                           <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title"><?=$heading;?></h4>
                    </div>
                </div>
            </div>
        </div>


        

            


            <form  method="post" role="form">
                <div class="row" >
                    <div class="col-md-12">
                        <div class="card" >
                            <div class="card-body" style=" min-height: 500px;"> 
                                 
                                
                                    <div class="form-group row">
                                       
                                        <div class="col-md-4">
                                             <label>Package Name*</label>
                                            <input type="text" name="name" 
                                            value="<?=@$info->name ?>"

                                            required placeholder="Type Package Name" class="form-control">
                                        </div>

                                        <div class="col-md-4">
                                             <label>Service Cat Count*</label>
                                            <input type="number" name="category_count" 
                                            value="<?=@$info->category_count ?>"

                                            required placeholder="Type Package Count" class="form-control">
                                        </div>

                                        <div class="col-md-4">
                                             <label>Product Cat Count*</label>
                                            <input type="number" name="ecom_category_count" 
                                            value="<?=@$info->ecom_category_count ?>"

                                            required placeholder="Type Product Category Count" class="form-control">
                                        </div>

                                        <div class="col-md-6">
                                             <label>Monthly Price</label>
                                            <input type="number" name="monthly_price" 
                                            value="<?=@$info->monthly_price ?>"

                                            required placeholder="Enter Monthly Price" class="form-control">
                                        </div>

                                        <div class="col-md-6">
                                             <label>Quaterly Price</label>
                                            <input type="number" name="quaterly_price" 
                                            value="<?=@$info->quaterly_price ?>"

                                            required placeholder="Enter Quaterly Price" class="form-control">
                                        </div>

                                        <div class="col-md-6">
                                             <label>Halfyearly Price</label>
                                            <input type="number" name="halfyearly_price" 
                                            value="<?=@$info->halfyearly_price ?>"

                                            required placeholder="Enter Halfyearly Price" class="form-control">
                                        </div>

                                        <div class="col-md-6">
                                             <label>Yearly Price</label>
                                            <input type="number" name="yearly_price" 
                                            value="<?=@$info->yearly_price ?>"

                                            required placeholder="Enter Yearly Price" class="form-control">
                                        </div>


                                    </div> 



                                                
                 

                                    <div class="form-group row">
                                        <label>Info&nbsp; </label>
                                        <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
                                        <div class="col-md-12">
                                            <textarea required="" style="height:300px;" name="info" id="editor1" class="form-control"><?=@$info->info ?></textarea>
                                        </div>
                                    </div>


                                    <div class="form-group row">                                         
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                            <button class="btn btn-space btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                                      
                                
                            </div>
                        </div>
                    </div>
                     

                </div>

            </form>




































<?php    
    include('inc/footer.php');

?>

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