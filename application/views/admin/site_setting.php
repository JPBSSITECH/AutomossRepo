<?php
    include ('inc/header.php');  
?>

 
<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url('beyond.css') ?>">


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
                                <div class="row">
                                          <div class="col-md-9">
                                              

                                              <div class="widget">
                                                 

                                                <div class="widget-body no-paddingXX">
                                                    <div class="widget-main ">
                                                        <div class="horizontal-space"></div>
                                                          <div class="row">
                                                                              
                                                                              <div class="col-md-4" style="background:#f2f2f2; border-right: 1px solid #ccc;">
                                                                                  <br/>
                                                                                  
                                                                                  <label>Organization Logo</label>

                                                                                  <?php
                                                                                    $companylogo = base_url().'uploads/'.$settings->company_logo;                        
                                                                                  ?> 
                                                                                  <div align="center"  style="background: #fff; padding:30px 10px; border-radius: 3px;">
                                                                                    <img src="<?php echo $companylogo; ?>" width= "100%">
                                                                                  </div>
                                                                                  <br/>
                                                                                  
                                                                                      <div class="input-icon inverted">
                                                                                          <input type="file" class="form-control" name="company_logo" value="<?=$settings->company_logo?>">
                                                                                          <i class="fa fa-upload bg-sky"></i>
                                                                                      </div>
                                                                                  

                                                                                  
                                                                                  
                                                                                  <br/>
                                                                                  <br/>
                                                                                  <br/>


                                                                                   <label>Logo (Dark BG)</label>

                                                                                  <?php
                                                                                    $companylogo2 = base_url().'uploads/'.$settings->company_logo2;                        
                                                                                  ?> 
                                                                                  <div align="center"  style="background: #000; padding:30px 10px; border-radius: 3px;">
                                                                                    <img src="<?php echo $companylogo2; ?>" width= "100%">
                                                                                  </div>
                                                                                  <br/>
                                                                                  
                                                                                      <div class="input-icon inverted">
                                                                                          <input type="file" class="form-control" name="company_logo2" value="<?=$settings->company_logo2 ?>">
                                                                                          <i class="fa fa-upload bg-sky"></i>
                                                                                      </div>
                                                                                  

                                                                                  
                                                                                   
                                                                                  <br/>
                                                                                  <br/>
                                                                                
                                                                              </div>
                                                                              <div class="col-md-8">
                                                                                <div class="form-group row">
                                                                                  <div class="col-md-12 col-sm-12">
                                                                                     <label>Organization Name</label>
                                                                                     <input type="text" class="form-control" name="company_name" value="<?=@$settings->company_name ?>" autocomplete="off" required>
                                                                                  </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                  <div class="col-md-12 col-sm-12">
                                                                                     <label>Email</label>
                                                                                     <input type="email" class="form-control" name="email" value="<?=@$settings->email ?>" autocomplete="off" required>
                                                                                  </div>
                                                                                </div>

                                                                                <div class="form-group row">
                                                                                  <div class="col-md-12 col-sm-12">
                                                                                     <label>Website </label>
                                                                                     <input type="text" class="form-control" name="web" value="<?=@$settings->web ?>" autocomplete="off" required>
                                                                                  </div>
                                                                                </div>

                                                                                <div class="form-group row">
                                                                                  <div class="col-md-6 col-sm-6">
                                                                                     <label>Phone (Primary)</label>
                                                                                     <input type="text" class="form-control" name="phone" value="<?=$settings->phone?>"  autocomplete="off" required>
                                                                                  </div>
                                                                                  <div class="col-md-6 col-sm-6">
                                                                                     <label>Phone (Secondary)</label>
                                                                                     <input type="text" class="form-control" name="sec_phone"  value="<?=$settings->sec_phone?>" autocomplete="off" >
                                                                                  </div>
                                                                                </div>

                                                                                <div class="form-group row">
                                                                                  <div class="col-md-12 col-sm-12">
                                                                                     <label>Address</label>
                                                                                     <textarea class="form-control"  style="height: 250px;" name="address"><?=$settings->address?></textarea>
                                                                                  </div>
                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                          </div>


                                        <div class="col-md-3">    

                                            <div class="form-group row">
                                                <div class="col-md-12 col-sm-12">
                                                  <span class="input-icon inverted">
                                                      <input type="text" class="form-control" name="facebook" value="<?=@$settings->facebook ?>">
                                                      <i class="fa fa-facebook bg-blue"></i>
                                                  </span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                              <span class="input-icon inverted">
                                                  <input type="text" class="form-control" name="twitter" value="<?=@$settings->twitter ?>">
                                                  <i class="fa fa-twitter bg-sky"></i>
                                              </span>
                                            </div>
                                            </div>
                                            <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                              <span class="input-icon inverted">
                                                  <input type="text" class="form-control" name="linkedin" value="<?=@$settings->linkedin ?>">
                                                  <i class="fa fa-linkedin bg-blue"></i>
                                              </span>
                                            </div>
                                            </div>
                                            <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                              <span class="input-icon inverted">
                                                  <input type="text" class="form-control" name="pinterest" value="<?=@$settings->pinterest ?>">
                                                  <i class="fa fa-pinterest bg-red"></i>
                                              </span>
                                            </div>
                                            </div>
                                            <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                              <span class="input-icon inverted">
                                                  <input type="text" class="form-control" name="instagram" value="<?=@$settings->instagram ?>">
                                                  <i class="fa fa-instagram bg-maroon"></i>
                                              </span>
                                            </div>
                                            </div>
                                            <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                              <span class="input-icon inverted">
                                                  <input type="text" class="form-control" name="youtube" value="<?=@$settings->youtube ?>">
                                                  <i class="fa fa-youtube bg-danger"></i>
                                              </span>
                                            </div>
                                            </div>
                                            <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                              <span class="input-icon inverted">
                                                  <input type="text" class="form-control" name="vimeo" value="<?=@$settings->vimeo?>">
                                                  <i class="fa fa-vimeo bg-blue"></i>
                                              </span>
                                            </div>
                                            </div>
                                            <div class="form-group row">
                                            <div class="col-md-12 col-sm-12">
                                              <span class="input-icon inverted">
                                                  <input type="text" class="form-control" name="snapchat" value="<?=@$settings->snapchat ?>">
                                                  <i class="fa fa-snapchat bg-yellow"></i>
                                              </span>
                                            </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-12 col-sm-12">
                                                  <span class="input-icon inverted">
                                                      <input type="text" class="form-control" name="yelp" value="<?=@$settings->yelp ?>">
                                                      <i class="fa fa-yelp bg-danger"></i>
                                                  </span>
                                                </div>
                                            </div>           


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
<script>
    CKEDITOR.replace( 'editor1' );
    CKEDITOR.replace( 'editor2' );
    CKEDITOR.replace( 'editor3' );
</script>



