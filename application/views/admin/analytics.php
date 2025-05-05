<?php
    include ('inc/header.php');   
?>



<div class="page-content">
<div class="container-fluid">

        
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body" style="padding: 8px 12px;">                             
                           <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title">Master Settings</h4>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mb-3" >
            <div class="col-md-12">
                <div class="card" >
                    <div class="card-body" style=" min-height: 200px;"> 

                           <form method="post" enctype="multipart/form-data">
                              
                              <div class="form-group row">
                                  <div class="col-md-12 col-sm-12">
                                     <label>Analytics / Webmaster / Other Code</label>
                                     <textarea class="form-control" style="height:450px;" name="seo_code"><?=$settings->seo_code ?></textarea>
                                  </div>
                                </div>
                                <hr class="wide">

                                <div align="center">
                                    <button type="submit" class="btn btn-success " name=""><i class="fa fa-save"></i> Save</button>
                                    <a href="<?=base_url('admin/index');?>" class="btn btn-danger " name=""><i class="fa fa-times"></i> Cancel</a>
                                </div>

                            </form>
                          
                        
                    </div>
                </div>
            </div>
        </div>
</div>
</div>


 




 

<?php
  include 'inc/footer.php';
?>
 



