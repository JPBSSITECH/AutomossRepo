<?php
function crud_input($f,$l,$edt='add',$info=array()){
		$ci =& get_instance();
		$ci->load->database();
		///////////////////////////////////////////////            
	            $typ = $f->type; $rd = ''; $mx_ln = ''; $num_chk ='';
	            // $edt = @$this->uri->segment(3);
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
	            if($typ=='text' || $typ=='email'  ||   $typ=='password'  || $typ=='phone' || $typ=='zipcode' || $typ=='number' || $typ=='file'){

	                $inp_extra ='';
	                if($typ=='phone'){
	                   $typ ='text'; 
	                    $inp_extra =' onkeypress="return /[0-9]/i.test(event.key)" minlength="10" maxlength="10"  ';

	                }
	                if($typ=='zipcode'){
	                   $typ ='text'; 
	                    $inp_extra =' onkeypress="return /[0-9]/i.test(event.key)"  minlength="6" maxlength="6"  ';

	                }
	            ?>
	                <input   type="<?=$typ ?>" <?=$rd  ?> <?=$mx_ln  ?> <?=$num_chk ?> <?=$inp_extra ?>
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
	                      if(isset($info->{$f->name}) && $info->{$f->name}!=''){
	                          // $img_url = base_url($f->upld_base_path).$info->{$f->name};
	                          $img_url = $info->{$f->name};
	                          if(@getimagesize($img_url))
	                          {                  
	                            echo '<img src="'.$img_url.'" class="img-thumbnail" alt="avatar">';
	                          } 
	                      }                                                     
	                     ?>
	                    <input type="file" name="<?=$f->name  ?>" <?=(isset($f->required) && $f->required==1)?'required':''  ?>  >
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
	                    $qr = $ci->db->query($f->dataq)->result();
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
	                    class="form-control form-select <?=@$f->class_nm  ?>" style="<?=@$f->style  ?>"  name="<?=$f->name  ?>" id="<?=@$f->id_nm  ?>"
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












?>