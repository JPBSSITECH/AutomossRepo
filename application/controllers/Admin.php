<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends Admin_Controller {
	function __construct() 
	{
		parent::__construct(); 


		$this->load->library('email');
        $this->load->library('Slim'); 
        $this->load->helper('string');		
        $this->load->helper('url', 'form'); 

		
		if(isset($_SESSION['id'])){
			$my_id = $this->session->userdata('id');
			$this->data['myinfo']  = $this->myinfo = $inf =  
			$this->db->query('select * from user_mst where id='.$my_id)->row();  
		}

		$this->data['limit']  = $this->limit = $limit = 10;
	}   
 
 
	public function index(){

		$this->data['cust']  = $this->db->query('SELECT count(*) as num from customer where status = 1')->row();
		$this->data['garage']  = $this->db->query('SELECT count(*) as num from garage_mst where status = 1')->row();
		$this->data['car']  = $this->db->query('SELECT count(*) as num from used_car where status = 1')->row();
		$this->data['prod']  = $this->db->query('SELECT count(*) as num from ecom_product where status = 1')->row();


		$chart =  $this->db->query(" SELECT   DATE(created_on) as booking_date,   COUNT(*) as booking_count   FROM booking_mst   WHERE created_on >= DATE(NOW() - INTERVAL 15 DAY)  GROUP BY DATE(created_on)  ORDER BY booking_date ASC ")->result();


		$m_chart_dt = array();
		$m_chart_vl = array();
		foreach ($chart as $kz) {
			array_push($m_chart_dt, date('d M Y',strtotime($kz->booking_date)));
			array_push($m_chart_vl,$kz->booking_count); 
		}

		$this->data['chart_date']  = $m_chart_dt;
		$this->data['chart_val']  = $m_chart_vl;
		 

		$this->load->view('admin/index',$this->data);
	}





public function emailengine(){

	 	$this->data['email_engine'] = $email_engine = $this->db->query('SELECT * FROM email_engine WHERE 1')->result(); 
		if($_POST)
		{
			 
			$xse = $this->db->query('UPDATE email_engine SET is_default = 0 ');
			$data['is_default'] =1;
			$r = $this->db->update('email_engine',$data, array('id'=>$_POST['email_engine_id'])); 
			

			if($r)
			{
			 	$smsg= "Data Updated Successfully";
			 	$typ='success';
			}
			 else
			{
			 	$smsg= "Error Occurs while processing data";
			 	$typ='error';
			}
			$this->session->set_flashdata($typ,$smsg);
			redirect(base_url("admin/emailengine/"));
		}




		$this->load->view('admin/emailengine',$this->data);
	}










	public function staffrole($typ=''){		
		$this->crudmaker("xmlz/staffrole.xml",$typ);		 
	}


	

	


	


	public function city($typ=''){		
		$this->crudmaker("xmlz/city.xml",$typ);		 
	}

	
	public function reviews($typ=''){		
		$this->crudmaker("xmlz/reviews.xml",$typ);		 
	}
	public function fueltype($typ=''){		
		$this->crudmaker("xmlz/fueltype.xml",$typ);		 
	}

	public function manufacturer($typ=''){		
		$this->crudmaker("xmlz/manufacturer.xml",$typ);		 
	}

	public function carmodel($typ=''){		
		$this->crudmaker("xmlz/carmodel.xml",$typ);		 
	}

	// public function emailengine($typ=''){		
	// 	$this->crudmaker("xmlz/emailengine.xml",$typ);		 
	// }

	public function emailtemplate($typ=''){		
		$this->crudmaker("xmlz/emailtemplate.xml",$typ);		 
	}


	public function smsengine($typ=''){		
		$this->crudmaker("xmlz/emailengine.xml",$typ);		 
	}

	public function smstemplate($typ=''){		
		$this->crudmaker("xmlz/emailtemplate.xml",$typ);		 
	}

	public function featurecategory($typ=''){		
		$this->crudmaker("xmlz/featurecategory.xml",$typ);		 
	}

	public function features($typ=''){		
		$this->crudmaker("xmlz/features.xml",$typ);		 
	}

	public function carsellpackage($typ=''){		
		$this->crudmaker("xmlz/carsellpackage.xml",$typ);		 
	}
	public function customer($typ=''){		
		$this->crudmaker("xmlz/customer.xml",$typ);	 	  
	}

	// public function garage($typ=''){		
	// 	$this->crudmaker("xmlz/garage.xml",$typ);		 
	// }

	public function oo($typ=''){	

		$this->crudmaker("xmlz/car.xml",$typ);		 
	}

	public function carselllead($typ=''){		
		$this->crudmaker("xmlz/carselllead.xml",$typ);		 
	}

	public function ecombrand($typ=''){		
		$this->crudmaker("xmlz/ecombrand.xml",$typ);		 
	}




///////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////



	public function garage(){

		
			if(isset($_GET['reset'])){
				redirect(base_url('admin/garage'));	 
		  	}
		  	if(isset($_GET['export'])){
				 
				$rrall = curl_post_token(api_link.'admin/garage/list/export');  
	   			$fn =  $this->exportcsvdata($rrall->data,'car_export');
			}
			if(isset($_GET['prodelid'])){
				$deldata = $_GET['prodelid'];
				$did = urldecode($deldata);
				$did = spl_decode($did);
				$res = curl_del_token(api_link.'admin/garage/delete/'.$did); 

				header('Content-Type: application/json; charset=utf-8');
				echo json_encode($res);  
				exit;		 
			}
			if(isset($_GET['getdata'])  && $_GET['getdata']=="Y"){
			 		


			 			$dd['limit'] = $this->limit;
						if(isset($_GET['offset'])){
							$off = $_GET['offset'];
							$dd['offset'] = ($off-1)*$this->limit;
						}
						/////////////--------------------------------/
						if(isset($_GET['search']) && $_GET['search']!=''){					 
							$dd['search'] =  urldecode($_GET['search']);
						}
						if(isset($_GET['min_date']) && $_GET['min_date']!=''){					 
							$dd['min_date'] =  $_GET['min_date'];
						}
						if(isset($_GET['max_date']) && $_GET['max_date']!=''){					 
							$dd['max_date'] =  $_GET['max_date'];
						}



					$usedcar = curl_post_token(api_link.'admin/garage/list',$dd); 
			 		$out = array(); $o=0;
			 		if(isset($usedcar->data)){
			 			foreach ($usedcar->data as $kv) {
				 			$out[$o]= $kv;
				 			$out[$o]->spl_encode= spl_encode($kv->id); 
				 			$o++;
				 		}
			 		}
			 		

			 		$usedcar->data = $out;

				 	header('Content-Type: application/json; charset=utf-8');
				 	echo json_encode($usedcar); 
				 	exit;
			}
		


		$this->load->view('admin/garage.php',$this->data);
	}
	public function garage_add(){

		$this->data['customers'] = $ff = curl_post_token(api_link . 'admin/customer/list', []);
		$this->data['manufacturer'] = $gg = curl_post_token(api_link . 'master/manufacturer/list', []);
		$this->data['model'] = $gg = curl_post_token(api_link . 'master/model/list', []);
		$this->data['fuel'] = $ss = curl_post_token(api_link . 'master/fuel/list', []);
		$this->data['city'] = $ss = curl_post_token(api_link . 'master/city/list', []);

		// print_result($gg);exit;


		if($_POST)
		{
			$data = $this->input->post();
			
			///$r = $this->db->insert('usedcar',$data);

			if(isset($data['thumb_img']) && $data['thumb_img']!=''){
				unset($data['slim']);
				unset($data['thumb_img']);	
				/////
				$th = Slim::getImages('thumb_img'); 
				$name_th = $th[0]['input']['name']; 
				$data_th = $th[0]['output']['data'];
				$file_th = Slim::saveFile($data_th, $name_th, 'uploads/usedcar');
				$data['thumb'] =base_url('uploads/usedcar/').$file_th['name'];
			}
			////////////pic1

			if(isset($data['thumb_img1']) && $data['thumb_img1']!='' ){
				unset($data['slim']);
				unset($data['thumb_img1']);	
				/////
				$th1 = Slim::getImages('thumb_img1');
				$name_th1 = $th1[0]['input']['name']; 
				$data_th1 = $th1[0]['output']['data'];
				$file_th1 = Slim::saveFile($data_th1, $name_th1, 'uploads/usedcar');
				$data['pic1'] =base_url('uploads/usedcar/').$file_th1['name'];
			}

			////////////pic2

			if(isset($data['thumb_img2']) && $data['thumb_img2']!='' ){
				unset($data['slim']);
				unset($data['thumb_img2']);	
				/////
				$th2 = Slim::getImages('thumb_img2');
				$name_th2 = $th2[0]['input']['name']; 
				$data_th2 = $th2[0]['output']['data'];
				$file_th2 = Slim::saveFile($data_th2, $name_th2, 'uploads/usedcar');
				$data['pic2'] =base_url('uploads/usedcar/').$file_th2['name'];
			}

			////////////pic3

			if(isset($data['thumb_img3']) && $data['thumb_img3']!=''){
				unset($data['slim']);
				unset($data['thumb_img3']);	
				/////
				$th3 = Slim::getImages('thumb_img3');
				$name_th3 = $th3[0]['input']['name']; 
				$data_th3 = $th3[0]['output']['data'];
				$file_th3 = Slim::saveFile($data_th3, $name_th3, 'uploads/usedcar');
				$data['pic3'] =base_url('uploads/usedcar/').$file_th3['name'];
			}

			////////////pic4

			if(isset($data['thumb_img4']) && $data['thumb_img4']!='' ){
				unset($data['slim']);
				unset($data['thumb_img4']);	
				/////
				$th4 = Slim::getImages('thumb_img4');
				$name_th4 = $th4[0]['input']['name']; 
				$data_th4 = $th4[0]['output']['data'];
				$file_th4 = Slim::saveFile($data_th4, $name_th4, 'uploads/usedcar');
				$data['pic4'] =base_url('uploads/usedcar/').$file_th4['name'];
			}
			unset($data['thumb_img']);
			unset($data['thumb_img1']);
			unset($data['thumb_img2']);
			unset($data['thumb_img3']);
			unset($data['thumb_img4']); 

		    //////print_result($data);exit;

			$rr = curl_post_token(api_link.'master/usedcar/add',$data);
			

			if($rr->status==1)
			{
			 	$smsg= "Data created Successfully";
			 	$typ='success';
			}
			 else
			{
			 	$smsg= $rr->message;
			 	$typ='error';
			}
			$this->session->set_flashdata($typ,$smsg);
			redirect(base_url("admin/usedcar/"));
		}

		$this->data['heading']  = 'Car Add';
		$this->data['btn']  = 'Submit';

		$this->load->view('admin/usedcar_form',$this->data);
	}
	public function garage_edit($id){

		

		$this->data['myid'] =   $myid = $did = spl_decode($id);
	    $this->data['city'] = $city = $this->db->query('SELECT * FROM city')->result();
	    $this->data['info'] = $info = $this->db->query('SELECT * FROM garage_mst WHERE id=' . $myid)->row();
	    $this->data['cc'] = $dd = $this->db->query('SELECT * FROM category WHERE parent_id IS NULL')->result();

	    $this->data['selected_categories'] = $this->db->select('cat_id')
	        ->from('garage_cat')
	        ->where('garage_id', $myid)
	        ->get()
	        ->result_array(); 
	    
	    // Convert the result to a simple array of IDs
	    $this->data['selected_categories'] = array_column($this->data['selected_categories'], 'cat_id');

	    // print_result($dd);exit;

	    if ($_POST) {
	        $data = $this->input->post();

	        unset($data['slim']);
	        unset($data['thumb_img']);
	        
	        
	        $categories = isset($data['categories']) ? $data['categories'] : [];
	        unset($data['categories']);  

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

	            $this->session->set_flashdata('success', 'Record Updated Successfully');
	            redirect(base_url('admin/garage'));
	        } else {
	            $this->session->set_flashdata('Error', 'Failed to Update Record. Please try again.');
	            redirect(base_url('admin/garage'));
	        }
	    }

		


		$this->data['heading']  = 'Gagare Edit';
		$this->data['btn']  = 'Update';

		$this->load->view('admin/garage_form',$this->data);
	}

























































	public function garage_details($uid=''){

		if($uid==''){
			redirect(base_url('admin/garage'));  
		}

		

		$this->data['dtl'] = $dtl = $this->db->query('SELECT *, 
				(select name from garage_package where id = garage_mst.garage_pack_id) as pk_nm,
				(select name from city where id = garage_mst.city_id) as city
			FROM garage_mst WHERE uniq_id = ?', [$uid])->row();

		$this->data['cats'] = $cats = $this->db->query('SELECT c.name FROM garage_cat gc JOIN category c ON c.id = gc.cat_id WHERE gc.garage_id = ?', [$dtl->id])->result();

		// print_result($cats);exit;
		$this->data['uid'] =  $uid;
		$this->data['heading'] =  $dtl->user_typ." Details";
		$this->load->view('admin/garage_details.php',$this->data);
	}

	public function garage_approve($uid=''){
		if($uid==''){
			redirect(base_url('admin/garage'));  
		}

		$ffm['is_approved'] = 1;
		$ffm['approved_on'] = date('Y-m-d H:i:s'); 
		$tt = $this->db->update('garage_mst',$ffm,array('uniq_id'=>$uid)); 
		 

		$this->session->set_flashdata('success','Record Updated Successfully');
		redirect(base_url('admin/garage'));
	}

	public function garage_suspend($uid=''){
		if($uid==''){
			redirect(base_url('admin/garage'));  
		}

		$ffm['status'] = 3;
		// $ffm['suspend_unsuspend_reason'] = ;
		$ffm['approved_on'] = date('Y-m-d H:i:s'); 
		$tt = $this->db->update('garage_mst',$ffm,array('uniq_id'=>$uid)); 
		 

		$this->session->set_flashdata('success','Record Updated Successfully');
		redirect(base_url('admin/garage'));
	}
	public function garage_unsuspend($uid=''){
		if($uid==''){
			redirect(base_url('admin/garage'));  
		}

		$ffm['status'] = 1;
		// $ffm['suspend_unsuspend_reason'] = ;
		$ffm['approved_on'] = date('Y-m-d H:i:s'); 
		$tt = $this->db->update('garage_mst',$ffm,array('uniq_id'=>$uid)); 
		 

		$this->session->set_flashdata('success','Record Updated Successfully');
		redirect(base_url('admin/garage'));
	}

	 

	 public function garage_package(){

		$this->data['gp'] = $gp = $this->db->query('SELECT * from garage_package WHERE status = 1')->result();

		$this->load->view('admin/garage_package.php',$this->data);
	}

	public function garage_package_add(){

		if($_POST)
		{
			$data = $this->input->post();

			$r = $this->db->insert('garage_package',$data);
			

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
			redirect(base_url("admin/garage_package/"));
		}

		$this->data['heading'] = "Garage Package Add";
		$this->load->view('admin/garage_package_form.php',$this->data);
	}

	public function garage_package_edit($id){
		$this->data['info']  =$info= $this->db->query('select * from garage_package where id='.$id)->row();
		
		if($_POST)
	    { 
   	        $data = $this->input->post();			

	        $this->db->where('id', $id);
	        $m = $this->db->update('garage_package',$data);
	        $this->session->set_flashdata('success','Record Upadated Successfully');
	        redirect(base_url('admin/garage_package'));
	    }
		$this->data['heading'] = "Garage Package Edit";
		$this->load->view('admin/garage_package_form.php',$this->data);
	}
	public function garage_package_delete($x){
		$this->db->query('DELETE from garage_package where id='.$x);
		$this->session->set_flashdata('success','Record Deleted Successfully');
		redirect(base_url('admin/garage_package'));
	}

	
	




	public function car_booking_list(){

		///$this->data['dp'] = $dp = $this->db->query('SELECT * from job_card WHERE status = 1')->result();

		// print_result($dp);exit;


		
		$this->load->view('admin/car_booking_list.php',$this->data);
	}




	public function jobcard(){

			if(isset($_GET['reset'])){
				redirect(base_url('admin/jobcard'));	 
		  	}
		  	if(isset($_GET['export'])){
				 
				$rrall = curl_post_token(api_link.'admin/jobcard/list/export',@$_SESSION['export_param']);  

				$vv = [
				    (object) ['name' => 'TranId', 'field' => 'transaction_id'],
				    (object) ['name' => 'JobHeading', 'field' => 'job_heading'],				    
				    (object) ['name' => 'Customer', 'field' => 'customer_name'],				    
				    (object) ['name' => 'Phone', 'field' => 'customer_phone'],				    
				    (object) ['name' => 'Email', 'field' => 'customer_email'],				    
				    (object) ['name' => 'City', 'field' => 'city_name'],				    
				    (object) ['name' => 'CCategory', 'field' => 'cat_name'],				    
				];
				 
	   			$fn =  $this->exportcsvdata($rrall->data,'livebooking_export',$vv);
			}
			if(isset($_GET['prodelid'])){
				$deldata = $_GET['prodelid'];
				$did = urldecode($deldata);
				$did = spl_decode($did);
				$res = curl_del_token(api_link.'admin/jobcard/delete/'.$did); 

				header('Content-Type: application/json; charset=utf-8');
				echo json_encode($res);  
				exit;		 
			}
			if(isset($_GET['getdata'])  && $_GET['getdata']=="Y"){
			 			$dd['limit'] = $this->limit;
						if(isset($_GET['offset'])){
							$off = $_GET['offset'];
							$dd['offset'] = ($off-1)*$this->limit;
						}
						/////////////--------------------------------/
						if(isset($_GET['search']) && $_GET['search']!=''){					 
							$dd['search'] =  urldecode($_GET['search']);
						}
						if(isset($_GET['min_date']) && $_GET['min_date']!=''){					 
							$dd['min_date'] =  $_GET['min_date'];
						}
						if(isset($_GET['max_date']) && $_GET['max_date']!=''){					 
							$dd['max_date'] =  $_GET['max_date'];
						}

					$this->session->set_userdata('export_param', $dd);

					$usedcar = curl_post_token(api_link.'admin/jobcard/list',$dd);  
			 		$out = array(); $o=0;
			 		if(isset($usedcar->data)){
			 			foreach ($usedcar->data as $kv) {
				 			$out[$o]= $kv;
				 			$out[$o]->spl_encode= spl_encode($kv->id); 
				 			$o++;
				 		}
			 		}



			 		

			 		$usedcar->data = $out;
				 	header('Content-Type: application/json; charset=utf-8');
				 	echo json_encode($usedcar); 
				 	exit;
			}





		//$this->data['dp'] = $dp = $this->db->query('SELECT * from job_card WHERE status = 1 order by id desc')->result();

		// print_result($dp);exit;


		
		$this->load->view('admin/jobcard.php',$this->data);
	}

	public function jobcard_details($tid=''){
		$this->data['myid'] = $this->myid = $myid = $_SESSION['id'];
		//$this->data['job'] = $job = $this->db->query('SELECT * , (select count(*)as num from job_card_bids WHERE job_card_id = job_card.id ) as bid_oount from job_card WHERE transaction_id="'.$tid.'"')->row();


		$this->data['job'] = $job = $this->db->query('SELECT *, (SELECT name from car_manufacturer WHERE id = job_card.car_manufacturer_id ) as car_manufacturer
				, (SELECT name from car_model WHERE id = job_card.car_model_id ) as car_model
				, (SELECT name from fuel_type WHERE id = job_card.car_fuel_type_id ) as fuel_type
			from job_card WHERE transaction_id="'.$tid.'"')->row();


		$this->data['bids'] = $bids = $this->db->query('SELECT * from job_card_bids WHERE job_card_id="'.$job->id.'"')->result(); 

		 

		 $this->data['heading'] = "Jobcard Details";
		$this->load->view('admin/jobcard_details',$this->data);
	}
	public function booking_list($typ=''){


			if(isset($_GET['reset'])){
				redirect(base_url('admin/booking_list'));	 
		  	}
		  	if(isset($_GET['export'])){
				 
				$rrall = curl_post_token(api_link.'admin/bookings/list/export');  
	   			$fn =  $this->exportcsvdata($rrall->data,'data_export');
			}
			if(isset($_GET['prodelid'])){
				$deldata = $_GET['prodelid'];
				$did = urldecode($deldata);
				$did = spl_decode($did);
				$res = curl_del_token(api_link.'admin/bookings/delete/'.$did); 

				header('Content-Type: application/json; charset=utf-8');
				echo json_encode($res);  
				exit;		 
			}
			if(isset($_GET['getdata'])  && $_GET['getdata']=="Y"){
			 		


			 			$dd['limit'] = $this->limit;
						if(isset($_GET['offset'])){
							$off = $_GET['offset'];
							$dd['offset'] = ($off-1)*$this->limit;
						}
						/////////////--------------------------------/
						if(isset($_GET['search']) && $_GET['search']!=''){					 
							$dd['search'] =  urldecode($_GET['search']);
						}
						if(isset($_GET['min_date']) && $_GET['min_date']!=''){					 
							$dd['min_date'] =  $_GET['min_date'];
						}
						if(isset($_GET['max_date']) && $_GET['max_date']!=''){					 
							$dd['max_date'] =  $_GET['max_date'];
						}



					$usedcar = curl_post_token(api_link.'admin/bookings/list',$dd); 
			 		$out = array(); $o=0;
			 		if(isset($usedcar->data)){
			 			foreach ($usedcar->data as $kv) {
				 			$out[$o]= $kv;
				 			$out[$o]->spl_encode= spl_encode($kv->id); 
				 			$o++;
				 		}
			 		}
			 		

			 		$usedcar->data = $out;

				 	header('Content-Type: application/json; charset=utf-8');
				 	echo json_encode($usedcar); 
				 	exit;
			}






		$this->data['dp'] = $dp = $this->db->query('SELECT *,
			(SELECT fname from garage_mst where id = booking_mst.garage_id) as g_nm
		 from booking_mst WHERE status = 1')->result();

		// print_result($dp);exit;


		
		$this->load->view('admin/booking_list.php',$this->data);
	}
	public function booking_details($bid=''){ 
		if($bid==''){
			redirect(base_url('admin/booking_list'));  
		}


		$this->data['book_info'] = $book_info = $this->db->query('select *,
			(SELECT name from car_manufacturer WHERE id = booking_mst.car_manufacturer_id) as m_nm,
			(SELECT name from car_model WHERE id = booking_mst.car_model_id) as car_model_nm,
			(SELECT name from car_model WHERE id = booking_mst.car_model_id) as fuel_nm

		 from booking_mst WHERE booking_id="'.$bid.'"')->row();


		if(isset($book_info->package_id) && $book_info->package_id>0){
				$this->data['pkg_info'] = $pkg_info = $this->db->query('select * from package_mst WHERE id='.$book_info->package_id)->row();
		}


		//echo 'select * from customer WHERE id='.$book_info->cust_id;
		$this->data['cust_info'] = $cust_info = $this->db->query('select * from customer WHERE id='.$book_info->cust_id)->row(); 
		$this->data['garage_info'] = $garage_info = $this->db->query('select * from garage_mst WHERE id='.$book_info->garage_id)->row(); 

		 
		// print_result($cust_info);  exit; 
		$this->data['heading'] = "Booking Details";
		$this->load->view('admin/booking_details',$this->data);
	} 
	public function cancel_booking($bid=''){
		if($bid==''){
			redirect(base_url('admin/booking_list'));  
		}


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

		 
		 
		$this->data['heading'] = "Cancel Booking";
		$this->load->view('admin/cancel_booking',$this->data);
	}





	public function userrole($id=''){ 

			if($id==""){
				redirect(base_url('admin/staffrole'));
			}
			$did = $id; 

			$kk['showall']=1; 
			$res = curl_post_token(api_link.'master/staffrole/list/'.$id,$kk);
			$this->data['res']= $res->data; 
			// echo api_link.'master/staffrole/list/'.$id;
			// print_result($res);exit;


			$rr = curl_get_token(api_link.'master/Projectmodules');
			$this->data['project']= $pj = $rr->data;
			$this->data['project_group']= $pjr = $rr->data_group;


			// print_result($pj);
			// print_result($pjr);

			// $vv = array_search_multidim($pj,'group_name','CONFIGURATION');

			// print_result($vv);


			//exit;


			if($_POST){
				$rr=$_POST; 

				//print_result($rr);exit;


				$oo = array(); $o=0;
				foreach ($pj as $pp) {
					if(isset($rr[$pp->id.'_module_name']) && $rr[$pp->id.'_module_name']=='on'){
						$oo[$o]['role_id']= $rr['role_id'];
						$oo[$o]['module_id']= $pp->id;
						$oo[$o]['add']= (isset($rr[$pp->id.'_isadd']) && $rr[$pp->id.'_isadd']=='on')?1:0;
						$oo[$o]['edit']= (isset($rr[$pp->id.'_isedit']) && $rr[$pp->id.'_isedit']=='on')?1:0;
						$oo[$o]['remove']= (isset($rr[$pp->id.'_isdel']) && $rr[$pp->id.'_isdel']=='on')?1:0;
						

						 
						

						$o++;
					}
				}


				$resz = curl_post_token(api_link.'master/Rolemodule/addbatch',$oo);


					 


				

				if($resz->status==1){
					$this->session->set_flashdata('success',$resz->message);				
					redirect(base_url('admin/staffrole'));
				}else{
					$this->session->set_flashdata('error',$resz->message);
					redirect(base_url('admin/staffrole/'));

				}
			}



			$qq['role_id'] = $did;
			$mr = curl_get_token(api_link.'master/Rolemodule',$qq);
			$this->data['myrolez']=@$mr->data;





			$this->data['heading']  = 'User Role';
			$this->data['btn']  = 'Submit';

			$this->load->view('admin/userrole',$this->data);
		}
	public function staff(){

		
			if(isset($_GET['reset'])){
				

				redirect(base_url('admin/staff'));	 
		  	}			
			if(isset($_GET['prodelid'])){
				$deldata = $_GET['prodelid'];
				$did = urldecode($deldata);
				$did = spl_decode($did);
				$res = curl_del_token(api_link.'master/staff/delete/'.$did);

				header('Content-Type: application/json; charset=utf-8');
				echo json_encode($res);  
				exit;		 
			}








		 if(isset($_GET['getdata'])  && $_GET['getdata']=="Y"){
		 		


		 			$dd['limit'] = $this->limit;
					if(isset($_GET['offset'])){
						$off = $_GET['offset'];
						$dd['offset'] = ($off-1)*$this->limit;
					}
					/////////////--------------------------------/
					if(isset($_GET['search']) && $_GET['search']!=''){					 
						$dd['search'] =  urldecode($_GET['search']);
					}

				$staff = curl_post_token(api_link.'master/staff/list',$dd); 
		 		$out = array(); $o=0;
		 		foreach ($staff->data as $kv) {
		 			$out[$o]= $kv;
		 			$out[$o]->spl_encode= spl_encode($kv->id); 
		 			$o++;
		 		}

		 		$staff->data = $out;

			 	header('Content-Type: application/json; charset=utf-8');
			 	echo json_encode($staff); 
			 	exit;
		 }
		$this->load->view('admin/staff.php',$this->data);
	}
	public function staff_add(){
		if($_POST)
		{
			$data = $this->input->post();
			 
			$data['supervisor_id']='1';
			$data['user_password'] = md5($data['user_password']);
			$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   			$data['staff_id'] = substr(str_shuffle($characters), 0, 8);
			///$r = $this->db->insert('staff',$data);

			$rr = curl_post_token(api_link.'master/staff/add',$data);
			

			if($rr->status==1)
			{
			 	$smsg= "Data created Successfully";
			 	$typ='success';
			}
			 else
			{
			 	$smsg= $rr->message;
			 	$typ='error';
			}
			$this->session->set_flashdata($typ,$smsg);
			redirect(base_url("admin/staff/"));
		}

		$this->data['heading']  = 'Staff Add';
		$this->data['btn']  = 'Submit';
		$this->data['staff_role']   = $staff_role =  $this->db->query('SELECT * FROM staff_role WHERE status = 1 ORDER BY name ')->result();



		$this->load->view('admin/staff_form',$this->data);
	}


	public function staff_edit($did){
		$id = spl_decode($did);

		$this->data['info']  =$info= $this->db->query('select * from staff where id='.$id)->row();
		$this->data['staff_role']   = $staff_role =  $this->db->query('SELECT * FROM staff_role WHERE status = 1 ORDER BY name ')->result();

		if($_POST)
		{
			$data = $this->input->post();
			 
			$data['supervisor_id']=1;

			$rr = curl_post_token(api_link.'master/staff/edit/'.$id,$data);


			// print_result($data);exit;
			

			if($rr->status==1)
			{
			 	$smsg= "Data updated Successfully";
			 	$typ='success';
			}
			else
			{
			 	$smsg= $rr->message;
			 	$typ='error';
			}
			$this->session->set_flashdata($typ,$smsg);
			redirect(base_url("admin/staff/"));
		}



		$this->data['heading'] = 'Edit Staff';
    	$this->data['btn'] = 'Update';
    	$this->data['typ'] = 'edit';
		$this->load->view('admin/staff_form',$this->data);
	}




	// public function servicecat($typ=''){		
	// 	$this->crudmaker("xmlz/servicecat.xml",$typ);		 
	// }

	// public function servicePackagemaster($typ=''){		
	// 	$this->crudmaker("xmlz/packagemaster.xml",$typ);		 
	// }

	public function ecomproduct($typ=''){		
		$this->crudmaker("xmlz/ecomproduct.xml",$typ);		 
	}


	public function product() {

		if($_POST){			 
			$this->session->set_userdata('pp_search', $_POST);
			redirect(base_url('admin/product'));
		}
		if(isset($_GET['reset'])){			 
			unset($_SESSION['pp_search']);
			redirect(base_url('admin/product'));
		}


		$eq ='';
		if(isset($_SESSION['pp_search']['searches'])){
			$qq = $_SESSION['pp_search']['searches'];
			$eq =' AND (name like "%'.$qq.'%"  OR product_info like  "%'.$qq.'%"  ) '; 
		}


		$this->data['main'] = $main = $this->db->query('SELECT * FROM ecom_product WHERE is_master = 1 '.$eq.' and master_id is null  ORDER BY id DESC')->result();	 
		
		$this->load->view('admin/product', $this->data);  
	}
	public function product_add(){
		$this->data['brands'] = $this->db->query('SELECT * FROM ecom_brand WHERE 1 ORDER BY id ASC')->result();


		$this->data['parent_categories'] = $this->db->query('SELECT * FROM ecom_category WHERE parent_id IS NULL ORDER BY id ASC')->result();
		$this->data['l2_categories'] = $this->db->query('SELECT * FROM ecom_category WHERE parent_id is not null ')->result();

		$this->data['car_man'] = $car_man = $this->db->query('select * from car_manufacturer WHERE status = 1')->result(); 
		$this->data['car_model'] = $car_model = $this->db->query('select * from car_model WHERE status = 1')->result(); 
		$this->data['fuel_type'] = $fuel_type = $this->db->query('select * from fuel_type WHERE status = 1')->result(); 
		 
		

		if ($_POST) {
			$data = $this->input->post();

			unset($data['slim']);
			unset($data['thumb']);

			// ///
			$th = Slim::getImages('thumb');
			$name_th = $th[0]['input']['name'];
			$data_th = $th[0]['output']['data'];
			$file_th = Slim::saveFile($data_th, $name_th, 'uploads/product');
			$data['thumb'] = base_url('uploads/product') . '/' . $file_th['name'];

			// Handle Pic1 Upload
			$pic1 = Slim::getImages('pic1');
			$name_pic1 = $pic1[0]['input']['name'];
			$data_pic1 = $pic1[0]['output']['data'];
			$file_pic1 = Slim::saveFile($data_pic1, $name_pic1, 'uploads/product');
			$data['pic1'] = base_url('uploads/product') . '/' . $file_pic1['name'];

			// Handle Pic2 Upload
			$pic2 = Slim::getImages('pic2');
			$name_pic2 = $pic2[0]['input']['name'];
			$data_pic2 = $pic2[0]['output']['data'];
			$file_pic2 = Slim::saveFile($data_pic2, $name_pic2, 'uploads/product');
			$data['pic2'] = base_url('uploads/product') . '/' . $file_pic2['name'];

			// Handle Pic3 Upload
			$pic3 = Slim::getImages('pic3');
			$name_pic3 = $pic3[0]['input']['name'];
			$data_pic3 = $pic3[0]['output']['data'];
			$file_pic3 = Slim::saveFile($data_pic3, $name_pic3, 'uploads/product');
			$data['pic3'] = base_url('uploads/product') . '/' . $file_pic3['name'];

			// Handle Pic4 Upload
			$pic4 = Slim::getImages('pic4');
			$name_pic4 = $pic4[0]['input']['name'];
			$data_pic4 = $pic4[0]['output']['data'];
			$file_pic4 = Slim::saveFile($data_pic4, $name_pic4, 'uploads/product');
			$data['pic4'] = base_url('uploads/product') . '/' . $file_pic4['name'];

			$data['is_master'] = 1;
			$r = $this->db->insert('ecom_product', $data);

			if ($r) {
				$smsg = 'Data created Successfully';
				$typ = 'success';
			} else {
				$smsg = 'Error Occurs while adding data';
				$typ = 'error';
			}
			$this->session->set_flashdata($typ, $smsg);
			redirect(base_url('admin/product/'));
		}




		$this->load->view('admin/product_form',$this->data);
	}

	public function product_edit($id){
		$this->data['brands'] = $this->db->query('SELECT * FROM ecom_brand WHERE 1 ORDER BY id ASC')->result();

		$this->data['info']  =$info= $this->db->query('select * from ecom_product where  id='.$id)->row();
		$this->data['parent_categories'] = $this->db->query('SELECT * FROM ecom_category WHERE parent_id IS NULL   ORDER BY id ASC')->result();
		$this->data['l2_categories'] = $this->db->query('SELECT * FROM ecom_category WHERE parent_id is not null ')->result();

		$this->data['car_man'] = $car_man = $this->db->query('select * from car_manufacturer WHERE status = 1')->result(); 
		$this->data['car_model'] = $car_model = $this->db->query('select * from car_model WHERE status = 1')->result(); 
		$this->data['fuel_type'] = $fuel_type = $this->db->query('select * from fuel_type WHERE status = 1')->result();
		 

		if ($_POST) { 
			$data = $this->input->post();			 
			unset($data['slim']);
			unset($data['thumb']);
		
			// Handle Thumb
			$th = Slim::getImages('thumb');
			$name_th = $th[0]['input']['name'];
			if ($name_th != $info->thumb) {
				$data_th = $th[0]['output']['data'];
				$file_th = Slim::saveFile($data_th, $name_th, 'uploads/product');
				$data['thumb'] = base_url('uploads/product') . '/' . $file_th['name'];
			}
		
			// Handle Pic1
			$pic1 = Slim::getImages('pic1');
			$name_pic1 = $pic1[0]['input']['name'];
			if ($name_pic1 != $info->pic1) {
				$data_pic1 = $pic1[0]['output']['data'];
				$file_pic1 = Slim::saveFile($data_pic1, $name_pic1, 'uploads/product');
				$data['pic1'] = base_url('uploads/product') . '/' . $file_pic1['name'];
			}
		
			// Handle Pic2
			$pic2 = Slim::getImages('pic2');
			$name_pic2 = $pic2[0]['input']['name'];
			if ($name_pic2 != $info->pic2) {
				$data_pic2 = $pic2[0]['output']['data'];
				$file_pic2 = Slim::saveFile($data_pic2, $name_pic2, 'uploads/product');
				$data['pic2'] = base_url('uploads/product') . '/' . $file_pic2['name'];
			}
		
			// Handle Pic3
			$pic3 = Slim::getImages('pic3');
			$name_pic3 = $pic3[0]['input']['name'];
			if ($name_pic3 != $info->pic3) {
				$data_pic3 = $pic3[0]['output']['data'];
				$file_pic3 = Slim::saveFile($data_pic3, $name_pic3, 'uploads/product');
				$data['pic3'] = base_url('uploads/product') . '/' . $file_pic3['name'];
			}
		
			// Handle Pic4
			$pic4 = Slim::getImages('pic4');
			$name_pic4 = $pic4[0]['input']['name'];
			if ($name_pic4 != $info->pic4) {
				$data_pic4 = $pic4[0]['output']['data'];
				$file_pic4 = Slim::saveFile($data_pic4, $name_pic4, 'uploads/product');
				$data['pic4'] = base_url('uploads/product') . '/' . $file_pic4['name'];
			}
		
			$this->db->where('id', $id);
			$m = $this->db->update('ecom_product', $data);
			$this->session->set_flashdata('success', 'Record Updated Successfully');
			redirect(base_url('admin/product'));
		}
		
		$this->data['ptyp'] = 'edit'; 

		$this->load->view('admin/product_form',$this->data);
	}
	public function product_delete($x){
		$this->db->query('DELETE from ecom_product where id='.$x);
		$this->session->set_flashdata('success','Record Deleted Successfully');
		redirect(base_url('admin/product'));
	}



	public function product_orders($typ=''){

			if(isset($_GET['reset'])){
				redirect(base_url('admin/product_orders'));	 
		  	}
		  	if(isset($_GET['export'])){
				 
				$rrall = curl_post_token(api_link.'admin/Productorder/list/export');  
	   			$fn =  $this->exportcsvdata($rrall->data,'data_export');
			}
			// if(isset($_GET['prodelid'])){
			// 	$deldata = $_GET['prodelid'];
			// 	$did = urldecode($deldata);
			// 	$did = spl_decode($did);
			// 	$res = curl_del_token(api_link.'admin/Productorder/delete/'.$did); 

			// 	header('Content-Type: application/json; charset=utf-8');
			// 	echo json_encode($res);  
			// 	exit;		 
			// }
			if(isset($_GET['getdata'])  && $_GET['getdata']=="Y"){
			 		


			 			$dd['limit'] = $this->limit;
						if(isset($_GET['offset'])){
							$off = $_GET['offset'];
							$dd['offset'] = ($off-1)*$this->limit;
						}
						/////////////--------------------------------/
						if(isset($_GET['search']) && $_GET['search']!=''){					 
							$dd['search'] =  urldecode($_GET['search']);
						}
						if(isset($_GET['min_date']) && $_GET['min_date']!=''){					 
							$dd['min_date'] =  $_GET['min_date'];
						}
						if(isset($_GET['max_date']) && $_GET['max_date']!=''){					 
							$dd['max_date'] =  $_GET['max_date'];
						}



					$usedcar = curl_post_token(api_link.'admin/Productorder/list',$dd); 
			 		$out = array(); $o=0;
			 		if(isset($usedcar->data)){
			 			foreach ($usedcar->data as $kv) {
				 			$out[$o]= $kv;
				 			$out[$o]->spl_encode= spl_encode($kv->id); 
				 			$o++;
				 		}
			 		}
			 		

			 		$usedcar->data = $out;

				 	header('Content-Type: application/json; charset=utf-8');
				 	echo json_encode($usedcar); 
				 	exit;
			}



		 

 



		$this->load->view('admin/product_orders',$this->data);
	}



	public function order_details($pid=''){
 

		if($pid==''){
			redirect(base_url('admin/product_orders'));  
		}

		 


		$this->data['orderdtl'] = $orderdtl = $this->db->query('
			    SELECT 
			        eod.id,  eod.closer_otp, eod.order_id, eod.product_id, eod.garage_id, eod.product_name, eod.qty, eod.price, 
			        eod.platform_fee, eod.gst_percent, eod.gst_amount, eod.sub_total, eod.is_homedelivery, 
			        eod.delivery_status, eod.delivered_on, eod.is_paid, eod.payment_mode, eod.status, 
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
			        AND eod.id = ' . $pid . '   ')->row(); 


		
		 


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
   	        	 
		        $m = $this->db->update('ecom_order_details',$data,array('id'=>$pid));


		        $this->session->set_flashdata('success','Booking Closed Successfully');
		        redirect(base_url('mechanic/product_orders'));
   	        }else{
   	        	//echo '---------';  exit;
   	        	$this->session->set_flashdata('Failed','OTP Did not Match');
   	        	redirect(base_url('mechanic/order_details/' . $pid));

   	        }   			

	        
	    }



	    $this->data['heading'] = 'Product Order Details: ';
		$this->load->view('admin/order_details',$this->data); 
	}






















	public function servicepackage() {
		if($_POST){			 
			$this->session->set_userdata('sp_search', $_POST);
			redirect(base_url('admin/servicepackage'));
		}
		if(isset($_GET['reset'])){			 
			unset($_SESSION['sp_search']);
			redirect(base_url('admin/servicepackage'));
		}


		$eq ='';
		if(isset($_SESSION['sp_search']['searches'])){
			$qq = $_SESSION['sp_search']['searches'];

			$eq =' AND (name like "%'.$qq.'%" OR short_info like "%'.$qq.'%" OR info like "%'.$qq.'%"  ) '; 
		}


		$this->data['main'] = $main = $this->db->query('SELECT *,
			(select name from category where id = package_mst.category_id) as cat_name,
			(select count(*) from package_mst poo where poo.master_id = package_mst.id) as pack_count
		 FROM package_mst WHERE is_master = 1 and  master_id is null '.$eq.'  ORDER BY id DESC')->result();	 

		 
		
		$this->load->view('admin/servicepackage', $this->data); 
	}

	public function servicepackage_add(){
		$this->data['parent_categories'] = $this->db->query('SELECT * FROM category WHERE parent_id IS NULL ORDER BY id ASC')->result();
		$this->data['l2_categories'] = $this->db->query('SELECT * FROM category WHERE parent_id is not null ')->result();
		 
		

		if($_POST)
		{
			$data = $this->input->post();
		

			unset($data['slim']);
			unset($data['thumb']);
			 
			

			/////
			$th = Slim::getImages('thumb');
			$name_th = $th[0]['input']['name']; 
			$data_th = $th[0]['output']['data'];
			$file_th = Slim::saveFile($data_th, $name_th, 'uploads/package');
			$data['thumb'] =base_url('uploads/package').'/'.$file_th['name'];

			$data['is_master'] = 1; 
			$r = $this->db->insert('package_mst',$data); 
			

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
			redirect(base_url("admin/servicepackage/"));
		}




		$this->load->view('admin/servicepackage_form',$this->data);
	}

	public function servicepackage_edit($id){
		$this->data['info']  =$info= $this->db->query('select * from package_mst where  id='.$id)->row();
		$this->data['parent_categories'] = $this->db->query('SELECT * FROM category WHERE parent_id IS NULL   ORDER BY id ASC')->result();
		$this->data['l2_categories'] = $this->db->query('SELECT * FROM category WHERE parent_id is not null ')->result();
		 

		if($_POST)
		{ 
			$data = $this->input->post();			 
			unset($data['slim']);
			unset($data['thumb']);	
			$th = Slim::getImages('thumb');
			$name_th = $th[0]['input']['name'];
			if($name_th == $info->thumb)
			{
			}else{
				$data_th = $th[0]['output']['data'];
				$file_th = Slim::saveFile($data_th, $name_th, 'uploads/package');
				$data['thumb'] =base_url('uploads/package').'/'.$file_th['name'];
			}

			 
			

			$this->db->where('id', $id);
			$m = $this->db->update('package_mst',$data);
			$this->session->set_flashdata('success','Record Upadated Successfully');
			redirect(base_url('admin/servicepackage'));
		}
		$this->data['ptyp'] = 'edit'; 

		$this->load->view('admin/servicepackage_form',$this->data);
	}
	public function servicepackage_delete($pkg_master_id=""){ 
		/*
			Before deleting a service name from a package, check if and mechanic/garage has been taken this or not
			if not taken then admin can delete it
			* short hand query
			$query = $this->db->get_where('package_mst', ['user_typ' => 'Garage', 'master_id' => $pkg_master_id]);
		*/
		$this->db->where('user_typ', 'Garage');
		$this->db->where('master_id', $pkg_master_id);
		$query = $this->db->get('package_mst');

		if ($query->num_rows() == 0) {
			$this->db->where('id', $pkg_master_id);
			$this->db->delete('package_mst');

			$this->session->set_flashdata('success', 'Record Deleted Successfully');
		} else {
			$this->session->set_flashdata('error', 'Service has already been taken by the mechanic, can\'t delete');
		}
		redirect(base_url('admin/servicepackage'));
	}















	public function servicecat() {

		if($_POST){			 
			$this->session->set_userdata('sc_search', $_POST);
			redirect(base_url('admin/servicecat'));
		}

		if(isset($_GET['reset'])){			 
			unset($_SESSION['sc_search']);
			redirect(base_url('admin/servicecat'));
		}


		$eq ='';

		if(isset($_SESSION['sc_search']['searches'])){
			$qq = $_SESSION['sc_search']['searches'];

			$eq =' AND name like "%'.$qq.'%"'; 
		}


		


		$main_categories = $this->db->query('SELECT * , (select count(*) from package_mst WHERE category_id = category.id) as pack_count
			FROM category WHERE parent_id IS NULL '.$eq.' ORDER BY id ASC')->result();




		$this->data['subcategories'] = $subcategories = $this->db->query('SELECT *,  (select count(*) from package_mst WHERE category_id = category.id) as pack_count FROM category WHERE parent_id IS NOT NULL ORDER BY parent_id, id ASC')->result();
		$out = array(); $o = 0;
		foreach ($main_categories as $mm) {
			$out [$o] = $mm;
			$out [$o]->child =  array_search_multidim($subcategories, 'parent_id', $mm->id);
			$o++;
		}
		$this->data['cat'] = $out; 
		$this->load->view('admin/servicecat', $this->data);
	}

	public function servicecat_add(){
		$this->data['parent_categories'] = $this->db->query('SELECT * FROM category WHERE parent_id IS NULL ORDER BY id ASC')->result();
		$this->data['label_two_categories'] = $this->db->query('SELECT * FROM category WHERE parent_id in (select id from category where parent_id is null)  ')->result();
		 
		

		if($_POST)
		{
			$data = $this->input->post();
		

			unset($data['slim']);
			unset($data['thumb']);
			 
			

			/////
			$th = Slim::getImages('thumb');
			$name_th = $th[0]['input']['name']; 
			$data_th = $th[0]['output']['data'];
			$file_th = Slim::saveFile($data_th, $name_th, 'uploads/servicecat');
			$data['thumb'] = base_url('uploads/servicecat').'/'.$file_th['name'];
			$data['thumb_path'] =  $file_th['name']; 

			if($data['parent_id']>0){}else{
				unset($data['parent_id']);
			}
			$r = $this->db->insert('category',$data);
			

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
			redirect(base_url("admin/servicecat/"));
		}




		$this->load->view('admin/servicecat_form',$this->data);
	}
	public function servicecat_edit($id){
		$this->data['info']  =$info= $this->db->query('select * from category where  id='.$id)->row();
		$this->data['parent_categories'] = $this->db->query('SELECT * FROM category WHERE parent_id IS NULL   ORDER BY id ASC')->result();
		$this->data['l2_categories'] = $this->db->query('SELECT * FROM category WHERE parent_id in (select id from category where parent_id is null)  ')->result();
		 

		if($_POST)
		{ 
			$data = $this->input->post();

			 
			unset($data['slim']);
			unset($data['thumb']);
			 

			$th = Slim::getImages('thumb');
			$name_th = $th[0]['input']['name'];
			if($name_th == $info->thumb)
			{
			}else{
				$data_th = $th[0]['output']['data'];
				$file_th = Slim::saveFile($data_th, $name_th, 'uploads/servicecat');
				$data['thumb'] =base_url('uploads/servicecat').'/'.$file_th['name'];
			}

			if($data['parent_id']>0){}else{
				unset($data['parent_id']);
			}

			

			$this->db->where('id', $id);
			$m = $this->db->update('category',$data);
			$this->session->set_flashdata('success','Record Upadated Successfully');
			redirect(base_url('admin/servicecat'));
		}
		$this->data['ptyp'] = 'edit';

		$this->load->view('admin/servicecat_form.php',$this->data);
	}
	public function servicecat_delete($x){
		$this->db->query('DELETE from category where id='.$x);
		$this->session->set_flashdata('success','Record Deleted Successfully');
		redirect(base_url('admin/servicecat'));
	}





	public function ecomcategory() {

		if($_POST){			 
			$this->session->set_userdata('ec_search', $_POST);
			redirect(base_url('admin/ecomcategory'));
		}
		if(isset($_GET['reset'])){			 
			unset($_SESSION['ec_search']);
			redirect(base_url('admin/ecomcategory'));
		}


		$eq ='';
		if(isset($_SESSION['ec_search']['searches'])){
			$qq = $_SESSION['ec_search']['searches'];

			$eq =' AND (name like "%'.$qq.'%"  ) '; 
		}



		$main_categories = $this->db->query('SELECT * FROM ecom_category WHERE parent_id IS NULL '.$eq.' ORDER BY id ASC')->result();
		$subcategories = $this->db->query('SELECT * FROM ecom_category WHERE parent_id IS NOT NULL '.$eq.'  ORDER BY parent_id, id ASC')->result();


		$out = array(); $o = 0;

		foreach ($main_categories as $mm) {
			$out [$o] = $mm;
			$out [$o]->child =  array_search_multidim($subcategories, 'parent_id', $mm->id);
			$o++;
		}

		//print_result($out);  exit;

		$this->data['cat'] = $out; 		 
		$this->load->view('admin/ecomcategory.php', $this->data); 
	}
	public function ecomcategory_add(){
		$this->data['parent_categories'] = $this->db->query('SELECT * FROM ecom_category WHERE parent_id IS NULL ORDER BY id ASC')->result();
		if($_POST)
		{
			$data = $this->input->post();
		

			unset($data['slim']);
			unset($data['thumb']);
			 
			

			/////
			$th = Slim::getImages('thumb');
			$name_th = $th[0]['input']['name']; 
			$data_th = $th[0]['output']['data'];
			$file_th = Slim::saveFile($data_th, $name_th, 'uploads/developers');
			$data['thumb'] =$file_th['name'];

			if($data['parent_id']>0){}else{
				unset($data['parent_id']);
			}

			 

			$r = $this->db->insert('ecom_category',$data);
			

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
			redirect(base_url("admin/ecomcategory/"));
		}




		$this->load->view('admin/ecomcategory_add',$this->data);
	}
	public function ecomcategory_edit($id){
		$this->data['info']  =$info= $this->db->query('select * from ecom_category where  id='.$id)->row();
		$this->data['parent_categories'] = $this->db->query('SELECT * FROM ecom_category WHERE parent_id IS NULL AND id != '.$id.' ORDER BY id ASC')->result();
		

		if($_POST)
		{ 
			$data = $this->input->post();

			if(empty($data['parent_id'])) {
	            $data['parent_id'] = NULL;
	        }

			unset($data['slim']);
			unset($data['thumb']);
			 

			$th = Slim::getImages('thumb');
			$name_th = $th[0]['input']['name'];
			if($name_th == $info->thumb)
			{
			}else{
				$data_th = $th[0]['output']['data'];
				$file_th = Slim::saveFile($data_th, $name_th, 'uploads/developers');
				$data['thumb'] =$file_th['name'];
			}

			if($data['parent_id']>0){}else{
				unset($data['parent_id']);
			}

			

			$this->db->where('id', $id);
			$m = $this->db->update('ecom_category',$data);
			$this->session->set_flashdata('success','Record Upadated Successfully');
			redirect(base_url('admin/ecomcategory'));
		}
		$this->load->view('admin/ecomcategory_edit.php',$this->data);
	}
	public function ecomcategory_delete($x){
		$this->db->query('DELETE from ecom_category where id='.$x);
		$this->session->set_flashdata('success','Record Deleted Successfully');
		redirect(base_url('admin/ecomcategory'));
	}





	 


	public function usedcar(){

		
			if(isset($_GET['reset'])){				

				redirect(base_url('admin/usedcar'));	 
		  	}


		  	if(isset($_GET['export'])){
			 
				 
				 
				$rrall = curl_post_token(api_link.'master/usedcar/list/export');  
				//print_result($rrall); echo '--'; exit;
	   			$fn =  $this->exportcsvdata($rrall->data,'car_export');
			}


			if(isset($_GET['prodelid'])){
				$deldata = $_GET['prodelid'];
				$did = urldecode($deldata);
				$did = spl_decode($did);
				$res = curl_del_token(api_link.'master/usedcar/delete/'.$did);

				header('Content-Type: application/json; charset=utf-8');
				echo json_encode($res);  
				exit;		 
			}



		 if(isset($_GET['getdata'])  && $_GET['getdata']=="Y"){
		 		


		 			$dd['limit'] = $this->limit;
					if(isset($_GET['offset'])){
						$off = $_GET['offset'];
						$dd['offset'] = ($off-1)*$this->limit;
					}
					/////////////--------------------------------/
					if(isset($_GET['search']) && $_GET['search']!=''){					 
						$dd['search'] =  urldecode($_GET['search']);
					}
					if(isset($_GET['min_date']) && $_GET['min_date']!=''){					 
						$dd['min_date'] =  $_GET['min_date'];
					}
					if(isset($_GET['max_date']) && $_GET['max_date']!=''){					 
						$dd['max_date'] =  $_GET['max_date'];
					}



				$usedcar = curl_post_token(api_link.'master/usedcar/list',$dd); 
		 		$out = array(); $o=0;
		 		if(isset($usedcar->data)){
		 			foreach ($usedcar->data as $kv) {
			 			$out[$o]= $kv;
			 			$out[$o]->spl_encode= spl_encode($kv->id); 
			 			$o++;
			 		}
		 		}
		 		

		 		$usedcar->data = $out;

			 	header('Content-Type: application/json; charset=utf-8');
			 	echo json_encode($usedcar); 
			 	exit;
		 }
		$this->load->view('admin/usedcar.php',$this->data);
	}





	public function usedcar_add(){

		$this->data['customers'] = $ff = curl_post_token(api_link . 'admin/customer/list', []);
		$this->data['manufacturer'] = $gg = curl_post_token(api_link . 'master/manufacturer/list', []);
		$this->data['model'] = $gg = curl_post_token(api_link . 'master/model/list', []);
		$this->data['fuel'] = $ss = curl_post_token(api_link . 'master/fuel/list', []);
		$this->data['city'] = $ss = curl_post_token(api_link . 'master/city/list', []);

		// print_result($gg);exit;


		if($_POST)
		{
			$data = $this->input->post();
			
			///$r = $this->db->insert('usedcar',$data);

			if(isset($data['thumb_img']) && $data['thumb_img']!=''){
				unset($data['slim']);
				unset($data['thumb_img']);	
				/////
				$th = Slim::getImages('thumb_img'); 
				$name_th = $th[0]['input']['name']; 
				$data_th = $th[0]['output']['data'];
				$file_th = Slim::saveFile($data_th, $name_th, 'uploads/usedcar');
				$data['thumb'] =base_url('uploads/usedcar/').$file_th['name'];
			}
			////////////pic1

			if(isset($data['thumb_img1']) && $data['thumb_img1']!='' ){
				unset($data['slim']);
				unset($data['thumb_img1']);	
				/////
				$th1 = Slim::getImages('thumb_img1');
				$name_th1 = $th1[0]['input']['name']; 
				$data_th1 = $th1[0]['output']['data'];
				$file_th1 = Slim::saveFile($data_th1, $name_th1, 'uploads/usedcar');
				$data['pic1'] =base_url('uploads/usedcar/').$file_th1['name'];
			}

			////////////pic2

			if(isset($data['thumb_img2']) && $data['thumb_img2']!='' ){
				unset($data['slim']);
				unset($data['thumb_img2']);	
				/////
				$th2 = Slim::getImages('thumb_img2');
				$name_th2 = $th2[0]['input']['name']; 
				$data_th2 = $th2[0]['output']['data'];
				$file_th2 = Slim::saveFile($data_th2, $name_th2, 'uploads/usedcar');
				$data['pic2'] =base_url('uploads/usedcar/').$file_th2['name'];
			}

			////////////pic3

			if(isset($data['thumb_img3']) && $data['thumb_img3']!=''){
				unset($data['slim']);
				unset($data['thumb_img3']);	
				/////
				$th3 = Slim::getImages('thumb_img3');
				$name_th3 = $th3[0]['input']['name']; 
				$data_th3 = $th3[0]['output']['data'];
				$file_th3 = Slim::saveFile($data_th3, $name_th3, 'uploads/usedcar');
				$data['pic3'] =base_url('uploads/usedcar/').$file_th3['name'];
			}

			////////////pic4

			if(isset($data['thumb_img4']) && $data['thumb_img4']!='' ){
				unset($data['slim']);
				unset($data['thumb_img4']);	
				/////
				$th4 = Slim::getImages('thumb_img4');
				$name_th4 = $th4[0]['input']['name']; 
				$data_th4 = $th4[0]['output']['data'];
				$file_th4 = Slim::saveFile($data_th4, $name_th4, 'uploads/usedcar');
				$data['pic4'] =base_url('uploads/usedcar/').$file_th4['name'];
			}
			unset($data['thumb_img']);
			unset($data['thumb_img1']);
			unset($data['thumb_img2']);
			unset($data['thumb_img3']);
			unset($data['thumb_img4']); 

		    //////print_result($data);exit;

			$rr = curl_post_token(api_link.'master/usedcar/add',$data);
			

			if($rr->status==1)
			{
			 	$smsg= "Data created Successfully";
			 	$typ='success';
			}
			 else
			{
			 	$smsg= $rr->message;
			 	$typ='error';
			}
			$this->session->set_flashdata($typ,$smsg);
			redirect(base_url("admin/usedcar/"));
		}

		$this->data['heading']  = 'Car Add';
		$this->data['btn']  = 'Submit';

		$this->load->view('admin/usedcar_form',$this->data);
	}

	public function usedcar_edit($id){

		$did = spl_decode($id);

		$this->data['info']  =$info= $this->db->query('select * from used_car where  id='.$did)->row();  

		$this->data['customers'] = $ff = curl_post_token(api_link . 'admin/customer/list', []);
		$this->data['manufacturer'] = $gg = curl_post_token(api_link . 'master/manufacturer/list', []);
		$this->data['model'] = $gg = curl_post_token(api_link . 'master/model/list', []);
		$this->data['fuel'] = $ss = curl_post_token(api_link . 'master/fuel/list', []);
		$this->data['city'] = $ss = curl_post_token(api_link . 'master/city/list', []);

		// print_result($gg);exit;


		if($_POST)
		{
			$data = $this->input->post();

			// print_result($data);  exit;

			unset($data['slim']);
			unset($data['thumb_img']);
			unset($data['thumb_img1']);
			unset($data['thumb_img2']);
			unset($data['thumb_img3']);
			unset($data['thumb_img4']);

			$th = Slim::getImages('thumb_img');

			if (!empty($th) && isset($th[0]['input']['name'])) {
		        $name_th = $th[0]['input']['name'];
		        if ($name_th != $info->thumb) {
		            $data_th = $th[0]['output']['data'];
		            $file_th = Slim::saveFile($data_th, $name_th, 'uploads/usedcar');
		            $data['thumb'] = base_url('uploads/usedcar/') . $file_th['name'];
		        }
		    }else{
		            $data['thumb'] = '';

		    }


		    //print_result($data);  exit; 

			/////////////////////////pic1
			 $th1 = Slim::getImages('thumb_img1');
		    if (!empty($th1) && isset($th1[0]['input']['name'])) {
		        $name_th1 = $th1[0]['input']['name'];
		        if ($name_th1 != $info->pic1) {
		            $data_th1 = $th1[0]['output']['data'];
		            $file_th1 = Slim::saveFile($data_th1, $name_th1, 'uploads/usedcar');
		            $data['pic1'] = base_url('uploads/usedcar/') . $file_th1['name'];
		        }
		    }else{
		            $data['pic1'] = '';

		    }

			/////////////////////////pic2
			$th2 = Slim::getImages('thumb_img2');
		    if (!empty($th2) && isset($th2[0]['input']['name'])) {
		        $name_th2 = $th2[0]['input']['name'];
		        if ($name_th2 != $info->pic2) {
		            $data_th2 = $th2[0]['output']['data'];
		            $file_th2 = Slim::saveFile($data_th2, $name_th2, 'uploads/usedcar');
		            $data['pic2'] = base_url('uploads/usedcar/') . $file_th2['name'];
		        }
		    }else{
		            $data['pic2'] = '';

		    }

			/////////////////////////pic3
			 $th3 = Slim::getImages('thumb_img3');
		    if (!empty($th3) && isset($th3[0]['input']['name'])) {
		        $name_th3 = $th3[0]['input']['name'];
		        if ($name_th3 != $info->pic3) {
		            $data_th3 = $th3[0]['output']['data'];
		            $file_th3 = Slim::saveFile($data_th3, $name_th3, 'uploads/usedcar');
		            $data['pic3'] = base_url('uploads/usedcar/') . $file_th3['name'];
		        }
		    }else{
		            $data['pic3'] = '';

		    }

			/////////////////////////pic4
			 $th4 = Slim::getImages('thumb_img4');
		    if (!empty($th4) && isset($th4[0]['input']['name'])) {
		        $name_th4 = $th4[0]['input']['name'];
		        if ($name_th4 != $info->pic4) {
		            $data_th4 = $th4[0]['output']['data'];
		            $file_th4 = Slim::saveFile($data_th4, $name_th4, 'uploads/usedcar');
		            $data['pic4'] = base_url('uploads/usedcar/') . $file_th4['name'];
		        }
		    }else{
		            $data['pic4'] = '';

		    }

			 
			// print_result($data);exit; 

			$rr = curl_post_token(api_link.'master/usedcar/edit/'.$did,$data);
			

			if($rr->status==1)
			{
			 	$smsg= "Data created Successfully";
			 	$typ='success';
			}
			 else
			{
			 	$smsg= $rr->message;
			 	$typ='error';
			}
			$this->session->set_flashdata($typ,$smsg);
			redirect(base_url("admin/usedcar/"));
		}

		$this->data['heading']  = 'Car Add';
		$this->data['btn']  = 'Update';

		$this->load->view('admin/usedcar_form',$this->data);
	}



























 
















	     
    

 

 


	public function blog_list(){

		$this->data['vfnies'] = $data = $this->db->query('SELECT * from pages  WHERE PAGE_TYPE="Blog"')->result();


		
		$this->load->view('admin/blog_list.php',$this->data);
	}
	public function blog(){
		if($_POST)
		{
			$data = $this->input->post();
			$data['page_type']='Blog';
			/*$data['added_by']=$this->session->userdata('id');
			$data['added_on']=date('Y-m-d H:i:s');
			*/

			unset($data['slim']);
			unset($data['thumb_img']);
			unset($data['banner']);
			
				
			/////
				$th = Slim::getImages('thumb_img');
				$name_th = $th[0]['input']['name']; 
				$data_th = $th[0]['output']['data'];
				$file_th = Slim::saveFile($data_th, $name_th, 'uploads/vfn/thumb');
				$data['thumbnail'] =$file_th['name'];



				$thb = Slim::getImages('banner');
				$name_thb = $thb[0]['input']['name']; 
				$data_thb = $thb[0]['output']['data'];
				$file_thb = Slim::saveFile($data_thb, $name_thb, 'uploads/vfn/banner');
				$data['banner'] =$file_thb['name'];


				$r = $this->db->insert('pages',$data);
			

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
			redirect(base_url("admin/blog_list/"));
		}




		$this->load->view('admin/blog',$this->data);
	}
	public function blog_edit($id){
		$this->data['info']  =$info= $this->db->query('select * from pages where PAGE_TYPE="Blog" AND page_id='.$id)->row();
		if($_POST)
	    { 
   	        $data = $this->input->post();

   	        

			unset($data['slim']);
			unset($data['thumb_img']);
			unset($data['banner']);

			$th = Slim::getImages('thumb_img');
			$name_th = $th[0]['input']['name'];
			if($name_th == $info->thumbnail)
			{
			}else{
				$data_th = $th[0]['output']['data'];
				$file_th = Slim::saveFile($data_th, $name_th, 'uploads/vfn/thumb');
				$data['thumbnail'] =$file_th['name'];
			}

			

	        $this->db->where('page_id', $id);
	        $m = $this->db->update('pages',$data);
	        $this->session->set_flashdata('success','Record Upadated Successfully');
	        redirect(base_url('admin/blog_list'));
	    }
		$this->load->view('admin/blog_edit.php',$this->data);
	}
	public function blog_delete($x){
		$this->db->query('DELETE from pages where page_id='.$x);
		$this->session->set_flashdata('success','Record Deleted Successfully');
		redirect(base_url('admin/blog_list'));
	}






	public function page(){
		if($_POST)
		{
			$data = $this->input->post();
			$data['page_type']='Page';
			$r = $this->db->insert('pages',$data);
			

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
			redirect(base_url("admin/page_list/"));
		}


		$this->load->view('admin/page',$this->data);
	}
	public function page_list(){

		$this->data['vfnies'] = $data = $this->db->query('SELECT * from pages  
			WHERE PAGE_TYPE="Page"
			ORDER BY cat desc


			')->result();


		
		$this->load->view('admin/page_list.php',$this->data);
	}
	public function page_edit($id){
		$this->data['info']  =$info= $this->db->query('select * from pages where PAGE_TYPE="Page" AND page_id='.$id)->row();
		if($_POST)
	    { 
   	        $data = $this->input->post();


	        $this->db->where('page_id', $id);
	        $m = $this->db->update('pages',$data);
	        $this->session->set_flashdata('success','Record Upadated Successfully');
	        redirect(base_url('admin/page_list'));
	    }
		$this->load->view('admin/page_edit.php',$this->data);
	}
	public function page_delete($x){
		$this->db->query('DELETE from pages where page_id='.$x);
		$this->session->set_flashdata('success','Record Deleted Successfully');
		redirect(base_url('admin/page_list'));
	}


 
 

	// public function change_password(){
	// 	$myinfo = $this->myinfo ;
	// 	$id=$myinfo->id;
	// 	$ps=$myinfo->user_password;
	// 	if($_POST)
	//     { 
 //   	        $pdata = $_POST;
 //   	        $pass = $pdata['new_password'];
 //   	        $data['user_password']=md5($pass);
	// 	        $this->db->where('id',$id);
	// 	        $m = $this->db->update('user_mst',$data);
		        
	// 	        $this->session->set_flashdata('success','Record Upadated Successfully');
	// 	        redirect(base_url($this->uri->segment(1).'/change_password'));
	//     }
		

	// 	$this->load->view('admin/change_password',$this->data);
	// }



	/////////CHANGE PASSWORD API BASED////////////////////////////////////////


	public function change_password() {
	    $myinfo = $this->myinfo;

	    if ($_POST) {
	        $pdata = $_POST;

	        if (empty($pdata['old_password']) || empty($pdata['new_password']) || empty($pdata['confirm_password'])) {
	            $this->session->set_flashdata('error', 'All fields are required.');
	            redirect(base_url($this->uri->segment(1) . '/change_password'));
	        }

	        if ($pdata['new_password'] !== $pdata['confirm_password']) {
	            $this->session->set_flashdata('error', 'New Password and Confirm Password do not match.');
	            redirect(base_url($this->uri->segment(1) . '/change_password'));
	        }

	        $data['old_password'] = $pdata['old_password'];
	        $data['password'] = $pdata['new_password'];

	        $response = curl_post_token(api_link . 'auth/changepass', $data);

	        if ($response && isset($response->status)) {
	            if ($response->status == 1) {
	                $this->session->set_flashdata('success', $response->message);
	            } else {
	                $this->session->set_flashdata('error', $response->message ?? 'Unexpected error.');
	            }
	        } else {
	            $this->session->set_flashdata('error', 'API request failed or returned an invalid response.');
	        }

	        redirect(base_url($this->uri->segment(1) . '/change_password'));
	    }

	    $this->load->view('admin/change_password', $this->data);
	}










	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('backend'),'refresh');
	}


 
	public function site_settings(){
		
		$this->data['settings'] = $x = $this->db->query('SELECT * FROM  common')->row();

		if($_POST){
			$d = $_POST;
			//print_result($d); 
			if($_FILES  && $_FILES['company_logo']['size']>0){
				//echo '----';

				$file=$_FILES['company_logo']['name'];
				$dd = explode('.', $file);
				$ext = $dd[count($dd)-1];
				$dnm= date('Ymdhis');

				$destination="uploads/".$dnm.'.'.$ext;
				move_uploaded_file($_FILES['company_logo']['tmp_name'], $destination);
				$d['company_logo']= $dnm.'.'.$ext;
			}	
			if($_FILES  && $_FILES['company_logo2']['size']>0){
				

				$file=$_FILES['company_logo2']['name'];
				$dd = explode('.', $file);
				$ext = $dd[count($dd)-1];
				$dnm= date('Ymdhis');

				$destination="uploads/".$dnm.'_2.'.$ext;
				move_uploaded_file($_FILES['company_logo2']['tmp_name'], $destination);
				$d['company_logo2']= $dnm.'_2.'.$ext;
			}

			//print_result($d);  exit;

			$this->db->update('common',$d);
			$this->session->set_flashdata('success','Record update Successfully!!');	
			redirect(base_url('admin/site_settings'));
		}
		

		$this->load->view('admin/site_setting', $this->data);
	}
	public function update_content(){
	    if($_POST){
	      $dd = $_POST;
	      $ed_id = $dd['ed_id'];

	      $content = $dd['content'];
	      $cf = $this->db->query('SELECT * FROM page_contents where ed_id="'.$ed_id.'"  ')->row();


	      $cfn = (array) $cf;
	      if(count($cfn)>0){
	        $p_data['content']=$content;
	        $upd = array('ed_id'=>$ed_id);
	        $vv = $this->db->update('page_contents',$p_data,$upd);
	        if($vv){
	          echo 'Updated Successfully';
	        }else{
	          echo 'Could Not Update. Contact Web master';
	        }
	      }else{
	        $p_data['content']=$content;
	        $p_data['ed_id']=$ed_id;
	        $vv = $this->db->insert('page_contents',$p_data);
	        if($vv){
	          echo 'Inserted Successfully';
	        }else{
	          echo 'Could Not inserted. Contact Web master';
	        }
	      }
	    }else{
	      echo 'Pehli fursat me NIKAAAL';
	    }
	 }



	 public function analytics(){
		
		$this->data['settings'] = $x = $this->db->query('SELECT * FROM  common')->row();
		if($_POST){
			$d = $_POST;
			$this->db->update('common',$d);
			$this->session->set_flashdata('success','Record update Successfully!!');	
			redirect(base_url('admin/analytics'));
		}		

		$this->load->view('admin/analytics', $this->data);
	}
	public function rbt(){
		
		$this->data['settings'] = $x = $this->db->query('SELECT * FROM  common')->row();
		if($_POST){
			$d = $_POST;
			$this->db->update('common',$d);
			$this->session->set_flashdata('success','Record update Successfully!!');	
			redirect(base_url('admin/rbt'));
		}		

		$this->load->view('admin/rbt', $this->data);
	}
	public function sitemap(){
		
		$this->data['settings'] = $x = $this->db->query('SELECT * FROM  common')->row();
		if($_POST){
			$d = $_POST;
			$this->db->update('common',$d);
			$this->session->set_flashdata('success','Record update Successfully!!');	
			redirect(base_url('admin/sitemap'));
		}		

		$this->load->view('admin/sitemap', $this->data);
	}


	public function seo_list(){

		 
		$this->data['seoies'] = $data = $this->db->query('SELECT * from seo_inputs')->result();

		$this->load->view('admin/seo_list',$this->data);
	}
	public function seo_delete($x){
		$this->db->query('DELETE from seo_inputs where si_id='.$x);
		$this->session->set_flashdata('success','Record Deleted Successfully');
		redirect(base_url('admin/seo_list'));
	}
	public function seo_add(){ 
		if($_POST)
		{
			$data = $this->input->post();
			$data['insert_date']=date('Y-m-d H:i:s');
			
			$r = $this->db->insert('seo_inputs',$data);
			
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
			redirect(base_url("admin/seo_list/"));
		}
		$this->data['heading']  = 'Add Onpage Seo';
	    $this->data['button']  = 'Submit';
		$this->load->view('admin/seo',$this->data); 
	}
	public function seo_edit($id){
		$this->data['info']  =$info= $this->db->query('select * from seo_inputs where si_id='.$id)->row();
		if($_POST)
	    { 
   	        $data = $this->input->post();

	        $this->db->where('si_id', $id);
	        $m = $this->db->update('seo_inputs',$data);
	        $this->session->set_flashdata('success','Record Upadated Successfully');
	        redirect(base_url('admin/seo_list'));
	    }
	    $this->data['heading']  = 'Edit Onpage Seo';
	    $this->data['button']  = 'Update';
		$this->load->view('admin/seo.php',$this->data);
	}






}