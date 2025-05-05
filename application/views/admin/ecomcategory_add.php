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
                            <a href="<?=base_url('admin/ecomcategory') ?>" class="btn btn-danger" style="float:right;">Back</a>
                           <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title">Add Category</h4>
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
                                            <label>Parent Category</label>
                                            <div class="col-md-12">
                                                <select name="parent_id" class="form-select form-control">
                                                    <option value="">Select Parent Category</option>
                                                    <?php foreach($parent_categories as $category): ?>
                                                        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label>Name*</label>
                                            <div class="col-md-12">
                                                <input type="text" name="name" id="name"required placeholder="Type something" class="form-control">
                                            </div>
                                        </div> 
                                        <div class="form-group col-md-4">
                                            <label>Url Slug</label>
                                            <div class="col-md-12">
                                                <input type="text" name="urlslug" id="name_url" required placeholder="Type something" class="form-control">
                                            </div>
                                        </div>     


                                               
                                    </div>       
                 

                                    <div class="form-group row">
                                        <label>Info</label>
                                         
                                        <div class="col-md-12">
                                            <textarea style="height:100px;" name="info" class="form-control"></textarea>
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
                                                        <input type="file" name="thumb" required>
                                                    </div>
                                               
                                            </div>
                                        </div>


                                        <div class="form-group row">                                         
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-success">Submit</button>
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

<script type="text/javascript">
    $(document).ready(function(){
        $("#name").keyup(function(){
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace('/\s/g','-');
            Text = Text.replace(/ /g,'-');
            Text = Text.replace(/[^\w-]+/g,'');
            Text = Text.replace(/-{2,}/g, '-');



            $("#name_url").val(Text);    
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