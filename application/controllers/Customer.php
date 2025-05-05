<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer extends Admin_Controller {
	function __construct() 
	{
		parent::__construct(); 
		$this->load->helper('string');  
		$this->load->library('Slim');  
		$this->load->helper('cookie'); 
 

		 
		$this->data['common']=$this->common = $cmn =  $this->db->query('SELECT * FROM common')->row();

		$this->data['mycity_id']=$this->mycity_id =  $mycity_id = (isset($_COOKIE['mycity_id']))?$_COOKIE['mycity_id']:19;
		$this->data['mycity_name']=$this->mycity_name =  $mycity_name = (isset($_COOKIE['mycity_name']))?$_COOKIE['mycity_name']:'Bhubaneswar';


		$this->data['allct']=$this->allct =  $allct = curl_get(api_link.'master/city');    


 



		$this->data['myid']= $this->myid =  $myid = $_SESSION['id'];
		$this->data['myinfo']=$this->myinfo = $myinfo =  $this->db->query('SELECT * FROM customer where id='.$myid)->row();


		$qq = 'SELECT  SUM(quantity) as num from add_to_cart ac WHERE   ac.customer_id = '.$myid; 
                $crtt = $this->db->query($qq)->row();

        $this->data['mycart_count']=   $crtt->num; 
        $curcart = $this->db->query('SELECT  product_id from add_to_cart ac WHERE   ac.customer_id = '.$myid)->result();
        $this->data['cur_cart_prod']= $cur_cart_prod = array_column( $curcart, 'product_id');  















		
		$this->data['mypackage']=$this->mypackage = $mypackage =  $this->db->query('SELECT * FROM carsell_package where id='.$myinfo->carsell_package_id)->row();



		$kyc_stat = $myinfo->kyc_status;
		if($kyc_stat==1){}else{
			$ex_url=array("customer/kyc","customer/logout");
			if(in_array(uri_string(),$ex_url)){				 
			}else{
				redirect(base_url("customer/kyc"), "refresh"); 
			}
		}


	






		 
		

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

 
	}  
 
 
	 

	

	public function index(){
		$myid =  $this->myid;
		$this->data['bd'] = $bd = $this->db->query('SELECT count(*) as num FROM booking_mst WHERE status = 1 and  cust_id='.$myid)->row();	


		$this->data['packs']= $packs =  $this->db->query('SELECT * FROM carsell_package WHERE monthly_price > '.$this->mypackage->monthly_price.' LIMIT 3')->result();

		$this->data['mypack'] = $mypack = $this->db->query('SELECT * FROM `carsell_package` WHERE id = (SELECT carsell_package_id FROM `customer` WHERE id="'.$this->myid.'")')->row(); 






		$this->load->view('customer/dash',$this->data);
	}



	

	public function upgradepack(){		 

		$this->data['packs']= $packs =  $this->db->query('SELECT * FROM carsell_package WHERE monthly_price > '.$this->mypackage->monthly_price)->result();

		$this->data['mypack'] = $mypack = $this->db->query('SELECT * FROM `carsell_package` WHERE id = (SELECT carsell_package_id FROM `customer` WHERE id="'.$this->myid.'")')->row();





		$this->load->view('customer/upgradepack',$this->data);
	}

	public function kyc()
	{
		$this->data['myid'] = $this->myid = $myid = $_SESSION['id'];
		$this->data['city'] = $city = $this->db->query('SELECT * FROM city')->result();
		$this->data['info'] = $info = $this->db->query('SELECT * FROM customer where id=' . $myid)->row();
		// print_result($info);exit;

		if ($_POST) {
			$data = $this->input->post();

			unset($data['slim']);
			unset($data['thumb_img']);

			$th = Slim::getImages('thumb_img');
			
			$name_th = $th[0]['input']['name'];
			if ($name_th == $info->thumb) {
			} else {
				$data_th = $th[0]['output']['data'];
				$file_th = Slim::saveFile($data_th, $name_th, 'uploads/customer/thumb');
				

				$data['thumb'] = base_url() . 'uploads/customer/thumb/' . $file_th['name'];
			}

			// print_result($data);exit;
			$data['google_address'] = $data['google_address'];  // Assign google address from form
			$data['lattitude'] = $data['lattitude'];  // Latitude
			$data['longitude'] = $data['longitude'];  // Longitude

			$data['kyc_status'] = 1;
			// $data['thumb'] = "nopic.jpg";
			$data['kyc_update_on'] = date('Y-m-d H:i:s');

			$this->db->where('id', $myid);
			$m = $this->db->update('customer', $data);
			if ($m) {
				$this->session->set_flashdata('success', 'Record Upadated Successfully');
				redirect(base_url('customer/index'));
			} else {
				$this->session->set_flashdata('Error', 'Failed to Update Record. Please try again.');
				redirect(base_url('customer/kyc'));
			}
		}
		$this->load->view('customer/kyc', $this->data);
	}

	 


	public function editprofile(){		 
		$this->data['myid'] = $this->myid = $myid = $_SESSION['id'];
		$this->data['city'] = $city =  $this->db->query('SELECT * FROM city')->result();
		$this->data['info'] = $info = $this->db->query('SELECT * FROM customer where id='.$myid)->row(); 

		if($_POST)
	    { 
   	        $data = $this->input->post();   	        

			unset($data['slim']);
			unset($data['thumb_img']);

			$th = Slim::getImages('thumb_img');
			$name_th = $th[0]['input']['name'];
			if($name_th == $info->thumb)
			{
			}else{
				$data_th = $th[0]['output']['data'];
				$file_th = Slim::saveFile($data_th, $name_th, 'uploads/customer/thumb');
				// $data['thumb'] =$file_th['name'];
				$data['thumb'] =base_url().'uploads/customer/thumb/'.$file_th['name'];
			}

			// print_result($data);exit;
			
			$data['kyc_status'] = 1;
			// $data['thumb'] = "nopic.jpg";
       		$data['kyc_update_on'] = date('Y-m-d H:i:s');

	        $this->db->where('id', $myid);
	        $m = $this->db->update('customer',$data);
	        if ($m) {
	        	$this->session->set_flashdata('success','Record Upadated Successfully');
	        	redirect(base_url('customer/index'));
        } else {
        	$this->session->set_flashdata('Error','Failed to Update Record. Please try again.');
            redirect(base_url('customer/editprofile'));
        }
	    }
		$this->load->view('customer/editprofile2',$this->data);
	} 






	// public function booking_list(){
	// 	$myid =  $this->myid;
	// 	$this->data['bd'] = $bd = $this->db->query('SELECT *,
	// 		(SELECT garage_name from garage_mst WHERE id=booking_mst.garage_id) as g_nm
	// 	 FROM booking_mst WHERE status = 1 and  cust_id='.$myid.' ORDER BY id DESC')->result();

	// 	 // print_result($bd);exit;
		 
	// 	$this->data['heading'] = "Booking List";
	// 	$this->load->view('customer/booking_list',$this->data);
	// } 

	public function booking_list($typ=''){

		$myid =  $this->myid;
		
		$eq ='';
		if($typ=='' || $typ=='all'){
			$eq .=' ';
		}elseif ($typ=='active' ){
			$eq .=' AND  job_close_status = 0 ';
		}elseif ($typ=='completed' ){
			$eq .=' AND  job_close_status = 1 ';
		}

		 $this->data['typ'] =  $typ; 


		$mmq = 'SELECT *,
				CASE 
		        WHEN is_cancelled = 1 THEN "Cancelled"
		        WHEN job_close_status = 1 AND is_cancelled = 0 THEN "Completed"
		        WHEN job_close_status = 0 AND is_cancelled = 0 THEN "Active"
		        ELSE "Unknown"
		    END AS booking_status,
			(SELECT garage_name from garage_mst WHERE id=booking_mst.garage_id) as g_nm
		 FROM booking_mst WHERE status = 1 and  cust_id='.$myid.'  '.$eq.' ORDER BY id DESC';

		 
		$this->data['bd'] = $bd = $this->db->query($mmq)->result();

		 // print_result($bd);exit;
		 
		$this->data['heading'] = "Booking List";
		$this->load->view('customer/mybookings2',$this->data);
	} 


	// public function booking_details($bid=''){
	// 	if($bid==''){
	// 		redirect(base_url('customer/booking_list'));  
	// 	}


	// 	$this->data['book_info'] = $book_info = $this->db->query('select *,
	// 		(SELECT name from car_manufacturer WHERE id = booking_mst.car_manufacturer_id) as m_nm,
	// 		(SELECT name from car_model WHERE id = booking_mst.car_model_id) as car_model_nm,
	// 		(SELECT name from car_model WHERE id = booking_mst.car_model_id) as fuel_nm

	// 	 from booking_mst WHERE booking_id="'.$bid.'"')->row();
	// 	$this->data['pkg_info'] = $pkg_info = $this->db->query('select * from package_mst WHERE id='.$book_info->package_id)->row();
	// 	$this->data['cust_info'] = $cust_info = $this->db->query('select * from customer WHERE id='.$book_info->cust_id)->row(); 
	// 	$this->data['garage_info'] = $garage_info = $this->db->query('select * from garage_mst WHERE id='.$book_info->garage_id)->row(); 

	// 	if ($book_info->package_id > 0) {
 //        $this->data['pkg_info'] = $pkg_info = $this->db->query('SELECT * FROM package_mst WHERE id = '.$book_info->package_id)->row();
 //    } else {
 //        $this->data['pkg_info'] = null;  
 //    }




	// 	print_result($book_info);
	// 	print_result($pkg_info);
	// 	print_result($cust_info);
	// 	print_result($garage_info);

	// 	exit;
		 
	// 	$this->data['heading'] = "Booking Details";
	// 	$this->load->view('customer/booking_details',$this->data);
	// }

	public function booking_details($bid=''){
		if($bid==''){
			redirect(base_url('customer/booking_list2'));  
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

		// if ($book_info->package_id > 0) {
  //       $this->data['pkg_info'] = $pkg_info = $this->db->query('SELECT * FROM package_mst WHERE id = '.$book_info->package_id)->row();
  //   } else {
  //       $this->data['pkg_info'] = null;  
  //   }




		// print_result($book_info);
		// print_result($pkg_info);
		// print_result($cust_info);
		// print_result($garage_info);

		// exit;
		 
		$this->data['heading'] = "Booking Details";
		$this->load->view('customer/booking_details2',$this->data);
	}

	public function bookingcancel($bid=''){

		 
		 
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

   	        

   	        	 
   	        	$data['is_cancelled'] = 1;
   	        	$data['cancelled_by'] = 'M';
   	        	$data['cancelled_on'] = date('Y-m-d H:i:s');   	        	 
		        $m = $this->db->update('booking_mst',$data,array('booking_id'=>$bid));


		        $this->session->set_flashdata('success','Booking cancelled Successfully');
		        redirect(base_url('customer/booking_list/cancelled'));
   	           			

	        
	    }
		 

		$this->load->view('customer/bookingcancel.php',$this->data); 
	}


	public function givereview($bid=''){
			if($bid==''){
				redirect(base_url('customer/'));  
			}


			$this->data['book_info'] = $book_info = $this->db->query('select *,
				(SELECT name from car_manufacturer WHERE id = booking_mst.car_manufacturer_id) as m_nm,
				(SELECT name from car_model WHERE id = booking_mst.car_model_id) as car_model_nm,
				(SELECT name from car_model WHERE id = booking_mst.car_model_id) as fuel_nm

			 from booking_mst WHERE booking_id="'.$bid.'"')->row();

			 



			$this->data['cust_info'] = $cust_info = $this->db->query('select * from customer WHERE id='.$book_info->cust_id)->row(); 
			$this->data['garage_info'] = $garage_info = $this->db->query('select * from garage_mst WHERE id='.$book_info->garage_id)->row(); 


			$this->data['rvw_info'] = $rvw_info = $this->db->query('select * from review_mst WHERE typ="P" AND cust_id = "'.$book_info->cust_id.'" AND  typ_id='.$book_info->id)->row(); 


			if($_POST){
				$data = $_POST;
				$data['cust_id'] =$this->myid;
				$data['typ'] = 'P';
				$data['typ_id'] =$book_info->id;
				$data['garage_id'] =$book_info->garage_id;



				if(mycount($rvw_info )>0){
						$r = $this->db->update('review_mst',$data,array('id'=>$rvw_info->id)); 
						$insert_id = $rvw_info->id;
				}else{
					$r = $this->db->insert('review_mst',$data);
						$insert_id = $this->db->insert_id();
				}
				 	 
				
				if($r)
				{


					$zzp['is_reviewed'] = 1;
					$zzp['review_id'] = $insert_id;
					$rx = $this->db->update('booking_mst',$zzp,array('id'=>$book_info->id));


				 	$smsg= "Data created Successfully";
				 	$typ='success';
				}
				 else
				{
				 	$smsg= "Error Occurs while adding data";
				 	$typ='error';
				}
				$this->session->set_flashdata($typ,$smsg);
				redirect(base_url("customer/reviews/"));

				exit;
			}

	 
			 
			$this->data['heading'] = "Booking Details";
			$this->load->view('customer/givereview',$this->data);
	}





	 
    
	

	



	public function jobcard(){

		if($_POST){			 
			$this->session->set_userdata('jc_search', $_POST);
			redirect(base_url('customer/jobcard'));
		}
		if(isset($_GET['reset'])){			 
			unset($_SESSION['jc_search']);
			redirect(base_url('customer/jobcard'));  
		}


		$eq ='';
		if(isset($_SESSION['jc_search']['searches'])){
			$qq = $_SESSION['jc_search']['searches'];

			$eq =' AND (job_heading like "%'.$qq.'%" OR job_info like "%'.$qq.'%" OR cust_address like "%'.$qq.'%"   ) '; 
		}




		$this->data['myid'] = $this->myid = $myid = $_SESSION['id'];
		$this->data['job'] = $data = $this->db->query('SELECT * 
			, (select count(*)as num from job_card_bids WHERE job_card_id = job_card.id ) as bid_oount 
			, (select count(*)as num from job_card_bids WHERE job_card_id = job_card.id  and is_awarded = 1) as award_count 

			from job_card WHERE status in (1,2) AND  cust_id='.$myid.' '.$eq.' order by id desc')->result();
		 
		$this->load->view('customer/jobcard2',$this->data);  
	}

	public function product_orders(){


		$myid =  $this->myid;

		  
 

		$this->data['poo'] = $poo = $this->db->query('
			    SELECT 
			        eod.id, eod.order_id, eod.product_id, eod.garage_id, eod.product_name, eod.qty, eod.price, 
			        eod.platform_fee, eod.gst_percent, eod.gst_amount, eod.sub_total, eod.is_homedelivery, 
			        eod.delivery_status, eod.delivered_on, eod.is_paid, eod.payment_mode, eod.status, eod.closer_otp, eod.cancelation_otp, eod.status, eod.is_cancelled,eod.cancelled_on,
			        eo.city_id, eo.shipping_address, eo.shipping_phone, eo.shipping_email, eo.shipping_name,
			        ep.thumb,  ep.name AS product_name, ep.product_info,
			        (SELECT name FROM city WHERE id = eo.city_id) AS city_nm
			    FROM 
			        ecom_order_details eod
			    LEFT JOIN 
			        ecom_product ep ON eod.product_id = ep.id
			    LEFT JOIN 
			        ecom_order eo ON eod.order_id = eo.order_id
			    WHERE 
			        eod.status = 1 
			        AND eo.cust_id = ' . $myid . ' 
			    ORDER BY 
			        eod.id DESC
			')->result();


		 




		$this->load->view('customer/product_orders',$this->data);
	}

	public function order_details($pid=''){

		if($pid==''){
			redirect(base_url('mechanic/product_orders'));  
		}

		$myid =  $this->myid;

		 

		$this->data['orderdtl'] = $orderdtl = $this->db->query('
			    SELECT 
			        eod.id, eod.order_id, eod.product_id, eod.garage_id, eod.product_name, eod.qty, eod.price, 
			        eod.platform_fee, eod.gst_percent, eod.gst_amount, eod.sub_total, eod.is_homedelivery, 
			        eod.delivery_status, eod.delivered_on, eod.is_paid, eod.payment_mode, eod.status, eod.closer_otp, eod.cancelation_otp, eod.status, eod.is_cancelled,eod.cancelled_on,
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


		
		 

			$this->data['rvw_info'] = $rvw_info = $this->db->query('select * from review_mst WHERE typ="S" AND cust_id = "'.$this->myid.'" AND  typ_id='.$orderdtl->product_id)->row();  



 			if($_POST){
				$data = $_POST;
				$data['cust_id'] =$this->myid;
				$data['typ'] = 'S';
				$data['typ_id'] =$orderdtl->product_id;
				$data['garage_id'] =$orderdtl->garage_id;



				if(mycount($rvw_info )>0){
						$r = $this->db->update('review_mst',$data,array('id'=>$rvw_info->id)); 
						$insert_id = $rvw_info->id;
				}else{
					$r = $this->db->insert('review_mst',$data);
					$insert_id = $this->db->insert_id();
				}
				 	 
				
				if($r)
				{


					$zzp['is_reviewed'] = 1;
					$zzp['review_id'] = $insert_id;
					$rx = $this->db->update('ecom_order_details',$zzp,array('id'=>$book_info->id));


				 	$smsg= "Data created Successfully";
				 	$typ='success';
				}
				 else
				{
				 	$smsg= "Error Occurs while adding data";
				 	$typ='error';
				}
				$this->session->set_flashdata($typ,$smsg);
				redirect(base_url("customer/order_details/".$pid)); 

				exit;
			}



		$this->load->view('customer/order_details',$this->data);
	}

	
	// public function jobcard(){
	// 	$this->data['myid'] = $this->myid = $myid = $_SESSION['id'];
	// 	$this->data['job'] = $data = $this->db->query('SELECT *, (select count(*)as num from job_card_bids WHERE job_card_id = job_card.id ) as bid_oount from job_card WHERE status in (1,2) AND  cust_id='.$myid)->result();
		 
	// 	$this->load->view('customer/jobcard',$this->data);  
	// }
   
	// public function Jobcard_add(){
	// 	$this->data['myid'] = $this->myid = $myid = $_SESSION['id'];

	// 	$this->data['cc'] = $dd = $this->db->query('SELECT * from category')->result();

	// 	if($_POST)
	// 	{
	// 		$data = $this->input->post();

	// 		$data['cust_id'] = $myid;
	// 		$data['transaction_id'] = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 16);


	// 		unset($data['slim']);
	// 		unset($data['thumb_img']);
			 
			
				
	// 		/////
	// 		$th = Slim::getImages('thumb_img');
	// 		$name_th = $th[0]['input']['name']; 
	// 		$data_th = $th[0]['output']['data'];
	// 		$file_th = Slim::saveFile($data_th, $name_th, 'uploads/jobcard');
	// 		$data['thumb'] =base_url('uploads/jobcard/').$file_th['name'];




	// 		// print_result($data);exit;
 
	// 		$r = $this->db->insert('job_card',$data);
	// 		if($r)
	// 		{
	// 		 	$smsg= "Data created Successfully";
	// 		 	$typ='success';
	// 		}
	// 		 else
	// 		{
	// 		 	$smsg= "Error Occurs while adding data";
	// 		 	$typ='error';
	// 		}
	// 		$this->session->set_flashdata($typ,$smsg);
	// 		redirect(base_url("customer/jobcard/"));
	// 	}

	// 	$this->data['st'] = $data = $this->db->query('SELECT * from state ')->result();


	// 	$this->load->view('customer/jobcard_from',$this->data);
	// }

	public function Jobcard_add(){
		$this->data['myid'] = $this->myid = $myid = $_SESSION['id'];
		$this->data['mydata'] = $mydata = $this->db->query('SELECT * from customer WHERE id='.$myid)->row();


		$this->data['cc'] = $dd = $this->db->query('SELECT * from category')->result();
		$this->data['city'] = $ct = $this->db->query('SELECT * from city')->result();

		$this->data['car_man'] = $car_man = $this->db->query('select * from car_manufacturer WHERE status = 1')->result(); 
		$this->data['car_model'] = $car_model = $this->db->query('select * from car_model WHERE status = 1')->result(); 
		$this->data['fuel_type'] = $fuel_type = $this->db->query('select * from fuel_type WHERE status = 1')->result(); 



		$vv = curl_get(api_link.'master/category');
		$this->data['catz'] = $catz = @$vv->data;

		// print_result($catz);  exit;




		



		if($_POST)
		{
			$data = $mdata = $this->input->post();

			unset($data['cat_id1'],$data['cat_id2'],$data['cat_id3']);

			$data['cat_id'] = $mdata['cat_id1'];
			if(isset($mdata['cat_id2']) && $mdata['cat_id2']>0 ){
				$data['cat_id'] = $mdata['cat_id2'];
			}
			if(isset($mdata['cat_id3']) && $mdata['cat_id3']>0 ){
				$data['cat_id'] = $mdata['cat_id3'];
			}

			if($mydata->car_manufacturer_id>0){}else{
				$dx['car_manufacturer_id'] = $data['car_manufacturer_id'];
				$dx['car_model_id'] = $data['car_model_id'];
				$dx['car_fuel_type_id'] = $data['car_fuel_type_id'];

				$ff = $this->db->update('customer',$dx,array('id'=>$myid));
			}

			 







			// exit;

			$data['cust_id'] = $myid;
			$data['transaction_id'] = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 16);
			unset($data['slim']);
			unset($data['thumb_img']);
			unset($data['thumb_img2']);

				
			/////
			$th = Slim::getImages('thumb_img');
			if($th){

				$name_th = $th[0]['input']['name']; 
				$data_th = $th[0]['output']['data'];
				$file_th = Slim::saveFile($data_th, $name_th, 'uploads/jobcard');
				$data['thumb'] =base_url('uploads/jobcard/').$file_th['name'];

			}
			


			$th2 = Slim::getImages('thumb_img2');
			if($th2){
				$name_th2 = $th2[0]['input']['name']; 
				$data_th2 = $th2[0]['output']['data'];
				$file_th2 = Slim::saveFile($data_th2, $name_th2, 'uploads/jobcard');
				$data['thumb2'] =base_url('uploads/jobcard/').$file_th2['name'];
			}


			
			if (!empty($_FILES['audioFile']['name'])) {
	            $config['upload_path'] = 'uploads/audio/';
	            $config['allowed_types'] = 'mp3|wav|webm|ogg';
	            $config['max_size'] = 20480; // 20MB
	            $config['file_name'] = uniqid() . '_' . $_FILES['audioFile']['name']; 
	            $this->load->library('upload', $config);
	            if ($this->upload->do_upload('audioFile')) {
	                $uploadData = $this->upload->data();
	                $data['jc_aud'] =  base_url().'uploads/audio/' . $uploadData['file_name'];	                 
	            }

	        }
	        if (!empty($_FILES['videoFile']['name'])) {
	            $data['jc_vid'] =   $this->handleFileUpload('videoFile', 'video');
	        }

	        $this->load->helper('file');

	        if (!empty($this->input->post('recordedAudio'))) {
	            $audioData = base64_decode($this->input->post('recordedAudio'));
	            $fileName = 'recorded_' . uniqid() . '.webm';
	            $filePath = 'uploads/audio/' . $fileName;

	            if (write_file($filePath, $audioData)) {
	                // Save to database
	                $data['jc_aud'] =  base_url('uploads/audio/'.$fileName); 

	            }  
	        }

	        if (!empty($this->input->post('recordedVideo'))) {
	            $data['jc_vid'] = $this->handleBase64Upload($this->input->post('recordedVideo'), 'video', 'recorded_video_'.uniqid().'.webm');
	        }




	        unset($data['audioFile']); 	                 
	        unset($data['videoFile']); 	                 
	        unset($data['recordedAudio']);
	        unset($data['recordedVideo']);
			// print_result($data);exit;

 
			$r = $this->db->insert('job_card',$data);
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
			redirect(base_url("customer/jobcard/"));
		}

		$this->data['st'] = $data = $this->db->query('SELECT * from state ')->result();


		$this->load->view('customer/jobcard_form2',$this->data);
	}


	private function handleFileUpload($fieldName, $type) {
        $config['upload_path'] = 'uploads/'.$type.'/';
        $config['allowed_types'] = ($type === 'audio') ? 'mp3|wav|webm|ogg' : 'mp4|webm|avi|mov';
        $config['max_size'] = 51200; // 50MB
        $config['file_name'] = uniqid() . '_' . $_FILES[$fieldName]['name'];

        $this->load->library('upload', $config);
        if ($this->upload->do_upload($fieldName)) {
            $uploadData = $this->upload->data();
            return  base_url('uploads/audio/'.$uploadData['file_name']);	                 
        }
    }

    private function handleBase64Upload($base64Data, $type, $fileName) {
        $filePath = './uploads/' . $type . '/' . $fileName;
        $data = base64_decode($base64Data);
        
        if (write_file($filePath, $data)) {             
           return  base_url('uploads/'. $type.'/'.$fileName); 
        }
    }


     































	 

	public function jobcard_details($tid=''){
		$this->data['myid'] = $this->myid = $myid = $_SESSION['id'];
		$this->data['job'] = $job = $this->db->query('SELECT *, (SELECT name from car_manufacturer WHERE id = job_card.car_manufacturer_id ) as car_manufacturer
				, (SELECT name from car_model WHERE id = job_card.car_model_id ) as car_model
				, (SELECT name from fuel_type WHERE id = job_card.car_fuel_type_id ) as fuel_type
			from job_card WHERE transaction_id="'.$tid.'"')->row();

 


		$this->data['job_award'] = $job_award = $this->db->query('SELECT *  from job_card_bids WHERE job_card_id="'.$job->id.'" AND is_awarded = 1')->row();

		//echo 'SELECT *  from job_card_bids WHERE job_card_id="'.$job->id.'" AND is_awarded = 1';  

		//print_result($job_award); exit;





		$this->data['bids'] = $bids = $this->db->query('SELECT * , 
			(select garage_address from garage_mst WHERE id = job_card_bids.garage_id) as garage_address,
			(select count(*) as num from review_mst WHERE garage_id = job_card_bids.garage_id) as rv_count,
			(select ROUND(AVG(rating), 1) as num from review_mst WHERE garage_id = job_card_bids.garage_id) as rvz,
			(select garage_name from garage_mst WHERE id = job_card_bids.garage_id) as garage_name
			from job_card_bids WHERE job_card_id="'.$job->id.'"')->result(); 

		 

		 
		$this->load->view('customer/jobcard_details2',$this->data);
	}

	public function jobcard_del($tid=''){
		 
		$this->data['job'] = $job = $this->db->query('DELETE from job_card WHERE transaction_id="'.$tid.'"');
		redirect(base_url("customer/jobcard/"));  

 
 
	}



	// public function awardbid($bidid=''){
	// 	$this->data['myid'] = $this->myid = $myid = $_SESSION['id'];
	// 	$this->data['bid'] = $bid = $this->db->query('SELECT *  from job_card_bids WHERE bid_id="'.$bidid.'"')->row(); 
	// 	$this->data['jobcard'] = $jobcard = $this->db->query('SELECT *  from job_card WHERE id="'.$bid->job_card_id.'"')->row();  

	// 	$this->data['garage_info'] =  $garage_info = $this->db->query('select * from garage_mst WHERE id='.$bid->garage_id)->row(); 
	// 	$this->data['cust_info'] =  $cust_info = $this->db->query('select * from customer WHERE id='.$jobcard->cust_id)->row(); 


	// 	if($_POST){
	// 		$data = $_POST;
	// 		$data['booking_id'] = $booking_id = random_string('alnum', 16); 
	// 		$data['cust_id'] = $jobcard->cust_id; 
	// 		$data['garage_id'] = $bid->garage_id; 
	// 		$data['is_job_card'] = 1; 
	// 		$data['job_card_id'] = $bid->job_card_id;

	// 		$data['quote_price'] = $bid->price; 

	// 		$data['cust_name'] = $cust_info->fname; 
	// 		$data['cust_phone'] = $cust_info->phone; 
	// 		$data['cust_email'] = $cust_info->email; 

	// 		$data['garage_name'] = $garage_info->garage_name; 
	// 		$data['garage_email'] = $garage_info->garage_email; 
	// 		$data['garage_phone'] = $garage_info->garage_phone; 
	// 		$data['garage_lat'] = $garage_info->garage_lat; 
	// 		$data['user_typ'] = 'Customer'; 
	// 		$data['user_typ'] = $jobcard->cust_id; 

	// 		/////////QR CODE=======
	// 			 $b_link = base_url("bookingsuccess/".$booking_id);
	//         	 $rttt = $this->generate_qrcode($b_link,$booking_id);  
	//         	 $data['qrcode'] = $qr =  base_url().$rttt['file'];
	// 		/////////QR CODE=======

	// 		//print_result($data);  exit;


	// 		$r = $this->db->insert('booking_mst',$data);
	// 		if($rr)
	// 		{
	// 		 	$smsg= "Data created Successfully";
	// 		 	$typ='success';


	// 		 	///////////////EMAIL:::::
	// 					$txt='Hi Team,<br>
	// 					We have a Service Booked (Via JOBCARD)  in AUTOMOSS :<br> <br> 
	// 					BOOKING ID: '.$bid.'<br> <br>
	// 					<b>Find booking details Below:</b>
	// 					<img src="'.$qr.'" /><br> 
	// 					or Click Below Link: <br> 
	// 					<a style=" padding: 8px 20px; color:#fff; background: #c23200; text-align:center; font-weight:bold; text-decoration:none; font-size: 22px; " href="'.$b_link.'">Booking Details</a>
	// 					';
								 
								
					  	
	// 				  $EmailUser['content'] = $txt; 
	// 				  $EmailUser['subject'] =  'Admincopy: New Service Booked (Via JOBCARD)  form Automoss |  BOOKING ID:'.$bid;
	// 				  $EmailUser['to_email'] = 'melokanath@gmail.com';				     
	// 				  $pp = $this->sendemail($EmailUser); 


	// 				  $EmailUser['subject'] =  'Admincopy: New Service Booked (Via JOBCARD)  form Automoss |  BOOKING ID:'.$bid;
	// 				  $EmailUser['to_email'] = $this->common->email;				     
	// 				  $pp = $this->sendemail($EmailUser);



	// 				  $EmailUser['subject'] =  $cust_info->fname.' Your Service Booked (Via JOBCARD) form Automoss |  BOOKING ID:'.$bid;
	// 				  $EmailUser['to_email'] = $cust_info->email;				     
	// 				  $pp = $this->sendemail($EmailUser);



	// 				  $EmailUser['subject'] =  $cust_info->fname.' has booked a Service (Via JOBCARD)  form Automoss |  BOOKING ID:'.$bid;
	// 				  $EmailUser['to_email'] = $garage_info->email;				     
	// 				  $pp = $this->sendemail($EmailUser); 





	// 		 	///////////////EMAIL:::::




	// 		}
	// 		 else
	// 		{
	// 		 	$smsg= $rr->message;
	// 		 	$typ='error';
	// 		}
	// 		$this->session->set_flashdata($typ,$smsg);
	// 		redirect(base_url("customer/booking_list/"));  




	// 	}


		 
	// 	$this->data['car_man'] = $car_man = $this->db->query('select * from car_manufacturer WHERE status = 1')->result(); 
	// 	$this->data['car_model'] = $car_model = $this->db->query('select * from car_model WHERE status = 1')->result(); 
	// 	$this->data['fuel_type'] = $fuel_type = $this->db->query('select * from fuel_type WHERE status = 1')->result(); 

		 

		 
	// 	$this->load->view('customer/award',$this->data);
	// }

	public function awardbid($bidid=''){
		$this->data['myid'] = $this->myid = $myid = $_SESSION['id'];
		$this->data['bid'] = $bid = $this->db->query('SELECT *  from job_card_bids WHERE bid_id="'.$bidid.'"')->row(); 
		$this->data['jobcard'] = $jobcard = $this->db->query('SELECT *  from job_card WHERE id="'.$bid->job_card_id.'"')->row();  

		$this->data['garage_info'] =  $garage_info = $this->db->query('select * from garage_mst WHERE id='.$bid->garage_id)->row(); 
		$this->data['cust_info'] =  $cust_info = $this->db->query('select * from customer WHERE id='.$jobcard->cust_id)->row(); 





		if($_POST){
			$data = $_POST;
			$data['booking_id'] = $booking_id = random_string('alnum', 16); 
			$data['cust_id'] = $jobcard->cust_id; 
			$data['garage_id'] = $bid->garage_id; 
			$data['is_job_card'] = 1; 
			$data['job_card_id'] = $bid->job_card_id;

			$data['quote_price'] = $bid->price; 

			$data['cust_name'] = $cust_info->fname; 
			$data['cust_phone'] = $cust_info->phone; 
			$data['cust_email'] = $cust_info->email; 

			$data['garage_name'] = $garage_info->garage_name; 
			$data['garage_email'] = $garage_info->garage_email; 
			$data['garage_phone'] = $garage_info->garage_phone; 
			$data['garage_lat'] = $garage_info->garage_lat; 
			$data['user_typ'] = 'Customer'; 
			$data['user_typ'] = $jobcard->cust_id; 


			$data['car_manufacturer_id'] = $jobcard->car_manufacturer_id; 
			$data['car_model_id'] = $jobcard->car_model_id; 
			$data['car_fuel_type_id'] = $jobcard->car_fuel_type_id; 

			$data['cust_address'] = $jobcard->cust_address;  
			$data['cust_lat'] = $jobcard->cust_lat;  
			$data['cust_lon'] = $jobcard->cust_lon;   








			/////////QR CODE=======
				 $b_link = base_url("bookingsuccess/".$booking_id);
	        	 $rttt = $this->generate_qrcode($b_link,$booking_id);  
	        	 $data['qrcode'] = $qr =  base_url().$rttt['file'];
			/////////QR CODE=======

	        	 $data['job_close_otp'] = $job_close_otp = rand(100000,999999); 

			//print_result($data);  exit;

	       $this->db->query('UPDATE job_card_bids SET is_awarded = 1 WHERE id='.$bid->id);  
	      


			$r = $this->db->insert('booking_mst',$data);
			if($rr)
			{
			 	$smsg= "Data created Successfully";
			 	$typ='success';

			 	


			 	///////////////EMAIL:::::
						$txt='Hi Team,<br>
						We have a Service Booked (Via JOBCARD)  in AUTOMOSS :<br> <br> 
						BOOKING ID: '.$bid.'<br> <br>
						<b>Find booking details Below:</b>
						<img src="'.$qr.'" /><br> 
						or Click Below Link: <br> 
						<a style=" padding: 8px 20px; color:#fff; background: #c23200; text-align:center; font-weight:bold; text-decoration:none; font-size: 22px; " href="'.$b_link.'">Booking Details</a>
						';
								 
								
					  	
					  $EmailUser['content'] = $txt; 
					  $EmailUser['subject'] =  'Admincopy: New Service Booked (Via JOBCARD)  form Automoss |  BOOKING ID:'.$bid;
					  $EmailUser['to_email'] = 'melokanath@gmail.com';				     
					  $pp = $this->sendemail($EmailUser); 


					  $EmailUser['subject'] =  'Admincopy: New Service Booked (Via JOBCARD)  form Automoss |  BOOKING ID:'.$bid;
					  $EmailUser['to_email'] = $this->common->email;				     
					  $pp = $this->sendemail($EmailUser);



					  $EmailUser['subject'] =  $cust_info->fname.' Your Service Booked (Via JOBCARD) form Automoss |  BOOKING ID:'.$bid;
					  $EmailUser['to_email'] = $cust_info->email;				     
					  $pp = $this->sendemail($EmailUser);



					  $EmailUser['subject'] =  $cust_info->fname.' has booked a Service (Via JOBCARD)  form Automoss |  BOOKING ID:'.$bid;
					  $EmailUser['to_email'] = $garage_info->email;				     
					  $pp = $this->sendemail($EmailUser); 





			 	///////////////EMAIL:::::




			}
			 else
			{
			 	$smsg= $rr->message;
			 	$typ='error';
			}
			$this->session->set_flashdata($typ,$smsg);
			redirect(base_url("customer/booking_list/"));  




		}


		 
		$this->data['car_man'] = $car_man = $this->db->query('select * from car_manufacturer WHERE status = 1')->result(); 
		$this->data['car_model'] = $car_model = $this->db->query('select * from car_model WHERE status = 1')->result(); 
		$this->data['fuel_type'] = $fuel_type = $this->db->query('select * from fuel_type WHERE status = 1')->result(); 

		 

		 
		$this->load->view('customer/award2',$this->data);
	}





	public function transaction(){
		 
		$this->load->view('customer/transaction',$this->data);
	}
	public function sellyourcar(){

		$this->data['myid'] = $this->myid = $myid = $_SESSION['id'];
		$this->data['car'] = $car = $this->db->query('SELECT *, 
				(select count(*)as num from used_car_leads WHERE car_id = carsell_lead.id ) as cc_count 
			from carsell_lead WHERE status in (1,2) AND  customer_id='.$myid)->result(); 

// 		$this->data['car'] = $car = $this->db->query('
//     SELECT 
//         carsell_lead.*, 
//         COUNT(used_car_leads.id) AS lead_count
//     FROM carsell_lead
//     LEFT JOIN used_car_leads ON used_car_leads.car_id = carsell_lead.id
//     WHERE carsell_lead.status IN (1, 2) 
//     AND carsell_lead.customer_id = ' . $myid . '
//     GROUP BY carsell_lead.id
// ')->result_array();



		 


 



		// print_result($car);exit;

		 
		$this->load->view('customer/sellyourcar',$this->data);
	}

	public function carlists(){		 
		$this->data['carz'] = $carz = $this->db->query('SELECT * , (select count(*) as num from used_car_leads WHERE car_id = used_car.id) as lead_count


			from used_car where user_typ="Customer"  AND created_by= '.$this->myid)->result(); 






		// print_result($carz);exit;
		$this->data['mypack'] = $mypack = $this->db->query('SELECT * FROM `carsell_package` WHERE id = (SELECT carsell_package_id FROM `customer` WHERE id="'.$this->myid.'")')->row();


		// YOU ARE in *FOREEVER FREE* plan . You can add up to *2* cars. <a>Upgrade</a>


 



		 
		$this->load->view('customer/carlist2',$this->data);
	}

	public function addcar(){
		// $this->data['manufacturer'] = $gg = curl_post_token(api_link . 'master/manufacturer/list', []);
		// $this->data['model'] = $gg = curl_post_token(api_link . 'master/model/list', []);
		$this->data['fuel'] = $ss = curl_post_token(api_link . 'master/fuel/list', []);
		$this->data['city'] = $ss = curl_post_token(api_link . 'master/city/list', []);


		$this->data['carz'] = $carz = $this->db->query('SELECT * from used_car where user_typ="Customer"  AND created_by= '.$this->myid)->result(); 		 
		$this->data['mypack'] = $mypack = $this->db->query('SELECT * FROM `carsell_package` WHERE id = (SELECT carsell_package_id FROM `customer` WHERE id="'.$this->myid.'")')->row();

		$cs_plan_lnk = base_url('Customer/upgrade_csplan');		
		$this->data['planerror'] = '';
		if(mycount($carz)>= $mypack->listing_count){
			$this->data['planerror'] = 'YOU ARE in '.$mypack->name.' plan . You can add up to '.$mypack->listing_count.' cars. <a href="'.$cs_plan_lnk.'">Upgrade</a>';
		}



		if($_POST)
		{
			$data = $this->input->post();

			 
			$data['user_typ'] = 'Customer';
			$data['car_slno'] = random_string('alnum', 16); 
        	$data['created_by'] = $this->myid;

			 

		
			
			if(isset($data['thumb_img'])  && $data['thumb_img'] !=NULL){	
				
				 
				/////
				unset($data['slim']);
				unset($data['thumb_img']);
				$th = Slim::getImages('thumb_img');
				$name_th = $th[0]['input']['name']; 
				$data_th = $th[0]['output']['data'];
				$file_th = Slim::saveFile($data_th, $name_th, 'uploads/usedcar');
				$data['thumb'] =base_url('uploads/usedcar/').$file_th['name'];

			}

			////////////pic1

			if(isset($data['thumb_img1']) && $data['thumb_img1'] !=NULL ){
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

			if(isset($data['thumb_img2']) && $data['thumb_img2'] !=NULL){
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

			if(isset($data['thumb_img3']) && $data['thumb_img3'] !=NULL ){
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

			if(isset($data['thumb_img4']) && $data['thumb_img4'] !=NULL ){
				unset($data['slim']);
				unset($data['thumb_img4']);	
				/////
				$th4 = Slim::getImages('thumb_img4');
				$name_th4 = $th4[0]['input']['name']; 
				$data_th4 = $th4[0]['output']['data'];
				$file_th4 = Slim::saveFile($data_th4, $name_th4, 'uploads/usedcar');
				$data['pic4'] =base_url('uploads/usedcar/').$file_th4['name'];
			}

			unset($data['thumb_img'],$data['thumb_img1'],$data['thumb_img2'],$data['thumb_img3'],$data['thumb_img4']);

			// print_result($data);exit; 

			$r = $this->db->insert('used_car',$data);		  
			

			if($r)
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
			redirect(base_url("customer/carlists/"));
		}		 

		$this->data['btn'] = 'Add';
		 



		 
		$this->load->view('customer/addcar',$this->data);
	}


	public function editcar($car_slno) {
		   
		    $this->data['info'] = $info = $this->db->query('SELECT * FROM used_car WHERE car_slno = "' . $car_slno . '" AND created_by = ' . $this->myid)->row();

		     
		    // $this->data['manufacturer'] = $gg = curl_post_token(api_link . 'master/manufacturer/list', []);
		    // $this->data['model'] = $gg = curl_post_token(api_link . 'master/model/list', []);
		    $this->data['fuel'] = $ss = curl_post_token(api_link . 'master/fuel/list', []);
		    $this->data['city'] = $ss = curl_post_token(api_link . 'master/city/list', []);

		   
		    $this->data['carz'] = $carz = $this->db->query('SELECT * from used_car where user_typ="Customer" AND created_by= ' . $this->myid)->result(); 

		   
		    $this->data['mypack'] = $mypack = $this->db->query('SELECT * FROM `carsell_package` WHERE id = (SELECT carsell_package_id FROM `customer` WHERE id="' . $this->myid . '")')->row();

	     
		    $cs_plan_lnk = base_url('Customer/upgrade_csplan');        
		    $this->data['planerror'] = '';
		    if (mycount($carz) >= $mypack->listing_count) {
		        $this->data['planerror'] = 'YOU ARE in ' . $mypack->name . ' plan. You can add up to ' . $mypack->listing_count . ' cars. <a href="' . $cs_plan_lnk . '">Upgrade</a>';
		    }

		 
		    if ($_POST) {
		        $data = $this->input->post();
		        unset($data['slim']);
		        unset($data['thumb_img']);
		        unset($data['thumb_img1']);
					unset($data['thumb_img2']);
					unset($data['thumb_img3']);
					unset($data['thumb_img4']);

		 
		        $th = Slim::getImages('thumb_img');
		        $name_th = $th[0]['input']['name']; 
		        $data_th = $th[0]['output']['data'];
		        $file_th = Slim::saveFile($data_th, $name_th, 'uploads/usedcar');
		        $data['thumb'] = base_url('uploads/usedcar/') . $file_th['name'];

		        /////////////////////////pic1
					 $th1 = Slim::getImages('thumb_img1');
				    if (!empty($th1) && isset($th1[0]['input']['name'])) {
				        $name_th1 = $th1[0]['input']['name'];
				        if ($name_th1 != $info->pic1) {
				            $data_th1 = $th1[0]['output']['data'];
				            $file_th1 = Slim::saveFile($data_th1, $name_th1, 'uploads/usedcar');
				            $data['pic1'] = base_url('uploads/usedcar/') . $file_th1['name'];
				        }
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
				    }


				    // print_result($data);exit;

		 
		        $this->db->where('car_slno', $car_slno);
		        $m = $this->db->update('used_car', $data);
		        $this->session->set_flashdata('success', 'Record Updated Successfully');    

		 
		        if ($m) {
		            $smsg = "Data updated successfully";
		            $typ = 'success';
		        } else {
		            $smsg = 'Failed to update data';
		            $typ = 'error';
		        }
		        $this->session->set_flashdata($typ, $smsg);
		        redirect(base_url("customer/carlists/"));
		    }
		 
		    $this->data['btn'] = 'update';

		    // Load the edit car view with the car data
		    $this->load->view('customer/addcar', $this->data);
	}



public function carinfo($car_slno) {
   
    
	$this->data['info'] = $info = $this->db->query('SELECT * FROM used_car WHERE car_slno = "' . $car_slno . '" AND created_by = ' . $this->myid)->row();
	$this->data['car_lead'] = $car_lead = $this->db->query('SELECT * FROM used_car_leads WHERE car_id = "'.$info->id.'" ORDER BY id DESC '  )->result();

	// print_result($car_lead);exit;



	 
    
    $this->load->view('customer/carinfo', $this->data);
}


public function chat($id){

   $did = spl_decode($id);

   $this->data['cc'] = $cc = $this->db->query('SELECT * FROM `used_car_leads_chat` WHERE car_leads_id = '.$did )->result();
    // print_result($cc);exit;

   if($_POST)
		{
			$data = $this->input->post();

		 	$data['car_leads_id'] = $did;
		 	$data['chat_by'] = $this->myid;

			// print_result($data);exit;
 
			$r = $this->db->insert('used_car_leads_chat',$data);
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
			redirect(base_url("customer/chat/{$id}"));

		}
	 
    
    $this->load->view('customer/chat', $this->data);
}


public function mychat(){
 
	 
    
    $this->load->view('customer/mychat', $this->data);
}
public function reviews(){
	$myid =  $this->myid;
    $this->data['rvw'] = $rvw = $this->db->query('SELECT *,

    		CASE 
		        WHEN review_mst.typ = "P" THEN (SELECT CONCAT("https://automoss.in/customer/givereview/",booking_id) FROM booking_mst WHERE id = review_mst.typ_id)
		        WHEN review_mst.typ = "S" THEN (SELECT CONCAT("https://automoss.in/customer/givereview/",booking_id) FROM booking_mst WHERE id = review_mst.typ_id)
		        WHEN review_mst.typ = "O" THEN (SELECT CONCAT("https://automoss.in/customer/givereview/",booking_id) FROM booking_mst WHERE id = review_mst.typ_id)
		        
		        ELSE NULL
		    END AS link 


    	FROM review_mst WHERE cust_id = '.$myid,' ORDER BY id DESC' )->result();






   

    
    $this->load->view('customer/reviews', $this->data);
}



































	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'),'refresh');
	}





	////////////////////////////////V2 DESIGN graveyard:======================
	/////////////////////////////////////////////////////////////////////////

	public function dashboard(){  /// V2 Design
		$myid =  $this->myid;		 
		$this->data['bd'] = $bd = $this->db->query('SELECT count(*) as num FROM booking_mst WHERE status = 1 and  cust_id='.$myid)->row();	 


		$this->load->view('customer/dashboard',$this->data);
	}





























}