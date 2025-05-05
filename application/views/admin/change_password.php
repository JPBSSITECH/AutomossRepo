<?php
   include ('inc/header.php');  
?>


<div class="page-content">
<div class="container-fluid">

        
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body" style="padding: 8px 12px;">                             
                           <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title">Change Password</h4>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mb-3" >
            <div class="col-md-6">
                <div class="card" >
                    <div class="card-body" style=" min-height: 200px;"> 
                         
                                <form method="post">
                                    <div class="form-group mb-3">
                                        <label for="password">Old Password</label>
                                        <input class="form-control" type="password" name="old_password"  placeholder="Enter Old password">
                                    </div> 

                                     <div class="form-group mb-3">
                                        <label for="password">New Password</label>
                                        <input class="form-control" type="password" name="new_password"  placeholder="Enter New password">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Confirm Password</label>
                                        <input class="form-control" type="password"  placeholder="Enter Conform password" name="confirm_password">
                                    </div>
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Update
                                        </button>
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

