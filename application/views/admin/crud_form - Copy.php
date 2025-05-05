<?php  
    $this->load->view('admin/inc/header');
?>


<style type="text/css">
    .form-horizontal .col-sm-6, .form-horizontal .col-sm-4, .form-horizontal .col-sm-3, .form-horizontal .col-sm-2, .form-horizontal .col-sm-12  {
        margin-top: 20px;
    }
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
        padding:  10px 20px !important;
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
                             




<form class="form-horizontal crudform" method="post"   id="mmform"  onsubmit="startprogress()"  enctype="multipart/form-data">
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


                
                <div class="minbox_line" > 
                <div class="row" > 

                <?php
                }
            } 

            if($f->type=='multi'){}else{


        ///////////////////////////////////////////////            
            $typ = $f->type; $rd = ''; $mx_ln = ''; $num_chk ='';
            $edt = @$this->uri->segment(3);
            if($edt=='edit' && isset($f->readonly_edit) && $f->readonly_edit==1 ){
                $rd = 'readonly';
            }elseif(isset($f->readonly) && $f->readonly==1){
                $rd = 'readonly';
            }

            if(isset($f->maxlength) && $f->maxlength>0){
                $mx_ln = ' maxlength="'.$f->maxlength.'" '; 
            }

            if(isset($f->num_chk) && $f->num_chk==1){
                $num_chk = 'onkeypress="return /[0-9]/i.test(event.key)" '; 
            }

            $vl = '';
            if(isset($info->{@$f->name})){
                $vl =$info->{$f->name};
            }else{ 
                if(isset($f->prefil)){
                    if($f->prefil=="rand"){
                        $vl = random_string('alnum', 8);
                    }                    
                } 
            }
        ///////////////////////////////////////////////
    ?>
    <div class="col-sm-<?=$f->col  ?> ">
            
            <?php
            if($typ=='content'){
                if($f->subtyp=='h2'){ 
                    ?>
                        <h2><?=$f->label  ?></h2>
                    <?php
                }else{
                    echo $f->label;
                }
            }else{
                ?>
                    <label><?=$f->label  ?><?=($f->required==1)?'*':''  ?> </label>
                <?php                
            }
            if($typ=='text' || $typ=='email'  ||   $typ=='password'  || $typ=='phone' || $typ=='number' || $typ=='file'){

                $inp_extra ='';
                if($typ=='phone'){
                   $typ ='text'; 
                    $inp_extra =' onkeypress="return /[0-9]/i.test(event.key)" minlength="10" maxlength="10"  ';

                }
            ?>
                <input type="<?=$typ ?>" <?=$rd  ?> <?=$mx_ln  ?> <?=$num_chk ?> <?=$inp_extra ?>
                    class="form-control <?=@$f->class_nm  ?>" style="<?=@$f->style  ?>" name="<?=$f->name  ?>" id="<?=@$f->id_nm  ?>"
                    value="<?=$vl ?>"
                    <?=(isset($f->required) && $f->required==1)?'required':''  ?>                     
                />
            <?php
            }            
            if($typ=='textarea'){
            ?>
                <textarea <?=$rd  ?> 
                    class="form-control <?=@$f->class_nm  ?>" style="<?=@$f->style  ?>" name="<?=$f->name  ?>" id="<?=@$f->id_nm  ?>" 
                    <?=(isset($f->required) && $f->required==1)?'required':''  ?> 
                     ><?=$vl ?></textarea>

             <?php 
             }
             if($typ=='slimcrop'){
                 $ww = (isset($f->db_w) && isset($info->{$f->db_w}))?$info->{$f->db_w}:$f->img_w;
                 $hh = (isset($f->db_h) && isset($info->{$f->db_h}))?$info->{$f->db_h}:$f->img_h;


                 $box_ww = 400;
                 $box_hh = 400;
                 if($ww>400){
                    $fz = round($ww/400);
                    $box_ww = round($ww/$fz);
                    $box_hh = round($hh/$fz);
                 }

                 if(isset($f->box_w)){
                    $box_ww = $f->box_w;
                 }
                 if(isset($f->box_h)){
                    $box_hh = $f->box_h;
                 }

                 

               ?>
               (<?=$ww  ?>X<?=$hh  ?>)
                <div class="slim" style="width:<?=$box_ww  ?>px; height:<?=$box_hh  ?>px; border:2px solid #ccc;"
                     data-meta-user-id="1220"
                     data-ratio="<?=$ww  ?>:<?=$hh  ?>"
                     data-size="<?=$ww  ?>,<?=$hh  ?>"  >

                    <?php
                      if(isset($info->{$f->name})){
                          // $img_url = base_url($f->upld_base_path).$info->{$f->name};
                          $img_url = $info->{$f->name};
                          if(@getimagesize($img_url))
                          {                  
                            echo '<img src="'.$img_url.'" class="img-thumbnail" alt="avatar">';
                          } 
                      }                                                     
                     ?>
                    <input type="file" name="<?=$f->name  ?>" required>
                </div>
            <?php 
            }
            if($typ=='select'){
                $sel_val = (isset($info->{$f->name}))?$info->{$f->name}:'';
                if(isset($f->dataarr)  && $f->dataarr!=''){
                    $data= json_decode($f->dataarr);
                    ${'outp'.$l}='';
                    foreach($data as $k=>$v){
                        $sel = ($sel_val==$k)?'Selected':'';
                        ${'outp'.$l} .='<option '.$sel.' value="'.$k.'">'.$v.'</option> ';
                    }
                }




                if(isset($f->dataq)  && $f->dataq!=''){
                    $qr = $this->db->query($f->dataq)->result();
                    ${'outp'.$l}='';


                    if(isset($f->multi)  && $f->multi==1){
                        if(isset($info->{$f->multi_key_name})){


                            $gg = $info->{$f->multi_key_name};                            
                            $gg_out = [];
                            foreach ($gg as $itmz) {
                                $gg_out[] = $itmz->{$f->single_key_name};
                            } 
                        }                          
                    }
                    foreach($qr as $q){
                        $sel = ($sel_val==$q->k)?'Selected':'';
                        if(isset($f->multi)  && $f->multi==1){
                            if(isset($gg_out) && mycount($gg_out)>0){
                                    if (in_array($q->k, $gg_out))
                                    {
                                        $sel = 'Selected';
                                    }
                            }
                        }
                        ${'outp'.$l} .='<option '.$sel.'  value="'.$q->k.'">'.$q->v.'</option> ';
                    }
                }

                $mlt='';
                if(isset($f->multi)  && $f->multi==1){
                    $mlt='multiple';
                }

                
            ?>
                <select <?=$rd  ?>  <?=$mlt ?>
                    class="form-control <?=@$f->class_nm  ?>" style="<?=@$f->style  ?>"  name="<?=$f->name  ?>" id="<?=@$f->id_nm  ?>"
                    <?=($f->required==1)?'required':''  ?> >
                    <option value="">Select <?=$f->label  ?></option>
                    <?=${'outp'.$l} ?>
                </select>
            <?php
            }
            ?>
    </div>


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
<script>
    $(document).ready(function() {
            $("#mmform").validate();  
            $('.crudseelct2').select2();
            $('form').submit(function() {
                console.log('-------------'); 
                $('#submitButton').prop('disabled', true);
                return true; 
            });       
    });
</script>



 




<script type="text/javascript">
    function add_line(taker,filler) {
        var ppp = "pp_"+Math.floor(100000 + Math.random() * 900000);
        var ttt=  $("#"+taker).html();


        
        var $div = $('<div>').html(ttt);    
        $div.find('.slim').parent().html(`<div style="width:300px; height:300px;"><input type="file" 
                            name="thumb_in[]" id="myCropper_`+ppp+`"/></div>`);
        $div.find('.slim').remove();
        var ttt_out = $div.html();






        var m =`
                <div class="row" id="`+ppp+`">
                    <div class="col-md-11" >
                        `+ttt_out+` 
                    </div>
                    <div class="col-md-1" style="padding-top:0;"> 
                        <span class="btn btn-danger"style="float: left;margin-top: 28px;" 
                        onclick="remove_line('`+ppp+`')"><i class="fa fa-trash" aria-hidden="true"></i></span>
                    </div>
                </div>
        `;

         
         

        $("#"+filler).append(m);
        new Slim(document.getElementById('myCropper_'+ppp),{
            ratio: '1:1',
            minSize: {
                width: 300,
                height: 300,
            }
        });
    }
    function remove_line(vv) {
        $("#"+vv).remove();
    }
    $(document).ready(function() {
        CKEDITOR.replaceClass = 'ckeditor';     
        $(".urlmaker_source").each(function() { 
            var source_id = $(this).attr('id');   
            var dest_id = source_id+'_url_dest';  


            $("#"+source_id).keyup(function(){
                var Text = $(this).val();
                Text = Text.toLowerCase();
                Text = Text.replace('/\s/g','-');
                Text = Text.replace(/ /g,'-');
                Text = Text.replace(/[^\w-]+/g,'');
                Text = Text.replace(/-{2,}/g, '-');
                $("#"+dest_id).val(Text);    
            });
        })
    });
</script>
