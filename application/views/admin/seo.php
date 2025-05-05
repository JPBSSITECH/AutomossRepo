<?php    
    include('inc/header.php');

?>

<div class="page-content">
    <div class="container-fluid">

        
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body" style="padding: 8px 12px;">
                            <a href="<?=base_url('admin/seo') ?>" class="btn btn-danger" style="float:right;">Add</a>
                           <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title">Add On Page SEO</h4>
                    </div>
                </div>
            </div>
        </div>


        <div class="row" style="margin-bottom:50px;">

            <div class="col-xl-12">
                <div class="card" >
                    <div class="card-body" style=" min-height: 500px;"> 

                         



        <form method="post">

            <div class="form-group row">
                <label class="col-12 col-sm-2 col-form-label text-sm-right"> Url*</label>
                <div class="col-12 col-sm-10 col-lg-6">
                    <input type="text" name="url"  value="<?=@$info->url  ?>"   required placeholder="Type something" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <label class="col-12 col-sm-2 col-form-label text-sm-right"> Meta Title*</label>
                <div class="col-12 col-sm-10 col-lg-6">
                    <input type="text" name="title" value="<?=@$info->title  ?>" required placeholder="Type something" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-12 col-sm-2 col-form-label text-sm-right"> Meta Key</label>                                            
                <div class="col-10 col-sm-10 col-lg-10">
                    <textarea type="text" name="meta_key"  class="form-control"  ><?=@$info->meta_key  ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-12 col-sm-2 col-form-label text-sm-right"> Meta Description</label>                                            
                <div class="col-10 col-sm-10 col-lg-10">
                    <textarea type="text" name="meta_desc"   class="form-control"  ><?=@$info->meta_desc  ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-12 col-sm-2 col-form-label text-sm-right">Other Meta info </label>                                            
                <div class="col-10 col-sm-10 col-lg-10">
                    <textarea type="text" name="meta_otherinfo" 
                    class="form-control"  ><?=@$info->meta_otherinfo  ?></textarea>
                </div>
            </div>
            <div class="form-group row text-right">
                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                    <button type="submit" class="btn btn-space btn-primary"><?=$button  ?></button>
                    
                </div>
            </div>
        </form>







                    </div>
                </div>
            </div>
        </div>











              
            
<?php    
    include('inc/footer.php');

?>