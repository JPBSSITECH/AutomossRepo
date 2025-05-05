 <!-- Footer Area -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <!-- Footer Area -->
                                <footer
                                    class="footer-area d-sm-flex justify-content-center align-items-center justify-content-between">
                                    <!-- Copywrite Text -->
                                    <div class="copywrite-text">
                                        <p>Created by @<a target="_blank" href="#">STRIVESTREAM PVT LTD</a></p>  
                                    </div>
                                    <div style="display: none;" class="fotter-icon text-center">
                                        <a href="#" class="action-item mr-2" data-bs-toggle="tooltip" title="Facebook">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="action-item mr-2" data-bs-toggle="tooltip" title="Twitter">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="action-item mr-2" data-bs-toggle="tooltip" title="Pinterest">
                                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="action-item mr-2" data-bs-toggle="tooltip" title="Instagram">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



</div>



</div>


    <!-- Plugins Js -->
    <script src="<?=base_url('admin_codebase') ?>/js/jquery.min.js"></script>
    <script src="<?=base_url('admin_codebase') ?>/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


     
<script type="text/javascript">
// $(document).ready(function(){
//   Swal.fire("Ohh!", "WEWEWEWEfffrrtyu", "warning");
// }); 


<?php
  ///////////////////////////////////////////////////////////
  $err = $this->session->flashdata('error');
  if(!empty($err))
  {
        ?> 
        $(document).ready(function(){
          Swal.fire("Ohh!", "<?=$err ?>", "warning");
        });
        <?php
        unset($_SESSION['error']);
   }
  $scs = $this->session->flashdata('success');
  if(!empty($scs))
  {
     ?> 
        $(document).ready(function(){
             Swal.fire("Great!", "<?=$scs ?>", "success");
        });
    <?php
    unset($_SESSION['success']); 
  }
  ////////////////////////////////////////////////////////
  ?>


function confirm_box_pro(txt,apilink,divid) {  
    return Swal.fire({
      title: txt,
      showCancelButton: true,
      confirmButtonText: 'OK',
    }).then((result) => {
      if (result.isConfirmed) {
         //window.location.href = tt;
            console.log(apilink);
            console.log(divid); 


            
            $("#line_"+divid).addClass('highlight');
            ////////////////////////////////////////
                $.get(apilink, function(data){
                        console.log(data);                              
                        if (data.status === 1) {
                            //console.log(divid);
                            $("#line_"+divid).remove();
                        } else{
                            //console.log('000000');
                        }
                        alert_box(data.message);
                });
            ////////////////////////////////////////






      } else if (result.isDenied) {
        return false;
      }
    })     
}
function alert_box(txt) {  
    Swal.fire(txt); 
}

</script>






    <script src="<?=base_url('admin_codebase') ?>/js/bundle.js"></script>

    
<?php
    $url2 = $this->uri->segment(2);
    if($url2=='' || $url2=='index'){
?>

 
    <script src="<?=base_url('admin_codebase') ?>/js/todo-list.js"></script>
     




    <!-- Inject JS -->
    <script src="<?=base_url('admin_codebase') ?>/js/default-assets/mini-event-calendar.min.js"></script>
    <script src="<?=base_url('admin_codebase') ?>/js/default-assets/mini-calendar-active.js"></script>
    <script src="<?=base_url('admin_codebase') ?>/js/default-assets/apexchart.min.js"></script>
    
<?php
    }
?>


 
    <script src="<?=base_url('admin_codebase') ?>/js/settings.js"></script>
    <script src="<?=base_url('admin_codebase') ?>/js/scrool-bar.js"></script>
     
    <script src="<?=base_url('admin_codebase') ?>/js/default-assets/active.js"></script>

 
     
    <script src="<?=base_url('admin_codebase') ?>/js/default-assets/dashboard-active.js"></script>




</body>

</html>