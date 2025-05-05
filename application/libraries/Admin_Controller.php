<?php

class Admin_Controller extends MY_Controller {
	
	
	function __construct() {
		parent::__construct();
		$this->load->model('User_m');
		$exception_url=array("backend/login","backend","backend/register","backend/forget_password","backend/reset_password","backend/fpass_thanks");
		
		$this->data['limit']  = $this->limit = 20;




		$sess = $_SESSION;
		if( isset($sess['loggedin']) && $sess['loggedin'] == 1 ){
			$typ = $_SESSION['user_type'];
			
			$rrx = curl_post_token(api_link.'auth/userinfo');
			$this->data['user_info']= $this->user_info = $user_info= 	@$rrx->data;

			if($typ=='Admin' && $this->uri->segment(1) !='admin'){
				redirect(base_url("admin/index"));
			}
			if($typ=='Staff' && $this->uri->segment(1) !='admin'){
				redirect(base_url("admin/index"));
			}
			if($typ=='Customer' && $this->uri->segment(1) !='customer'){
				redirect(base_url("customer/index"));
			}
			if($typ=='Mechanic' && $this->uri->segment(1) !='mechanic'){
				redirect(base_url("mechanic/index"));
			}
		}
		else{
			if((in_array(uri_string(),$exception_url) == FALSE)   && $this->uri->segment(1) =='customer'  ){
				redirect(base_url('login'), "refresh");
			}
			elseif((in_array(uri_string(),$exception_url) == FALSE)   && $this->uri->segment(1) =='mechanic'  ){
				redirect(base_url('mechlogin'), "refresh");
			}

			elseif((in_array(uri_string(),$exception_url) == FALSE) ){
				redirect(base_url(), "refresh");
			}				
		} 










		$uz3 = $this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3);
		$alluser_url = array("admin/leave/applyleave","admin/leave/leavelist","admin/logout/");


		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==1){
			

			$this->data['myinfo']  = $this->myinfo = (object) $_SESSION;
			if($this->myinfo->user_type=='Admin'){
				$this->data['_addable'] =$_addable =9;
				$this->data['_editable'] =$_editable =9;
				$this->data['_removable'] =$_removable =9;	
			}elseif((in_array($uz3,$alluser_url) == TRUE) ){
				$this->data['_addable'] =$_addable =9;
				$this->data['_editable'] =$_editable =9;
				$this->data['_removable'] =$_removable =9;
				$this->data['sidebar_info']= $this->sidebar_info = $sidebar_info = curl_get_token(api_link.'master/Projectmodules/usermodule');
			}
			else{
				 
				$u_typ = $_SESSION['user_type'];
				$u_roll_id = $this->myinfo->user_role_id; 


							 
				$u1 = $this->uri->segment(1);
				$u2 = $this->uri->segment(2);
				$u3 = $this->uri->segment(3);
				if($u1=='admin' ){
					if($u2!=''){
						$q3x = 'SELECT * FROM staffrole_to_modules where 
							role_id = '.$u_roll_id.' AND 
							module_id in
							(SELECT id FROM `project_modules`  where controller = "'.$u1.'" and 
							(method= "'.$u2.'"  OR method_a= "'.$u2.'"   OR method_b= "'.$u2.'"  OR method_c= "'.$u2.'"  ) )';


						$vld = $this->db->query($q3x)->row();
						$lnkz = $this->db->query('SELECT * FROM `project_modules`  
													where controller = "'.$u2.'" and 
																(   method= "'.$u3.'"  
																	OR method_a= "'.$u3.'"   
																	OR method_b= "'.$u3.'"  
																	OR method_c= "'.$u3.'"  ) 
															    ')->row();

						if(mycount($vld)>0){
							$this->data['_addable'] =$_addable = $vld->add;
							$this->data['_editable'] =$_editable = $vld->edit;
							$this->data['_removable'] =$_removable = $vld->remove;
							 
							if($_addable==0 && $u3==$lnkz->method_a){
								echo 'UnAuthorised.'; exit;
							}
							if($_editable==0 && $u3==$lnkz->method_b){
								echo 'UnAuthorised.'; exit;
							}
							if($_removable==0 && isset($_GET['delid'])){
								echo 'UnAuthorised.'; exit;
							}
						}else{
							echo 'UnAuthorised.'; exit;
						}
					}
				}

				$this->data['sidebar_info']= $this->sidebar_info = $sidebar_info = curl_get_token(api_link.'master/Projectmodules/usermodule');
				 
			}
			//print_result( $this->myinfo); exit; 
		}









































		
		// if(($this->User_m->isLoggedin() == FALSE))
		// {
		// 	if((in_array(uri_string(),$exception_url) == FALSE) ){
		// 		redirect(base_url("backend"), "refresh");
		// 	}
				
		// }
		
	    // $typ =$this->session->userdata('user_typ');
		// if($typ=='Admin' && $this->uri->segment(1) !='admin'){
		// 	redirect(base_url("admin/index"));
		// }


		// if($typ=='Vendor' && $this->uri->segment(1) !='member'){
		// 	redirect(base_url("member/index"));
		// }


		
			
	}















///////////////////////////////////////////////////	
		public function crudmaker($file,$typ=''){
			if($typ=='' || $typ==NULL){
				$this->u_list($file);
			} 
			if($typ=='add'){
				$this->add_it($file);
			}
			if($typ=='edit'){
				$id = $this->uri->segment(4); 
				$this->edit_it($id,$file);
			} 
		}	


		public function u_list($file,$passer=''){
		  $u =$file;
		  $v = readxml($u); 
		  // print_result($v); exit;
		  // print_result($_SESSION); 



		  $this->data['basics'] = $basics =  $v['basics'];
		  $back_link=base_url($basics->pg_baseurl);
		  if($_POST){
		      $vv = $_POST[$basics->pageslug.'_qry'];
		      $this->session->set_userdata($basics->pageslug.'_qry',$vv);

		      // $vv_dt = $_POST[$basics->pageslug.'_daterange'];
		      // $this->session->set_userdata($basics->pageslug.'_daterange',$vv_dt);


		      redirect($back_link);
		  }
		  if(isset($_GET['reset'])){
				unset($_SESSION[$basics->pageslug.'_qry']);				
				unset($_SESSION[$basics->pageslug.'_daterange']); 				
				redirect($back_link);	 
		  }

		if(isset($_GET['export'])){
			 
				$rrall = curl_post_token(api_link.$basics->api_path.'/list/export'); //_token
				// print_result($rrall->data); exit;
	   			$fn =  $this->exportcsvdata($rrall->data,$basics->formtitle.'_export');
		}




		  if(isset($_GET['delid'])){
				$deldata = $_GET['delid'];
				$did = urldecode($deldata);
				$did = spl_decode($did);
				$res1 = curl_del_token(api_link.$basics->api_path.'/delete/'.$did);
				if($res1->status==1){
					$this->session->set_flashdata('success',$res1->message);				
					redirect($back_link);
				}else{
					$this->session->set_flashdata('error',$res1->message);
					redirect($back_link);
				}			 
			}


			if(isset($_GET['getdata'])){
					/*////////////--------------------------------*/
					$dd['limit'] = $this->limit;
					if(isset($_GET['offset'])){
						$off = $_GET['offset'];
						$dd['offset'] = ($off-1)*$this->limit;
					}
					/*////////////--------------------------------*/
					if(isset($_GET['search']) && $_GET['search']!=''){					 
						$dd['search'] =  urldecode($_GET['search']);
					}
					if(isset($_GET['min_date']) && $_GET['min_date']!=''){					 
						$dd['min_date'] =  urldecode($_GET['min_date']);
					}
					if(isset($_GET['max_date']) && $_GET['max_date']!=''){					 
						$dd['max_date'] =  urldecode($_GET['max_date']);
					}


					//print_result($dd);
	 				$rx = curl_post_token(api_link.$basics->api_path.'/list',$dd); //_token

	 				 		
					$out = array(); $o=0;
					if(isset($rx->data)){
		 				foreach ($rx->data as $k => $v) {
		 					$out[$o] = convertNullToBlank($v);
		 					$out[$o]->spl_encode = spl_encode($v->id);
		 					$o++;
		 				}
	 				}

	 				$rx->data = (object) $out;  /*///NEW-----*/
					header('Content-Type: application/json; charset=utf-8');
					echo json_encode($rx);  /*///NEW-----*/
					exit;
			}
			if(isset($_GET['prodelid'])){
				$deldata = $_GET['prodelid'];
				$did = urldecode($deldata);
				$did = spl_decode($did);
				$res = curl_del_token(api_link.$basics->api_path.'/delete/'.$did);

				header('Content-Type: application/json; charset=utf-8');
				echo json_encode($res);  
				exit;		 
			}

		    
		  ///////////////////////////////////

		  		 

		  		$dd = $v['list_element'];
		        $this->data['list_attr'] = $list_attr = $v['list_attr'];
		        $m ='';
		        foreach($dd as $d){
		          if(isset($d->qry_exclude)  &&  $d->qry_exclude=='Y'){
		          }else{
		            $m .=$d->db_nm.',';
		          }         
		        }
		        $m = rtrim($m,',');

		        $this->data['lst'] = $dd;
		        $this->data['frm'] = @$v['form_element'];	        
		        $this->data['basics'] = $basics;
		  		$this->data['list_actions'] = @$v['list_actions'];

		        
		        $this->data['basics_primary'] = $basics_primary =  $basics->primary;
		        $this->data['addbtn'] = $addbtn =  $basics->addbtn;







			    $dd = array();
				$this->load->library('pagination');
				$offset=0;
				if(isset($_GET['pgs']) && $_GET['pgs']>0 ){
					$offset=$_GET['pgs'];
				}
				$dd['limit'] = $limit =  (isset($basics->perpg_limit))?$basics->perpg_limit:10;
				$this->data['offset'] =$dd['offset'] =  $offset;  




			    $srch_sess = @$_SESSION[$basics->pageslug.'_qry'];
			    if(isset($srch_sess) && $srch_sess!='' ){
				    $dd['search'] =  $srch_sess;   
			    }

			    // print_result($dd); 
				$aa= curl_get(api_link.$basics->api_path,$dd);
				 
				$this->data['res'] = $res = valid_array(@$aa->data);  
			    

	 

		    //////////////////////////////////////////////////////////
			    $config['base_url'] = $back_link;
		        $config['total_rows'] = @$aa->data_count;
		        $config['per_page'] = $limit;
		        $config['enable_query_strings'] = TRUE;
		        $config['page_query_string'] = TRUE;
		        $config['query_string_segment'] = 'pgs';
		        $config['full_tag_open'] = "<ul class='pagination pagination-sm'>";
		        $config['full_tag_close'] ="</ul>";
		        $config['num_tag_open'] = '<li>';
		        $config['num_tag_close'] = '</li>';
		        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		        $config['next_tag_open'] = "<li>";
		        $config['next_tagl_close'] = "</li>";
		        $config['prev_tag_open'] = "<li>";
		        $config['prev_tagl_close'] = "</li>";
		        $config['first_tag_open'] = "<li>";
		        $config['first_tagl_close'] = "</li>";
		        $config['last_tag_open'] = "<li>";
		        $config['last_tagl_close'] = "</li>";
		        $this->pagination->initialize($config);
		    ///////////////////////////////////////////////////////////
		    
 

		  $this->load->view('admin/crud_table',$this->data);
		} 
		 

		public function add_it($file){
			$this->data['f_typ'] ='Add';
			///////////////////////////////////
			$u =$file;
			$v = readxml($u);
			$this->data['frm'] = $frm= $v['form_element'];
			$this->data['basics'] = $basics =  $v['basics'];
			///////////////////////////////////




			if($_POST){
	   			$p = $_POST;



		        unset($p['slim']); 
		        foreach($frm as $f){
		            $typ = @$f->type;
		            $treat = @$f->treat;
			        $treat_typ = @$f->treat_typ;

		            if($typ=='slimcrop_x'){
		                unset($p[$f->name]);
		                $th = Slim::getImages($f->name);
		                $name_th = $th[0]['input']['name']; 
		                $data_th = $th[0]['output']['data'];
		                $file_th = Slim::saveFile($data_th, $name_th, $f->upld_base_path);
		                $p[$f->name] =$file_th['name'];
		            }
		            if($typ=='slimcrop'){
			        	if (str_contains($f->name, '[]')) {
							$rb = str_replace('[]', '', $f->name);
							unset($p[$rb]);
							$thz = Slim::getImages($rb);
							$t=0;
							foreach ($thz as $tha) {
								////**********
									$name_th =str_replace(' ', '',$tha['input']['name']);
									$nm_ext = explode('.', $name_th);
									$extension = end($nm_ext);				
									$namex = rand(1000,9999).'.'.$extension;
								////**********

								$data_th = $tha['output']['data'];
					            $file_th = Slim::saveFile($data_th, $namex, $f->upld_base_path);
					            $webp = make_webp('/'.$f->upld_base_path,$file_th['name']);

								$p[$rb][$t] =base_url().$f->upld_base_path.$webp;

								$t++;	
							}
						}else{
							unset($p[$f->name]);
				            $th = Slim::getImages($f->name);
				            if(isset($th[0]['input']['name'])){
					            ////**********
									$name_th =str_replace(' ', '',$th[0]['input']['name']);
									$nm_ext = explode('.', $name_th);
									$extension = end($nm_ext);				
									$namex = rand(1000,9999).'.'.$extension;
								////**********

					            $data_th = $th[0]['output']['data'];
					            $file_th = Slim::saveFile($data_th, $namex, $f->upld_base_path);

					            $webp = make_webp('/'.$f->upld_base_path,$file_th['name']);
					            $p[$f->name] =base_url().$f->upld_base_path.$webp;
				            }
						}
			        }

		            if($typ=='file'){
		            	$target_dir = "uploads/";
						$target_file = $target_dir . basename($_FILES[$f->name]["name"]);
						$uploadOk = 1;
						$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

						if (move_uploaded_file($_FILES[$f->name]["tmp_name"], $target_file)) {
						    $p[$f->name] = $iimgg = base_url().$target_file; 
						    //$p['cdn_'.$f->name] = $df = cdn_img_maker($iimgg);
					  	}	                 
		            }

			        if(isset($treat) && $treat==1){
			        	if(isset($treat_typ) && $treat_typ=='md5'){
			        		$p[$f->name] = md5($p[$f->name]);
			        	}
			        	if(isset($treat_typ) && $treat_typ=='rand'){
			        		$p[$f->name] = random_string('alnum', 8);
			        	}
			        	if(isset($treat_typ) && $treat_typ=='predefined'){
			        		$p[$f->name] = $f->predefined_value; 
			        	}
			        }
		        }
		        // print_result($p);  
		        // // echo api_link.$basics->api_path.'/add/';
		        // // echo '<br>';
		        // echo json_encode($p); 

		        // exit; 

	        	 
	   			 
				$res=curl_post_token(api_link.$basics->api_path.'/add/',$p);

				// print_result($res);  exit;



				$back_link=base_url($basics->pg_baseurl);
				 
				if($res->status==1){
					$this->session->set_flashdata('success',$res->message);				
					redirect($back_link);
					//redirect($_SERVER['HTTP_REFERER']);
				}else{
					$this->session->set_flashdata('error',$res->message);
					//redirect($back_link);
					redirect($_SERVER['HTTP_REFERER']);
				}			 
			}





			$this->load->view('admin/crud_form',$this->data);
		}
		public function edit_it($id,$file){
			$this->data['f_typ'] ='Update';
			///////////////////////////////////
			$u =$file;
			$v = readxml($u);
			$this->data['frm'] =  $frm= $v['form_element'];
			$this->data['basics'] = $basics =  $v['basics'];
			$back_link=base_url($basics->pg_baseurl);
		  	///////////////////////////////////
		  	// $vq = 'SELECT * FROM '.$basics->table.' 
		    //       where  '.$basics->primary.' = "'.$id.'"  ';
		  	// $this->data['info'] = $info = $this->db->query($vq)->row();

			//echo $id; 
		  	if ($id=="") {
				redirect($back_link);
			}
			$did = spl_decode(urldecode($id));		

			//echo api_link.$basics->api_path.'/'.$did;  exit; 
			$ed=curl_post_token(api_link.$basics->api_path.'/list/'.$did);
			$this->data['info']= $info = (isset($ed->data))?$ed->data: array();


 

			 

		  	 
		  

			if($_POST){
			    $p = $_POST;
			    unset($p['slim']);
			    foreach($frm as $f){
			        $typ = @$f->type;
			        $skip_in_update = @$f->skip_in_update;

			        if($typ=='slimcrop'){
			            unset($p[$f->name]);
			            

			            $th = Slim::getImages($f->name); 
			            if(isset($th[0]['input']['name'])){				           
				            $name_th =  $th[0]['input']['name'];
				            $o_nm = str_replace(base_url().$f->upld_base_path, '', $info->{$f->name});
				            $name_th_a = explode('.', $name_th)[0];
				            $o_nm_a = explode('.', $o_nm)[0];
				            if($name_th_a == $o_nm_a)
				            {
				            }else{

				            	////**********
									$name_th =str_replace(' ', '',$th[0]['input']['name']);
									$nm_ext = explode('.', $name_th);
									$extension = end($nm_ext);				
									$namex = rand(1000,9999).'.'.$extension; 
								////**********

				              $data_th = $th[0]['output']['data'];
				              $file_th = Slim::saveFile($data_th, $namex, $f->upld_base_path);
				              
				                $webp = make_webp('/'.$f->upld_base_path,$file_th['name']);
								//$data['thumbnail'] =$webp;

				              $p[$f->name] =base_url().$f->upld_base_path.$webp;
				            }
			            }else{
			            	$p[$f->name] ='';
			            }


			        }
			        if(isset($skip_in_update) && $skip_in_update==1 ){
			            unset($p[$f->name]);
			        }
			    }


			    // echo $did; 
			    //print_result($p);
			    // echo json_encode($p);  exit;
			    //exit; 


			    //echo 
			    $d_edit_link =  api_link.$basics->api_path.'/edit/'.$did; 
			  	$res=curl_post_token($d_edit_link,$p);
			  	 


				$back_link=base_url($basics->pg_baseurl);
				 
				if($res->status==1){
					$this->session->set_flashdata('success',$res->message);				
					redirect($back_link);
				}else{
					$this->session->set_flashdata('error',$res->message);
					redirect($back_link);
				}
			}

	 		$this->load->view('admin/crud_form',$this->data);   
		} 
///////////////////////////////////////////////////

 
























}
?>