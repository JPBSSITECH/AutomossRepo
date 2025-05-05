<?php
class Myapi_Controller extends REST_Controller { 
	
	protected $jwt_key='jj_zx23r5Tyhb89io!e4rt';
	protected $jwt_issuer='udyog_app';
	protected $jwt_audience_claim='udyog_app_user';
	
	function __construct() {
		parent::__construct();

		$this->reqst = (object) array();
		$this->rawdata = json_decode(file_get_contents('php://input'), true);		
	}

	public function xss_cleaner($arr,$data=null){
		$outx = array();

		if($data==null){
			foreach ($arr as $kv) {
				if(isset($_POST[$kv])){
					$outx[$kv]= $tt = $this->security->xss_clean($this->input->post($kv));
				}
			}
		}else{
			foreach ($arr as $kv) {
				if(isset($data[$kv])){
					$outx[$kv]= $tt = $this->security->xss_clean($data[$kv]);
				}
			}
		}

		

		 
		return $outx;
	}

	public function check_auth(){
		$headers = getallheaders();
        $tok = @$headers['Authorization'];
        if(isset($tok)){
            
	        if (str_contains($tok, 'Bearer ')) { 
				$tok =  substr($tok, 7);  // remove "Bearer "...
			}
            $rr = $this->jwt->decode($tok, $this->jwt_key);

             return $tok_data = $rr->data;
        } else{
        	$out['status']=0;
            $out['message']="Token Authorization Failed";
            $res = REST_Controller::HTTP_NOT_FOUND;
            $this->response($out, $res);   
        }
	}






	/*////////////////////////////////////
	////////EXTRA CODE --
	//////////////////////////////////////*/

	public function mainGet($req){

			$in_arr =array('limit', 'offset', 'search','columns');
			/////columns--> get only the list of columns specified | text | comma separated.
            $input = $this->xss_cleaner($in_arr,$this->rawdata);
            extract($input); 
			$eq =""; $limit_q="";

					/*////////////////////////////////
	                    ///// LIMIT OFFSET STARTs  */                            
	                            if(isset($limit) && $limit>0){
	                                $limit_q .= ' LIMIT '.$limit;
	                                if(isset($offset) && $offset>0){
	                                    $limit_q .= '  OFFSET '.$offset;
	                                }
	                            }else{
	                                $limit_q .= ' LIMIT 100';
	                            }
	                    /*///// LIMIT OFFSET ENDS  
                    ///////////////////////////////////*/
                    /*////////////////////////////////
                    	///// SEARCH STARTs  */
                            $eq='';  
                            if(isset($req->id)  && $req->id>0){
                                $eq .=' AND id= '.$req->id;
                            } 
                            if(isset($search) && isset($req->search_by) && $search!="" && $req->search_by!=""){                            
    	                            $sq ='';
    	                            foreach ($req->search_by as $sb) {
    	                               $sq .= $sb .'  like "%'.$search.'%" OR ';  
    	                            } 	                            
    	                            $sq = rtrim($sq,'OR '); 	                            
                                $eq .=' AND (  '.$sq.'  )';                             
                            } 

                            if(isset($req->where_arr)  && mycount($req->where_arr)>0){
                               $whr = $req->where_arr;
                                foreach ($whr as $kw => $vw) {
                                    $eq .=' AND '.$kw.'= "'.$vw.'" ';
                                }
                            }                        
                    	///// SEARCH ENDS  */
                    /*////////////////////////////////*/


                    $colm = '*';
                    if(isset($req->clmn)  && $req->clmn!="" ){                                              
                        $colm = implode(', ',$req->clmn);
                        if(isset($columns) && $columns!=""){
                        	$clll = explode(',',$columns);
                        	$zzz = array_intersect($req->clmn, $clll);
                        	$colm = implode(', ',$zzz);  
                        }
                    }

                    $sub_q = ' '; 
                    if(isset($req->sub_qry)  && $req->sub_qry!="" ){                                              
                        $sub_q = ' '.$req->sub_qry; 
                    }


            $mq = 'SELECT '.$colm.' '.$sub_q.'  from '.$req->db_name.'  WHERE  1   '; 
            // echo $mq.$eq.' ORDER BY name asc '.$limit_q;  exit;   

                               
            $info = $this->db->query($mq.$eq.' ORDER BY '.$req->db_primarykey.' DESC '.$limit_q)->result();             
            $info_c = $this->db->query('SELECT count(*) as num  from '.$req->db_name.' WHERE 1 '.$eq)->row();
            $all_count = $info_c->num;
                        
                        
                    /*///// SEARCH ENDS  
                    ///////////////////////////////////*/
                        if(isset($limit) &&  $limit>0){
                            $pg = ceil($all_count/$limit);
                            if(isset($offset) &&  $offset>0){
                                $curpg = ceil($offset/$limit);
                                if($offset%$limit==0){
                                    $curpg = $curpg+1;
                                }
                            }else{
                                $curpg = 1; 
                            }
                        }else{
                            $pg=1;
                            $curpg = 1;
                        }               
                


                
                if(isset($req->multi_arr_srch) ){

                    // print_result($req->multi_arr_srch);  


                    $outz = array(); $oo=0;
                    foreach ($info as $vv) {
                        $outz[$oo] = $vv;
                        foreach ($req->multi_arr_srch as $v_ar) {
                            // print_result();  exit;
                            $d_nm = $v_ar[0];
                            $d_arrr = $v_ar[1];
                            $d_key = $v_ar[2];
                            $d_key_v = $v_ar[3];
                            $outz[$oo]->$d_nm =  array_search_multidim($d_arrr, $d_key, $vv->$d_key_v);
                        }
                        $oo++;
                    }
                    
                } else{
                     $outz = $info;
                }


                
                if(mycount($outz) > 0){
                      $out['status']=1;
                      $out['message']="Data found";
                      $out['data_count']=$all_count;
                      $out['page_count']=$pg;
                      $out['current_page']=$curpg;
                      $out['data']= $outz;                      
                      if(isset($req->id)  && $req->id>0){
                        $out['data']= $outz[0];
                      } 


                     
                    if(isset($req->top_arr)  && mycount($req->top_arr)>0){
                        $out = array_merge($req->top_arr,$out);    
                    }






                      $res = REST_Controller::HTTP_OK;
                }else{
                      $out['status']=0;
                      $out['message']="No Data found";
                      $res = REST_Controller::HTTP_NOT_FOUND;
                }                
                $this->response($out, $res);        
        }
    public function mainDelete($req){
            $id = $this->security->xss_clean($req->id);
            if($id>0){
                $info = $this->db->query('SELECT '.$req->db_primarykey.'  from '.$req->db_name.'  
                							WHERE  '.$req->db_primarykey.'='.$id)->result();

               

                if(mycount($info) > 0){
                    $del = $this->db->query('DELETE from '.$req->db_name.'  WHERE  '.$req->db_primarykey.'='.$id);
                    
                    if($del==1){
                        $out['status']=1;
                        $out['message']="Data deleted successfully";
                        $res = REST_Controller::HTTP_OK;
                    }else{
                        $out['status']=0;
                        $out['message']="Failed to perform the task";
                        $res = REST_Controller::HTTP_INTERNAL_SERVER_ERROR;
                    }
                }else{
                      $out['status']=0;
                      $out['message']="No Data found";
                      $res = REST_Controller::HTTP_NOT_FOUND;
                }
            }else{
                $out['status']=0;
                $out['message']="Provide proper input";
                $res = REST_Controller::HTTP_NOT_FOUND;
            }
            $this->response($out, $res);     
        }
    
    public function mainAdd($req){
            $allinput = $input = $this->xss_cleaner($req->in_arr,$this->rawdata);
            extract($input);            
            $chk = empty_chk($input,$req->req_arr);            
            
            if($chk==0){
                    if(isset($req->child_tbl_info)  && mycount($req->child_tbl_info)>0){
                        $chz = $req->child_tbl_info;

                        foreach ($chz as $ch) {
                            $ch_col = $ch->columns;
                            foreach ($ch_col as $chk) {
                                unset($input[$chk]);
                            }
                        }
                        
                        //print_result($input);
                        //exit;
                    }
                    if(isset($req->addon_input)  && mycount($req->addon_input)>0){
                            $adon = $req->addon_input;
                            foreach ($adon as $kw => $vw) {
                                 $input[$kw] = $vw;
                            }
                    }
                    $err_chk_count= 0; $msg_arr=array();
                    if(isset($req->unique_check)){                        
                        $rxt='';
                        foreach ($req->unique_check as $uc) {
                            $vr = ${$uc};
                            $rxt .=' AND '.$uc.'= "'.$vr.'" ';  
                        }
                        $qqx = 'select * from '.$req->db_name.'  where    1'.$rxt;
                        $qqx_res = $this->db->query($qqx)->result();

                        if(mycount($qqx_res)>0){
                            $err_chk_count++;
                            array_push($msg_arr, 'Cant Take Duplicate record for: '.implode(', ',$req->unique_check));
                        }
                    }

                    if($err_chk_count==0){
                            $in = $this->db->insert($req->db_name,$input);
                            $insert_id = $this->db->insert_id();
                        /////////////////CHILD DATA INSERTS===========================                             
                            if(isset($req->child_tbl_info)  && mycount($req->child_tbl_info)>0){
                                $chz = $req->child_tbl_info;

                               
                                foreach ($chz as $ch) {

                                   
                                    $ch_col = $ch->columns;  
                                    $ch_col_init =$ch_col[0];
                                     
                                    if(isset($$ch_col_init)){
                                        $ch_col_init_vl = $$ch_col_init;
                                        $ch_tbl_data = array(); $c = 0;
                                        foreach ($ch_col_init_vl as $cv) {
                                             $ch_tbl_data[$c][$ch->foreign_key]= $insert_id;
                                             //$ch_tbl_data[$c][$ch_col_init]= $cv;
                                            foreach ($ch_col as $chk) {
                                                $ch_tbl_data[$c][$chk]= $$chk[$c];
                                            }
                                            $c++;
                                        }

                                        // print_result($ch_tbl_data);
                                        // echo $ch->table;
                                        // exit;
                                        if(mycount($ch_tbl_data)>0){
                                            $inx = $this->db->insert_batch($ch->table,$ch_tbl_data);
                                        }
                                        
                                    }
                                                                       
                                }
                            }
                        /////////////////CHILD DATA INSERTS===========================
                            if($in>0){
                                $out['status']=1;
                                $out['message']="Data inserted successfully";
                                $out['last_id']=$insert_id;
                            }else{
                                $out['status']=0;
                                $out['message']="Failed to perform the task";
                            }
                    }else{
                        $out['status']=0;
                        $out['message']="Error: ".implode(', ',$msg_arr);
                    }
                    
            }else{
                    $out['status']=0;
                    $out['message']="Provide all required inputs.";
            }
            $this->response($out, REST_Controller::HTTP_OK);     
        }
    
 
    public function mainEdit($req){
            $id = $this->security->xss_clean($req->id);
            $input = $this->xss_cleaner($req->in_arr,$this->rawdata);
            extract($input);
            $chk = empty_chk($input,$req->req_arr);
                    
                if($id>0){
                    if($chk==0){

                            if(isset($req->child_tbl_info)  && mycount($req->child_tbl_info)>0){
                                $chz = $req->child_tbl_info;
                                foreach ($chz as $ch) {
                                    $ch_col = $ch->columns;
                                    foreach ($ch_col as $chk) {
                                        unset($input[$chk]);
                                    }
                                }
                            }

                            $in = $this->db->update($req->db_name,$input,array($req->db_primarykey=>$id));        
                            if($in==1){
                                /////////////////CHILD DATA DELETE THEN INSERTS===========================                                     
                                    if(isset($req->child_tbl_info)  &&   mycount($req->child_tbl_info)>0){
                                        $chz = $req->child_tbl_info;   
                                        //print_result($chz);  exit;                                    
                                        foreach ($chz as $ch) {

                                            $ch_col = $ch->columns; 
                                            $ch_col_init =$ch_col[0];
                                            if(isset($$ch_col_init)){
                                                $ch_col_init_vl = $$ch_col_init;
                                                $ch_tbl_data = array(); $c = 0;
                                                foreach ($ch_col_init_vl as $cv) {
                                                     $ch_tbl_data[$c][$ch->foreign_key]= $id;
                                                    foreach ($ch_col as $chk) {
                                                        $ch_tbl_data[$c][$chk]= $$chk[$c];
                                                    }
                                                    $c++;
                                                }

                                               

                                                if(mycount($ch_tbl_data)>0){
                                                    $delq = 'DELETE FROM '.$ch->table.' WHERE '.$ch->foreign_key.'='.$id;
                                                    $qry_del = $this->db->query($delq);
                                                    $inx = $this->db->insert_batch($ch->table,$ch_tbl_data);
                                                }
                                                
                                            }
                                        }
                                        
                                        // print_result($input);
                                        //exit;
                                    }
                                /////////////////CHILD DATA DELETE THEN INSERTS===========================
                                $out['status']=1;
                                $out['message']="Data updated successfully.";
                                $res = REST_Controller::HTTP_OK;
                            }else{
                                $out['status']=0;
                                $out['message']="Failed to perform the task";
                                $res = REST_Controller::HTTP_INTERNAL_SERVER_ERROR;
                            }
                      }else{
                            $out['status']=0;
                            $out['message']="Provide all required inputs in valid format";
                            $res = REST_Controller::HTTP_NOT_FOUND;
                      }

                }else{
                }
            $this->response($out, REST_Controller::HTTP_OK);     
        }


	/*////////////////////////////////////
	////////EXTRA CODE ENDS --
	//////////////////////////////////////*/


 

	
	


	
}
?>