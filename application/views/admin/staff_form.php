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




<div class="page-content">
    <div class="container-fluid">

        
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body" style="padding: 8px 12px;">
                            <a href="<?=base_url('admin/staff') ?>" class="btn btn-danger" style="float:right;">Back</a>
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
                        
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Select User Type*</label>
                                 <select class=" form-select" name="user_role_id"  required >
                                     <option value="">Select</option>
                                     <?php 
                                     foreach ($staff_role as $sf) {
                                        $sel ='';
                                        if(isset($info->user_role_id) && $info->user_role_id==$sf->id){
                                            $sel =' selected';
                                        }
                                        echo  '<option  '.$sel.' value="'.$sf->id.'" >'.$sf->name.'</option>';
                                     }
                                     ?> 
                                     
                                 </select>
                            </div>
                        </div>

                         <div class="col-md-3">
                            <div class="form-group">
                                <label>First Name*</label>
                                <input type="text" name="first_name" required placeholder="Enter first name" class="form-control" value="<?= @$info->first_name?>">
                            </div>
                        </div>




                         <div class="col-md-3">
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input type="text" name="middle_name" placeholder="Enter middle name" class="form-control" value="<?= @$info->middle_name?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Last Name*</label>
                                <input type="text" name="last_name" required placeholder="Enter last name" class="form-control" value="<?= @$info->last_name?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email*</label>
                                <input type="email" name="email" required placeholder="Enter Email" class="form-control" value="<?= @$info->email?>">
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label>Phone Number*</label>
                                <input type="text" class="form-control" value="<?= @$info->phone ?>"  onkeypress="return /[0-9]/i.test(event.key)" minlength="10" maxlength="10" name="phone" placeholder="10 Digit Phone no." required>
                            </div>
                        </div>
                        
                                 
                                 <?php if (@$typ == 'edit'): ?>
                                    <!-- <input type="text" class="form-control" placeholder="Password cannot be changed" disabled> -->
                                <?php else: ?>
                                        <div class="col-md-4">
                                        <div class="form-group">

                                             <label>User Password*</label>
                                             <div class="input-group">                                       
                                                <input type="password" id="mypass" minlength="8" class="form-control" name="user_password" placeholder="Enter Password" required>
                                                <button  type="button" onclick="showpass()" class="btn btn-secondary">
                                                <i id="akhi" class="fa fa-eye"></i>
                                                </button>
                                            </div>

                                        </div>
                                        </div>



                                <?php endif; ?>
                             
                        
                       
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" class="form-select"> 
                                    <option value="">Select</option>
                                    <option <?=(isset($info->gender) && $info->gender=='Male')?'selected':'' ?> value="Male">Male</option>
                                    <option <?=(isset($info->gender) && $info->gender=='Female')?'selected':'' ?> value="Female">Female</option>
                                    <option <?=(isset($info->gender) && $info->gender=='Other')?'selected':'' ?> value="Other">Other</option>
                                </select> 
                            </div>
                        </div>
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
        
        function showpass() {
          var x = document.getElementById("mypass");
          if (x.type === "password") {
            x.type = "text";
            $('#akhi').attr( 'class','fa fa-eye-slash');
          } else {
            x.type = "password";
            $('#akhi').attr( 'class','fa fa-eye');
          }
        }
    </script>
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