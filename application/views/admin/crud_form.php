<?php  
    $this->load->view('admin/inc/header');
?>


<style type="text/css">
    /*.form-horizontal .col-sm-6, .form-horizontal .col-sm-4, .form-horizontal .col-sm-3, .form-horizontal .col-sm-2, .form-horizontal .col-sm-12  {
        margin-top: 20px;
    }*/
    .error{
        color: #f00 !important;
    }
 
    .minbox{
        min-height: 100px; margin-left: 10px; margin-right: 30px;
        margin-top: 20px; margin-bottom: 10px; border: 1px dashed #ccc;
        padding: 20px 30px;
    }
    .minbox_line{
        border: 1px dashed orange; display:block; overflow:hidden; clear:both; padding-bottom:10px; margin-bottom: 10px;
        padding:  10px 20px !important; min-height: 90px;
    }
    .crudform h2{
        margin-top: 30px; margin-bottom: 0; 
        padding-left: 20px; border-left: 8px solid #f00;
        background: #f2f2f2; padding-top: 15px; padding-bottom: 10px;
    }

    .select2-results__option{
        cursor: pointer;
    }
    .select2-results__option[aria-selected="true"]{
        background: #ccc; color: #f2f2f2;
    }
    .select2-selection__choice{
        color: #504141 !important;
    }
     
</style>
<link href="<?=base_url()  ?>/slimcrop/slim/slim.min.css" rel="stylesheet">
<script src="<?=base_url()  ?>/slimcrop/slim/slim.kickstart.min.js"></script>
<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>    

 
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



<div class="page-content">
    <div class="container-fluid">

        
 


        <div class="row" style="margin-bottom: 20px;">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body" style="padding: 8px 12px;">
                        <a href="<?=base_url($basics->pg_baseurl) ?>" class="btn btn-danger" style="float:right;">Back</a>
                        <h4 style="padding-top:10px; margin-bottom:5px;" class="card-title"><?=$f_typ  ?>  <?=@$basics->formtitle  ?></h4>
                        <p><?=@$basics->formsubtitle ?></p>     
                    </div>
                </div>
            </div>
        </div>



 




        <div class="row" >

            <div class="col-xl-12">
                <div class="card"style="padding: 10px 12px;">
                    <div class="card-body" > 
                        <div class="row">
                             


<!-- onsubmit="startprogress()"  -->

<form class="form-horizontal crudform" method="post"   id="mmform"   enctype="multipart/form-data">
    <div class="form-group row margin-bottom">           
                                            
    <?php
    $l=0;
    foreach($frm as $f){

        if(isset($f->hide_in_edit)&&$f->hide_in_edit==1 && $this->uri->segment(3)=='edit'){
            continue;
        }
        if(isset($f->hide_in_add)&&$f->hide_in_add==1 && $this->uri->segment(3)=='add'){
            continue;
        }


        //////////START OF MULTI-----
            if($f->type=='multi'){
                if(isset($f->mark) && $f->mark=='start'){
                ?>
                <div style="clear: both; width: 100%; height:10px; "></div>
                <div class="row minbox"   > 
                <!-- taker STARTS here -->
                <div id="taker_<?=$f->mark_id ?>" > 


                    <?php 
                    if(isset($f->multi)  && $f->multi==1){
                        if(isset($info->{$f->multi_key_name})   && mycount($info->{$f->multi_key_name})>0 ){


                            $gg = $info->{$f->multi_key_name};
                            foreach ($gg as $itmz) {
                                 ?>

                                    <!-- <div class="minbox_line" > 
                                    <div class="row" >   
                                            <input type="text" name="gg">
                                             

                                    </div>
                                    </div> -->

                                 <?php
                            } 
                        }else{
                             
                        }                          
                    }
                ?>



                

                    <div class="minbox_line" > <!-- minbox_line  STARTS   --> 
                    <div class="row" >  <!-- ROW STARTS   -->



               


                 

                <?php
                }
            } 

            if($f->type=='multi'){}else{


        $edt= $this->uri->segment(3);
        $d_info = (isset($info))?$info:array();
        crud_input($f,$l,$edt,$d_info);   
        ?>
     
     
<?php

          }
    if($f->type=='multi'){
        if(isset($f->mark) && $f->mark=='end'){
        ?>  


           </div> <!-- ROW ENDS   -->
           </div>  <!-- minbox_line  ENDS   --> 


           </div>  <!-- taker ends here -->
            <div style="clear: both; width: 100%; height:1px;"></div>
            <div class="filler" id="filler_<?=$f->mark_id ?>" > </div>

            <div style="clear: both; width: 100%; height:10px;"></div>
            <div class="col-md-2">
                <span onclick="add_line('taker_<?=$f->mark_id ?>','filler_<?=$f->mark_id ?>')" class="btn btn-warning"><i class="fa fa-plus-circle" aria-hidden="true"></i> ADD</span>
            </div>


        </div>
        <div style="clear: both; width: 100%; height:10px;"></div>
        <?php
        }         
    }
    /////END OF MULTI-----





$l++;
}
?>

    </div>



                                        
    <div class="form-group row ">
        <div class="col-sm-12 " style="margin-top:10px;">
        <button type="submit" id="submitButton" class="btn btn-danger w-md"> <?=$f_typ  ?></button>
        </div>
    </div>
                                    
                                    
</form>
 



</div>
</div>
</div>
</div>
</div><!-- end row -->
</div> <!-- container-fluid -->
</div>
               
<?php  
     $this->load->view('admin/inc/footer');
?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>    
<script src="<?=base_url() ?>crudjs.js?v=<?=rand() ?>"></script> 