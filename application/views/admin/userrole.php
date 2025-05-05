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
                            <a href="<?=base_url('admin/staffrole') ?>" class="btn btn-danger" style="float:right;">Back</a>
                           <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title"><?=$heading ?></h4>
                    </div>
                </div>
            </div>
        </div>


        

            


        <form class="form mt-4" method="post" id="myForm" >
                                <input type="hidden" name="role_id" value="<?=$res->id ?>">
                                <button class="btn btn-danger mb-2" style="margin-right: 15px;">Submit</button>



                                <div class="box-body">
                                    <div class="table-responsive">
                                      <table class="table table-hover">
                                        <tr>
                                          <?php
                                          foreach($project_group as $hr){ 
                                            ?>
                                            <th class="fw-bold" scope="col"><?=$hr->group_name ?></th>
                                            <th class="fw-bold" colspan="3">PERMISSION</th>
                                          </tr>

                                          <?php
                                         
                                          

                                          $pp = array_search_multidim($project,'group_name',$hr->group_name);
                                          foreach($pp as $pr){ 
                                               

                                              if(mycount($myrolez)>0){
                                                //print_result($myrolez);
                                                //echo $pr->id;
                                                $ddt = array_search_multidim($myrolez,'module_id',$pr->id,'S');
                                                //exit;
                                              } else{
                                                    $ddt = array();
                                              }
                                            
                                              //print_result($ddt);

                                            ?>
                                            <tr>
                                              <td>
                                                <div class="demo-checkbox">
                                                  <input class="form-check-input" type="checkbox" 
                                                  <?=(mycount($ddt)>0)?'checked':'' ?>
                                                  id="project_<?=$pr->id ?>" 
                                                  name="<?=$pr->id ?>_module_name" >
                                                  <label for="project_<?=$pr->id ?>"><?=$pr->module_name ?></label>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="demo-checkbox">
                                                  <input class="form-check-input" type="checkbox" id="mproject_<?=$pr->id ?>" 
                                                  <?=(mycount($ddt)>0 && $ddt->add==1)?'checked':'' ?>
                                                  name="<?=$pr->id ?>_isadd" >
                                                  <label for="mproject_<?=$pr->id ?>">Add</label>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="demo-checkbox">
                                                  <input class="form-check-input" type="checkbox" name="<?=$pr->id ?>_isedit"
                                                  <?=(mycount($ddt)>0 && $ddt->edit==1)?'checked':'' ?>
                                                  id="nproject_<?=$pr->id ?>" >
                                                  <label for="nproject_<?=$pr->id ?>">Edit</label>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="demo-checkbox">
                                                  <input class="form-check-input" type="checkbox" name="<?=$pr->id ?>_isdel" 
                                                  <?=(mycount($ddt)>0 && $ddt->remove==1)?'checked':'' ?>
                                                  id="oproject<?=$pr->id ?>" >
                                                  <label for="oproject<?=$pr->id ?>">Remove</label>
                                                </div>
                                              </td> 
                                            </tr>
                                            <?php
                                          }
                                        }
                                        ?>

                                      </table>
                                    </div>
                                      <!-- <div class="col-md-12" style="margin-bottom:10px; margin-left: 10px;">
                                        <button class="btn btn-primary">Submit</button>
                                      </div> -->
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