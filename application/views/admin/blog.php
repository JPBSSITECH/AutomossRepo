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
                            <a href="<?=base_url('admin/blog_list') ?>" class="btn btn-danger" style="float:right;">Back</a>
                           <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title">Add Blog</h4>
                    </div>
                </div>
            </div>
        </div>


        

            


            <form  method="post" role="form">
                <div class="row" >
                    <div class="col-md-8">
                        <div class="card" >
                            <div class="card-body" style=" min-height: 500px;"> 
                                 
                                
                                    <div class="form-group row">
                                        <label>Blog Name*</label>
                                        <div class="col-md-12">
                                            <input type="text" name="page_heading" id="page_heading"required placeholder="Type something" class="form-control">
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label>Blog Url*</label>
                                        <div class="col-md-12">
                                            <input type="text" name="page_url" id="page_url" required placeholder="Type something" class="form-control">
                                        </div>
                                    </div>            
                 

                                    <div class="form-group row">
                                        <label> Over View&nbsp; </label>
                                        <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
                                        <div class="col-md-12">
                                            <textarea required="" style="height:500px;" name="page_txt" id="editor1" class="form-control"></textarea>
                                        </div>
                                    </div>
                                      
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" >
                            <div class="card-body" style=" min-height: 500px;"> 
                                
                                     
                                     
                                         
                                        <div class="form-group">
                                            <div class="col-md-12" style="float: left;">
                                                    <label>Banner (1850X420)</label>
                                                
                                                    <div class="slim" style="width:100%; height:210px;"
                                                         data-meta-user-id="1230"
                                                         data-ratio="1850:420"
                                                         data-size="1850,420"
                                                        >
                                                        <input type="file" name="banner" required>
                                                    </div>
                                               
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
                                                        <input type="file" name="thumb_img" required>
                                                    </div>
                                               
                                            </div>
                                        </div>












                                     
                                     
                                    <div class="form-group row">
                                        <label> Page Title</label>                                            
                                        <div class="col-md-12">
                                            <input type="text" name="meta_title" class="form-control"  />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label> Meta Description</label>                                            
                                        <div class="col-md-12">
                                            <input type="text" name="meta_desc" class="form-control"  />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label> Keyword </label>                                            
                                        <div class="col-md-12">
                                            <input type="text" name="meta_keyword" class="form-control"  />
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