<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mechanic extends Admin_Controller {
	function __construct() 
	{
		parent::__construct(); 
		$this->load->helper('string'); 
		$this->load->library('Slim'); 
		$this->load->helper('cookie');
 
		//load model
		$this->load->model("mechanic_model", "mechanic");

		 
		$this->data['common']=$this->common = $cmn =  $this->db->query('SELECT * FROM common')->row();
		$this->data['mycity_id']=$this->mycity_id =  $mycity_id = (isset($_COOKIE['mycity_id']))?$_COOKIE['mycity_id']:19;
		$this->data['mycity_name']=$this->mycity_name =  $mycity_name = (isset($_COOKIE['mycity_name']))?$_COOKIE['mycity_name']:'Bhubaneswar';


		$this->data['allct']=$this->allct =  $allct = curl_get(api_link.'master/city');  

		 

		$this->data['myid']= $this->myid =  $myid = $_SESSION['id'];
		$this->data['myinfo']=$this->myinfo = $myinfo =  $this->db->query('SELECT * FROM garage_mst where id='.$myid)->row();	 
		$kyc_stat = $myinfo->kyc_status;
		$approval_status = $myinfo->is_approved;
		
		if($kyc_stat==1){

			if($approval_status==1){}else{
				$ex_url=array("mechanic/welcome", "mechanic/editprofile", "mechanic/logout");
				if(in_array(uri_string(),$ex_url)){				 
				}else{
					redirect(base_url("mechanic/welcome"), "refresh"); 
				}
			}

			
		}else{
			$ex_url=array("mechanic/kyc","mechanic/logout");
			if(in_array(uri_string(),$ex_url)){				 
			}else{
				redirect(base_url("mechanic/kyc"), "refresh"); 
			}
		}


		




		$this->data['mypackage']=$this->mypackage = $mypackage =  $this->db->query('SELECT * FROM garage_package where id='.$myinfo->garage_pack_id)->row();


	 


		 
		

		////////////////////////// 
					$crURL = current_url();
					$crURL = str_replace('/index.php', '', $crURL);
					$crURL_sls = $crURL.'/';
					$q = 'SELECT * FROM seo_inputs where url="'.$crURL.'"  OR  url="'.$crURL_sls.'"  ';
					$seo_info = $this->db->query($q)->row();
					$this->data['master_info']= $cmn;	
					$sf = (array) $seo_info;		
					if(count($sf)>0){
						$this->data['super_title']=$seo_info->title;
						$this->data['super_key']=$seo_info->meta_key;
						$this->data['super_desc']=$seo_info->meta_desc;
						$this->data['super_otherinfo']=$seo_info->meta_otherinfo;
					}
		//////////////////////////



		$this->data['m_inf'] = $m_inf = $this->db->query('SELECT * FROM garage_mst where id='.$myid)->row();

 
	}  
 
 
	public function welcome(){
		$this->data['myid'] = $this->myid = $myid = $_SESSION['id'];
		
		
		 

		$this->load->view('mechanic/welcome',$this->data);
	} 

	


	 public function index(){
		$this->data['myid'] = $this->myid = $myid = $_SESSION['id'];
		
		
		 

		$this->load->view('mechanic/dash',$this->data);
	}








	// public function editprofile(){

	// 	$this->data['myid'] = $this->myid = $myid = $_SESSION['id'];
	// 	$this->data['city'] = $city =  $this->db->query('SELECT * FROM city')->result();
	// 	$this->data['info'] = $info = $this->db->query('SELECT * FROM garage_mst where id='.$myid)->row();
	// 	 // print_result($info);exit;  

	// 	if($_POST)
	//     { 
 //   	        $data = $this->input->post();   	        

	// 		unset($data['slim']);
	// 		unset($data['thumb_img']);

	// 		$th = Slim::getImages('thumb_img');
	// 		$name_th = $th[0]['input']['name'];
	// 		if($name_th == $info->thumb)
	// 		{
	// 		}else{
	// 			$data_th = $th[0]['output']['data'];
	// 			$file_th = Slim::saveFile($data_th, $name_th, 'uploads/garage/thumb');
	// 			$data['thumb'] =$file_th['name'];
	// 		}

	// 		// print_result($data);exit;
 //       		$data['kyc_update_on'] = date('Y-m-d H:i:s');

	//         $this->db->where('id', $myid);
	//         $m = $this->db->update('garage_mst',$data);
	//         if ($m) {
	//         	$this->session->set_flashdata('success','Record Upadated Successfully');
	//         	redirect(base_url('mechanic/index'));
 //        } else {
 //        	$this->session->set_flashdata('Error','Failed to Update Record. Please try again.');
 //            redirect(base_url('mechanic/editprofile'));
 //        }
	//     }
		 

	// 	$this->load->view('mechanic/editprofile',$this->data);
	// } 

	public function editprofile() { 
		$this->data['myid'] = $this->myid = $myid = $_SESSION['id'];
		$this->data['city'] = $city = $this->db->query('SELECT * FROM city')->result();
		$this->data['info'] = $info = $this->db->query('SELECT * FROM garage_mst WHERE id=' . $myid)->row();
		$this->data['pack'] = $pack = $this->db->query('SELECT * FROM garage_package WHERE id=' . $info->garage_pack_id)->row();



		//$this->data['services'] = $dd = $this->db->query('SELECT * FROM category WHERE parent_id IS NULL')->result();
		$this->data['services'] = $this->mechanic->getCategoryList();
		$this->data['pp_cc'] = $dd = $this->db->query('SELECT * FROM ecom_category WHERE parent_id IS NULL')->result();



		// Fetch associated categories
		$this->data['selected_categories'] = $this->db->select('cat_id')
			->from('garage_cat')
			->where('garage_id', $myid)
			->get()
			->result_array();
    
		// Convert the result to a simple array of IDs
		$this->data['selected_categories'] = array_column($this->data['selected_categories'], 'cat_id');


		$this->data['selected_pp_categories'] = $this->db->select('cat_id')
				->from('garage_prod_cat')
				->where('garage_id', $myid)
				->get()
				->result_array();
	    // Convert the result to a simple array of IDs
		$this->data['selected_pp_categories'] = array_column($this->data['selected_pp_categories'], 'cat_id');





    
		if ($_POST) {
			$data = $this->input->post(); 
			
			unset($data['slim']);
			unset($data['thumb_img']);
			
			// Unset categories and store them in a separate variable
			$categories = isset($data['categories']) ? $data['categories'] : [];
			$pp_categories = isset($data['pp_categories']) ? $data['pp_categories'] : [];
			unset($data['categories']); // Remove categories from $data
			unset($data['pp_categories']); // Remove categories from $data

			// Process the thumbnail image
			$th = Slim::getImages('thumb_img');
			$name_th = $th[0]['input']['name'];
			if ($name_th != $info->thumb) {
				$data_th = $th[0]['output']['data'];
				$file_th = Slim::saveFile($data_th, $name_th, 'uploads/garage/thumb');
				// $data['thumb'] = $file_th['name'];
				$data['thumb'] =base_url().'uploads/garage/thumb/'.$file_th['name'];
			}

			// Update the garage_mst table
			$data['kyc_update_on'] = date('Y-m-d H:i:s');
			$this->db->where('id', $myid);
			$m = $this->db->update('garage_mst', $data);

			// Insert categories into garage_cat table
			if ($m) {
				//delete those categories/services that are not checked by the garage
				$query = $this->db->where('garage_id', $myid)->get('garage_cat');
				$current_categories = [];

				if ($query->num_rows() > 0) {
					$current_categories = array_column($query->result_array(), 'cat_id');
				}

				$to_delete_categories = array_diff($current_categories, $categories);
				$to_insert_categories = array_diff($categories, $current_categories);

				// Delete unchecked categories
				if (!empty($to_delete_categories)) {
					$this->db->where('garage_id', $myid);
					$this->db->where_in('cat_id', $to_delete_categories);
					$this->db->delete('garage_cat');
				}

				// Insert newly checked categories
				if (!empty($to_insert_categories)) {
					$insert_categories = [];
					foreach ($to_insert_categories as $category_id) {
						$insert_categories[] = [
							'garage_id' => $myid,
							'cat_id' => $category_id,
							'created_by' => $myid
						];
					}
					$this->db->insert_batch('garage_cat', $insert_categories);
				}
				
				$this->db->where('garage_id', $myid);
				$this->db->delete('garage_prod_cat');


				if (!empty($pp_categories)) {
						$insert_pp_categories = [];
						foreach ($pp_categories as $pp_category_id) {
							$insert_pp_categories[] = [
								'garage_id' => $myid,
								'cat_id' => $pp_category_id,
								'created_on' => date('Y-m-d H:i:s'),
								'created_by' => $myid,  
								
							];
						}
						$this->db->insert_batch('garage_prod_cat', $insert_pp_categories);
				}


				// Success message and redirect
				$this->session->set_flashdata('success', 'Profile Updated Successfully');
				redirect(base_url('mechanic/index'));
			} else {
				// Error message and redirect back
				$this->session->set_flashdata('Error', 'Failed to Update Profile. Please try again.');
				redirect(base_url('mechanic/editprofile'));
			}
		}

    	$this->load->view('mechanic/editprofile', $this->data);
	}






	public function kyc() {

	    $this->data['myid'] = $this->myid = $myid = $_SESSION['id'];
	    $this->data['city'] = $city = $this->db->query('SELECT * FROM city')->result();
	    $this->data['info'] = $info = $this->db->query('SELECT * FROM garage_mst WHERE id=' . $myid)->row();
	    $this->data['pack'] = $pack = $this->db->query('SELECT * FROM garage_package WHERE id=' . $info->garage_pack_id)->row();



	    $this->data['cc'] = $dd = $this->db->query('SELECT * FROM category WHERE parent_id IS NULL')->result();
	    $this->data['pp_cc'] = $dd = $this->db->query('SELECT * FROM ecom_category WHERE parent_id IS NULL')->result();

	    $this->data['selected_categories'] = $this->db->select('cat_id')
	        ->from('garage_cat')
	        ->where('garage_id', $myid)
	        ->get()
	        ->result_array();
	    
	    // Convert the result to a simple array of IDs
	    $this->data['selected_categories'] = array_column($this->data['selected_categories'], 'cat_id');




	    $this->data['selected_pp_categories'] = $this->db->select('cat_id')
	        ->from('garage_prod_cat')
	        ->where('garage_id', $myid)
	        ->get()
	        ->result_array();
	    // Convert the result to a simple array of IDs
	    $this->data['selected_pp_categories'] = array_column($this->data['selected_pp_categories'], 'cat_id');



	    // print_result($dd);exit;

	    if ($_POST) {
	        $data = $this->input->post();

	        unset($data['slim']);
	        unset($data['thumb_img']);
	        
	        // Unset categories and store them in a separate variable
	        $categories = isset($data['categories']) ? $data['categories'] : [];
	        $pp_categories = isset($data['pp_categories']) ? $data['pp_categories'] : [];
	        unset($data['categories']); // Remove categories from $data
	        unset($data['pp_categories']); // Remove categories from $data

	        $th = Slim::getImages('thumb_img');
	        $name_th = $th[0]['input']['name'];
	        if ($name_th != $info->thumb) {
	            $data_th = $th[0]['output']['data'];
	            $file_th = Slim::saveFile($data_th, $name_th, 'uploads/garage/thumb');
	            // $data['thumb'] = $file_th['name'];
	            $data['thumb'] =base_url().'uploads/garage/thumb/'.$file_th['name'];
	        }

	        // Update the garage_mst table
	        $data['kyc_status'] = 1;
	        $data['kyc_update_on'] = date('Y-m-d H:i:s');
	        $this->db->where('id', $myid);
	        $m = $this->db->update('garage_mst', $data);

	        if ($m) {
	            $this->db->where('garage_id', $myid);
	            $this->db->delete('garage_cat');


	            $this->db->where('garage_id', $myid);
	            $this->db->delete('garage_prod_cat');





	            if (!empty($categories)) {
	                $insert_categories = [];
	                foreach ($categories as $category_id) {
	                    $insert_categories[] = [
	                        'garage_id' => $myid,
	                        'cat_id' => $category_id,
	                        'created_on' => date('Y-m-d H:i:s'),
	                        'created_by' => $myid,  
	                        
	                    ];
	                }
	                $this->db->insert_batch('garage_cat', $insert_categories);
	            }


	            if (!empty($pp_categories)) {
	                $insert_pp_categories = [];
	                foreach ($pp_categories as $pp_category_id) {
	                    $insert_pp_categories[] = [
	                        'garage_id' => $myid,
	                        'cat_id' => $pp_category_id,
	                        'created_on' => date('Y-m-d H:i:s'),
	                        'created_by' => $myid,  
	                        
	                    ];
	                }
	                $this->db->insert_batch('garage_prod_cat', $insert_pp_categories);
	            }









	            $this->session->set_flashdata('success', 'Record Updated Successfully');
	            redirect(base_url('mechanic/index'));
	        } else {
	            $this->session->set_flashdata('Error', 'Failed to Update Record. Please try again.');
	            redirect(base_url('mechanic/kyc'));
	        }
	    }

	    $this->load->view('mechanic/kyc', $this->data); 
	}




	public function upgradepack(){		 

		$this->data['packs']= $packs =  $this->db->query('SELECT * FROM garage_package WHERE monthly_price > '.$this->mypackage->monthly_price)->result();

		// print_result($packs);exit;

		$this->load->view('mechanic/upgradepacks',$this->data);
	}



	public function package_list(){


		if($_POST){			 
			$this->session->set_userdata('pk_search', $_POST);
			redirect(base_url('mechanic/package_list'));
		}
		if(isset($_GET['reset'])){			 
			unset($_SESSION['pk_search']);
			redirect(base_url('mechanic/package_list')); 
		}


		$eq ='';
		if(isset($_SESSION['pk_search']['searches'])){
			$qq = $_SESSION['pk_search']['searches'];

			$eq =' AND (name like "%'.$qq.'%" OR short_info like "%'.$qq.'%" OR info like "%'.$qq.'%" OR offer_text like "%'.$qq.'%"  ) '; 
		}




		$myid =  $this->myid;
		$this->data['mypack']  = $mypack =  $this->db->query('SELECT id,name,city_id,short_info,mrp_price,offer_price,offer_text ,
				(SELECT name from category WHERE id= package_mst.category_id) as cat_nm
			FROM package_mst where user_typ="Garage" AND created_by = ' . $myid . '    '.$eq.' 

			ORDER BY id DESC')->result();	 

		// print_result($mypack);

		// exit;
		 
		$this->data['heading'] = "Service List";
		$this->load->view('mechanic/package_list',$this->data);
	} 

 

	public function package_add()
	{
	    $myid = $this->myid;
	    $this->data['allpack'] = $allpack = $this->db->query('SELECT * FROM package_mst WHERE is_master = 1 
	    					AND category_id in (SELECT cat_id FROM `garage_cat` WHERE garage_id = '.$myid.') 
	    					AND id NOT IN (SELECT master_id FROM package_mst pp WHERE pp.user_typ = "Garage" AND pp.created_by = ' . $myid . ')
	    					')->result();

	    // print_result($allpack);exit;

	    if ($_POST) {
	        $data = $this->input->post();
	        // print_result($data);exit;
	        $sp_id = $data['master_id'];
	        $parent = array_search_multidim($allpack, 'id', $sp_id,'S');	       

	        $data['category_id'] = $parent->category_id;
	        $data['city_id'] = $this->myinfo->city_id;
	        $data['name'] = $parent->name;
	        $data['short_info'] = $parent->short_info;
	        $data['info'] = $parent->info;
	        $data['thumb'] = $parent->thumb;
	        $data['user_typ'] = 'Garage';                      
			$data['created_by'] = $myid;
			if(isset($data['is_homeservice']))	{}else{
   	        	$data['is_homeservice'] = 0;
   	        }	       

	        $r = $this->db->insert('package_mst', $data);
	        if($r)
			{
			 	$smsg= "Data created Successfully";
			 	$typ='success';
			}
			 else
			{
			 	$smsg= "Error Occurs while adding data";
			 	$typ='error';
			}
			$this->session->set_flashdata($typ,$smsg);			 
	        redirect('mechanic/package_list');	         
	    }

	    $this->data['heading'] = "Add Service";
	    $this->load->view('mechanic/package_add', $this->data);
	}


	public function package_edit($gx){
		$x = spl_decode($gx); 
	    $myid = $this->myid;	   
	    $this->data['info'] = $info = $this->db->query('SELECT * from package_mst where id='.$x.' AND created_by = '.$myid)->row();

	    if ($_POST) {
	        $data = $this->input->post();  
	        if(isset($data['is_homeservice']))	{}else{
   	        	$data['is_homeservice'] = 0;
   	        }	

	        $r = $this->db->update('package_mst', $data,array('id'=>$info->id));
	        if($r)
			{
			 	$smsg= "Data created Successfully";
			 	$typ='success';
			}
			 else
			{
			 	$smsg= "Error Occurs while adding data";
			 	$typ='error';
			}
			$this->session->set_flashdata($typ,$smsg);			 
	        redirect('mechanic/package_list');	         
	    }

	    $this->data['heading'] = "Edit Service";
	    $this->load->view('mechanic/package_edit', $this->data);
	}

	public function package_delete($gx){
		$x = spl_decode($gx); 
		$myid =  $this->myid;
		$this->db->query('DELETE from package_mst where id='.$x.' AND created_by = '.$myid);
		$this->session->set_flashdata('success','Record Deleted Successfully');
		redirect(base_url('mechanic/package_list')); 
	}







	public function booking_list($typ=''){
		$myid =  $this->myid;

		$eq ='';
		if($typ=='' || $typ=='all'){
			$eq .=' ';
		}elseif ($typ=='active' ){
			$eq .=' AND  job_close_status = 0  AND  is_cancelled = 0 ';
		}elseif ($typ=='completed' ){
			$eq .=' AND  job_close_status = 1 AND  is_cancelled = 0 ';
		}elseif ($typ=='cancelled' ){
			$eq .=' AND  is_cancelled = 1 ';
		}

		 $this->data['typ'] =  $typ;

		$sqry = 'SELECT * ,
			CASE 
		        WHEN is_cancelled = 1 THEN "Cancelled"
		        WHEN job_close_status = 1 AND is_cancelled = 0 THEN "Completed"
		        WHEN job_close_status = 0 AND is_cancelled = 0 THEN "Active"
		        ELSE "Unknown"
		    END AS booking_status

		FROM booking_mst WHERE garage_id = ' . $myid . ' ' . $eq . ' AND status = 1 ORDER BY id DESC';


		$this->data['bd'] = $bd = $this->db->query($sqry)->result();


		// print_result($bd);

		// exit;
		 
		$this->data['heading'] = "Booking List";
		$this->load->view('mechanic/booking_list',$this->data);
	} 


	public function booking_details($bid=''){
		if($bid==''){
			redirect(base_url('mechanic/booking_list'));  
		}


		$this->data['book_info'] = $book_info = $this->db->query('select *,
			(SELECT name from car_manufacturer WHERE id = booking_mst.car_manufacturer_id) as m_nm,
			(SELECT name from car_model WHERE id = booking_mst.car_model_id) as car_model_nm,
			(SELECT name from fuel_type WHERE id = booking_mst.car_fuel_type_id) as fuel_nm

		 from booking_mst WHERE booking_id="'.$bid.'"')->row();
		if(isset($book_info->package_id) && $book_info->package_id>0){
			$this->data['pkg_info'] = $pkg_info = $this->db->query('select * from package_mst WHERE id='.$book_info->package_id)->row();
		}


		if(isset($book_info->review_id) && $book_info->review_id>0){
			$this->data['review_info'] = $review_info = $this->db->query('select * from review_mst WHERE id='.$book_info->review_id)->row();
		}




		$this->data['cust_info'] = $cust_info = $this->db->query('select * from customer WHERE id='.$book_info->cust_id)->row(); 
		$this->data['garage_info'] = $garage_info = $this->db->query('select * from garage_mst WHERE id='.$book_info->garage_id)->row(); 


		//print_result($book_info);
		// print_result($pkg_info);
		// print_result($cust_info);
		// print_result($garage_info);

		//exit;
		 $this->data['heading'] = "Booking Details";
		$this->load->view('mechanic/booking_details',$this->data);
	} 


	// Booking List 

	public function bookingclose($bid=''){

		$myid =  $this->myid;
		 
		$this->data['book_info'] = $book_info = $this->db->query('select *,
			(SELECT name from car_manufacturer WHERE id = booking_mst.car_manufacturer_id) as m_nm,
			(SELECT name from car_model WHERE id = booking_mst.car_model_id) as car_model_nm,
			(SELECT name from car_model WHERE id = booking_mst.car_model_id) as fuel_nm

		 from booking_mst WHERE booking_id="'.$bid.'"')->row();
		if(isset($book_info->package_id) && $book_info->package_id>0){
			$this->data['pkg_info'] = $pkg_info = $this->db->query('select * from package_mst WHERE id='.$book_info->package_id)->row();
		}
		$this->data['cust_info'] = $cust_info = $this->db->query('select * from customer WHERE id='.$book_info->cust_id)->row(); 
		$this->data['garage_info'] = $garage_info = $this->db->query('select * from garage_mst WHERE id='.$book_info->garage_id)->row(); 

		if($_POST)
	    { 
   	        $data = $this->input->post();

   	        if($book_info->job_close_otp == $data['otp']){

   	        	unset($data['otp']);
   	        	$data['job_close_status'] = 1;
   	        	$data['is_paid'] = 1;
   	        	$data['job_closed_by'] = $myid;
   	        	$data['job_closed_on'] = date('Y-m-d H:i:s');
   	        	 
		        $m = $this->db->update('booking_mst',$data,array('booking_id'=>$bid));


		        $this->session->set_flashdata('success','Booking Closed Successfully');
		        redirect(base_url('mechanic/booking_list/active'));
   	        }else{
   	        	$this->session->set_flashdata('error','OTP Did not Match');
   	        	redirect(base_url('mechanic/bookingclose/' . $bid));

   	        }   			

	        
	    }
		 

		$this->load->view('mechanic/bookingclose.php',$this->data);
	}




	public function bookingcancel($bid=''){

		$myid =  $this->myid;
		 
		$this->data['book_info'] = $book_info = $this->db->query('select *,
			(SELECT name from car_manufacturer WHERE id = booking_mst.car_manufacturer_id) as m_nm,
			(SELECT name from car_model WHERE id = booking_mst.car_model_id) as car_model_nm,
			(SELECT name from fuel_type WHERE id = booking_mst.car_fuel_type_id) as fuel_nm

		 from booking_mst WHERE booking_id="'.$bid.'"')->row();
		if(isset($book_info->package_id) && $book_info->package_id>0){
			$this->data['pkg_info'] = $pkg_info = $this->db->query('select * from package_mst WHERE id='.$book_info->package_id)->row();
		}
		$this->data['cust_info'] = $cust_info = $this->db->query('select * from customer WHERE id='.$book_info->cust_id)->row(); 
		$this->data['garage_info'] = $garage_info = $this->db->query('select * from garage_mst WHERE id='.$book_info->garage_id)->row(); 

		if($_POST)
	    { 
   	        $data = $this->input->post();

   	        

   	        	 
   	        	$data['is_cancelled'] = 1;
   	        	$data['cancelled_by'] = 'M';
   	        	$data['cancelled_on'] = date('Y-m-d H:i:s');   	        	 
		        $m = $this->db->update('booking_mst',$data,array('booking_id'=>$bid));


		        $this->session->set_flashdata('success','Booking cancelled Successfully');
		        redirect(base_url('mechanic/booking_list/cancelled'));
   	           			

	        
	    }
		 

		$this->load->view('mechanic/bookingcancel.php',$this->data); 
	}



	 



	






	public function jobcard(){


		if($_POST){			 
			$this->session->set_userdata('jc_search', $_POST);
			redirect(base_url('mechanic/jobcard'));
		}
		if(isset($_GET['reset'])){			 
			unset($_SESSION['jc_search']);
			redirect(base_url('mechanic/jobcard'));  
		}


		$eq ='';
		if(isset($_SESSION['jc_search']['searches'])){
			$qq = $_SESSION['jc_search']['searches'];

			$eq =' AND (job_heading like "%'.$qq.'%" OR job_info like "%'.$qq.'%" OR cust_address like "%'.$qq.'%"   ) '; 
		}




		$myid =  $this->myid;
		$mycity = $this->myinfo->city_id;
		//

		// echo 'select cat_id from garage_cat where garage_id='.$myid;
		$vq = 'WITH RECURSIVE category_tree AS (     
				    SELECT id, parent_id, 1 AS level
				    FROM category 
				    WHERE id IN (select cat_id from garage_cat where garage_id='.$myid.')				    
				    UNION ALL
				    SELECT c.id, c.parent_id, ct.level + 1
				    FROM category c
				    INNER JOIN category_tree ct ON c.parent_id = ct.id
				    WHERE ct.level < 3  -- Limit recursion to 2 levels
				)
				SELECT id FROM category_tree;';

		$dpxx = $this->db->query($vq)->result(); 

		$zz = array();
		foreach ($dpxx as $xx) {
			$zz[] = $xx->id;
		}
		
		$vlz = implode(", ", array_unique($zz)); 


		// print_result($dpxx); 
		// print_result($vlz); exit;  

		$mainqqq = 'SELECT * 
			, (select count(*)as num from job_card_bids WHERE job_card_id = job_card.id  and is_awarded = 1) as award_count 
			, (select price  from job_card_bids WHERE job_card_id = job_card.id limit 1  ) as bid_price 
			from job_card 
			WHERE status = 1 
			AND city_id =  '.$mycity.' 
			AND cat_id in ('.$vlz.') 
			'.$eq.'
			order by id desc';
		$this->data['dp'] = $dp = $this->db->query($mainqqq)->result(); 

		//print_result($dp);exit;


		$this->data['heading'] = "Live Booking List";
		$this->load->view('mechanic/jobcard',$this->data);
	}



	public function jobcard_details($tid=''){
		$this->data['myid'] = $this->myid = $myid = $_SESSION['id'];

		$this->data['myid'] = $this->myid = $myid = $_SESSION['id'];
		$this->data['job'] = $job = $this->db->query('SELECT *, (SELECT name from car_manufacturer WHERE id = job_card.car_manufacturer_id ) as car_manufacturer
				, (SELECT name from car_model WHERE id = job_card.car_model_id ) as car_model
				, (SELECT name from fuel_type WHERE id = job_card.car_fuel_type_id ) as fuel_type
			from job_card WHERE transaction_id="'.$tid.'"')->row();
		$this->data['job_award'] = $job_award = $this->db->query('SELECT *  from job_card_bids WHERE job_card_id="'.$job->id.'" AND is_awarded = 1')->row();


		 $this->data['myjobcard'] = $myjobcard = $this->db->query('SELECT *  from job_card_bids WHERE job_card_id="'.$job->id.'" AND garage_id = '.$this->myid)->row();
		 $this->data['job_award'] = $job_award = $this->db->query('SELECT *  from job_card_bids WHERE job_card_id="'.$job->id.'" AND is_awarded = 1')->row();


		 

		if ($_POST) {
	        $data = $this->input->post();




	        if(mycount($myjobcard)>0){
	        	//print_result($data);  
	        	// echo '------'.$myjobcard->id;  
	        	$rx = $this->db->update('job_card_bids', $data,array('id'=>$myjobcard->id));

	        	//echo $this->db->last_query(); exit;
		        if($rx)
				{
				 	$smsg= "Data Updated Successfully";
				 	$typ='success';
				}
				 else
				{
				 	$smsg= "Error Occurs while processing data";
				 	$typ='error';
				}


	        }else{
	        	$data['bid_id'] = random_string('alnum', 16);
		        $data['garage_id'] = $myid;
		        $data['job_card_id'] = $job->id;
		        $r = $this->db->insert('job_card_bids', $data);
		        if($r)
				{
				 	$smsg= "Data created Successfully";
				 	$typ='success';
				}
				 else
				{
				 	$smsg= "Error Occurs while adding data";
				 	$typ='error';
				}
	        }             

	       
			$this->session->set_flashdata($typ,$smsg);			 
	        redirect('mechanic/jobcard');	

		} 

		 
		$this->load->view('mechanic/jobcard_details',$this->data);
	}

	public function dashboard_X(){
		$this->load->view('mechanic/index',$this->data);
	}
	public function index2(){
		$this->load->view('mechanic/index2',$this->data);
	}


	public function product_orders($typ=''){


		$myid =  $this->myid;	 
		$eq ='';
		if($typ=='' || $typ=='all'){
			$eq .=' ';
		}elseif ($typ=='active' ){
			$eq .=' AND  eod.delivery_status = 0 ';
		}elseif ($typ=='completed' ){
			$eq .=' AND  eod.delivery_status = 1 ';
		}

		elseif ($typ=='cancelled' ){
			$eq .=' AND  eod.is_cancelled = 1 ';
		}

		 $this->data['typ'] =  $typ;


				$sqry = 'SELECT 
		            eod.id, eod.order_id, eod.product_id, eod.garage_id, eod.product_name, eod.qty, eod.price, 
		            eod.platform_fee, eod.gst_percent, eod.gst_amount, eod.sub_total, eod.is_homedelivery, 
		            eod.delivery_status, eod.delivered_on, eod.is_paid, eod.payment_mode, eod.status, eod.is_cancelled, 
		            eo.city_id, eo.shipping_address, eo.shipping_phone, eo.shipping_email, eo.shipping_name,
		            ep.thumb, ep.name AS product_name, ep.product_info,
		            (SELECT name FROM city WHERE id = eo.city_id) AS city_nm
		        FROM 
		            ecom_order_details eod
		        LEFT JOIN 
		            ecom_product ep ON eod.product_id = ep.id
		        LEFT JOIN 
		            ecom_order eo ON eod.order_id = eo.order_id
		        WHERE 
		            eod.status = 1 
		            AND eod.garage_id = ' . $myid . ' 
		            ' . $eq . ' 
		        ORDER BY 
		            eod.id DESC';

		$this->data['poo'] = $poo = $this->db->query($sqry)->result();


		// print_result($poo);exit;



		$this->load->view('mechanic/product_orders',$this->data);
	}



	public function order_details($pid=''){

		// $pid = spl_encode($pid);
		// echo $pid;exit;

		if($pid==''){
			redirect(base_url('mechanic/product_orders'));  
		}

		$myid =  $this->myid;

		$this->data['order_id'] = $pid;

		 

		$this->data['orderdtl'] = $orderdtl = $this->db->query('
			    SELECT 
			        eod.id,  eod.closer_otp, eod.order_id, eod.product_id, eod.garage_id, eod.product_name, eod.qty, eod.price, 
			        eod.platform_fee, eod.gst_percent, eod.gst_amount, eod.sub_total, eod.is_homedelivery, 
			        eod.delivery_status, eod.delivered_on, eod.is_paid, eod.payment_mode, eod.status, eod.is_cancelled,eod.cancelled_on,
			        eo.city_id, eo.shipping_address, eo.shipping_phone, eo.shipping_email, eo.shipping_name,
			        ep.thumb, ep.name AS product_name, ep.product_info,
			        (SELECT name FROM city WHERE id = eo.city_id) AS city_nm
			    FROM 
			        ecom_order_details eod
			    LEFT JOIN 
			        ecom_product ep ON eod.product_id = ep.id
			    LEFT JOIN 
			        ecom_order eo ON eod.order_id = eo.order_id
			    WHERE 
			        eod.status = 1 
			        AND eod.order_id = "'.$pid.'"   ')->row(); 


		
		//print_result($orderdtl); exit; 


		if($_POST)
	    { 
   	        $data = $this->input->post();

   	        if($orderdtl->closer_otp == $data['otp']){
   	        	//echo '----innn-----';  exit;
   	        	unset($data['otp']);
   	        	$data['delivery_status'] = 1;
   	        	$data['is_paid'] = 1;
   	        	$data['delivery_status'] = 1;
   	        	$data['delivered_on'] = date('Y-m-d H:i:s');
   	        	 
		        $m = $this->db->update('ecom_order_details',$data,array('order_id'=>$pid));


		        $this->session->set_flashdata('success','Booking Closed Successfully');
		        redirect(base_url('mechanic/product_orders'));
   	        }else{
   	        	//echo '---------';  exit;
   	        	$this->session->set_flashdata('Failed','OTP Did not Match');
   	        	redirect(base_url('mechanic/order_details/' . $pid));

   	        }   			

	        
	    }




		$this->load->view('mechanic/order_details',$this->data);
	}


	public function order_canncel($pid=''){

		// $pid = spl_encode($pid);
		// echo $pid;exit;

		if($pid==''){
			redirect(base_url('mechanic/product_orders'));  
		}

		$myid =  $this->myid;

		$this->data['order_id'] = $pid;

		 

		$this->data['orderdtl'] = $orderdtl = $this->db->query('
			    SELECT 
			        eod.id,  eod.closer_otp, eod.order_id, eod.product_id, eod.garage_id, eod.product_name, eod.qty, eod.price, 
			        eod.platform_fee, eod.gst_percent, eod.gst_amount, eod.sub_total, eod.is_homedelivery, 
			        eod.delivery_status, eod.delivered_on, eod.is_paid, eod.payment_mode, eod.status, eod.cancelation_otp, eod.status, eod.is_cancelled,eod.cancelled_on,
			        eo.city_id, eo.shipping_address, eo.shipping_phone, eo.shipping_email, eo.shipping_name,
			        ep.thumb, ep.name AS product_name, ep.product_info,
			        (SELECT name FROM city WHERE id = eo.city_id) AS city_nm
			    FROM 
			        ecom_order_details eod
			    LEFT JOIN 
			        ecom_product ep ON eod.product_id = ep.id
			    LEFT JOIN 
			        ecom_order eo ON eod.order_id = eo.order_id
			    WHERE 
			        eod.status = 1 
			        AND eod.order_id = "'.$pid.'"   ')->row(); 


		
		//print_result($orderdtl); exit; 

		 

		if($_POST)
	    { 
   	        $data = $this->input->post();

   	        if($orderdtl->cancelation_otp == $data['otp']){
   	        	//echo '----innn-----';  exit;
   	        	unset($data['otp'],$data['reason']);
   	        	$data['is_cancelled'] = 1;   	        	 
   	        	$data['cancelled_reason'] = $data['reason'];
   	        	$data['cancelled_on'] = date('Y-m-d H:i:s');
   	        	 
		        $m = $this->db->update('ecom_order_details',$data,array('order_id'=>$pid));


		        $this->session->set_flashdata('success','Booking Cancelled Successfully');
		        redirect(base_url('mechanic/product_orders'));
   	        }else{
   	        	//echo '---------';  exit;
   	        	$this->session->set_flashdata('Failed','OTP Did not Match');
   	        	redirect(base_url('mechanic/order_canncel/' . $pid));

   	        }   			

	        
	    }




		$this->load->view('mechanic/order_canncel',$this->data);
	}












public function get_package_details()
{
    $package_id = $this->input->post('package_id'); 
    $myid = $this->myid;

    $package = $this->db->query("
        SELECT id, name, info 
        FROM package_mst 
        WHERE is_master = 1 
          AND id = $package_id 
          AND id NOT IN (
              SELECT id 
              FROM package_mst pp 
              WHERE pp.user_typ = 'Garage' 
                AND pp.created_by = $myid
          )
    ")->row();

    if ($package) {
        echo json_encode(['status' => 'success', 'data' => $package]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No details found for the selected package.']);
    }
}

public function get_product_details()
{
    $package_id = $this->input->post('package_id'); 
    $myid = $this->myid;

    $package = $this->db->query("
        SELECT *
        FROM ecom_product 
        WHERE is_master = 1 
          AND id = $package_id            
    ")->row();

    if ($package) {
        echo json_encode(['status' => 'success', 'data' => $package]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No details found for the selected package.']);
    }
}







public function xxget_product_details()
{
    header('Content-Type: application/json');

    // Get the product ID from the request
    $productId = $this->input->get('id');

    if (!empty($productId)) {
        // Query the database for product details
        $query = $this->db->select('name, product_info')
                          ->where('id', $productId)
                          ->get('ecom_product');

        if ($query->num_rows() > 0) {
            $product = $query->row();
            echo json_encode([
                'success' => true,
                'name' => $product->name,
                'info' => $product->product_info
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Product not found'
            ]);
        }
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Invalid product ID'
        ]);
    }
}



// Product


public function product_list(){

		if($_POST){			 
			$this->session->set_userdata('pl_search', $_POST);
			redirect(base_url('mechanic/product_list'));
		}
		if(isset($_GET['reset'])){			 
			unset($_SESSION['pl_search']);
			redirect(base_url('mechanic/product_list')); 
		}


		$eq ='';
		if(isset($_SESSION['pl_search']['searches'])){
			$qq = $_SESSION['pl_search']['searches'];

			$eq =' AND (name like "%'.$qq.'%" OR product_info like "%'.$qq.'%" OR mrp_price like "%'.$qq.'%" OR offer_price like "%'.$qq.'%"  ) '; 
		}

		$myid =  $this->myid;
		$this->data['plist']  = $pp =  $this->db->query('SELECT * 
				-- (SELECT name from category WHERE id= package_mst.category_id) as cat_nm
			FROM ecom_product where user_typ="Garage" '.$eq.' AND created_by = ' . $myid . ' ORDER BY id DESC')->result();	 

		// print_result($pp);

		// exit;
		 
		$this->data['heading'] = "Product List";
		$this->load->view('mechanic/product_list',$this->data);
	} 

	public function product_add()
	{
	    $myid = $this->myid;
	     

	    $this->data['prod'] = $prod = $this->db->query('SELECT * FROM ecom_product 
	    			WHERE is_master = 1 
	    			AND cat_id in (SELECT cat_id FROM garage_prod_cat WHERE garage_id = '.$myid.')  
	    			AND id NOT IN (SELECT master_id FROM ecom_product pp WHERE pp.user_typ = "Garage" AND pp.created_by = ' . $myid . ') 
	    			ORDER BY id DESC')->result(); 

	    // print_result($prod);exit;

	    if ($_POST) {
	        $data = $this->input->post();
	        // print_result($data);exit;
	        $sp_id = $data['master_id'];
	        $parent = array_search_multidim($prod, 'id', $sp_id,'S');	       

	        $data['cat_id'] = $parent->cat_id;
	        $data['brand_id'] = $parent->brand_id;
	        $data['name'] = $parent->name;
	        $data['urlslug'] = $parent->urlslug;
	        $data['thumb'] = $parent->thumb;
	        $data['pic1'] = $parent->pic1;
	        $data['pic2'] = $parent->pic2;
	        $data['pic3'] = $parent->pic3;
	        $data['pic4'] = $parent->pic4;
	        $data['banner'] = $parent->banner;
	        $data['car_manufacturer_id'] = $parent->car_manufacturer_id;
	        $data['car_model_id'] = $parent->car_model_id;
	        $data['fuel_type_id'] = $parent->fuel_type_id;
	        $data['transmission'] = $parent->transmission;
	        $data['year_of_mfg'] = $parent->year_of_mfg;
	        $data['product_info'] = $parent->product_info;

	        $data['user_typ'] = 'Garage';                      
			$data['created_by'] = $myid;
			if(isset($data['is_homedelivery']))	{}else{
   	        	$data['is_homedelivery'] = 0;
   	        }	 

			// print_result($data);exit;      

	        $r = $this->db->insert('ecom_product', $data);
	        if($r)
			{
			 	$smsg= "Data created Successfully";
			 	$typ='success';
			}
			 else
			{
			 	$smsg= "Error Occurs while adding data";
			 	$typ='error';
			}
			$this->session->set_flashdata($typ,$smsg);			 
	        redirect('mechanic/product_list');	         
	    }

	    $this->data['heading'] = "Add Product";
	    $this->load->view('mechanic/product_add', $this->data);
	}

	public function product_edit($id){
		$this->data['info'] = $info = $this->db->query('SELECT * FROM ecom_product WHERE id = "' . $id . '"')->row();
		if($_POST)
	    { 
   	        $data = $this->input->post();

   	        if(isset($data['is_homedelivery']))	{}else{
   	        	$data['is_homedelivery'] = 0;
   	        }


   	        //print_result($data);  exit;		

	        $this->db->where('id', $id);
	        $m = $this->db->update('ecom_product',$data);
	        $this->session->set_flashdata('success','Record Upadated Successfully');
	        redirect(base_url('mechanic/product_list'));
	    }
	    $this->data['heading'] = "Edit Product";
		$this->load->view('mechanic/product_edit.php',$this->data);
	}

	public function product_delete($x){
		$this->db->query('DELETE from ecom_product where id='.$x);
		$this->session->set_flashdata('success','Record Deleted Successfully');
		redirect(base_url('mechanic/product_list'));
	}
 

 




 

	 









	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('mechlogin'),'refresh');
	}





















	public function dashboard(){
		$this->data['myid'] = $this->myid = $myid = $_SESSION['id'];
		
		
		 

		$this->load->view('mechanic/index',$this->data);
	}



}